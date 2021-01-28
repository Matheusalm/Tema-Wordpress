<?php $title = get_the_title(); ?>
<footer <?php if($title == 'Contato'){echo 'style="padding:20px 0; "';}?>> 
<?php
    if($title != 'Contato' && Is_404() == false){
?>

    <section class="metodologia">
        <div class="center">
            <h2>Conheca nossa metodologia</h2>
            <p>1Aliqua nostrud sint nisi excepteur mollit culpa consectetur commodo. 
                Ea culpa incididunt officia laboris sint ullamco incididunt. 
                Incididunt excepteur minim qui ullamco excepteur duis nostrud dolore 
                dolor anim laboris. Aliqua qui elit aliqua quis deserunt est fugiat 
                commodo consectetur qui. Magna laboris sit qui tempor. Nostrud laboris
                 ex officia in culpa commodo quis. Tempor commodo dolore incididunt 
                 velit tempor amet qui do nulla est mollit.</p>
            <a href="">Entrar em contato </a>
        </div>
    </section>  
<?php 
    } 
?>  
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href=""> Contato </a>
                <a href=""> FAQ </a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href=""> Contato </a>
                <a href=""> FAQ </a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href=""> Contato </a>
                <a href=""> FAQ </a>
            </div>
            <div style="width: 40%; text-align:right;" class="col-footer">
                <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/logo2.png"/>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php echo get_theme_root_uri(); ?>/danki tema/js/jquery.js"> </script>
    <script src="<?php echo get_theme_root_uri(); ?>/danki tema/js/slick.min.js"> </script>
   
<script>
    //Menu Responsivo
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();

        })
</script>
</body>