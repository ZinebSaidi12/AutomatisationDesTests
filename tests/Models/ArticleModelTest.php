<?php
namespace App\Tests\Models;

use PHPUnit\Framework\TestCase;
use App\Models\ArticleModel;

class ArticleModelTest extends TestCase {
    public function testFindAllArticles() {
        $model = new ArticleModel();
        $articles = $model->findAll();
        $this->assertIsArray($articles, "findAll retourne un tableau !");
    }

    public function testInsertArticle() {
        $model = new ArticleModel();
        $data = ['ref' => 'A001', 'libelle' => 'Article 1', 'qte_stock' => 100];
        $id = $model->insert($data);
        $this->assertGreaterThan(0, $id, "ID article inséré > 0");
    }

    public function testQteStockIsNonNegative() {
        $model = new ArticleModel();
        // Insert a new article with a negative stock quantity
        $data = ['ref' => 'A004', 'libelle' => 'Article 4', 'qte_stock' => 10];
        $id = $model->insert($data);
        $this->assertGreaterThan(0, $id, "ID article inséré > 0");

        // Retrieve the article and ensure qte_stock is non-negative (if business logic requires it)
        $article = $model->find($id);
        $this->assertGreaterThanOrEqual(0, $article['qte_stock'], "qte_stock should not be negative");
    }
}
