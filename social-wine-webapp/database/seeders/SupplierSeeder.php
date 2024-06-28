<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->delete();
        DB::table('suppliers')->insert([

            [
                'id' => '05321000100',
                'name' => 'Simone Casini',
                'vat' => 'ZX3665225596',
                'address' => 'via Don Dioli',
                'city' => 'Ferrara',
                'country' => 'Italia',
                'email' => 'Zixky.Romagna@nonaCaso.it',
                'password' => 'password',
                'born' => '1999-10-22',
                'postal_code' => '44123'
            ] ,    
            [
                'id' => '05321000622',
                'name' => 'Michele Casini',
                'vat' => 'MC3791227061',
                'address' => 'via Don Dioli',
                'city' => 'Ferrara',
                'country' => 'Italia',
                'email' => 'NonaCaso@nonaCaso.it',
                'password' => 'password',
                'born' => '1997-01-22',
                'postal_code' => '44123'
            ]  ,    
            [
                'id' => '876234053293',
                'name' => 'Enoteca Tagliatti',
                'vat' => 'TG739821174',
                'address' => 'via Ravenna',
                'city' => 'Ferrara',
                'country' => 'Italia',
                'email' => 'enoteca.tagliatti@hotmail.com',
                'password' => 'password',
                'born' => '1998-05-30',
                'postal_code' => '44124'
            ]  ,    
            [
                'id' => '38922554653',
                'name' => 'Antica Maremma',
                'vat' => 'AM7894362719',
                'address' => 'via Saraceno',
                'city' => 'Ferrara',
                'country' => 'Italia',
                'email' => 'antica.maremma@nonaCaso.it',
                'password' => 'maremma',
                'born' => '1989-02-13',
                'postal_code' => '44121'
            ]  ,    
            [
                'id' => '25738496561',
                'name' => 'Aldo Elia',
                'vat' => 'AE382901835',
                'address' => 'via crispo',
                'city' => 'Portomaggione',
                'country' => 'Italia',
                'email' => 'trallati.winety@outlook.com',
                'password' => 'password',
                'born' => '1967-07-18',
                'postal_code' => '44015'
            ] 
            ]);    }
}
