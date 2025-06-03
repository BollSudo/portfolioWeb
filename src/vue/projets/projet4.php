<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir en arrière</a>
<?php $projectImgDir = "mango" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet Race against the Fly</h1>

    <section>
        <h2 class="sousTitreProjet">Contexte</h2>
        <p class="contentProjet">
            Dans le cadre de mon stage de 2eme année de BUT Informatique, j'ai réalisé un stage au sein du <i><a href="">CIRAD</a></i>. Ma mission était de développer une interface graphique érgonomique en <i><a href="">Python</a></i> pour accueillir un jeu sérieux hybride nommé "Course contre la mouche" basé sur un modèle scientifique. En partant d'un script <i><a href="">R</a></i> qui incorporait le modèle, je me suis occupé de la réfactorisation du modèle sur <i><a href="">Python</a></i>, de la conception de la mécanique du jeu et de l'interface graphique. L'application est présentable sous la forme d'un éxécutable sur trois principaux systèmes d'exploitation (Windows, MacOS, Linux). Le but principal de cette mission et notamment de simplifier la saisie des données d'une partie de jeu dans le modèle pour fluidifier les processus. Un autre objectif est d'universaliser le jeu en intégrant la localisation au sein de l'application. L'application devra servir les missions du jeu qui sont d'être un support pédagogique pour sensibiliser les acteurs de la filière mangue face à l'infestation de la mouche des fruits, mais aussi servir de support de recherche via l'enregistrement des données des parties.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Compétences acquises</h2>

        <h4 class="partieProjet">Mécanique du jeu</h4>
        <p class="contentProjet">
            La première partie du projet consiste à réusiner le code existant du modèle sous Python afin de l'incorporer à la
            mécanique du jeu. Cette étape est précédée d'une partie de conception qui consiste à modéliser les différentes entités
            du jeu et leurs relations à travers un diagramme UML, tout en respectant les pricipes de conception orienté objet (SOLID).
        </p>
        <h4 class="partieProjet">Interface Graphique</h4>
        <p class="contentProjet">
            La deuxième partie du projet consiste à concevoir et à mettre en place l'interface graphique du jeu par dessus la mécanique
            du jeu via des interfaces. Cette partie consiste à concevoir une IHM qui soit ergonomique et qui permet faciliter la saisie des données par les animateurs. Elle comprend un étape de prototypage sur Figma, une étape de conception de l'IHM et une étape de développement de l'IHM.
            L'IHM a été développé avec le module <i><a href="">tkinter</a></i> de Python.
        </p>
        <h4 class="partieProjet">Tests et Packaging</h4>
        <p class="contentProjet">
            Le projet a été testé via des tests unitaitres et des tests fonctionnels. Une pipeline de CI/CD a aussi été mise en place pour automatiser ces tests de régression à chaque modification du code. Le packaging du jeu s'est fait via le module Nuitka de Python.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Traces</h2>
        <a href="../ressources/pdf/rpst.pdf" target="_blank">Rapport de stage</a>
        <p class="contentProjet"></p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Contributeurs</h2>
        <ul class="listContributors">
            <li class="contributor">Julien R.</li>
        </ul>
        <p class="contentProjet"></p>
    </section>
</div>



