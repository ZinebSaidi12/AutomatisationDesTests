<?php

namespace App\Models;

use CodeIgniter\Model;

class LigneBonLivraisonModel extends Model
{
    protected $table = 'LigneBonLivraison';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'libelle', 'qte'];

    protected $validationRules = [
        'libelle' => 'required|min_length[3]|max_length[255]',
        'qte' => 'required|integer',
    ];
}
