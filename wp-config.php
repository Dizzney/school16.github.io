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
define('DB_NAME', 'school_16');

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
define('AUTH_KEY',         ':APZMs:?Kan?dIh3vd=r!?sO<7okcuXc9tkmJ N7~oNMpd2-6OZUPsy<h(A*,R^}');
define('SECURE_AUTH_KEY',  'jh*xR)[]a+{:,OXDS+:sWp5uCW:ST<9wT2q_E{)<&+;J`[%:5Vh{j|CQ_EUl-J3J');
define('LOGGED_IN_KEY',    '}=$dFE,Y3>7:KkUG#-6:O,H^481([MxH|V]`H23(HS3h7EUGT9,jZ=0xonSf-gWw');
define('NONCE_KEY',        'YfVo49gq*ds7WU]sfV)q-]RSCrX0f>]e9Z2>O:5BmeK;dh1z[iBk 2+J}]7bC.[4');
define('AUTH_SALT',        'lNWCw3otNcZC|V;Yd}]~#B30&oSR?g!#t+z>pax`p)25x_>;qh6_lr;tybcl# A4');
define('SECURE_AUTH_SALT', 'hKG[6vY37Ea wJj)19RK=B,hqd8&n}{ir`;%c{Xmr)?PJOUmnTchWS8:nVCXE][<');
define('LOGGED_IN_SALT',   '@&jZ=*]M992%?P55g]~}d}n8}q;Z^0:k(EYWt|dGPy3r1z9B=mE_dSKOEJJt72rN');
define('NONCE_SALT',       'U<Osy}WPWN@8i[+.HjD6.Y01JF;BDy40I4TiN_ C#:T#&bx#%8Amcz#{Z`D+.7jL');

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
