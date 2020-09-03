@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Articles') }} 
                
                    <a href="{{route('posts.create')}}" class="btn btn-sm btn-primary float-right">
                        Crear
                    </a>
                
                </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if (empty($posts[0]))
                        {{-- @dd($posts) --}}
                      <h6>You don´t have posts</h6>  
                    @else
                    
                   
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th colspam="2">&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>
                                            <a href="{{route('posts.edit',$post)}}" class="btn btn-sm btn-primary">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{route('posts.destroy',$post)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" >
                                                    Elimiar
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection