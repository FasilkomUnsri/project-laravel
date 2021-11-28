<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_artikel">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <form action="{{ route('daftar.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label class="font-weight-bold">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $daftar->nama) }}" placeholder="Masukkan Nama Anda">

                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Tanggal Lahir</label>
                                    <input type="text" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir', $daftar->tgl_lahir) }}" placeholder="Masukkan Tanggal Lahir Anda">

                                    @error('tgl_lahir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="font-weight-bold">jurusan</label>
                                    <textarea class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" rows="5" placeholder="Masukkan jurusan Anda">{{ old('jurusan', $daftar->jurusan) }}</textarea>

                                    @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Fhoto</label>
                                    <input type="file" class="form-control" name="fhoto">
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


<script src="{{ asset('jquery/jquery-3.6.0.min.js')}}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>

<script>
   ClassicEditor
   .create( document.querySelector( '#jurusan' ) )
   .catch( error => {
    console.error( error );
} );
</script>

</body>
</html>
