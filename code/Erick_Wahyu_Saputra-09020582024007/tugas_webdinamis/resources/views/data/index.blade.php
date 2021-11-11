<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="toastr/toastr.min.css">
  </head>
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_data">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <a href="{{ url('data/create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA MAHASISWA</a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th width="10%" scope="col">NAMA</th>
                        <th width="10%" scope="col">NIM</th>
                        <th width="10%" scope="col">JURUSAN</th>
                        <th width="15%" scope="col">FOTO</th>
                        <th width="1%" scope="col">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($datas as $data)
                     <tr>
                      <td>{{ $data->nama }}</td>
                      <td>{{ $data->nim }}</td>
                      <td>{{ $data->jurusan }}</td>
                      <td class="text-center">
                        <img src="{{ Storage::url('public/datas/').$data->foto }}" class="rounded" style="width: 200px">
                      </td>
                      <td class="text-center">
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('data.destroy', $data->id) }}" method="POST">
                          <a href="{{ route('data.edit', $data->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                        </form>
                      </td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                      Data Mahasiswa belum Tersedia.
                    </div>
                    @endforelse
                  </tbody>
                </table>
                 {{ $datas->links() }}
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
