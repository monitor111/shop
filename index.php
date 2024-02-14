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
                 
                 

                <a class="btn btn-primary" href="#!">Call to Action!</a>
            </div>
        </div>

 
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">
            <div class="card-body"><p class="text-white m-0"><h5><?php echo esc_html( get_field('slogan') ); ?></h5></p></div>
        </div>
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">

          <?php
// Цикл для вывода карточек товаров
$args = array(
    'post_type' => 'products', // указываем тип записи "products"
    'posts_per_page' => -1, // выводим все записи
);
$query = new WP_Query($args);
$count = 0; // счетчик для определения, когда нужно начать новый ряд
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        $count++;
        if ($count % 3 == 1) {
            echo '<div class="row">';
        }
?>
        <div class="col-md-4 mb-5">
    <a href="<?php echo get_permalink(); ?>" style="text-decoration: none; color: inherit;">
        <div class="card h-100">
            <div class="card-body">
                <h2><?php the_title(); ?></h2>
                <img src="<?php echo get_field('card_image'); ?>" class="img-fluid mb-4 card-img" alt="Service Image">
                <div><?php echo get_field('short_description'); ?></div><br>
                <div>Цена: <span class="price"><?php echo esc_html(get_field('price')); ?></span></div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-sm">More Info</button>
            </div>
        </div>
    </a>
</div>

<?php
        if ($count % 3 == 0) {
            echo '</div>'; // закрываем текущий ряд после каждых трех записей
        }
    endwhile;
    if ($count % 3 != 0) {
        echo '</div>'; // закрываем последний ряд, если он не был закрыт внутри цикла
    }
    wp_reset_postdata(); // сбрасываем данные запроса
else :
    echo 'Нет товаров для отображения.';
endif;
?>



        </div>
    </div>
   
   <?php get_footer(); ?>

</body>
</html>


