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
        DB::table("account")->insert([
            ['id'=>1,'username'=>'paziente1', 'pwd' => Hash::make('test'), 'nome'=>'mario', 'cognome'=>'ciao', 'dataDiNascita'=>'2000-05-12', '1'],
            ['id'=>2,'username'=>'clinico1', 'pwd' => Hash::make('test2'), 'nome'=>'mario2', 'cognome'=>'ciao2', 'dataDiNascita'=>'2000-04-12', '2'],
            ['id'=>3,'username'=>'admin1', 'pwd' => Hash::make('test'), 'nome'=>'mario', 'cognome'=>'ciao', 'dataDiNascita'=>'2000-05-12', '1']
        ]);
        DB::table('clinico')->insert([['idAccount'=>2,'specializzazione'=>'spec1prova','ruolo'=>'medico']]);
        DB::table('paziente')->insert([['idAccount'=> 1,'genere'=>'maschio', 'indirizzo'=> 'via ciao 3','telefono'=> '3279453367', 'email'=> 'ciao@ciaociao.it','idClinico'=>2]]);
        DB::table('faq')->insert([['domanda'=> "come funziona il sito?",'risposta'=>'loremipsum loremipsum loremipsum loremipsum loremipsum loremipsum ']]);
        DB::table('listaFarmaci')->insert([['nome'=>'test','descrizione'=> 'testtestest']]);
        DB::table('listaTerapieRiabilitative')->insert([['nome'=> 'test', 'descrizione'=> 'testtestest']]);
        DB::table('listaDisturbiMotori')->insert([['nome'=> 'test', 'descrizione'=> 'testtestest']]);
}
}