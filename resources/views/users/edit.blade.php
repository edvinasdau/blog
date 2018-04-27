@extends('layouts.app')
@section('content')
    <div class="col-10 mt-5">
        <form action="{{ route('users.update', ['users' => $usersEdit->id])}}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <div class="form-group no-gutters">
                    <label class="col control-label">User</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="name" placeholder="user name" value="{{ old('name' , $usersEdit->name) }}" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group no-gutters">
                    <label class="col control-label">Email</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="email" placeholder="Email" value="{{ old('email' , $usersEdit->email) }}" class="form-control" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-group no-gutters">
                    <label class="col control-label">Password</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="password" placeholder="password" value="{{ old('password' , $usersEdit->password) }}" class="form-control" type="password">
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

