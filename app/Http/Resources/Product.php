<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{

    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'tagline' => $this->tagline,
            'icon' => $this->icon,
            'description' => $this->description,
            'price' => $this->price,
            'website' => $this->website,
            'media1' => $this->media1,
            'media2' => $this->media2,
            'file' => $this->file,
           // $status = 200,
           // header("Access-Control-Allow-Origin: *"),
//            header("Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization"),
//            header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS'),
//            header('Origin, X-Requested-With, Content-Type, Accept, Authorization'),
        ];
    }
}
