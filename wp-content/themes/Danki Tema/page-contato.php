<?php // Template Name: Contato  ?>
<?php get_header(); ?>   
</div>
</section>
   <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante,<br/>primeira conversa.</h2>
                <br/>
                <?php 
                    while(have_rows('nome_tipo_contato')) {
                    the_row();
                ?>
                <p><b><?php echo get_sub_field('categoria') ?> :</b> <?php echo get_sub_field('valor') ?></p>
                <?php } ?>
        
            <div class="mapa-container">
                <div id="mapa"></div>
            </div> <!-- google maps para localização-->
            </div>
            
            <div class="w50 contato-form">
                <?php the_content(); ?>
                <!--form>
                    <input placeholder="nome" type="text"/>
                    <input placeholder="e-mail" type="text"/>
                    <input placeholder="telefone" type="text"/>
                    <select>
                        <option class="opcao">Geral</option>
                        <option class="opcao">Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar!">
                </form-->
            </div>
            
            <div class="clear"></div>
        </div>
   </section>
   
    <?php get_footer(); ?>
    <script src="<?php echo get_theme_root_uri(); ?>/danki tema/js/jquery.js"> </script>
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBHXlK3_mD3AyAappIdXdf6bZQDqsDaw6I'></script>
    <script src="<?php echo get_theme_root_uri(); ?>/danki tema/js/map.js"></script>

<script>
    //Menu Responsivo
        $('.menu-mobile i').click(function(){
            $('.menu-mobile').find('ul').slideToggle();

        })
</script>
</body>
