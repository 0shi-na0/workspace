<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * データベース設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** データベース設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp-01' );

/** データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** データベースのホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F@REcmF_FY#&1B#:fMOjN#kZs=q=^:r_n/s4DOdmSNl~`Hxvt62iTh]viuEWbfM)' );
define( 'SECURE_AUTH_KEY',  '+bP;=Sr`$Ck* ?ezO`KQ1XTmb0LuZoEmBY$o#&(2CfQl+haL;HEXyHIAW_>v2u|[' );
define( 'LOGGED_IN_KEY',    'wRR:0/N]bOCJ1:ql{fa^BRs)In@ppHu( i$?a=%5cuI!{XUjfI,Y&jrj7,IIr[tf' );
define( 'NONCE_KEY',        ':r-D!?1|j2b]`G#!7uv.1<mC>m[%5`#rsH=4t^+w56&K]I3(rW5 9UPZn;!|2G7O' );
define( 'AUTH_SALT',        '$8wAs|H1dxD)e f#piqI6:.c)-.2aszCGl?x!Nj?3{0yq?7M1*-F(we3pTWP$.hC' );
define( 'SECURE_AUTH_SALT', ']!ZzB*NeoKK]uBSaF<K%~D>qOUamxM=RL.qmq$/E-NgSl9`4l&=$j9UVH*%BXBuR' );
define( 'LOGGED_IN_SALT',   '|VMkqRs({^<j]g}uEzA2PT034H52p%%5xn)GwjoO|OLdxh]1XrlK%rhP7)EY%<wW' );
define( 'NONCE_SALT',       'W27{;p7V0}Q6prKAD#$i(Cd|a~v,w6~KmCSuqIJMQZGs,0S/PrJ$^P73?v2`;Nut' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
