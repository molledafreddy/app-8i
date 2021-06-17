<?php

namespace Tests\Unit\Http\Controller;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\OrderController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderControllerUnitTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->controller = new OrderController;

        $this->requestSearch = new Request(
            [
                'type'          => 'DESC',
                'perPage'       => 10,
                'orderBy'       => 'id',
                'search'        => '',
            ]
        );
        \App\Models\OrderProduct::factory(10)->create();
        \App\Models\ShippingAddress::factory()->count(10)->create();
        
    }//end setUp()

    public function testIndexAllValuesSuccess()
    {
        $response = $this->controller->index($this->requestSearch);
        $this->assertEquals(200, $response->getStatusCode());

    }//end testIndexAllValuesSuccess()

    public function testIndexAllParametersSearchNameUserSuccess()
    {
        $order = Order::first();
        $this->requestSearch['search'] = $order->user->name;
        $response = $this->controller->index($this->requestSearch);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($order->user->name, json_decode($response->getContent())->data->data[0]->user->name);
        
    }//end testIndexAllParametersSearchNameUserSuccess()

    public function testIndexAllParametersShowSuccess()
    {
        $order = Order::first();
        $response = $this->controller->show($order->id);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals($order->description, json_decode($response->getContent())->data->description);
        
    }//end testIndexAllParametersShowSuccess()
}
