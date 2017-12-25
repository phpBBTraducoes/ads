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
	'ACP_PHPBB_ADS_TITLE'	=> 'Gerenciador de Anúncios',
	'ACP_MANAGE_ADS_TITLE'		=> 'Gerenciar anúncio',
	'ACP_ADS_SETTINGS_TITLE'	=> 'Configurações',

	'ACP_PHPBB_ADS_ADD_LOG'		=> '<strong>Anúncio adicionado</strong><br />» %s',
	'ACP_PHPBB_ADS_EDIT_LOG'		=> '<strong>Anúncio editado</strong><br />» %s',
	'ACP_PHPBB_ADS_DELETE_LOG'	=> '<strong>Anúncio deletado</strong><br />» %s',
));
