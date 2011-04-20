<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
* Content Module
*
* Displays single content item
*
* @author Electric Function, Inc.
* @copyright Electric Function, Inc.
* @package Electric Framework
*
*/

class Content extends Front_Controller {
	function __construct() {
		parent::__construct();
	}
	
	function view ($url_path) {
		// we may have a URL with "/" in it, so let's combine all the arguments into a URL string
		$args = func_get_args();
		$url_path = implode('/',$args);
		// end URL from arguments code
		
		$this->load->model('publish/content_model');
		
		$content_id = $this->content_model->get_content_id($url_path);
		
		if (empty($content_id)) {
			return show_404($url_path);
		}
		
		// administrators don't have to wait to see content
		$allow_future = ($this->user_model->logged_in() and $this->user_model->is_admin()) ? TRUE : FALSE;
		
		$content = $this->content_model->get_content($content_id, $allow_future);
		
		// does this content exist?
		if (empty($content)) {
			return show_404($url_path);
		}
		
		// do they have permissions to see content?
		if (!$this->user_model->in_group($content['privileges'])) {
			$this->load->helper('paywall/paywall');
			if (paywall($content, 'content') !== FALSE) {
				die();
			}
		}
		
		// show content
		$this->smarty->assign($content);
		return $this->smarty->display($content['template']);
	}
}