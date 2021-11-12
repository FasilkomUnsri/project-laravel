<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="toastr/toastr.min.css">
  </head>
  <body>
    <nav class="navbar navbar-light bg-light ">
        <div class="container-fluid justify-content-center">
          <span class="navbar-brand mb-0 h1">Daftar Tamu</span>
        </div>
    </nav>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No. Telpon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($artikels as $artikel)
                            <tr>
                                <td>{{ $artikel->id }}</td>
                                <td>{{ $artikel->Nama }}</td>
                                <td>{{ $artikel->notlp }}</td>
                                <td>{!! $artikel->email !!}</td>
                                <td>{!! $artikel->created_at !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('artikel.destroy', $artikel->id) }}" method="POST">
                                        <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data artikel belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                     </table>
                     <a href="{{ url ('artikel/create') }}" class="btn btn-md btn-success mt-3">TAMBAH</a>
                </div>
              </div>
            </div>
    </div>
  <script src="jquery/jquery-3.6.0.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="toastr/toastr.min.js"></script>
  <script>
    @if(session()->has('success'))
    toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif(session()->has('error'))
    toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
  </script>
</body>
</html>

