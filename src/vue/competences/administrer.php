<link href="../ressources/scss/projet.css" rel="stylesheet">
<link href="../ressources/scss/competences.css" rel="stylesheet">

<?php require __DIR__ . "/boutonsNiveau.php" ?>

<div class="conteneurCompetence">
    <?php require __DIR__ . "/sideMenuCompetences.php" ?>

    <div class="competences conteneurProjet">
        <h2 class="pageTitle administrer">Administrer des systèmes informatiques communicants complexes</h2>
        <h4 class="acTitle">Composantes essentielles</h4>
        <ul class="ecList">
            <li class="acItem">EC1 - En sécurisant le système d'information</li>
            <li class="acItem">EC2 - En appliquant les normes en vigueur et les bonnes pratiques architecturales et de sécurité
            </li>
            <li class="acItem">EC3 - En offrant une qualité de service optimale</li>
            <li class="acItem">EC4 - En assurant la continuité d'activité</li>
        </ul>
        <div class="competence">
            <h3 id="niveau1" class="competenceTitle administrer">Niveau 1 : Installer et configurer un poste
                de travail</h3>

            <p class="competenceDescription">
                Lors de ma première année de BUT Informatique, j’ai appris à installer et configurer un poste de travail en créant une <b>clé USB bootable</b> pour installer une distribution <i>Linux</i> (<i>Ubuntu</i> avec l’interface GNOME), en <b>dual-boot</b> avec <i>Windows</i> ou dans une <b>machine virtuelle</b> via <i>VirtualBox</i>. L’environnement de travail mis en place comprenait des dossiers partagés entre les systèmes, des outils de développement tels que le JDK, ainsi que des éditeurs de code comme <i>Visual Studio Code</i>. J’ai également rédigé une <a href="../ressources/pdf/saeLinux.pdf" target="_blank">notice</a> d’installation et de comparaison entre les deux configurations (dual-boot et VM), en analysant leurs avantages et inconvénients.
            </p>

            <p class="competenceDescription">
                Au cours de mes projets, j’ai su utiliser les <b>outils de versionnings</b> <i>GitLab</i> et <i>GitHub</i> pour organiser le travail collaboratif. J’ai su manipuler les commandes fondamentales de <i>Git</i> (pull, add, commit, push) et j'ai su gérer des conflits (merge, rebase). Par ailleurs, j'ai su manier des outils de gestion de bases de données comme <i>MySQL</i> et <i>MariaDB</i>, des outils de transfert de données tels que <i>FileZilla</i> (FTP, SFTP) et de connexion à distance comme <i>PuTTY</i> (SSH).
            </p>

            <p class="competenceDescription">
                J’ai également pu explorer les <b>composants essentiels d’un ordinateur</b>, tant au niveau matériel (processeur, mémoire, bus, registres...) que logiciel (système d’exploitation, architecture). J’ai exploré la distribution <i>Ubuntu Linux</i> à travers son terminal <b>bash</b>, en apprenant diverses commandes utiles, la gestion des flux d’entrée/sortie (stdin, stdout, stderr), les permissions, la structure du système de fichiers et la rédaction de scripts bash. J’ai également étudié les portes logiques, les circuits électroniques de base, et le fonctionnement de l’UAL (unité arithmétique et logique) d’un microprocesseur, que j’ai pu simuler grâce à <i>CircuitVerse</i>.
            </p>

            <div class="galleryContainer">
                <div class="galleryItem php">
                    <img src="../ressources/img/competences/ual.png"
                         title="Capture d’écran du circuit LE (LogiquE) de l’UAE réalisé sur le simulateur"
                         onclick="openModal(this.src, this.title)"
                         alt="Image UAL">
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
                    <li class="acItem">AC1 - Identifier les différents composants (matériels et logiciels) d’un système
                        numérique
                    </li>
                    <li class="acItem">AC2 - Utiliser les fonctionnalités de base d’un système multitâches /
                        multiutilisateurs</li>
                    <li class="acItem">AC3 - Installer et configurer un système d’exploitation et des outils de
                        développement</li>
                    <li class="acItem">AC4 - Configurer un poste de travail dans un réseau d’entreprise</li>
                </ul>

                <h3 id="niveau2" class="competenceTitle administrer">Niveau 2 : Déployer des services dans une architecture réseau</h3>

                <p class="competenceDescription">
                    La deuxième année de BUT Informatique m'a permis de développer des compétences techniques en virtualisation.
                    J'ai ainsi appris à approfondir mes connaissances sur des outils de virtualisation tels que <i>VirtualBox</i>, <i>VMware Workstation</i> et <i>Hyper-V</i>. Avec ces outils, j'ai pu concevoir des <b>environnemts virtuels</b> dans lesquels j'ai pu configurer des <b>services</b> de manière sécurisée (serveurs web, base de données, serveur ssh, etc.) et tester mes applications.
                </p>
                <p class="competenceDescription">
                    Par ailleurs, la découverte de <i>Docker</i> m'a permis de maitriser la <b>conteneurisation</b> des applications et des services que je développe et de les rendre <b>portables</b>. Le projet <a href="router.php?action=afficherProjet&controleur=base&numProjet=5">Very Bad Split</a> m'a notemment permis d'appliquer cela, en conteneurisant une application web avec l'utilisation d'un <b>dockerfile</b>, de <b>docker-compose</b> et d'un <b>makefile</b> pour la configuration des differents services (serveur web <i>Apache</i>, base de données <i>MariaDB</i>, et gestionnaire de migrations <i>Flyway</i>) et la simplification de leur déploiement.
                </p>

                <p class="competenceDescription">
                    J'ai pu aussi apprendre durant le projet <a href="router.php?action=afficherProjet&controleur=base&numProjet=5">Very Bad Split</a> à identifer les différentes failles de sécurité d'une application web et d'effectruer un <b>audit de sécurité</b>, avant de corriger et améliorer l'application. Les projets <a href="router.php?action=afficherProjet&controleur=base&numProjet=5">Very Bad Split</a>, <a href="router.php?action=afficherProjet&controleur=base&numProjet=2">Stud Advisor</a> et <a href="router.php?action=afficherProjet&controleur=base&numProjet=6">GoPetSit™</a> m'ont permis d'analyser l'aspect sécuritaire d'une application web. J'ai pu ensuite implémenter divers techniques de sécuriation d'un site web comme l'utilisation de <b>requêtes préparées</b> pour la protection contre les <b>injections SQL</b>, l'échapement des balises pour parier contre les <b>injections XSS</b>, la sécurisation des cookies et des sessions, l'utilisation de <b>token CSRF</b>, <b>hachage et salage</b> de mots de passe et l'utilisation de <b>nonces</b> pour la récupération de mots de passe. La considération des diverses normes <b>RGPD</b> et l'acquisition des <a href="../ressources/pdf/CNIL_certifs.pdf" target="_blank">certificats</a> de <b>l'atelier RGPD du CNIL</b> me permet d'appréhender davantage l'aspect sécuritaire de mes projets.
                </p>

                <p class="competenceDescription">
                    Finalement, lors de mon stage de trois mois en entreprise au <a href="https://www.cirad.fr/">CIRAD</a>, j'ai eu l'occasion de configurer mon poste de travail informatique relié au réseau de l'entreprise en y installant les outils nécessaires au bon déroulement du projet
                    <a href="router.php?action=afficherProjet&controleur=base&numProjet=4">Race against the Flies</a>.
                </p>

                <div class="competenceListes">
                    <h4 class="acTitle">Apprentissages critiques</h4>
                    <ul class="acList">
                        <li class="acItem">AC1 - Concevoir et développer des applications communicantes
                        </li>
                        <li class="acItem">AC2 - Utiliser des serveurs et des services réseaux virtualisés</li>
                        <li class="acItem">AC3 - Sécuriser les services et données d'un système</li>
                        <li class="acItem">AC4 - Configurer un poste de travail dans un réseau d’entreprise</li>
                    </ul>
            </div>
        </div>
    </div>
</div>



