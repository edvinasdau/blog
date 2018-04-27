@extends('layouts.app')
@section('content')
    <div class="col-10 mt-5">
        <form action="{{ route('posts.update', ['posts' => $postsEdit->id])}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <div class="form-group no-gutters">
                    <label class="col control-label">Post</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="title" placeholder="Post title" value="{{ old('title' , $postsEdit->title) }}" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group no-gutters">
                    <label class="col control-label">Text</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="text" placeholder="Text" value="{{ old('text' , $postsEdit->text) }}" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection

