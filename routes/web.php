<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $animals = [ 

        [
            'id' => '1', 
            'species' => 'Armadillo',
            'genus' => 'Dasypus',
            'family' => 'Dasypodidae',
            'order' => 'Cingulata',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'America del Sud',
            'image' => '/img/armadillo.jpeg',

        ], 
        [
            'id' => '2',
            'species' => 'Balena Azzurra',
            'genus' => 'Balaenoptera',
            'family' => 'Balaenopteridae',
            'order' => 'Cetacea',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Acquatica',            
            'continent' => 'Oceano Pacifico',
            'image' => '/img/balena_azzurra.webp',

        ], 
        [
            'id' => '3',
            'species' => 'Leone',
            'genus' => 'Panthera',
            'family' => 'Felidae',
            'order' => 'Carnivora',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'Africa',
            'image' => '/img/leone.jpeg',
        ], 
        [
            'id' => '4',
            'species' => 'Aquila Calva',
            'genus' => 'Haliaeetus',
            'family' => 'Accipitridae',
            'order' => 'Accipitriformes',
            'class' => 'Aves',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'America del Nord',
            'image' => '/img/aquila_calva.webp',
        ], 
        [
            'id' => '5',
            'species' => 'Canguro',
            'genus' => 'Macropus',
            'family' => 'Macropodidae',
            'order' => 'Diprotodontia',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'Australia',
            'image' => '/img/canguro.jpeg',
        ], 
        [
            'id' => '6',
            'species' => 'Pinguino Imperatore',
            'genus' => 'Aptenodytes',
            'family' => 'Spheniscidae',
            'order' => 'Sphenisciformes',
            'class' => 'Aves',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Acquatica',
            'continent' => 'Antartide',
            'image' => '/img/pinguino_imperatore.jpeg',
        ], 
    ]; 

    return view('welcome', ['animals' => $animals]);
})->name('homepage');

Route::get('/about_us', function () {
    return view('chiSiamo');
})->name('about-us');

Route::get('/animal/show/{animalId}', function($animalId){
    
    $animals = [ 

        [
            'id' => '1', 
            'species' => 'Armadillo',
            'genus' => 'Dasypus',
            'family' => 'Dasypodidae',
            'order' => 'Cingulata',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'America del Sud',
            'image' => '/img/armadillo.jpeg',

        ], 
        [
            'id' => '2',
            'species' => 'Balena Azzurra',
            'genus' => 'Balaenoptera',
            'family' => 'Balaenopteridae',
            'order' => 'Cetacea',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Acquatica',            
            'continent' => 'Oceano Pacifico',
            'image' => '/img/balena_azzurra.webp',

        ], 
        [
            'id' => '3',
            'species' => 'Leone',
            'genus' => 'Panthera',
            'family' => 'Felidae',
            'order' => 'Carnivora',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'Africa',
            'image' => '/img/leone.jpeg',
        ], 
        [
            'id' => '4',
            'species' => 'Aquila Calva',
            'genus' => 'Haliaeetus',
            'family' => 'Accipitridae',
            'order' => 'Accipitriformes',
            'class' => 'Aves',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'America del Nord',
            'image' => '/img/aquila_calva.webp',
        ], 
        [
            'id' => '5',
            'species' => 'Canguro',
            'genus' => 'Macropus',
            'family' => 'Macropodidae',
            'order' => 'Diprotodontia',
            'class' => 'Mammalia',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Terrestre',
            'continent' => 'Australia',
            'image' => '/img/canguro.jpeg',
        ], 
        [
            'id' => '6',
            'species' => 'Pinguino Imperatore',
            'genus' => 'Aptenodytes',
            'family' => 'Spheniscidae',
            'order' => 'Sphenisciformes',
            'class' => 'Aves',
            'phylum' => 'Chordata',
            'kingdom' => 'Animalia',
            'domain' => 'Eukaryota',
            'life' => 'Acquatica',
            'continent' => 'Antartide',
            'image' => '/img/pinguino_imperatore.jpeg',
        ], 
    ]; 

    foreach ($animals as $animal){

        if($animalId == $animal['id']){
            return view('animals.show', ['animal' => $animal]);
        }

    }
    abort(404);
    return view('animals.show');
})->name('animals.show');
