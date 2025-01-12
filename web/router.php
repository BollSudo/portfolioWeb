<?php

require_once __DIR__ . '/../src/Lib/Psr4AutoloaderClass.php';

// initialisation en activant l'affichage de débogage
$chargeurDeClasse = new App\Portfolio\Lib\Psr4AutoloaderClass(false);
$chargeurDeClasse->register();
// enregistrement d'une association "espace de nom" → "dossier"
$chargeurDeClasse->addNamespace('App\Portfolio', __DIR__ . '/../src');

// On récupère l'action passée dans l'URL
$args = $_REQUEST;
$controleur = htmlspecialchars($args['controleur'] ?? 'base'); // À modifier avec une autre valeur par défaut
$action = htmlspecialchars($args['action'] ?? 'afficherHero'); // À modifier avec une autre valeur par défaut

$nomDeClasseControleur = 'App\Portfolio\Controleur\Controleur'.ucfirst($controleur);
if(class_exists($nomDeClasseControleur) && in_array($action, get_class_methods($nomDeClasseControleur))) {
    ini_set('max_execution_time', 600); // Timeout 10min max
    $nomDeClasseControleur::$action();
} else {
    // afficher erreur
}

