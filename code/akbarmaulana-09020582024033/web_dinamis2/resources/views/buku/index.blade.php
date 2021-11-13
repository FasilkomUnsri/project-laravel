<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
  </head>
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_buku">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <a href="" class="btn btn-md btn-success mb-3">Tambah Judul Buku</a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">GAMBAR</th>
                        <th scope="col">JUDUL</th>
                        <th scope="col">ISI</th>
                        <th scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($bukus as $buku)
                     <tr>
                      <td class="text-center">
                        <img src="{{ Storage::url('public/bukus/').$buku->gambar }}" class="rounded" style="width: 150px">
                      </td>
                      <td>{{ $buku->judul }}</td>
                      <td>{!! $buku->isi !!}</td>
                      <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                          <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                      Data buku belum Tersedia.
                    </div>
                    @endforelse
                  </tbody>
                </table>
                 {{ $bukus->links() }}
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
  <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.min.css') }}"></script>
  <script src="{{ asset('toastr/toastr.min.css') }}"></script>
  <script>
    @if(session()->has('success'))
    toastr.success('{{ session('success') }}', 'BERHASIL!');
    @elseif(session()->has('error'))
    toastr.error('{{ session('error') }}', 'GAGAL!');
    @endif
  </script>
</body>
</html>
