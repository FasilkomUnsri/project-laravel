<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <title>Artikel</title>
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="../bootstrap/css/boostrapstyle.css">
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">


<!--     <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"> -->
</head>
<body class="d-flex flex-column h-100">
<div class="main-w3layouts wrapper">

   <main class="flex-shrink-0">
      <div class="container mt-5">
        <div class="main-w3layouts wrapper">
        <div class="main-agileinfo">
			<div class="agileits-top">


        <section id="section_artikel">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
    <h1>Forum Menginput Data Mahasiswa</h1>
                               @csrf
                               
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
<!--                                 <div class="form-group mb-5">
                                    <label class="font-weight-bold">Isi</label>
                                    <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="5" placeholder="Masukkan Isi Artikel">{{ old('isi') }}</textarea>
                                    @error('isi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div> -->
                                <button type="submit" class="btn btn-dark">Simpan</button>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>
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

