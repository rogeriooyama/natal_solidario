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
        $this->paginate = ['order' => ['status' => 'desc', 'nome' => 'asc'], 'limit' => 5,];
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
            $file = $this->request->getData("carta");
            $valid_extensions = array("image/png", "image/jpeg", "image/jpg");
            if (!in_array($file->getClientMediaType(), $valid_extensions)) {
                $this->Flash->warning(__('Apenas arquivos JPEG ou PNG são permitdos.'));
                return $this->redirect(['action' => 'add']);
            }
            $ext = pathinfo($file->getClientFilename(), PATHINFO_EXTENSION);
            $hash = md5(uniqid((string)time()));
            $crianca['carta'] = '/cartas/' . $crianca->nome . '-' . $crianca->sobrenome . '-' . $hash . '.' . $ext;
            if ($this->Criancas->save($crianca)) {
                $this->Flash->success(__('A criança foi cadastrada.'));
                $path = WWW_ROOT . 'cartas' . DS . $crianca->nome . '-' . $crianca->sobrenome . '-' . $hash . '.' . $ext;
                $file->moveTo($path);
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
            $file = $this->request->getData("carta");
            $valid_extensions = array("image/png", "image/jpeg", "image/jpg");
            if (!in_array($file->getClientMediaType(), $valid_extensions)) {
                $this->Flash->warning(__('Apenas arquivos JPEG ou PNG são permitdos.'));
                return $this->redirect(['action' => 'add']);
            }
            $ext = pathinfo($file->getClientFilename(), PATHINFO_EXTENSION);
            $hash = md5(uniqid((string)time()));
            $crianca['carta'] = '/cartas/' . $crianca->nome . '-' . $crianca->sobrenome . '-' . $hash . '.' . $ext;
            if ($this->Criancas->save($crianca)) {
                $this->Flash->success(__('A criança foi alterada.'));
                $path = WWW_ROOT . 'cartas' . DS . $crianca->nome . '-' . $crianca->sobrenome . '-' . $hash . '.' . $ext;
                $file->moveTo($path);
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
