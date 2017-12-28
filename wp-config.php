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
define('DB_NAME', 'wp_sql');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'jVYv}xRcno-Vg@4;?+yJ?5[9K%w{eW+gl*UZ0/&J;a{OyM!g0aj<1%5Ms{%Z3$DB');
define('SECURE_AUTH_KEY',  '=w@[6eioNI2Mtl0 /:|ISDz21oj;[|(>t;kUS>3|e:]J=>vdY.-QkYsFwbmbI-c4');
define('LOGGED_IN_KEY',    'bKi_<a)T+zf FE7v]b3]mp6289v-DR=V20Oe#bP?NnrPyrqfLf=%89h<TmdEOVuI');
define('NONCE_KEY',        '[t)-j9|}QWUiQ=+>%Nxx;j5$lYuM6Pu*`ejTT{UOsn!c !1-3|N89Zl8ZxjnYiD+');
define('AUTH_SALT',        '6OH%uy-+%e9^g>!YidgMo+i|LK;HEDhn1F ;(;m+ |s*pps2s}>/Vv-Fd47,YwEo');
define('SECURE_AUTH_SALT', '4YH!quK uErc0gr2|^bBi-jd>+53#`OJ1[-0VM9|g[6~!C(P-G|4C4w9{4@>[10i');
define('LOGGED_IN_SALT',   '10Yk=SU&Ha0!E^SXnU)s(}(|aBPYKXS?@?d9y`aV.6?So+.vz(ne-6wFR&Ki/DW-');
define('NONCE_SALT',       'fXI:DSw~6pZ{+Mf}j#f`tpz<[XrVH:0|M#KhRQ[aHD<#ug/Zvq#?w31S5lPKpI7j');

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
