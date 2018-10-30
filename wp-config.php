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
define('DB_NAME', 'teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2XpDPyOr_K^Suh_2caVH:/Tg>wJ(QrV}w;1EWSvZ9H$>VCBcclQigG(T>e^Tj#ps');
define('SECURE_AUTH_KEY',  '04(6;7MU%WaK&:+lss<g9GVbC&]Wz(]q>lrkd>9]{e/4Cwl^umoBh)@NF_te#eKY');
define('LOGGED_IN_KEY',    'Tuy8G^RVcd*(PgVnZ&}z$~Uuk#`M liQxh2Ty~nB!HiGaWTVj*|c_HoaQ z2$%Cs');
define('NONCE_KEY',        '(3F96h?[9^]>WLh.Hkn8r);^`}{[2SN yS57Xda+iqS$RuWAE_yz8NM*]H>dq%a/');
define('AUTH_SALT',        ',A=CUM`,Iq9pNlV2<7!H=9^pyI$[+-Mt56CH9-H?1}FI0q:xV45O4Dwp$Uw=mH}3');
define('SECURE_AUTH_SALT', ';Da7|_*YsR^r{MmSs6e_]qyT JYtn2@lN@S%z`3#+C? n{Dv-3{U> q3>i9Pg7{k');
define('LOGGED_IN_SALT',   '3KaD%2vG2Tl}%ngEG!f[7,U$m/_AgxC-i21+||.}z?rF;~{++ZCjRYnxSTc2Qk5M');
define('NONCE_SALT',       'sGC5L2,6P{|6eD{,3|)E2m:o&Yz&)23MPk!i_u};z$/{Ms#Jpw}n*D.tkfM{C~q}');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
