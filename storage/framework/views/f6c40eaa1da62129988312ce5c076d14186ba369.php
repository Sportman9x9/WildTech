
<?php $__env->startSection('content'); ?>
<!-- VA A TENER UN FOR EACH QUE MUESTRE DE FORMA RESUMIDA TODAS LAS PUBLICACIONES -->
<!-- QUE ENTREN EN UNA MISMA CATEGORÍA -->
<!-- Masthead-->
<section class="page-section">
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">   
            <h1 class="masthead-heading  mb-0">Varonil</h1><br><br><br>
            <p class="masthead-subheading font-weight-light mb-0">"Liderazgo es pelear por un balón perdido, tener a todo el mundo involucrado, a todos los otros jugadores. Es ser capaz de asumir y delegar. esa es la única manera en la que puedes obtener el respeto de sus compañeros. Es lograr que todos crean en ti y siempre ofrezcas lo mejor de ti mismo." -Larry Bird</p><br>
            <img src="<?php echo e(asset('img/Larry .jpeg')); ?>" class="card-img-top" alt="Larry Bird">
        </div>
    </header>
</section>

<h3 class="text-uppercase mb-4  mb-0 text-center">Aquí podrás encontrar noticias, datos curiosos y más...</h3><br>


<section class="articulos">
    <section class="portfolio d-flex mt-4 mb-4 flex-wrap justify-content-center">

	<?php $__currentLoopData = $articulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $articulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($articulo->category == "varonil"): ?>
                <div class="col-md-4 col-lg-3">
          <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
            <div class="card" style="width: 18rem;">
              <div class="card-body">
                <img src="<?php echo e(asset("img/$articulo->img")); ?>" class="card-img-top" alt="reciente02">
              </div>
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #ffff"><?php echo e($articulo->title); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted text-center">Escrito por: <a class="card-link" href="<?php echo e(route('show.edit',$articulo->author_id)); ?>"><?php echo e($articulo->author_name); ?></a></h6><br>
                <p class="card-text text-center" style="color: #ffff"><?php echo e($articulo->description); ?></p>
                <h6 class="d-inline-block card-subtitle text-muted">Categoría:</h6>
                <?php if($articulo->category == "varonil"): ?>
                <a href="">Baloncesto masculino</a>
                <?php elseif($articulo->category == "femenil"): ?>
                <a href="">Baloncesto femenino</a>
                <?php else: ?>
                <a href="#">Sin categoría</a>
                <?php endif; ?>
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
	</section>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WildTech\resources\views/categoria1.blade.php ENDPATH**/ ?>