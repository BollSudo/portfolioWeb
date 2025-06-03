<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir en arrière</a>
<?php $projectImgDir = "saetrains" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet Very Bad Split</h1>

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
            Dans le cadre du projet du semestre quatre de BUT Informatique, il nous a été demandé d'améliorer un site existant de gestion de dépenses pour des événements. Le site web devait inclure des fonctionnalités réactives et ergonomiques tout en respectant les normes de securité et de performance.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Compétences acquises</h2>

        <h4 class="partieProjet">Audit de sécurité</h4>
        <p class="contentProjet">
            Avant de commencer à améliorer la qualité du code ou ajouter des fonctionnalités supplémentaires, il a fallu determiné les différentes failles de sécurité de l'application existante. Durant cette phase d'analyse, j'ai su reperé les différentes failles de sécurité, en proposant un scénario par lequel la faille pourrait être exploiter, en évaluant son niveau de rique, et en proposant une solution pour la corriger. Parmi les failles de sécurité relevé, il y a eu les injection SQL, les injections XSS, le stockage de données sensibles dans les cookies, stockage du mdp en clair dans la BD, mauvais algorithme de hashage déterministe, possible attaque csrf, un système de récupération de compte non sécurisé, et des anomalies de mise à jour liées à un schéma non normalisé de la BDD.
        </p>

        <h4 class="partieProjet">Normalisation BD</h4>
        <p class="contentProjet">
            Afin d'éviter toutes anomalies de mise à jour et toutes redondances liées aux données, il a fallu normaliser la base de données.
            La normalisation de la BD permet de justifier le passage d'un schéma de base de données non normalisé vers un schéma normalisé. Il a fallu décomposé la relation initiale de manière à ce qu'elle soit en 3eme forme normale (3NF), et justifier que la décomposition et sans pertes de données et sans pertes de dépendances fonctionnelles. Pour cela, il fallu déterminé les dépendances fonctionnelles de notre application en se basant sur les règles de gestion de notre application. Ensuite il a fallu, à partir d'une relation non normalisée, décomposer judicieusement cette dernière en utilisant le théorème de Casey Delobel pour préserver les données. Finalement, il a fallue comparer les fermetures transitives de la relation initiale et de la relation normalisée pour confirmer que'il n'y avait aucune perte de dépendances fonctionnelles.
        </p>

        <h4 class="partieProjet">Amélioration des fonctionnalités</h4>
        <p class="contentProjet">
            Cette phase met en avant les différentes amélioriations et fonctionnalités que j'ai développé durant le projet. J'ai su améliorer le système de routage en intégrant le système de routage par attribut de Symfony. J'ai su également réusiné le code de façon à alléger les responsabilités des controlleurs en introduisant des classes services que j'initialise au moyen d'un conteneur de dépendances configuré par un fichier de configuration .yaml et qui utilise le système de branchement automatique de Symfony. Ensuite, j'ai pu tester mon code en implémentant des tests unitaires avec ue couverture acceptable du système. J'ai su renforcé la sécurité du code en empéchant les injections SQL via des requêtes préparées, en renforcant la validation des formulaires côté serveur, et en introduisant un système d'authentification plus robuste. L'érgonomie de l'application a aussi pu améliorer grâce à des fonctionnalités JS. Je me suis particulièrement penché sur l'utilisation d'une bibliothèque réactive personnalisée pour l'interface utilisateur (en cours).
        </p>

        <h4 class="partieProjet">Conteneurisation</h4>
        <p class="contentProjet">
            J'ai su conteneuriser l'application sous Docker via différents services (serveur web, base de données, gestionnaire de migrations, etc.) avec l'utilisation d'un dockerfile et d'un docker-compose. J'ai su utiliser et iplémenter des commandes via MakeFile pour simplifier l'utilisation de Docker. J'ai su comprendre les différents composants de Docker et leur utilisation (volumes nommés, volumes bind, et networks).
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
            <li class="contributor">Julien R.</li>
            <li class="contributor">Milwenn F.</li>
            <li class="contributor">Nathan Raphaël L.</li>
        </ul>
        <p class="contentProjet"></p>
    </section>
</div>



