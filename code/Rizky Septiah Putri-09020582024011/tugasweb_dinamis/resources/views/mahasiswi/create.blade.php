<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswi
    </title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
  </head>
  <body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
      <div class="container mt-5">
        <section id="section_mahasiswi">
          <div class="row">
            <div class="col-md-12">
              <div class="card border">
                <div class="card-body">
                  <form action="{{ route('mahasiswi.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label class="font-weight-bold">GAMBAR
                      </label>
                      <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
                      @error('gambar')
                      <div class="alert alert-danger mt-2">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label class="font-weight-bold">NIM
                      </label>
                      <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM Mahasiswi">
                      @error('nim')
                      <div class="alert alert-danger mt-2">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group mb-5">
                      <label class="font-weight-bold">Prodi
                      </label>
                      <textarea class="form-control @error('prodi') is-invalid @enderror" id="prodi" name="prodi" rows="6" placeholder="Masukkan Isi Mahasiswi">{{ old('prodi') }}
                      </textarea>
                      @error('prodi')
                      <div class="alert alert-danger mt-2">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN
                    </button>
                    <button type="reset" class="btn btn-md btn-warning">RESET
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <script src="{{ asset('jquery/jquery-3.6.0.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}">
    </script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}">
    </script>
    <script>
      ClassicEditor
        .create( document.querySelector( '#isi' ) )
        .catch( error => {
        console.error( error );
      }
     );
    </script>
  </body>
</html>