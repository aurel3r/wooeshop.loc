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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wooeshop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'c3vaFuQi/`EPzHk>+gVbikpPX, .9i?Hc4rnDjWqw~F=tSva=dbQ#tPwU)p69ruz' );
define( 'SECURE_AUTH_KEY',  ' &B-%fqc<d9AqZvcE6=_>xZ~;eUJL{/C2K.y5~DnSI^p,}E1TUPPA^fC:4D+6oS5' );
define( 'LOGGED_IN_KEY',    'A?&w1Q#J={-&ow~)5Nbk`!J21:ESpX37ChWU7$`3IP;} 9lRE=:$%q0P^C.It7ab' );
define( 'NONCE_KEY',        '_M-j$x/c@xLk*ov#}_bXF@r#Ad#VTs9k8&8V;8-s)#bT^_gu5V&t`$hqRs_#E4Gw' );
define( 'AUTH_SALT',        ',R2yd=]|xKkMA*zs>O)J?SV@i>?BUsNsgPSW ;;~S&sB,Pw?SD!7e`i!=4T8bY$s' );
define( 'SECURE_AUTH_SALT', '9}{Fc@rmJR`GiD2%O]T]i]7E9N`H_9qzyb>su_:m+%ii+psbK,Ui2_*S8E_a?Rk,' );
define( 'LOGGED_IN_SALT',   'T-}d`r5>383Fu)C~1^1]csL$oU e|tz{ZFqT$8w1Q$jP?|mTKyDA`w{.Q5bJRAeL' );
define( 'NONCE_SALT',       '0D]U3QW=@)u`K^.=(Yj^?` 3p-Wps/5xn`z2YSaWKF/-X<+j4=b|!(f^w&AsAn.W' );

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
