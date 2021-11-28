<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan Online</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>
<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_perpustakaan">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border">
                        <div class="card-body">
                            <form action="{{ route('perpustakaan.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-bold">TANGGAL</label>
                                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan Tanggal Berkunjung Anda">
                                    @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">NAMA</label>
                                    <input type="name" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('judul') }}" placeholder="Masukkan Nama Anda">
                                    @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <label class="font-weight-bold">KEPERLUAN</label>
                                    <textarea class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" name="keperluan" rows="5" placeholder="Masukkan Anda Berkunjung">{{ old('keperluan') }}</textarea>
                                    @error('keperluan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="font-weight-bold">BUKTI BERKUNJUNG</label>
                                    <input type="file" class="form-control @error('buktiBerkunjung') is-invalid @enderror" name="buktiBerkunjung">
                                    @error('buktiBerkunjung')
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
            .create( document.querySelector( '#keperluan' ) )
            .catch( error => {
                console.error( error );
            } );
</script>
</body>
</html>
