<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Small Business - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="style.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <style>
        /* Add this style for fixed navigation */
        nav.fixed {
            position: fixed;
            top: 0;
            width: 100%;
        }
    </style>

    <?php wp_head(); ?>
</head>


<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">Monitor 98</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">Про нас</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Контакты</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Услуги</a></li>
                </ul>  

            </div>
        </div>
    </nav>

    <!-- Page Content-->
    <div class="container px-4 px-lg-5" id="slideMenu">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
			
			
           <?php if( get_field('banner') ): ?>
    <img src="<?php echo the_field('banner'); ?>" style="width: 730px; height: auto;"/>
<?php else: ?>
    <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." />
    </div>
<?php endif; ?>

			
			
            <div class="col-lg-5">
                <h1 class="font-weight-light">Business Name or Tagline</h1>
                <p><?php echo esc_html( get_field('card-main') ); ?>
                </p>

                <a class="btn btn-primary" href="#!">Call to Action!</a>
            </div>
        </div>