@extends('layouts.auth')
@section('content')
    <div class="card p-3">
        <h4 class="card-title p-3">Login</h4>
        <div class="card-body">
            <form method="post" action="{{ route('register.do_register') }}">
                @csrf
                @include('layouts.alert')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                placeholder="Full name" required="required" autofocus>
                            <label for="floatingname">Nama</label>
                            @if ($errors->has('name'))
                                <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                placeholder="name@example.com" required="required" autofocus>
                            <label for="floatingEmail">Email address</label>
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                                placeholder="Username" required="required" autofocus>
                            <label for="floatingName">Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select name="role" class="form-control">
                                <option value="Admin">Admin</option>
                                <option value="Dosen">Dosen</option>
                                <option value="Mahasiswa">Mahasiswa</option>
                            </select>
                            <label for="floatingName">Role</label>
                            @if ($errors->has('role'))
                                <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                                placeholder="Password" required="required">
                            <label for="floatingPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password_confirmation"
                                value="{{ old('password_confirmation') }}" placeholder="Confirm Password"
                                required="required">
                            <label for="floatingConfirmPassword">Confirm Password</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="">Sudah memiliki akun? Silahkan <a href="{{ url('login') }}">login</a>
                        </p>
                        <button class="w-100 btn  btn-primary" type="submit">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
