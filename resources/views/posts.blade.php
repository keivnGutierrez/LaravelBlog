@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div>
                @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body" >
                        @if ($post->image)
                            <img src="{{$post->get_image}}" alt="imagen no encontrada" class="card-img-top ">
                        @elseif($post->iframe)
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item"> 
                                    {!!$post->iframe !!}
                                </div>

                            </div>
                        @endif
                        <h5>{{$post->title}}</h5>
                        <p>{{$post->get_excerpt}}</p>
                        <a href="{{route('post',$post)}}">Leer mas</a>
                        <br>
                        &ndash;{{$post->user->name}}
                        {{$post->created_at->format('d M Y')}}
                    </div>
                </div>
                @endforeach
                {{ $posts->links()}}
            </div>
           
               
        </div>
    </div>
</div>
@endsection
