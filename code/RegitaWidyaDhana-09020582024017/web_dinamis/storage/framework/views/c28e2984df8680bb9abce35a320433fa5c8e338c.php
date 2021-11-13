<!doctype html>
 <html lang="en" class="h-100">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artikel</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="toastr/toastr.min.css">
 </head>
 <body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
   <div class="container mt-5">
    <section id="section_artikel">
     <div class="row">
      <div class="col-md-12">
       <div class="card">
        <div class="card-body">
         <a href="" class="btn btn-md btn-success mb-3">TAMBAH ARTIKEL</a>
         <table class="table table-bordered">
          <thead>
           <tr>
            <th scope="col">GAMBAR</th>
            <th scope="col">JUDUL</th>
            <th scope="col">ISI</th>
            <th scope="col">AKSI</th>
           </tr>
          </thead>
          <tbody>
           <?php $__empty_1 = true; $__currentLoopData = $artikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <tr>
           <td class="text-center">
            <img src="<?php echo e(Storage::url('public/artikels/').$artikel->gambar); ?>" class="rounded" style="width: 150px">
           </td>
           <td><?php echo e($artikel->judul); ?></td>
           <td><?php echo $artikel->isi; ?></td>
           <td class="text-center">
            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('artikel.destroy', $artikel->id)); ?>" method="POST">
             <a href="<?php echo e(route('artikel.edit', $artikel->id)); ?>" class="btn btn-sm btn-primary">EDIT</a>
             <?php echo csrf_field(); ?>
             <?php echo method_field('DELETE'); ?>
             <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
            </form>
           </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <div class="alert alert-danger">
           Data artikel belum Tersedia.
          </div>
          <?php endif; ?>
         </tbody>
        </table>
        <?php echo e($artikels->links()); ?>

       </div>
      </div>
     </div>
    </div>
   </section>
  </div>
 </main>
 <script src="jquery/jquery-3.6.0.min.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
 <script src="toastr/toastr.min.js"></script>
 <script>
  <?php if(session()->has('success')): ?>
  toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!');
  <?php elseif(session()->has('error')): ?>
  toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!');
  <?php endif; ?>
 </script>
</body>
</html><?php /**PATH C:\Users\user\OneDrive\Documents\GitHub\project-laravel\code\RegitaWidyaDhana-09020582024017\web_dinamis\resources\views/artikel/index.blade.php ENDPATH**/ ?>