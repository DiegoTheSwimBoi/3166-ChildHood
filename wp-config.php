<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '3166-Childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ek<R$^s>XNg}j;!7fp%+#X2wBF!kxw@i}G/*Uiz`Hxoebi$x-Rq5:K`syL$ReLY&' );
define( 'SECURE_AUTH_KEY',  ';<iBBKJXj_}`x=&n2KKD,V~(i0-98U}oeto`j+dJ.c>B:XI3<B*Kv<bmzm0_Lpy2' );
define( 'LOGGED_IN_KEY',    '{iy5xC6 [w-YM.86_!wBXN5B/G2zyEHEm/nE-j#r%c{m+CZazb4O!9]}2>/(Oiv-' );
define( 'NONCE_KEY',        '776}l5#qlp4&[Y-BHP-b.%&<=D,#aO1adhAlGF#I_bp|>wGj>4)STrmH$CL JmBy' );
define( 'AUTH_SALT',        'NiR)#+]$SYww$r(q8(ZXQZ(CX5Ac*oKbsgD(N*hh<VzU<=it[ThBp<q9z<;C_w`.' );
define( 'SECURE_AUTH_SALT', 't/F5#>19a$!X_!Pa@2zk)5A8>ZJ[;kF9e`k|SzfUi5|gm>4 Z;2J6{#4KIGy2TyF' );
define( 'LOGGED_IN_SALT',   '$LY]R=+Woballg5qyGgwt<Q<0CA?<eLfa-HZL${7y-Ne~x%Xh5[hYt6]rD+(#>qz' );
define( 'NONCE_SALT',       'PvsP(cw@0J$bdfQ~cb)<IxLpyyW}ip_p@tt3U[/{On:1f4afNdK}A25Z?rSp&FLZ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
