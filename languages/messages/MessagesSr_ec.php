<?php
/** Serbian (Cyrillic script) (српски (ћирилица)‎)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Bjankuloski06
 * @author CERminator
 * @author Charmed94
 * @author FriedrickMILBarbarossa
 * @author Geitost
 * @author Helios13
 * @author Kaganer
 * @author Kale
 * @author Meno25
 * @author Milicevic01
 * @author Millosh
 * @author Nikola Smolenski
 * @author Rancher
 * @author Red Baron
 * @author Reedy
 * @author Sasa Stefanovic
 * @author Slaven Kosanovic
 * @author TheStefan12345
 * @author Јованвб
 * @author Жељко Тодоровић
 * @author Милан Јелисавчић
 * @author Михајло Анђелковић
 * @author לערי ריינהארט
 */

$namespaceNames = array(
	NS_MEDIA            => 'Медиј',
	NS_SPECIAL          => 'Посебно',
	NS_TALK             => 'Разговор',
	NS_USER             => 'Корисник',
	NS_USER_TALK        => 'Разговор_са_корисником',
	NS_PROJECT_TALK     => 'Разговор_о_$1',
	NS_FILE             => 'Датотека',
	NS_FILE_TALK        => 'Разговор_о_датотеци',
	NS_MEDIAWIKI        => 'Медијавики',
	NS_MEDIAWIKI_TALK   => 'Разговор_о_Медијавикију',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Разговор_о_шаблону',
	NS_HELP             => 'Помоћ',
	NS_HELP_TALK        => 'Разговор_о_помоћи',
	NS_CATEGORY         => 'Категорија',
	NS_CATEGORY_TALK    => 'Разговор_о_категорији',
);

$namespaceAliases = array(
        # Aliases for Latin script namespaces
	"Medija"                  => NS_MEDIA,
	"Posebno"                 => NS_SPECIAL,
	"Razgovor"                => NS_TALK,
	"Korisnik"                => NS_USER,
	"Razgovor_sa_korisnikom"  => NS_USER_TALK,
	"Razgovor_o_$1"           => NS_PROJECT_TALK,
	"Slika"                   => NS_FILE,
	"Razgovor_o_slici"        => NS_FILE_TALK,
	"MedijaViki"              => NS_MEDIAWIKI,
	"Razgovor_o_MedijaVikiju" => NS_MEDIAWIKI_TALK,
	'Šablon'                  => NS_TEMPLATE,
	'Razgovor_o_šablonu'      => NS_TEMPLATE_TALK,
	'Pomoć'                   => NS_HELP,
	'Razgovor_o_pomoći'       => NS_HELP_TALK,
	'Kategorija'              => NS_CATEGORY,
	'Razgovor_o_kategoriji'   => NS_CATEGORY_TALK,

	'Медија'                  => NS_MEDIA,
	'Слика'                   => NS_FILE,
	'Разговор_о_слици'        => NS_FILE_TALK,
	'МедијаВики'              => NS_MEDIAWIKI,
	'Разговор_о_МедијаВикију' => NS_MEDIAWIKI_TALK,
);

