<?php

namespace App\Controller\Admin;

use App\Controller\Admin\AppController;
use Cake\Event\EventInterface;

class ToursController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('tours');
    }

    public function index()
    {
    }

    public function add()
    {
        $tour = $this->Tours->newEmptyEntity();
        if ($this->request->is('post')) {
            $tour = $this->Tours->patchEntity($tour, $this->request->getData());
            if ($this->Tours->save($tour)) {
                $this->Flash->success(__('The tour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tour could not be saved. Please, try again.'));
        }
        $this->set(compact('tour'));
    }

    public function add2()
    {
        // $tour = $this->Tours->newEmptyEntity();
        // if ($this->request->is('post')) {
        //     $tour = $this->Tours->patchEntity($tour, $this->request->getData());
        //     if ($this->Tours->save($tour)) {
        //         $this->Flash->success(__('The user has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The user could not be saved. Please, try again.'));
        // }
        // $this->set(compact('tour'));
    }

    public function settings()
    {
    }
}
