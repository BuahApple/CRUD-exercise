<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="container">
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
	    <div class="title m-b-md">
	                <h1>Table Barang</h1>
	                <table class="table" align="center">
	                    <thead>
	                        <tr>
	                            <th scope="col">#ID</th>
	                            <th scope="col">Jenis Barang</th>
	                            <th scope="col">Nama Barang</th>
	                            <th scope="col">Kode Barang</th>
	                            <th scope="col">Merk Barang</th>
	                            <th scope="col">Jumlah Barang</th>
	                            <th scope="col" colspan="2">Aksi</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	                    <?php $__currentLoopData = $crud_pemasukan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                        <tr>
	                            <th scope="row"><?php echo e($value['id']); ?></th>
	                            <td><?php echo e($value['jenis_barang']); ?></td>
	                            <td><?php echo e($value['nama_barang']); ?></td>
	                            <td><?php echo e($value['kode_barang']); ?></td>
	                            <td><?php echo e($value['merk_barang']); ?></td>
	                            <td><?php echo e($value['jml_barang']); ?></td>
	                            <td>
	                            	<a href="<?php echo e(action('crudController@edit', $value['id'])); ?>" class="btn btn-warning">Edit</a>
	                            </td>
	                            <td>
	                            	<form action="<?php echo e(action('crudController@destroy', $value['id'])); ?>" method="post">
										<?php echo e(csrf_field()); ?>

										<Input name="_method" type="hidden" value="DELETE">
										<button class="btn btn-danger" type="submit">Delete</button>	                            		
	                            	</form>
	                            </td>
	                        </tr>
	                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                        
	                    </tbody>
	                </table>
	                <div class="row">
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                    <a href="/create" class="btn btn-success">Input Barang</a><br  />
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                   <a href="/" class="btn btn-success">Kembali</a><br  />
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="form-group col-sm">
                                   
                                </div>
                            </div>
                        </div>
	                
	                
	            </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>