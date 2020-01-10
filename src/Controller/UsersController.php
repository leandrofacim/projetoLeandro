<?php

declare(strict_types=1);

namespace App\Controller;

class UsersController extends AppController
{

    public function index()
    {
        $users = $this->paginate($this->Users);
        // $this->Auth->allow(['login', 'logout']);
        $this->set(compact('users', $this->Users->find('all')));
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        $this->set('user', $user);
    }

    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro não foi possivel cadastrador usuário.'));
        }
        $this->set(compact('user'));
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuário editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Erro não foi possivel editar usuário.'));
        }
        $this->set(compact('user'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('Usuário deletado com sucesso.'));
        } else {
            $this->Flash->error(__('Erro não foi possivel deletardo  usuário.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    // public function login()
    // {
    //     if ($this->request->is('post')) {
    //         $user = $this->Auth->identify();
    //         if ($user) {
    //             $this->Auth->setUser($user);
    //             return $this->redirect($this->Auth->redirectUrl());
    //         } else {
    //             $this->Flash->error(__('Usuário ou senha incorretos.'));
    //         }
    //     }
    // }

    // public function logout()
    // {
    //     return $this->redirect($this->Auth->logout());
    // }
}
