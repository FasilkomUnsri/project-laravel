<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css')}}">
</head>
<body class="d-flex flex-column h-100">
    <main class="container mt-5">
        <section id="section_daftar">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <a href="create.blade.php" class="btn btn-md btn-success mb-3" >Tambah Daftar</a>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">tgl_lahir</th>
                                        <th scope="col">jurusan</th>
                                        <th scope="col">fhoto</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($daftars as $daftar)
                                    <tr>
                                        <td>{{ $daftar->nama }}</td>
                                        <td>{{ $daftar->tgl_lahir}}</td>
                                        <td>{{ $daftar->jurusan}}</td>
                                        <td class="text-center">
                                            <img src="{{ Storage::url('public/daftars/').$daftar->fhoto}}" class="rounded " style="witdh: 150px">
                                        </td >
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('daftar.destroy', $daftar->id) }}" method="POST">
                                            <a href="{{ route('daftar.edit',$daftar->id )}}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('Delete')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Data Pendaftaran Belum Tersedia
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $daftars->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="{{ asset('jquery/jquery-3.6.0.min.js')}}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('toastr/toastr.min.js')}}"></script>
    
    <script>
        @if(session()->has('success'))
        toastr.success('{{session('success') }}', 'Berhasil');
        @elseif(session()->has('error'))
        toastr.error('{{session('error') }}', 'Gagal');
        @endif
    </script>
</body>
</html>