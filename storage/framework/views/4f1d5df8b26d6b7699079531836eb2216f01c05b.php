<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="container">
          <h2>Input Barang</h2><br  />
           <?php if($errors->any()): ?>
          <div class="alert alert-danger">
              <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
          </div><br />
          <?php endif; ?>
          <?php if(\Session::has('success')): ?>
          <div class="alert alert-success">
              <p><?php echo e(\Session::get('success')); ?></p>
          </div><br />
          <?php endif; ?>
          <form method="post" action="<?php echo e(url('crud_pemasukans')); ?>">
          <?php echo e(csrf_field()); ?>

            <div class="row">
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="jenis_barang">Jenis Barang:</label>
                                    <select class="form-control" name="jenis_barang">
                                        <option value=""></option>
                                        <option value="Makanan">Makanan</option>
                                        <option value="Minuman">Minuman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="nama_barang">Nama Barang:</label>
                                    <input type="text" class="form-control" name="nama_barang">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                </div>
                            </div>
                        </div>
            <div class="row">
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="kode_barang">Kode Barang:</label>
                                    <input type="text" class="form-control" name="kode_barang">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="merk_barang">Merk Barang:</label>
                                    <input type="text" class="form-control" name="merk_barang">
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <label for="jml">Jumlah Barang:</label>
                                    <input type="number" class="form-control" name="jml_barang">
                                </div>
                            </div>
                        </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group col-sm">
                        <button type="submit" class="btn btn-success" style="margin-left:38px">Simpan</button>
                        <a href="/crud_pemasukans" class="btn btn-success">Kembali</a>
                    </div>
                </div>
            </div>
          </form>
        </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>