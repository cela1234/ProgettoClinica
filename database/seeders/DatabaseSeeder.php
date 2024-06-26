<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Provider\Lorem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            ['id' => 1,'username' => 'pazipazi', 'password' => Hash::make('test'), 'name' => 'Paziente', 'dataDiNascita' => '2000-05-12', 'tipoAccount' => 1,'role'=>'paziente',],
            ['id' => 2,'username' => 'clinclin', 'password' => Hash::make('test'), 'name' => 'Clinico', 'dataDiNascita' => '2000-04-12', 'tipoAccount' => 2, 'role'=>'clinico',],
            ['id' => 3,'username' => 'adminadmin', 'password' => Hash::make('test'), 'name' => 'Admin', 'dataDiNascita' => '2000-05-12', 'tipoAccount' => 3, 'role'=>'admin',],
        ]);

        DB::table('clinico')->insert([
            ['idAccount' => 2, 'specializzazione' => 'spec1prova', 'ruolo' => 'medico']
        ]);

        DB::table('paziente')->insert([
            ['idAccount' => 1, 'genere' => 'maschio', 'indirizzo' => 'via ciao 3', 'telefono' => '3279453367', 'email' => 'ciao@ciaociao.it', 'idClinico' => 2]
        ]);

        DB::table('faq')->insert([
            ['domanda' => "come funziona il sito?", 'risposta' => 'loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum']
        ]);

        DB::table('listaFarmaci')->insert([
            ['nome' => 'test', 'descrizione' => 'testtestest']
        ]);

        DB::table('listaTerapieRiabilitative')->insert([
            ['nome' => 'test', 'descrizione' => 'testtestest']
        ]);

        DB::table('listaDisturbiMotori')->insert([
            ['nome' => 'test', 'descrizione' => 'testtestest']
        ]);
        DB::table('disturbiMotoriPazienti')->insert([
            ['idAccountPaziente' => 1, 'idDisturbo' => 1]
        ]);
    }
}