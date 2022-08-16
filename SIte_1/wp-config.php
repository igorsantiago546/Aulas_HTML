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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'gzsport1' );

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
define( 'AUTH_KEY',         'Tj$o,X>{rw-4uQ>dkDX;k6))hFX|uTkW[l<^ytSf]*7:2$.q=Z_JD>6Wu!|d}zu@' );
define( 'SECURE_AUTH_KEY',  '%|.U$fbO+Z8EP!]@/]@@9b$)2X05!)^G:A]-r2X&V*<qI~:V1E<pt*zZL%;ZM?7X' );
define( 'LOGGED_IN_KEY',    'O^k[lb) a(d8OrJr1z{d0d{TB$j++x0tbvyDC&Z~2K}|4>A3y,n4r9NmU9]PKB=}' );
define( 'NONCE_KEY',        ',b+w7)d+:TDG6u2;j)TSN~[R&}p<rb.EbD;lv:WI$G?W|(&]*}q!_D{+RjZZC]IC' );
define( 'AUTH_SALT',        'jxiPVi-Y`n=!wU%$c<D..3!Bm8DsaQt](>=97GgQZdIam{LK=V%diB@rEfuzFI s' );
define( 'SECURE_AUTH_SALT', 'kk]Oo# +SC$dON`Z5NQ=ejvk+;t:?M;Xn#vv;9yTWpPK.~-IM(+Z+L=>Txa/U)Nk' );
define( 'LOGGED_IN_SALT',   'Z!T/f@o1;Lnq{d5s=8x4P{CwYwh!63HD>S3GgqLk<Ly&9Fxj>F{j<.!53:3{-711' );
define( 'NONCE_SALT',       '|[KiVS.CKmWVXa83}>m^C?C9uM4}ZK#Mh<>!oLMhsONJr}f&s5]YLe@]Qs K:L&,' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
