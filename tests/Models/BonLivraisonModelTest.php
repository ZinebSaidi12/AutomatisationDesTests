<?php

namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\BonLivraisonModel;

class BonLivraisonModelTest extends TestCase
{
    public function testFindAllBonLivraison()
    {
        $model = new BonLivraisonModel();
        $bons = $model->findAll();

        $this->assertIsArray($bons, "findAll should return an array of bons de livraison.");
    }

    public function testInsertBonLivraison()
    {
        $model = new BonLivraisonModel();
        $data = [
            'numero_bl' => 'BLTEST001',
            'date_bl' => '2025-04-23',
            'client_id' => 1
        ];

        $id = $model->insert($data);
        $this->assertGreaterThan(0, $id, "Bon de livraison ID should be greater than 0.");
    }
}
