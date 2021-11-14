<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_mahasiswa">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="font-weight-bold">GAMBAR</label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">NAMA</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $mahasiswa->nama) }}" placeholder="Masukkan Nama Mahasiswa">

                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="font-weight-bold">JURUSAN</label>
                                    <textarea class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" rows="5" placeholder="Masukkan Jurusan Mahasiswa">{{ old('jurusan', $mahasiswa->jurusan) }}</textarea>

                                    @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</main>


<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>

<script>
   ClassicEditor
   .create( document.querySelector( '#jurusan' ) )
   .catch( error => {
    console.error( error );
} );
</script>

</body>
</html>