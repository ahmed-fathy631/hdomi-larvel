<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Hdomi</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="imge/logo.jpg" type="image/x-icon" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  bg-lightt m-5 shadow-sm rounded-pill ">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    Hdomi
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav ">

                            <li class="nav-item active ">
                                <a class="nav-link " href="<?php echo e(Route('home')); ?>"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-house-fill ml-4 " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                    </svg>
                                    <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-3 " href="<?php echo e(Route('about')); ?>">about us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ml-2 " href="<?php echo e(Route('Contact')); ?>">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(Route('Discounts')); ?>">Discounts</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Go shopping
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?php echo e(route('shirts.index')); ?>">Shirts</a>
                                    <a class="dropdown-item" href="<?php echo e(route('trouseres.index')); ?>">Pants</a>
                                    <a class="dropdown-item" href="<?php echo e(route('shoses.index')); ?>">Shoes</a>
                                    <a class="dropdown-item" href="<?php echo e(Route('Accessories')); ?>">Accessories</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

        <div class="container">

            <?php echo $__env->yieldContent('content'); ?>

        </div>

    <footer class="site-footer m-5 ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Hdomi is a company that makes your dreams possible. It will provide you with all the convenience ways to get a unique shopping experience and the best quality of goods in the easiest ways with the most discounts.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(route('shirts.index')); ?>">Shirts</a></li>
                        <li><a href="<?php echo e(route('trouseres.index')); ?>">Pants</a></li>
                        <li><a href="<?php echo e(route('shoses.index')); ?>">Shoes</a></li>
                        <li><a href="<?php echo e(Route('Accessories')); ?>">Accessories</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                        <li><a href="<?php echo e(Route('home')); ?>">Home</a></li>
                        <li><a href="<?php echo e(Route('about')); ?>">About Us</a></li>
                        <li><a href="<?php echo e(Route('Contact')); ?>">Contact Us</a></li>
                        <li><a href="<?php echo e(Route('Discounts')); ?>">Discounts</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright 2020 All Rights Reserved by Ahmed Fathy</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fab fa-instagram-square"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>

    </footer>

    <script src="js/all.min.js">  </script>
</body>
</html>
<?php /**PATH C:\wamp\www\blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>