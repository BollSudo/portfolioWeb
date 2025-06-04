<link href="../ressources/scss/competences.css" rel="stylesheet">
<link href="../ressources/scss/projet.css" rel="stylesheet">

<?php require __DIR__ . "/boutonsNiveau.php" ?>

<div class="conteneurCompetence">
    <?php require __DIR__ . "/sideMenuCompetences.php" ?>

    <div class="competences conteneurProjet">
        <h2 class="pageTitle conduire">Conduire un projet</h2>
        <h4 class="acTitle">Composantes essentielles</h4>
        <ul class="ecList">
            <li class="acItem">EC1 - En communiquant efficacement avec les différents acteurs d'un projet</li>
            <li class="acItem">EC2 - En respectant les règles juridiques et les normes en vigueur</li>
            <li class="acItem">EC3 - En sensibilisant à une gestion éthique, responsable, durable et interculturelle</li>
            <li class="acItem">EC4 - En adoptant une démarche proactive, créative et critique</li>
        </ul>
        <div class="competence">
            <h3 id="niveau1" class="competenceTitle conduire">Niveau 1 : Identifier les besoins métiers des clients et des utilisateurs</h3>

            <p class="competenceDescription">
                Dans le cadre d’un <b>projet interdisciplinaire</b>, j’ai collaboré au développement d’un site web et d’une affiche promotionnelle en lien avec un escape game, en respectant les <b>exigences du client</b> tant sur le plan esthétique que fonctionnel. J’ai utilisé <i>Canva</i>i> pour la partie visuelle et <i>Git</i> pour organiser le <b>travail collaboratif</b> et assurer un suivi de version rigoureux. Des échanges oraux et écrits ont été menés avec le client afin de recueillir ses attentes, valider les maquettes, et ajuster les livrables au fur et à mesure de l’avancement du projet. Site Web Vitrine (Projet - SAE Escape Game) :
                <a href="https://webinfo.iutmontp.univ-montp2.fr/~renaudj/SiteWebEscapeGame/Page/TheKillersRun.html" target="_blank">The Killer's Run</a>
            </p>

            <div class="galleryContainer">
                <div class="galleryItem php">
                    <img src="../ressources/img/competences/escape.png"
                         title="Poster de l'escape game 'The Killer's Run'"
                         onclick="openModal(this.src, this.title)"
                         alt="Poster escape game">
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

            <p class="competenceDescription">
                J’ai également participé à la réalisation d’un <b>podcast scénarisé</b> via le logiciel <i>Audacity</i>, dans lequel chaque membre de l’équipe tenait un rôle. Ce podcast abordait les <b>enjeux environnementaux du numérique</b>, notamment autour de la fabrication et de l’usage des téléphones portables. J’ai contribué à la rédaction du script, à l’enregistrement, ainsi qu’au montage final. Les propos tenus dans ce podcast reposaient sur une recherche documentaire approfondie, dont la bibliographie a été gérée à l’aide du logiciel <i>Zotero</i>, afin d’assurer la rigueur des sources utilisées. Site Web Vitrine Responsive (Projet - SAE Controverse) :                 <a href="https://webinfo.iutmontp.univ-montp2.fr/~renaudj/SiteWebControverseSombre/" target="_blank">Wishipedia</a>
            </p>

            <p class="competenceDescription">
                Dans un autre projet, j’ai participé à la préparation et à l’installation de <b>solutions matérielles et logicielles</b> pour équiper un espace de coworking fictif. Ce travail a nécessité la rédaction d’un <b>rapport comparatif</b> sur plusieurs services essentiels, tels que le serveur web, le système de messagerie ou encore les solutions de stockage de données. Ce projet m’a permis de comprendre l’importance d’une <b>analyse technique</b> préalable à toute installation, en évaluant chaque solution à travers des grilles de critères clairs, notamment en termes de compatibilité, de coûts, de performance et de simplicité de mise en œuvre.
            </p>

            <div class="galleryContainer">
                <div class="galleryItem php">
                    <img src="../ressources/img/competences/analyse.png"
                         title="Analyse comparative du service de base de données"
                         onclick="openModal(this.src, this.title)"
                         alt="Analyse coworking">
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

            <p class="competenceDescription">
                Enfin, dans le cadre du projet <i>FestiPop</i>, j’ai contribué à la <b>planification</b> complète d’un festival de Pop Culture organisé par une entreprise fictive nommée <i>Minute Festival</i>. J’ai rédigé un <b>cahier des charges</b> détaillant l’ensemble des étapes : conception, budgétisation, inventaire, planification logistique, choix du matériel informatique (réseau, nom de domaine, caméras de surveillance, site web...), tarification et recrutement. J’ai utilisé des outils de gestion de projet comme le <b>diagramme de Pert et de Gantt</b>, ainsi que <i>Google Sheets</i> pour le suivi comptable (comptes de charges, immobilisations, amortissements, TVA, etc.). Ce projet m’a permis de renforcer mes compétences en gestion de projet, organisation d’événements, et collaboration interdisciplinaire, en produisant un livrable structuré et aligné avec les besoins de l’entreprise fictive.
            </p>

            <div class="galleryContainer">
                <div class="galleryItem php">
                    <img src="../ressources/img/competences/pert.png"
                         title="Diagramme de Pert : FestiPop"
                         onclick="openModal(this.src, this.title)"
                         alt="Pert">
                </div>
                <div class="galleryItem php">
                    <img src="../ressources/img/competences/gantt.png"
                         title="Diagramme de Gantt : FestiPop"
                         onclick="openModal(this.src, this.title)"
                         alt="Gantt">
                </div>
                <div class="galleryItem php">
                    <img src="../ressources/img/competences/compta.png"
                         title="Tableau des charges : FestiPop"
                         onclick="openModal(this.src, this.title)"
                         alt="Compta">
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

            <div class="competenceListes">
                <h4 class="acTitle">Apprentissages critiques</h4>
                <ul class="acList">
                    <li class="acItem">AC1 - Appréhender les besoins du client et de l'utilisateur</li>
                    <li class="acItem">AC2 - Mettre en place les outils de gestion de projet</li>
                    <li class="acItem">AC3 - Identifier les acteurs et les différentes phases d'un cycle
                        de développement</li>
                </ul>

                <h3 id="niveau2" class="competenceTitle conduire">Niveau 2 : Appliquer une démarche de suivi de projet en fonction des besoins métiers des clients et des utilisateurs</h3>

                <p class="competenceDescription">
                    La deuxième année m'a permis de découvrir une <b>méthodologie AGILE</b> d'organisation de projet en <b>itératif et incrémental</b> avec des cycles courts et des feedbacks clients rapides. Cette façon de travailler se distingue de la méthode en cascade (Waterfall) appliquée habituellement dans mes précédents projets qui se démarquent par l'élaboration au préalable d'un cahier des charges complet, avant de concevoir, développer, tester puis livrer.
                </p>
                <p class="competenceDescription">
                    Le projet <a href="router.php?action=afficherProjet&controleur=base&numProjet=2">StudAdvisor</a> m'a notamment permis de mettre en œuvre une démarche de <b>suivi de projet vis à vis des besoins clients</b>. Durant ce projet, j'ai pu occuper le rôle de <b>SCRUM Master</b> pour une durée de deux sprints (environ cinq semaines). Ce rôle consiste à s'assurer que l'équipe pratique le méthode AGILE SCRUM, et à établir des rituelles pour <b>assurer un suivi continu et organisé</b> (planning poker, retrospective [lien vers retrospective Miro] et daily meeting). J'ai su organiser l'information en réalisant des bilans de sprint et des tableaux de bord. J'ai pu également apprendre à communiquer avec un <b>Product Owner</b> (PO) et une équipe de développeurs pour évaluer les fonctionnalités (Users Stories) en fonction de la valeur client de la vélocité. Durant les périodes de revues de sprint, j'ai appris à présenter les fonctionnalités développées aux clients.
                </p>

                <div class="galleryContainer">
                    <div class="galleryItem php">
                        <img src="../ressources/img/competences/speedboat.png"
                             title="Retrospective de sprint avec la méthode du speedboat"
                             onclick="openModal(this.src, this.title)"
                             alt="Speedboat">
                    </div>
                    <div class="galleryItem php">
                        <img src="../ressources/img/competences/velocite.png"
                             title="Graphique de vélocité"
                             onclick="openModal(this.src, this.title)"
                             alt="Vélocité">
                    </div>
                    <div class="galleryItem php">
                        <img src="../ressources/img/competences/datasprint.png"
                             title="Tableau d'activités de sprint"
                             onclick="openModal(this.src, this.title)"
                             alt="Data sprint">
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

                <p class="competenceDescription">
                    Par ailleurs, mon expérience professionnelle au <a href="https://www.cirad.fr/">CIRAD</a> m'a permis de <b>collaborer</b> au sein d'une <b>équipe pluridisciplnaire</b> autour du même projet <a href="router.php?action=afficherProjet&controleur=base&numProjet=4">Race against the Fly</a>. En tant que seul informaticien et chargé du développement de l'application accompagnat le jeu sérieux, j'ai dû extraire les besoins utilisateurs, concevoir des solutions pour y répondre, développer et tester, tout en respectant les contraintes non fonctionnelles. Une étape de validation se faisait toutes les semaines pour valider les fonctionnalités dévelopées.
                </p>

                <p class="competenceDescription">

                </p>

                <div class="competenceListes">
                    <h4 class="acTitle">Apprentissages critiques</h4>
                    <ul class="acList">
                        <li class="acItem">AC1 - Identifier les processus présents dans une organisation
                            en vue d'améliorer les systèmes d'information</li>
                        <li class="acItem">AC2 - Formaliser les besoins du client et de l'utilisateur</li>
                        <li class="acItem">AC3 - Identifier les critères de faisabilité d'un projet informatique</li>
                        <li class="acItem">AC4 - Définir et mettre en œuvre une démarche de suivi de
                            projet</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



