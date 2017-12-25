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
	'AD_NAME'	    => 'Nome',
	'AD_END_DATE'	=> 'Data final',
	'AD_VIEWS'	    => 'Visualizações',
	'AD_CLICKS'	    => 'Cliques',
	'AD_STATUS'		=> 'Status',
	'EXPIRED'		=> 'Expirou',
	'ACTIVE_ADS'	=> 'Anúncios ativos',
	'EXPIRED_ADS'	=> 'Anúncios expirados',
	'NO_ADS'	    => '<strong>Você não possui anúncios exibidos neste fórum.</strong>',
));
