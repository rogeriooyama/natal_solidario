<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Criancas Controller
 *
 * @property \App\Model\Table\CriancasTable $Criancas
 * @method \App\Model\Entity\Crianca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CriancasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = ['order' => ['status' => 'desc', 'nome' => 'asc']];
        $criancas = $this->paginate($this->Criancas);

        $this->set(compact('criancas'));
    }

    /**
     * View method
     *
     * @param string|null $id Crianca id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $crianca = $this->Criancas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('crianca'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $crianca = $this->Criancas->newEmptyEntity();
        if ($this->request->is('post')) {
            $crianca = $this->Criancas->patchEntity($crianca, $this->request->getData());
            if ($this->Criancas->save($crianca)) {
                $this->Flash->success(__('A criança foi cadastrada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }
        $this->set(compact('crianca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Crianca id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $crianca = $this->Criancas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crianca = $this->Criancas->patchEntity($crianca, $this->request->getData());
            if ($this->Criancas->save($crianca)) {
                $this->Flash->success(__('A criança foi alterada.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }
        $this->set(compact('crianca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Crianca id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $crianca = $this->Criancas->get($id);
        if ($this->Criancas->delete($crianca)) {
            $this->Flash->success(__('A criança foi excluída.'));
        } else {
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
