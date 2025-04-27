<?php

namespace App\Controllers;

use App\Models\LigneBonLivraisonModel;

class LigneBonLivraisonController extends BaseController
{
    public function index()
    {
        $model = new LigneBonLivraisonModel();
        $data['items'] = $model->findAll();
        
        return view('ligne_bon_livraison/index', $data);
    }

    public function create()
    {
        return view('ligne_bon_livraison/create');
    }

    public function store()
    {
        $model = new LigneBonLivraisonModel();

        $data = [
            'libelle' => $this->request->getPost('libelle'),
            'qte' => $this->request->getPost('qte')
        ];

        if ($model->save($data)) {
            return redirect()->to('/ligne_bon_livraison');
        }

        return view('ligne_bon_livraison/create', ['errors' => $model->errors()]);
    }
}