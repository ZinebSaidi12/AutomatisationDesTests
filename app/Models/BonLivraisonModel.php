<?php

namespace App\Models;

use CodeIgniter\Model;

class BonLivraisonModel extends Model
{
    protected $table = 'BonLivraison';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'numero_bl',
        'date_bl',
        'client_id'
    ];

    protected $useTimestamps = false;
}
