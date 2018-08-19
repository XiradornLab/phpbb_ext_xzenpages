<?php
/**
 *
 * PageDemo. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Sir Xiradorn, http://xiradorn.it
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace xiradorn\xzenpages\controller;

/**
 * PageDemo main controller.
 */
class main
{
	/* @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config		$config
	 * @param \phpbb\controller\helper	$helper
	 * @param \phpbb\template\template	$template
	 * @param \phpbb\user				$user
	 */
	public function __construct(
		\phpbb\config\config $config, 
		\phpbb\controller\helper $helper, 
		\phpbb\template\template $template, 
		\phpbb\user $user
	)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	 * Demo controller for route /demo/{vars}
	 *
	 * @param string $vars
	 *
	 * @return \Symfony\Component\HttpFoundation\Response A Symfony Response object
	 */
	public function handle($vars)
	{
		$this->template->assign_vars(array(
			'XZP_DEMO_MESSAGE' 	=> $this->user->lang('XZP_PAGE_SAYHITO', $vars),
			'XZP_DEMO_USER' 	=> $this->user->data['username'],
		));

		return $this->helper->render('xzp_page_body.html', $vars);
	}
}
