<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setlayout('adminlte');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set("title_for_layout", "Administradores"); //Titulo da Página
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
        $this->set("title_for_layout", "Visualizar administrador"); //Titulo da Página
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $user->nome = mb_strtolower($user->nome);
            $user->sobrenome = mb_strtolower($user->sobrenome);
            $user->nome = ucfirst($user->nome);
            $user->sobrenome = ucfirst($user->sobrenome);
            $user->username = mb_strtolower($user->username);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O administrador foi cadastrado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }
        $this->set(compact('user'));
        $this->set("title_for_layout", "Novo Administrador"); //Titulo da Página
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());       
            $user->nome = mb_strtolower($user->nome);
            $user->sobrenome = mb_strtolower($user->sobrenome);     
            $user->nome = ucfirst($user->nome);
            $user->sobrenome = ucfirst($user->sobrenome);
            $user->username = mb_strtolower($user->username);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O administrador foi alterado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }
        $this->set(compact('user'));
        $this->set("title_for_layout", "Editar Administrador"); //Titulo da Página
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('O administrador foi excluído.'));
        } else {
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function login()
    {
        $this->viewBuilder()->setlayout('login_layout');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Flash->error(__('Nome de usuário ou senha está incorreto'));
            }
        }
        $this->set("title_for_layout", "Login"); //Titulo da Página
    }

    public function logout()
    {
        $this->Flash->success('Você foi desconectado do sistema.');
        return $this->redirect($this->Auth->logout());
    }

    public function manual()
    {
    }
}
