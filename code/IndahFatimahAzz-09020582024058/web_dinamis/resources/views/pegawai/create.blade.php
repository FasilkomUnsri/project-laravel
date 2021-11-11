<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    
    <title>Crud</title>
  </head>
  <body>
    <div class="container py-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h3>Tambah Data Pegawai</h3>
            <div class="card-body">
              <form action="{{ route('pegawai.store') }}" method="POST">
                  @csrf
                <div class="form-group">
                  <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
                  @error('nama')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Pegawai"></textarea>
                  @error('alamat')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <input type="date" id="tglahir" name="tglahir" class="form-control" placeholder="Tanggal Lahir">
                  @error('tglahir')
                  <div class="alert alert-danger mt-2">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-success">Tambah Data</button>
                  <button type="reset" class="btn btn-md btn-warning">RESET</button>
                </div>
              </form>
            </div>
        </div>
      </div>
  </body>
  <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="{{ asset('toastr/toastr.min.js') }}"></script>
  <script>
         ClassicEditor
                .create( document.querySelector( '#isi' ) )
                .catch( error => {
                    console.error( error );
                } );
    </script>
</html>