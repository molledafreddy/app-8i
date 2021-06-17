<?php

namespace Tests\Unit\Http\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\ProductController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductControllerUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->controller = new ProductController;

        $this->requestSearch = new Request(
            [
                'type'          => 'DESC',
                'perPage'       => 10,
                'orderBy'       => 'id',
                'search'        => '',
            ]
        );

        \App\Models\Category::factory(4)->create();
        \App\Models\Product::factory(10)->create();
        \App\Models\CategoryProduct::factory(10)->create();

    }//end setUp()

    public function testIndexAllValuesSuccess()
    {
        $response = $this->controller->index($this->requestSearch);
        $this->assertEquals(200, $response->getStatusCode());

    }//end testIndexAllValuesSuccess()

    public function testIndexAllParametersSearchNameProductSuccess()
    {
        $product = Product::first();
        $this->requestSearch['search'] = $product->categories[0]->name;
        $response = $this->controller->index($this->requestSearch);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($product->categories[0]->name, json_decode($response->getContent())->data->data[0]->categories[0]->name);
        
    }//end testIndexAllParametersSearchNameProductSuccess()

    public function testIndexAllParametersShowSuccess()
    {
        $product = Product::first();
        $response = $this->controller->show($product->id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($product->name, json_decode($response->getContent())->data->name);
        
    }//end testIndexAllParametersShowSuccess()
}
