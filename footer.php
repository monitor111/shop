 <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Все права защищены &copy 2050 </p>
        </div>
    </footer>
</body>
</html>


    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom script for fixed navigation -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function(){
                var distanceTop = $('#slideMenu').offset().top;
                if ($(window).scrollTop() >= distanceTop)
                    $('nav').addClass("fixed");
                else
                    $('nav').removeClass("fixed");
            });
        });
    </script>
    <?php wp_footer(); ?>
</body>
</html>