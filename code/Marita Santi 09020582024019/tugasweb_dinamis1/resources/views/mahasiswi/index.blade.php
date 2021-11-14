<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswi</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
  </head>
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_mahasiswi">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <a href="{{ url('mahasiswi/create') }}" class="btn btn-md btn-success mb-3">TAMBAH MAHASISWI
                  </a>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">GAMBAR
                        </th>
                        <th scope="col">NIM
                        </th>
                        <th scope="col">PRODI
                        </th>
                        <th scope="col">AKSI
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($mahasiswis as $mahasiswi)
                      <tr>
                        <td class="text-center">
                          <img src="{{ Storage::url('public/mahasiswis/').$mahasiswi->gambar }}" class="rounded" style="width: 150px">
                        </td>
                        <td>{{ $mahasiswi->nim }}
                        </td>
                        <td>{!! $mahasiswi->prodi !!}
                        </td>
                        <td class="text-center">
                          <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mahasiswi.destroy', $mahasiswi->id) }}" method="POST">
                            <a href="{{ route('mahasiswi.edit', $mahasiswi->id) }}" class="btn btn-sm btn-primary">EDIT
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">HAPUS
                            </button>
                          </form>
                        </td>
                      </tr>
                      @empty
                      <div class="alert alert-danger">
                        Data mahasiswi belum Tersedia.
                      </div>
                      @endforelse
                    </tbody>
                  </table>
                  {{ $mahasiswis->links() }}
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('toastr/toastr.min.js') }}">
    </script>
    <script>
      @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif(session()->has('error'))
      toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
    </script>
  </body>
</html>
