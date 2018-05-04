<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp-wood');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3Hs{RP{p@f0fyzQu*CQo%0n&]52lI;GUceOvFvd!TvJuyj|6 IZNp<+ak/!}w0jd');
define('SECURE_AUTH_KEY',  'h$jo/|6#`,YjY}=kx^@PdH?0$SJ)+bF8G#Zoi00@/YQZMb<lHhiA5b-J?L!DupIU');
define('LOGGED_IN_KEY',    '[j,55u/Xew^mD4y5dO>x,tQsqfB8<LTxk~Nh1/js~m!=!G vAVc.S,Vq7.Fb )QV');
define('NONCE_KEY',        'rJHi8StUPIgRhXh]$USjud%VizIiaG.l^k]k*[GS:1tbV]R-ebC^iKkw(Q-_WT8-');
define('AUTH_SALT',        '-B}pj%VxAL=3;kw?PG<xPd^m3v#6L4FqvR&O*WD.&!l}JH6$Bi),/w[xu3UyzL44');
define('SECURE_AUTH_SALT', 'x!NUKRr&M0I&J&.ewl*,MEq`z2+^X{WUy-S_5/M8d2g[rvmlty_$-b*jB0-x<b]6');
define('LOGGED_IN_SALT',   'Y`00@I{Mk`^tC!qT+5`XBwV_UUY48@C|+s0LjsgN$TYOO3izWYspOQDgR!#I?.i)');
define('NONCE_SALT',       '[6cqvz1oV+qS %R8F9#/AC),Dbs}9A9V+8u0It#YK{=3SqGWF#&Eud$Ys=vWr5+a');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
