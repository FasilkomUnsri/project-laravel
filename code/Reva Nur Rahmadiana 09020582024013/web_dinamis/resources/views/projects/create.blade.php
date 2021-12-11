@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center" style="text-align: center;" >
                <h2>Tambah Data Buku</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('projects.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <strong>Nama Buku:</strong>
                    <input type="text" class="form-control" name="nama_buku" placeholder="Nama Buku">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Penulis:</strong>
                    <input type="text" name="nama_penulis" class="form-control" placeholder="Nama Penulis">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:70px" name="deskripsi"
                        placeholder="Deskripsi"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lokasi: </strong>
                            <select class="form-control" name="lokasi" style="width:100px" required="">
                                <option value=""></option>
                                <option value="rak1">Rak 1</option>
                                <option value="rak2">Rak 2</option>
                                <option value="rak3">Rak 3</option>
                            </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga:</strong>
                    <input type="number" name="harga" class="form-control" placeholder="Harga">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
