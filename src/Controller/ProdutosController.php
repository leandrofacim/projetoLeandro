<?php
declare(strict_types=1);

namespace App\Controller;

class ProdutosController extends AppController
{
    public function index()
    {
        $produtos = $this->paginate($this->Produtos);

        $this->set(compact('produtos'));
    }

    public function view($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => [],
        ]);
        $this->set('produto', $produto);
    }

    public function add()
    {
        $produto = $this->Produtos->newEmptyEntity();
        if ($this->request->is('post')) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('Produto cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possivel cadastrar o produto com sucesso.'));
        }
        $this->set(compact('produto'));
    }

    public function edit($id = null)
    {
        $produto = $this->Produtos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $produto = $this->Produtos->patchEntity($produto, $this->request->getData());
            if ($this->Produtos->save($produto)) {
                $this->Flash->success(__('The produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The produto could not be saved. Please, try again.'));
        }
        $this->set(compact('produto'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $produto = $this->Produtos->get($id);
        if ($this->Produtos->delete($produto)) {
            $this->Flash->success(__('The produto has been deleted.'));
        } else {
            $this->Flash->error(__('The produto could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
