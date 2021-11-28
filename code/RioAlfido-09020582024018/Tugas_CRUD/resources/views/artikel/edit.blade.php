<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>
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
                                    <label class="font-weight-bold">Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">NIM</label>
                                    <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim', $artikel->nim) }}" placeholder="Masukkan NIM Mahasiswa">

                                    @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $artikel->nama) }}" placeholder="Masukkan Nama Mahasiswa">

                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">Prodi</label>
                                    <input type="text" class="form-control @error('prodi') is-invalid @enderror" name="prodi" value="{{ old('prodi', $artikel->prodi) }}" placeholder="Masukkan NIM Mahasiswa">

                                    @error('prodi')
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
   .create( document.querySelector( 'diisi jika ingin menggunakan ckeditor menggunkan class id contoh "#isi"' ) )
   .catch( error => {
    console.error( error );
} );
</script>

</body>
</html>
