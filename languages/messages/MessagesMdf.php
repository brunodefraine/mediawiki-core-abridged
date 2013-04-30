<?php
/** Moksha (мокшень)
 *
 * See MessagesQqq.php for message documentation incl. usage of parameters
 * To improve a translation please visit http://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 * @author Jarmanj Turtash
 * @author Kaganer
 * @author Khazar II
 * @author Kranch
 * @author Numulunj pilgae
 */

$fallbak = 'ru';

$namespaceNames = array(
	NS_MEDIA            => 'Медиа',
	NS_SPECIAL          => 'Башка',
	NS_TALK             => 'Корхнема',
	NS_USER             => 'Тиись',
	NS_USER_TALK        => 'Тиись_корхнема',
	NS_PROJECT_TALK     => '$1_корхнема',
	NS_FILE             => 'Няйф',
	NS_FILE_TALK        => 'Няйф_корхнема',
	NS_MEDIAWIKI        => 'МедиаВики',
	NS_MEDIAWIKI_TALK   => 'МедиаВики_корхнема',
	NS_TEMPLATE         => 'Шаблон',
	NS_TEMPLATE_TALK    => 'Шаблон_корхнема',
	NS_HELP             => 'Лезкс',
	NS_HELP_TALK        => 'Лезкс_корхнема',
	NS_CATEGORY         => 'Категорие',
	NS_CATEGORY_TALK    => 'Категорие_корхнема',
);

$namespaceAliases = array(
	'Служебная' => NS_SPECIAL,
	'Обсуждение' => NS_TALK,
	'Участник' => NS_USER,
	'Обсуждение_участника' => NS_USER_TALK,
	'Обсуждение_{{GRAMMAR:genitive|$1}}' => NS_PROJECT_TALK,
	'Изображение' => NS_FILE,
	'Обсуждение_изображения' => NS_FILE_TALK,
	'MediaWiki' => NS_MEDIAWIKI,
	'Обсуждение_MediaWiki' => NS_MEDIAWIKI_TALK,
	'Шаблон' => NS_TEMPLATE,
	'Обсуждение_шаблона' => NS_TEMPLATE_TALK,
	'Справка' => NS_HELP,
	'Обсуждение_справки' => NS_HELP_TALK,
	'Категория' => NS_CATEGORY,
	'Обсуждение_категории' => NS_CATEGORY_TALK,
);

$specialPageAliases = array(
	'Allmessages'               => array( 'СембеПачфтематне' ),
	'Allpages'                  => array( 'СембеЛопат' ),
	'Ancientpages'              => array( 'КунардоньЛопат' ),
	'Blankpage'                 => array( 'ШаваЛопа' ),
	'Block'                     => array( 'СёлгомаIP' ),
	'Blockme'                   => array( 'Сёлгомак' ),
	'Booksources'               => array( 'КинигаЛисьмот' ),
	'BrokenRedirects'           => array( 'СиньтьфШашфтфксне' ),
	'Categories'                => array( 'Категориет' ),
	'ChangePassword'            => array( 'ПолафттСувама', 'ПолафттСувама вал' ),
	'Confirmemail'              => array( 'КемокстакАдрес' ),
	'Contributions'             => array( 'Путксне' ),
	'CreateAccount'             => array( 'Сёрматфтомс' ),
	'Deadendpages'              => array( 'ПеньЛопат' ),
	'DeletedContributions'      => array( 'НардафПутксне' ),
	'Disambiguations'           => array( 'Лама Смусть' ),
	'DoubleRedirects'           => array( 'КафонзафШашфтфксне' ),
	'Emailuser'                 => array( 'АдресТиись' ),
	'Export'                    => array( 'Вимс' ),
	'Fewestrevisions'           => array( 'КържаВерзиет' ),
	'FileDuplicateSearch'       => array( 'ФайлКафонзафВешендема' ),
	'Filepath'                  => array( 'ФайлКиц' ),
	'Import'                    => array( 'Сувафтомс' ),
	'Invalidateemail'           => array( 'Аф кемокстамс адресть' ),
	'BlockList'                 => array( 'IPСёлгоматЛувома' ),
	'LinkSearch'                => array( 'СюлмафксВешендема' ),
	'Listadmins'                => array( 'ЛувомаСистемонь вятиксне' ),
	'Listbots'                  => array( 'ЛувомаРоботт програпне' ),
	'Listfiles'                 => array( 'НяйфКярькс' ),
	'Listgrouprights'           => array( 'ЛувомаПолгаВидексне' ),
	'Listredirects'             => array( 'ЛувомаШашфтфксне' ),
	'Listusers'                 => array( 'ЛувомТиихне' ),
	'Lockdb'                    => array( 'ПякстамсДатабазать' ),
	'Log'                       => array( 'Лувома', 'Лувомат' ),
	'Lonelypages'               => array( 'СькамоньЛопат', 'УрозЛопат' ),
	'Longpages'                 => array( 'КувакаЛопат' ),
	'MergeHistory'              => array( 'ШоворемсИсториять' ),
	'MIMEsearch'                => array( 'MIMEВешендема' ),
	'Mostcategories'            => array( 'СембодаКатегориет' ),
	'Mostimages'                => array( 'СембодаНяйфне' ),
	'Mostlinked'                => array( 'СембодаСюлмафт' ),
	'Mostlinkedcategories'      => array( 'СембодаСюлмафтКатегориет' ),
	'Mostlinkedtemplates'       => array( 'СембодаСюлмафтШаблотт' ),
	'Mostrevisions'             => array( 'СембодаВерзиет' ),
	'Movepage'                  => array( 'ШашфттЛопа' ),
	'Mycontributions'           => array( 'МоньПутксне' ),
	'Mypage'                    => array( 'МоньЛопазе' ),
	'Mytalk'                    => array( 'МоньКорхнемазе' ),
	'Newimages'                 => array( 'ОдНяйфне' ),
	'Newpages'                  => array( 'ОдЛопат' ),
	'Popularpages'              => array( 'СидестаЛопатне' ),
	'Preferences'               => array( 'Латцематне' ),
	'Prefixindex'               => array( 'ВалынгольксИндекс' ),
	'Protectedpages'            => array( 'АралафЛопат' ),
	'Protectedtitles'           => array( 'АралафКонякст' ),
	'Randompage'                => array( 'Кодама повсь', 'Кодама повсь лопа' ),
	'Randomredirect'            => array( 'Кона повсьШашфтфкс' ),
	'Recentchanges'             => array( 'УлхкомбаньПолафнематне' ),
	'Recentchangeslinked'       => array( 'УлхкомбаньПолафнематСюлмафт' ),
	'Revisiondelete'            => array( 'ВерзиеНардамс' ),
	'Search'                    => array( 'Вешендема' ),
	'Shortpages'                => array( 'НюрьхкяняЛопат' ),
	'Specialpages'              => array( 'БашкаЛопат' ),
	'Statistics'                => array( 'Статистик' ),
	'Uncategorizedcategories'   => array( 'Апак категорияфттКатегориет' ),
	'Uncategorizedimages'       => array( 'Апак категорияфттНяйфт' ),
	'Uncategorizedpages'        => array( 'Апак категорияфттЛопат' ),
	'Uncategorizedtemplates'    => array( 'Апак категорияфттШаблотт' ),
	'Undelete'                  => array( 'Мърдафтомс' ),
	'Unlockdb'                  => array( 'ПанжемсДатабазать' ),
	'Unusedcategories'          => array( 'Апак нолдак тевсКатегориет' ),
	'Unusedimages'              => array( 'Апак нолдак тевсНяйфне' ),
	'Unusedtemplates'           => array( 'Апак нолдак тевсШаблотт' ),
	'Unwatchedpages'            => array( 'МельгеваномафтомаЛопат' ),
	'Upload'                    => array( 'Тонгома' ),
	'Userlogin'                 => array( 'ТииньСувама' ),
	'Userlogout'                => array( 'ТииньЛисема' ),
	'Userrights'                => array( 'ТииньВидексонза' ),
	'Version'                   => array( 'Верзие' ),
	'Wantedcategories'          => array( 'ВешевиКатегориет' ),
	'Wantedfiles'               => array( 'ВешевиФайлхт' ),
	'Wantedpages'               => array( 'ВешевиЛопат', 'СиньтьфСюлмафкст' ),
	'Wantedtemplates'           => array( 'ВешевиШаблотт' ),
	'Watchlist'                 => array( 'Мельгеванома' ),
	'Whatlinkshere'             => array( 'МезеньСюлмафкстТяса' ),
	'Withoutinterwiki'          => array( 'Интервикифтома' ),
);

