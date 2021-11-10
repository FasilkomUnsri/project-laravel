<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('toastr/toastr.min.css') }}">
    
    <title>Crud M Taufik Qurrahman</title>
  </head>
  <body>
    <div class="container py-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h3>Form Data Pegawai</h3>
            <table class="table table-dark table-hover">
                <tr>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Tanggal Lahir</td>
                    <td class="text-center">Opsi</td>
                </tr>
                @forelse ($pegawais as $pegawai)
                <tr class="table-primary">
                    <td>{{ $pegawai->nama }}</td>
                    <td>{{ $pegawai->alamat }}</td>
                    <td>{{ $pegawai->tglahir }}</td>
                    <td class="text-center">
                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pegawai.destroy', $pegawai->id) }}" method="POST">
                    <a href="{{ route('pegawai.edit', $pegawai->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                    </form>
                    </td>
                </tr>
                @empty
                <div class="alert alert-danger">Data artikel belum Tersedia.</div>
                @endforelse
            </table>
            <a href="{{ url('pegawai/create') }}"><button type="button" class="btn btn-primary btn-sm">Tambah Data</button></a>
        </div>
      </div>
  </body>
<script>
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script>
      @if(session()->has('success'))
      toastr.success('{{ session('success') }}', 'BERHASIL!');
      @elseif(session()->has('error'))
      toastr.error('{{ session('error') }}', 'GAGAL!');
      @endif
</script>
</script>
</html>