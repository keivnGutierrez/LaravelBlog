@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create') }} </div>
                    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                    <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title*</label>
                            <input type="text" name='title' class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Content*</label>
                            <textarea name="body"   rows="6" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Image</label>
                            <input type="file" name="file" >
                        </div>
                        <div class="form-group">
                            <label >Embedded content</label>
                            <textarea name="iframe" class="form-control"   rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            @csrf
                            <input type="submit" value="Save" class="btn btn-sm btn-primary">
                        </div>
                        
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection