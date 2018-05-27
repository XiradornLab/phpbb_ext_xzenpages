<?php
/**
 *
 * PageDemo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Sir Xiradorn, http://xiradorn.it
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
	'XZP_PAGE'						=> 'xZenPages',

	'XZP_PAGE_SAYHITO'			=> 'Good day %s',

	'VIEWING_XZP_DEMO'				=> 'Viewing xZenPages Demo',
));
