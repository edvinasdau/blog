@extends('layouts.app')
@section('content')
    <div class="col-10 mt-5">
        <a class="btn btn-dark" href="{{route('posts.create')}}">Create new post</a>
        <div class="col-md-12 table-responsive no-gutters">
            <table class="table table-sm table_container">
                <thead class="thead-light">
                <tr>
                    <th scope="col" colspan="3">Post:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr class="table-tr">
                        <td Data-label="post:" class="align-middle text-right">
                            <div class="justify-content-end">
                                <p>{{ $post->title }}</p>
                            </div>
                        </td>
                        <td class="text-lg-right"><a href="{{ route('posts.edit', ['id' => $post->id])}}" class="btn btn-dark btn-sm">Edit</a>
                        </td>
                        <td class="text-lg-left">
                            <form action="{{ route('posts.destroy', ['id' => $post->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection