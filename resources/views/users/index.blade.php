@extends('layouts.app')
@section('content')
    <div class="col-10 mt-5">
        <a class="btn btn-dark" href="{{route('users.create')}}">Create new user</a>
        <div class="col-md-12 table-responsive no-gutters">
            <table class="table table-sm table_container">
                <thead class="thead-light">
                <tr>
                    <th scope="col" colspan="3">User:</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="table-tr">
                        <td Data-label="post:" class="align-middle text-right">
                            <div class="justify-content-end">
                                <p>{{ $user->name }}</p>
                            </div>
                        </td>
                        @if ($currentUser->id == $user->id)
                            <td class="text-lg-right"><a href="{{ route('users.edit', ['id' => $user->id])}}"
                                                         class="btn btn-dark btn-sm">Edit</a>
                            </td>
                            <td class="text-lg-left">
                                <form action="{{ route('users.destroy', ['id' => $user->id])}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection