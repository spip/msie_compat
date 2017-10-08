<?php
// This is a SPIP language file  --  Ceci est un fichier langue de SPIP
// extrait automatiquement de https://trad.spip.net/tradlang_module/msiecompat?lang_cible=uk
// ** ne pas modifier le fichier **

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

$GLOBALS[$GLOBALS['idx_lang']] = array(

	// C
	'choix_explication' => '<p>Ця опція покращує сумісність вашого сайту з Internet Explorer. </p>
<ul>
<li><a href=\'http://jquery.khurshid.com/ifixpng.php\'>iFixPng</a> (<b>default setting</b>) додати прозорість PNG файлів для MSIE 5 і 6. </li>
<li><a href=\'http://code.google.com/p/ie7-js/\'>IE7.js</a> виправляє PNG прозорість і додає підтримку CSS2 селекторів для MSIE 5 і 6 (<a href=\'http://ie7-js.googlecode.com/svn/test/index.html\'>повний список селекторів для IE7.js і IE8.js</a>).</li>
<li>IE8.js покращує IE7.js  CSS селекторами від MSIE 5 до 7.</li>
<li>IE7-squish виправляє три помилки в  MSIE 6 (включаючи подвоєння margin у floating елементів), але може проявлятися side effects.</li>
</ul>',
	'choix_ie7' => '<a href=\'http://code.google.com/p/ie7-js/\'>IE7.js</a> виправляє проблему з прозорістью png файлів і додає селектори CSS2 для IE 5 і IE6  (<a href=\'http://ie7-js.googlecode.com/svn/test/index.html\'>ви можете подивитися список доступних селекторів</a>).',
	'choix_ie7squish' => 'IE7-squish виправляє три основних бага IE 6 (включаючи подвоєння отступів у floating елементів), але може проявлятися side effect.',
	'choix_ie8' => 'IE8.js доповнює IE7.js, розширюючи можливості використання селекторів CSS від IE 5 до IE 7.',
	'choix_ifixpng' => 'По замовчуванню, <a href=\'http://jquery.khurshid.com/ifixpng.php\'>iFixPng</a> підключає прозорість png файлів в браузерах  MSIE 5 і 6.',
	'choix_non' => 'Відключити: не додавати iepngfix на сайт',
	'choix_titre' => 'Сумісність з Internet Explorer (iepngfix)'
);