$datePreferenceMigrationMap = array(
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'АктивниКорисници', 'Активни_корисници' ),
	'Allmessages'               => array( 'СвеПоруке', 'Све_поруке' ),
	'Allpages'                  => array( 'Све_странице' ),
	'Ancientpages'              => array( 'НајстаријиЧланци' ),
	'Badtitle'                  => array( 'Лош_наслов' ),
	'Block'                     => array( 'Блокирај', 'БлокирајИП', 'БлокирајКорисника' ),
	'BrokenRedirects'           => array( 'Покварена_преусмерења', 'Неисправна_преусмерења' ),
	'Categories'                => array( 'Категорије' ),
	'ComparePages'              => array( 'Упореди_странице' ),
	'Confirmemail'              => array( 'ПотврдиЕ-пошту', 'Потврда_е-поште' ),
	'Contributions'             => array( 'Доприноси', 'Прилози' ),
	'CreateAccount'             => array( 'ОтвориНалог', 'Отвори_налог' ),
	'DoubleRedirects'           => array( 'Двострука_преусмерења' ),
	'Export'                    => array( 'Извези' ),
	'Fewestrevisions'           => array( 'ЧланциСаНајмањеРевизија' ),
	'Filepath'                  => array( 'Путања_датотеке' ),
	'Import'                    => array( 'Увези' ),
	'Listadmins'                => array( 'ПописАдминистратора', 'Списак_администратора' ),
	'Listbots'                  => array( 'ПописБотова', 'Списак_ботова' ),
	'Listfiles'                 => array( 'СписакСлика', 'Списак_датотека' ),
	'Listgrouprights'           => array( 'СписакКорисничкихПрава', 'Списак_корисничких_права' ),
	'Listredirects'             => array( 'СписакПреусмерења', 'Списак_преусмерења' ),
	'Listusers'                 => array( 'СписакКорисника', 'КорисничкиСписак', 'Списак_корисника', 'Кориснички_списак' ),
	'Lockdb'                    => array( 'ЗакључајБазу', 'Закључај_базу' ),
	'Log'                       => array( 'Извештај', 'Извештаји' ),
	'Lonelypages'               => array( 'Сирочићи' ),
	'Longpages'                 => array( 'ДугачкеСтране' ),
	'MergeHistory'              => array( 'Споји_историју' ),
	'MIMEsearch'                => array( 'MIME_претрага' ),
	'Mostcategories'            => array( 'ЧланциСаНајвишеКатегорија' ),
	'Mostimages'                => array( 'НајповезанијеСлике' ),
	'Mostlinked'                => array( 'НајповезанијеСтране' ),
	'Mostlinkedcategories'      => array( 'НајповезанијеКатегорије' ),
	'Mostlinkedtemplates'       => array( 'НајповезанијиШаблони' ),
	'Mostrevisions'             => array( 'ЧланциСаНајвишеРевизија' ),
	'Movepage'                  => array( 'Преусмери', 'Премести_страницу' ),
	'Mycontributions'           => array( 'МојиДоприноси', 'Моји_доприноси', 'Моји_прилози' ),
	'Mypage'                    => array( 'МојаСтраница', 'Моја_страница' ),
	'Mytalk'                    => array( 'МојРазговор', 'Мој_разговор' ),
	'Myuploads'                 => array( 'Моја_слања' ),
	'Newimages'                 => array( 'НовеДатотеке', 'НовиФајлови', 'НовеСлике' ),
	'Newpages'                  => array( 'НовеСтране' ),
	'PermanentLink'             => array( 'Привремена_веза' ),
	'Popularpages'              => array( 'Популарне_странице' ),
	'Preferences'               => array( 'Подешавања', 'Поставке' ),
	'Protectedpages'            => array( 'ЗаштићенеСтранице', 'Заштићене_странице' ),
	'Protectedtitles'           => array( 'Заштићени_наслови' ),
	'Randompage'                => array( 'СлучајнаСтрана', 'Насумична_страница' ),
	'Recentchanges'             => array( 'СкорашњеИзмене', 'Скорашње_измене' ),
	'Search'                    => array( 'Претражи' ),
	'Shortpages'                => array( 'КраткиЧланци' ),
	'Specialpages'              => array( 'СпецијалнеСтране', 'Посебне_странице' ),
	'Statistics'                => array( 'Статистике' ),
	'Tags'                      => array( 'Ознаке' ),
	'Uncategorizedcategories'   => array( 'КатегоријеБезКатегорија', 'Несврстане_категорије' ),
	'Uncategorizedimages'       => array( 'СликеБезКатегорија', 'ДатотекеБезКатегорија' ),
	'Uncategorizedpages'        => array( 'ЧланциБезКатегорија', 'Чланци_без_категорија' ),
	'Uncategorizedtemplates'    => array( 'ШаблониБезКатегорија' ),
	'Undelete'                  => array( 'Врати' ),
	'Unlockdb'                  => array( 'ОткључајБазу', 'Откључај_базу' ),
	'Unusedcategories'          => array( 'НеискоришћенеКатегорије' ),
	'Unusedimages'              => array( 'НеискоришћенеСлике', 'НеискоришћенеДатотеке' ),
	'Upload'                    => array( 'Пошаљи' ),
	'UploadStash'               => array( 'Складиште' ),
	'Userlogin'                 => array( 'Корисничка_пријава' ),
	'Userlogout'                => array( 'Корисничка_одјава' ),
	'Version'                   => array( 'Верзија', 'Издање' ),
	'Wantedcategories'          => array( 'ТраженеКатегорије' ),
	'Wantedfiles'               => array( 'ТраженеСлике' ),
	'Wantedpages'               => array( 'ТраженеСтране' ),
	'Wantedtemplates'           => array( 'ТражениШаблони' ),
	'Watchlist'                 => array( 'СписакНадгледања', 'Списак_надгледања' ),
	'Whatlinkshere'             => array( 'Шта_је_повезано_овде' ),
	'Withoutinterwiki'          => array( 'Без_међувикије' ),
);

