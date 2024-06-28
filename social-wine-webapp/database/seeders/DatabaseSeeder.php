<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->delete();
        DB::table('users')->delete();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('pwd-admin')
        ]);
        User::factory()->create([
            'name' => 'winery',
            'email' => 'winery@example.com',
            'password' => bcrypt('pwd-winery'),
            'vat' => 'vatvatvat',
            'address' => 'address'
        ]);
        User::factory()->create([
            'name' => 'supplier',
            'email' => 'sellet@example.com',
            'password' => bcrypt('pwd-supplier'),
            'vat' => 'vatvatvat',
            'address' => 'address'
        ]);
        User::factory()->create([
            'name' => 'winery-supplier',
            'email' => 'winery-supplier@example.com',
            'password' => bcrypt('pwd-winery-supplier'),
            'vat' => 'vatvatvat',
            'address' => 'address'
        ]);
        User::factory()->create([
            'name' => 'name',
            'surname' => 'surname',
            'email' => 'user@example.com',
            'password' => bcrypt('pwd-user')
        ]);

        $admin = User::where('name', 'admin')->first();
        $winery = User::where('name', 'winery')->first();
        $supplier = User::where('name', 'supplier')->first();
        $winery_supplier = User::where('name', 'winery-supplier')->first();
        $user = User::where('name', 'name')->first();

        DB::table('roles')->insert([
            'user_id' => $admin->id,
            'role' => 'admin'
        ]);
        DB::table('roles')->insert([
            'user_id' => $winery->id,
            'role' => 'winery'
        ]);
        DB::table('roles')->insert([
            'user_id' => $supplier->id,
            'role' => 'supplier'
        ]);
        DB::table('roles')->insert([
            'user_id' => $winery_supplier->id,
            'role' => 'winery'
        ]);
        DB::table('roles')->insert([
            'user_id' => $winery_supplier->id,
            'role' => 'supplier'
        ]);
        DB::table('roles')->insert([
            'user_id' => $user->id,
            'role' => 'user'
        ]);
    }
}