$messages = array(
# User preference toggles
'tog-underline'               => 'Сюлмафкснень алга китькстамс:',
'tog-highlightbroken'         => 'Латцемс синьтьф сюлмафкснень <a href="" class="new">вага ста</a> (илякс: вага ста<a href="" class="internal">?</a>).',
'tog-justify'                 => 'Тиемс сёрматфть фкакс ушедоматнень лопать кувалмова',
'tog-hideminor'               => 'Од полафтоматнень эса кяшемс ёмланя видептематне',
'tog-hidepatrolled'           => 'Кяшемс лувонь кирдихнень видептемаснон мекольце полафнематнень эса',
'tog-newpageshidepatrolled'   => 'Кяшемс лувонь кирдихнень эса видептьф лопат од лопань лувса',
'tog-extendwatchlist'         => 'Келептемс мельгеваномать сембе полафтоматнень няфтемга, аф аньцек мекольценнет',
'tog-usenewrc'                => 'Полгаяфтомс илякстоптоматнень лопань коряс мекольце полафнематнень эса ди мельгеваномаса (веши JavaScript)',
'tog-numberheadings'          => 'Сёрмадома коняксс лувомтяшксне эслек путовихть',
'tog-showtoolbar'             => 'Кядьёнкс седяфксть няфтемс сёрмадомбачк (JavaScript)',
'tog-editondblclick'          => 'Кафксть люпштазь сувамс сёрматфть петнема (JavaScript)',
'tog-editsection'             => 'Няфтемс сюлмафксть [петемс] эрь пяльксонди',
'tog-editsectiononrightclick' => 'Петнемс пялькстне: люпштамс сёрмадомбяльксть лемонц лангс видешире пуняса (JavaScript)',
'tog-showtoc'                 => 'Няфтемс сёрматфть потмакс (лопатнень, конатнень эса 3 сёрмадома конякста лама)',
'tog-rememberpassword'        => 'Ванфтомс монь сувама лемозе тя содаммашинаса (сяда кувать $1 {{PLURAL:$1|ши|шит}})',
'tog-watchcreations'          => 'Сувафтомс лопатнень, конатнень тиине ди файлат, конатнень тонгине мельгеваномазон',
'tog-watchdefault'            => 'Сувафтомс лопатнень ди файлатнень, конатнень петнесайне мельгеваномазон',
'tog-watchmoves'              => 'Сувафтомс лопатнень ди файлатнень, конатнень шашфтыне мельгеваномазон',
'tog-watchdeletion'           => 'Сувафтомс лопатнень ди файлатнень, конатнень нардыне мельгеваномазон',
'tog-minordefault'            => 'Тяшксемс сембе петема анцяйнятне мъзярс илякс изь мярьгов',
'tog-previewontop'            => 'Няфтемс сёрматфть васень няфтемать петемань седяфксть инголе',
'tog-previewonfirst'          => 'Васень няфтема васенце петнемада меле',
'tog-nocache'                 => 'Кардамс интернетс вятиенди эслек ванфневи файлхнень тиема',
'tog-enotifwatchlistpages'    => 'Кучт тейне е-сёрма мзярда монь мельгеваномаста лопат илякстоптовихть',
'tog-enotifusertalkpages'     => 'Кучемс электрононь сёрма монь тиить корхтама лопанц илякстоптомада меле',
'tog-enotifminoredits'        => 'Кучт тейне е-сёрма нъльне мъзярда лопат эди файлхт аф ламне видептевихть',
'tog-enotifrevealaddr'        => 'Штафтомс монь электрононь адресозе пачфтема сёрмаса',
'tog-shownumberswatching'     => 'Няфтемс мъзяра сувсида конат арафтозь лопать эсь мельгеваномазост',
'tog-oldsig'                  => 'Афкуксонь кядьтяшкс',
'tog-fancysig'                => 'Кядьтяшкст улихть викитекстокс (эслек тиеви сюлмафксфтома)',
'tog-externaleditor'          => 'Нолдамс тевс ушеширень петнить мъзярс илякс изь мярьгов (аньцек тевонь содайхненди, сяс мес эрявихть башка кядьёнкст-арафнемат содама машинаса [//www.mediawiki.org/wiki/Manual:External_editors сяда тов.])',
'tog-externaldiff'            => 'Нолдамс тевс ушеширень програм верзиень ваксс путоманкса мъзярс илякс изь мярьгов (аньцек тевонь содайхненди, сяс мес эрявихть башка кядьёнкст-арафнемат содама машинаса[//www.mediawiki.org/wiki/Manual:External_editors сяда тов.])',
'tog-showjumplinks'           => 'Мярьгомс "юпадемс" сатовома сюлмафкстненди',
'tog-uselivepreview'          => 'Максомс эряй васень няфтемась (JavaScript) (Варжамань)',
'tog-forceeditsummary'        => 'Няфтемс мондине мезе сёрмадомс шава петнема вальмас сувамста',
'tog-watchlisthideown'        => 'Кяшемс монь петнематне ванома лопаста',
'tog-watchlisthidebots'       => 'Кяшемс bot петнематне ванома лопаста.',
'tog-watchlisthideminor'      => 'Кяшемс петнема анцяйнятне ванома лопаста',
'tog-watchlisthideliu'        => 'Кяшемс сёрматфтф тиихнень петнемаснон мельгеваномаса',
'tog-watchlisthideanons'      => 'Кяшемс лемфтома тиихнень петнемаснон мельгеваномаса',
'tog-watchlisthidepatrolled'  => 'Кяшемс лувонь кирдихнень видептемаснон мельгеваномаса',
'tog-ccmeonemails'            => 'Кучт тейне копия электрононь сермане конатнень кучсайне иля тиихненди.',
'tog-diffonly'                => 'Тят няфте лопань потмоц кафта верзиятнень ваксс путомать ала',
'tog-showhiddencats'          => 'Няфтемс кяшф категориет',
'tog-norollbackdiff'          => 'Мяндемс верзиеть потафтомать меле',

'underline-always'  => 'Фалу',
'underline-never'   => 'Мъзярдонга',
'underline-default' => 'Интернет полатксть кадомс апак полафтт',

# Font style option in Special:Preferences
'editfont-style'     => 'Полафтомс тя паксянь сёрмадома стиленц',
'editfont-default'   => 'Интернетс вятись апак полафтт',
'editfont-monospace' => 'Фкя келеса сёрмадома',
'editfont-sansserif' => 'Сёрмадома Sans-serif',
'editfont-serif'     => 'Serif сёрмадома',

# Dates
'sunday'        => 'Таргоши (Недляши)',
'monday'        => 'Одговши (Панедельник)',
'tuesday'       => 'Шавши',
'wednesday'     => 'Вержи',
'thursday'      => 'Шуваланя',
'friday'        => 'Цилеши (Пяденця)',
'saturday'      => 'Ёткши',
'sun'           => 'Тр',
'mon'           => 'Од',
'tue'           => 'Шв',
'wed'           => 'Вр',
'thu'           => 'Швл',
'fri'           => 'Цл',
'sat'           => 'Ёт',
'january'       => 'Кельмеков',
'february'      => 'Уфайков',
'march'         => 'Марайков',
'april'         => 'Шудиков',
'may_long'      => 'Панжиков',
'june'          => 'Лямбеков',
'july'          => 'Псиков',
'august'        => 'Сёроньков',
'september'     => 'Тюжягов',
'october'       => 'Кельмазаков',
'november'      => 'Эйндамков',
'december'      => 'Кучкаков',
'january-gen'   => 'Кельмековонь',
'february-gen'  => 'Уфайковонь',
'march-gen'     => 'Марайковонь',
'april-gen'     => 'Шудиковонь',
'may-gen'       => 'Панжиковонь',
'june-gen'      => 'Лямбековонь',
'july-gen'      => 'Псиковонь',
'august-gen'    => 'Сёроньковонь',
'september-gen' => 'Тюжяговонь',
'october-gen'   => 'Кельмазаковонь',
'november-gen'  => 'Эйндамковонь',
'december-gen'  => 'Кучкаковонь',
'jan'           => 'Кел',
'feb'           => 'Уфа',
'mar'           => 'Мар',
'apr'           => 'Шуд',
'may'           => 'Пан',
'jun'           => 'Лям',
'jul'           => 'Пси',
'aug'           => 'Сёр',
'sep'           => 'Тюж',
'oct'           => 'Кем',
'nov'           => 'Эйн',
'dec'           => 'Куч',

# Categories related messages
'pagecategories'                 => '{{PLURAL:$1|Категорие|Категориет}}',
'category_header'                => '"$1" категориеса лопатне',
'subcategories'                  => 'Субкатегориет',
'category-media-header'          => '"$1" категориеса медиясь',
'category-empty'                 => "''Медиа лопат тя категориеса ашет.''",
'hidden-categories'              => '{{PLURAL:$1|Кяшф категорие|Кяшф категориет}}',
'hidden-category-category'       => 'Кяшф категориет',
'category-subcat-count'          => '{{PLURAL:$2|Тя категориеса аньцек фкя субкатегорие.|Тя категориеса  {{PLURAL:$1|субкатегорие|$1 субкатегориет}}, $2-нь эста.}}',
'category-subcat-count-limited'  => 'Тя категориеса {{PLURAL:$1|субкатегорие|$1 субкатегориет}}.',
'category-article-count'         => '{{PLURAL:$2|Тя категориеса аньцек фкя лопа.|Вага {{PLURAL:$1|лопа|$1 лопат}} тя категориеса $2-нь эста.}}',
'category-article-count-limited' => 'Вага {{PLURAL:$1|лопа|$1 лопат}} тя категориеса.',
'category-file-count'            => '{{PLURAL:$2|Тя категориеса аньцек фкя файл.|Вага {{PLURAL:$1|файл|$1 файлхт}} тя категориеса $2-нь эста.}}',
'category-file-count-limited'    => 'Вага {{PLURAL:$1|файл|$1 файлхт}} тя категориеса.',
'listingcontinuesabbrev'         => 'полатксоц',
'index-category'                 => 'Индексыяф лопат',
'noindex-category'               => '↓Индексфтома лопатне',
'broken-file-category'           => 'Лопат колаф сюлмафкснень мархта',

'about'         => 'Колганза',
'article'       => 'Сёрматфть потмонц лопац',
'newwindow'     => '(панчсеви од вальмаса)',
'cancel'        => 'Мърдамс меки',
'moredotdotdot' => 'Сяда лама...',
'mypage'        => 'Монь лопазе',
'mytalk'        => 'Монь корхтамазе',
'anontalk'      => 'Корхтамс тя IP-ть мархта',
'navigation'    => 'Навигацие',
'and'           => '&#32;эди',

# Cologne Blue skin
'qbfind'         => 'Мук',
'qbbrowse'       => 'Ванондома',
'qbedit'         => 'Петнема',
'qbpageoptions'  => 'Тя лопась',
'qbpageinfo'     => 'Контекстсь',
'qbmyoptions'    => 'Монь лопане',
'qbspecialpages' => 'Башка тевонь лопат',
'faq'            => 'Сидеста Кеподеви Кизефксне',
'faqpage'        => 'Project:Сидеста Кеподеви Кизефксне',

# Vector skin
'vector-action-addsection'       => 'Поладомс мезень колга корхтамс',
'vector-action-delete'           => 'Нардамс',
'vector-action-move'             => 'Шашфтомс',
'vector-action-protect'          => 'Араламс',
'vector-action-undelete'         => 'Мърдафтомс',
'vector-action-unprotect'        => 'Араламать полафтомс',
'vector-simplesearch-preference' => 'Нодамс тевс тёждялгтотф кядьёнксонь седяфксть (аньцек векторонь лангакс)',
'vector-view-create'             => 'Тиемс',
'vector-view-edit'               => 'Петнемс',
'vector-view-history'            => 'История няфтемс',
'vector-view-view'               => 'Морафтомс',
'vector-view-viewsource'         => 'Лисьма няфтемс',
'actions'                        => 'Тефне',
'namespaces'                     => 'Лемботмот',
'variants'                       => 'Вариатт',

'errorpagetitle'    => 'Эльбятькс',
'returnto'          => 'Мърдамс $1-с.',
'tagline'           => '{{SITENAME}}ста',
'help'              => 'Лезкс',
'search'            => 'Вешендемс',
'searchbutton'      => 'Вешентьк',
'go'                => 'Аре',
'searcharticle'     => 'Аре',
'history'           => 'Лопань полафнемат',
'history_short'     => 'Ётай полафнемат',
'updatedmarker'     => 'мекольце сашендомазень меле полафтовсь',
'printableversion'  => 'Лихтеви верзие',
'permalink'         => 'Ялань сюлмафкс',
'print'             => 'Нолдамс',
'view'              => 'Ваномс',
'edit'              => 'Петнеме',
'create'            => 'Тиемс',
'editthispage'      => 'Петнемс тя лопать',
'create-this-page'  => 'Тиемс тя лопать',
'delete'            => 'Нардамс',
'deletethispage'    => 'Нардамс тя лопать',
'undelete_short'    => 'Мърдафтомс {{PLURAL:$1|петнема|$1 петнемат}}',
'viewdeleted_short' => 'Ваномс {{PLURAL:$1|фкя нардаф видептема|$1 нардаф видептемат}}',
'protect'           => 'Араламс',
'protect_change'    => 'полафтомс прянь араламать',
'protectthispage'   => 'Араламс тя лопать',
'unprotect'         => 'Араламать полафтомс',
'unprotectthispage' => 'Полафтомс тя лопать араламанц',
'newpage'           => 'Од лопа',
'talkpage'          => 'Корхтамс тя лопать колга',
'talkpagelinktext'  => 'Корхтама',
'specialpage'       => 'Башка тевонь лопа',
'personaltools'     => 'Эсь кядьёнкст',
'postcomment'       => 'Од пакш',
'articlepage'       => 'Ваномс потмакслопать',
'talk'              => 'Корхнема',
'views'             => 'Ванфт',
'toolbox'           => 'Кядьёнкс кярькс',
'userpage'          => 'Ваномс тиить лопанц',
'projectpage'       => 'Ваномс проектть лопанц',
'imagepage'         => 'Ваномс файлонь лопать',
'mediawikipage'     => 'Ваномс сёрма лопать',
'templatepage'      => 'Ваномс кепотькс лопать',
'viewhelppage'      => 'Ваномс лезкс лопать',
'categorypage'      => 'Ваномс категориень лопать',
'viewtalkpage'      => 'Ваномс корхнемат',
'otherlanguages'    => 'Иля кяльса',
'redirectedfrom'    => '(Шашфтф $1ста)',
'redirectpagesub'   => 'Шашфтф лопа',
'lastmodifiedat'    => 'Тя лопать мекольцеда петнезь $2, $1.',
'viewcount'         => 'Тя лопас сувасть {{PLURAL:$1|весть|$1-ксть}}.',
'protectedpage'     => 'Тя лопать аралаф',
'jumpto'            => 'Юпадемс тязк:',
'jumptonavigation'  => 'навигацие',
'jumptosearch'      => 'вешендема',
'view-pool-error'   => 'Ужяль, тя пингть серверхнень вийсна аф сатовихть.
Вельф лама тиихть тяряфнихть ваномс тя лопать.
Эняльттяма учт аф ламос тя лопанди одукс сама инголе.
$1',
'pool-timeout'      => 'Пигонь кирдемась учи пякстаманц',
'pool-queuefull'    => 'Тяряфнемада вельф лама',
'pool-errorunknown' => 'Аф содаф эльбятькс',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'            => '{{SITENAME}} колга',
'aboutpage'            => 'Project:Колга',
'copyright'            => 'Сёрматфсь ули кода мумс $1-са.',
'copyrightpage'        => '{{ns:project}}:Копияма видекст',
'currentevents'        => 'Мезе тяса моли',
'currentevents-url'    => 'Project:Мезе тяса моли',
'disclaimers'          => 'Видешинь корхтаматне',
'disclaimerpage'       => 'Project:Пря видешинь корхнема',
'edithelp'             => 'Петнемань лезкс',
'edithelppage'         => 'Help:Петнема',
'helppage'             => 'Help:Лопань потмоц',
'mainpage'             => 'Пря лопа',
'mainpage-description' => 'Пря лопа',
'policy-url'           => 'Project:Политик',
'portal'               => 'Пуромксонь вальма',
'portal-url'           => 'Project:Пуромксонь вальма',
'privacy'              => 'Сёпомань политиксь',
'privacypage'          => 'Project:Сёпомань политиксь',

'badaccess'        => 'Мярьговома эльбятькс',
'badaccess-group0' => 'Тондейть аф мярьгови тиемс ся мезе тон вешеть.',
'badaccess-groups' => 'Тевсь тон вешеть мярьгови тиемс аньцек {{PLURAL:$2|полгань|фкя полгаста}} тиихненди: $1.',

'versionrequired'     => 'Эряви МедиаВикить верзиенц $1',
'versionrequiredtext' => 'Тя лопать панжеманцты эрявксты МедиаВикить верзие $1. Ванк [[Special:Version|верзиень лопась]].',

'ok'                      => 'OK',
'retrievedfrom'           => '"$1"ста сявф',
'youhavenewmessages'      => 'Тонь ули $1 ($2).',
'newmessageslink'         => 'Од сёрмат',
'newmessagesdifflink'     => 'мекольце полафтома',
'youhavenewmessagesmulti' => 'Тонь улихть од сёрмат $1-са',
'editsection'             => 'петнемс',
'editold'                 => 'петнемс',
'viewsourceold'           => 'лисьма ваномс',
'editlink'                => 'петнемс',
'viewsourcelink'          => 'ваномс лисьмоть',
'editsectionhint'         => 'Петемс пялькс: $1',
'toc'                     => 'Лопань потмоц',
'showtoc'                 => 'няфтемс',
'hidetoc'                 => 'кяшемс',
'collapsible-collapse'    => 'Ёмлалгофтомс',
'collapsible-expand'      => 'Келептемс',
'thisisdeleted'           => 'Ваномс эли мърдафтомс $1?',
'viewdeleted'             => 'Ваномс $1?',
'restorelink'             => '{{PLURAL:$1|нардаф петнема|$1 нардаф петнемат}}',
'feedlinks'               => 'Сортса:',
'feed-invalid'            => 'Аф кондясти сёрматфтома каналть сортоц.',
'feed-unavailable'        => 'Фкяпингонь материал тевс нолдама аш кода',
'site-rss-feed'           => '$1 RSS линия',
'site-atom-feed'          => '$1 Atom линия',
'page-rss-feed'           => '"$1" RSS линия',
'page-atom-feed'          => '"$1" Atom линия',
'red-link-title'          => '$1 (стама лопась аш)',
'sort-descending'         => 'Арафтомс алу',
'sort-ascending'          => 'Арафтомс вяри',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'Лопа',
'nstab-user'      => 'Тиить лопась',
'nstab-media'     => 'Медиа лопась',
'nstab-special'   => 'Башка лопа',
'nstab-project'   => 'Проектонь лопа',
'nstab-image'     => 'Файл',
'nstab-mediawiki' => 'Сёрма',
'nstab-template'  => 'Лопа кепотькс',
'nstab-help'      => 'Лезкс лопа',
'nstab-category'  => 'Категорие',

# Main script and global functions
'nosuchaction'      => 'Тянь тиемс аш кода',
'nosuchactiontext'  => 'Тя URL адрессь аф кондясти.
Улема, тон эльбядеть URL адресть сёрмадомста, эли кочкать аф кондясти сюлмафкс.
Шятьта ули эльбяткс {{SITENAME}}ть програмса.',
'nosuchspecialpage' => 'Стама башка лопа аш',
'nospecialpagetext' => '<strong>Аш стама башка лопа.</strong>

Ванк [[Special:SpecialPages|{{int:specialpages}}]].',

# General errors
'error'                => 'Эльбятькс',
'databaseerror'        => 'Датабаза эльбятькс',
'dberrortext'          => 'Содамошинь паргань вешендембачк лиссь синтаксонь эльбятькс.
Тя, улема, програмгярьксонь си.
Мекольце содамошинь паргань вешема:
<blockquote><code>$1</code></blockquote>
функциеста "<code>$2</code>".
Содамошинь паргась пачфтесь эльбятькс "<samp>$3: $4</samp>".',
'dberrortextcl'        => 'Датабазонь вешендембачк лиссь синтакс эльбятькс.
Мекольце датабазонь вешендема ульсь:
"$1"
функциеста "$2".
Датабазась мърдафтозе эльбятьксть "$3: $4"',
'laggedslavemode'      => 'Шарфтк мяльце: Тя лопась, улема, сирелгодсь.',
'readonly'             => 'Датабазась пякстаф',
'enterlockreason'      => 'Сёрматк тязк пякстама туфтал тонь арьсемацень мархта эли няфтть тяса мъзярда ули кода пякстамать валхтомс.',
'readonlytext'         => 'Датабазась тяни пякстаф од сёрмадоматненди эли полафнематненди, шятьта нежедематненди, меле сон мърдай эрьшинь покаманцты.

Оцюнясь кона сонь пякстазе арьсезе сонь шарьхкотьфтемац: $1',
'missing-article'      => 'Содамошинь паргса аф муви текстсь конань эряви мумс, сонь лемоц "$1" $2.

Тя сидеста лиси мъзярда молят сирелготф верзиева эли историянь сюлмафксова, кона вяти нардаф лопас.

Лисендяряй аф тяфта, тонь програмкярькссот, улема, эвондась си (эльбятькс).
Пачфтть тянь колга [[Special:ListUsers/sysop|системонь вятиксонди]] URL адресть тяштезь.',
'missingarticle-rev'   => '(верзие#: $1)',
'missingarticle-diff'  => '(Верзиенза: $1, $2)',
'readonly_lag'         => 'Датабазась эслек пякстась мъзярс кядяла датабаза серверхт сотни прясерверть мархта',
'internalerror'        => 'Потмонь эльбятькс',
'internalerror_info'   => 'Потмонь эльбятькс: $1',
'fileappenderrorread'  => '"$1" файлась аф лувови поладома пингста.',
'fileappenderror'      => '"$1" файлась изь поладов "$2" файлти.',
'filecopyerror'        => 'Аш кода копиямс файл "$1" файл "$2"с.',
'filerenameerror'      => 'Аш кода "$1" файлти максомс од лем "$2".',
'filedeleteerror'      => 'Файл "$1" аф нардави.',
'directorycreateerror' => 'Директорие "$1" аф тиеви.',
'filenotfound'         => 'Файл "$1" аф муви.',
'fileexistserror'      => 'Файл "$1" аф сёрмадови: стама файлсь ульсь ни',
'unexpected'           => 'Аф шарьхкодеви смузьсь: "$1"="$2".',
'formerror'            => 'Эльбятькс: Формсь аф кучеви',
'badarticleerror'      => 'Тя лопаса тя аф тиеви.',
'cannotdelete'         => 'Лопась эли кочкаф "$1" файлсь аф нардави.
Сонь, улема, кинге нардазе ни.',
'cannotdelete-title'   => '"$1" лопась аф нардави',
'badtitle'             => 'Аф кондясти лем',
'badtitletext'         => 'Вешф лопань лемоц аф тяфтама эли шава, шятьта кялень-ётка эли викинь-ётка лемсна аф лац сюлмафт. Сонь эса, улема ащи фкя эли сяда лама башка тяштькстт конат коняксонди аф кондястихть.',
'perfcached'           => 'Вешф програмонь информациесь сёрматфоль эслек ванфневи файлхнень эса ди, улема, сирелгодсь. Сяда {{PLURAL:$1|фкя муфкс|$1 муфкст}} эслек ванфневи файлань кярьксса.',
'perfcachedts'         => 'Тя програмонь информациесь сёрматфоль эслек ванфневи файлхнень эса ди мекольцеда одонзаф $1. Сяда {{PLURAL:$4|фкя муфкс|$4 муфкст}} эслек ванфневи файлонь кярьксса.',
'querypage-no-updates' => 'Тя лопать одонзапне тяни аф тиевихть. Информациесь тяса тяни аф одонзави.',
'wrong_wfQuery_params' => 'Аф кондясти параметратне функцияса wfQuery()<br />
Функцие: $1<br />
Вешфкс: $2',
'viewsource'           => 'Ваномс лисьмоть',
'viewsource-title'     => 'Ванк $1 лисьмаста',
'actionthrottled'      => 'Куроксшись кирьфтаф',
'actionthrottledtext'  => 'Лудна мархта тюрема туфталонкса тя тевть ламоксть тиемась нюрьхконя ётка пингста кардаф. Эняльттяма мърдамс тя тевти мъзярошка минутода меле.',
'protectedpagetext'    => 'Тя лопас сувама пякстаф лопань петнема кардамать сюнеда.',
'viewsourcetext'       => 'Тейть ули кода ваномс эди копиямс тя лопать лисьмоц:',
'viewyourtext'         => "Тондейть ули кода тя лопань '''петнематнень''' ваномс ди тиемс копиянснон:",
'protectedinterface'   => 'Тя лопать эса интерфейс текстсь тя викить програмгярксти, сон аралаф кальдяв тиемада.
Вики ётафтоматнень поладоманди полафнемандивок сувак [//translatewiki.net/ translatewiki.net], MediaWiki локализациень проектти.',
'editinginterface'     => "'''Инголи кардама:''' Тон петнесак лопать конань эса ащи интерфейс текст програмкярьксонди. Петнематне полафтсазь сонь ванфоц, кода сон няеви иля тиихненди. Вики ётафтоматнень поладоманди, полафтомандивок сувак [//translatewiki.net/ translatewiki.net] MediaWiki локализациень проектти.",
'sqlhidden'            => '(SQL вешфкс кяшф)',
'cascadeprotected'     => 'Тя лопать аралазь петнемада сяс мес сон сувафни {{PLURAL:$1|сай лопас, кона путфоль|сай лопас, конат путфольхть}} каскад араламас:
$2',
'namespaceprotected'   => "Тондейть аф мярьгови петнемс лопатне '''$1''' лепнень мархта.",
'customcssprotected'   => 'Тейть аф мярьгови петнемс CSS лопать, сяс мес потмосонза иля тиить латцеманза.',
'customjsprotected'    => 'Тейть аф мярьгови петнемс JavaScript лопать, сяс мес потмосонза иля тиить латцеманза.',
'ns-specialprotected'  => '{{ns:special}} лепнень мархта лопатне аф петневихть.',
'titleprotected'       => "[[User:$1|$1]] кардазь тя лемсь мархта лопа тиемать.
Туфталсь ''$2''.",

# Virus scanner
'virus-badscanner'     => "Аф кондясти конфигурациесь: аф содаф вирусонь вешендема програмсь: ''$1''",
'virus-scanfailed'     => 'програмонь вешендемась изь лисе (code $1)',
'virus-unknownscanner' => 'аф содаф антивирус:',

# Login and logout pages
'logouttext'                 => "'''Тон лисеть.'''

Тондейть ули кода ащемс {{SITENAME}}са апак содак эли [[Special:UserLogin|сувак тага весть]] кода сяка эли иля тиись.
Кой-кона лопатне илядсть стамкс кодамкс синь ульсть тонь лисемада инголе мъзярс тонь интернет полатксце изь аруяфтов эсь ванфневи файлхнень эзда.",
'welcomecreation'            => '== Сувак, $1! ==

Тонь сёрматфтомаце анок. Тят юкста полафнемс эсь [[Special:Preferences|{{SITENAME}} латцематне]].',
'yourname'                   => 'Тиить лемоц:',
'yourpassword'               => 'Сувама валце:',
'yourpasswordagain'          => 'Сёрматк сувама валце омбоцекс:',
'remembermypassword'         => 'Ванфтомс монь сувама лемозе тя содам машинаса (максимум $1 {{PLURAL:$1|шис|шис}})',
'securelogin-stick-https'    => 'Кадовомс сотфокс HTTPS вельде сувамада меле',
'yourdomainname'             => 'Тонь доменце:',
'externaldberror'            => 'Лиссь эльбятькс ушеширень датабазонь вельде кемокстакшнембачк эли тондейть аф мярьгови полафнемс тонь ушеширень сёрматфтомацень.',
'login'                      => 'Сувама',
'nav-login-createaccount'    => 'Сувама / сёрматфтома',
'loginprompt'                => 'Тондейть эряви нолдамс тевс cookies {{SITENAME}}с суваманди.',
'userlogin'                  => 'Сувама / сёрматфтома',
'userloginnocreate'          => 'Сувамс',
'logout'                     => 'Лисема',
'userlogout'                 => 'Лисема',
'notloggedin'                => 'Апак сувак',
'nologin'                    => "Аш сувама лемце? '''$1'''.",
'nologinlink'                => 'Сёрматфтомс',
'createaccount'              => 'Тиемс од сёрматфтомась',
'gotaccount'                 => "Сёрматфтыть ни? '''$1'''.",
'gotaccountlink'             => 'Сувамс',
'userlogin-resetlink'        => 'Сувама эрявикснень юкстайть?',
'createaccountmail'          => 'электрононь сёрма вельде',
'createaccountreason'        => 'Туфтал:',
'badretype'                  => 'Сувама валхне тон путыть аф фкат.',
'userexists'                 => 'Тя лемть сявозь ни. 
Эняльттяма, арьсек эстейть иля.',
'loginerror'                 => 'Сувама эльбятькс',
'createaccounterror'         => 'Сёрматфтомась аф тиеви: $1',
'nocookiesnew'               => 'Тиить сёрматфтомаце анок, аньцек тон изеть сува. {{SITENAME}}-са тиихнень содафтоманкса функцие cookies эряви. Тяни тонь содама машинаса функцие cookies кардаф. Эняльттяма нолдамс тевс cookies, меле сувак од эсь тиить лемцень эди сувама валцень мархта.',
'nocookieslogin'             => '{{SITENAME}} лопаса тиихнень содафтоманкса функцие cookies эряви. Тяни тонь содама машинаса функцие cookies кардаф. Эняльттяма нолдамс тевс cookies, меле сувак тага весть.',
'nocookiesfornew'            => 'Тиить сёрматфтомась апак тик сяс мес лисьмонц аф кемокстави.
Варжак cookies нолдафт эли аф, одонзафтк лопать ди тяряфтт одукс.',
'noname'                     => 'Тон изеть пута кемокстаф тиить лемоц.',
'loginsuccesstitle'          => 'Сувамась ётась лац',
'loginsuccess'               => "'''Тон сувать {{SITENAME}}-с кода \"\$1\".'''",
'nosuchuser'                 => 'Тиись "$1" лемса аш.
Ванк, улема, тон сёрмадыть лемть аф лац.
Илякс тондейть эряви [[Special:UserLogin/signup|сёрматфтомс одукс]].',
'nosuchusershort'            => 'Тиись "$1" лемса аш. Ванк, улема, тон сёрмадыть лемть аф лац.',
'nouserspecified'            => 'Тиить лемсь эряви.',
'login-userblocked'          => 'Тиись перяф. Сувама кардаф.',
'wrongpassword'              => 'Сувама валсь сёрматф аф лац. Варжак тага весть.',
'wrongpasswordempty'         => 'Сувама валсь кадовсь апак сёрматк. Сёрматк одукс.',
'passwordtooshort'           => 'Тонь сувама валценди эряви улемс аф {{PLURAL:$1|1 тяшкста|$1 тяшкста}} кържа',
'password-name-match'        => 'Сувама лемце ди сувама сувама валце улемат аф фкат.',
'password-login-forbidden'   => 'Тя сувама лемсь эди сувама валсь кардафт.',
'mailmypassword'             => 'Кучт од сувама вал',
'passwordremindertitle'      => 'Од ёткопингонь сувама валсь {{SITENAME}}с суваманди',
'passwordremindertext'       => 'Кивок (улема, тон IP адресста $1) вешсь од сувама валсь {{SITENAME}} ($4)с суваманди.
"$2" тиить ёткапингонь сувама валоц тифоль ни ди сон тяни "$3". Улендяряль тя афкукс тонь мяльце тянь тиемс, тондейть эряви сувамс эди путомс од сувама валть. Тонь ёткапингонь сувама валце сирелгоды {{PLURAL:$5|фкя шис|$5 шис}}.

Улендяряй киге иля кучсь тя вешфксть эли тон мяляфтсак тонь сувама валцень эди тонь тяни аш мяльце сонь полафтома, тят тие мезеге тя пачфтемась самда меле ди киртть тонь ингольдень сувама валцень.',
'noemail'                    => '"$1" тиить электрононь адресоц аш.',
'noemailcreate'              => 'Эряви тяштемс афкукс е-парга',
'passwordsent'               => 'Од сувама валсь кучфоль "$1" тиить электрононь адресонцты.
Сувак сонь кундамда меле.',
'blocked-mailpassword'       => 'Петнемат тиемась тонь IP адрестот кардаф. Сувама валть кемокстама функциес кундама аф мярьгови кальдяв тиемада аралама туфталонкса.',
'eauthentsent'               => 'Кемокстама сёрма кучфоль тонь электрононь адресозот.
Тондейть эряви тиендемс ся сёрмастонь вятемовалть коряс эди кемокстамс тя сёрматфтомась афкукс тоннесь иля сёрматнень тонь сёрматфтомас самда инголе.',
'throttled-mailpassword'     => 'Сувама валсь кучфоль ни ётай {{PLURAL:$1|ойста (часста)|$1 ойста (часста)}}.
Кучсеви аньцек фкя сувама валсь {{PLURAL:$1|ойс (часс)|$1 ойс (часс)}} кальдяв тиемада аралама туфталонкса.',
'mailerror'                  => 'Электрононь сёрма кучема эльбятькс: $1',
'acct_creation_throttle_hit' => 'Тя Викиса тонь IP адресста сафне тисть {{PLURAL:$1|1 сёрматфтома|$1 сёрматфтомат}} ётай шиня, тя максимум мъзяра мярьгови тиемс тя пингеёткста.
Сяс, тя IP адресста сафненди тяни аш кода тиемс фкявок сёрматфтома.',
'emailauthenticated'         => 'Тонь электрононь адресце кемокстаф $2-ста $3-ста.',
'emailnotauthenticated'      => 'Тонь электрононь адресце нинге изь кемокста. Викить сёрматнень коряс програмти кодамога сёрмат аф кучевихть.',
'noemailprefs'               => 'Мъзярс тон ашеть пута тонь электрононь адресце Викить сёрматнень коряс програмсь кодамога сёрмат аф кучсыне.',
'emailconfirmlink'           => 'Кемокстак тонь электрононь адресце',
'invalidemailaddress'        => 'Электрононь адресть аф пьрьняндави сяс сонь аф кондясти электрононь адресоц. Путт кондясти электрононь адресонц эли катк тя паксянять шавакс.',
'cannotchangeemail'          => 'Сёрматфтомать е-паргоц аф полафтови тя викить эса',
'accountcreated'             => 'Сёрматфтомась тиф',
'accountcreatedtext'         => '$1 тиить сёрматфтомась тиф.',
'createaccount-title'        => 'Сёрматфнемась {{SITENAME}}-с',
'createaccount-text'         => 'Кати-кие тизе сёрматфтомась $2 {{SITENAME}} ($4)-са. "$2" -ть сувама валсь "$3". Тондейть эряви сувамс тозк эди арафтомс од сувама валть.

Улендяряль тя сёрматфтомась эльбятьксокс мезеге тят тие.',
'usernamehasherror'          => 'Тиить лемозонза тяфтама тяшкст аф мярьговихть',
'login-throttled'            => 'Тон улхкомба вельф ламос тяряфнеть сувамс тя сувама валть вельде.
Эняльттяма, учт аф ламос тага весть тяряфтома инголе.',
'login-abort-generic'        => 'Сувамацень апак тиевсь лац - Валхтф',
'loginlanguagelabel'         => 'Кяль: $1',
'suspicious-userlogout'      => 'Вешфксце лисемс кардафоль сяс мес няеви тянь кучезь колаф интернетс вятиень эли ётка ёкамань сервер вельде.',

# Email sending
'php-mail-error-unknown' => 'Аф содаф эльбятькс PHP сёрмавятемань функциеса.',
'user-mail-no-addy'      => 'Тяряфтыхть кучемс е-сёрма е-паргафтома',

# Change password dialog
'resetpass'                 => 'Полафтомс сувама валцень',
'resetpass_announce'        => 'Тон сувать ёткопингонь сувама валть вельде кона сась электрононь адресозот. Сувама аделаманди тондейть эряви путомс тязк од сувама вал:',
'resetpass_header'          => 'Полафтомс сувама валцень',
'oldpassword'               => 'Сире сувама вал:',
'newpassword'               => 'Од сувама вал:',
'retypenew'                 => 'Сёрматк од сувама вал омбоцекс:',
'resetpass_submit'          => 'Арафтк сувама валть эди сувак',
'resetpass_success'         => 'Тонь сувама валцень полафнемась ётась лац! Тонь сувафттядязь системс...',
'resetpass_forbidden'       => 'Сувама валхнень полафтомс аш кода',
'resetpass-no-info'         => 'Тондейть эряви сёрматфтомс тя лопас видеста суваманди.',
'resetpass-submit-loggedin' => 'Полафтомс сувама валцень',
'resetpass-submit-cancel'   => 'Валхтомс',
'resetpass-wrong-oldpass'   => 'Аф виде ёткопингонь эли тяниень сувама валсь.
Улема тон полафтыть сувама валце ни эли кучеть вешфкс од ёткопингонь сувама вал кундаманкса.',
'resetpass-temp-password'   => 'Пингонь сувама валсь:',

# Special:PasswordReset
'passwordreset'              => 'Полафтомс сувама валцень',
'passwordreset-text'         => 'Эряви пяшкодемс тя формать е-сёрма сёрматфтомацень колга сявоманди.',
'passwordreset-legend'       => 'Полафтомс сувама валцень',
'passwordreset-disabled'     => 'Сувама валсь аф полафтови тя викить эса.',
'passwordreset-pretext'      => '{{PLURAL:$1||Тяштьк содама пялькснень эзда фкя алу}}',
'passwordreset-username'     => 'Тиить лемоц',
'passwordreset-domain'       => 'Домен:',
'passwordreset-capture'      => 'Ваномс мекольце е-сёрма?',
'passwordreset-capture-help' => 'Путондярят тяшкс тя паксять эса е-сёрма (пингонь сувама вал мархта) кармай няфтевома кодак кучф тиенди.',
'passwordreset-emailtitle'   => 'Серматфтомать колга {{SITENAME}}са',

# Edit page toolbar
'bold_sample'     => 'Эчке сёрмадома',
'bold_tip'        => 'Эчке сёрмадома',
'italic_sample'   => 'Комафтф сёрмадома',
'italic_tip'      => 'Комафтф сёрмадома',
'link_sample'     => 'Сюлмафксонь конякс',
'link_tip'        => 'Потмоширень сюлмафкс',
'extlink_sample'  => 'http://www.example.com кепотькс',
'extlink_tip'     => 'Ушеширень сюлмафкс (киртть мяльса http:// инголькс)',
'headline_sample' => 'Конякссонь валхне',
'headline_tip'    => '2-це аськолксонь конякс',
'nowiki_sample'   => 'Сувафтомс тязк форматфтома текст',
'nowiki_tip'      => 'Нулгодемс Викить текст латцемась',
'image_tip'       => 'Путф медиа файлсь',
'media_tip'       => 'Файлть сюлмафкссь',
'sig_tip'         => 'Тонь кядьтяшксоце пинге мархта',
'hr_tip'          => 'Туркс китькс (тевс нолдамс ванфтозь)',

# Edit pages
'summary'                          => 'Нюрьхкяня лихтема:',
'subject'                          => 'Тема/конякс:',
'minoredit'                        => 'Тя ёмланя видептема',
'watchthis'                        => 'Ваномс тя лопать мельге',
'savearticle'                      => 'Ванфтомс лопать',
'preview'                          => 'Васень няфтема',
'showpreview'                      => 'Максомс васень няфтема',
'showlivepreview'                  => 'Эряй васень няфтема',
'showdiff'                         => 'Няфтемс мезе полафтсь',
'anoneditwarning'                  => "'''Инголе мярьгома:''' Тон изеть сува. Тонь IP адресце кармай сувафтф тя лопать петнема историязонза.",
'missingsummary'                   => "'''Лятфтама:''' Тон изеть макса петнемацень колга нюрьхкяня лихтемась. Люпштандярят \"Ванфтомс лопать\" тага весть, тонь полафнематне кармайхть ванфтфт мяльполатксфтома.",
'missingcommenttext'               => 'Путт тонь арьсематне (мяльполатксоце) алу.',
'missingcommentheader'             => "'''Лятфтама:''' Тон изеть макса тема/конякс тя мяльполатксти. Люпштандярят \"Ванфтомс лопать\" тага весть, тонь полафнематне кармайхть ванфтфт мяльполатксфтома.",
'summary-preview'                  => 'Нюрьхкяня лихтемать сядынголень  няфтема:',
'subject-preview'                  => 'Тема/конякс сядынгольдень няфтема:',
'blockedtitle'                     => 'Тиить сёлгозь',
'blockedtext'                      => '\'\'\'Тонь тиить лемцень эли IP адресцень сёлгозь.\'\'\'

Тонь сёлгозе $1.
Туфталсь \'\'$2\'\'.

* Сёлгомать ушеткссь: $8
* Сёлгомать валхтсазь: $6
* Сёлкфсь: $7

Тондейть ули кода корхтамс $1 мархта эли иля [[{{MediaWiki:Grouppage-sysop}}|системонь вятикс]] сёлгомать колга.
Тондейть аш кода нолдамс тевс "кучт электрононь сёрма тя тиинди" функциесь мъзярс тонь электрононь адресце изь кемокста тонь [[Special:Preferences|тиить латцемасонза]] эли тондейть изь мярьгов кучемс сёрмат сёлгома пингста.
Тонь IP адресце тяни $3, сёлгомать ID #$5.
Сувафтт ня анцяйнятне эрь кодама тонь вешфксот.',
'autoblockedtext'                  => 'Тонь IP адресце эсезонза сёлговсь сяс мес тонь адресцень вельде сувась иля тиись, конань $1 сёлкфтозе.
Туфталсь:

:\'\'$2\'\'

* Сёлгомась ушедсь: $8
* Сёлгомать валхтсазь: $6
* Сёлкфсь: $7


Тондейть ули кода корхтамс $1 эли иля [[{{MediaWiki:Grouppage-sysop}}|системонь вятиксонь]] мархта сёлгомать колга.

Тят юкста тондейть аш кода нолдамс тевс "кучт электрононь сёрма тя тиинди" функциесь мъзярс тон изеть кемокста эсь электрононь адресцень тонь [[Special:Preferences|тиить латцемасонза]] эли тондейть изь мярьгов кучемс сёрмат сёлгома пингста.

Тонь ID тяни $3, сёлгомать ID #$5.
Сувафтт ня анцяйнятне эрь кодама тонь вешфксот.',
'blockednoreason'                  => 'туфтал апак макст',
'whitelistedittext'                => 'Лопань петнеманкса эряви $1.',
'confirmedittext'                  => 'Тондейть эряви кемокстамс тонь электрононь адресцень лопань петнемада инголе. Эняльттяма, путт эди кемокстак тонь электрононь адресце тонь [[Special:Preferences|тиить арафнематне|тиить арафнематнень]] вельде.',
'nosuchsectiontitle'               => 'Стама секцие аш',
'nosuchsectiontext'                => 'Тон тяряфнеть петнемс секция конань тяса аш.
Сонь, улема, шаштозь эли нардазь мъзярс эсонза ванонкшнеть.',
'loginreqtitle'                    => 'Сувама лем эряви',
'loginreqlink'                     => 'сувамс',
'loginreqpagetext'                 => 'Тондейть эряви $1 иля лопат ваноманкса.',
'accmailtitle'                     => 'Сувама вал кучф.',
'accmailtext'                      => "Апак арьсек тиф [[User talk:$1|$1]]нь сувама валоц кучфоль $2с.

Тя од сёрматфтомать сувама валть ули кода полафтомс ''[[Special:ChangePassword|сувама валонь полафтома]]'' лопаса сувамда меле.",
'newarticle'                       => '(Од)',
'newarticletext'                   => "Тон сать лопас кона нинге изь тие.
Сёрматк паксяв алу тя лопать тиеманкса
(ванк [[{{MediaWiki:Helppage}}|лезкс лопа]] лездама информациенкса).
Саньдярять тяза эльбядезь, люпштак пунять '''меки''' тонь интернет полатксонь вальмасонза.",
'anontalkpagetext'                 => "----''Тя корхтама лопать тизе лемфтома тиись кона нинге аф сёрматфтф эли кона эсь сёрматфтомас аф кунци. Тяса минь нолдамс сонь лувомтяшкснень IP адресонц тиить содафтоманкса.
Тя IP адресть вельде ули кода сашендомс иля тиихненди.
Уляндяряйхть иля тиинь мяльполатксонза конатнень аф видекста лувозь тоннекс, тондейть пароль сай пингста [[Special:UserLogin/signup|сёрматфтомс/сувамс]] иля лемфтома тиихнень марс аф шовореманкса.''",
'noarticletext'                    => 'Тяни аш текст тя лопаса.
Тондейть ули кода [[Special:Search/{{PAGENAME}}|вешендемс тя лопать коняксонц]] иля лопава,
<span class="plainlinks">[{{fullurl:{{#Special:Log}}|page={{FULLPAGENAMEE}}}} вешендемс малады лувомава],
эли [{{fullurl:{{FULLPAGENAME}}|action=edit}} петнемс тя лопать]</span>.',
'userpage-userdoesnotexist'        => 'Сёрматфтомась «<nowiki>$1</nowiki>» лемса аш. Арьсек лацкаста, афкукс тонь улендяряй мяльце тиемс эли полафтомс тя лопать.',
'clearyourcache'                   => "'''Шарфтк мяльце:''' Ванфтомада меле од полафнематнень ваноманкса тондейть эряви нардамс эслек ванфневи файлхнень тонь интернет полатксонь вальмастонза. '''Mozilla / Firefox / Safari:''' ''Shift'' кирдезь, люпштак ''Reload'', эли люпштак ''Ctrl-Shift-F5'' эли ''Ctrl-R'' (''Command-Shift-R'' Mac машинаса); '''Konqueror: '''люпштак ''Reload'' эли люпштак ''F5;'' '''Opera:''' програмса тондейть эрявксты нардамс сембе эслек ванфневи файлхт  ''Tools→Preferences'' вельде; '' '''Internet Explorer:''' ''Ctrl'' кирдезь люпштакшнек ''Refresh'' эли люпштак ''Ctrl-F5.''",
'usercssyoucanpreview'             => "'''Мялень максома:''' Ванфтомада инголе нолдак тевс 'Васень няфтема' пунять тонь од CSS эли JS файлть варжаманкса.",
'userjsyoucanpreview'              => "'''Мялень максома:''' Ванфтомада инголе нолдак тевс 'Васень няфтема' пунять тонь од CSS эли JS файлть варжаманкса.",
'usercsspreview'                   => "Киртть мяльсот тя аньцек тонь CSS файлцень васень няфтемац. Сон нинге изь ванфтов!'''",
'userjspreview'                    => "'''Киртть мяльсот тя аньцек тонь JavaScript файлть варжамась/васень няфтемась, сон нинге изь ванфтов!'''",
'userinvalidcssjstitle'            => "'''Инголе мярьгома:''' Аш тема файл \"\$1\" мазопнеманкса. Киртть мяльсот .css эди .js лопас путови аньцек ёмла тяшкса коняксне, кепотьксонди {{ns:user}}:Foo/лем.css афи {{ns:user}}:Foo/Лем.css.",
'updated'                          => '(Одонзаф)',
'note'                             => "'''Шарфтк мяльце:'''",
'previewnote'                      => "'''Киртть мяльсот, тя аньцек васень няфтемась.''' Тонь полафтоматне нинге исть ванфтов!",
'previewconflict'                  => 'Текстсь тя васень няфтемаса няфтеви вярдень петнема паксяса стамкс кодамкс сон няеволь ванфтомада меле.',
'session_fail_preview'             => "'''Аш кода тонь петнемаце сувафтомс мекольце информациень юмафтомать сюнеда.
Тик одукс.
Тага лисентьфтяряй - [[Special:UserLogout|листь]] лопаста ди сувак тага весть.'''",
'session_fail_preview_html'        => "'''Ужялькс! Аш кода тонь петнемацень сувафтомс мекольце информациень юмафтомать сюнеда.'''

''{{SITENAME}}са мярьгови казяма HTML форматсь, васень няфтемась кяшф JavaScript програпть зиянда аралама туфталонкса.''

'''Улендяряль тя петнемась мярьговикс, эняльттяма тянь тиемс одукс.
Тага лисентьфтяряй - [[Special:UserLogout|листь]] лопаста ди сувак тага весть.'''",
'token_suffix_mismatch'            => "'''Тонь петнемацень кардазь сяс мес тонь програмце аф лац няфнесы китькскя тяшксне петнема паксять эса. Петнемаце кардазь текстть араламанкса. Стама колавома лисеви интернет лемфтома ётка якай серверонь эзда конань якамаса ульсть эльбятькст.'''",
'editing'                          => 'Петнемс $1',
'editingsection'                   => 'Петнемс $1 (пялькс)',
'editingcomment'                   => 'Петнемс $1 (од пакш)',
'editconflict'                     => 'Петнема эльбятькс: $1',
'explainconflict'                  => "Кати-кие тя лопать полафтозе мъзярс тон сонь петнить.
Вярдень паксяса тон няйсак текстть стамкс конакс сон кармай няеви «Ванфтомс лопа» пунять люпштамда меле.
Тонь полафнематне няевихть ала, петнема паксять эса.
Тонь полафнематнень текстс нолдаманкса тондейть эряви синь ётафтомс алудонь петнема паксяста вярденнес.
'''Аньцек''' вярдень паксястонь текстть ванфтови \"{{int:savearticle}}\" пунять люпштамда меле\".",
'yourtext'                         => 'Тонь текстце',
'storedversion'                    => 'Ванфтф верзие',
'nonunicodebrowser'                => "'''ИНГОЛЕ КАРДАМА: Тонь интернет полатксце аф кирдьсы Unicode. Лопань петемста сембе аф-ASCII тяштьксне кармайхть арама синь кемготувонькърда луфксокс.'''",
'editingold'                       => "'''ИНГОЛЕ КАРДАМА: Тон петнесак лопать сирелготф верзиенц.
Сембе полафнематне тифт тя верзиеда меле кармайхть юмафтома.'''",
'yourdiff'                         => 'Мезьса явовихть',
'copyrightwarning'                 => "Эняльттяма, шарфтк мяльце сянь лангс, мес сембе поладоматне ди полафтоматне {{SITENAME}}-с лувовихть нолдафокс $2 коряс (ванк $1). Улефтяряй мяльце тонь сёрмадоматнень петнелезь седи апак маряк эди срадолезь эрь кодама вастова, тяза синь тят путне.<br />
Тон стане ина максат вал сянь колга мес сембе тонь сёрмадоматне тиить тонць эли синь сявить марстонь эли иля панжада лисьмаста.
'''ТЯТ СУВАФНЕ КОПИЯМА ВИДЕКССА АРАЛАФ МАТЕРИАЛХТ МЯРЬГОМАФТОМА!'''",
'copyrightwarning2'                => "Эняльттяма, шарфтк мяльце сянь лангс, мес сембе поладоматне {{SITENAME}} лопаса улихть кода петемс эли нардамс иля тиихненди.
Улефтяряй мяльце тонь сёрмадоматнень петнелезь, тяза синь тят путне.<br />
Тон стане ина максат вал сянь колга мес сембе тонь сёрмадоматне тиить тонць эли синь сявить марстонь эли иля панжада лисьмаста. (ванк $1).<br />
'''ТЯТ СУВАФНЕ КОПИЯМА ВИДЕКССА АРАЛАФ МАТЕРИАЛХТ МЯРЬГОМАФТОМА!'''",
'longpageerror'                    => "'''ЭЛЬБЯТЬКС: Тонь текстцень кувалмоц $1 килобайтт, тя максимупть $2 килобайтта лама. Сонь аш кода ванфтомс.'''",
'readonlywarning'                  => "'''ИНГОЛЕ КАРДАМА: Датабазась пякстаф петема покаматнень сюнеда, тя пингста тондейть аш кода ванфтомс тонь петнематнень. Шятьта тондейть пароль синь ванфтомс текст файлс ди путомс тяза меле.'''

Системонь вятикссь, конась тонь сёлгозе путсь тяфтама туфталсь: $1",
'protectedpagewarning'             => "''Инголе кардама:  Тя лопать пякстаф петнемада, сонь петнема мярьгови аньцек системонь вийксненди.'''
Мекольце петнемань лувомась  ули кода ваномс вага ала:",
'semiprotectedpagewarning'         => "'''Шарфтк мяльце:''' Тя лопась пякстаф, сонь петнемац мярьгови аньцек сёрматфтф тиихненди.
Мекольце петнемань лувомась ули кода ваномс вага ала.",
'cascadeprotectedwarning'          => "'''ИНГОЛЕ КАРДАМА:''' Тя лопась пякстаф, сонь петнема мярьгови аньцек системонь вийксненди, сяс мес сонь сувафнезь каскад араламать ала {{PLURAL:$1|лопа|лопас}}:",
'titleprotectedwarning'            => "'''Инголе кардама:  Тя лопась пякстаф, эрявихть [[Special:ListGroupRights|башка видекст]] сонь тиеманди.'''
Мекольце петнемань лувомась ули кода ваномс вага ала.",
'templatesused'                    => 'Тя лопаса тевс нолдаф  {{PLURAL:$1|кепотькс|кепотьксне}}:',
'templatesusedpreview'             => '{{PLURAL:$1|Кепотькс|Кепотьксне}} нолдаф тевс тя вальмаса:',
'templatesusedsection'             => 'Тя пяльксса тевс нолдаф {{PLURAL:$1|кепотькс|кепотьксне}} :',
'template-protected'               => '(аралаф)',
'template-semiprotected'           => '(пялес-аралаф)',
'hiddencategories'                 => 'Тя лопась {{PLURAL:$1|1 кяшф катериень|$1 кяшф категориень}} полаец:',
'nocreatetitle'                    => 'Лопань тиемац оторонзаф',
'nocreatetext'                     => '{{SITENAME}}-са од лопатнень тиемац оторонзаф.
Тондейть ули кода мърдамс меки ди петнемс тиф ни лопать, эли [[Special:UserLogin|сувамс эли сёрматфтомс одукс]].',
'nocreate-loggedin'                => 'Тон аф мярьговат тиемс од лопат.',
'permissionserrors'                => 'Мярьговома Эльбятькст',
'permissionserrorstext'            => 'Тондейть аф мярьгови тянь тиемс {{PLURAL:$1|туфтал|туфталхнень}} коряс:',
'permissionserrorstext-withaction' => 'Тондейть аф мярьгови сувамс $2-с {{PLURAL:$1|тя туфтал|ня туфталхнень}} инкса:',
'recreate-moveddeleted-warn'       => "'''Инголе кардама: Тон тисак одукс инголе нардаф лопать.'''

Васенда арьсек эряви тя лопать вельмомац эли аф.
Ала ули кода ваномс тя лопать нардама ди шашфтома лувомась:",
'moveddeleted-notice'              => 'Тя лопась нардаф.
Нардама ди шашфтома лувомась тя лопать коряс вага ала.',
'edit-hook-aborted'                => 'Туворкс програм петнемать лоткафтозе.
Пачфтематнень тянь коряс ашет.',
'edit-gone-missing'                => 'Аш кода лопать одонзамс.
Лопась улема нардафоль.',
'edit-conflict'                    => 'Петнема эльбятькссь.',
'edit-no-change'                   => 'Тонь петнемацень тевс изь нолда, сяс мес тон текстть ашеть полафта.',
'edit-already-exists'              => 'Аш кода од лопа ушедомс.
Тя лопась ульсь ни.',

# Parser/template warnings
'expensive-parserfunction-warning'        => 'Инголе кардама: Тя лопаса пяк лама питни синтаксонь анализаторхнень тяшкста.

Тяса эряви кирдемс $2-да кържа {{PLURAL:$2|тяшкс|тяшкст}}, {{PLURAL:$1|тяни $1 тяшкс|тяни $1 тяшкста}}.',
'expensive-parserfunction-category'       => 'Лопат пяк лама питни синтаксонь анализаторхнень тяшкснень мархта',
'post-expand-template-inclusion-warning'  => 'Инголе кардама: Шаблононь кувалмоц вельф оцю.
Мъзярошка шаблотт кармайхть илядома апак сувафтт.',
'post-expand-template-inclusion-category' => 'Лопатне конатнень эса шаблононь кувалмось вельф оцю',
'post-expand-template-argument-warning'   => 'Инголе кардама: Тя лопать эса ули аф фкада кържа шаблононь параметра, конань кувалмоц вельф оцю. Ня параметратне нолдафольхть.',
'post-expand-template-argument-category'  => 'Лопат конатнень эса улихть нолдаф шаблоттнень параметрасна',
'parser-template-loop-warning'            => 'Шаблононь кильгокш пензаф: [[$1]]',
'parser-template-recursion-depth-warning' => 'Шаблононь потафтома кърхкалманц отороц ($1)да лама',

# "Undo" feature
'undo-success' => 'Петнемать ули кода валхтомс. Ватт верзиетне ала, мук полафнематне конат тондейть эрявихть, ванфтк лопать ня эряви полафнематнень мархта.',
'undo-failure' => 'Тя петнемать аш кода валхтомс ётконь петнематнень карань-каршек арафтомаснон сюнеда.',
'undo-norev'   => 'Тя петнемать аш кода мърдафтомс сяс мес сонь аш эли сон нардафоль.',
'undo-summary' => 'Валхтт петнемась $1 конань тизе [[Special:Contributions/$2|$2]] ([[User talk:$2|Корхнема]])',

# Account creation failure
'cantcreateaccounttitle' => 'Аш кода сёрматфтомать тиемс',
'cantcreateaccount-text' => "Сёрматфтомась тя IP адреста ('''$1''') пякстазе [[User:$3|$3]].

$3 макссь туфталсь - ''$2''",

# History pages
'viewpagelogs'           => 'Няфтемс тя лопать историянц',
'nohistory'              => 'Тя лопать петнемань историяц аш.',
'currentrev'             => 'Тяниень верзие',
'currentrev-asof'        => 'Тяниень $1нь верзиец',
'revisionasof'           => '$1-нь верзиесь',
'revision-info'          => '$1-нь иялякстоптомась конань тизе $2',
'previousrevision'       => 'Сядынгольдень илякстоптома',
'nextrevision'           => 'Сяда од илякстоптома',
'currentrevisionlink'    => 'Тяниень илякстоптома',
'cur'                    => 'тян.',
'next'                   => 'сай',
'last'                   => 'сяд.',
'page_first'             => 'васенце',
'page_last'              => 'мекольце',
'histlegend'             => 'Верзиень кочкама: путт тяшкскат верзиетнень конякскяснон эди люпштак алудонь пунять эли Enter пунять.<br />
Шарьхкотьфтема: (тян.) = тяниень верзиеда явомась,
(сяд.) = сядынгольдень верзияда явомась, Ё = ёмла петнема.',
'history-fieldset-title' => 'Вешентть история',
'history-show-deleted'   => 'Аньцек нардаф',
'histfirst'              => 'Кунардонь',
'histlast'               => 'Мекольце',
'historysize'            => '({{PLURAL:$1|1 байт|$1 байтт}})',
'historyempty'           => '(шава)',

# Revision feed
'history-feed-title'          => 'Верзиетнень историясна',
'history-feed-description'    => 'Викиса тя лопать верзиетнень историясна',
'history-feed-item-nocomment' => '$1-сь $2-са',
'history-feed-empty'          => 'Лопась, конань тон вешеть тяса аш.
Улема сонь нардазь Викиста эли сонь лемоц полафтозь.
Сувак [[Special:Вешендемас|Викиса вешендемас]] сяда мала лопатнень муманкса.',

# Revision deletion
'rev-deleted-comment'         => '(мяльполаткс нардаф)',
'rev-deleted-user'            => '(тиить лемоц нардаф)',
'rev-deleted-event'           => '(сёрматфсь нардаф)',
'rev-deleted-text-permission' => "Тя лопать верзиенц '''нардазь'''.
Шарьхкотьфнемат, шятьта, улихть [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} нардамань лувомаса].",
'rev-deleted-text-view'       => "Тя лопать верзиенц '''нардазь'''.
Тондейть кода оцюнянцты ули кода ваномонза; ванк сяда лама информацие [{{fullurl:{{#Special:Log}}/delete|page={{FULLPAGENAMEE}}}} нардамань лувомаса].",
'rev-delundel'                => 'няфтемс/кяшемс',
'revisiondelete'              => 'Нардамс/мърдафтомс илякстоптоматнень',
'revdelete-nooldid-title'     => 'Аф лац верзиень кочкама',
'revdelete-nooldid-text'      => 'Тон ашеть кочка верзие эли верзиет  конатнень мархта эряви тянь тиемс, илякс ня верзиетне ашет эли тонт тяряфнят кяшемс тяниень верзиеть.',
'revdelete-show-file-submit'  => 'Ина',
'revdelete-selected'          => "''''''$1:'''-нь {{PLURAL:$2|Кочкаф верзиец|Кочкаф верзиенза}}'''",
'logdelete-selected'          => "'''{{PLURAL:$1|Кочкаф сёрматфтомась|кочкаф сёрматфтоматне}}:'''",
'revdelete-text'              => "'''Нардаф верзиетне илядыхть няевикс лопать историясонза ди нардамань лувомава, интай сонь потмоснон пакшенза кармайхть аф сембонди сатовихть.'''
Иля {{SITENAME}}нь оцюнятненди кяшф потмоснон ули кода ваномс эди мърдафтомс тяка програмонь ванфть вельде мъзярс иля кардафксне исть путов.",
'revdelete-legend'            => 'Арафтомс няемга оторхне',
'revdelete-hide-text'         => 'Кяшемс тя лопать верзиенц',
'revdelete-hide-image'        => 'Кяшемс файлхнень потмосна',
'revdelete-hide-name'         => 'Кяшемс тиемать эди туфталонц',
'revdelete-hide-comment'      => 'Кяшемс мяльполатксонь петнемать',
'revdelete-hide-user'         => 'Кяшемс петнить лемонц/IP адресонц',
'revdelete-hide-restricted'   => 'Нолдак тевс ня кардафкснень системонь вийксненди ди тага илятненди.',
'revdelete-radio-set'         => 'Ина',
'revdelete-radio-unset'       => 'Аф',
'revdelete-suppress'          => 'Кяшемс информациень системонь вятикснень эзда',
'revdelete-unsuppress'        => 'Валхтомс мърдаф верзиятнень кардамаснон',
'revdelete-log'               => 'Туфтал:',
'revdelete-submit'            => 'Нолдамс тевс кочкаф {{PLURAL:$1|верзие|верзиет}}',
'revdelete-success'           => "'''Верзиеть няевоманц одонзафозь лац.'''",
'logdelete-success'           => "'''Сёрматфть няевомац арафтовсь лац.'''",
'revdel-restore'              => 'Полафтомс няевомац',
'revdel-restore-deleted'      => 'нардаф верзиет',
'revdel-restore-visible'      => 'няеви верзиет',
'pagehist'                    => 'Лопать историяц',
'deletedhist'                 => 'Нардаф историяц',
'revdelete-edit-reasonlist'   => 'Петнемс нардамань туфталхне',

# Suppression log
'suppressionlog'     => 'Кяшемань лувомась',
'suppressionlogtext' => 'Ала нардаматнень ди сёлгоматнень лувомась системонь вятикста кяшф потмоть мархта.
Ванк [[Special:IPBlockList|IP сёлгоматнень лувомась]] мекольце якафнемань кардафкснень ди сёлгоматнень мархта.',

# History merging
'mergehistory'                     => 'Шоворемс лопатнень историяснон',
'mergehistory-header'              => 'Тя лопаса мярьгови кафта башка лисьма лопатнень верзиснон фкя фкянь мархта шоворемс.
Арьсек синь шоворемада инголе афи тя лопать историяц йумай.',
'mergehistory-box'                 => 'Шоворемс кафта лопатнень верзияснон фкя фкянь мархта:',
'mergehistory-from'                => 'Лисьма лопа:',
'mergehistory-into'                => 'Сувафтома лопа:',
'mergehistory-list'                => 'Шовореви петнематнень историясна',
'mergehistory-merge'               => 'Ня [[:$1]]нь верзиенза шоворевихть [[:$2]]с.
Нолдак тевс кочкама пунятнень палманць аньцек кочкаф ёткопингонь верзиетнень шовореманкса.
Шарфтк мяльце тянь лангс, мес навигациень сюлмафкснень тевс нолдамда ули кода тя палманьста информацие юмафтомс.',
'mergehistory-go'                  => 'Няфтемс шовореви петнематнень',
'mergehistory-submit'              => 'Шоворемс петнематнень',
'mergehistory-empty'               => 'Шовореви верзиет ашет.',
'mergehistory-success'             => '$3 [[:$1]]-нь {{PLURAL:$3|верзиец|верзиенза}} лац шоворьфтезь [[:$2]]-с.',
'mergehistory-fail'                => 'Историясна аф шоворевихть, ванк лац эли аф кочкафольхть лопась ди пингсь.',
'mergehistory-no-source'           => 'Лисьма лопа $1 аш.',
'mergehistory-no-destination'      => 'Сувафтома лопа $1 аш.',
'mergehistory-invalid-source'      => 'Эряви лисьма лопанть кондясти лемоц.',
'mergehistory-invalid-destination' => 'Эряви сувафтома лопать кондясти лемоц.',
'mergehistory-autocomment'         => 'Шоворьфтезь [[:$1]] [[:$2]]-с',
'mergehistory-comment'             => 'Шоворьфтезь [[:$1]] [[:$2]]-с: $3',
'mergehistory-same-destination'    => 'Сядынгольде ди од лопатненди аш кода улемс фкат',
'mergehistory-reason'              => 'Туфтал:',

# Merge log
'mergelog'           => 'Шоворематнень лувома',
'pagemerge-logentry' => '[[$1]] шоворевсь [[$2]]-ть мархта ($3-ть верзиети самс)',
'revertmerge'        => 'Валхтомс шоворемать',
'mergelogpagetext'   => 'Ванк ала сяда мекольдень лопатнень фкя фкянь мархта шоворемаснон историясна.',

# Diffs
'history-title'           => '"$1"нь полафнематнень историясна',
'difference'              => '(Явомась верзиетнень ёткова)',
'difference-multipage'    => 'Явомась лопаланготнень ёткова',
'lineno'                  => 'Кикссь $1:',
'compareselectedversions' => 'Путомс кочкаф верзиетнень ваксс',
'editundo'                => 'валхтомс',
'diff-multi'              => '({{PLURAL:$1|ёткопингонь верзие, конась|$1 ёткопингонь верзиет, конатне}} {{PLURAL:$2|тии тизе|$2 тиихть тизь}} апак няфтек)',

# Search results
'searchresults'                    => 'Мезе мувсь',
'searchresults-title'              => 'Мезе мувсь "$1" лемс',
'searchresulttext'                 => '{{SITENAME}}-са вешендемань колга лама содаманкса ватт [[{{MediaWiki:Helppage}}|кизефтемань пялькссь]].',
'searchsubtitle'                   => 'Тон вешить \'\'\'[[:$1]]\'\'\' ([[Special:Prefixindex/$1|сембе лопат "$1"ста ушедомс]]{{int:pipe-separator}}[[Special:WhatLinksHere/$1|сембе лопат сюлмафт "$1" мархта]])',
'searchsubtitleinvalid'            => "Тон вешить '''$1'''",
'toomanymatches'                   => 'Пяк лама вешфонди малады муфкст, эняльттяма вешентть тага весть',
'titlematches'                     => 'Лопать коняксоц мувсь',
'notitlematches'                   => 'Лопать коняксоц изь мув',
'textmatches'                      => 'Лопаса сёрматфсь мувсь',
'notextmatches'                    => 'Лопаса сёрматфсь изь мув',
'prevn'                            => 'сядынголень {{PLURAL:$1|$1}}',
'nextn'                            => 'сай {{PLURAL:$1|$1}}',
'prevn-title'                      => 'Сядынгольдень $1 {{PLURAL:$1|сафкс|сафкст}}',
'nextn-title'                      => 'Сядомелень $1 {{PLURAL:$1|сафкс|сафкст}}',
'shown-title'                      => 'Няфтемс лопасонза $1 {{PLURAL:$1|сафкс|сафкст}}',
'viewprevnext'                     => 'Ваномс ($1 {{int:pipe-separator}} $2) ($3)',
'searchmenu-legend'                => 'Вешендема арафнематне',
'searchmenu-exists'                => "'''Тя Викиса ули лопась \"[[:\$1]]\" лем мархта'''",
'searchmenu-new'                   => "'''Ушедомс лопась \"[[:\$1]]\" тя Викиса!'''",
'searchhelp-url'                   => 'Help:Лопань потмоц',
'searchmenu-prefix'                => '[[Special:PrefixIndex/$1|Мумс лопат тя валынголькссь мархта]]',
'searchprofile-articles'           => 'Потмонь лопат',
'searchprofile-project'            => 'Лезкс эди проектонь лопат',
'searchprofile-images'             => 'Мультимедиа',
'searchprofile-everything'         => 'Сембе',
'searchprofile-advanced'           => 'Келептьф',
'searchprofile-articles-tooltip'   => 'Вешендемс $1са',
'searchprofile-project-tooltip'    => 'Вешендемс $1са',
'searchprofile-images-tooltip'     => 'Вешендемс файлхт',
'searchprofile-everything-tooltip' => 'Вешендемс сембе лопаса (корхнема лопат сявомок)',
'searchprofile-advanced-tooltip'   => 'Вешендемс кърдань лемботмова',
'search-result-size'               => '$1 ({{PLURAL:$2|1 вал|$2 валхт}})',
'search-result-category-size'      => '{{PLURAL:$1|1 якай|$1 якайхть}} ({{PLURAL:$2|1 субкатегорие|$2 субкатегориет}}, {{PLURAL:$3|1 файла|$3 файлат}})',
'search-result-score'              => 'Малавиксши: $1%',
'search-redirect'                  => '(шашфтт $1с)',
'search-section'                   => '(пялькс $1)',
'search-suggest'                   => 'Афкукс тонь мяльсот: $1',
'search-interwiki-caption'         => 'Сазоронь проекттне',
'search-interwiki-default'         => '$1 муфкст:',
'search-interwiki-more'            => '(сяда лама)',
'search-mwsuggest-enabled'         => 'мяль максоматнень мархта',
'search-mwsuggest-disabled'        => 'мяль максоматнень ашет',
'search-relatedarticle'            => 'Мала',
'mwsuggest-disable'                => 'Лоткак AJAX мяль максоматне тевс нолдама',
'searchrelated'                    => 'мала',
'searchall'                        => 'сембе',
'showingresults'                   => "Ала няфтеви {{PLURAL:$1|мувсь '''1'''|мувсть '''$1'''}} '''$2'''-ста ушедомс.",
'showingresultsnum'                => "Ала няфтеви {{PLURAL:$3|мувсь '''1'''|мувсть '''$3'''}} '''$2'''-ста ушедомс.",
'showingresultsheader'             => "{{PLURAL:$5|'''$1''' сафкс '''$3'''-ста|'''$1 - $2''' сафкст '''$3'''-ста}} '''$4'''нди",
'nonefound'                        => "'''Шарфтк мяльце''': Аньцек мъзярошка лемботмат вешендевихть инголе апак полафтт. Тяряфтт вешендема валда инголе путомс ''all:'' сембе потмонь вешендеманди (корхнема лопат ди шаблотт сявомок, ди с. т) эли кундак эрявикс лемботмос кода валынгольксс.",
'search-nonefound'                 => 'Аш вешфксонди малады муфкст.',
'powersearch'                      => 'Сядонга вешендемс',
'powersearch-legend'               => 'Анцяйняньбес вешендема',
'powersearch-ns'                   => 'Вешендемс лемботмоса:',
'powersearch-redir'                => 'Шашфтфкснень лувомась',
'powersearch-field'                => 'Вешендемс',
'powersearch-togglelabel'          => 'Варжак:',
'powersearch-toggleall'            => 'Сембе',
'powersearch-togglenone'           => 'Фкявок аш',
'search-external'                  => 'Ушеширень вешендема',
'searchdisabled'                   => '{{SITENAME}}-са тяни вешендемась аш. Ули кода вешендемс Google эли иля вешендемань интернет програпнень вельде. Шарфтк мяльце тостонь {{SITENAME}}-нь потмонц верзиец, улема, сирелгодсь.',

# Quickbar
'qbsettings'               => 'Навигациень седяфкс',
'qbsettings-none'          => 'Аф няфтемс',
'qbsettings-fixedleft'     => 'Кержи шири киртьф',
'qbsettings-fixedright'    => 'Види шири киртьф',
'qbsettings-floatingleft'  => 'Кержи ширеса уенди',
'qbsettings-floatingright' => 'Виде ширеса уенди',

# Preferences page
'preferences'               => 'Арафнематне',
'mypreferences'             => 'Монь латцемане',
'prefs-edits'               => 'Петнематнень лувсна:',
'prefsnologin'              => 'Апак сувак',
'prefsnologintext'          => 'Тондейть эряви <span class="plainlinks">[{{fullurl:{{#Special:UserLogin}}|returnto=$1}} сувамс]</span> тонь арафнематнень латцеманкса.',
'changepassword'            => 'Сувама валть полафтомс',
'prefs-skin'                => 'Ванфонь латцема',
'skin-preview'              => 'Васень няфтема',
'datedefault'               => 'Апак полафтт',
'prefs-datetime'            => 'Ши ди пинге',
'prefs-personal'            => 'Тиить колга',
'prefs-rc'                  => 'Мекольце полафнемат',
'prefs-watchlist'           => 'Мельгеванома',
'prefs-watchlist-days'      => 'Мъзяра шит няфтемс мельгеваномаса:',
'prefs-watchlist-days-max'  => 'Maximum $1 {{PLURAL:$1|day|days}}',
'prefs-watchlist-edits'     => 'Иньоцю полафнематнень лувкссь няфтеви келептьф мельгеваномаса:',
'prefs-watchlist-edits-max' => '(максимум луфкс: 1000)',
'prefs-misc'                => 'Калмоча',
'prefs-resetpass'           => 'Полафтомс сувама валцень',
'saveprefs'                 => 'Ванфтомс',
'resetprefs'                => 'Валхтомс апак ванфтт полафнематнень',
'restoreprefs'              => 'Мърдафтомс васень латцематне',
'prefs-editing'             => 'Петнема',
'prefs-edit-boxsize'        => 'Петнема вальмоть келец.',
'rows'                      => 'Луфт (строкат):',
'columns'                   => 'Орват (столбанят):',
'searchresultshead'         => 'Вешендема',
'resultsperpage'            => 'Муфкст фкя лопаса:',
'stub-threshold'            => 'Оторсь (лимитсь) <a href="#" class="stub">-нь керф сюлмафкснень</a> латцемаснонды (байтт):',
'recentchangesdays'         => 'Мъзяра шит няфтемс мекольце полафнемаса:',
'recentchangesdays-max'     => '(максимум $1 {{PLURAL:$1|ши|шит}})',
'recentchangescount'        => 'Мъзяра петнемат няфтемс апак полафтт:',
'savedprefs'                => 'Тонь латцематне ванфтсть.',
'timezonelegend'            => 'Оень (часонь) каркссь:',
'localtime'                 => 'Тястоконь пинге:',
'timezoneuseserverdefault'  => 'Нолдак апак полафтт серверть тевс',
'timezoneuseoffset'         => 'Иля (путт явомась)',
'timezoneoffset'            => 'Явома¹:',
'servertime'                => 'Серверонь пинге:',
'guesstimezone'             => 'Сёрмадомс интернет полатксста',
'timezoneregion-africa'     => 'Африк',
'timezoneregion-america'    => 'Америк',
'timezoneregion-antarctica' => 'Антарктик',
'timezoneregion-arctic'     => 'Арктик',
'timezoneregion-asia'       => 'Азия',
'timezoneregion-europe'     => 'Явроп',
'timezoneregion-pacific'    => 'Сетьме океан',
'allowemail'                => 'Электрононь сёрматнень иля тиихнень эзда тиемс мярьговикс',
'prefs-searchoptions'       => 'Вешендема арафнемат',
'prefs-namespaces'          => 'Лемботмот',
'defaultns'                 => 'Илякс вешентть ня лемботмова:',
'default'                   => 'апак полафтт',
'prefs-files'               => 'Файлхт',
'youremail'                 => 'Электрононь адресце:',
'username'                  => 'Тиить лемоц:',
'uid'                       => 'Тиить идентификациесь:',
'prefs-memberingroups'      => 'Полаяй {{PLURAL:$1|полга|полга}}ста:',
'yourrealname'              => 'Афкуксонь лемце:',
'yourlanguage'              => 'Кяль:',
'yournick'                  => 'Эсь тяшкстама:',
'badsig'                    => 'Аф кондясти казяма кядьтяшксоце; ванк HTML тяштьксне.',
'badsiglength'              => 'Тонь тяшкстамаце пяк кувака.
Аф эряви путомс $1 {{PLURAL:$1|тяшкста|тяшкста}} лама.',
'yourgender'                => 'Симанкс:',
'gender-unknown'            => 'Аф содаф',
'gender-male'               => 'Аля вайме',
'gender-female'             => 'Ава вайме',
'email'                     => 'Электрононь адресце',
'prefs-help-realname'       => 'Афкуксонь лемце путомась аф лувови эрявикс. Афкуксонь лемцень тязк путомада меле тонь лемце кармай эвондама лопаса тонь петнемацень ала.',
'prefs-help-email'          => 'Электрононь адресце тяса аф лувови эрявикс, интай юкстандярят сувама валце адресце путомась лезды сонь полафтоманди.',
'prefs-help-email-others'   => 'Тондейть ули кода путомс корхнема лопазот е-паргцень, конань вельде иля ломатне сёрмадовихть тейть. Е-паргце аф кармай няеви мзярда иля тиихне тяшнелихть тейть.',
'prefs-help-email-required' => 'Эряви электрононь адресце.',

# User rights
'userrights'                  => 'Тиинь видекснень вятема',
'userrights-lookup-user'      => 'Тиихнень полгаснон вятемасна',
'userrights-user-editname'    => 'Путт тиить лемонц:',
'editusergroup'               => 'Полафтомс тиить полганзон',
'editinguser'                 => "'''[[User:$1|$1]]'''-нь тиить видексонзон полафнема ([[User talk:$1|{{int:talkpagelinktext}}]]{{int:pipe-separator}}[[Special:Contributions/$1|{{int:contribslink}}]])",
'userrights-editusergroup'    => 'Полафтомс тиить полганзон',
'saveusergroups'              => 'Ванфтомс тиить полганзон',
'userrights-groupsmember'     => 'Сувси полгас:',
'userrights-groups-help'      => 'Тондейть ули кода полафнемс полгат конат эса ули тя тиись.
* Тяште мархта кудня няфнесы тя тиись ащи ся полгаса.
* Тяштьфтома кудня няфнесы тя тиись аш ся полгаса.
* Тяштькс * няфнесы тондейть аш кода нардамс полгать сонь поладомада меле эли меколанкт.',
'userrights-reason'           => 'Туфтал:',
'userrights-no-interwiki'     => 'Тондейть аф мярьгови полафтомс тиихнень видекссна иля Викива.',
'userrights-nodatabase'       => 'Датабаза $1 аш эли сон аф тястоконь.',
'userrights-nologin'          => 'Тондейть эряви [[Special:UserLogin|сувамс]] оцюнянь сёрматфтомать вельде тиихнень видексснон макссеманкса.',
'userrights-notallowed'       => 'Тонь сёрматфтомацень вельде аф мярьгови макссемс видекст иля тиихненди.',
'userrights-changeable-col'   => 'Полгатне конатнень тондейть ули кода полафтомс',
'userrights-unchangeable-col' => 'Полгатне, конатнень тондейть аш кода полафтомс',

# Groups
'group'               => 'Полга:',
'group-user'          => 'Тиихне',
'group-autoconfirmed' => 'Эслек кемокстаф тиихне',
'group-bot'           => 'Робот програпне',
'group-sysop'         => 'Системонь вятиксне',
'group-bureaucrat'    => 'Бюрократт',
'group-suppress'      => 'Ревизорхт',
'group-all'           => '(сембе)',

'group-user-member'          => 'Тиись',
'group-autoconfirmed-member' => 'Эслек кемокстаф тиись',
'group-bot-member'           => 'Робот програм',
'group-sysop-member'         => 'Системонь вятикс',
'group-bureaucrat-member'    => 'Бюрократ',
'group-suppress-member'      => 'Ревизор',

'grouppage-user'          => '{{ns:project}}:Тиихне',
'grouppage-autoconfirmed' => '{{ns:project}}:Эслек кемокстаф тиихне',
'grouppage-bot'           => '{{ns:project}}:Робот програпне',
'grouppage-sysop'         => '{{ns:project}}:Системонь вятиксне',
'grouppage-bureaucrat'    => '{{ns:project}}:Бюрократт',
'grouppage-suppress'      => '{{ns:project}}:Ревизорхт',

# Rights
'right-read'                 => 'Морафтомс лопат',
'right-edit'                 => 'Петнемс лопат',
'right-createpage'           => 'Тиемс лопат (конат аф корхнема лопат)',
'right-createtalk'           => 'Тиемс корхнема лопат',
'right-createaccount'        => 'Тиемс од тиить сёрматфтоматне',
'right-minoredit'            => 'Тяштемс петнемат кода йомланя видептемат',
'right-move'                 => 'Шашфтомс лопатнень',
'right-move-subpages'        => 'Шашфтомс лопатнень синь сублопаснон мархта',
'right-move-rootuserpages'   => 'Шашфтомс юронь тиинь лопатне',
'right-movefile'             => 'Шашфтомс файлхт',
'right-suppressredirect'     => 'Лопань шашфтомста аф тиемс шашфтфкс сонь ингольдень лемстонза',
'right-upload'               => 'Тонгомс файлхт',
'right-reupload'             => 'Тиемс тяниень файлть одукс',
'right-reupload-own'         => 'Тиемс одукс тяниень файлть тонкф тяка тиить эса',
'right-reupload-shared'      => 'Нулгодемс тяса файлхнень марстонь медиа репозиториста',
'right-upload_by_url'        => 'Тонгомс файл URL адресста',
'right-purge'                => 'Нардамс лопань копияма файлхт лопанди конань аш кемокстама лопанц',
'right-autoconfirmed'        => 'Петнемс пялес-аралаф лопатнень',
'right-bot'                  => 'Лувовомс автоматонь процессокс',
'right-nominornewtalk'       => 'Ашет корхнема лопатненди анцяйня видептемат конатненди ули кода курок тиемс од пачфтемат',
'right-apihighlimits'        => 'Нолдамс тевс API вешендемать вяре оторс',
'right-writeapi'             => 'Сёрмадома API тевс нолдама',
'right-delete'               => 'Нардамс лопат',
'right-bigdelete'            => 'Нардамс лопат кувака история мархта',
'right-deleterevision'       => 'Нардамс эди мърдафтомс лопатнень башка верзиеснон',
'right-deletedhistory'       => 'Няфтемс нардаф историянь сёрматфть сотф текстфтома',
'right-browsearchive'        => 'Вешендемс нардаф лопава',
'right-undelete'             => 'Мърдафтомс лопа',
'right-suppressrevision'     => 'Ваномс ди мърдафтомс верзиетне кяшфт системонь вятикснень эзда',
'right-suppressionlog'       => 'Няфтемс ломанень лувомаснон',
'right-block'                => 'Сёлгомс иля тиихнень петнемада',
'right-blockemail'           => 'Сёлгомс тиить электрононь сёрматнень кучемада',
'right-hideuser'             => 'Сёлгомс тиить лемоц, сонь кяшезь иля тиида',
'right-ipblock-exempt'       => 'Ётамс IP сёлгоматнень ваксс, эсь тиеви сёлгоматнень ди оцю сёлгоматнень',
'right-proxyunbannable'      => 'Ётамс ваксс эсь тиеви ётка якай серверонь сёлгоматне',
'right-protect'              => 'Полафтомс араламань куцеманянзон ди петнемс аралаф лопатнень',
'right-editprotected'        => 'Петнемс аралаф лопатнень (какскадонь араламада башка)',
'right-editinterface'        => 'Петнемс тиить лопанц арафнеманзон',
'right-editusercssjs'        => 'Петнемс иля тиихнень CSS ди JS файлснон',
'right-editusercss'          => 'Петнемс иля тиихнень CSS файлснон',
'right-edituserjs'           => 'Петнемс иля тиихнень JS файлснон',
'right-rollback'             => 'Куроконе мумс мекольце тиить конась петнесь лопат',
'right-markbotedits'         => 'Тяштемс мърдаф петнематнень кода робот петнематне',
'right-noratelimit'          => 'Куроксшинь оторхт ашет',
'right-import'               => 'Таргамс лопат иля Викиста',
'right-importupload'         => 'Таргамс лопат файлонь тонгомаста',
'right-patrol'               => 'Тяштемс илятнень петнемаснон патрулияфокс',
'right-autopatrol'           => 'Эсь петнематнень кармафтомс тяштевомс патрулияфокс',
'right-patrolmarks'          => 'Няфтемс мекольце полафнематнень патрулияфокс тяштефнень ёткса',
'right-unwatchedpages'       => 'Ваномс аф мельгеваномаса лопатнень лувомать',
'right-mergehistory'         => 'Шоворьфтемс историянь лопатне',
'right-userrights'           => 'Петнемс сембе тиихнень видексснон',
'right-userrights-interwiki' => 'Петнемс тиихнень видекснон иля викить лопасонза',
'right-siteadmin'            => 'Пякстамс эди панжемс датабазать',

# User rights log
'rightslog'      => 'Тиить видексонза лувомась',
'rightslogtext'  => 'Тиить видексонзон полафнемасна лувомась.',
'rightslogentry' => '$1-нь полгац полафтсь $2-ста $3-с',
'rightsnone'     => '(аш)',

# Associated actions - in the sentence "You do not have permission to X"
'action-read'                 => 'тя лопать морафтома',
'action-edit'                 => 'петнемс тя лопать',
'action-createpage'           => 'тиемс лопат',
'action-createtalk'           => 'тиемс корхнема лопат',
'action-createaccount'        => 'тиемс тя тиить сёрматфтоманц',
'action-minoredit'            => 'тяшкстамс тя петнемать анцяйнякс',
'action-move'                 => 'Шашфтомс тя лопать',
'action-move-subpages'        => 'шашфтомс тя лопать эди сонь сублопанзон',
'action-move-rootuserpages'   => 'шашфтомс юронь тиинь лопатне',
'action-movefile'             => 'шашфтомс тя файлть',
'action-upload'               => 'тонгомс тя файлть',
'action-reupload'             => 'сёрмадомс одукс тя файлть аф ваномок сон ульсь ни',
'action-reupload-shared'      => 'нулгодемс тя файлть марстонь репозиториса',
'action-upload_by_url'        => 'тонгомс тя файлть URL адресста',
'action-writeapi'             => 'нолдамс тевс сёрмадома APIсь',
'action-delete'               => 'нардамс тя лопать',
'action-deleterevision'       => 'нардамс тя верзиеть',
'action-deletedhistory'       => 'ваномс тя лопать нардаф историянц',
'action-browsearchive'        => 'вешендемс нардаф лопава',
'action-undelete'             => 'мърдафтомс тя лопать',
'action-suppressrevision'     => 'ванондомс эди мърдафтомс тя кяшф верзиеть',
'action-suppressionlog'       => 'ваномс тя тиить лувоманц',
'action-block'                => 'сёлгомс тя тиить петнемада',
'action-protect'              => 'полафтомс тя лопать араламань арафнеманзон',
'action-import'               => 'таргамс тя лопать иля Викиста',
'action-importupload'         => 'таргамс тя лопать файлонь тонгомаста',
'action-patrol'               => 'тяштемс илятнень петнемасна патрулияфокс',
'action-autopatrol'           => 'тяштть тонь петнемацень патрулияфокс',
'action-unwatchedpages'       => 'няфтемс мельгеваномафтома лопатнень лувомаснон',
'action-mergehistory'         => 'шоворемс тя лопать историянц',
'action-userrights'           => 'петнемс сембе тиихнень видексснон',
'action-userrights-interwiki' => 'петнемс тиихнень иля викистонь тиинь видексснон',
'action-siteadmin'            => 'пякстамс эли панжемс датабазать',

# Recent changes
'nchanges'                          => '$1 {{PLURAL:$1|полафнема|полафнемат}}',
'recentchanges'                     => 'Мекольце полафнемат',
'recentchanges-legend'              => 'Мекольце полафнематнень арафнемасна',
'recentchangestext'                 => 'Ваномс сяда мекольце Викиса полафнематнень мельге тя лопаса.',
'recentchanges-feed-description'    => 'Ваномс сяда мекольце Викиса полафнематнень мельге тя шудемаса.',
'recentchanges-label-newpage'       => 'Тя видептемась од лопа тись',
'recentchanges-label-minor'         => 'Тя ёмланя видептема',
'recentchanges-label-bot'           => 'Тя видептемась тизе кона-бди робот програм',
'recentchanges-label-unpatrolled'   => 'Тя видептемась ашесь пова патруль ала ни',
'rcnote'                            => "Ала {{PLURAL:$1|мекольце '''1''' полафнема|мекольце '''$1''' полафнемат}} '''$2''' ётай  {{PLURAL:$2|шис|шис}}, $5, $4ста.",
'rcnotefrom'                        => "Ала няфтезь полафнематне '''$2'''-ста ('''$1'''-с).",
'rclistfrom'                        => 'Няфтемс од полафнематне $1-ста ушедомс',
'rcshowhideminor'                   => '$1 ёмланя видептемат',
'rcshowhidebots'                    => '$1 робот програпт',
'rcshowhideliu'                     => '$1 суваф тиихть',
'rcshowhideanons'                   => '$1 лемфтома тиихть',
'rcshowhidepatr'                    => '$1 ванондоф петнемат',
'rcshowhidemine'                    => '$1 эсь петнемат',
'rclinks'                           => 'Няфтемс $1 ётай полафнемат мекольце $2 шис<br />$3',
'diff'                              => 'яв.',
'hist'                              => 'ист.',
'hide'                              => 'Кяшемс',
'show'                              => 'Няфтемс',
'minoreditletter'                   => 'ё',
'newpageletter'                     => 'О',
'boteditletter'                     => 'р',
'number_of_watching_users_pageview' => '[$1 ваны {{PLURAL:$1|тии|тиихть}}]',
'rc_categories'                     => 'Аньцек категориеста (явфтомс "|" вельде)',
'rc_categories_any'                 => 'Эрь кодама',
'newsectionsummary'                 => '/* $1 */ од пялькс',
'rc-enhanced-expand'                => 'Няфтемс анцяйнятне (эряви JavaScript)',
'rc-enhanced-hide'                  => 'Кяшемс анцяйнятне',

# Recent changes linked
'recentchangeslinked'          => 'Сюлмаф полафнематне',
'recentchangeslinked-feed'     => 'Сюлмаф полафнематне',
'recentchangeslinked-toolbox'  => 'Сюлмаф полафнематне',
'recentchangeslinked-title'    => 'Полафнемат сюлмафт "$1" мархта',
'recentchangeslinked-noresult' => 'Сюлмаф лопава тя пингста полафнемат ашельхть.',
'recentchangeslinked-summary'  => "Тя башка лопас сувафнезь мекольце полафнемат сюлмаф лопава. Тонь ванома сёрмалувомастонь лопатне тяштезь '''эчкста'''.",
'recentchangeslinked-page'     => 'Лопать лемоц:',
'recentchangeslinked-to'       => 'Няфтемс полафтоматне лопатнень эса сотфт тя лопать мархта',

# Upload
'upload'                      => 'Тонгомс файл',
'uploadbtn'                   => 'Тонгомс файл',
'reuploaddesc'                => 'Валхтомс тонгомать ди мърдамс тонгома формс.',
'uploadnologin'               => 'Апак сувак',
'uploadnologintext'           => 'Тондейть эряви [[Special:UserLogin|сувамс]] файл тонгоманкса.',
'upload_directory_missing'    => 'Аш тонгома директорие ($1) ди интернет серверти аш кода сонь тиемс.',
'upload_directory_read_only'  => 'Аш кода сёрмадомс ($1) директориес web-сервер вельде.',
'uploaderror'                 => 'Тонгодема эльбятькс',
'uploadtext'                  => "Форм ала тондейть эрявксты файлонь тонгоманди ди ваноманди.
Инголе тонкф файлхнень няфтеманкса ванк [[Special:FileList|тонкф архтофкснень лувомась]], файлонь одукс тонгомасна тяштевихть [[Special:Log/upload|тонгома лувомас]], файлонь нардамасна тяштевихть [[Special:Log/upload|нардама лувомас]].

Архтофкс сёрматфксс сувафтоманкса эряви путомс ки:
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.jpg]]</nowiki></code>''' пяшксе файлонь верзинц тевс нолдаманди
* '''<code><nowiki>[[</nowiki>{{ns:file}}<nowiki>:File.png|200px|thumb|left|alt text]]</nowiki></code>''' 200 пиксель кели верзие ёмла кудняса лопань кержи ширеса тевс нолдаманди, 'alt text' вастс путозь архтофкс колга тяштемась
* '''<code><nowiki>[[</nowiki>{{ns:media}}<nowiki>:File.ogg]]</nowiki></code>''' файлть мархта видеста сюлмамонди ся файлть апак няфнек.",
'upload-permitted'            => 'Мярьговикс файл форматт: $1.',
'upload-preferred'            => 'Сембода пара файл форматт: $1.',
'upload-prohibited'           => 'Кардама файл форматт: $1.',
'uploadlog'                   => 'файлонь тонгома лувома',
'uploadlogpage'               => 'Файлонь тонгома лувомас',
'uploadlogpagetext'           => 'Ватт ала мекольце файлонь тонгома лувомась.
Ватт [[Special:NewFiles|од файлхнень няфтема]] содамс кодапт синь.',
'filename'                    => 'Файлонь лем',
'filedesc'                    => 'Нюрьхкяняста файлть колга',
'fileuploadsummary'           => 'Нюрьхкяняста файлть колга:',
'filestatus'                  => 'Копияма мярьгомац:',
'filesource'                  => 'Лисьма:',
'uploadedfiles'               => 'Тонкф файлхне',
'ignorewarning'               => 'Нулгодемс инголе кардамать ди ванфтомс файлть',
'ignorewarnings'              => 'Нулгодемс сембе инголе кардаматтне',
'minlength1'                  => 'Файлонь лем эряви тиемс фкя тяштькста сембода кържа.',
'illegalfilename'             => 'Файлонь лемса "$1" улихть тяштькст конат лувовихть аф мярьговикс лопань конякснонды. Тик иля файлонь лем, меле тонк сонь тага весть.',
'badfilename'                 => 'Файлонь лемонц полафтозь "$1"-с.',
'filetype-badmime'            => 'MIME формат файлхт "$1" аф мярьговихть тонгоманди.',
'filetype-bad-ie-mime'        => 'Аш кода тогомс тя файлть сяс мес Internet Explorer кармай сонь ваномонза кода "$1", а тя аф мярьгови ди потенциал коряс пелькс файлонь типсь.',
'filetype-unwanted-type'      => "'''\".\$1\"'''-ть аф ярашты файл форматоц. Сяда {{PLURAL:\$3|пароль файл формат|парольхть файл форматт}} \$2.",
'filetype-banned-type'        => "'''\".\$1\"'''-ть файл форматоц аф мярьгови. Мярьговихть {{PLURAL:\$3|файл формат|файл форматт}} \$2.",
'filetype-missing'            => 'Файлть аш формат тяшксоц (кепотьксонди ".jpg").',
'large-file'                  => 'Сяда пароль файлхт улельхть аф $1-да кувака; тя файлсь $2.',
'largefileserver'             => 'Тя файлсь серверонь мярьгови кувалмода лама.',
'emptyfile'                   => 'Файлсь, конась тон тонгодеть шаволь. Тя лиссь, улема, аф лац файллем серматкшнеманц сюнеда.  Ванк ди арьсек улель эли аф тонь мялец тя файлть тонгомонза.',
'fileexists'                  => 'Тя лемса файл улсь ни.
Ванк <strong>[[:$1]]</strong> улель эли аф тонь мяльце сонь полафнемонза.
[[$1|thumb]]',
'filepageexists'              => 'Тя лемса лопа ульсь ни, ванк <strong>[[:$1]]</strong> аньцек тяни аш файл тя лем мархта.
Сёрмадомась тон тият аф эвондай лувондома лопаса.
Тонь сёрмадомацень тоса эвондаманди тондейть сави эсь кядьса сонь петнемс
[[$1|thumb]]',
'fileexists-extension'        => 'Файл тя файлть лемонцты малады ульсь ни: [[$2|thumb]]
* Тонгодеви файлть лемоц: <strong>[[:$1]]</strong>
* Файллем, кона ульсь ни: <strong>[[:$2]]</strong>
Эняльттяма, арьсек иля лем.',
'fileexists-thumbnail-yes'    => "Файлсь, улема, архтофксонь кирьфтаф верзиесь ''(thumbnail)''. [[$1|thumb]]
Ванк файл <strong>[[:$1]]</strong> лангс.
Дяряй файлсь конань лангс тон ваноть сяка пяшксе кувалмоса архтофкссь, тоса тага фкя миниатюр тонгомс аф эряви.",
'file-thumbnail-no'           => "Файллемсь ушедсь <strong>$1</strong>.
Архтофксть кувалмоц, улема, пяк кирьфтафоль ''(thumbnail)''.
Улендяряй тонь тя файлть сяда кувака верзиец - тонк сонь, илякс полафтт файллемть.",
'fileexists-forbidden'        => 'Файл тя лем мархта ульсь ни, аш кода сонь тиемс одукс.
Мяльце тонгомс тя файлсь - мърдак меки ди тонк тя файлть иля лем мархта. [[File:$1|thumb|center|$1]]',
'fileexists-shared-forbidden' => 'Файлсь тя лемть мархта ульсь ни марстонь файл пърдафксса. Сембе сяка улендярять мяльце тя файлть тонгомс, мърдак меки ди тонк тя файлть иля лем мархта. [[File:$1|thumb|center|$1]]',
'file-exists-duplicate'       => 'Тя файлсь кафонзафоль {{PLURAL:$1|файл|файлхт}}:',
'file-deleted-duplicate'      => 'Файлсь сяка кода файл ([[:$1]]) нардафоль. Ванк файлонь нардама историянц сонь одукс тонгоманза инголе.',
'uploadwarning'               => 'Тонгодемань инголе кардама',
'savefile'                    => 'Ванфтомс файл',
'uploadedimage'               => 'тонгозь "[[$1]]"',
'overwroteimage'              => 'тонгозь "[[$1]]" од верзиенц',
'uploaddisabled'              => 'Тонгодемать лоткозь',
'uploaddisabledtext'          => 'Файл тонгодемась лоткаф.',
'uploadscripted'              => 'Тя файлса ащи HTML эли програм, конат аф морафтовихть интернет полатксть вельде.',
'uploadvirus'                 => 'Тя файлса ащи вирус програм! Информацие: $1',
'sourcefilename'              => 'Лисьма файлонь лемоц',
'destfilename'                => 'Сувафтома файлонь лемоц',
'upload-maxfilesize'          => 'Максимум файлонь кувалмоц: $1',
'watchthisupload'             => 'Ваномс тя файлть мельге',
'filewasdeleted'              => 'Файл тяка лемса тонгозь ни ди меле нардазь. Тондейть пароль ваномс $1 тя файлть тонгодемац инголе.',
'filename-bad-prefix'         => "Тон тонгодьсак файл конань лемоц ушеды '''\"\$1\"'''-са. Стапт лепне лувовихть мезеньге аф колга азондовикс сяс мес синь эсь макссевихть тяшкскамераса тиф фотоархтофксненди (цифра камераса). Арьсек иля лем, конаса ащель информациеда лама.",
'upload-success-subj'         => 'Тонгодемась ётась лац',

'upload-proto-error'      => 'Аф кондясти протокол',
'upload-proto-error-text' => 'Ичкоздень тонгодеманди эряви URL-т ушедыхть <code>http://</code>-са эли <code>ftp://</code>-са.',
'upload-file-error'       => 'Потмонь эльбятькс',
'upload-file-error-text'  => 'Потмонь эльбятькс лиссь ёткопингонь файл серверса тиемста. Эряви сотомс [[Special:ListUsers/sysop|системонь вятиксть]] мархта.',
'upload-misc-error'       => 'Аф содаф тонгодема эльбятькс',
'upload-misc-error-text'  => 'Аф содаф эльбятькс лиссь тонгодембачк. Ванк кондясти ди сатови эли аф URL-сь эди тик сембе одукс. Лисендяряй стама эльбятькс тага весть, сотт [[Special:ListUsers/sysop|системонь вятиксть]] мархта.',

# Some likely curl errors. More could be added from <http://curl.haxx.se/libcurl/c/libcurl-errors.html>
'upload-curl-error6'       => 'URL-сь аф сатови',
'upload-curl-error6-text'  => 'URL-сь конась тон тяштеть аф сатови.  Ванк тага весть кондясти эли аф URL-сь эди лопась.',
'upload-curl-error28'      => 'Тонгодема пингсь ётась',
'upload-curl-error28-text' => 'Лопась аф пъшкяди каршес пяк ламос. Ванк лопась няфтеви эли аф эди тик сембе одукс аф лама пингта меле. Улема, тевть пароль тиемс иля пингста, мъзярда лопас сувсида кържа.',

'license'            => 'Лицензияма:',
'license-header'     => 'Лицензияма',
'nolicense'          => 'Лицензие аш',
'license-nopreview'  => '(Васень няфтемась аш)',
'upload_source_url'  => ' (кондясти, сембонди панжада URL)',
'upload_source_file' => ' (файлсь тонь содама машинасот)',

# Special:ListFiles
'listfiles-summary'     => 'Тя башка тевонь лопаса няфневихть сембе тонкф файлхне.
Мъзярс апак полафтт мекольце тонкф файлхне лувомаса няфневихть вяре.
Палмань коняксонцты люпштамась полафнесы кикснень арафнемать.',
'listfiles_search_for'  => 'Вешендемс медиа лем:',
'imgfile'               => 'файл',
'listfiles'             => 'Файлхт',
'listfiles_date'        => 'Ши',
'listfiles_name'        => 'Лем',
'listfiles_user'        => 'Тии',
'listfiles_size'        => 'Кувалма',
'listfiles_description' => 'Информацие',
'listfiles_count'       => 'Верзиет',

# File description page
'file-anchor-link'          => 'Файл',
'filehist'                  => 'Файлонь историясь',
'filehist-help'             => 'Люпштак шить/пингть лангс ся пингонь файлть верзинц няфтеманкса.',
'filehist-deleteall'        => 'нардамс сембе',
'filehist-deleteone'        => 'нардамс',
'filehist-revert'           => 'мърдафтомс',
'filehist-current'          => 'тя пингонь',
'filehist-datetime'         => 'Ши/Пинге',
'filehist-thumb'            => 'Миниатюр',
'filehist-thumbtext'        => 'Миниатюронь верзиец тиф $1',
'filehist-nothumb'          => 'Миниатюр аш',
'filehist-user'             => 'Тии',
'filehist-dimensions'       => 'Кувалма',
'filehist-filesize'         => 'Файлонь кувалмоц',
'filehist-comment'          => 'Мяльполаткс',
'imagelinks'                => 'Файлань тевс нолнема',
'linkstoimage'              => 'Сай {{PLURAL:$1|лопась сюлмаф|$1 лопатне сюлмафт}} вага тя файлть мархта:',
'linkstoimage-more'         => '$1-да лама {{PLURAL:$1|лопа сюлмаф|лопат сюлмафт}} тя файлть мархта.
Тя лувомаса няфневихть {{PLURAL:$1|васенце лопань сюлмафксоц|васенце $1 лопань сюлмафкссна}} аньцек тя файлть мархта.
Вага тяса [[Special:WhatLinksHere/$2|пяшксе лувомась]].',
'nolinkstoimage'            => 'Лопат сюлмафт тя файлть мархта ашет.',
'morelinkstoimage'          => 'Ванк [[Special:WhatLinksHere/$1|сяда лама сюлмафкст]] тя файлонди.',
'duplicatesoffile'          => 'Сай {{PLURAL:$1|файлсь ащи кафонзафксокс|$1 файлхне ащихть кафонзафксокс}} тя файлонди ([[Special:FileDuplicateSearch/$2|сяда лама информацие]]):',
'sharedupload'              => 'Тя файлсь $1ста ди сонь ули кода сувафтомс иля проектс.',
'sharedupload-desc-here'    => 'Тя файлась $1ста ди сонь ули кода сувафтомс иля проектс.
Колганза тяштьф [$2 файлать азондома лопазонза] конась няфтеви ала.',
'uploadnewversion-linktext' => 'Тонгодемс тя файлонь од верзиенц',

# File reversion
'filerevert'                => 'Мърдафтомс $1',
'filerevert-legend'         => 'Мърдафтомс файл',
'filerevert-intro'          => "Тон мърдафнесак '''[[Media:$1|$1]]''' [$4 верзиенза $3, $2-с].",
'filerevert-comment'        => 'Мяльполаткс:',
'filerevert-defaultcomment' => 'Мърдаф верзиес $2, $1',
'filerevert-submit'         => 'Мърдафтомс',
'filerevert-success'        => "'''[[Media:$1|$1]]''' мърдаф [$4 верзиенза $3, $2].",
'filerevert-badversion'     => 'Тя файлть сядынгольдень верзинц вешф пингоняфкс мархта тяса аш.',

# File deletion
'filedelete'                  => 'Нардамс $1',
'filedelete-legend'           => 'Нардамс файлть',
'filedelete-intro'            => "Тон тяряфнят нардамс файл '''[[Media:$1|$1]]''' сембе сонь историнц мархта.",
'filedelete-intro-old'        => "Тон нардасак   '''[[Media:$1|$1]]'''-ть верзиенза [$4 $3, $2].",
'filedelete-comment'          => 'Туфтал:',
'filedelete-submit'           => 'Нардамс',
'filedelete-success'          => "'''$1''' нардаф.",
'filedelete-success-old'      => "'''[[Media:$1|$1]]'''-ть верзиенза нардафольхть $3, $2.",
'filedelete-nofile'           => "'''$1''' аш.",
'filedelete-nofile-old'       => "'''$1'''-ть пърдафтф верзиенц стама тяшкст мархта аш.",
'filedelete-otherreason'      => 'Иля/поладомань туфтал:',
'filedelete-reason-otherlist' => 'Иля туфтал',
'filedelete-reason-dropdown'  => '*Марстонь нардама туфтал
** Копияма видекс срафтома
** Кафтонзаф файл',
'filedelete-edit-reasonlist'  => 'Петнемс нардамань туфталхне',

# MIME search
'mimesearch'         => 'MIME вешендема',
'mimesearch-summary' => 'Тя лопась нолдасы тевс файлонь кочксема синь MIME сортснон коряс. Сёрмадомань формат: файлботмонь сортоц/файлонь форматонц, кепотьксонди <code>image/jpeg</code>.',
'mimetype'           => 'MIME сорт:',
'download'           => 'тонгомс',

# Unwatched pages
'unwatchedpages' => 'Аф мельгеваномаса лопатне',

# List redirects
'listredirects' => 'Шашфтфкснень лувомасна',

# Unused templates
'unusedtemplates'     => 'Аф нолдаф тевс кепотьксне',
'unusedtemplatestext' => 'Тя лопаса пуроптф тя {{ns:template}} лемботмоса лопатне, конатнень исть сувафне иля лопас. Киртть мяльсот: тондейть эряви ваномс иля сюлмафксне улендяряйхть тоса иля аф ня кепотьксне синь нардамаснон инголе.',
'unusedtemplateswlh'  => 'иля сюлмафксне',

# Random page
'randompage'         => 'Кона повсь лопа',
'randompage-nopages' => 'Аш лопат {{PLURAL:$2|тя лемботмоса|ня лемботмоса}}: $1.',

# Random redirect
'randomredirect'         => 'Коза повсь шашфтфкс',
'randomredirect-nopages' => '"$1" лемботмоса умборондафтфкст ашет.',

# Statistics
'statistics'                   => 'Статистик',
'statistics-header-pages'      => 'Лопань статистик',
'statistics-header-edits'      => 'Петнемс статистикть',
'statistics-header-views'      => 'Няфтемс статистикть',
'statistics-header-users'      => 'Тиить статистиксь',
'statistics-articles'          => 'Потма мархта лопатне',
'statistics-pages'             => 'Лопатне',
'statistics-pages-desc'        => 'Сембе Викинь лопасна, корхнема лопатне, шафтфксне ди с.т.',
'statistics-files'             => 'Тонкф файлхне',
'statistics-edits'             => 'Лопань петнемасна {{SITENAME}}ть ушедомста',
'statistics-edits-average'     => 'Петнемат фкя лопас ётксталувксста',
'statistics-views-total'       => 'Ванондомада сембоц',
'statistics-views-peredit'     => 'Фкя петнемас ванондомада',
'statistics-users'             => 'Сёрматфтф [[Special:ListUsers|тиихне]]',
'statistics-users-active'      => 'Покай тиихне',
'statistics-users-active-desc' => 'Тиихне конатне тисть мезеге ётай {{PLURAL:$1|шиня|$1 шиста}}',
'statistics-mostpopular'       => 'Сидеста сувсеви лопат',

'disambiguations'      => 'Лама смузьса лопат',
'disambiguationspage'  => 'Template:лама смусть',
'disambiguations-text' => "Ня лопатне сюлмафт '''лама смузень лопа''' мархта. Синьдеест эрявихть сюлмамс иля башка сёрмафкснень мархта.<br />Лопась лувови лама смузеннекс мъзярда сон сюлмаф [[MediaWiki:Disambiguationspage]] кепотькс мархта.",

'doubleredirects'            => 'Кафонзаф умборондафтфксне',
'doubleredirectstext'        => 'Тя лопань лувомаса няфтевихть умборондафтфксне сюлмафт иля умборондафтфкснень мархта. Эрь луфксса (строкаса) улихть васенце ди омбоце умборондафтфкснень сюлмафкссна, тяса тага ули омбоце умборондафтфксонь васенце киксонцты сюлмафкссь, тоса ули няфтемась лопань лемонц лангс конань мархта эряволь васенце умборондафтфксть сюлмафтомс.
<del>Туркс кикс мархта</del> тяшксне латцефольхть.',
'double-redirect-fixed-move' => '[[$1]] шашфтфоль, сон тяни [[$2]]нь умборондафтфксоц',
'double-redirect-fixer'      => 'Умборондафтфксонь латцема',

'brokenredirects'        => 'Синтьф умборондафтфксне',
'brokenredirectstext'    => 'Ся умборондафтфксне сюлмафт лопат мархта конат ашет:',
'brokenredirects-edit'   => 'петнемс',
'brokenredirects-delete' => 'нардамс',

'withoutinterwiki'         => 'Кялень сюлмафксфтома лопат',
'withoutinterwiki-summary' => 'Ся лопатне аф сюлмафт иля кялень верзиетнень мархта:',
'withoutinterwiki-legend'  => 'Валынголькс',
'withoutinterwiki-submit'  => 'Няфтемс',

'fewestrevisions' => 'Лопат сяда кържа верзиеснон мархта',

# Miscellaneous special pages
'nbytes'                  => '$1 {{PLURAL:$1|байт|байтт}}',
'ncategories'             => '$1 {{PLURAL:$1|категорие|категориет}}',
'nlinks'                  => '$1 {{PLURAL:$1|сюлмафкс|сюлмафкст}}',
'nmembers'                => '$1 {{PLURAL:$1|сувси|сувсихть}}',
'nrevisions'              => '$1 {{PLURAL:$1|верзие|верзиет}}',
'nviews'                  => '$1 {{PLURAL:$1|няфтема|няфтемат}}',
'specialpage-empty'       => 'Тя информациень коряс мезеге изь мув.',
'lonelypages'             => 'Уроз лопат',
'lonelypagestext'         => 'Ся лопатне афи сюлмафт афи сотфт иля лопатнень мархта {{SITENAME}}са.',
'uncategorizedpages'      => 'Категориефтома лопат',
'uncategorizedcategories' => 'Категориефтома категориет',
'uncategorizedimages'     => 'Категориефтома файлхт',
'uncategorizedtemplates'  => 'Категориефтома кепотькст',
'unusedcategories'        => 'Тевс апак нолдак категориет',
'unusedimages'            => 'Тевс апак нолдак файлхт',
'popularpages'            => 'Сидеста сувсеви лопат',
'wantedcategories'        => 'Вешф категориет',
'wantedpages'             => 'Вешф лопат',
'wantedfiles'             => 'Вешеви файлхт',
'wantedtemplates'         => 'Вешеви шаблотт',
'mostlinked'              => 'Сембода ламоксть сюлмаф лопатнень мархта',
'mostlinkedcategories'    => 'Сембода ламоксть сюлмаф категориетнень мархта',
'mostlinkedtemplates'     => 'Сембода ламоксть сюлмаф кепотькснень
мархта',
'mostcategories'          => 'Сембода лама категорие мархта лопат',
'mostimages'              => 'Сембода ламоксть сюлмаф файлхнень мархта',
'mostrevisions'           => 'Сембода лама верзиетнень мархта лопат',
'prefixindex'             => 'Сембе лопат инголькс мархта',
'shortpages'              => 'Нюрьхкяня лопат',
'longpages'               => 'Кувака лопат',
'deadendpages'            => 'Полатксфтома лопат',
'deadendpagestext'        => 'Ся лопат аф сюлмафт иля лопатнень мархта {{SITENAME}}-са.',
'protectedpages'          => 'Аралаф лопат',
'protectedpages-indef'    => 'Аньцек апак кемокстак араламат',
'protectedpages-cascade'  => 'Аньцек каскад араламась',
'protectedpagestext'      => 'Ся лопатне шашфтомада эли петнемада аралафт',
'protectedpagesempty'     => 'Тя пингста аралаф лопат ся арафнематнень мархта ашет.',
'protectedtitles'         => 'Аралаф коняксне',
'protectedtitlestext'     => 'Ся лопа коняксне тиемада аралафт',
'protectedtitlesempty'    => 'Тя пингста аралаф лопа конякст ся арафнематнень мархта ашет.',
'listusers'               => 'Тиихне',
'listusers-editsonly'     => 'Няфтемс аньцек петнематнень мархта тиихнень',
'usereditcount'           => '$1 {{PLURAL:$1|петнема|петнемат}}',
'usercreated'             => '{{GENDER:$3|Шкаф}} $1 шиста $2 пингста',
'newpages'                => 'Од лопат',
'newpages-username'       => 'Тиить лемоц:',
'ancientpages'            => 'Сембода сире лопат',
'move'                    => 'Шашфтт',
'movethispage'            => 'Шашфтт тя лопать',
'unusedimagestext'        => 'Ся файлхне улихть аньцек синь аф сюлмафт кодамога лопа мархта.
Эняльттяма, шарфтк мяльце сянь лангс мес иля интернет лопат, улема, сюлмафт виде URL мархта, сяс синь сувафневихть тяза сидеста тевс нолдамафтома.',
'unusedcategoriestext'    => 'Ся категориень лопат улихть, интай ашет лопат эли иля категориет, конат синь нолдайхть тевс.',
'notargettitle'           => 'Сувафтома лопа аш',
'notargettext'            => 'Сувафтома лопа эли тии исть кочкав тя функцие тевс нолдаманкса.',
'nopagetitle'             => 'Аш стама вешеви лопа',
'nopagetext'              => 'Стама лопась тон вешеть тяса аш.',
'pager-newer-n'           => '{{PLURAL:$1|сяда од 1|сяда отт $1}}',
'pager-older-n'           => '{{PLURAL:$1|сяда сире 1|сяда сирет $1}}',
'suppress'                => 'Кяшема',

# Book sources
'booksources'               => 'Кинигань кучфтемат',
'booksources-search-legend' => 'Вешендемс кинигань кучфтемат',
'booksources-go'            => 'Аре',
'booksources-text'          => 'Сюлмафкст ала сотфт иля интернет лопатнень мархта, конат мишендихть од эди сире кинигат, ди тоса, улема, тон мусак поладомань информацие ся кинигатнень колга, конатнень тон вешендить:',
'booksources-invalid-isbn'  => 'Путф ISBN аф виде эли аф кондясти; ванк кодамкс сон ульсь лисемаса.',

# Special:Log
'specialloguserlabel'  => 'Тиись:',
'speciallogtitlelabel' => 'Конякс:',
'log'                  => 'Сувама лувомат',
'all-logs-page'        => 'Сембе сувама лувоматнень кярькс',
'alllogstext'          => 'Сембе сувама лувомат {{SITENAME}}-са.
Тондейть ули кода синь кочкафтомс сувама лувомань коряс, тиить эли суваф лопань коряс.',
'logempty'             => 'Стапт сувамот лувомаса ашет.',
'log-title-wildcard'   => 'Мумс конякст конат ушедыхть стама тяшкста',

# Special:AllPages
'allpages'          => 'Сембе лопат',
'alphaindexline'    => '$1-ста $2-с',
'nextpage'          => 'Сай лопа ($1)',
'prevpage'          => 'Сядынголень лопа ($1)',
'allpagesfrom'      => 'Няфтемс лопат ушедомс:',
'allpagesto'        => 'Няфтемс лопат аделамс:',
'allarticles'       => 'Сембе лопат',
'allinnamespace'    => 'Сембе лопат ($1 лемботмоса)',
'allnotinnamespace' => 'Сембе лопат (аф $1 лемботмоса)',
'allpagesprev'      => 'Сядынголень',
'allpagesnext'      => 'Сай',
'allpagessubmit'    => 'Ётамс',
'allpagesprefix'    => 'Няфтемс лопат инголькс мархта:',
'allpagesbadtitle'  => 'Тя лопать коняксоц афоль кондястикс эли сонь ульсь кяльётконь эли викиётконь инголькссь. Сонь, улема, фкя эли фкяда лама тяшкст, конат коняксова аф мярьговихть.',
'allpages-bad-ns'   => '{{SITENAME}}-са аш лемботма "$1".',

# Special:Categories
'categories'                    => 'Категориет',
'categoriespagetext'            => '{{PLURAL:$1|Тя категориень|ся категориетнень}} эса улихть лопат эли медиат.
[[Special:UnusedCategories|тевс апак нолдак категориятне]] тяса аф няфневихть.
Стане ина ватт [[Special:WantedCategories|вешема категориет]].',
'categoriesfrom'                => 'Няфтемс категориет тяста ушедозь:',
'special-categories-sort-count' => 'арафтомс луфть коряс',
'special-categories-sort-abc'   => 'арафтомс алфавитонь коряс',

# Special:DeletedContributions
'deletedcontributions'       => 'Нардаф тиихнень путкссна',
'deletedcontributions-title' => 'Нардаф тиихнень путкссна',

# Special:LinkSearch
'linksearch'       => 'Ушеширень сюлмафксне',
'linksearch-pat'   => 'Вешендема кепотькс:',
'linksearch-ns'    => 'Лемботмоц:',
'linksearch-ok'    => 'Вешендемс',
'linksearch-text'  => 'Сембекондясти лепне "*.wikipedia.org" кондяма ули кода нолдамс тевс.<br />
Кирдеви протоколхне: <code>$1</code>',
'linksearch-line'  => '$1 сюлмаф $2ста',
'linksearch-error' => 'Сембекондясти лепненди ули кода тихтедемс аньцек интернет сюлма лемть ушетксонза.',

# Special:ListUsers
'listusersfrom'      => 'Няфтемс тиихть ушедомс:',
'listusers-submit'   => 'Няфтемс',
'listusers-noresult' => 'Тиихть исть мув.',

# Special:Log/newusers
'newuserlogpage'     => 'Тиинь ушедоманзон лувомасна',
'newuserlogpagetext' => 'Тя тиинь ушедоманзон лувомасна.',

# Special:ListGroupRights
'listgrouprights'                 => 'Тиихнень полгаснон видексонза',
'listgrouprights-summary'         => 'Тяса тиихнень полгасна конатне сувсихть тя Викис синь сувама видексснон мархта.
Тяса ули кода мумс [[{{MediaWiki:Listgrouprights-helppage}}|поладомань информациесь]] эсь башка видекснень колга.',
'listgrouprights-group'           => 'Полга',
'listgrouprights-rights'          => 'Видексне',
'listgrouprights-helppage'        => 'Help:Полгань видексонза',
'listgrouprights-members'         => '(полайафнень лувомась)',
'listgrouprights-addgroup'        => 'Ули кода поладомс {{PLURAL:$2|полга|полгат}}: $1',
'listgrouprights-removegroup'     => 'Ули кода валхтомс {{PLURAL:$2|полга|полгат}}: $1',
'listgrouprights-addgroup-all'    => 'Ули кода поладомс сембе полгатне',
'listgrouprights-removegroup-all' => 'Ули кода сембе полгатне валхтомс',

# Email user
'mailnologin'      => 'Аш кучема адрес',
'mailnologintext'  => 'Тондейть эряви [[Special:UserLogin|сувамс]]
ди эряви кондясти электрононь адресце тонь [[Special:Preferences|арафнемасот]] иля тиихненди электрононь сёрмат кучемаснонды.',
'emailuser'        => 'Кучемс электрононь сёрма тя тиинди',
'emailpage'        => 'Кучемс электрононь сёрма тиинди',
'emailpagetext'    => 'Тондейть ули кода нолдамс тевс формть ала тя тиинди пачфтема кучеманди.
Электрононь адрессь тон путыть [[Special:Preferences|тонь тиинь латцемазонза]] кармай эвондама тонь сёрмасот "Киста" паксява, ди сёрмань кундаенди ули кода кучемс сонць сёрманц тя адресс.',
'usermailererror'  => 'Электрононь адрес эльбятькссь:',
'defemailsubject'  => '{{SITENAME}}-нь электрононь сёрма',
'noemailtitle'     => 'Аш электрононь адрес',
'noemailtext'      => 'Тя тиись изь макса кондясти электрононь адресонц.',
'nowikiemailtitle' => 'Электрононь сёрмат кардафт',
'nowikiemailtext'  => 'Тя тиить аш мялец кундамс электрононь сёрматне иля тиихнень кядьста.',
'email-legend'     => 'Кучемс электрононь сёрма иля {{SITENAME}}нь тиинди',
'emailfrom'        => 'Киста:',
'emailto'          => 'Кинди:',
'emailsubject'     => 'Киста',
'emailmessage'     => 'Пачфтема:',
'emailsend'        => 'Кучемс',
'emailccme'        => 'Кучт мондине монь сёрмазень копиянц.',
'emailccsubject'   => 'Тонь $1-ти сёрмацень копияц: $2',
'emailsent'        => 'Электрононь сёрма кучф',
'emailsenttext'    => 'Тонь электрононь сёрмаце кучф.',
'emailuserfooter'  => 'Тя электрононь сёрмась $1 кучезе $2-с "Email user" функциеть вельде {{SITENAME}}-са.',

# Watchlist
'watchlist'            => 'Монь мельгеваномазе',
'mywatchlist'          => 'Монь мельгеваномазе',
'watchlistfor2'        => '$1 $2-нди',
'nowatchlist'          => 'Мезеге аш тонь мельгеваномасот.',
'watchlistanontext'    => '$1 тонь ванома мельгеваномаста лопат ваноманкса эли петнеманкса.',
'watchnologin'         => 'Апак сувак',
'watchnologintext'     => 'Тондейть эряви [[Special:UserLogin|сувамс]] тонь мельгеваномацень петнеманкса.',
'addedwatchtext'       => "Лопась \"[[:\$1]]\" сувафнезь тонь [[Special:Watchlist|Мельгеваномасот]].
Сяда тов тя лопать ди мархтонза сюлмаф Корхнема лопать полафнематне кармайхть тякшстафтовома   тя лувомас, сяда тёждяень няевомаснонды синь тага кармайхть сёрмадовома  [[Special:RecentChanges|мекольце полафнематнень лувомас]] '''эчке тяшксса'''.

Улендяряй тонь мяльце тя лопать нардамс тонь мельгеваномастот, люпштак \"аф ваномс мельге\" лопань вярдень виде ужеса.",
'removedwatchtext'     => 'Лопась "[[:$1]]" нардафоль [[Special:Watchlist|тонь мельгеванома лувомастот]].',
'watch'                => 'Ватт мельге',
'watchthispage'        => 'Ваномс тя лопать мельге',
'unwatch'              => 'Аф ваномс тянь мельге',
'unwatchthispage'      => 'Лоткамс мельге ваномать',
'notanarticle'         => 'Аф сёрмапотмонь лопа',
'notvisiblerev'        => 'Верзиесь нардафоль',
'watchnochange'        => 'Мезеге изь полафтов тонь мельгеванома лувомастот тя пингеёткса.',
'watchlist-details'    => '{{PLURAL:$1|$1 лопа|$1 лопат}} мельгеваномацень ала корхнема лопат аф лувомок.',
'wlheader-enotif'      => '* Электрононь сёрма вельде пачфнема нолдаф тевс.',
'wlheader-showupdated' => "* Лопат конань полафтозь тонь мекольце сувсемадот меле няфтевсть '''эчке тяшкса'''.",
'watchmethod-recent'   => 'мельге ванома ала лопатнень коряс мекольце петнематнень ванондома',
'watchmethod-list'     => 'мекольце петнематнень коряс мельге ванома ала лопат ванондома',
'watchlistcontains'    => 'Тонь мельгеваномасот $1 {{PLURAL:$1|лопа|лопат}}.',
'iteminvalidname'      => "Прябала '$1'-ть мархть, лемоц аф кондясти...",
'wlnote'               => "Ала {{PLURAL:$1|мекольце полафнема|'''$1''' мекольце полафнемат}} ётай {{PLURAL:$2| ойста (часста)|'''$2''' ойста (часста)}}.",
'wlshowlast'           => 'Няфтемс мекольце $1 ойхть (част) $2 шит $3',
'watchlist-options'    => 'Мельгеваномать латцемасна',

# Displayed when you click the "watch" button and it is in the process of watching
'watching'   => 'Ванома...',
'unwatching' => 'Аф ванома...',

'enotif_mailer'                => '{{SITENAME}} Пачфнематнень Кучи',
'enotif_reset'                 => 'Путомс тяшкс сембе суваф лопатнень лангс',
'enotif_newpagetext'           => 'Тя од лопа.',
'enotif_impersonal_salutation' => '{{SITENAME}} тиись',
'changed'                      => 'полафтсь',
'created'                      => 'тиф',
'enotif_subject'               => '{{SITENAME}} page $PAGETITLE has been $CHANGEDORCREATED by $PAGEEDITOR',
'enotif_lastvisited'           => 'Ванк $1 тонь мекольце самдот меле сембе поланематнень няфтеманкса.',
'enotif_lastdiff'              => 'Ванк $1 тя полафнемать няфтеманкса.',
'enotif_anon_editor'           => 'лемфтома тиись $1',
'enotif_body'                  => 'Кельгома $WATCHINGUSERNAME,


{{SITENAME}} лопа $PAGETITLE $CHANGEDORCREATED $PAGEEDITDATE тиись $PAGEEDITOR. Мекольце верзие ванк $REFINFO

$NEWPAGE

Петнить лихтемац: $PAGESUMMARY $PAGEMINOREDIT

Сотомс петнить мархта:
электрононь адрес вельде: $PAGEEDITOR_EMAIL
вики вельде: $PAGEEDITOR_WIKI

Аф кармайхть кучевома пачфтемат иля сай полафнематнень колга тонь самдот тя лопас инголе. Тондейть тага ули кода омбоцекс путомс пачфтема содафксне тонь мельгеваномазот сембе тонь мельгеванома ала лопатненди.

             Тонь ялгань {{SITENAME}} пачфтема системце

--
Тонь мельгеваномацень латцемасна полафтоманкса сашентт
{{canonicalurl:{{#special:EditWatchlist}}}}

Лопать тонь мельгеваномастот нардаманди сашентт
$UNWATCHURL

Азома мекпяли ди иля лезкс:
{{canonicalurl:{{MediaWiki:Helppage}}}}',

# Delete
'deletepage'             => 'Нардамс лопать',
'confirm'                => 'Кемокстамс',
'excontent'              => "потмосоль: '$1'",
'excontentauthor'        => "потмоц ульсь: '$1' (аньцек фкя путысь ульсь'[[Special:Contributions/$2|$2]]')",
'exbeforeblank'          => "шамдомада инголе потмоц ульсь: '$1'",
'exblank'                => 'лопась шаволь',
'delete-confirm'         => 'Нардамс "$1"',
'delete-legend'          => 'Нардамс',
'historywarning'         => "'''Инголе мярьгома''' Тон ёрат нардамс лопа, конань $1 {{PLURAL:$1|верзие|верзиет}}:",
'confirmdeletetext'      => 'Тон сърхкать нардамс лопать сембе сонь историянц мархта.
Эняльттяма, кемокстак тон афкукс ёрат тянь тиемс, эди тон шарьхкодьсак мезе лиси тяда меле, ди тон сембе тянь тисак [[{{MediaWiki:Policy-url}}|политик]] коряс.',
'actioncomplete'         => 'Тевонь тиемась анок',
'actionfailed'           => 'Тиемась изь лисе',
'deletedtext'            => 'Лопась "$1" нардафоль. Ванк $2 мекольце нардаматнень няфтеманкса.',
'dellogpage'             => 'Нардамань лувома',
'dellogpagetext'         => 'Ватт сяда мекольце нардаматнень лувомась ала.',
'deletionlog'            => 'нардамань лувома',
'reverted'               => 'Мърдаф сядынголень верзиес',
'deletecomment'          => 'Туфтал:',
'deleteotherreason'      => 'Лия/поладомань туфтал:',
'deletereasonotherlist'  => 'Иля туфтал',
'deletereason-dropdown'  => '*Марстонь нардама туфталхт
** Тиить вешфкссь
** Копияма видексть сърафтома
** Колендемась',
'delete-edit-reasonlist' => 'Петнемс нардамань туфталхне',
'delete-toobig'          => 'Тя лопать кувака петнемань историясь, $1 {{PLURAL:$1|верзиеда|верзиеда}} лама. Тяфтама лопатнень нардамась кардаф {{SITENAME}}-нь уф учсеви колавомада араламать туфталонкса.',
'delete-warning-toobig'  => 'Тя лопать кувака петнемань историясь, $1 {{PLURAL:$1|верзиеда|верзиеда}} лама. Сонь нардамаста, улема, лиси {{SITENAME}}-нь датабаза якаманц колавомась; тик тянь инголе арьсезь.',

# Rollback
'rollback'         => 'Потафтомс петнематне',
'rollback_short'   => 'Потафтома',
'rollbacklink'     => 'потафтомс',
'rollbackfailed'   => 'Потафтомась изь лисе',
'cantrollback'     => 'Аш кода петнемать потафтомс; мекольце путысь ульсь тя лопать анцек фкя тиикс.',
'alreadyrolled'    => 'Аш кода меки кевордамс [[:$1]]нь мекольце петнемать, конань тись [[User:$2|$2]] ([[User talk:$2|Корхнема]]{{int:pipe-separator}}[[Special:Contributions/$2|{{int:contribslink}}]]);
иля тиись сонь петезе эли кевордазе ни.

Мекольце петнема  тизе [[User:$3|$3]] ([[User talk:$3|Корхнема]]{{int:pipe-separator}}[[Special:Contributions/$3|{{int:contribslink}}]]).',
'editcomment'      => "Петнема лихтема ульсь: \"''\$1''\".",
'revertpage'       => 'Петнематнень мърдафтозь [[Special:Contributions/$2|$2]] ([[User talk:$2|Корхнема]]) сядынгольдень верзиес мърдафтозе [[User:$1|$1]]',
'rollback-success' => 'Петнематнень мърдафтозе $1; сядынгольдень верзиес мърдафтозе $2.',

# Edit tokens
'sessionfailure' => 'Улема, лиссь прябала тонь сувама пингста; програмонь якамась лотказевсь сувамать върьгятемада аралама туфталонкса. Эняльттяма, люпштак "меки" ди одонзафтт лопать, конаста тон сать, меле тик сембе одукс.',

# Protect
'protectlogpage'              => 'Аралама лувома',
'protectlogtext'              => 'Ала лопань пякстама-панжема лувомась. Ванк [[Special:ProtectedPages|аралаф лопатнень лувомась]] тя пингонь системонь лопать араламанкса.',
'protectedarticle'            => 'аралаф "[[$1]]"',
'modifiedarticleprotection'   => '"[[$1]]"-нь араламань виенц полафтсь',
'unprotectedarticle'          => '"[[$1]]" аф аралаф',
'movedarticleprotection'      => 'шашфтозень аралама латцематне "[[$2]]"ста "[[$1]]"с',
'protect-title'               => '"$1"-нь араламань виец арафнема',
'prot_1movedto2'              => '[[$1]] шашфтфоль [[$2]]с',
'protect-legend'              => 'Араламать кемокстак',
'protectcomment'              => 'Туфтал:',
'protectexpiry'               => 'Шумордави:',
'protect_expiry_invalid'      => 'Шумордама пинге аф кондясти.',
'protect_expiry_old'          => 'Шумордама пингсь ётась.',
'protect-text'                => "Тондейть ули кода тяса ваномс эди полафтомс аралама виенц '''$1''' лопанди.",
'protect-locked-blocked'      => "Аш кода полафтомс араламать виенц сёлгома пингста. Лопать тяниень латцеманза тясот '''$1''':",
'protect-locked-dblock'       => "Аш кода полафтомс араламать виенц  датабазонь пякстамать сюнеда.
Лопать тяниень латцеманза тясот '''$1''':",
'protect-locked-access'       => "Тонь сёрматфтомасот аф мярьгови лопать аралама виенц полафтома.
Тяса ащихть тя пингонь арафнематне '''$1''' лопанди:",
'protect-cascadeon'           => 'Тя лопась тя пингста аралаф сяс мес сонь сувафнезь {{PLURAL:$1|каскад аралама ала лопань лувомас|какскад аралама лопатнень кярьксс}}. Тондейть ули кода тя лопать аралама виенц полафтомс, аньцек какскад араламась сякокс иляды.',
'protect-default'             => 'Мярьгови сембе тиихненди',
'protect-fallback'            => 'Эряви "$1"-ть мярьговомац',
'protect-level-autoconfirmed' => 'Сёлгомс од эди аф сёрматф тиихнень',
'protect-level-sysop'         => 'Аньцек системонь вятиксне',
'protect-summary-cascade'     => 'каскад лаца',
'protect-expiring'            => 'шумордави $1 (UTC)',
'protect-expiry-indefinite'   => 'аф кеме',
'protect-cascade'             => 'Араламс лопатнень, конатнень сувафтозь тя лувомас (каскад араламать алу)',
'protect-cantedit'            => 'Тондейть аш кода лопать аралама виензон полафтомс, сяс мес тонь
аш петнемань мярьговомась.',
'protect-othertime'           => 'Иля пинге:',
'protect-othertime-op'        => 'иля пинге',
'protect-existing-expiry'     => 'Тяниень сирелгодома пинге: $3, $2',
'protect-otherreason'         => 'Иля/поладомань туфтал:',
'protect-otherreason-op'      => 'иля/поладомань туфтал',
'protect-dropdown'            => '*Марстонь аралама туфталхне
** Вельф лама колендемась
** Вельф лама луднась (spam)
** Потафнема петнематнень мархта тюремась
** Вельф лама лисемат-сувамот лопаса',
'protect-edit-reasonlist'     => 'Петнемс аралама туфталхне',
'protect-expiry-options'      => '1 ой (час):1 hour,1 ши:1 day,1 тарга (недля):1 week,2 таргат (недлят):2 weeks,1 ков:1 month,3 кофт:3 months,6 кофт:6 months,1 киза:1 year,пефтома:infinite',
'restriction-type'            => 'Мярьговома:',
'restriction-level'           => 'Пякстама вийсь:',
'minimum-size'                => 'Минимум кувалмоц',
'maximum-size'                => 'Максимум кувалмоц:',
'pagesize'                    => '(байтт)',

# Restrictions (nouns)
'restriction-edit'   => 'Петнемс',
'restriction-move'   => 'Шашфтомс иля вастс',
'restriction-create' => 'Тиемс',
'restriction-upload' => 'Тонгомс',

# Restriction levels
'restriction-level-sysop'         => 'вииста аралаф',
'restriction-level-autoconfirmed' => 'пялес аралаф',
'restriction-level-all'           => 'кодама повсь виец',

# Undelete
'undelete'                     => 'Няфтемс нардаф лопатне',
'undeletepage'                 => 'Няфтемс эди мърдафтомс нардаф лопатне',
'undeletepagetitle'            => "'''Тоса кирдевихть [[:$1|$1]]-нь нардаф верзиенза'''.",
'viewdeletedpage'              => 'Няфтетемс нардаф лопатне',
'undeletepagetext'             => 'Тя {{PLURAL:$1|лопать нардазь интай сон|$1 лопатнень нардазь интай синь}} тянемс аркивса. Ули кода мърдафтомс лопат аркивста.
Аркивсь аруяфтови пингста пингс.',
'undelete-fieldset-title'      => 'Мърдафтомс верзиетне',
'undeleteextrahelp'            => "Сембонь лопать историянц мърдафтоманди эряви кадомс сембе нилюжет тяштьксфтома ди люпштамс '''''Мърдафтомс'''''. Пакшень-пакшень мърдафтоманди путт тяшкст сембе нилюжева сотфт эряви верзиетнень мархта ди люпштак '''''Мърдафтомс'''''.'''''Валхтомс''''' пунять люпштамада меле мяльполатксонь пакся ди сембе нилюжетне шамдомихть.",
'undeleterevisions'            => '$1 {{PLURAL:$1|верзие аркивса|верзиет аркивса}}',
'undeletehistory'              => 'Лопать мърдафтомста тон мърдафнесак историяс сембе сонь верзиенза.
Эвондярясь иля лопа тяка лемса сонь нардамада меле, мърдафтф верзиетне повихть сядынголень историяс.',
'undeleterevdel'               => 'Мърдафтома аф тиеви мъзярда сон вяти вяре лопать эли файлонь верзиять пакшень-пакшень нардаманди. Тя тевса тондейть аф эряви улхкомба нардаф верзиетнень ваномс эли панжемс.',
'undeletehistorynoadmin'       => 'Тя лопась нардафоль. Ала тяштьф нардамань туфтал лихтемась эди лувомась, коса сёрматфт сембе кит тя лопать петнезь сонь нардамада инголе. Нардаф верзиеть текстонза мярьгови ваномс аньцек оцюнятненди.',
'undelete-revision'            => 'Нардаф $1нь верзиец ($4, $5) $3 нардазе:',
'undeleterevision-missing'     => 'Стама верзиеть аш эли сон аф кондясти. Улема, тон ётать аф виде сюлмафксова, илякс тя верзиесь мърдафтфоль эли аркивста нардафоль.',
'undelete-nodiff'              => 'Сядынгольдень верзиет исть мув.',
'undeletebtn'                  => 'Мърдафтомс',
'undeletelink'                 => 'ваномс/мърдафтомс',
'undeleteviewlink'             => 'ваномс',
'undeletereset'                => 'Валхтомс',
'undeleteinvert'               => 'Валхтомс кочкама',
'undeletecomment'              => 'Мяльполаткс:',
'undeletedrevisions'           => '{{PLURAL:$1|1 верзие|$1 верзиет}} мърдафтфт',
'undeletedrevisions-files'     => '{{PLURAL:$1|1 верзие|$1 верзиет}} эди {{PLURAL:$2|1 файл|$2 файлхт}} мърдафтфт',
'undeletedfiles'               => '{{PLURAL:$1|1 файл|$1 файлхт}} мърдафтфт',
'cannotundelete'               => 'Мърдафтома изь лисев; иля тиись, улема, ульсь васенцекс кие сонь мърдафтозе.',
'undeletedpage'                => "'''$1 мърдафтфоль'''

Ванк [[Special:Log/delete|нардамань лувомась]] мекольце нардаматнень эди мърдафтоматнень няфтеманкса.",
'undelete-header'              => 'Ванк [[Special:Log/delete|нардамань лувомась]] улхкомба нардаф лопатнень няфтеманкса.',
'undelete-search-box'          => 'Ваномс нардаф лопатне',
'undelete-search-prefix'       => 'Няфтемс лопат тяста ушедомс:',
'undelete-search-submit'       => 'Вешендемс',
'undelete-no-results'          => 'Стапт лопат исть мув нардамань аркивста.',
'undelete-filename-mismatch'   => 'Аш кода мърдафтомс $1 файл верзиеть: файллепт аф фкат',
'undelete-bad-store-key'       => 'Аш кода мърдафтомс $1 файл верзиеть: файлсь юмась нардамада инголе.',
'undelete-cleanup-error'       => 'Лиссь эльбятькс аркив файл "$1" нардамста.',
'undelete-missing-filearchive' => 'Аш кода мърдафтомс файлть аркив  ID $1 сяс мес сон аф датабазаса. Сонь, улема, нардазь ни.',
'undelete-error-short'         => 'Эльбятькс нардама файл: $1',
'undelete-error-long'          => 'Листь эльбятькст мърдафтома файл:

$1',
'undelete-show-file-confirm'   => 'Тонь афкукс мяльце ваномс файлть нардаф ревизиенц "<nowiki>$1</nowiki>" $2ста $3са?',
'undelete-show-file-submit'    => 'Ина',

# Namespace form on various pages
'namespace'      => 'Лемботма:',
'invert'         => 'Валхтомс кочкама',
'blanknamespace' => '(Пря)',

# Contributions
'contributions'       => 'Тиить путксонза',
'contributions-title' => 'Тиить путксонза $1нди',
'mycontris'           => 'Монь путксне',
'contribsub2'         => '$1 ($2)-нди',
'nocontribs'          => 'Тя вешфксть коряс кодамога полафтомат исть мув.',
'uctop'               => '(прянь)',
'month'               => 'Ковста (ди сядынголе):',
'year'                => 'Кизоста (ди сядынголе):',

'sp-contributions-newbies'       => 'Няфтемс аньцек од сёрматфтоматнень путкссна',
'sp-contributions-newbies-sub'   => 'Од сёрматфтомаста',
'sp-contributions-newbies-title' => 'Тиить путксонза од сёрматфтоматненди',
'sp-contributions-blocklog'      => 'Сёлгомань лувомась',
'sp-contributions-deleted'       => 'нардаф тиинь путксонза',
'sp-contributions-uploads'       => 'Тонгодемат',
'sp-contributions-logs'          => 'Сувама лувомат',
'sp-contributions-talk'          => 'корхтама',
'sp-contributions-userrights'    => 'тиинь видекснень вятема',
'sp-contributions-search'        => 'Вешендемс путкст',
'sp-contributions-username'      => 'IP адрес эли тиить лемоц:',
'sp-contributions-toponly'       => 'Няфтемс аньцек мекольце верзиетнень ёткса видептематне',
'sp-contributions-submit'        => 'Вешендема',

# What links here
'whatlinkshere'            => 'Сюлмафкст тяза',
'whatlinkshere-title'      => 'Лопат конат сюлмафт "$1" мархта',
'whatlinkshere-page'       => 'Лопа:',
'linkshere'                => "Ся лопатне сюлмафт '''[[:$1]]''' мархта:",
'nolinkshere'              => "Лопат, конат сюлмафт '''[[:$1]]''' мархта ашет.",
'nolinkshere-ns'           => "Аш лопат сюлмафт '''[[:$1]]''' мархта  кочкаф лемботмоста.",
'isredirect'               => 'умборондафтф лопа',
'istemplate'               => 'сувафтома',
'isimage'                  => '↓архтофксонь сюлмафкссь',
'whatlinkshere-prev'       => '{{PLURAL:$1|сядынголень|сядынголень $1}}',
'whatlinkshere-next'       => '{{PLURAL:$1|сай|сай $1}}',
'whatlinkshere-links'      => '← сюлмафкст',
'whatlinkshere-hideredirs' => '$1 иля вастс йотафтомат',
'whatlinkshere-hidetrans'  => '$1 трансклюзиет',
'whatlinkshere-hidelinks'  => '$1 сюлмафкст',
'whatlinkshere-hideimages' => '$1 архтофксонь сюлмафкст',
'whatlinkshere-filters'    => 'Фильтрат',

# Block/unblock
'blockip'                         => 'Пякстамс тиить',
'blockip-legend'                  => 'Кардамс тиить',
'blockiptext'                     => 'Эряви нолдамс тевс форм ала башка IP адресста эли тиить лем вельде  сёрмадомань сувамать сёлгоманкса.
Тя эряви тиемс аньцек колендемада аралама туфталонкса ди [[{{MediaWiki:Policy-url}}|политик]]-ть коряс.
Путт туфталть алу (кепотьксонди, лятфнек лопатне конатнень эса колендесть).',
'ipadressorusername'              => 'IP адрес эли тиить лемоц:',
'ipbexpiry'                       => 'Сирелгоды:',
'ipbreason'                       => 'Туфтал:',
'ipbreasonotherlist'              => 'Иля туфтал',
'ipbreason-dropdown'              => '* Кърдань сёлгома туфталхт
** Аф виде информациень путнема
** Лопаста сёрматфть нардама
** Аф виде ушеширень интернет сюлмафкснень макссема
** Ёньфтома/смузьфтома информациень лопас путнема
** Кальдяв прянь вятема/сялгодома
** Лама сёрматфтоматнень покордама
** Аф пара тиить лемоц',
'ipbcreateaccount'                => 'Кардамс сёрматфтомась тиема',
'ipbemailban'                     => 'Кардамс тиинди кучемс электрононь сёрмат',
'ipbenableautoblock'              => 'Эсезонза сёлгомс тя тиить мекольце IP адресть эди иля IP адрест конань эста сон тяряфни петнемат тиемс',
'ipbsubmit'                       => 'Сёлгомс тя тиить',
'ipbother'                        => 'Иля пинге:',
'ipboptions'                      => '2 ойхть (част):2 hours,1 ши:1 day,3 шит:3 days,1 тарга (недля):1 week,2 таргат (недлят):2 weeks,1 ков:1 month,3 кофт:3 months,6 кофт:6 months,1 киза:1 year,пефтома:infinite',
'ipbotheroption'                  => 'иля',
'ipbotherreason'                  => 'Иля/поладомань туфтал:',
'ipbhidename'                     => 'Кяшемс тиить лемоц петнемада ди лувомада',
'ipbwatchuser'                    => 'Ваномс тя тиить лопанц ди сонь корхнема лопанц мельге.',
'ipb-change-block'                => 'Сёлгомс одукс тя тиить ня латцематнень коряс',
'badipaddress'                    => 'Аф кондясти IP адрес',
'blockipsuccesssub'               => 'Сёлгома ётась лац',
'blockipsuccesstext'              => '[[Special:Contributions/$1|$1]] сёлгозь.<br />
Ванк [[Special:BlockList|IP сёлгома лувомать]] сёлгомат ваноманкса.',
'ipb-edit-dropdown'               => 'Полафтомс сёлгома туфталхт',
'ipb-unblock-addr'                => 'Валхтомс $1-нь сёлгома',
'ipb-unblock'                     => 'Тиинь эли IP адресонь сёлгома валхтомс',
'ipb-blocklist'                   => 'Ваномс тяниень сёлгомат',
'ipb-blocklist-contribs'          => 'Путксне $1 лопанди',
'unblockip'                       => 'Валхтомс сёлгома тииста',
'unblockiptext'                   => 'Нолдак тевс форм ала инголе сёлкф тиить суваманц сёлкф IP адрес эли тиинь лемоц вельде мърдафтоманкса.',
'ipusubmit'                       => 'Валхтомс тя сёлгомась',
'unblocked'                       => '[[User:$1|$1]]-ть сёлгомац валхтф',
'unblocked-id'                    => '$1-нь сёлгомац валхтф',
'ipblocklist'                     => 'Сёлкф тиихне',
'ipblocklist-legend'              => 'Мумс сёлкф тиить',
'ipblocklist-submit'              => 'Вешендема',
'infiniteblock'                   => 'пефтома',
'expiringblock'                   => 'шумордави $1 $2 ойста',
'anononlyblock'                   => 'аньцек лемфтома',
'noautoblockblock'                => 'эслек сёлгома лоткаф',
'createaccountblock'              => 'сёрматфтомась тиема сёлкф',
'emailblock'                      => 'электрононь адрес сёлкф',
'blocklist-nousertalk'            => 'аш кода петнемс эсь корхнема лопанц',
'ipblocklist-empty'               => 'Сёлгома лувомась шава.',
'ipblocklist-no-results'          => 'Вешф IP адрес эли тиить лемоц аф сёлкф.',
'blocklink'                       => 'сёлгома',
'unblocklink'                     => 'панжемс',
'change-blocklink'                => 'полафтомс сёлгома',
'contribslink'                    => 'путкс.',
'autoblocker'                     => 'Эслек сёлкф сяс мес тонь IP адресцень нолдась тевс "[[User:$1|$1]]". $1-нь сёлгомац туфтал: "$2"',
'blocklogpage'                    => 'Сёлгомань лувома',
'blocklogentry'                   => '[[$1]] сёлкф $2 $3 пингс',
'reblock-logentry'                => 'полафтсь сёлгома латцематне [[$1]]нди сёлгомать сирелгодома пинге ули $2 $3',
'blocklogtext'                    => 'Тя лувомас сувсихть тиихнень сембе пякстамань ди панжемань тефне.
Эсь сёлгови IP адресне тязк аф сувсихть.
Ванк [[Special:BlockList|IP пякстаматнень лувомать]] тяниень якамань кардафкснень ди пякстаматнень мархта.',
'unblocklogentry'                 => 'кардафкста нолдазь $1',
'block-log-flags-anononly'        => 'аньцек лемфтома тиихне',
'block-log-flags-nocreate'        => 'од сёрматфтомась аф тиеви',
'block-log-flags-noautoblock'     => 'эсь тиеви пякстама аф тиеви',
'block-log-flags-noemail'         => 'электрононь адрессь пякстазь',
'block-log-flags-nousertalk'      => 'аш кода петнемс эсь корхнема лопанц',
'block-log-flags-angry-autoblock' => 'келептьф авто-пякстафтомась нолдафоль',
'range_block_disabled'            => 'Тяни оцю пякстафксне аф тиевихть системонь вятикснень эса.',
'ipb_expiry_invalid'              => 'Аф кондясти сирелгодома пинге.',
'ipb_expiry_temp'                 => 'Кяшф тиинь лемть сёлгоматне мъзярдонга аф полафтовихть.',
'ipb_already_blocked'             => '"$1" сёлкфоль ни',
'ipb-needreblock'                 => '$1 сёлкф ни. Мяльце полафтомс латцематнень?',
'ipb_cant_unblock'                => 'Эльбятькс: ID $1-нь кардафксоц аф муви. Улема, тя кардафкссь валхтфоль ни.',
'ipb_blocked_as_range'            => 'Эльбятькс: IP $1 аф кардаф видеста ди соннеда аш кода кардафкссь валхтомс.
Сон, интай улема, кардафоль кода  $2-нь потмонц пакшец, конань эзда ули кода кардафксонь валхтомс.',
'ip_range_invalid'                => 'Аф кондясти IP потмоц.',
'blockme'                         => 'Кардамань монь',
'proxyblocker'                    => 'Ётка якаень сёлгома',
'proxyblocker-disabled'           => 'Тя функциесь аф тиеви.',
'proxyblockreason'                => 'Тонь IP адрес пякстафоль сонь панжада прокси-серверонь эзда.
Тондейть эряви сотомс тонь интернет ладяйть эли текникань нежедемать мархта ди пачфтемс тя прябалать колга.',
'proxyblocksuccess'               => 'Тиф.',
'sorbsreason'                     => 'Тонь IP адресце лувови панжада ётка якай сервероннекс DNSBL-са, конась нолдаф тевс {{SITENAME}}са.',
'sorbs_create_account_reason'     => 'Тонь IP адресце лувови панжада ётка якань сервероннекс DNSBL-са конась нолнезь тевс {{SITENAME}}са.
Тондейть аш кода сёрматфтомать тиемс',
'cant-block-while-blocked'        => 'Тондейть аш кода сёлгомс иля тиихнень мъзярс тон тонць сёлкф.',

# Developer tools
'lockdb'              => 'Пякстамс датабазать',
'unlockdb'            => 'Панжемс датабазать',
'lockdbtext'          => 'Датабазонь пякстамась кардасы иля тиихнень лопатнень петнема, синь арафнемаснон полафнема, синь мельгеваномаснон петнема, ди ля тефнень датабазонь мархта тиема.
Кемокстак тон афкукс тянь мялецоль тиемс эди тон датабазать панжесак тонь латцема тевдот меле.',
'unlockdbtext'        => 'Датабазаста пякстамать валхтомада меле сембе тиихненди ули кода петнемс лопат, полафтомс синь арафнемаснон, петнемс синь мельгеваномаснон ди иля тефнень датабазонь мархта тиема.
Кемокстак тон афкукс тянь мялецоль тиемс.',
'lockconfirm'         => 'Ина, монь афкукс мялезе пякстамс датабазать.',
'unlockconfirm'       => 'Ина, монь афкукс мялезе панжемс датабазать.',
'lockbtn'             => 'Пякстамс датабазать',
'unlockbtn'           => 'Панжемс датабазать',
'locknoconfirm'       => 'Тон изеть варжа кемокстамань парготь.',
'lockdbsuccesssub'    => 'Датабазать пякстамась мольсь лац',
'unlockdbsuccesssub'  => 'Датабазонь пякстамать панжевсь',
'lockdbsuccesstext'   => 'Датабазать пякстазь.<br />
Киртть мяльсот тейть эряви [[Special:UnlockDB|пякстамать панжемс]] тонь латцематнень шумордамда меле.',
'unlockdbsuccesstext' => 'Датабазать пякстамась панжевсь.',
'lockfilenotwritable' => 'Датабазонь пякстама файл аф сёрмадови.
Датабазонь панжема-пякстама инголе эряви тянь тиемс web-серверса сёрмадовикс.',
'databasenotlocked'   => 'Датабазась аф пякстаф.',

# Move page
'move-page'                    => 'Шашфтомс $1 од вастс',
'move-page-legend'             => 'Шашафтомс лопать иля вастс',
'movepagetext'                 => "Форм ала тевс нолдамста тон лопать одс лемдесак, сембе сонь историяц ули шашфтф мархтонза од лем лопас.
Сире лемоц арай од лем лопас умборондафтфксокс.
Лемть мархта умборондафтфксне улихть кода эслек одонзамс. Улефтяряй мяльце синь эслек одонзальхть, эряви нама варжамс[[Special:DoubleRedirects|кафонзаф]] эли [[Special:BrokenRedirects|синтьф умборондафтфксне]].
Тондейть сави лацкаста варжамс сюлмафксне илядсть арафнефокс виде ёну.

Шарфтк мяльце улендярясь ни тя од лемса иля сёрматфсь, лопась '''аф''' шашфтови мъзярс од вастсь арай шавакс эли умборондафтфксокс эди тоса аш ётай петнематнень историяц. Сякокс тондейть ули кода шашфтомс лопать меки коса сон инголе ульсь, эди тондейть аш кода тага весть тиемс лопать кона ули ни.

'''ИНГОЛЕ МЯРЬГОМА!'''
Одс лемдемась канни содаф лопанди апак учт эди вакска аф ётави полафтомась;
эняльттяма арьсек тевда инголе мес тон шарьхкодят мезе лиси тонь тиемада меле.",
'movepagetalktext'             => "Сотф корхнема лопась ули эслек шашфтф мархтонза '''кафта тевда башка:'''
*Аф шава корхнема лопась ульсь ни иля лемса, эли
*Тон изеть пута тяшкскя паксяс ала.

Ся тефнень сюнеда тондейть сави кядьвельде лопать шашфтомс эли шоворемс кода эряви.",
'movearticle'                  => 'Шашфтомс лопать иля вастс:',
'movenologin'                  => 'Апак сувак',
'movenologintext'              => 'Эряви улемс сёрматфтф тиикс ди васенда [[Special:UserLogin|сувамс]] од вастс лопатнень шашфтоманди.',
'movenotallowed'               => 'Тон аф мярьговат шашфтомс лопат од вастс.',
'movenotallowedfile'           => 'Тон аф мярьговат шашфтомс файлхт.',
'cant-move-user-page'          => 'Тон аф мярговат шашфтомс тиинь лопаснон (синь сублопафтомост).',
'cant-move-to-user-page'       => 'Тон аф мярьговат шашфтомс лопат тиинь лопас (тиинь сублопаданза башка).',
'newtitle'                     => 'Од лемс:',
'move-watch'                   => 'Ваномс тя лопать мельге',
'movepagebtn'                  => 'Шашфтомс лопать иля вастс',
'pagemovedsub'                 => 'Шашфтомась ётась лац',
'movepage-moved'               => '\'\'\'"$1"сь шашфтфоль "$2"с\'\'\'',
'movepage-moved-redirect'      => 'Умборондафтфкс тифоль.',
'movepage-moved-noredirect'    => 'Умборондафтфксонь тиемась лоткафоль.',
'articleexists'                => 'Тя лем мархта лопась ульсь ни эли лемсь, кона тон кочкать аф кондясти.
Арьсек иля лем.',
'cantmove-titleprotected'      => 'Аш кода шашфтомс лопать тя вастс сяс мес тя од конякссь тиемада аралаф',
'talkexists'                   => "'''Тя лопать шашфтомац анок, аньцек сонь корхнема лопац аф шашфтови, сяс мес од лемса фкя лопа ульсь ни. Эняльттяма, шоворьфтть синь кядьвельде.'''",
'movedto'                      => 'шашфтфоль',
'movetalk'                     => 'Шашфтт сотф мархтонза корхнема лопать',
'move-subpages'                => 'Шашфтт сембе сублопатне ($1с сявомок)',
'move-talk-subpages'           => 'Шашфтт сембе корхнема лопатнень сублопасна ($1с сявомок)',
'movepage-page-exists'         => 'Лопась $1 ульсь ни и сон эслек одукс аф сёрмадови.',
'movepage-page-moved'          => 'Лопась $1 шашфтфоль $2-с.',
'movepage-page-unmoved'        => 'Лопать $1 аш кода шашфтомс $2-с.',
'movepage-max-pages'           => 'Сембода лама $1 {{PLURAL:$1|лопа|лопат}} шашфтфольхть иля вастс и фкявок сяда тов аф кармай эслек шашфтовома.',
'movelogpage'                  => 'Иля вастс шашфтомань лувомась',
'movelogpagetext'              => 'Ала од вастс шашфтф лопатнень лувомась.',
'movereason'                   => 'Туфтал:',
'revertmove'                   => 'веляфтомс',
'delete_and_move'              => 'Нардамс эди од вастс шашфтомс',
'delete_and_move_text'         => '==Нардамась вешф==
Эрявкстовсь лопа "[[:$1]]" ульсь ни.
Мяльце нардамонза од вастс шашфтомань шумордаманкса?',
'delete_and_move_confirm'      => 'Ина, нардак лопать',
'delete_and_move_reason'       => 'Нардаф од вастс шашфтомань шумордамонкса',
'selfmove'                     => 'Лисема вастонь ди од вастонь коняксне фкат;
аш кода шашфтомс лопать тяка вастс кона сон ащи ни.',
'immobile-source-namespace'    => 'Аш кода шашфтомс лопатнень "$1" лемботмоса',
'immobile-target-namespace'    => 'Аш кода шашфтомс лопатнень "$1" лемботмос',
'immobile-target-namespace-iw' => 'Интерфикинь сюлмафкссь аф кондясти лопать шашфтоманди.',
'immobile-source-page'         => 'Тя лопась аф шашфтови.',
'immobile-target-page'         => 'Аш кода шашфтомс ся коняксс.',
'imagenocrossnamespace'        => 'Аш кода шашфтомс архтофкссь аф архтофксонь лемботмос',
'imagetypemismatch'            => 'Файлть од келептемац явови сонь сортодонза',
'imageinvalidfilename'         => 'Вешеви файллемсь аф кондясти',
'fix-double-redirects'         => 'Одонзамс сембе умборондафтфксне конатне сюлмафт ушедомань лемть мархта',
'move-leave-redirect'          => 'Кадомс умборондафтфксне фтала',

# Export
'export'            => 'Вимс лопатнень файлс',
'exporttext'        => 'Тондейть ули кода вимс текстть ди кодамога лопань эли лопатнень кярьксснон петнема историять XML форматс.
Тянь ули кода ускомс иля Викис MediaWiki-ть тевс нолдамда [[Special:Import|ускома лопать]] вельде.

Лопатнень вимонди путт коняксснон текстонь кудняс ала, фкя конякс фкя киксс, ди кочкак кда мяльце тяниень верзиеть, стане ина сембе сире верзиет лопань историять киксонзон мархта эли аньцек тяниень верзиеть мекольце петнемань информациенц мархта.

Мекольце вариантса тондейть ули кода кундамс сюлмафксть, кепотьксонди [[{{#Special:Export}}/{{MediaWiki:Mainpage}}]] "[[{{MediaWiki:Mainpage}}]]" лопанди.',
'exportcuronly'     => 'Сувафтомс аньцек тяниень верзиеть, аф сембе историянзон',
'exportnohistory'   => "----
'''Шарфтт мяльце:''' Пяшксе историянь лопатнень вимась тя формть вельде кардаф системонь якафтомань туфталонц инкса.",
'export-submit'     => 'Вимс',
'export-addcattext' => 'Поладомс лопат категорияста:',
'export-addcat'     => 'Поладомс',
'export-download'   => 'Ванфтомс кода файл',
'export-templates'  => 'Сувафтомс шаблотт',

# Namespace 8 related
'allmessages'               => 'Системонь пачфтематне',
'allmessagesname'           => 'Лем',
'allmessagesdefault'        => 'Апак полафтт текст',
'allmessagescurrent'        => 'Тяниень текст',
'allmessagestext'           => 'Тя MediaWiki-са васьфневи системонь пачфтематнень лувомась.
Эняльттяма, сувак [//www.mediawiki.org/wiki/Localisation MediaWiki Локализациес] ди [//translatewiki.net translatewiki.net-с] кда тонь мяльце тиемс эсь путксце марстонь MediaWiki локализациес.',
'allmessagesnotsupportedDB' => "Тя лопас аш кода кунцемс сяс мес '''\$wgUseDatabaseMessages'''лоткафоль.",
'allmessages-language'      => 'Кяль:',
'allmessages-filter-submit' => 'Ётамс',

# Thumbnails
'thumbnail-more'           => 'Оцюлгофтомс',
'filemissing'              => 'Файлсь аф муви',
'thumbnail_error'          => 'Миниатюр тиема эльбятькс: $1',
'djvu_page_error'          => 'DjVu лопась аф сатови',
'djvu_no_xml'              => 'Аш кода латцемс XML DjVu файлти',
'thumbnail-temp-create'    => 'Пингонь миниатюрац аф тиеви',
'thumbnail-dest-create'    => 'Миниатюрась аф ванфтови коза эряви',
'thumbnail_invalid_params' => 'Аф кондясти миниатюронь арафнеманза',
'thumbnail_dest_directory' => 'Аш кода ушедомс од вастонь директориесь',
'thumbnail_image-type'     => 'Тя няйфкс форматсь аф нежедеви',

# Special:Import
'import'                     => 'Таргамс лопат',
'importinterwiki'            => 'Трансвикинь таргама',
'import-interwiki-text'      => 'Кочкак Вики ди лопань коняксонц эрявихть таргаманди.
Верзиень шисна ди петнихнень лемсна улихть ванфтфт.
Сембе ётковикинь таргама тефне тяшневихть [[Special:Log/import|таргамань лувомас]].',
'import-interwiki-source'    => 'Вики лисьма/лопа:',
'import-interwiki-history'   => 'Копияфтомс тя лопать сембе историянь верзиенза',
'import-interwiki-templates' => 'Сувафтомс сембе шаблотт',
'import-interwiki-submit'    => 'Таргамс',
'import-interwiki-namespace' => 'Пачфтема лемботма:',
'import-upload-filename'     => 'Файллем:',
'import-comment'             => 'Мяльполаткс:',
'importtext'                 => 'Эняльттяма таргак файлать Вики лисьмостонза [[Special:Export|вима лезкссь]]. Ванфтк содама машиназот ди тонк тяза.',
'importstart'                => 'Лопатне тарксевихть...',
'import-revision-count'      => '$1 {{PLURAL:$1|илякстоптома|илякстоптомат}}',
'importnopages'              => 'Ашет лопат таргаманди.',
'imported-log-entries'       => 'Таргак $1 {{PLURAL:$1|лувонь тяштема|лувонь тяштемат}}.',
'importfailed'               => 'Таргамась колавсь: <nowiki>$1</nowiki>',
'importunknownsource'        => 'Аф содаф таргама лисьмоть сортоц',
'importcantopen'             => 'Аш кода панжемс таргама файлть',
'importbadinterwiki'         => 'Аф кондясти интервикинь сюлмафкссь',
'importnotext'               => 'Шава эли аш текст',
'importsuccess'              => 'Таргамась аделавсь!',
'importhistoryconflict'      => 'Туркс моли историянь илякстоптомась (улема, тя лопась таркфоль инголе)',
'importnosources'            => 'Трансвикинь таргама лисьмот ашет ди историянь видеста тонгомась лоткафоль.',
'importnofile'               => 'Фкявок таргама файл изь тонгов.',
'importuploaderrorsize'      => 'Таргама файлть тонгомась изь лисев. Файлсь мярьгови тонгома кувалмода лама.',
'importuploaderrorpartial'   => 'Таргама файлонь тонгомась изь лисев. Аньцек файлть пакшец тонкфоль.',
'importuploaderrortemp'      => 'Таргама файлть тонгомась изь лисев. Ёткопингонь паргоня изь мув.',
'import-parse-failure'       => 'XML таргама анализонь эльбятькссь',
'import-noarticle'           => 'Ашет лопат таргаманди!',
'import-nonewrevisions'      => 'Сембе илякстоптоматне таркфольхть сядынголе.',
'xml-error-string'           => '$1 $2-це киксса, палмань $3 ($4 байтт): $5',
'import-upload'              => 'Тонгомс XML информациесь',
'import-token-mismatch'      => 'Сессиянь нформациесь юмась. Тяряфтт тага весть.',
'import-invalid-interwiki'   => 'Аш кода таргамс кочкаф Викить.',
'import-error-edit'          => '"$1" лопась апак тонк сяс мес тейть аф мярьгови петеманза.',
'import-error-create'        => '"$1" лопась апак тонк сяс мес тейть аф мярьгови тиеманза.',
'import-error-interwiki'     => '"$1" лопась апак тонк сяс мес лемоц ванфтфоль ушеширень сюлмаманди (interwiki).',
'import-error-special'       => '"$1" лопась апак тонк сяс мес сон башка лемботмоса, конаса лопат кардафт.',
'import-error-invalid'       => '"$1" лопась апак тонк сяс мес лемоц аф кондясти.',

# Import log
'importlogpage'                    => 'Таргамань лувома',
'importlogpagetext'                => 'Администрациеса лопань таргаматне петнемань историяснон мархта иля Викиста.',
'import-logentry-upload'           => 'таргаф [[$1]] файлонь тонгомать вельде',
'import-logentry-upload-detail'    => '$1 {{PLURAL:$1|илякстоптома|илякстоптомат}}',
'import-logentry-interwiki'        => 'шашфтф Викитнень ёткса $1',
'import-logentry-interwiki-detail' => '$1 {{PLURAL:$1|илякстоптома|илякстоптомат}} $2-ста',

# Tooltip help for the actions
'tooltip-pt-userpage'             => 'Тонь тиинь лопаце',
'tooltip-pt-anonuserpage'         => 'Тиить лопанц IP потмоса, конань эса тон петнесак кода',
'tooltip-pt-mytalk'               => 'Тонь корхтама лопаце',
'tooltip-pt-anontalk'             => 'Корхнемась тя IP адресста тиф петнематнень колга',
'tooltip-pt-preferences'          => 'Монь латцемане',
'tooltip-pt-watchlist'            => 'Лопатне конатнень мельге тон ванат полафнематнень коряс',
'tooltip-pt-mycontris'            => 'Тонь путкстнень лувомасна',
'tooltip-pt-login'                => 'Тяса ули кода сёрматфтомс аньцек тя аф эрявикс.',
'tooltip-pt-anonlogin'            => 'Тонь анайхть сувамс лопас, интай тя аф кошардомась.',
'tooltip-pt-logout'               => 'Лисемс',
'tooltip-ca-talk'                 => 'Лопапотмонь колга корхнема',
'tooltip-ca-edit'                 => 'Тя лопать петневи. Эняльттяма, нолдак тевс васень няфтема пуня лопать ванфтомада инголе.',
'tooltip-ca-addsection'           => 'Ушедомс од пакш',
'tooltip-ca-viewsource'           => 'Тя лопась аралаф. Ули кода ваномс лисьмонц лангс.',
'tooltip-ca-history'              => 'Тя лопать ётай верзиенза.',
'tooltip-ca-protect'              => 'Аралак тя лопать',
'tooltip-ca-delete'               => 'Нардамс тя лопать',
'tooltip-ca-undelete'             => 'Мърдафтомс петнематне тифольхть тя лопаса сонь нардамадонза инголе',
'tooltip-ca-move'                 => 'Шашфтт тя лопать',
'tooltip-ca-watch'                => 'Сувафтт тя лопать тонь мельгеваномазот',
'tooltip-ca-unwatch'              => 'Нардамс тя лопать тонь мельгеваномастот',
'tooltip-search'                  => 'Вешендемс {{SITENAME}}-ста',
'tooltip-search-go'               => 'Архт лопас тя лемть мархта кда сон ули',
'tooltip-search-fulltext'         => 'Вешендемс тя текссть лопава',
'tooltip-p-logo'                  => 'Пря лопа',
'tooltip-n-mainpage'              => 'Сувак Пря лопас',
'tooltip-n-mainpage-description'  => 'Сашентт Пря лопас',
'tooltip-n-portal'                => 'Проектть колга, мезьса лездомс, коста мумс мезь',
'tooltip-n-currentevents'         => 'Ванк мезе молихть тя пингста',
'tooltip-n-recentchanges'         => 'Мекольце Викиса полафнематнень лувомась.',
'tooltip-n-randompage'            => 'Макст кодама повсь лопа',
'tooltip-n-help'                  => 'Коста вешендемс.',
'tooltip-t-whatlinkshere'         => 'Сембе Викинь лопатне конат сюлмафт тя лопать мархта',
'tooltip-t-recentchangeslinked'   => 'Мекольце полафнемат лопатнень эса сюлмафт тя лопать мархта',
'tooltip-feed-rss'                => 'RSS лезкс тя лопанди',
'tooltip-feed-atom'               => 'Atom лезкс тя лопанди',
'tooltip-t-contributions'         => 'Няфтемс тя тиить путксонзон лувомась',
'tooltip-t-emailuser'             => 'Кучемс сёрма тя тиинди',
'tooltip-t-upload'                => 'Тонгомс файлхт',
'tooltip-t-specialpages'          => 'Сембе башка лопатнень лувомась',
'tooltip-t-print'                 => 'Тя лопать печатлави верзиец',
'tooltip-t-permalink'             => 'Ялань сюлмафкссь тя лопать верзиянзонды',
'tooltip-ca-nstab-main'           => 'Няфтемс потмонц лопац',
'tooltip-ca-nstab-user'           => 'Няфтемс тиить лопанц',
'tooltip-ca-nstab-media'          => 'Няфтемс медиать лопанц',
'tooltip-ca-nstab-special'        => 'Тя башка тевонь лопась, тондейть аш кода петнемс лопать',
'tooltip-ca-nstab-project'        => 'Няфтемс проектть лопанц',
'tooltip-ca-nstab-image'          => 'Ваномс файлонь лопать',
'tooltip-ca-nstab-mediawiki'      => 'Няфтемс системонь пачфтемать',
'tooltip-ca-nstab-template'       => 'Няфтемс кепотьксть',
'tooltip-ca-nstab-help'           => 'Няфтемс лезкс лопать',
'tooltip-ca-nstab-category'       => 'Ваномс категориень лопать',
'tooltip-minoredit'               => 'Тяштькстт тя кода ёмланя видептема',
'tooltip-save'                    => 'Ванфтомс мезе полафтыть',
'tooltip-preview'                 => 'Ванк тонь полафнематнень лангс васень няфтема вальмаса, эняльттяма нолдак тянь тевс ванфтомада инголе!',
'tooltip-diff'                    => 'Няфтемс мезе полафтыть текстса.',
'tooltip-compareselectedversions' => 'Ванк мезьса явовихть ся лопать кафта верзиенза.',
'tooltip-watch'                   => 'Сувафтомс тя лопать тонь мельгеваномазот',
'tooltip-recreate'                => 'Мърдафтомс лопать сонь нардаманц лангс аф ваномок',
'tooltip-upload'                  => 'Ушедомс тонгомать',
'tooltip-rollback'                => '"Потафтфкс" мърдафтсыне петнематне мекольце тиинь путксонц лопазонза фкя люпштамас.',
'tooltip-undo'                    => '"Каряньфтема" мърдафтсыне тя петнемать эди панжесы петнема форм васень няфтемаса.
Лезни поладомс туфталхт лихтемать эс.',
'tooltip-summary'                 => 'Тяштьк нюрьхкяняста сувафтфть колга',

# Metadata
'notacceptable' => 'Вики серверонди аш кода максомс информациесь стама форматса конань эса тонь клиентти ули кода сонь морафтомс.',

# Attribution
'anonymous'        => 'Лемфтома {{SITENAME}}-нь {{PLURAL:$1|тиись|тиихне}}',
'siteuser'         => '{{SITENAME}}-нь тиись $1',
'lastmodifiedatby' => 'Тя лопать мекольцеда петнезь $3 $2, $1',
'othercontribs'    => 'Тиф $1-нь покаманц коряс.',
'others'           => 'илят',
'siteusers'        => '{{SITENAME}}-нь {{PLURAL:$2|тиись|тиихне}} $1',
'creditspage'      => 'Лопань полайаманза',
'nocredits'        => 'Аш полайамань информациесь тя лопанди.',

# Spam protection
'spamprotectiontitle' => 'Луднада араламань педямась',
'spamprotectiontext'  => 'Лопать тонь мялецоль ванфтомс пякстафоль луднада араламань педямаса.
Тя, улема, лиссь ушеширень равжа лувомать лопань сюлмафксонц эзда.',
'spamprotectionmatch' => 'Тя текстть эзда нолдавсь минек луднада араламань педяманьке: $1',
'spambot_username'    => 'MediaWiki-ть луднада аруяфтомась',
'spam_reverting'      => 'Мърдафни мекольце $1-ти сюлмафкстома верзиес',
'spam_blanking'       => 'Сембе илякстоптомат $1-ти сюлмафкснень мархта, лотксема',

# Patrolling
'markaspatrolleddiff'                 => 'Тяштемс кода патрулень варжаф',
'markaspatrolledtext'                 => 'Тяштемс тя лопать кода патрулень варжаф',
'markedaspatrolled'                   => 'Тяштьф кода патрулень варжаф',
'markedaspatrolledtext'               => 'Кочкаф [[:$1]]  илякстоптомась тяштьфоль кода патрулень варжаф.',
'rcpatroldisabled'                    => 'Мекольце полафнематненди патрульсь тевс аф нолдави',
'rcpatroldisabledtext'                => 'Мекольце полафнематнень патрульть функциесь тяни тевс аф нолдави.',
'markedaspatrollederror'              => 'Аш кода тяштемс кода патрулень варжаф',
'markedaspatrollederrortext'          => 'Тондейть эряви васенда кочкамс илякстоптомась патрулень варжафксокс тяштеманди.',
'markedaspatrollederror-noautopatrol' => 'Тондейть аф мярьгови тяштемс эсь полфнемацень кода патрулень варжафт.',

# Patrol log
'patrol-log-page'      => 'Патрулень лувомась',
'patrol-log-header'    => 'Патруль ала верзиетнень лувомась.',
'log-show-hide-patrol' => '$1 патрулень лувомась',

# Image deletion
'deletedrevision'                 => 'Нардаф сире илякстоптома $1',
'filedeleteerror-short'           => 'Лиссь эльбятькс нардамста файл: $1',
'filedeleteerror-long'            => 'Лиссть эльбятькст нардамста файл:

$1',
'filedelete-missing'              => 'Файлть "$1" аш кода нардамс сяс мес сонь аш.',
'filedelete-old-unregistered'     => 'Кочкаф файлть илякстоптома "$1" датабазаса аш.',
'filedelete-current-unregistered' => 'Кочкаф файлсь "$1" датабазаса аш.',
'filedelete-archive-read-only'    => 'Аркивонь директориесь "$1" аф сёрмадови web-серверса.',

# Browsing diffs
'previousdiff' => 'Сядынгольдень верзиец',
'nextdiff'     => 'Од верзиец →',

# Media information
'mediawarning'    => "'''Инголе кардама''': Тя файлть, улема, пелькс код.
Сонь нолдаманза тон коласак тонь системацень.",
'imagemaxsize'    => "Архтофкснень келеснон оторсна:<br />''(файлонь шарьхкотьфтема лопатненди)''",
'thumbsize'       => 'Миниатюронь кувалмоц:',
'widthheightpage' => '$1 × $2, $3 {{PLURAL:$3|лопа|лопат}}',
'file-info'       => 'файлонь кувалмоц: $1, MIME сортоц: $2',
'file-info-size'  => '$1 × $2 пикселхть, файлть кувалмоц: $3, MIME сорт: $4',
'file-nohires'    => 'Сяда лама анцяйнятнень мархта архтофкс аш.',
'svg-long-desc'   => 'SVG файл, $1 × $2 пиксельхть, file файлть кувалмоц: $3',
'show-big-image'  => 'Няфтемс пяшксе кувалмонц',

# Special:NewFiles
'newimages'             => 'Од файлхнень пърдафкс',
'imagelisttext'         => "Ала'''$1''' {{PLURAL:$1|файлонь|файлхнень}} лувомась кочкаф $2.",
'newimages-summary'     => 'Тя башка тевонь лопась няфнесыне мекольце тонкф файлхт.',
'newimages-legend'      => 'Педяма',
'newimages-label'       => 'Файллем (эли сонь пакшец):',
'showhidebots'          => '($1 робот програпт)',
'noimages'              => 'Мезеге аш.',
'ilsubmit'              => 'Вешендемс',
'bydate'                => 'ши коряс',
'sp-newimages-showfrom' => 'Няфтемс од файлхт $1-ста,  $2 ушедомс',

# Bad image list
'bad_image_list' => 'Форматсь вага стамсь:

Аньцек лувк пакшкянза (киксне, конат ушедовихть * тяшкста) кармайхть лувовома. Васенце киксонь сюлмафксонцты эряви улемс аф кондясти архтофксонь сюлмафксокс.
Эрь кона сай  сюлмафксне тя киксса кармайхть лувовома кода синнеда башкат, илякс мярьгомс кода лопат коза ули кода архтофкснень сувафнемс.',

# Metadata
'metadata'          => 'Метадата',
'metadata-help'     => 'Тя файлса ащи информациень полаткс, улема, цифрань камерста эли сканерста кона тон нолдайхть тевс архтофксть латцеманкса. Полафнендярять тя архтофксть васенце верзиенц, кодамога анцяйнятне, улема, кармайхть аф няевикс мекольцень няйфсонза.',
'metadata-expand'   => 'Няфтемс сембе анцяйнянза',
'metadata-collapse' => 'Кяшемс келептьф анцяйнятнень няфтемась',
'metadata-fields'   => 'Няйф метадатань паксятне конат лувфт тяса ала кармайхть няфтевома архтофксонь лопаса мъзярда метадатань лувома пурдай. 
Илят улихть кяшфт мъзярс илякс изь мярьгов.
* make
* model
* datetimeoriginal
* exposuretime
* fnumber
* isospeedratings
* focallength
* artist
* copyright
* imagedescription
* gpslatitude
* gpslongitude
* gpsaltitude',

# EXIF tags
'exif-imagewidth'                  => 'Келец',
'exif-imagelength'                 => 'Серец',
'exif-bitspersample'               => 'Битт фкя компонентс',
'exif-compression'                 => 'Компрезиень арафтомац',
'exif-photometricinterpretation'   => 'Пикселень композициесна',
'exif-orientation'                 => 'Ориентацие',
'exif-samplesperpixel'             => 'Компонентонь лувкссна',
'exif-planarconfiguration'         => 'Информациень латцемась',
'exif-ycbcrsubsampling'            => 'Y-ста C-с латцемань арафтомась',
'exif-ycbcrpositioning'            => 'Y ди C арафтомасна',
'exif-xresolution'                 => 'Горизонталень сидец',
'exif-yresolution'                 => 'Вертикалень сидец',
'exif-stripoffsets'                => 'Архтома информациеть вастоц',
'exif-rowsperstrip'                => 'Курнятнень луфкссна фкя киксс',
'exif-stripbytecounts'             => 'Байтт фкя компрезияфтф китьксс',
'exif-jpeginterchangeformat'       => 'JPEG SOI-нди офсетсь',
'exif-jpeginterchangeformatlength' => 'JPEG информациень байтт',
'exif-whitepoint'                  => 'Акша коряс ункстамась',
'exif-primarychromaticities'       => 'Васень тюснень ункстамась',
'exif-ycbcrcoefficients'           => 'Тюс ёткнень илякстомома кепотьксть коефициентоц',
'exif-referenceblackwhite'         => 'Кафта акша ди равжа ваксс путови питнесна',
'exif-datetime'                    => 'Файлсь полафнесыне шись ди пингсь',
'exif-imagedescription'            => 'Архтофксть коняксоц',
'exif-make'                        => 'Камерань нолдайсь',
'exif-model'                       => 'Камерань модельсь',
'exif-software'                    => 'Тевс нолдаф програпне',
'exif-artist'                      => 'Арсись',
'exif-copyright'                   => 'Копийама видексонь кирдись',
'exif-exifversion'                 => 'Exif верзиесь',
'exif-flashpixversion'             => 'Нежедеви Flashpix верзиесь',
'exif-colorspace'                  => 'Тюсонь ёткась',
'exif-componentsconfiguration'     => 'Эрь компонентонь асуц',
'exif-compressedbitsperpixel'      => 'Архтофксонь компрезийамась',
'exif-pixelydimension'             => 'Кондясти архтофксонь келец',
'exif-pixelxdimension'             => 'Кондясти архтофксонь серец',
'exif-usercomment'                 => 'Тиить тяштьксонза',
'exif-relatedsoundfile'            => 'Сотф аудио файлсь',
'exif-datetimeoriginal'            => 'Шинь тиевомать шись ди пингсь',
'exif-datetimedigitized'           => 'Цифрайафтомань шись ди пингсь',
'exif-subsectime'                  => 'Ши ди пинге полафнема фавонь (секундонь) пакшкатне',
'exif-subsectimeoriginal'          => 'Оригиналонь ши ди пинге фавонь (секундонь) пакшкатне',
'exif-subsectimedigitized'         => 'Цифраяфтомань ши ди пинге фавонь (секундонь) пакшкатне',
'exif-exposuretime'                => 'Экспозициень пингсь',
'exif-exposuretime-format'         => '$1 сек ($2)',
'exif-fnumber'                     => 'F номерсь',
'exif-exposureprogram'             => 'Экспозициень програмсь',
'exif-spectralsensitivity'         => 'Спектрань марьсемась',
'exif-isospeedratings'             => 'ISO куроксшинь пялькснемась',
'exif-shutterspeedvalue'           => 'Эрьхтема таватксонь куроксшись',
'exif-aperturevalue'               => 'Апертурсь',
'exif-brightnessvalue'             => 'Валдоксши',
'exif-exposurebiasvalue'           => 'Экспозициень сортсь',
'exif-maxaperturevalue'            => 'Максимум апертурась',
'exif-subjectdistance'             => 'Объекста ёткась',
'exif-meteringmode'                => 'Уекстамань режимсь',
'exif-lightsource'                 => 'Валдань лисьмоц',
'exif-flash'                       => 'Кьфчадефкс',
'exif-focallength'                 => 'Линзатнень фокусснон ётканза',
'exif-subjectarea'                 => 'Субъектонь вастсь',
'exif-flashenergy'                 => 'Кьфчядефксонь эрьгац',
'exif-focalplanexresolution'       => 'Фокусонь ён X сидец',
'exif-focalplaneyresolution'       => 'Фокусонь ён Y сидец',
'exif-focalplaneresolutionunit'    => 'Фокусонь ён сиденц ункстамась',
'exif-subjectlocation'             => 'Объектть вастоц',
'exif-exposureindex'               => 'Экспозициень индекссь',
'exif-sensingmethod'               => 'Марьсема методсь',
'exif-filesource'                  => 'Файлонь лисьмоц',
'exif-scenetype'                   => 'Эрьхтефксонь няйфсь',
'exif-customrendered'              => 'Кърдань эрьхтефксонь латцемась',
'exif-exposuremode'                => 'Экспозициень режимсь',
'exif-whitebalance'                => 'Акша тюсонь балансоц',
'exif-digitalzoomratio'            => 'Цифрань ламолгафтома ункснемась',
'exif-focallengthin35mmfilm'       => 'Фокусонь кувалмоц 35 мм фильмса',
'exif-scenecapturetype'            => 'Эрьхтефксонь тиевомац',
'exif-gaincontrol'                 => 'Эрьхтемань няевомась',
'exif-contrast'                    => 'Контрастсь',
'exif-saturation'                  => 'Тустолмась',
'exif-sharpness'                   => 'Оржаксшись',
'exif-devicesettingdescription'    => 'Камера арафнематнень колга  тяштемат',
'exif-subjectdistancerange'        => 'Объектста ёткась',
'exif-imageuniqueid'               => 'Эрьхтефксонь эсь кодоц',
'exif-gpsversionid'                => 'GPS кодонь верзиесь',
'exif-gpslatituderef'              => 'Кельмеширень эли лямбеширень келец',
'exif-gpslatitude'                 => 'Келец',
'exif-gpslongituderef'             => 'Шистямаширень эли шивалгомширень кувалмоц',
'exif-gpslongitude'                => 'Кувалмоц',
'exif-gpsaltituderef'              => 'Серенц сюлмафксоц',
'exif-gpsaltitude'                 => 'Серец',
'exif-gpstimestamp'                => 'GPS пинге (атомонь ойхть)',
'exif-gpssatellites'               => 'Спутникне нолнеф тевс ункстаманди',
'exif-gpsstatus'                   => 'Ресиверть статуссь',
'exif-gpsmeasuremode'              => 'Ункстамань режимсь',
'exif-gpsdop'                      => 'Ункстамань оржашись',
'exif-gpsspeedref'                 => 'Куроксшинь ункстамась',
'exif-gpsspeed'                    => 'GPS ресиверть куроксшись',
'exif-gpstrackref'                 => 'Шаштома ёнть ункснемась',
'exif-gpstrack'                    => 'Шаштомань ёнць',
'exif-gpsimgdirectionref'          => 'Лезкс эрьхтефксонь ёнонзоды',
'exif-gpsimgdirection'             => 'Эрьхтефксонь ёнсь',
'exif-gpsmapdatum'                 => 'Геодезиень информациесь кундаф тевс',
'exif-gpsdestlatituderef'          => 'Вастонь келенц ункснеманц лезкссь',
'exif-gpsdestlatitude'             => 'Келенц ёноц',
'exif-gpsdestlongituderef'         => 'Вастонь кувалмонц ункснема лезкссь',
'exif-gpsdestlongitude'            => 'Ёнонь келец',
'exif-gpsdestbearingref'           => 'Ёттнень ункстама лезкссь',
'exif-gpsdestbearing'              => 'Ёттнень ункстама',
'exif-gpsdestdistanceref'          => 'Ёнста ёткань ункстама лезкссь',
'exif-gpsdestdistance'             => 'Вастста ёткась',
'exif-gpsprocessingmethod'         => 'GPS ладяма методонь лемоц',
'exif-gpsareainformation'          => 'GPS районть лемоц',
'exif-gpsdatestamp'                => 'GPS ши',
'exif-gpsdifferential'             => 'GPS диференциень петнема',

# EXIF attributes
'exif-compression-1' => 'Аф компрезияф',

'exif-unknowndate' => 'Аф содаф шись',

'exif-orientation-1' => 'Апак полафтт',
'exif-orientation-2' => 'Шарфтф горизонталь коряс',
'exif-orientation-3' => 'Шарфтф 180° градусс',
'exif-orientation-4' => 'Шарфтф вертикаль коряс',
'exif-orientation-5' => 'Шарфтф 90° градусс ойхть каршес ди вертикаль коряс',
'exif-orientation-6' => 'Шарфтф 90° градусс ойхть коряс',
'exif-orientation-7' => 'Шарфтф 90° градусс ойхть коряс ди  вертикаль коряс',
'exif-orientation-8' => 'Шарфтф 90° градусс ойхть каршес',

'exif-planarconfiguration-1' => 'нюрьхкяня форматсь',
'exif-planarconfiguration-2' => 'лапш форматсь',

'exif-componentsconfiguration-0' => 'аш',

'exif-exposureprogram-0' => 'Апак содак',
'exif-exposureprogram-1' => 'Кядьвельде',
'exif-exposureprogram-2' => 'Кърдань програм',
'exif-exposureprogram-3' => 'Диафрагмань приоретсь',
'exif-exposureprogram-4' => 'Кирдемань приоритетсь',
'exif-exposureprogram-5' => 'Шкам програм (эряви оржашинь кърхкалмать коряс)',
'exif-exposureprogram-6' => 'Спортонь програм (сяда ёмла кирдемась)',
'exif-exposureprogram-7' => 'Портретонь режимсь (мала эрьхтеманди фокусфтома фон мархта)',
'exif-exposureprogram-8' => 'Ландшафтонь режимсь (ландшафтонь эрьхтеманди ди фон фокус мархта)',

'exif-subjectdistance-value' => '$1 метрат',

'exif-meteringmode-0'   => 'Аф содаф',
'exif-meteringmode-1'   => 'Кучкастонь',
'exif-meteringmode-2'   => 'Кучкаста ункстаф',
'exif-meteringmode-3'   => 'Путьку',
'exif-meteringmode-4'   => 'Лама путьку',
'exif-meteringmode-5'   => 'Шаблон',
'exif-meteringmode-6'   => 'Пакшень-пакш',
'exif-meteringmode-255' => 'Иля',

'exif-lightsource-0'   => 'Аф содаф',
'exif-lightsource-1'   => 'Шивалда',
'exif-lightsource-2'   => 'Флуоресцент',
'exif-lightsource-3'   => 'Толвалда (электрашинь валда)',
'exif-lightsource-4'   => 'Кьфчядефкс',
'exif-lightsource-9'   => 'Мани',
'exif-lightsource-10'  => 'Сюнерькс',
'exif-lightsource-11'  => 'Эше',
'exif-lightsource-12'  => 'Шивалдонь флуоресцент (D 5700 – 7100K)',
'exif-lightsource-13'  => 'Шинь акша флуоресцент (N 4600 – 5400K)',
'exif-lightsource-14'  => 'Кельме акша флуоресцент (W 3900 – 4500K)',
'exif-lightsource-15'  => 'Акша флуресцент валда (WW 3200 – 3700K)',
'exif-lightsource-17'  => 'Стандарт валда A',
'exif-lightsource-18'  => 'Стандарт валда B',
'exif-lightsource-19'  => 'Стандарт валда C',
'exif-lightsource-24'  => 'студиянь толвалда ISO',
'exif-lightsource-255' => 'Иля валдонь лисьма',

# Flash modes
'exif-flash-fired-0'    => 'Кьфчадефкссь изь вандолдозев',
'exif-flash-fired-1'    => 'Кьфчадефкссь вандолдозевсь',
'exif-flash-return-0'   => 'стробоскопу цильф мушендомат ашет',
'exif-flash-return-2'   => 'стробоскопу цильф валда изь мув',
'exif-flash-return-3'   => 'стробоскопу цильф валда муфоль',
'exif-flash-mode-1'     => 'аф ётави кьфчадефксонь вандолдозевома',
'exif-flash-mode-2'     => 'аф ётави кьфчадефксонь пандомац',
'exif-flash-mode-3'     => 'эслек линия',
'exif-flash-function-1' => 'Кьфчадефкс аш',
'exif-flash-redeye-1'   => '"якстерь сельмот" кирьфнема',

'exif-focalplaneresolutionunit-2' => 'вакспет',

'exif-sensingmethod-1' => 'Апак няфтть',
'exif-sensingmethod-2' => 'Фкя-пиндол тюсонь ётка сенсор',
'exif-sensingmethod-3' => 'Кафта-пиндол тюсонь ётка сенсор',
'exif-sensingmethod-4' => 'Колма-пиндол тюсонь ётка сенсор',
'exif-sensingmethod-5' => 'Тюс латцема ётка сенсор',
'exif-sensingmethod-7' => 'Колма-линиянь сенсор',
'exif-sensingmethod-8' => 'Тюс латцема линиянь сенсор',

'exif-scenetype-1' => 'Виде эрьхтема вельде тиф архтофкссь',

'exif-customrendered-0' => 'Нормань процесс',
'exif-customrendered-1' => 'Кърдань процесс',

'exif-exposuremode-0' => 'Эсь тиеви экспозициесь',
'exif-exposuremode-1' => 'Кядьвельдень экспозициесь',
'exif-exposuremode-2' => 'Эсь тиеви кадрыяфтома',

'exif-whitebalance-0' => 'Эсь тиеви акша тюсонь баланс',
'exif-whitebalance-1' => 'Кядьвельдень акша тюсонь баланс',

'exif-scenecapturetype-0' => 'Стандарт',
'exif-scenecapturetype-1' => 'Ландшафт',
'exif-scenecapturetype-2' => 'Портрет',
'exif-scenecapturetype-3' => 'Вень картина',

'exif-gaincontrol-0' => 'Фкявок аш',
'exif-gaincontrol-1' => 'Ёмла ламолгафтома',
'exif-gaincontrol-2' => 'Оцю ламолгафтома',
'exif-gaincontrol-3' => 'Аф оцю ёмлалгафтома',
'exif-gaincontrol-4' => 'Оцю ёмлалгафтома',

'exif-contrast-0' => 'Кърдань',
'exif-contrast-1' => 'Ляпе',
'exif-contrast-2' => 'Калгода',

'exif-saturation-0' => 'Кърдань',
'exif-saturation-1' => 'Лафча тустолма',
'exif-saturation-2' => 'Вишке тустолма',

'exif-sharpness-0' => 'Кърдань',
'exif-sharpness-1' => 'Ляпе',
'exif-sharpness-2' => 'Калгода',

'exif-subjectdistancerange-0' => 'Аф содаф',
'exif-subjectdistancerange-1' => 'Макро кодсь',
'exif-subjectdistancerange-2' => 'Сёлгомс няфтемать',
'exif-subjectdistancerange-3' => 'Ичкоздень няфтемась',

# Pseudotags used for GPSLatitudeRef and GPSDestLatitudeRef
'exif-gpslatitude-n' => 'Кельмеширень келесь',
'exif-gpslatitude-s' => 'Лямбеширень келесь',

# Pseudotags used for GPSLongitudeRef and GPSDestLongitudeRef
'exif-gpslongitude-e' => 'Шистямаширень кувалмась',
'exif-gpslongitude-w' => 'Шивалгомширень кувалмась',

'exif-gpsstatus-a' => 'Ункстамац моли',
'exif-gpsstatus-v' => 'Ункстамань фкя-фкянь мархта йаксема',

'exif-gpsmeasuremode-2' => '2-кърдань ункстама',
'exif-gpsmeasuremode-3' => '3-кърдань ункстама',

# Pseudotags used for GPSSpeedRef
'exif-gpsspeed-k' => 'Вайгяльбет ойс',
'exif-gpsspeed-m' => 'Милят ойс',
'exif-gpsspeed-n' => 'Сюлмот',

# Pseudotags used for GPSTrackRef, GPSImgDirectionRef and GPSDestBearingRef
'exif-gpsdirection-t' => 'Виде ён',
'exif-gpsdirection-m' => 'Магнитонь ён',

# External editor support
'edit-externally'      => 'Петнемс тя файлть ушеширень програмонь вельде',
'edit-externally-help' => '(Ванк [//www.mediawiki.org/wiki/Manual:External_editors арафнемань вятемовалсь] сяда лама содаманкса)',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'сембе',
'namespacesall' => 'сембе',
'monthsall'     => 'сембе',

# Email address confirmation
'confirmemail'             => 'Кемостамс электрононь адресть',
'confirmemail_noemail'     => 'Тонь аш кондясти электрононь адрес тяштьф тонь [[Special:Preferences|тиить арафнематнень]] эса.',
'confirmemail_text'        => '{{SITENAME}} веши тонь электрононь адресцень кемокстамац электрононь адресть арафнематнень тевс нолдамада инголе.
Люпштак пунять ала кемокстамань сёрмать тонь электрононь адресозот кучеманди.
Сёрмаса ули сюлмафкссь кодть мархта;
нолдак сюлмафкстьтонь содама машинацень вальмасонза тонь электрононь адресцень кемокстаманди.',
'confirmemail_pending'     => 'Кемокстамань кодсь кучфоль ни тонь электрононь адресозот;
кда тон тиеть тон сёрматфтомацень улхкомба ди тондейть, улема, эряви учемс мъзярошка минутт мъзярс сон латцеви тага фкя весть од кодть аф вешезь.',
'confirmemail_send'        => 'Кучемс кемокстамань кодсь',
'confirmemail_sent'        => 'Кемокстамань сёрмась кучф.',
'confirmemail_oncreate'    => 'Кемокстамань кодсь кучфоль тон электрононь адресот.
Тя кодсь аф эрявксты суваманди, интай тондейть эряви сонь путомс эрь кодама электрононь адресть сотф Викить арафнематнень тевс нолдамада инголе.',
'confirmemail_sendfailed'  => '{{SITENAME}}-ти аш кода кучемс кемокстамань сёрмацень.
Варжак, шятьта адрессот ульсть аф кондясти тяшксне.

Сермась мърдась: $1',
'confirmemail_invalid'     => 'Аф кондясти кемокстамань кодсь.
Кодсь, улема, сирелгодсь.',
'confirmemail_needlogin'   => 'Тондейть эряви $1 кемокстамс тонь электрононь адресце.',
'confirmemail_success'     => 'Тонь электрононь адресце кемокстафоль.
Тондейть тяни ули кода сувамс Викис.',
'confirmemail_loggedin'    => 'Тонь электрононь адресце тяни кемокстаф.',
'confirmemail_error'       => 'Мезеге мольсь аф лац тонь кемокстаманц ванфтомать ёткста.',
'confirmemail_subject'     => '{{SITENAME}} электрононь адресть кемокстамась',
'confirmemail_body'        => 'Кати-кие, улема, тон $1 IP адресста ушедсь сёрматфтомась "$2" тя электрононь адресть мархта {{SITENAME}}-са.

Кемокстамс ся сёрматфтомась афкукс тоннеть ди нолдамс тевс электрононь адресть {{SITENAME}}-са эряви панжемс тя сюлмафксть тонь содама машинацень вальмасонза:

$3

Кда тон *ашеть* ушеда сёрматфтомать, кундамс тя сюлмафксс электрононь адресть кемокстаманц лоткаманди:

$5

Тя кемокстамань кодсь сирелгоды $4.',
'confirmemail_invalidated' => 'Электрононь адресть кемокстамась валхтозь',
'invalidateemail'          => 'Валхтомс электрононь кемокстамать',

# Scary transclusion
'scarytranscludedisabled' => '[Interwiki transcluding лоткаф]',
'scarytranscludefailed'   => '[Шаблон латцема $1-нди изь лисев]',
'scarytranscludetoolong'  => '[URL вельф кувака]',

# Delete conflict
'deletedwhileediting' => "'''Инголе кардама''': Тя лопась нардафоль ёт тон кармать петнеманза!",
'confirmrecreate'     => "Тиись [[User:$1|$1]] ([[User talk:$1|корхнема]]) нардазе тя лопать мъзярда тон кармать петнемонза тя туфталонкса:
: ''$2''
Кемокстак тонь афкукс мяльце тя лопать мърдафтомс.",
'recreate'            => 'Тиемс одукс',

# action=purge
'confirm_purge_button' => 'ОК',
'confirm-purge-top'    => 'Нардамс тя лопать ёткопингонь файлснон?',
'confirm-purge-bottom' => 'Лопань аруяфтомась ёрдасыне сембе эсь ванфтовиксне ди кадсы сембода од верзиесь.',

# Multipage image navigation
'imgmultipageprev' => '← сядынгольдень лопась',
'imgmultipagenext' => 'сай лопась →',
'imgmultigo'       => 'Аре!',
'imgmultigoto'     => 'Архт $1 лопас',

# Table pager
'ascending_abbrev'         => 'касом.',
'descending_abbrev'        => 'тум.',
'table_pager_next'         => 'Сай лопа',
'table_pager_prev'         => 'Сядынгольдень лопа',
'table_pager_first'        => 'Васенце лопа',
'table_pager_last'         => 'Мекольце лопа',
'table_pager_limit'        => 'Няфтемс $1 тефт фкя лопас',
'table_pager_limit_submit' => 'Аре',
'table_pager_empty'        => 'Муфкст ашет',

# Auto-summaries
'autosumm-blank'   => 'Аруяфтф лопась',
'autosumm-replace' => "Нардакшневи лопать '$1' мархта",
'autoredircomment' => 'Умборондафневи [[$1]]с',
'autosumm-new'     => 'Тиевсь лопа $1 мархта',

# Live preview
'livepreview-loading' => 'Аноклакшни…',
'livepreview-ready'   => 'Аноклакшни… Анок!',
'livepreview-failed'  => 'Эряк васень няфтемась колавсь! Тяряфтт кундамс кърдань васень няфтемас.',
'livepreview-error'   => 'Аш кода сотомс: $1 "$2" мархта. Тяряфтт кундамс кърдань васень няфтемас.',

# Friendlier slave lag warnings
'lag-warn-normal' => 'Полафнематне $1 {{PLURAL:$1|фавда|фавда}} од аш кода няфтемс лувомаса.',
'lag-warn-high'   => 'Серверонь вельф стака яксеманкса $1 {{PLURAL:$1|фавда|фавда}} од полафнематне аш кода няфтемс тя лувомаса.',

# Watchlist editor
'watchlistedit-numitems'       => 'Тонь мельгеваномазост {{PLURAL:$1|1 конякс|$1 конякст}} корхнема лопатнень башка.',
'watchlistedit-noitems'        => 'Тонь мельгеваномазост конякст ашет.',
'watchlistedit-normal-title'   => 'Петнемс мельгеваномать',
'watchlistedit-normal-legend'  => 'Нардамс конякст мельгеваномаста',
'watchlistedit-normal-explain' => 'Тонь мельгеваномаса коняксне няфтьфт ала.
Коняксонь нардаманди, путт тяште кудняс сонь ваксса ди люпштак Нардамс конякст.
Тондейть ули кода [[Special:EditWatchlist/raw|петнемс ише лувомать]].',
'watchlistedit-normal-submit'  => 'Нардамс коняксне',
'watchlistedit-normal-done'    => '{{PLURAL:$1|1 нардаф|$1 нардафт}} тонь мельгеваномастот:',
'watchlistedit-raw-title'      => 'Петнемс ише мельгеваномать',
'watchlistedit-raw-legend'     => 'Петнемс ише мельгеваномать',
'watchlistedit-raw-explain'    => 'Коняксне тонь мельгеваномастот няфтьфт ала, синь улихть кода петнемс лувомас поладомать эли лувомаста нардамать вельде;
фкя конякс киксс.
Аделамда меле люпштак Одонзамс Мельгеваномать.
Тондейть тага ули кода  [[Special:EditWatchlist|кунцемс кърдань петнема лезксть]].',
'watchlistedit-raw-titles'     => 'Конякст:',
'watchlistedit-raw-submit'     => 'Одонзамс мельгеваномать',
'watchlistedit-raw-done'       => 'Тонь мельгованомацень одонзафоль.',
'watchlistedit-raw-added'      => '{{PLURAL:$1|1 конякс полатф|$1 конякст полатфт}}:',
'watchlistedit-raw-removed'    => '{{PLURAL:$1|1 конякс нардаф|$1 конякст нардафт}}:',

# Watchlist editing tools
'watchlisttools-view' => 'Няфтемс полафнематне лувомастонь лопапотмова',
'watchlisttools-edit' => 'Няфтемс эди петнемс мельгеваномать',
'watchlisttools-raw'  => 'Петнемс казяма мельгеваномать',

# Core parser functions
'unknown_extension_tag' => 'Аф содаф келептема тяштькссь "$1"',
'duplicate-defaultsort' => 'Инголе мярьгома: Апак полафтт сортонь панжема "$2" апак полафтт сортонь панжема "$1"да вяре.',

# Special:Version
'version'                       => 'MediaWiki-ть верзиец',
'version-extensions'            => 'Нолдаф тевс келепнематне',
'version-specialpages'          => 'Башка тевонь лопат',
'version-parserhooks'           => 'Синтакс анализаторонь кярьмодихне',
'version-variables'             => 'Пингоннет',
'version-other'                 => 'Иля',
'version-mediahandlers'         => 'Медиа файлхнень ладямат',
'version-hooks'                 => 'Кярьмодихне',
'version-extension-functions'   => 'Келептема функциенза',
'version-parser-extensiontags'  => 'Анализаторонь келептема кодонза',
'version-parser-function-hooks' => 'Синтаксонь анализаторть функциензон кярьмодихне',
'version-hook-name'             => 'Кярьмодинь лемоц',
'version-hook-subscribedby'     => 'Сёрматфтсь',
'version-version'               => '(Верзие $1)',
'version-license'               => 'Лицензие',
'version-software'              => 'Нолдаф програпне',
'version-software-product'      => 'Нолдафкс',
'version-software-version'      => 'Верзие',

# Special:FilePath
'filepath'         => 'Файлти ян',
'filepath-page'    => 'Файл:',
'filepath-submit'  => 'Ян',
'filepath-summary' => 'Тя башка тевонь лопась няфнесы сембе янць файлти.
Архтофксне няфневихть сембе синь кувалмосост, иля файлонь сортсна нолдавихть видеста програпнень вельде конат сотфт мархтост.',

# Special:FileDuplicateSearch
'fileduplicatesearch'          => 'Вешендемс кафонзаф файлхне',
'fileduplicatesearch-summary'  => 'Вешендемс кафонзаф файлхнень хэш-кодонь лувкс коряс.',
'fileduplicatesearch-legend'   => 'Вешендемс кафонзафкс',
'fileduplicatesearch-filename' => 'Файллем:',
'fileduplicatesearch-submit'   => 'Вешендемс',
'fileduplicatesearch-info'     => '$1 × $2 пиксель<br />Файл кувалмоц: $3<br />MIME сорт: $4',
'fileduplicatesearch-result-1' => 'Файлть "$1" ашет тяконь кафонзамонза.',
'fileduplicatesearch-result-n' => 'Файлть "$1" {{PLURAL:$2|1 тяконь кафонзамац|$2 тяконь кафонзаманза}}.',

# Special:SpecialPages
'specialpages'                   => 'Башка лопат',
'specialpages-note'              => '----
* Кърдань башка лопат.
* <strong class="mw-specialpagerestricted">Кардаф башка лопат.</strong>',
'specialpages-group-maintenance' => 'Латцема лувоматне',
'specialpages-group-other'       => 'Иля башка тевонь лопатне',
'specialpages-group-login'       => 'Сувамс / сёрматфтомс',
'specialpages-group-changes'     => 'Мекольце полафнематне ди лувоматне',
'specialpages-group-media'       => 'Медиа пачфтематне ди тонгоматне',
'specialpages-group-users'       => 'Тиихне ди видексне',
'specialpages-group-highuse'     => 'Пяк эрявикс лопат',
'specialpages-group-pages'       => 'Лопатнень лувомасна',
'specialpages-group-pagetools'   => 'Лопань кядьёнкст',
'specialpages-group-wiki'        => 'Викинь дата ди кядьёнксне',
'specialpages-group-redirects'   => 'Башка лопатнень умборондафтома',
'specialpages-group-spam'        => 'Лудна пачфтематнень каршес кядьёнксне',

# Special:BlankPage
'blankpage'              => 'Шава лопа',
'intentionallyblankpage' => 'Тя лопать арьсезефоль кадомс шавакс',

# External image whitelist
'external_image_whitelist' => '#Катт тя луфть (строкать) апак полафтт стамкс кодамкс сон ульсь<pre>
#Путт васу валзюлмафксонь пакшензон (аньцек пакшсь моли // ёткова) алу
#Нят улихть кондямкс ушеширень (пси линияв) няйфнень URL адресненди
#Тонатне конатне кондяпт кармахть няфтевома кода няйфне, илякс аньцек няйфонди сюлмафкссь ули няевикс
#Луфне (строкатне) конатне ушедовихть # тяшкссь мархта лувовихть мяльполатксокс
#Сембе сяка оцю и ёмла букватне

#Путт сембе васу валзюлмафксонь пакшензон тя луфть (строкать) вельфке. Катт тя луфть (строкать) стамкс кодамкс сон ульсь</pre>',

# Special:Tags
'tag-filter' => '[[Special:Tags|Tag]] педямась:',

# New logging system
'revdelete-restricted'   => 'нолдаф тевс кардафксне системонь вятиксненди',
'revdelete-unrestricted' => 'системонь вятиксненди кардафксне валхтфт',
'newuserlog-byemail'     => 'сувама валце кучф электрононь сёрмаса',

);
