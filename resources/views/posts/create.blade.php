@extends('layouts.app')
@section('content')
    <div class="col-10 mt-5">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group no-gutters">
                    <label class="col control-label">Post</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="title" placeholder="Post title" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group no-gutters">
                    <label class="col control-label">Text</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="text" placeholder="Text" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection

