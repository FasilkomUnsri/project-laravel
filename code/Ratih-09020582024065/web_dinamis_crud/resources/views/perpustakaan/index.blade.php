<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="toastr/toastr.min.css">
  </head>
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_perpustakaan">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <a href="" class="btn btn-md btn-success mb-3">TAMBAH DAFTAR PENGUNJUNG</a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">TANGGAL</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">KEPERLUAN</th>
                        <th scope="col">BUKTIBERKUNJUNG</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($perpustakaans as $perpustakaan)
                     <tr>
                      <td>{{ $perpustakaan->tanggal }}</td>
                      <td>{{ $perpustakaan->nama }}</td>
                      <td>{!! $perpustakaan->keperluan !!}</td>
                      <td class="text-center">
                         <img src="{{ Storage::url('public/perpustakaans/').$perpustakaan->buktiBerkunjung }}" class="rounded" style="width: 150px">
                       </td>
                      <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('perpustakaan.destroy', $perpustakaan->id) }}" method="POST">
                          <a href="{{ route('perpustakaan.edit', $perpustakaan->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                      Data pengunjung belum Tersedia.
                    </div>
                    @endforelse
                  </tbody>
                </table>
                 {{ $perpustakaans->links() }}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
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
