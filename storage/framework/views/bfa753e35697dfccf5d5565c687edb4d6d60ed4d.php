<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aldo Grabić">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Apartmani</title>
</head>
<body>
    <header>
        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/managment')); ?>">Menadžment</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Pregled</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo e(url('/managment')); ?>">Početna</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Apartmani</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item active" href="<?php echo e(url('/apartments')); ?>">Pregled</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(url('/prices_table')); ?>">Tablica cijena</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Rezervacije</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo e(url('/reservations')); ?>">Pregled</a></li>
                                    <li><a class="dropdown-item" href="<?php echo e(url('/total_made')); ?>">Ukupna zarada</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('/users')); ?>">Korisnici</a>
                            </li>
                        </ul>
                        <form class="d-flex mt-3" action="<?php echo e(route('search')); ?>" method="GET" role="search">
                            <input class="form-control me-2" type="search" name="keyword" placeholder="Traži.." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Traži</button>
                        </form>
                        <ul class="navbar-nav pt-4">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('logout')); ?>">Odjava</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <table class="table text-center position-absolute top-50 start-50 translate-middle">
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Cijena</th>
                    <th>Veličina</th>
                    <th>Broj soba</th>
                    <th>Broj kreveta</th>
                    <th>Balkon</th>
                    <th>Klima</th>
                    <th>Ljubimci</th>
                    <th>Slobodan od</th>
                    <th>Slobodan do</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($apartment->name); ?></td>
                    <td><?php echo e($apartment->price); ?>&euro;</td>
                    <td><?php echo e($apartment->apartment_size); ?>m&sup2;</td>
                    <td><?php echo e($apartment->number_of_rooms); ?></td>
                    <td><?php echo e($apartment->number_of_beds); ?></td>
                    <td><?php if($apartment->balcony == 1): ?> ima <?php else: ?> nema <?php endif; ?></td>
                    <td><?php if($apartment->air_conditioning == 1): ?> ima <?php else: ?> nema <?php endif; ?></td>
                    <td><?php if($apartment->pets == 1): ?> da <?php else: ?> ne <?php endif; ?></td>
                    <td><?php echo e($apartment->from_date); ?></td>
                    <td><?php echo e($apartment->to_date); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </main>
</body>
</html><?php /**PATH C:\Users\Korisnik\OneDrive\Dokumenti\projekti\Apartmani - managment\Apartmani-managment\resources\views/apartments/index.blade.php ENDPATH**/ ?>