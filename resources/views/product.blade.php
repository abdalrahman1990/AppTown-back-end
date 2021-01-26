
@extends('layouts.app')

@section('content')

    <div class="full" style="background-image:url('http://localhost:8000/img/' );
    -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;width: 100% ; height: 100%">

        <div class="container">
        <h1 class="text-center" style="color:#000000">App Town Share your own apps</h1>

        <!--  image left  -->
        <div class="row">
            <div class="col-md-6">

                <img src="http://localhost:8000/img/story-8.gif" alt="" class="w-100" />
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">

                <div class="row align-items-center h-100">
                    <div class="col">
                        <h1 class="display-3" style="color:#000000">Best free and paid app shopping platform</h1>
                        <p class="lead" style="color:#000000">Discover and search apps by category or name and share them.
                            <br /><br />

                            <a href="http://localhost:8081/#/home" class="btn btn-outline-primary">Learn More</a>
                            <a href="http://localhost:8081/#/maps" class="btn btn-outline-primary">Contact us</a>

                        </p>

                    </div>
                </div>

            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->

        <!--  image right  -->
    </div>


</div>

@endsection

