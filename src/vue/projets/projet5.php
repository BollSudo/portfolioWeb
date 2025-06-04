<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir aux projets</a>
<?php $projectImgDir = "saetri" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet Very Bad Split</h1>

    <div class="galleryContainerTrains">
        <div class="galleryItem trains">
            <img src="../ressources/img/<?=$projectImgDir?>/ihmTri.png"
                 title="IHM Application"
                 onclick="openModal(this.src, this.title)"
                 alt="Image 1">
        </div>
        <div class="galleryItem trains">
            <img src="../ressources/img/<?=$projectImgDir?>/routeTri.png"
                 title="Route 'propre'"
                 onclick="openModal(this.src, this.title)"
                 alt="Image 2">
        </div>
        <div class="galleryItem trains">
            <img src="../ressources/img/<?=$projectImgDir?>/routesTri.png"
                 title="Listes des routes"
                 onclick="openModal(this.src, this.title)"
                 alt="Image 3">
        </div>
    </div>

    <section>
        <h2 class="sousTitreProjet">Contexte</h2>
        <p class="contentProjet">
            Dans le cadre du projet de semestre 4 du BUT Informatique, il nous a été demandé d’<b>améliorer un site existant de gestion de dépenses</b> pour des événements. Le site web devait intégrer des <b>fonctionnalités réactives</b> et <b>ergonomiques</b>, tout en respectant les <b>normes de sécurité</b> et de performance.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Compétences acquises</h2>

        <h4 class="partieProjet">Audit de sécurité</h4>
        <p class="contentProjet">
            Avant de pouvoir <b>améliorer la qualité du code</b> ou ajouter de nouvelles fonctionnalités, il a d’abord été nécessaire de <b>détecter les failles de sécurité</b> présentes dans l’application existante. Durant cette phase d’analyse, j’ai su <b>identifier les vulnérabilités</b> de l’application en proposant, pour chacune, un scénario d’exploitation, une évaluation du niveau de risque, ainsi qu’une solution pour les corriger.

            Parmi les failles mises en évidence figuraient notamment :
        </p>
        <ul>
            <li><b>Injections SQL</b></li>
            <li><b>Injections HTML et XSS</b></li>
            <li><b>Stockage de données sensibles</b> dans les <i>Cookies</i></li>
            <li><b>Stockage des mots de passe en clair</b> dans la base de données</li>
            <li><b>Utilisation d’un algorithme de hachage déterministe</b> non sécurisé</li>
            <li><b>Vulnérabilité CSRF</b></li>
            <li><b>Système de récupération de compte non sécurisé</b></li>
            <li><b>Anomalies de mise à jour</b> liées à un schéma non normalisé de la base de données</li>
        </ul>

        <h4 class="partieProjet">Normalisation BD</h4>
        <p class="contentProjet">
            Afin d’éviter toutes <b>anomalies</b> de mise à jour et toute <b>redondance</b> liée aux données, il a été nécessaire de <b>normaliser la base de données</b>. La normalisation permet de justifier le passage d’un schéma non normalisé vers un schéma relationnel sain et conforme aux formes normales.

            J’ai procédé su décomposer la relation initiale afin de l’amener en <b>troisième forme normale (3NF)</b>, tout en veillant à ce que la transformation soit <b>sans perte de données</b> et <b>sans perte de dépendances fonctionnelles</b>. Pour ce faire, j’ai d’abord identifié les <b>dépendances fonctionnelles</b> à partir des <b>règles de gestion</b> spécifiques à l’application.

            La décomposition a été réalisée en s’appuyant sur le <b>théorème de Casey-Delobel</b>, garantissant la préservation de l’information. Enfin, j’ai <b>comparé les fermetures transitives</b> de la relation initiale et de la relation normalisée afin de vérifier l’absence de toute perte de dépendances fonctionnelles.
        </p>

        <h4 class="partieProjet">Amélioration des fonctionnalités</h4>
        <p class="contentProjet">
            Cette phase met en avant les différentes <b>améliorations</b> et fonctionnalités que j’ai développées au cours du projet. J’ai amélioré le <b>système de routage</b> en intégrant celui basé sur les <b>attributs</b> de <i>Symfony</i>. J’ai également <b>réfacotré le code</b> afin d’alléger la responsabilité des contrôleurs, en introduisant des <b>services</b> initialisés via un <b>conteneur de dépendances</b>, configuré avec un fichier <i>.yaml</i> et tirant parti du <b>branchement automatique</b> (autowiring) de <i>Symfony</i>.

            J’ai ensuite pu tester l’application en implémentant des <b>tests unitaires</b> garantissant une <b>couverture</b> fonctionnelle satisfaisante du système. J’ai renforcé la <b>sécurité du code</b> en empêchant les injections SQL via l’utilisation de <i>requêtes préparées</i>, en améliorant la validation des formulaires côté serveur, et en introduisant un système d’authentification plus robuste.

            L’<b>ergonomie de l’application</b> a également été optimisée grâce à l’ajout de fonctionnalités <i>JavaScript</i>. Je me suis notamment penché sur l’utilisation d’une <b>bibliothèque réactive personnalisée</b> pour améliorer l’expérience utilisateur.
        </p>

        <h4 class="partieProjet">Conteneurisation</h4>
        <p class="contentProjet">
            J’ai su <b>conteneuriser l’application</b> à l’aide de <i>Docker</i> en définissant plusieurs <b>services</b> (serveur web, base de données, gestionnaire de migrations) à travers l’utilisation d’un <i>Dockerfile</i> et d’un <i>docker-compose.yml</i>.

            J’ai également mis en place et utilisé des <b>commandes personnalisées</b> via un <i>Makefile</i> afin de simplifier les actions courantes liées à <i>Docker</i> (démarrage, arrêt, build, nettoyage…). Cela a permis d’automatiser des tâches répétitives et d’homogénéiser les environnements de développement.

            Cette phase m’a permis de comprendre les différents composants fondamentaux de <i>Docker</i> et leurs utilités, notamment les <b>volumes nommés</b>, les <b>volumes montés en bind</b> et les <b>networks</b> utilisés pour faire communiquer les différents services de l’application de manière sécurisée et isolée.
        </p>

    </section>
    <section>
        <h2 class="sousTitreProjet">Traces</h2>
        <p class="contentProjet"></p>

        <div class="galleryContainer">
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/structTri.png"
                     title="Structure MVCS du Projet"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 4">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/autowire.png"
                     title="Fichier de configuration du conteneur de dépendances (avec autowiring)"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 5">
            </div>
            <div class="galleryItem php">
                <img src="../ressources/img/<?=$projectImgDir?>/routeCodeTri.png"
                     title="Exemple d'implémentation de routage par attribut"
                     onclick="openModal(this.src, this.title)"
                     alt="Image 6">
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



