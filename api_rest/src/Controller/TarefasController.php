<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Tarefas Controller
 *
 * @property \App\Model\Table\TarefasTable $Tarefas
 *
 * @method \App\Model\Entity\Tarefa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TarefasController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->loadModel('Tarefas');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        //$tarefas = $this->Tarefas->find("all");
        $tarefas = $this->Tarefas->find('all', array(
            'order' => 'prioridade'
        ));
        $this->set(compact($tarefas, 'tarefas'));
        /* $response = $this->response
          ->withType('application/json')
          ->withStatus(200)
          ->withStringBody(json_encode($tarefas));
          return $response; */
    }

    /**
     * View method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $tarefa = $this->Tarefas
                ->find('all')
                ->where(['id' => $id])
                ->toArray();


        if ($tarefa) {
            return $this->response
                            ->withStatus(200)
                            ->withType('application/json')
                            ->withStringBody(json_encode($tarefa));
        } else {
            return $this->response
                            ->withStatus(404)
                            ->withType('application/json')
                            ->withStringBody(json_encode(['msg  ' => 'nenhum registro encontrado']));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $tarefa = $this->Tarefas->newEntity();
        if ($this->request->is(['ajax', 'post', 'patch'])) {
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                return $this->response
                                ->withStatus(200)
                                ->withType('application/json')
                                ->withStringBody(json_encode(['msg  ' => 'tarefa salva com sucesso']));
            }
            $this->Flash->error(__('The tarefa could not be saved. Please, try again.'));
            return $this->response
                            ->withStatus(400)
                            ->withType('application/json')
                            ->withStringBody(json_encode(['msg  ' => 'Não foi possivel salvar sua tarefa']));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        if ($this->request->is(['patch', 'post', 'put', 'ajax'])) {
            $tarefa = $this->Tarefas
                    ->find('all')
                    ->where(['id' => $id])
                    ->first();
            $tarefa = $this->Tarefas->patchEntity($tarefa, $this->request->getData());
            if ($this->Tarefas->save($tarefa)) {
                return $this->response
                                ->withStatus(200)
                                ->withType('application/json')
                                ->withStringBody(json_encode(['msg  ' => 'tarefa atualizada com sucesso']));
            }
            return $this->response
                            ->withStatus(400)
                            ->withType('application/json')
                            ->withStringBody(json_encode(['msg  ' => 'Não foi possivel modificar sua tarefa']));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Tarefa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $tarefa = $this->Tarefas
                ->find('all')
                ->where(['id' => $id])
                ->first();
        if ($tarefa) {
            if ($this->Tarefas->delete($tarefa)) {
                return $this->response
                                ->withStatus(200)
                                ->withType('application/json')
                                ->withStringBody(json_encode(['msg  ' => 'tarefa excluída com sucesso']));
            } else {
                return $this->response
                                ->withStatus(400)
                                ->withType('application/json')
                                ->withStringBody(json_encode(['msg  ' => 'Não foi possivel excluir sua tarefa']));
            }
        } else {
            return $this->response
                            ->withStatus(400)
                            ->withType('application/json')
                            ->withStringBody(json_encode(['msg  ' => 'Não foi possivel excluir sua tarefa, pois não há tarefa com esse parametro']));
        }
    }

    public function teste() {
        $this->request->allowMethod('get');
        echo "é isso ai";
    }

}
