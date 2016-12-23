<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tests Controller
 *
 * @property \App\Model\Table\TestsTable $Tests
 */
class TestsController extends AppController
{
	public function index()
	{
		$this->set('tests');
	}
}
