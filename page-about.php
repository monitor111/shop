<?php get_header(); ?>

 <!-- Page Content-->
    <div class="container px-4 px-lg-5" id="slideMenu">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">



            
          
        </div>
        <!-- Call to Action-->
        <div class="card text-white bg-secondary my-5 py-4 text-center">

             <div class="card-body">
        <h2 class="card-title">Подпишитесь на нашу рассылку!</h2>
        <p class="card-text">Будьте в курсе последних новостей и акций. Подпишитесь сейчас, чтобы получать уведомления о наших специальных предложениях и скидках!</p>
        <a href="#subscribe" class="btn btn-primary btn-lg">Подписаться</a>
        </div>
        </div>

         <!-- Client Reviews -->
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8">
            <h2 class="text-center mb-4">Клиентские отзывы</h2>
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Отличный сервис!</h5>
                    <p class="card-text">"Я был приятно удивлен качеством обслуживания и профессионализмом вашей команды. Спасибо за вашу помощь!"</p>
                    <p class="card-text"><small class="text-muted">- Иван Иванов</small></p>
                </div>
            </div>
            <div class="card text-center mt-4">
                <div class="card-body">
                    <h5 class="card-title">Быстро и эффективно!</h5>
                    <p class="card-text">"Заказывал услуги компании, и остался очень доволен результатом. Оперативно и качественно!"</p>
                    <p class="card-text"><small class="text-muted">- Елена Петрова</small></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Frequently Asked Questions -->
<div class="container px-4 px-lg-5 my-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-lg-8">
			
            <h2><?php echo esc_html( get_field('questions') ); ?></h2>
			
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Вопрос 1: Как мне сделать заказ?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Для совершения заказа просто перейдите на страницу "Услуги" и выберите необходимый продукт или услугу. Затем следуйте инструкциям на экране для завершения заказа.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Вопрос 2: Как я могу связаться с вашей компанией?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Вы можете связаться с нами по телефону, отправив электронное письмо или заполнив форму обратной связи на странице "Контакты".
                        </div>
                    </div>
                </div>

                <!-- Добавьте другие вопросы и ответы здесь -->
              <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Вопрос 3: Как добавлять текст на этом сайте ?
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            Вам необходимо перейти на - Страницы, в админпанели, редактировать. Тут у вас есть раздел кастомных полей. Подробная инструкция для пользователя - на странице Услуги.
        </div>
    </div>
</div>

<div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            Вопрос 4: Как поменять - добавить пункты меню?
        </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
            В данном сайте реализовано статичное меню. Для изменения обратитесь к разработчику.
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
</div>



        </div>

<?php get_footer(); ?>