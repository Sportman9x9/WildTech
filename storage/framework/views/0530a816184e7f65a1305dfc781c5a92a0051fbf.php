<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e(config('app.name')); ?> - <?php echo e(config('app.admin')); ?></title>
    
    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/releases/v5.12.1/js/all.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Pacifico:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />

  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="body__welcome">
   <header style="margin-top: 8rem;">
      <nav id="mainNav" class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top">
        <div class="container container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('main')); ?>">WildTech</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link active py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('index.categorias')); ?>">Categorias</a>
                    </li>
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link active py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('login')); ?>">Iniciar sesión</a>
                    </li>
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link active py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('register')); ?>">Regístrate</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active  mx-0 mx-lg-1 px-0 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="mx-0 mx-lg-1"><a class="dropdown-item py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('show.edit', Auth::user()->id)); ?>">Ver perfil</a></li>
                            <?php if(Auth::user()->admin): ?>
                            <li class="mx-0 mx-lg-1"><a class="dropdown-item py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('main')); ?>">Volver a usuario</a></li>
                            <?php endif; ?>
                            <li class="mx-0 mx-lg-1">
                                <a class="dropdown-item py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                                </form>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
      </nav>
   </header>
   <main>
    <?php echo $__env->yieldContent('content'); ?>
   </main>
       <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <!-- Footer Location-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4"></h4>
            <p class="lead mb-0"><br /></p>
          </div>
          <!-- Footer Social Icons-->
          <div class="col-lg-4 mb-5 mb-lg-0">
            <br><br><br>
            <h2 class="text-uppercase mb-4 mb-0">Síguenos en nuestras redes</h2>
            <br><br>
            <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-facebook-f"></i></a>
            <a class="btn btn-outline-light btn-social mx-1" href="/"><i class="fab fa-fw fa-instagram"></i></a>
            <a class="btn btn-outline-light btn-social mx-1" href=""><i class="fab fa-fw fa-twitter"></i></a>
          </div>
        </div>
      </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html><?php /**PATH C:\laragon\www\WildTech\resources\views/layouts/admin.blade.php ENDPATH**/ ?>