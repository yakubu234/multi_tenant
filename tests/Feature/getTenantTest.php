<?php

namespace Tests\Feature;

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class getTenantTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function it_can_retrieve_single_tenant()
    {
        Tenant::factory()->count(3)->create(); 

        $response = $this->get('/api/single-tenant');
        $response->assertJsonStructure(['message']);
        $response->assertStatus(200); 
    }
}
