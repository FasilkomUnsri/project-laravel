@extends('layouts.index')
@section('content')
    <div class="bg-light p-5 rounded">
        @include('layouts.alert')
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Anda sudah login</p>
            <ul>
                <li>Nama : {{ auth()->user()->name }}</li>
                <li>Username : {{ auth()->user()->username }}</li>
                <li>Email : {{ auth()->user()->email }}</li>
                <li>Role : {{ auth()->user()->role }}</li>
            </ul>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Silahkan Login Untuk melihat data</p>
        @endguest
    </div>
@endsection
