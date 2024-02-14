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
         
 <div class="text-center-single">
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        
        <?php
        // Начинаем цикл WordPress
        while (have_posts()) :
            the_post();
        ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php 
                    // Выводим изображение товара
                    if (get_field('card_image')) {
                        echo '<img src="' . get_field('card_image') . '" class="img-fluid mb-4 product-image" alt="">';
                    }
                    if (get_field('img2')) {
                        echo '<img src="' . get_field('img2') . '" class="img-fluid mb-4 product-image" alt="">';
                    }
                    if (get_field('img3')) {
                        echo '<img src="' . get_field('img3') . '" class="img-fluid mb-4 product-image" alt="">';
                    }
                    if (get_field('img4')) {
                        echo '<img src="' . get_field('img4') . '" class="img-fluid mb-4 product-image" alt="">';
                    }
                    if (get_field('img5')) {
                        echo '<img src="' . get_field('img5') . '" class="img-fluid mb-4 product-image" alt="">';
                    }
                    
                    // Выводим краткое описание товара
                    if (get_field('short_description')) {
                        echo '<div class="short_desc_single">' . get_field('short_desc_single') . '</div>';
                    }

                    // Выводим цену товара
                    if (get_field('price-single')) {
                        echo '<div><span class="price-single">' . esc_html(get_field('price-single')) . '</span></div>';
                    }

                    // Выводим полное описание товара
                    the_content(); 
                ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // Конец цикла WordPress
        ?>
    </main><!-- #main -->
</div><!-- #primary -->
</div>
<?php get_footer(); // Подключаем подвал сайта ?>



