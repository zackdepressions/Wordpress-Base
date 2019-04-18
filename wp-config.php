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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site_telescopio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'hl0H+}qRC4qGSfSFb*&&U7+Yaw1TxCR(K@ 9JG8OO{gbGb(1&1I6bD:Q9P4t>a c' );
define( 'SECURE_AUTH_KEY',  '12ddnEoJq*/^d^X+/8)# ?ade1z[ 0-|*d/#]Ln+c6..;+OrtskP<kW<|v4mW z,' );
define( 'LOGGED_IN_KEY',    'i9sz8vnT%=nLY2d,mwc4c#wLh q>6ud4KxpC3/}LjC+3h<ln*h0Dq23lJ-4ty*0s' );
define( 'NONCE_KEY',        ' 5w$@jdrP.May6l=NQUFq$1cpN.PB$?[JQTU3vPU3v(a,K.`kbA)0(Z/2nr@I]K?' );
define( 'AUTH_SALT',        '$UI~{tC0tar|z8)qW%{M=!].WY<(N5O8a:$b(JOv(%i,1&DyLKI{bV&7y(;.lg^6' );
define( 'SECURE_AUTH_SALT', 'nI7VQb9 g]7xVn5An-_bd-3NBv^LglP._2(j`}1`-5*;V?w<MwJH}BIu!$Yv>X7t' );
define( 'LOGGED_IN_SALT',   'gQ$/]v! Qx7Z7j-v|LL9OY~:VJZN;MiN51LebI&CJfH5o3ie0|@c]FmX`R[bA2;W' );
define( 'NONCE_SALT',       'fF:Ivbv3fqg|pa^WcBcJSJP@T!J9VjSA.e.; Jm1q})2oInc8b(izD=MG/n{+Dma' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
