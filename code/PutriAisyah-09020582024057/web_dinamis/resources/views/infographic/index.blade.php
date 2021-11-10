<!doctype html>
 <html lang="en" class="h-100">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Infografis</title>
        <link rel="stylesheet" href="{{  asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{  asset('toastr/toastr.min.css') }}">
    </head>
    <body class="d-flex flex-column h-100" style="background-color:#AAA492;">
        <main class="flex-shrink-0">
            <div class="container mt-5">
                <section id="section_infographic">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            <h3>Putri Aisyah Daily</h3>
                            <h1>Data Infografis Terbaik Tahun 2021</h1>
                            <a href="{{ url('infographic/create')}}" class="btn btn-md btn-dark mb-3">Tambah Infografis</a>
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Isi</th>
                                    <th scope="col">Karya</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($infographics as $infographic)
                                <tr>
                                    <td class="text-center">
                                        <img src="{{ Storage::url('public/infographics/').$infographic->gambar }}" class="rounded" style="width: 150px">
                                    </td>

                                    <td>{{ $infographic->judul }}</td>
                                    <td>{!! $infographic->isi !!}</td>
                                    <td>{!! $infographic->karya !!}</td>

                                    <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('infographic.destroy', $infographic->id) }}" method="POST">
                                        <a href="{{ route('infographic.edit', $infographic->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-secondary">
                                Data infografik belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                            </table>
                            {{ $infographics->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
        </main>
        <script src="{{  asset('jquery/jquery-3.6.0.min.js') }}"></script> 
        <script src="{{  asset('bootstrap/js/bootstrap.min.js') }}"></script> 
        <script src="{{  asset('toastr/toastr.min.js') }}"></script>
        <script>
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
        </script>
	</body>
</html>
