@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div>
                
                    <h5>{{$post->title}}</h5>
                    <p>{{$post->body}}</p>
                    
                    <br>
                    &ndash;{{$post->user->name}}
                    {{$post->created_at->format('d M Y')}}
          


            </div>
           
               
        </div>
    </div>
</div>
@endsection
