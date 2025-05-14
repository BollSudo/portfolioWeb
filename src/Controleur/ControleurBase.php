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
            echo "Erreur : nous n'avons pas pu trouver ce projet..."; //TODO page d'erreur
        }
        self::afficherVue("projets/projet{$_REQUEST["numProjet"]}.php");
    }

    public static function afficherCompetences() {
        self::afficherVue("competencesOverview.php", ["titre" => "Portfolio d'apprendissage"]);
    }

    public static function afficherCompetence() {
        if (!isset($_REQUEST["nomCompetence"])) {
            echo "Erreur : nous n'avons pas pu trouver cette competence..."; //TODO page d'erreur
        }
        self::afficherVue("competences/{$_REQUEST["nomCompetence"]}.php");
    }



    private static function afficherVue(string $cheminVue, array $parametres = []) : void {
        $parametres["vue"] = $cheminVue;
        extract($parametres); // Crée des variables à partir du tableau $parametres
        require __DIR__ . "/../vue/vueGenerale.php"; // Charge la vue
    }
}