<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>
    <link rel="stylesheet" href="../../bootstrap/css/boostrapstyle.css">
</head>
<body class="d-flex flex-column h-100">
    <h1>EDIT DATA</h1>

      <main class="flex-shrink-0">
      <div class="container mt-5">
        <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
			<div class="agileits-top">
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
                                <h2>Nama</h2>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukan Nama Anda">
                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                <h2>NIM</h2>
                                    <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukan NIM Anda">
                                    @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                              <div class="form-group">
                                <h2>Jurusan</h2>
                                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ old('jurusan') }}" placeholder="Masukan Jurusan Anda">
                                    @error('jurusan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="gender">
                                    <h2>Jenis Kelamin</h2>
<!--                                     <label class="font-weight-bold">GENDER</label> -->
                                    <input type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="Laki-laki"> Laki-laki<br>
                                    <input type="radio" class="form-control @error('gender') is-invalid @enderror" name="gender" value="Perempuan"> Perempuan<br>
<!--                                     <input type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" placeholder="Masukkan Judul Artikel"> -->
                                    @error('gender')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">Foto Anda</label>
                                    <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                                    @error('gambar')
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
   .create( document.querySelector( '#isi' ) )
   .catch( error => {
    console.error( error );
} );
</script>

</body>
</html>
