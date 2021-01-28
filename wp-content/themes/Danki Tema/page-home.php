<?php 
    //Template Name: Home
?>

<!-- Caso não pegue o conteudo da pagina no php, use o seguinte código
        if (have_posts()) : while (have_posts()) : the_post();
        the_content();
        endwhile;
        endif;
         -->

<?php get_header();?>
            <div class="clear"></div>
            <br />
            <br />
            <div class="w50 time-descricao">
                <h2><?php the_field('chamada_topo'); ?></h2>
                <p> <?php the_field('texto_topo'); ?></p>
                <a target="_blank" href="https://dankicode.com"> Ver top mundial </a>
            </div><!--w50-->            
            <div class="w50 time-imagem">
                <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/equipe.png" />
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->
    <div class="circle"><i class="fas fa-angle-down"></i></div>
    <section class="clientes-slider">
       
        <div class="center">
        <div style="max-width: 700px;
                    margin: 0 auto;
                    overflow: hidden;" class="slider-container">
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/astralis.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/heroic.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/furia.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/vitality.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/nav.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/eg.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/big.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/og.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/faze.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/liquid.png" />
            <img src="<?php the_field('imagem_topo'); ?>">
        </div>
        </div><!--CENTER-->
    </section>

    <section class="diferenciais">
    
        <div class="center">
            <h2>Como melhorar sua mira</h2>
            <div class="icons-diferenciais">
                
                <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images\HS.jpg"/>
                <h3>Somente headshot</h3>
                <p>Aprendar a dar HS a todo momento, se prepare pois você sera chamado hack.</p>
                </div><!-- Box single Diferencial 1-->
                
                <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images\economia.jpg"/>
                <h3>Aprenda Economizar dinheiro no jogo</h3>
                <p>Para de rushar igual retardado, e aprenda a faze <b>ECO</b> junto com o time.</p>
                </div><!-- Box single Diferencial 2-->

                <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images\call.jpg"/>
                <h3>Ja ouviu falar de Call</h3>
                <p>Meu querido companheiro, siga as intruções do time, CS GO é um <b>JOGO COLETIVO.</b></p>
                </div><!-- Box single Diferencial 3-->

            </div>
        </div>   
    </section>

    <section class="sobre-time">
        <div class="center">
            <div class="w50 time"><!-- bootstrap local-->
                <h2>Não passar informações ao time de maneira eficiente pode custar uma partida</h2>
                <p> Algumas vezes, seja por nervosismo ou por desconhecimento, os jogadores tendem a passar calls pouco específicas ou precipitadas. Ações, como chamar o seu time para o bomb em que você está sem ter visto ainda o jogador com a c4, ou informar que “muitos” adversários estão em tal local do mapa, ou não dar a call do local corretamente, podem prejudicar o time. Para tal, é necessário ter frieza e buscar fazer a leitura correta do round. Só informe ao seu time o que você tiver certeza e não dê excesso de informações.
                    <br /><br />
                    Aprenda e decore as callouts dos principais mapas. Isso agilizará a comunicação e seus teammates poderão te ajudar.</p>
            </div>
            <div class="w50 time-img">
                <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/time.jpg">
            </div>
        </div>
        <div class="clear"></div>
    </section>

    <section class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimentos-single">
                    <p>"Elit qui reprehenderit excepteur ex ipsum minim esse. 
                    Amet est velit adipisicing ea commodo veniam aute ea quis 
                    velit aliqua proident. Ad nostrud Lorem dolor occaecat 
                    laborum laborum. Culpa exercitation officia labore fugiat 
                    ad velit magna quis."</p>
                    <p>Matheus Almeida</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/autor.jpeg">
                </div> <!--Depoimento single -->
                <div class="depoimentos-single">
                    <p>"Elit qui reprehenderit excepteur ex ipsum minim esse. 
                    Amet est velit adipisicing ea commodo veniam aute ea quis 
                    velit aliqua proident. Ad nostrud Lorem dolor occaecat 
                    laborum laborum. Culpa exercitation officia labore fugiat 
                    ad velit magna quis."</p>
                    <p>Matheus Almeida</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/autor.jpeg">
                </div> <!--Depoimento single -->
                <div class="depoimentos-single">
                    <p>"Elit qui reprehenderit excepteur ex ipsum minim esse. 
                    Amet est velit adipisicing ea commodo veniam aute ea quis 
                    velit aliqua proident. Ad nostrud Lorem dolor occaecat 
                    laborum laborum. Culpa exercitation officia labore fugiat 
                    ad velit magna quis."</p>
                    <p>Matheus Almeida</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki tema/images/autor.jpeg">
                </div> <!--Depoimento single -->
            </div> <!-- Depoimento Box 
                        Olhar CSS img para deixar a foto circular-->
        </div>    
    </section>
<?php get_footer(); ?>

<script src="js/jquery.js"> </script>
    <script src="js/slick.min.js"> </script>
    <script type="text/javascript">
        $('section.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            centerMode: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive:[{
                breakpoint:768,
                settings: {
                    slidesToShow:2
                }
            }]
        });

        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false
        });
    </script>

    