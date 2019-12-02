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
define( 'AUTH_KEY',         'C]zNmiq>55DqO:D2b+/xm}]HepjLdXD5Jx<Na8,i?j/[~&i1s%54cuqG~!1N@|o>' );
define( 'SECURE_AUTH_KEY',  'sR:+8NXmUKg$wh]$sn,N*Cu/w{!r-B(<hkKv~ T+4<x17j6?By0VOa0Vg1L~d#Ye' );
define( 'LOGGED_IN_KEY',    '2x6n{z0 )z9X+lF$+v&7!ol7_%7mf:CC#n?(~&CHo3f=oi`2@#.XA:h&HB]Z; aJ' );
define( 'NONCE_KEY',        '|(Vgf/BaMsO9:AhW`HoL[}KXG2E0MX9BLH8Jpv7v}:jGvqi$6/Hin^p#k#O^VJ2E' );
define( 'AUTH_SALT',        '=fig$iawZzWMq)7ip*nGS:TsR?76IsI!}lmL+b+U.u.9@P0v[@NIlh1QeevI,uVr' );
define( 'SECURE_AUTH_SALT', 'jH54S^{R{H,0P=o<NNJg^Ne;,GnV8~^7zh%/penu&7g]bsp7U*`e6tHRiSQC8`MK' );
define( 'LOGGED_IN_SALT',   'BgODS1e.0cxk{m5z$#;/i?C;/W:y-+OI)H!J{N=lrVeXPx*HQhSKUG)uzp;`mugZ' );
define( 'NONCE_SALT',       'X+}zM,f9$tG#+4+M+qZBhn:t>apH>Zn;)Gy@Ea}+ZKWv}$HTQyIfUJvxj/d<e3fC' );

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
