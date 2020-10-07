<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->Auth->allow(['index', 'adotar', 'confirmacao']);
    }

    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    public function index()
    {
        $this->viewBuilder()->setlayout('bootstrap');
        $this->loadModel('Criancas');
        $criancas = $this->Criancas->find('all')->toArray();
        $totalcriancas = count($criancas);
        $aguardando = count($this->Criancas->find('all',['conditions' => ['status =' => '0']])->toArray());
        $numpresenteadas = count($this->Criancas->find('all',['conditions' => ['status !=' => '0']])->toArray());
        $numfake = 0;
        
        $fake[0]['nome'] = 'Roberta';
        $fake[0]['idade'] = '12';
        $fake[0]['sexo'] = 'Feminino';
        $fake[0]['status'] = '2';

        $fake[1]['nome'] = 'Pedro';
        $fake[1]['idade'] = '9';
        $fake[1]['sexo'] = 'Masculino';
        $fake[1]['status'] = '2';

        $fake[2]['nome'] = 'Ana';
        $fake[2]['idade'] = '11';
        $fake[2]['sexo'] = 'Feminino';
        $fake[2]['status'] = '2';

        $fake[3]['nome'] = 'Ricardo';
        $fake[3]['idade'] = '11';
        $fake[3]['sexo'] = 'Masculino';
        $fake[3]['status'] = '2';

        $fake[4]['nome'] = 'Paula';
        $fake[4]['idade'] = '11';
        $fake[4]['sexo'] = 'Feminino';
        $fake[4]['status'] = '2';

        $fake[5]['nome'] = 'Paulo';
        $fake[5]['idade'] = '11';
        $fake[5]['sexo'] = 'Masculino';
        $fake[5]['status'] = '2';

        $fake[6]['nome'] = 'Aline';
        $fake[6]['idade'] = '11';
        $fake[6]['sexo'] = 'Feminino';
        $fake[6]['status'] = '2';

        $fake[7]['nome'] = 'Jose';
        $fake[7]['idade'] = '11';
        $fake[7]['sexo'] = 'Masculino';
        $fake[7]['status'] = '2';

        $fake[8]['nome'] = 'Manuela';
        $fake[8]['idade'] = '11';
        $fake[8]['sexo'] = 'Feminino';
        $fake[8]['status'] = '2';

        $fake[9]['nome'] = 'Henrique';
        $fake[9]['idade'] = '11';
        $fake[9]['sexo'] = 'Masculino';
        $fake[9]['status'] = '2';

        $fake[10]['nome'] = 'Júlia';
        $fake[10]['idade'] = '11';
        $fake[10]['sexo'] = 'Feminino';
        $fake[10]['status'] = '2';

        $fake[11]['nome'] = 'Luis';
        $fake[11]['idade'] = '11';
        $fake[11]['sexo'] = 'Masculino';
        $fake[11]['status'] = '2';

        $fake[12]['nome'] = 'Flávia';
        $fake[12]['idade'] = '11';
        $fake[12]['sexo'] = 'Feminino';
        $fake[12]['status'] = '2';

        $fake[13]['nome'] = 'Fernando';
        $fake[13]['idade'] = '11';
        $fake[13]['sexo'] = 'Masculino';
        $fake[13]['status'] = '2';

        $fake[14]['nome'] = 'Alice';
        $fake[14]['idade'] = '11';
        $fake[14]['sexo'] = 'Feminino';
        $fake[14]['status'] = '2';

        $fake[15]['nome'] = 'Lucas';
        $fake[15]['idade'] = '11';
        $fake[15]['sexo'] = 'Masculino';
        $fake[15]['status'] = '2';

        $fake[16]['nome'] = 'Gabriela';
        $fake[16]['idade'] = '11';
        $fake[16]['sexo'] = 'Feminino';
        $fake[16]['status'] = '2';

        $fake[17]['nome'] = 'Eduardo';
        $fake[17]['idade'] = '11';
        $fake[17]['sexo'] = 'Masculino';
        $fake[17]['status'] = '2';

        $fake[18]['nome'] = 'Larissa';
        $fake[18]['idade'] = '11';
        $fake[18]['sexo'] = 'Feminino';
        $fake[18]['status'] = '2';

        $fake[19]['nome'] = 'Otávio';
        $fake[19]['idade'] = '11';
        $fake[19]['sexo'] = 'Masculino';
        $fake[19]['status'] = '2';

        shuffle($fake);
        shuffle($criancas);
        //Verifica se existe ao menos 20 crianças, preenche o resto com fakes
        if(count($criancas) < 20) {
            for($i=0;$i<20;$i++) {
                if(!isset($criancas[$i])) {
                    $criancas[$i] = $fake[$i];
                    $numfake++;
                }
            }
        }
        else {
            //Verifica o número de crianças já presenteadas e armazena o índice dessas crianças
            for($i=0,$j=0,$k=0;$i<count($criancas);$i++) {
                if($criancas[$i]['status'] != 0) {
                  $presenteadas[$j] = $i;
                  $j++;
                }
                //Verifica o número de crianças não presenteadas e armazena o índice dessas crianças
                else if($criancas[$i]['status'] == 0) {
                  $npresenteadas[$k] = $i;
                  $k++;
                }
            }
            //Preenche array auxiliar com 15 posições ou até número de crianças não presenteadas (o que for menor)
            for($i=0,$cont=0;$cont<min($k,15);$cont++) {
                $ind = $npresenteadas[$cont];
                $aux[$cont] = $criancas[$ind];
            }
            //Preenche o resto das posições do array com crianças já presenteadas ou fake, se necessário
            for($i=0;$cont<20;$cont++,$i++) {
                if(!isset($presenteadas[$i])) {
                    $aux[$cont] = $fake[$cont];
                    $numfake++;
                }
                else {
                    $ind = $presenteadas[$i];
                    $aux[$cont] = $criancas[$ind];
                }
            }
            shuffle($aux);
            $criancas = $aux;
        }
        $totalcriancas += 5;
        $numpresenteadas += 5;
        $this->set(compact('criancas','fake','totalcriancas','aguardando','numpresenteadas'));
    }
    
    public function adotar($id = null)
    {
        $this->viewBuilder()->setlayout('bootstrap');
        $this->loadModel('Criancas');
        $crianca = $this->Criancas->get($id);
        if($crianca['status'] != 0) {
            return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            if (isset($_POST['g-recaptcha-response'])) {
                $captcha_data = $_POST['g-recaptcha-response'];
            }
            
            // Se nenhum valor foi recebido, o usuário não realizou o captcha
            if (!$captcha_data) {
                $this->Flash->error(__('Por favor, confirme o captcha.'));
                return $this->redirect(['action' => 'adotar', $id]);
            }
            else {
                $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);
            }
            // debug($resposta);exit;
            if ($resposta.success) {
                $crianca = $this->Criancas->patchEntity($crianca, $this->request->getData());
                $crianca['status'] = 1;
                $crianca['email_padrinho'] = strtolower($this->request->getData('email_padrinho'));
                if ($this->Criancas->save($crianca)) {
                    //$this->Flash->success(__('Obrigado!'));
                    return $this->redirect(['action' => 'confirmacao']);
                }
                $this->Flash->error(__('Ocorreu um erro. Tente novamente.'));
            }
        }
        $this->set(compact('crianca'));
    }

    public function confirmacao()
    {
        $this->viewBuilder()->setlayout('bootstrap');
    }
}
