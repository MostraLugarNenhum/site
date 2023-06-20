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
define( 'DB_NAME', 'banco1' );

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
define( 'AUTH_KEY',         'b-k>GT|uD/m5b~zm!Q<bw(qjGtzt3NKwXI>-:l]opIcV E7{2>of-7UyaE2QFG7~' );
define( 'SECURE_AUTH_KEY',  '5>F$j*-VQo:}?vZ4dqQeLoM<1vs5p4yFT,ylc4G5hvq@Fok|1+LE{r]F96qp% B]' );
define( 'LOGGED_IN_KEY',    'l!AE?.]tk=NVhuVDb/[<{q7b}t|/5hjx69SNr|e9~!]n-Gpja3K4Mw,~5~h>q{;l' );
define( 'NONCE_KEY',        's}Y~hRp02Ig9 bcpyW[,zl^g<TDczC$5q(2AwjV]hEZEhY#QYf<VsVlMB? R1O!*' );
define( 'AUTH_SALT',        'phIPjEGm!iAtF4rO_`-y7lrL|t5YE++q;WH*:bv,A>#bhKR.6p$I`j&7c>}s~;i-' );
define( 'SECURE_AUTH_SALT', '/_La]TmMw_R=%ot@fFXP<8)mZ Zw%;M2yMCP^6 3C`jUs(gNEtt&uzmM;Pq.vO!*' );
define( 'LOGGED_IN_SALT',   'HYHqR#}5=3#7qjj*sw.8~2pw,I)hQ-e58L-r1FIqW4@J^!|{<3eA3};:X^r 6_iH' );
define( 'NONCE_SALT',       ',mUXS_m&LyN@>/{f}2o-4m#W7tN00hfspj| cFmmo=(:K[0/ P$qC?XPJ]M_8yTZ' );

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
define('WP_MEMORY_LIMIT','500M');


/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