$datePreferences = array(
	'default',
	'hh:mm d. month y.',
	'hh:mm d month y',
	'hh:mm dd.mm.yyyy',
	'hh:mm d.m.yyyy',
	'hh:mm d. mon y.',
	'hh:mm d mon y',
	'h:mm d. month y.',
	'h:mm d month y',
	'h:mm dd.mm.yyyy',
	'h:mm d.m.yyyy',
	'h:mm d. mon y.',
	'h:mm d mon y',
);

$defaultDateFormat = 'hh:mm d. month y.';

$dateFormats = array(
	/*
	'Није битно',
	'06:12, 5. јануар 2001.',
	'06:12, 5 јануар 2001',
	'06:12, 05.01.2001.',
	'06:12, 5.1.2001.',
	'06:12, 5. јан 2001.',
	'06:12, 5 јан 2001',
	'6:12, 5. јануар 2001.',
	'6:12, 5 јануар 2001',
	'6:12, 05.01.2001.',
	'6:12, 5.1.2001.',
	'6:12, 5. јан 2001.',
	'6:12, 5 јан 2001',
	 */

	'hh:mm d. month y. time'    => 'H:i',
	'hh:mm d month y time'      => 'H:i',
	'hh:mm dd.mm.yyyy time'     => 'H:i',
	'hh:mm d.m.yyyy time'       => 'H:i',
	'hh:mm d. mon y. time'      => 'H:i',
	'hh:mm d mon y time'        => 'H:i',
	'h:mm d. month y. time'     => 'G:i',
	'h:mm d month y time'       => 'G:i',
	'h:mm dd.mm.yyyy time'      => 'G:i',
	'h:mm d.m.yyyy time'        => 'G:i',
	'h:mm d. mon y. time'       => 'G:i',
	'h:mm d mon y time'         => 'G:i',

	'hh:mm d. month y. date'    => 'j. F Y.',
	'hh:mm d month y date'      => 'j F Y',
	'hh:mm dd.mm.yyyy date'     => 'd.m.Y',
	'hh:mm d.m.yyyy date'       => 'j.n.Y',
	'hh:mm d. mon y. date'      => 'j. M Y.',
	'hh:mm d mon y date'        => 'j M Y',
	'h:mm d. month y. date'     => 'j. F Y.',
	'h:mm d month y date'       => 'j F Y',
	'h:mm dd.mm.yyyy date'      => 'd.m.Y',
	'h:mm d.m.yyyy date'        => 'j.n.Y',
	'h:mm d. mon y. date'       => 'j. M Y.',
	'h:mm d mon y date'         => 'j M Y',

	'hh:mm d. month y. both'    => 'H:i, j. F Y.',
	'hh:mm d month y both'      => 'H:i, j F Y',
	'hh:mm dd.mm.yyyy both'     => 'H:i, d.m.Y',
	'hh:mm d.m.yyyy both'       => 'H:i, j.n.Y',
	'hh:mm d. mon y. both'      => 'H:i, j. M Y.',
	'hh:mm d mon y both'        => 'H:i, j M Y',
	'h:mm d. month y. both'     => 'G:i, j. F Y.',
	'h:mm d month y both'       => 'G:i, j F Y',
	'h:mm dd.mm.yyyy both'      => 'G:i, d.m.Y',
	'h:mm d.m.yyyy both'        => 'G:i, j.n.Y',
	'h:mm d. mon y. both'       => 'G:i, j. M Y.',
	'h:mm d mon y both'         => 'G:i, j M Y',
);

