@extends('layouts.app')
@section('content')
    <div class="col-10 mt-5">
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group no-gutters">
                    <label class="col control-label">Username</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="name" placeholder="Username" class="form-control" type="text">
                        </div>
                    </div>
                </div>
                <div class="form-group no-gutters">
                    <label class="col control-label">Email</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="email" placeholder="Email" class="form-control" type="email">
                        </div>
                    </div>
                </div>
                <div class="form-group no-gutters">
                    <label class="col control-label">Password</label>
                    <div class="col inputGroupContainer">
                        <div class="input-group">
                            <input name="password" placeholder="Password" class="form-control" type="password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger">Create user</button>
                </div>
            </div>
        </form>
    </div>
@endsection

