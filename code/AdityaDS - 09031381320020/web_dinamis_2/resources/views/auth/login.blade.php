@extends('layouts.auth')
@section('content')
    <div class="card p-3">
        <h4 class="card-title p-3">Login</h4>
        <div class="card-body">
            <form method="post" action="{{ route('login.do_login') }}">
                @csrf
                @include('layouts.alert')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="forUsername" value="{{ old('username') }}"
                                required placeholder="Email / Username" name="username">
                            <label for="forUsername">Email / Username</label>
                            @if ($errors->has('username'))
                                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="forPassword" value="{{ old('password') }}"
                                required placeholder="Password" name="password">
                            <label for="forPassword">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p class="">Sudah memiliki akun? Silahkan <a href="{{ url('register') }}">daftar</a>
                        </p>
                        <button class="w-100 btn  btn-primary" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