/* NOT USED IN STABLE VERSION */
$magicWords = array(
	'redirect'                  => array( '0', '#Преусмери', '#преусмери', '#ПРЕУСМЕРИ', '#Преусмјери', '#преусмјери', '#ПРЕУСМЈЕРИ', '#redirect', '#REDIRECT' ),
	'notoc'                     => array( '0', '__БЕЗСАДРЖАЈА__', '__БЕЗ_САДРЖАЈА__', '__NOTOC__' ),
	'nogallery'                 => array( '0', '__БЕЗГАЛЕРИЈЕ__', '__БЕЗ_ГАЛЕРИЈЕ__', '__NOGALLERY__' ),
	'forcetoc'                  => array( '0', '__ФОРСИРАНИСАДРЖАЈ__', '__ФОРСИРАНИ_САДРЖАЈ__', '__ПРИМОРАНИСАДРЖАЈ__', '__ПРИМОРАНИ_САДРЖАЈ__', '__FORCETOC__' ),
	'toc'                       => array( '0', '__САДРЖАЈ__', '__TOC__' ),
	'noeditsection'             => array( '0', '__БЕЗИЗМЕНА__', '__БЕЗ_ИЗМЕНА__', '__БЕЗИЗМЈЕНА__', '__БЕЗ_ИЗМЈЕНА__', '__NOEDITSECTION__' ),
	'currentmonth'              => array( '1', 'ТРЕНУТНИМЕСЕЦ', 'ТРЕНУТНИ_МЕСЕЦ', 'ТЕКУЋИМЕСЕЦ', 'ТЕКУЋИ_МЕСЕЦ', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonth1'             => array( '1', 'ТРЕНУТНИМЕСЕЦ1', 'ТРЕНУТНИ_МЕСЕЦ1', 'ТЕКУЋИМЕСЕЦ1', 'ТЕКУЋИ_МЕСЕЦ1', 'CURRENTMONTH1' ),
	'currentmonthname'          => array( '1', 'ТРЕНУТНИМЕСЕЦИМЕ', 'ИМЕТЕКУЋЕГМЕСЕЦА', 'ИМЕ_ТЕКУЋЕГ_МЕСЕЦА', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'ТРЕНУТНИМЕСЕЦГЕН', 'ТЕКУЋИМЕСЕЦГЕН', 'ТЕКУЋИ_МЕСЕЦ_ГЕН', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'ТРЕНУТНИМЕСЕЦСКР', 'ТЕКУЋИМЕСЕЦСКР', 'ТЕКУЋИ_МЕСЕЦ_СКР', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'ТРЕНУТНИДАН', 'ТЕКУЋИДАН', 'ТЕКУЋИ_ДАН', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'ТЕКУЋИДАН2', 'ТЕКУЋИ_ДАН_2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'ТРЕНУТНИДАНИМЕ', 'ИМЕТЕКУЋЕГДАНА', 'ИМЕ_ТЕКУЋЕГ_ДАНА', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ТРЕНУТНАГОДИНА', 'ТЕКУЋАГОДИНА', 'ТЕКУЋА_ГОДИНА', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'ТРЕНУТНОВРЕМЕ', 'ТЕКУЋЕВРЕМЕ', 'ТЕКУЋЕ_ВРЕМЕ', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ТЕКУЋИСАТ', 'ТЕКУЋИ_САТ', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'ЛОКАЛНИМЕСЕЦ', 'ЛОКАЛНИ_МЕСЕЦ', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'ЛОКАЛНИМЕСЕЦ2', 'ЛОКАЛНИ_МЕСЕЦ2', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'ИМЕЛОКАЛНОГМЕСЕЦА', 'ИМЕ_ЛОКАЛНОГ_МЕСЕЦА', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'ЛОКАЛНИМЕСЕЦГЕН', 'ЛОКАЛНИ_МЕСЕЦ_ГЕН', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'ЛОКАЛНИМЕСЕЦСКР', 'ЛОКАЛНИ_МЕСЕЦ_СКР', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'ЛОКАЛНИДАН', 'ЛОКАЛНИ_ДАН', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'ЛОКАЛНИДАН2', 'ЛОКАЛНИ_ДАН2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'ИМЕЛОКАЛНОГДАНА', 'ИМЕ_ЛОКАЛНОГ_ДАНА', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ЛОКАЛНАГОДИНА', 'ЛОКАЛНА_ГОДИНА', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'ЛОКАЛНОВРЕМЕ', 'ЛОКАЛНО_ВРЕМЕ', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ЛОКАЛНИСАТ', 'ЛОКАЛНИ_САТ', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'БРОЈСТРАНИЦА', 'БРОЈ_СТРАНИЦА', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'БРОЈЧЛАНАКА', 'БРОЈ_ЧЛАНАКА', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'БРОЈДАТОТЕКА', 'БРОЈ_ДАТОТЕКА', 'БРОЈФАЈЛОВА', 'БРОЈ_ФАЈЛОВА', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'БРОЈКОРИСНИКА', 'БРОЈ_КОРИСНИКА', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'БРОЈАКТИВНИХКОРИСНИКА', 'БРОЈ_АКТИВНИХ_КОРИСНИКА', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'БРОЈИЗМЕНА', 'БРОЈ_ИЗМЕНА', 'NUMBEROFEDITS' ),
	'numberofviews'             => array( '1', 'БРОЈПРЕГЛЕДА', 'БРОЈ_ПРЕГЛЕДА', 'NUMBEROFVIEWS' ),
	'pagename'                  => array( '1', 'ИМЕСТРАНИЦЕ', 'ИМЕ_СТРАНИЦЕ', 'СТРАНИЦА', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'ИМЕНАСТРАНИЦА', 'ИМЕНА_СТРАНИЦА', 'СТРАНИЦЕ', 'PAGENAMEE' ),
	'namespace'                 => array( '1', 'ИМЕНСКИПРОСТОР', 'ИМЕНСКИ_ПРОСТОР', 'NAMESPACE' ),
	'namespacee'                => array( '1', 'ИМЕНСКИПРОСТОРИ', 'ИМЕНСКИ_ПРОСТОРИ', 'NAMESPACEE' ),
	'talkspace'                 => array( '1', 'РАЗГОВОР', 'TALKSPACE' ),
	'talkspacee'                => array( '1', 'РАЗГОВОРИ', 'TALKSPACEE' ),
	'subjectspace'              => array( '1', 'ИМЕНСКИПРОСТОРЧЛАНКА', 'ИМЕНСКИ_ПРОСТОР_ЧЛАНКА', 'SUBJECTSPACE', 'ARTICLESPACE' ),
	'subjectspacee'             => array( '1', 'ИМЕНСКИПРОСТОРЧЛАНАКА', 'ИМЕНСКИ_ПРОСТОР_ЧЛАНАКА', 'SUBJECTSPACEE', 'ARTICLESPACEE' ),
	'fullpagename'              => array( '1', 'ПУНОИМЕСТРАНИЦЕ', 'ПУНОИМЕСТРАНЕ', 'ПУНО_ИМЕ_СТРАНИЦЕ', 'ПУНО_ИМЕ_СТРАНЕ', 'FULLPAGENAME' ),
	'fullpagenamee'             => array( '1', 'ПУНАИМЕНАСТРАНИЦА', 'ПУНАИМЕНАСТРАНА', 'ПУНА_ИМЕНА_СТРАНИЦА', 'ПУНА_ИМЕНА_СТРАНА', 'FULLPAGENAMEE' ),
	'subpagename'               => array( '1', 'ИМЕПОДСТРАНИЦЕ', 'ИМЕПОДСТРАНЕ', 'ИМЕ_ПОДСТРАНИЦЕ', 'ИМЕ_ПОДСТРАНЕ', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'ИМЕНАПОДСТРАНИЦА', 'ИМЕНАПОДСТРАНА', 'ИМЕНА_ПОДСТРАНИЦА', 'ИМЕНА_ПОДСТРАНА', 'SUBPAGENAMEE' ),
	'basepagename'              => array( '1', 'ИМЕОСНОВЕ', 'ИМЕ_ОСНОВЕ', 'BASEPAGENAME' ),
	'basepagenamee'             => array( '1', 'ИМЕНАОСНОВА', 'ИМЕНА_ОСНОВА', 'BASEPAGENAMEE' ),
	'talkpagename'              => array( '1', 'ИМЕРАЗГОВОРА', 'ИМЕ_РАЗГОВОРА', 'TALKPAGENAME' ),
	'talkpagenamee'             => array( '1', 'ИМЕНАРАЗГОВОРА', 'ИМЕНА_РАЗГОВОРА', 'TALKPAGENAMEE' ),
	'subjectpagename'           => array( '1', 'ИМЕЧЛАНКА', 'ИМЕ_ЧЛАНКА', 'SUBJECTPAGENAME', 'ARTICLEPAGENAME' ),
	'subjectpagenamee'          => array( '1', 'ИМЕНАЧЛАНАКА', 'ИМЕНА_ЧЛАНАКА', 'SUBJECTPAGENAMEE', 'ARTICLEPAGENAMEE' ),
	'msg'                       => array( '0', 'ПОР:', 'MSG:' ),
	'subst'                     => array( '0', 'ЗАМЕНИ:', 'ЗАМЕНА:', 'SUBST:' ),
	'safesubst'                 => array( '0', 'БЕЗБЕДНАЗАМЕНА', 'БЕЗБЕДНА_ЗАМЕНА', 'SAFESUBST:' ),
	'msgnw'                     => array( '0', 'НВПОР:', 'MSGNW:' ),
	'img_thumbnail'             => array( '1', 'мини', 'умањено', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'мини=$1', 'умањено=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'десно', 'д', 'right' ),
	'img_left'                  => array( '1', 'лево', 'л', 'left' ),
	'img_none'                  => array( '1', 'без', 'н', 'none' ),
	'img_width'                 => array( '1', '$1пискел', '$1п', '$1px' ),
	'img_center'                => array( '1', 'центар', 'ц', 'center', 'centre' ),
	'img_framed'                => array( '1', 'оквир', 'рам', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'безоквира', 'без_оквира', 'безрама', 'без_рама', 'frameless' ),
	'img_page'                  => array( '1', 'страница=$1', 'страна=$1', 'страница_$1', 'страна_$1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'усправно', 'усправно=$1', 'усправно_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'ивица', 'border' ),
	'img_baseline'              => array( '1', 'основа', 'baseline' ),
	'img_sub'                   => array( '1', 'под', 'sub' ),
	'img_super'                 => array( '1', 'супер', 'super', 'sup' ),
	'img_top'                   => array( '1', 'врх', 'top' ),
	'img_text_top'              => array( '1', 'врхтекста', 'врх_текста', 'text-top' ),
	'img_middle'                => array( '1', 'средина', 'middle' ),
	'img_bottom'                => array( '1', 'дно', 'bottom' ),
	'img_text_bottom'           => array( '1', 'срединатекста', 'средина_текста', 'text-bottom' ),
	'img_link'                  => array( '1', 'веза=$1', 'link=$1' ),
	'img_alt'                   => array( '1', 'алт=$1', 'alt=$1' ),
	'int'                       => array( '0', 'ИНТ:', 'INT:' ),
	'sitename'                  => array( '1', 'ИМЕСАЈТА', 'SITENAME' ),
	'ns'                        => array( '0', 'ИП:', 'NS:' ),
	'localurl'                  => array( '0', 'ЛОКАЛНААДРЕСА:', 'ЛОКАЛНА_АДРЕСА:', 'LOCALURL:' ),
	'localurle'                 => array( '0', 'ЛОКАЛНЕАДРЕСЕ:', 'ЛОКАЛНЕ_АДРЕСЕ:', 'LOCALURLE:' ),
	'articlepath'               => array( '0', 'ПУТАЊАЧЛАНКА', 'ПУТАЊА_ЧЛАНКА', 'ARTICLEPATH' ),
	'server'                    => array( '0', 'СЕРВЕР', 'SERVER' ),
	'servername'                => array( '0', 'ИМЕСЕРВЕРА', 'ИМЕ_СЕРВЕРА', 'SERVERNAME' ),
	'scriptpath'                => array( '0', 'СКРИПТА', 'SCRIPTPATH' ),
	'stylepath'                 => array( '0', 'ПУТАЊАСТИЛА', 'ПУТАЊА_СТИЛА', 'STYLEPATH' ),
	'grammar'                   => array( '0', 'ГРАМАТИКА:', 'GRAMMAR:' ),
	'gender'                    => array( '0', 'РОД:', 'ЛИЦЕ:', 'GENDER:' ),
	'notitleconvert'            => array( '0', '__БЕЗКН__', '__BEZKN__', '__NOTITLECONVERT__', '__NOTC__' ),
	'nocontentconvert'          => array( '0', '__БЕЗЦЦ__', '__NOCONTENTCONVERT__', '__NOCC__' ),
	'currentweek'               => array( '1', 'ТРЕНУТНАНЕДЕЉА', 'ТРЕНУТНА_НЕДЕЉА', 'ТЕКУЋАНЕДЕЉА', 'ТЕКУЋА_НЕДЕЉА', 'CURRENTWEEK' ),
	'currentdow'                => array( '1', 'ТРЕНУТНИДОВ', 'ТЕКУЋИДУН', 'CURRENTDOW' ),
	'localweek'                 => array( '1', 'ЛОКАЛНАНЕДЕЉА', 'ЛОКАЛНА_НЕДЕЉА', 'LOCALWEEK' ),
	'localdow'                  => array( '1', 'ЛОКАЛНИДУН', 'LOCALDOW' ),
	'revisionid'                => array( '1', 'ИДРЕВИЗИЈЕ', 'ИД_РЕВИЗИЈЕ', 'REVISIONID' ),
	'revisionday'               => array( '1', 'ДАНИЗМЕНЕ', 'ДАН_ИЗМЕНЕ', 'REVISIONDAY' ),
	'revisionday2'              => array( '1', 'ДАНИЗМЕНЕ2', 'ДАН_ИЗМЕНЕ2', 'REVISIONDAY2' ),
	'revisionmonth'             => array( '1', 'МЕСЕЦИЗМЕНЕ', 'МЕСЕЦ_ИЗМЕНЕ', 'REVISIONMONTH' ),
	'revisionmonth1'            => array( '1', 'МЕСЕЦИЗМЕНЕ1', 'МЕСЕЦ_ИЗМЕНЕ1', 'REVISIONMONTH1' ),
	'revisionyear'              => array( '1', 'ГОДИНАИЗМЕНЕ', 'ГОДИНА_ИЗМЕНЕ', 'REVISIONYEAR' ),
	'revisiontimestamp'         => array( '1', 'ВРЕМЕИЗМЕНЕ', 'ВРЕМЕ_ИЗМЕНЕ', 'REVISIONTIMESTAMP' ),
	'revisionuser'              => array( '1', 'КОРИСНИКИЗМЕНЕ', 'КОРИСНИК_ИЗМЕНЕ', 'REVISIONUSER' ),
	'plural'                    => array( '0', 'МНОЖИНА:', 'PLURAL:' ),
	'fullurl'                   => array( '0', 'ПУНУРЛ:', 'ЦЕЛААДРЕСА', 'ЦЕЛА_АДРЕСА', 'FULLURL:' ),
	'fullurle'                  => array( '0', 'ПУНУРЛЕ:', 'ЦЕЛЕАДРЕСЕ', 'ЦЕЛЕ_АДРЕСЕ', 'FULLURLE:' ),
	'lcfirst'                   => array( '0', 'ЛЦПРВИ:', 'LCFIRST:' ),
	'ucfirst'                   => array( '0', 'УЦПРВИ:', 'UCFIRST:' ),
	'lc'                        => array( '0', 'ЛЦ:', 'LC:' ),
	'uc'                        => array( '0', 'УЦ:', 'UC:' ),
	'raw'                       => array( '0', 'ЧИСТ:', 'RAW:' ),
	'displaytitle'              => array( '1', 'НАЗИВПРИКАЗА', 'НАЗИВ_ПРИКАЗА', 'DISPLAYTITLE' ),
	'rawsuffix'                 => array( '1', 'Р', 'R' ),
	'newsectionlink'            => array( '1', '__НОВАВЕЗАОДЕЉКА__', '__НОВА_ВЕЗА_ОДЕЉКА__', '__NEWSECTIONLINK__' ),
	'nonewsectionlink'          => array( '1', '__БЕЗНОВЕВЕЗЕОДЕЉКА__', '__БЕЗ_НОВЕ_ВЕЗЕ_ОДЕЉКА__', '__NONEWSECTIONLINK__' ),
	'currentversion'            => array( '1', 'ТЕКУЋЕИЗДАЊЕ', 'ТЕКУЋЕ_ИЗДАЊЕ', 'CURRENTVERSION' ),
	'urlencode'                 => array( '0', 'КОДИРАЊЕАДРЕСЕ', 'КОДИРАЊЕ_АДРЕСЕ', 'URLENCODE:' ),
	'anchorencode'              => array( '0', 'КОДИРАЊЕВЕЗЕ', 'КОДИРАЊЕ_ВЕЗЕ', 'ANCHORENCODE' ),
	'currenttimestamp'          => array( '1', 'ТЕКУЋИОТИСАКВРЕМЕНА', 'ТЕКУЋИ_ОТИСАК_ВРЕМЕНА', 'CURRENTTIMESTAMP' ),
	'localtimestamp'            => array( '1', 'ОТИСАКВРЕМЕНА', 'ОТИСАК_ВРЕМЕНА', 'LOCALTIMESTAMP' ),
	'directionmark'             => array( '1', 'СМЕРОЗНАКЕ', 'СМЕР	_ОЗНАКЕ', 'DIRECTIONMARK', 'DIRMARK' ),
	'contentlanguage'           => array( '1', 'ЈЕЗИКСАДРЖАЈА', 'ЈЕЗИК_САДРЖАЈА', 'CONTENTLANGUAGE', 'CONTENTLANG' ),
	'pagesinnamespace'          => array( '1', 'СТРАНИЦАУИМЕНСКОМПРОСТОРУ', 'СТРАНАУИМЕНСКОМПРОСТОРУ', 'СТРАНИЦА_У_ИМЕНСКОМ_ПРОСТОРУ', 'СТРАНА_У_ИМЕНСКОМ_ПРОСТОРУ', 'PAGESINNAMESPACE:', 'PAGESINNS:' ),
	'numberofadmins'            => array( '1', 'БРОЈАДМИНА', 'БРОЈ_АДМИНА', 'NUMBEROFADMINS' ),
	'padleft'                   => array( '0', 'ПОРАВНАЈЛЕВО', 'ПОРАВНАЈ_ЛЕВО', 'PADLEFT' ),
	'padright'                  => array( '0', 'ПОРАВНАЈДЕСНО', 'ПОРАВНАЈ_ДЕСНО', 'PADRIGHT' ),
	'special'                   => array( '0', 'посебно', 'special' ),
	'filepath'                  => array( '0', 'ПУТАЊАДАТОТЕКЕ', 'ПУТАЊА_ДАТОТЕКЕ', 'FILEPATH:' ),
	'tag'                       => array( '0', 'ознака', 'tag' ),
	'hiddencat'                 => array( '1', '__САКРИВЕНАКАТ__', '__HIDDENCAT__' ),
	'pagesincategory'           => array( '1', 'СТРАНИЦАУКАТЕГОРИЈИ', 'СТРАНАУКАТЕГОРИЈИ', 'СТРАНИЦА_У_КАТЕГОРИЈИ', 'СТРАНА_У_КАТЕГОРИЈИ', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'ВЕЛИЧИНАСТРАНИЦЕ', 'ВЕЛИЧИНАСТРАНЕ', 'ВЕЛИЧИНА_СТРАНИЦЕ', 'ВЕЛИЧИНА_СТРАНЕ', 'PAGESIZE' ),
	'index'                     => array( '1', '__ИНДЕКС__', '__INDEX__' ),
	'noindex'                   => array( '1', '__БЕЗИНДЕКСА__', '__БЕЗ_ИНДЕКСА__', '__NOINDEX__' ),
	'numberingroup'             => array( '1', 'БРОЈУГРУПИ', 'БРОЈ_У_ГРУПИ', 'NUMBERINGROUP', 'NUMINGROUP' ),
	'staticredirect'            => array( '1', '__СТАТИЧКОПРЕУСМЕРЕЊЕ__', 'СТАТИЧКО_ПРЕУСМЕРЕЊЕ', '__STATICREDIRECT__' ),
	'protectionlevel'           => array( '1', 'НИВОЗАШТИТЕ', 'НИВО_ЗАШТИТЕ', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'форматдатума', 'формат_датума', 'formatdate', 'dateformat' ),
	'url_path'                  => array( '0', 'ПУТАЊА', 'PATH' ),
	'url_wiki'                  => array( '0', 'ВИКИ', 'WIKI' ),
	'url_query'                 => array( '0', 'РЕДОСЛЕД', 'QUERY' ),
);
$separatorTransformTable = array( ',' => '.', '.' => ',' );

