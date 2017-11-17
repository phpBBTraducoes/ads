<?php
/**
 *
 * Advertisement management. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 1.0.3] (https://github.com/phpBBTraducoes)
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
	'AD_NAME'	=> 'Nome',
	'AD_VIEWS'	=> 'Vistas',
	'AD_CLICKS'	=> 'Cliques',
	'NO_ADS'	=> '<strong>Nenhum anúncio para exibir. Os usuários que possuem anúncios exibidos neste fórum podem visualizar suas estatísticas aqui.</strong>',
));
