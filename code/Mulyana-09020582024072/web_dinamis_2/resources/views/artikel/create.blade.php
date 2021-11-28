<!doctype html>
 <html lang="en" class="h-100">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artikel</title>
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
   <div class="container mt-5">
    <section id="section_artikel">
      <div class="row">
        <div class="col-md-12">
          <div class="card border">
            <div class="card-body">
              <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label class="font-weight-bold">Foto</label>
                  <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                  @error('gambar')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label class="font-weight-bold">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Judul Artikel">
                  @error('nama')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                      <label class="font-weight-bold">NIM</label>
                      <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan Judul Artikel">
                      @error('nim')
                      <div class="alert alert-danger mt-2">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                                 <div class="form-group">
                          <label class="font-weight-bold">Jurusan</label>
                          <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukkan Judul Artikel">
                          @error('jurusan')
                          <div class="alert alert-danger mt-2">
                            {{ $message }}
                          </div>
                          @enderror
                        </div>
                                <div class="form-group">
                              <label class="font-weight-bold">Email</label>
                              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Judul Artikel">
                              @error('email')
                              <div class="alert alert-danger mt-2">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</main>
<script src="../jquery/jquery-3.6.0.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../ckeditor/ckeditor.js"></script>
<script>
  ClassicEditor
      .create( document.querySelector( '#isi' ) )
      .catch( error => {
        console.error( error );
      } );
</script>
</body>
</html>
