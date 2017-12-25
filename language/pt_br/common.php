<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.4] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2017 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ADBLOCKER_TITLE'	=> 'Bloqueador de anúncios detectado',
	'ADBLOCKER_MESSAGE'	=> 'Nosso site é possível através da exibição de anúncios online para nossos visitantes. Considere nos apoiar desabilitando seu bloqueador de anúncios em nosso site.',

	'ADVERTISEMENT'		=> 'Anúncio',
	'HIDE_AD'			=> 'Ocultar anúncio',
));
