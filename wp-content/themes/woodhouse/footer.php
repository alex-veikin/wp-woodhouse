<footer class="footer">
    <div class="container">
        <div class="mx-2 mx-sm-0 py-2">
            <div class="feedback">
                <form class="row mb-3" action="#">
                    <input class="col-12 col-md mr-md-1 form-control" type="text" placeholder="Ваше имя">
                    <input class="col-12 col-md mx-sm-0 mt-1 mt-md-0 form-control" type="tel"
                           placeholder="Номер телефона">
                    <input class="col-12 col-lg ml-lg-1 mt-1 mt-lg-0 btn" type="submit"
                           value="Заказать обратный звонок">
                </form>
            </div>
            <div class="row d-flex flex-column flex-sm-row align-items-center justify-content-between">
                <div class="order-1 order-sm-0">
                    2018 &copy; <?php echo ot_get_option('copyright_footer'); ?>
                </div>

                <div class="footer-contacts">
                    <span><?php echo ot_get_option('phone_footer'); ?></span>
                    <span><?php echo ot_get_option('email_footer'); ?></span>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
