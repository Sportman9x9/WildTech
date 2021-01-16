<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo e(config('app.name')); ?> - <?php echo e(config('app.main')); ?></title>
    
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
   <header>
      <nav id="mainNav" class="navbar navbar-expand bg-secondary text-uppercase fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('main')); ?>">WildTech</a>
            <div class="collapse navbar-collapse d-flex justify-content-end">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto text-white">
 
                  <?php if(auth()->guard()->guest()): ?>
                  <li class="nav-item mx-3 mx-lg-2">
                    <a class="nav-link active py-3 px-2 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('login')); ?>">Iniciar sesión</a>
                  </li>
                  <?php else: ?>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active mx-3 mx-lg-2 py-3 px-2 px-lg-3 rounded js-scroll-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo e(Auth::user()->name); ?></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li class="mx-3 mx-lg-2">
                        <a class="dropdown-item py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('show.edit', Auth::user()->id)); ?>">Ver perfil</a>
                      </li>
                      <?php if(Auth::user()->admin): ?>
                      <li class="mx-3 mx-lg-2"><a class="dropdown-item py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo e(route('AdminArticulos.index')); ?>">Administrador</a></li>
                      <?php endif; ?>
                      <li class="mx-3 mx-lg-2">
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
        </div>
      </nav>
   </header>
<main>
    <section class="page-section">
        <div id="register" class="form">
            <h3 class="mb-4">Regístrate</h3>
            <div class="register-page">
                <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">Foto de usuario</label>
                        <div class="col-md-6">
                            <input id="avatar" type="file" class="form-control" name="avatar" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nombre de usuario')); ?></label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Correo electrónico')); ?></label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contraseña')); ?></label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                <strong><?php echo e($message); ?></strong>
                            </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirma tu contraseña')); ?></label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="descripcion" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Descripción')); ?></label>
                        <div class="col-md-6">
                            <textarea class="form-control" name="descripcion" placeholder="Escribe aquí algo sobre ti..."></textarea>
                        </div>
                    </div>

                    <div class="form-group row d-flex justify-content-center mt-5">
                        <div class="col-md-6">
                            <button id="btn-register" type="submit" class="btn btn-primary">
                                <?php echo e(__('Registrar')); ?>

                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</html>
<?php /**PATH C:\laragon\www\WildTech\resources\views/auth/register.blade.php ENDPATH**/ ?>