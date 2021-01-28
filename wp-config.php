<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'admin' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '20712234' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

// Reescrever coonfig padrão, após isso inserir echo get_site_url em todos os links do projeto
//define('WP_HOME','http://www.meudominio.com');
//define('WP_SITEURL','http://www.meudominio.com');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^yBxh%X(bzTTa){pb1wd[6!=n<MP#Q20%atZ;7$yN3mcy)I[1.n3F/o1M[C?u5F<' );
define( 'SECURE_AUTH_KEY',  ';GaY_re_efy#Vf}-xn.VS}6p%fN SlK<&ne)DzyDXMSt3j*(:onBfMj5rMGvprh8' );
define( 'LOGGED_IN_KEY',    'NTX:<&jREW~<;q_GCigQgI+ k_$!jB%fEt[m=SoY>I^-0-Ne{JH8}b39(@1b5<Aa' );
define( 'NONCE_KEY',        'y:g@|UrvO~>Xf]/82*JDU|7Od3zM;{|]m;>?`,$tU{}u<x_>rT$ 4U|3P($E76>*' );
define( 'AUTH_SALT',        'sgPSWg&k!wK7(gfF0pN{CLUFEbeB;aPIf>6+NL/.oxAF=ju[(Ez39/i$})A+Z?&k' );
define( 'SECURE_AUTH_SALT', ':p|a5n8f@3jPz^uM6H=L[^%m//i_Z$mDv4*!KQp-GwHM`2g5r}@]0f]6dJIMIc2P' );
define( 'LOGGED_IN_SALT',   'M)tZv<^{oN-xzU/2I{F3&~JGG)iiIAzZj;[`1Gt;59q`%O5XPQ$aZz/?:}1</bgW' );
define( 'NONCE_SALT',       '^MFG?*d#Mb@[?Li<vuJ`8.e~h>F|9M}Sg 0Tfm4;4POV=)0N&#^hTAe-u)Kb2Lih' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
