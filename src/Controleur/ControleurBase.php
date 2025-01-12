<?php

namespace App\Portfolio\Controleur;

class ControleurBase {

    public static function afficherHero() {
        self::afficherVue("hero.php");
    }
    public static function afficherProjets() {
        self::afficherVue("projectsOverview.php", ["titre" => "Projets"]);
    }

    public static function afficherProjet() {
        if (!isset($_REQUEST["numProjet"])) {
            echo "error";
        }
        self::afficherVue("projets/projet{$_REQUEST["numProjet"]}.php");
    }

    private static function afficherVue(string $cheminVue, array $parametres = []) : void {
        $parametres["vue"] = $cheminVue;
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../vue/vueGenerale.php"; // Charge la vue
    }
}