<?php 

namespace Nde;

use Rain\Tpl;

class PageAdmin extends Page {

	public function __construct($opts = array(), $tpl_dir = "/NDE/views/admin/")
	{
		parent::__construct($opts, $tpl_dir);
	}

}