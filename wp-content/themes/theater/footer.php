<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theater
 */

?>

<footer>
    <div class="footer-backgroun">
        <section class="footer-max-cont">
            <section class="footer-left">
                <div class="copyright">
                    <p><span class="copyright-data">© <?php echo date("Y"); ?> </span><span class="copyrigh-name">«Театр у микрофона»</span>
                        <br> <span class="copyright-all">Все права защищены      </span></p>
                </div>
                <div class="contacts">
                    <div class="contacts__phone">
                        <p><a href="tel:<?php echo get_field('contact_phone', '11'); ?>"><?php echo get_field('contact_phone', '11'); ?></a></p>
                    </div><a class="contacts__mail" href="mailto:<?php echo get_field('e-mail', '11'); ?>"><?php echo get_field('e-mail', '11'); ?></a></div>
            </section>
            <section class="footer-center">
                <nav>
                    <?php dynamic_sidebar('top_menu'); ?>
                </nav>
            </section>
            <section class="footer-button">
                <div class="footer-btn-container">
                    <p><a class="button-go-start">Вернуться к началу      </a></p>
                </div>
            </section>
            <section class="footer-right">
                <div class="footer-btn-container-trans">
                    <p><a class="button-go-start" href="#">Вернуться к началу    </a></p>
                </div>
                <div class="desighn-by">
                    <p>Создание сайта —
                        <a target="_blank" href="http://page.ua"><img src="./img/logo_footer.svg" alt="desighn-logo"></a>
                    </p>
                </div>
            </section>
        </section>
    </div>
</footer>
</section>
</body>
<script src="js/scripts.js"></script>

<script src="js/mine.js"></script>

<script>
    $( document ).ready(function() {
        $('a').each(function(){
            if($(this).attr('href')=="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"){
                $(this).addClass('active-link');
            }
        });
    });
</script>
</html>

<?php wp_footer(); ?>

</body>
</html>
