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
define( 'DB_NAME', 'portfolio_tiagodev' );

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
define( 'AUTH_KEY',         '?(SNbzdZrC|3l%i)x{>/vCTVP#1[@ekUh1{zGFl/b5HKHb3?)36(pa5=Ui>V;~M`' );
define( 'SECURE_AUTH_KEY',  '~$B(mcW[-@jB^XL[Y@:>>npt]gGP^@%B$7fPcp=A82nSac9a%0e+_ypdULT/m&7a' );
define( 'LOGGED_IN_KEY',    '6ro;Et<4)uXjIy0GzaF:G*G)`JnaL^QDNqT/nw@mFyewlq0rZ)D=*aZk2}b>Ry9J' );
define( 'NONCE_KEY',        '!x]P04rPpyG*gH){nzz,nP.o> ?rqk=ec +WBtSYg}GS#`>g/Lu[}?b8(!a[p<lP' );
define( 'AUTH_SALT',        '10lz)7r< f`kDHqy1M/nAUk!KdVN( lF?,^ZC]AN; CPPh__Q${si^.2UuAX2{|s' );
define( 'SECURE_AUTH_SALT', '2/cO5V@UV8R8jeWSJ@!m9 ~(.-zeHSvlP7JjRU.6`Iws:eD3C_?%wm|!_UIep7eq' );
define( 'LOGGED_IN_SALT',   'cLU!-6R9fd:pBb]v&{E%M5qel>,;2n-q7S6%`%:1H*D_1TR=:DXa~td0hhFqWE?+' );
define( 'NONCE_SALT',       '>COv8hCYBK^hfRSKXp`%do2OBJX<dE ~A?NbQ9V[C]U]WD$@rB-ST}[4G5g4K#dS' );

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
