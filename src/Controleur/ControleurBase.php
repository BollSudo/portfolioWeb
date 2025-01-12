<?php

namespace App\Portfolio\Controleur;

class ControleurBase {

    public static function afficherHero() {
        self::afficherVue("hero.php");
    }
    public static function afficherProjets() {
        self::afficherVue("CartesTemplate.php", ["titre" => "Projets"]);
    }

    private static function afficherVue(string $cheminVue, array $parametres = []) : void {
        $parametres["vue"] = $cheminVue;
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../vue/vueGenerale.php"; // Charge la vue
    }
}