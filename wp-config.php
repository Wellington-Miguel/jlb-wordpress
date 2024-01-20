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
define( 'DB_NAME', 'jlb-wordpress' );

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
define( 'AUTH_KEY',         'cAd|BtV-!7mus|s5cBvzmnK*>j *i<P~zz27=aJib!R0bUvD++s=td[[ sixV#.[' );
define( 'SECURE_AUTH_KEY',  '=$jm-x0g5f%Iv}o#P<VLxk4:#Gr&[]F-(!),f1ptc]APW|!>%5sip+0@Qk@ab@IS' );
define( 'LOGGED_IN_KEY',    '/K#L0+ejWPaL/,&jGMmO(nx_e(Eec#u1gBmYthT3-[:mID7GrzDpm?3?5i3PkSql' );
define( 'NONCE_KEY',        'g=,2_?JX<j^De?a6.l;87,sKhQy HR4651f^T]=MW#GO}ZFn7^ W ?*#FES+q?g&' );
define( 'AUTH_SALT',        'S0lwB5p$$r:hB$#>.Qx3*<U<~i=xXp!cmlzZCHE5l[sX@,ORV*)P-2sYsU3%@vg<' );
define( 'SECURE_AUTH_SALT', ',^;lD`]n)-D/->HL6VEWj6;7L>,k`*mM&)qHQMSs[f^-yw)1&g=GAi$$? eH?zi0' );
define( 'LOGGED_IN_SALT',   'QRh/k4yt,uWPihg4O6@$:7_mO6k>RFs73$i(v<6nTuGa%{;x.A{/Vq+5R1></&Xf' );
define( 'NONCE_SALT',       'g)DUqdCGEhU=de76*hv9.PhqKjiiWV6Q8ic3xFQz# >QFm$b(xr*wqoS8IOy8(`a' );

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
