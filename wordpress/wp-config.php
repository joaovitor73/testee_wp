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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'blog' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Vj/]O{D.,e1bCjH5IBsnr`W-do)p0mX)Ej~+}s]lhX(Z/ypYe$2L)HE;;K{wYTGK' );
define( 'SECURE_AUTH_KEY',  '-oJ?9EC0wd`y4<eh[;#C`ux`$ ?DcAIQeQ>wt6mWc}J&Jv:VQ}_}{AKo3a<GbO:p' );
define( 'LOGGED_IN_KEY',    'IJ?sa0qA_ ,#*lM7U}m7rq0PCzC=*[pA!F~A96j 6|{ES_lIXkUi3YL,gn)8GzL*' );
define( 'NONCE_KEY',        ';!VX|EPFOo&e3v0^bnc~2{MsHHSpGMenyx/EIgGjIRddesmVXT_E0CjNB3l=kvFY' );
define( 'AUTH_SALT',        'sml)~ezF>fr78O}9~un960ZCf%A()0+-K&;fNlc41V>cRn.G#3Z@%I-}PvB$4^[C' );
define( 'SECURE_AUTH_SALT', '}ajMLu|7#=OBG-tkO[4,}Y#qO^GC_m, 5M|1 QHt0}[ML,hYi73~*xBAioK8sp}z' );
define( 'LOGGED_IN_SALT',   '+tgAazoqu|~J%:|huW$_.Ft_Cn;{c:E!FMc8,ywZ0sz<Y,%?*!|f?,g%H!/Zaz $' );
define( 'NONCE_SALT',       's)g R.H@<j]X?iV*M/cYX,4XLVbF#0f/axCB:#Rgf9px3:cgLFR7q4#4L6pjW_YB' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
