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
define('DB_NAME', 'cf97289_bitdev');

/** Имя пользователя MySQL */
define('DB_USER', 'cf97289_bitdev');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'PPHH3wpg');

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
define('AUTH_KEY',         'G.3(l ]m<[$0Y4entngE^K8$S,Qhd3:x^gYszROa:}0P=GT[h5_X#:f]gW~TOvT>');
define('SECURE_AUTH_KEY',  'Uo~Zl(<C.hBf;?!EylRs:h<Yx$/GPvM2hY^+|cfi@CWL7a)NCrwT]S|,(mY%R,ye');
define('LOGGED_IN_KEY',    'juAu%[}J#=.#bFxt30sr;O)3Yr@g~d3}g8kSOgWf!0O()jdvHA:I<p79>n>*bJ)D');
define('NONCE_KEY',        '_gV7!<T-C:%Xf/j.AsV5$QO=C1#i5^)3 y^,cl,##8#>({xFv^<J,2%5OkpL,HYA');
define('AUTH_SALT',        '6 hMk!P)b[2w%gqi$phU40s+NN0g ,v.zda{RDsq)] 3NIYsTcCawvemq$vcxDTQ');
define('SECURE_AUTH_SALT', '`15y;%AE9-60TjNrQvkq36Rl=<`Wi[z1=SKJ;1vT^N+d}oM:o%}x,#_lE$JBQsQr');
define('LOGGED_IN_SALT',   'tlEfj`n[NerCzHdL`,(?KI3iG![Y %tI85KI!rmsK[N^z|,g(667,1koGZ$tj,HF');
define('NONCE_SALT',       'n*[eV!^(bU97iK|5F&>J1(I>lx& `U18TtVkfrQ;?4^I=C.?B~bD+_hSQ(;/PKWZ');

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
