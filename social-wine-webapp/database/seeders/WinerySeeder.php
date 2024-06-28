<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WinerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cantinas')->delete();
        DB::table('cantinas')->insert([

            [
                'id' => '05321000100',
                'name' => 'Simone Casini',
                'telefono' => '3665225596',
                'via' => 'via Don Dioli',
                'city' => 'Ferrara',
                'email' => 'Zixky.Romagna@nonaCaso.it',
                'password' => 'password',
                'born' => '1999',
                'country' => 'Italia'
            ] ,
            [
                'id' => '05321000622',
                'name' => 'Michele Casini',
                'telefono' => '3791227061',
                'address' => 'via Don Dioli',
                'city' => 'Ferrara',
                'email' => 'NonaCaso@nonaCaso.it',
                'password' => 'NonaCaso97',
                'born' => '1997',
                'country' => 'Italia'
            ] ,
            [
                'id' => '053266618662',
                'name' => 'El Roy de Campeon',
                'phone' => '3665225596',
                'address' => 'via Coperta 22',
                'city' => 'Ferrara',
                'email' => 'Larry.Champagne@gmail.com',
                'password' => 'password',
                'born' => '1996',
                'country' => 'Italia'
            ] ,
            [
                'id' => '10093442899',
                'name' => 'Baileros Andante',
                'phone' => '3665225596',
                'address' => 'rue de Codols 8/a',
                'city' => 'Barcellona',
                'email' => 'Bailar.Shampoo@estudiantes.es',
                'password' => 'password',
                'born' => '1988',
                'country' => 'Spagna'
            ] ,
            [
                'id' => '13293442277',
                'name' => 'Pedro Porro',
                'phone' => '0034389455432',
                'address' => 'carrer de codols 18',
                'city' => 'Sillan',
                'email' => 'soccer.champagne@bbva.en',
                'password' => 'password',
                'born' => '1978',
                'country' => 'Austria'
            ] ,
            [
                'id' => '10083471898',
                'name' => 'Podere della Luna',
                'phone' => '0425104861',
                'address' => 'corso Magellano 80',
                'city' => 'Coneliano',
                'email' => 'info.poderedellaluna@libero.it',
                'password' => 'password',
                'born' => '1904',
                'country' => 'Italia'
            ],
            [
                'id' => '12312345643',
                'name' => 'Andrei Romanov',
                'phone' => '3459002135',
                'address' => 'vie Kantt 19',
                'city' => 'Lugano',
                'email' => 'shop.winery.bridge@hotmail.com',
                'password' => 'password',
                'born' => '1996',
                'country' => 'Svizzera'
            ] ,
            [
                'id' => '12439805672',
                'name' => 'Claudio & Co.',
                'phone' => '37214456266',
                'address' => 'via Luigi Borsari 22',
                'city' => 'Firenze',
                'email' => 'info.claudiowine@gmail.com',
                'password' => 'password',
                'born' => '1957',
                'country' => 'Italia'
            ] 
            ]);
    }
}
