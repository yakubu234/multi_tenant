<?php

namespace Database\Seeders;

use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tenant1 = Tenant::create(['id' => 'foo']);
        $tenant1->domains()->create(['domain' => 'foo.sample.test']);

        $tenant2 = Tenant::create(['id' => 'bar']);
        $tenant2->domains()->create(['domain' => 'bar.sample.test']);

        Tenant::all()->each(function ($tenant) {
            $tenant->run(function () {
                User::factory()->create();
            });
        });

    }
}
