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
        $this->set("title_for_layout", "Crianças"); //Titulo da Página
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
        $this->set("title_for_layout", "Visualizar Criança"); //Titulo da Página
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
            $crianca->nome = ucfirst($crianca->nome);
            $crianca->sobrenome = ucfirst($crianca->sobrenome);
            $file = $this->request->getData("carta");

            $valid_extensions = array("image/png", "image/jpeg", "image/jpg");
            if (!in_array($file->getClientMediaType(), $valid_extensions)) {
                $this->Flash->warning(__('Apenas arquivos JPEG ou PNG são permitdos.'));
                return $this->redirect($this->referer());
            }
            if ($file->getSize() > (1024*1024*2)) {
                $img_size = intdiv($file->getSize(), 1024);
                $this->Flash->warning(__("Sua foto tem $img_size KB. A foto deverá ser menor que 2.096 KB."));
                return $this->redirect($this->referer());
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
        $this->set("title_for_layout", "Adicionar Criança"); //Titulo da Página
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
        $crianca = $this->Criancas->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $crianca = $this->Criancas->patchEntity($crianca, $this->request->getData());
            $crianca->nome = ucfirst($crianca->nome);
            $crianca->sobrenome = ucfirst($crianca->sobrenome);
            if ($this->Criancas->save($crianca)) {
                $this->Flash->success(__('A criança foi alterada.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }
        $this->set(compact('crianca'));
        $this->set("title_for_layout", "Editar Criança"); //Titulo da Página
    }

    public function carta($id = null)
    {
        $crianca = $this->Criancas->get($id, [
            'contain' => [],
        ]);
        if (!isset($crianca->carta)) {
            $cartinha = WWW_ROOT . $crianca->carta;
            debug($crianca->carta);exit;
        }
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
                if (isset($cartinha)) { unlink($cartinha); } 
                $this->Flash->success(__('A criança foi alterada.'));
                $path = WWW_ROOT . 'cartas' . DS . $crianca->nome . '-' . $crianca->sobrenome . '-' . $hash . '.' . $ext;
                $file->moveTo($path);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
        }
        $this->set(compact('crianca'));
        $this->set("title_for_layout", "Atualizar Cartinha"); //Titulo da Página
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
