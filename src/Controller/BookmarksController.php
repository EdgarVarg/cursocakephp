<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Bookmarks Controller
 *
 * @property \App\Model\Table\BookmarksTable $Bookmarks
 */
class BookmarksController extends AppController
{
	public function index()
	{
		$bookmarks = $this->paginate($this->Bookmarks); //paginar
		$this->set('bookmarks', $bookmarks);
	}
}
