<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drama Korea</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column h-100">

    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_artikel">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label class="font-weight-bold"><b>FOTO</b></label>
                                    <input type="file" class="form-control" name="gambar">
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold"><B>JUDUL DRAKOR</B></label>
                                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $artikel->judul) }}" placeholder="Masukkan Judul Drakor">

                                    @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group mb-5">
                                    <label class="font-weight-bold"><b>SINOPSIS</b></label>
                                    <textarea class="form-control @error('penjelasan') is-invalid @enderror" id="penjelasan" name="penjelasan" rows="5" placeholder="Masukkan Konten penjelasan">{{ old('penjelasan', $artikel->penjelasan) }}</textarea>

                                    @error('penjelasan')
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

<script src="../../jquery/jquery-3.6.0.min.js"></script>
<script src="../../bootstrap/js/bootstrap.min.js"></script>
<script src="../../ckeditor/ckeditor.js"></script>

<script>
   ClassicEditor
   .create( document.querySelector( '#penjelasan' ) )
   .catch( error => {
    console.error( error );
} );
</script>

</body>
</html>