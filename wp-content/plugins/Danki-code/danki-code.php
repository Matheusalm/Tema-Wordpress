<?php 
    /*
        **Plugin Name: Danki Code Ultimate
        **Description: Este é um plugin para estilizar nossas paginas.
    */

    function myShortCode(){
        $shortCode = "<h2> Aqui vai o conteúdo do seu plugin!</h2>";
        return $shortCode;
    }

    add_shortcode('danki1','myShortCode');

    // adicionar plugin no menu
    function myMenu(){
        add_menu_page('Titulo da Pagina!','Danki Ultimate','manage_options','danki-code',
        'dankicode_page','',200);
    }

    // https://digwp.com/2016/05/wordpress-admin-notices/ 


    add_action('admin_menu','myMenu');

    function dankicode_page(){
        if (array_key_exists('acao', $_POST)){
            update_option('conteudo_head', $_POST['conteudo_head']);
            echo '<div class="notice notice-success is-dismissible"> 
                    <p><strong>Alteração Feita com sucesso.</strong></p>
                     <button type="button" class="notice-dismiss">
                        <span class="screen-reader-text">Fechar.</span>
                        </button>
                    </div>';
        }

        if (array_key_exists('acao2', $_POST)){
            update_option('conteudo_footer', $_POST['conteudo_footer']);
            echo '<div class="notice notice-success is-dismissible"> 
                    <p><strong>Alteração Feita com sucesso.</strong></p>
                     <button type="button" class="notice-dismiss">
                        <span class="screen-reader-text">Fechar.</span>
                        </button>
                    </div>';}
        $conteudo_head = get_option('conteudo_head');
        $conteudo_footer = get_option('conteudo_footer');
        // classe wrap padrão wordpress
        echo '
        <div class="wrap">
            <h2> Bem Vindo(a) ao Danki Ultimate </h2>
            </br>
            <form method="post">
                <label for="nome">Conteudo Head: </label>
                <textarea name="conteudo_head" class="large-text" placeholder="Conteudo Head">
                '.$conteudo_head.'</textarea>
                <input type="submit" name="acao" value="Enviar" class="button button-primary />
                </form>
        </div>
        ';

        echo '
        <div class="wrap">
            <form method="post">
                </br>
                </br>
                </br>
                <label for="nome">Conteudo Footer: </label>
                <textarea name="conteudo_footer" class="large-text" placeholder="Conteudo Footer">
                '.$conteudo_footer.'</textarea>
                <input type="submit" name="acao2" value="Enviar" class="button button-primary />
                </form>
        </div>
        ';
    }


        function getConteudoHead(){
            $conteudo_head = get_option('conteudo_head');
            echo $conteudo_head;
        }

        function getConteudoFooter(){
            $conteudo_footer = get_option('conteudo_footer');
            echo $conteudo_footer;
        }

        add_action('wp_head', 'getConteudoHead');
        add_action('wp_footer', 'getConteudoFooter');

?>