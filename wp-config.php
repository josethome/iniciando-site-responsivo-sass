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
define( 'AUTH_KEY',         'BzWV0]MfWb+Zu7<^c3a<`/WZc[Dt2P@PXqdMaXi@oUB6@7S.`#a2 B&|X>E$.%@u' );
define( 'SECURE_AUTH_KEY',  '#0Bc@P&?n2fS1wtHFWv.]o%0A%OR%9#mx=qqG?{l?oekm=B)uJh-=k5`rQ&=j%Gg' );
define( 'LOGGED_IN_KEY',    'RKGz,I4)oN-ue*bDXQDZbr~Sw^epX0V+9pI~;x?W%3jW1r l!*pfDGsGP-3|},D,' );
define( 'NONCE_KEY',        'e?B*EeH&1({gBuT%I24YS`jU*]lh|GZuq!_}i_rk/ %3dm}KA03z]{pO0+d=+jm[' );
define( 'AUTH_SALT',        'Sd.SUrz7%>:b/]eE}RvDUY&pGDSV-<Ma&2oDlB#[:V5EOYZT?Y[BxUCCP$)boAyf' );
define( 'SECURE_AUTH_SALT', '+v(_h7[uSf1Yj5#s%^pZjW7_8cc>h3Nwg0M0r8``E@0X93,=cGt.ti)D{D||=S;?' );
define( 'LOGGED_IN_SALT',   '*hbR-e]H^z/OC<_{A,+wX 2V$deY5k1v4)DQigYZ_;D?Af+*iI|ik7FCtk0L3v&F' );
define( 'NONCE_SALT',       'uRU8vq/!=$Oo6`${hXuy6gBL;XXT[f?%F}x!L.8!B!t5b8{_aQDpk7-DQP.-:-tf' );

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
