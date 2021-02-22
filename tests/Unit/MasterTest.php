<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MasterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_list_of_color()
    {
           $response = $this->get('api/probar');
            $response->assertOk();
    }

  
}
