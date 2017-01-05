<?php
namespace App\Controller;

use App\Controller\AppController;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());

			}else{
					$this->Flash->error('Datos invalidos por favor intente nuevamente', ['key' => 'auth']);

			}
		}
	}
	public function index()
	{
		//$users = $this->Users->find('all'); mostrar todos los resultados
		$users = $this->paginate($this->Users); //paginar
		$this->set('users', $users);
	}
	public function view($usuario) //recibir parametros
	{
		echo "detalles de usuarios ".$usuario;
		exit();
	}
	public function add()
	{
		$user = $this->Users->newEntity();
		if ($this->request->is('post')) 
		{
			// debuguear datps debug($this->request->data);	
			$user = $this->Users->patchEntity($user,$this->request->data);

			if ($this->Users->save($user)) {
				$this->Flash->success('El usuario ha sido creado correctamente');
				return $this->redirect(['controller' => 'Users', 'action' => 'index']);
			}else{
			    $this->Flash->error('El usuario no pudo ser creado. Por favor, intente nuevamente.');
				
			}
		}
		$this->set(compact('user'));
	}
	public function edit($usuario)
	{
		echo "editar usuario ".$usuario;
		exit();
	}
	public function delete($usuario)
	{
		echo "borrar usuario ".$usuario;
		exit();
	}

}
