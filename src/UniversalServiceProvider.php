<?php
namespace Asddaniel\UniversalLaravel;
class UniversalServiceProvider extends PackageServiceProvider{

    public function configurePackage(Package $package): void
    {
        $package
        ->name('laravel-universal')
        ->hasMigrations(["2023_01_31_072001_create_donnees_table", 
        "2023_01_31_072119_create_relations_table", 
        "2023_01_31_072221_create_colonnes_table", 
        "2023_01_31_072352_create_enregistrements_table"])
        
        ;
    }
}