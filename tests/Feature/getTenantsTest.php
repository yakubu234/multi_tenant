<?php

namespace Tests\Feature;

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class getTenantsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function it_can_retrieve_all_tenants()
    {
        Tenant::factory()->count(3)->create(); 

        $response = $this->get('/api/all-tenants');
        $response->assertJsonStructure(['message']);
        $response->assertStatus(200); 
    }
}
