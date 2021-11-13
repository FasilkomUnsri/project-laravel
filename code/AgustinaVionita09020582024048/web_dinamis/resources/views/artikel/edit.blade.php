<!doctype html>
  <html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Artikel</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
                                        <input type="text" class="form-control  @error('Nama') is-invalid @enderror" name="Nama" value="{{ old('Nama', $artikel->Nama) }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    @error('Nama')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}         
                                        </div>
                                    @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">No Tlp</span>
                                        <input type="text" class="form-control  @error('notlp') is-invalid @enderror" name="notlp" value="{{ old('notlp', $artikel->notlp) }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    @error('notlp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}         
                                    </div>
                                    @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="inputGroup-sizing-default">E-mail</span>
                                        <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email', $artikel->email) }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    @error('email')
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
