<?php

namespace App\Models;

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Database\Config;

class LigneBonLivraisonModelTest extends CIUnitTestCase
{
    protected $model;

    protected function setUp(): void
    {
        parent::setUp();
        $this->model = new LigneBonLivraisonModel();
    }

    public function testCreateLigneBonLivraison()
    {
        $data = [
            'libelle' => 'Test Libelle',
            'qte' => 10,
        ];

        $result = $this->model->save($data);
        $this->assertTrue($result);
    }

    public function testValidation()
    {
        $data = [
            'libelle' => '',
            'qte' => 'not_a_number',
        ];

        $this->assertFalse($this->model->save($data));
    }
}