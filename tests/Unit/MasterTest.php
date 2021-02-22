<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\Master;

class MasterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_list_of_color()
    {
        $master = new Master();
        $response = $master->ejecutar('rojo','azul','verde','morado');
        $this->assertEquals("2 Cantidad de negras 2 cantidad de blancas", $response);
    }
  
}
