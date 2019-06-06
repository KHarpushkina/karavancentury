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
define('DB_NAME', 'karavan_db');

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
define('AUTH_KEY',         'Qq[KSLc{%y?m0[I|8l?L|I7pW,9>I&%V~(t_j-Mtr:Mryx +H]M3A?d!nH`~}#hN');
define('SECURE_AUTH_KEY',  'Yb6KT}gbAWO(dPiQr=muSaf|K~IQO2I^3+t-uB@{~-3]F%lh%bM[/tkZK0.~#2Xo');
define('LOGGED_IN_KEY',    'jU)S6*EuG(>DW%tr2&Me@0,N0$>o0%X@jk6Yy<yu{O]z:I{H@yD %{Sm{<|L=#y?');
define('NONCE_KEY',        '&c;|xf9?(ZzJ0u@tY@3Oka0%fZm<f}h(`*JlRAbN[sR%/n9Qad+P7|R6.1z[0+=q');
define('AUTH_SALT',        '^R)OA#lwpW;pMUa1x?/CxK.Ify= 1B&PF6vMMp+xPlAxWm%cSD4X]=6m5cmJDrpS');
define('SECURE_AUTH_SALT', 'UYthTq(C!.H8.6ar-JP6oWMt=#]YJpl.xYGHBh]=u-Xx~]Qa/h%UVaT S,mLnZ@A');
define('LOGGED_IN_SALT',   'jd:flF>|cY)X`sI>m6Y4u#mkwm[]{$BMaL_YX, (_/M,C5$d:8MMYm6lM>j[MwxR');
define('NONCE_SALT',       'wZ+MIW@>.<9*kq;>rB{`h+=]<}&3cpX^K9Rn+j`4.0$B+Ou&R-D_>XcyO2Q:U^A0');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_MEMORY_LIMIT', '128M');
