<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            ['name' => 'Xiomara Jiménez Velázquez', 'phoneNumber' => '123456789', 'email' => 'xiomara@xiomi.com'],
            ['name' => 'Alejandro Peñate Espino', 'phoneNumber' => '789456123', 'email' => 'alejandro@ale.es'],
            ['name' => 'Andres Juez Suarez', 'phoneNumber' => '555123456', 'email' => 'andres@andresito.es'],
            ['name' => 'Estrella Velázquez del Pino', 'phoneNumber' => '555456789', 'email' => 'estrellita@estrella.com']
        ]);
    }
}
