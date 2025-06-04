<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir aux projets</a>
<?php $projectImgDir = "saephp" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet StudAdvisor</h1>

    <section>
        <h2 class="sousTitreProjet">Contexte</h2>
        <p class="contentProjet">Dans le cadre du projet tuteuré du semestre trois de BUT Informatique, il nous a été demandé de développer un <b>site web dynamique, portable et sécurisé en PHP</b>. Ce site web devait répondre au besoin client du responsable d'études et avait pour objectif primaire de favoriser l'aide à la poursuite d'études des étudiants de BUT3. Le projet s'étend sur une durée d'environ quatre mois et s'est fait en équipe de cinq étudiants.</p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Compétences acquises</h2>
        <p class="contentProjet">
            Le développement du site suivait une <b>architecture Modèle Vue Contrôleur (MVC)</b>, n'utilisait aucun framework et avait <b><i>Composer</i></b> comme gestionnaire de dépendances. Le site web interagit avec une <b>base de données <i>MariaDB</i></b>. Le projet était accompagné d'une application de la <b>méthode AGILE SCRUM</b>. Il s'est déroulé en quatre sprints ou itérations (cycle de développement) d'au moins deux semaines pour lesquelles j'ai occupé le rôle de <b>SCRUM Master</b> durant les deux premières itérations. Ma fonction était de veiller à ce que l'équipe applique bien la méthode tout en initiant les rituels tels que les stand-ups meetings réguliers, la planification, les réunions d'affinage et les rétrospectives de fin de sprint.
        </p>
        <p class="contentProjet">
            En parallèle, j'ai mobilisé mes compétences techniques pour développer des fonctionnalités clé. Parmi ces dernières, je me suis consacré au développement du <b>système d'importation des données</b> relatives aux dossiers des étudiants. J'ai également travaillé sur l'implémentation d'un <b>système de gestion d'agrégations de notes</b> permettant la génération automatisé des avis de poursuite d'études. Ces implémentations m'ont permis de solidifier mes bases techniques en PHP et SQL : d'une part, via l'implémentation de divers formulaires accompagnées d'une double vérification coté client et coté serveur ; d'autre part, via la <b>conception d'une base de données</b> robuste prêt à accueillir des données tout en assurant leur sécurité et leur confidentialité. La qualité du code est étayée par l'application constante des principes fondamentaux de qualité de développement tels que <b>SOLID, DRY, et KISS</b>. Durant ce projet, j'ai appliqué trois grands patterns de conception justifiés, tels que <b>le Singleton, la Stratégie ou bien la Composite</b>. J'ai aussi mobilisé mes compétences à développer des interfaces utilisateur tout en respectant les <b>normes d'accessibilités et la responsivité</b>.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Traces <small><a href="https://github.com/BollSudo/A2-SAE-PHP" title="Lien du dépot git" class="fa"><span class="fa-github"></span></a></small></h2>
        <div class="galleryContainer">
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/agreg.png"
                     title="Page liste d'agrégations"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 1">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/agregform.png"
                     title="Formulaire création d'agrégations"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 2">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/etudinfos.png"
                     title="Page dossier étudiant"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 3">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/importation.png"
                     title="Page importation"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 4">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/login.png"
                     title="Authentification"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 5">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/modeleAgregation.png"
                     title="Diagramme de classes UML : Système d'agrégations"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 6">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/modeleImport.png"
                     title="Diagramme de classes UML : Système d'importation"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 7">
            </div>
            <!-- Modal for Image Display -->
            <div id="myModal" class="modal" onclick="closeModal()">
                <div class="titleConteneur">
                    <h3 class="modal-title" id="modalTitle"></h3>
                    <span class="close" onclick="closeModal()">&times;</span>
                </div>
                <img class="modal-content" id="modalImage"">
            </div>
        </div>
        <p class="contentProjet"></p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Contributeurs</h2>
        <ul class="listContributors">
            <li class="contributor">Adam L.</li>
            <li class="contributor">Bryan B.</li>
            <li class="contributor">Julien R.</li>
            <li class="contributor">Milwenn F.</li>
            <li class="contributor">Nathan Raphaël L.</li>
        </ul>
        <p class="contentProjet"></p>
    </section>
</div>