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
define( 'DB_NAME', 'wp1' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' >)HE)1MvZ-_U*<Zpwn|99?Zi38/:[8gC3==zGQcX)+m%8-DPjC|VKHp)QDPRQVW' );
define( 'SECURE_AUTH_KEY',  'GssJ},h-N`B~A_T5T~q2,`zkHs}B},UDx65lMP+tOk*,/=MU8Y}){~njbU:>;MLC' );
define( 'LOGGED_IN_KEY',    '3XzZ/ns^d1rEop`6]Gh0?&hRvL!)SYsScI]dzxfK_gzk{1$9eHKm@tx#<>#qU$=4' );
define( 'NONCE_KEY',        '05_<|<q5]/c-7`!B^tY(W!E2/hR%Dzi+&G*$TBUeyjgX[rL,*`@z6VHs#v&cdLq@' );
define( 'AUTH_SALT',        'pK^L3h[3[ZfRl|?|l.,j2e@~m7q;l,c$yY(H2Zv{+g2~LC%i hPDvS:vL4f;U8a>' );
define( 'SECURE_AUTH_SALT', 'Y-nkv5W_01<<VLE[zW&>2nYk QXqD8Bf/4ym6.$gZWNDxzdp fD(AO%@*]E0@/1@' );
define( 'LOGGED_IN_SALT',   ')Q(4e[e^x%CM;8cc,)R8!=S?yyjy|*y6Kh$5aGd@v-)22k-b66GAC[i$CWLLT{MM' );
define( 'NONCE_SALT',       'U3P{~8`a5+Pr/S/}U:mUa*-S:htE-xH4xjt^Ups0y].J~3>&Cq%YR!ntDd^W$F{^' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
