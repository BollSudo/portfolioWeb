<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir aux projets</a>
<?php $projectImgDir = "mango" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet Race against the Fly</h1>

    <section>
        <h2 class="sousTitreProjet">Contexte</h2>
        <p class="contentProjet">
            Dans le cadre de mon stage de deuxième année de BUT Informatique, j'ai réalisé un stage au sein du <a href="https://www.cirad.fr/">CIRAD</a>. Ma mission consistait à développer une <b>interface graphique ergonomique</b> en <i>Python</i> pour accueillir un <b>jeu sérieux hybride</b> nommé "Course contre la mouche", basé sur un modèle scientifique. En partant d’un script initialement codé en <i>R</i>, intégrant le modèle, j’ai assuré sa refactorisation en <i>Python</i>, ainsi que la conception de la mécanique du jeu et de l’interface graphique. L’application est déployable sous forme d’un <b>exécutable</b> compatible avec les trois principaux systèmes d’exploitation : <i>Windows</i>, <i>macOS</i> et <i>Linux</i>.

            L’objectif principal de cette mission était de <b>simplifier la saisie des données</b> issues d’une partie de jeu dans le modèle, afin de fluidifier les processus d’exploitation. Un second objectif était de rendre le jeu accessible à un public plus large en intégrant la <b>localisation</b> (multilingue) dans l’application. Celle-ci remplit une double fonction : être à la fois un <b>support pédagogique</b> pour sensibiliser les acteurs de la filière mangue à l’infestation par la mouche des fruits, et un <b>outil de recherche</b> permettant l’enregistrement et l’exploitation des données issues des sessions de jeu.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Compétences acquises</h2>

        <h4 class="partieProjet">Mécanique du jeu</h4>
        <p class="contentProjet">
            La première partie du projet consiste à <b>réfacotrer le code existant</b> du modèle sous <i>Python</i> afin de l'incorporer à la <b>mécanique du jeu</b>. Cette étape est précédée d’une phase de <b>conception</b>, qui consiste à modéliser les différentes entités du jeu et leurs relations à l’aide d’un <i>diagramme UML</i>, tout en respectant les <b>principes de conception orientée objet</b> tels que <b>SOLID</b>.
        </p>
        <h4 class="partieProjet">Interface Graphique</h4>
        <p class="contentProjet">
            La deuxième partie du projet consiste à concevoir et à mettre en place l’interface graphique du jeu au-dessus de la mécanique existante, à travers des <b>interfaces utilisateur</b>. L’objectif est de développer une <b>IHM ergonomique</b> facilitant la saisie des données par les animateurs. Cette phase inclut une étape de <b>prototypage</b> réalisée sur <i>Figma</i>, suivie de la conception de l’IHM, puis de son développement.
        </p>
        <h4 class="partieProjet">Tests et Packaging</h4>
        <p class="contentProjet">
            Le projet a été validé à l’aide de <b>tests unitaires</b> et de <b>tests fonctionnels</b>. Une <b>pipeline d’intégration et de déploiement continu</b> (<i>CI/CD</i>) a également été mise en place afin d’<b>automatiser les tests de régression</b> à chaque modification du code. Le <b>packaging</b> de l’application a été réalisé à l’aide du module <i>Nuitka</i> de <i>Python</i>, permettant ainsi d’assurer une <b>performance optimale</b> et une <b>compilation multiplateforme</b> sur <i>Windows</i>, <i>macOS</i> et <i>Linux</i>.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Traces</h2>
        <a href="../ressources/pdf/rpst.pdf" target="_blank">Rapport de stage</a>
        <p class="contentProjet"></p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Contributeur</h2>
        <ul class="listContributors">
            <li class="contributor">Julien R.</li>
        </ul>
        <p class="contentProjet"></p>
    </section>
</div>



