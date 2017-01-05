<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Test2 Controller
 *
 * @property \App\Model\Table\Test2Table $Test2
 */
class Test2Controller extends AppController
{
	public function index()
	{
		$this->set('test2');
	}
}
