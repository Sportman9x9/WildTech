
<?php $__env->startSection('content'); ?>
	<main class="main__index mt-5">
		<section>
			<h2 class="pl-5">Artículos del blog</h2>
			<div class="d-flex justify-content pl-5">
				<a href="<?php echo e(route('AdminArticulos.create')); ?>">
					<button type="button" class="btn btn-warning">Agregar un artículo</button>
        </a>
        <a href="<?php echo e(route('AdminCategorias.create')); ?>">
					<button type="button" class="btn btn-warning">Agregar una categoria</button>
				</a>
			</div>
		</section>
		<section class="portfolio d-flex mt-4 mb-4 flex-wrap justify-content-center">

<div class="d-flex w-100 justify-content-center flex-column " style= "padding-left: 50%; " >

    <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
      <h3><?php echo e($categoria->nombre); ?></h3>

        <?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if($articulo->categoria_id == $categoria->id): ?>
       
        <div class="col-md-4 col-lg-3" style="margin-top:50px; width:40vw">

          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <img src="<?php echo e(asset("$articulo->img")); ?>" class="card-img-top" alt="reciente02">
              </div>
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #ffff"><?php echo e($articulo->title); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">Escrito por: <a class="card-link" href="<?php echo e(route('show.edit',$articulo->author_id)); ?>"><?php echo e($articulo->author_name); ?></a></h6><br>
                <p class="card-text text-center" style="color: #ffff"><?php echo e($articulo->description); ?></p>

                
                <a href="<?php echo e(route('show.show', $articulo->id)); ?>" class="card-link">Ver completo</a>
              </div>
              <div class="card-body d-flex justify-content-center">
                <a class="ml-3 mr-3" href="<?php echo e(route('AdminArticulos.edit', $articulo->id)); ?>"><button class="btn btn-light" type="button">Editar</button></a>
      					<form class="d-inline-block" method="POST" action="<?php echo e(route('AdminArticulos.destroy',$articulo->id)); ?>">
      						<?php echo csrf_field(); ?>
      						<?php echo method_field('DELETE'); ?>
      						<button class="card-link btn btn-danger" type="submit">
      							Eliminar
      						</button>
      					</form>
              </div>
            </div>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
       
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

        
    </section>
	</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WildTech\resources\views/admin/articulos/index.blade.php ENDPATH**/ ?>