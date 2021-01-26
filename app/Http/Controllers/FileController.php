<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class FileController extends Controller
{

    public function index()
    {
        $files = File::orderBy('created_at','DESC')->paginate(30);
        return view('file.index', ['files' => $files]);
    }


    public function create()
    {
        return view('file.dropzone');
    }

    public function dropzone(Request $request){
        $file = $request->file('file');
        File::create([
            'title' => $file->getClientOriginalName(),
            'description' => 'Upload with dropzone.js',
            'path' => $file->store('public/storage')
        ]);
    }


    public function store(Request $request)
    {
        $files = $request->file('file');
        foreach ($files as $file) {
            File::create([
                'title' => $file->getClientOriginalName(),
                'description' => '',
                'path' => $file->store('public/storage')
            ]);
        }
        return redirect('/file')->with('success','File telah diupload');
    }


    public function show($id)
    {
        $dl = File::find($id);
        return Storage::download($dl->path, $dl->title);
    }


    public function edit($id)
    {
        $fl = File::find($id);
        $data = array('title' => $fl->title, 'path' => $fl->path);
        Mail::send('emails.attachment', $data, function($message) use($fl){
            $message->to('abodeabode9001@gmail.com', 'abode')->subject('Laravel file attachment and embed');
            $message->attach(storage_path('app/'.$fl->path));
            $message->from('abodeabode9001@gmail.com', 'abode');
        });
        return redirect('/file')->with('success','File attachment has been sent to your email');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $del = File::find($id);
        Storage::delete($del->path);
        $del->delete();
        return redirect('/file');
    }
}
