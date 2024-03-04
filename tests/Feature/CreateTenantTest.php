<?php

namespace Tests\Feature;

use App\Models\Tenant;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateTenantTest extends TestCase
{
    use RefreshDatabase;

    protected $tenancy = false;

    public function setUp(): void
    {
        parent::setUp();

        if ($this->tenancy) {
            $this->initializeTenancy();
        }
    }

    public function initializeTenancy()
    {
        $tenant = Tenant::create();

        tenancy()->initialize($tenant);
    }

    /**
     * A basic feature test example.
     */
    public function test_can_create_new_tenant()
    {
        $tenantId = 'test_tenant';
        $this->post('/api/create-tenant', ['id' => $tenantId])
             ->assertStatus(201);

        $this->assertDatabaseHas('tenants', ['id' => $tenantId]);
    }
}
