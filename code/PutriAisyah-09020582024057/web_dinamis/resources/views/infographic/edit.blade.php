<!doctype html>
<html lang="en" class="h-100">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Artikel</title>
        <link rel="stylesheet" href="{{  asset('bootstrap/css/bootstrap.min.css') }}"> 
    </head>
    <body class="d-flex flex-column h-100" style="background-color:#AAA492;">
        <main class="flex-shrink-0">
        <div class="container mt-5">
            <section id="section_infographic">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card border-0 shadow rounded">
                            <div class="card-body">
                                <form action="{{ route('infographic.update', $infographic->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label class="font-weight-bold">Gambar</label>
                                        <input type="file" class="form-control" name="gambar">
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Judul</label>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $infographic->judul) }}" placeholder="Masukkan judul infografis">

                                        @error('judul')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">Isi</label>
                                        <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" name="isi" rows="5" placeholder="Masukkan isi dari infograpis">{{ old('isi', $infographic->isi) }}</textarea>

                                        @error('isi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-5">
                                        <label class="font-weight-bold">Karya</label>
                                        <textarea class="form-control @error('karya') is-invalid @enderror" id="karya" name="karya" rows="5" placeholder="Masukkan pembuat karya infografis ini">{{ old('karya', $infographic->karya) }}</textarea>

                                        @error('karya')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-md btn-primary">Update</button>
                                    <button type="reset" class="btn btn-md btn-danger">Reset</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        </main>
        <script src="{{  asset('jquery/jquery-3.6.0.min.js') }}"></script> 
        <script src="{{  asset('bootstrap/js/bootstrap.min.js') }}"></script> 
        <script src="{{  asset('ckeditor/ckeditor.js') }}"></script> 
        <script>
        ClassicEditor
        .create( document.querySelector( '#isi' ) )
        .create( document.querySelector( '#karya' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
</body>
</html>