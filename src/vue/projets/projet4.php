<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir en arrière</a>
<?php $projectImgDir = "mango" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet Race against the Fly</h1>

<!--    <div class="galleryContainerTrains">-->
<!--        <div class="galleryItem trains">-->
<!--            <img src="../ressources/img/--><?php //=$projectImgDir?><!--/trainsMenu.png"-->
<!--                 title="Menu IHM Trains"-->
<!--                 onclick="openModal(this.src, this.title)"-->
<!--                 alt="Image 1">-->
<!--        </div>-->
<!--        <div class="galleryItem trains">-->
<!--            <img src="../ressources/img/--><?php //=$projectImgDir?><!--/trainsIHM.png"-->
<!--                 title="IHM Trains"-->
<!--                 onclick="openModal(this.src, this.title)"-->
<!--                 alt="Image 2">-->
<!--        </div>-->
<!--        <div class="galleryItem trains">-->
<!--            <img src="../ressources/img/--><?php //=$projectImgDir?><!--/scoreTrains.png"-->
<!--                 title="Tableau de score IHM Trains"-->
<!--                 onclick="openModal(this.src, this.title)"-->
<!--                 alt="Image 3">-->
<!--        </div>-->
<!--    </div>-->

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

        </p>
        <h4 class="partieProjet">Interface Graphique</h4>
        <p class="contentProjet">

        </p>
        <h4 class="partieProjet">Tests et Packaging</h4>
        <p class="contentProjet">

        </p>
        <a href="../ressources/pdf/CV.pdf" target="_blank">RAPPPORT</a>
    </section>
    <section>
        <h2 class="sousTitreProjet">Traces</h2>
        <p class="contentProjet"></p>

        <div class="galleryContainer">
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/maven.png"
                     title="Structure Projet Maven"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 4">
            </div>
        </div>
    </section>
</div>



