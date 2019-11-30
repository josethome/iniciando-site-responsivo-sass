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
define( 'DB_NAME', 'portfolio-tiagodev' );

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
define( 'AUTH_KEY',         'f+:HkVO.xeND53^L^&{dkz?} p&7A7PX6Ah{@z^y<It=m;-R}s.GbwpC5z=RK^:8' );
define( 'SECURE_AUTH_KEY',  'Ov/YRJ|-e)//1kaAv!c3We#V8y5#f|~<L^zs8V$l_} )fJ%Ur$3IK:v2kfopV>+d' );
define( 'LOGGED_IN_KEY',    'lK9(%K0a /S[8;BVs}C3)zS}vWZOi^ krz=,1#}%x!RS,-6mD@is-|6&gk6~FB/Y' );
define( 'NONCE_KEY',        '_Z_}?Gd&nyvD^Pdhp;tCl~[2:];^OS`P[&ks]*?6ZKO)sto[^=i|r|bq~0$vNiRH' );
define( 'AUTH_SALT',        'B%~X;nxgt)so&35<j2kmccSp^>[x!2{[TMu<cX^0}j<0(n@hleKDp=6sj?bcZ)G$' );
define( 'SECURE_AUTH_SALT', '/!(hf}:l8OB|9bN1R2@6lOaHlu0zpz8bbBN34qZVS=C{=)*qBsMXe~6{j3)w3+i[' );
define( 'LOGGED_IN_SALT',   'iZ=*sQ&+imzn;t&CVjDB^J%#,we7OJ|DLM,A1gChcjrn}cYb74PWaR49;!5-5)OE' );
define( 'NONCE_SALT',       ']7A]~ntPVb=:yaIDa y/0:{x7{DJwb3]`zd J%g0pw6]&`4pL:o&3[jYOKa@cXm<' );

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
