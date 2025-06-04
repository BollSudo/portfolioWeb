<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir aux projets</a>
<?php $projectImgDir = "saetrains" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet TRAINS</h1>

    <div class="galleryContainerTrains">
        <div class="galleryItem trains">
            <img src="../ressources/img/<?=$projectImgDir?>/trainsMenu.png"
                 title="Menu IHM Trains"
                 onclick="openModal(this.src, this.title)"
                 alt="Image 1">
        </div>
        <div class="galleryItem trains">
            <img src="../ressources/img/<?=$projectImgDir?>/trainsIHM.png"
                 title="IHM Trains"
                 onclick="openModal(this.src, this.title)"
                 alt="Image 2">
        </div>
        <div class="galleryItem trains">
            <img src="../ressources/img/<?=$projectImgDir?>/scoreTrains.png"
                 title="Tableau de score IHM Trains"
                 onclick="openModal(this.src, this.title)"
                 alt="Image 3">
        </div>
    </div>

    <section>
        <h2 class="sousTitreProjet">Contexte</h2>
        <p class="contentProjet">
            Dans le cadre d'un projet de trois mois de 1ère année de BUT Informatique, en binôme, nous avons développé une application de bureau en <b>Java</b> qui se présente sous la forme d'un exécutable. Cette application consiste en une version numérique d'un jeu de plateau nommé <i>Trains ©</i>. L'objectif de ce projet était d'<b>informatiser la mécanique</b> du jeu afin d'<b>implémenter une Interface Homme Machine (IHM) ergonomique</b> en passant par l'<b>exploration des algorithmes de graphes</b>. La structure du projet suit la convention <b>Maven</b>.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Compétences acquises</h2>

        <h4 class="partieProjet">Mécanique du jeu <small><a href="https://github.com/BollSudo/A1-SAE-TRAINS-Mecanique" title="Lien du dépot git" class="fa"><span class="fa-github"></span></a></small></h4>
        <p class="contentProjet">
            Cette phase met en avant l’application de concept de développement orienté objet et de qualité de développement. Ce projet a mis en avant mes capacités à diviser et à catégoriser le problème en plusieurs briques/classes propres à la programmation orientée objet. J'ai également su développer mes compétences techniques en appliquons divers concepts et principes de programmation, dont l’<b>héritage</b>, le principe <b>YAGNI</b> (« You Ain’t Gonna Need It »), le principe <b>KISS</b> (« Keep It Simple, Stupid »), le principe <b>DRY</b> (« Do not Repeat Yourself »), et la méthode de <b>développement par les tests</b> (TDD). Les tests étaient réalisés avec le <b>framework de test unitaire JUnit</b>.
        </p>
        <h4 class="partieProjet">Algos de graphes <small><a href="https://github.com/BollSudo/A1-SAE-TRAINS-Graphe" title="Lien du dépot git" class="fa"><span class="fa-github"></span></a></small></h4>
        <p class="contentProjet">
            Cette partie se focalise sur les d’algorithmes de graphe, et
            l’implémentation d’un <b>Graphe simple non-orienté pondéré en POO à travers Java</b>
            qui se décompose en deux objets : ‘Sommet’ et ‘Graphe’. Les algorithmes
            implémentés sont :
            <ul>
                <li>algorithme de <b>Dijkstra</b></li>
                <li>algorithme de la <b>coloration gloutonne</b></li>
                <li>algorithme de recherche exhaustive visant à trouver le nombre de sous-graphes complets d’ordre k ou k-clique dans un graphe</li>
                <li>algorithme pour lister les différentes classes de connexité d’un graphe</li>
                <li>algorithme de recherche d’un isthme ou d’un cycle dans un graphe</li>
                <li>algorithmes d'identification du type de graphe (chaîne, cycle, arbre, forêt, connexe)</li>
            </ul>
            Par ailleurs, ces notions théoriques sont directement reliées au plateau du jeu perçu comme un graphe planaire. J'ai aussi appris à appliquer des concepts essentiels, comme les <b>‘Comparator’</b>, les <b>‘Iterator’</b>, et les <b>‘Collection’</b>.
        </p>
        <h4 class="partieProjet">IHM JavaFX <small><a href="https://github.com/BollSudo/A1-SAE-TRAINS-IHM" title="Lien du dépot git" class="fa"><span class="fa-github"></span></a></small></h4>
        <p class="contentProjet">
            Le but de cette dernière est de donner vie à notre jeu, en implémentant une interface graphique ergonomique et fonctionnelle. Pour cela, nous avons utilisé la bibliothèque <b>JavaFX</b> avec laquelle j'ai pu découvrir et appliquer les notions de <b>« Binding », « Binding Haut niveau », « Binding Bas niveau », « Binding bidirectionnel » et « Observation des Propriétés à travers les Listeners »</b>. J'ai su également adopter la <b>division efficace du code</b>, en séparant la partie fonctionnelle/gestion d’événements dans les Class ‘Contrôleurs’ associés, de la partie création graphique dans les fichiers ‘.fxml’, et le style dans les fichiers ‘.css’. Finalement, j'ai appris à <b>packager un projet sous Windows avec les outils JPackage et WiX</b> (Windows Installer XML) sous la forme d'un exécutable.
        </p>
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
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/junit.png"
                     title="Tests avec JUnit"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 5">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/effets.png"
                     title="Enum. sur les effets de cartes"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 6">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/coloGloutonne.png"
                     title="Algo coloration gloutonne"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 7">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/bindings.png"
                     title="Bindings dans 'VueJoueurCourant'"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 8">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/executable.png"
                     title="Executable TRAINS"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 9">
            </div>
        </div>
        <!-- Modal for Image Display -->
        <div id="myModal" class="modal" onclick="closeModal()">
            <div class="titleConteneur">
                <h3 class="modal-title" id="modalTitle"></h3>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>

            <img class="modal-content" id="modalImage"">
        </div>
    </section>
    <section>
        <h2 class="sousTitreProjet">Contributeurs</h2>
        <ul class="listContributors">
            <li class="contributor">Alexandre D.</li>
            <li class="contributor">Julien R.</li>
        </ul>
        <p class="contentProjet"></p>
    </section>
</div>



