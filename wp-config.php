<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'word' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'mexsor' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'mexsor12' );

/** Nome do host do MySQL */
define( 'DB_HOST', '10.120.48.81' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define('WP_PROXY_HOST', '10.70.124.16');
define('WP_PROXY_PORT', '3128');
define('WP_PROXY_USERNAME', 'josecarlos.almeida');
define('WP_PROXY_PASSWORD', 'Camilla!3');
define( 'AUTH_KEY',         'JPiEvmSYFAZQUCDY9nKo#O9V6|r#Egl;W(ZoUE~!O:k{n#=:hIpwk7DR6b[]x0QO' );
define( 'SECURE_AUTH_KEY',  'eeNxVmi,TX5{<?BQ^C-23H#d0vPK%!3#TIrJ>~`R{/Fe_<2B!]TZ7[8A@EE}_`2&' );
define( 'LOGGED_IN_KEY',    'cb9@^u]/i-g*)%d$&w$3Bg)_k}q8YlBslKcx|(L%g}A]JZC4&$ v ZWZ3`0wL+pe' );
define( 'NONCE_KEY',        '?7cCyj]:3;mA##li*0j4JX/DQVt(}(Vmt7M=_RZngB%EP<nD{^h_?[sFrH[jAyrN' );
define( 'AUTH_SALT',        'CD1mn T?vwQF[20%)#|%C?FT{j8a=?*p0HdkAhST pR.7G*@Y#b5|74$JV![5Ig#' );
define( 'SECURE_AUTH_SALT', 'bqt4GA|0/D?[*|Dr%4oOwH=cS3Nm.p~z`#UVT*A81mT:v6l~.Yo5>W^-* <[y/{,' );
define( 'LOGGED_IN_SALT',   'CU4wXSUuqzA;*,$+i86wR6I4/c5g#ISbQhpZ=rjwK9_ho7YxKTLu6~rL4.p]GQ$c' );
define( 'NONCE_SALT',       'aChhHa9N(seRqh!Quv=yVsc~1R5b-sQr63YO|Oz>TQPnJQaWZWkcZ4e%Wgk1j;go' );


/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'socialmedia';

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
if( !is_single() || !in_the_loop() || !is_main_query() ) return $content; 
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
