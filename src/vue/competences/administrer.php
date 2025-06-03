<link href="../ressources/scss/projet.css" rel="stylesheet">
<link href="../ressources/scss/competences.css" rel="stylesheet">


<div class="d-flex">
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
            <h3 class="competenceTitle administrer">Niveau 1 : Installer et configurer un poste
                de travail</h3>

            <p class="competenceDescription">
                Installer et configurer un poste de travail, créer une clé USB bootable pour
                installer une distribution (ici Ubuntu avec son GUI intégré GNOME) Linux en
                Dual-Boot avec Windows ; ou bien en VM via VirtualBox. L’installation contient
                des dossiers partagés entre les OS, des kits de développement comme JDK et des
                éditeurs de code source tel que VSCode. La comparaison des deux configurations,
                ainsi que la notice d’installation du setup ont été rédigés. [exemple de instructions]
            </p>

            <p class="competenceDescription">
                Utilisation de GitLab de l’IUT et Github pour organiser le travail durant les SAE.
                Comprendre l’outil de versionnage, les commandes de bases (pull, add, commit,
                push), et les notions de conflits (merge). Configuration de git sous Windows avec
                gitBash. Génération d’une clef SSH pour l’authentification et établir un canal de
                communication sécurisée et crypté entre l’utilisateur et le serveur. Utiliser un
                client FTP (FileZilla) pour se connecter aux serveurs de l’IUT et accéder aux
                dossiers de travail.
            </p>

            <p class="competenceDescription">
                Découverte des composants d’un ordinateur (hardware/software). Découverte du
                système d’exploitation Linux avec la distribution Ubuntu et son programme Shell
                nommé bash (commandes de base via la console du terminal, notion de
                stdin/stdout/stderr, système de fichiers et inodes, permissions, bash script...).
                Compréhension des circuits électroniques (portes logiques) et de l’architecture
                d’un microprocesseur (unités, bus, registres…). Comprendre comment est
                construit l’UAL (Unité arithmétique et logique) du microprocesseur. Réaliser des
                circuits sur un simulateur en ligne CircuitVerse. [exemple circuit]
            </p>

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

                <h3 class="competenceTitle administrer">Niveau 2 : Déployer des services dans une architecture réseau</h3>

                <p class="competenceDescription">
                    La deuxième année de BUT Informatique m'a permis de développer des compétences techniques en virtualisation.
                    J'ai ainsi appris à approfondir mes connaissances sur des outils de virtualisation tels que <i>VirtualBox</i>, <i>VMware Workstation</i> et <i>Hyper-V</i>. Avec ces outils, j'ai pu concevoir des <b>environnemts virtuels</b> dans lesquels j'ai pu configurer des <b>services</b> de manière sécure (serveurs web, base de données, serveur ssh, etc.) et tester mes applications.
                </p>
                <p class="competenceDescription">
                    Par ailleurs, la découverte de <i>Docker</i> m'a permis de maitriser la <b>conteneurisation</b> des applications et des services que je développe et de les rendre <b>portables</b>. Le projet <a href="">Tricount</a> m'a notemment permis d'appliquer cela, en conteneurisant une application web avec l'utilisation d'un <b>dockerfile</b>, de <b>docker-compose</b> et d'un <b>makefile</b> pour la configuration des differents services (serveur web <i>Apache</i>, base de données <i>MariaDB</i>, et gestionnaire de migrations <i>Flyway</i>) et la simplification de leur déploiement.
                </p>

                <p class="competenceDescription">
                    J'ai pu aussi apprendre durant le projet <a href="">Tricount</a> à identifer les différentes failles de sécurité d'une application web et d'effectruer un <b>audit de sécurité</b>, avant de corriger et améliorer l'application. Les projets <a href="">Tricount</a>, <a href="">StudAvdvisor</a> et <a href="">GoPetSit</a> m'ont permis d'analyser l'aspect sécuritaire d'une application web. J'ai pu ensuite implémenter divers techniques de sécuriation d'un site web comme l'utilisation de <b>requêtes préparées</b> pour la protection contre les <b>injections SQL</b>, l'échapement des balises pour parier contre les <b>injections XSS</b>, la sécurisation des cookies et des sessions, l'utilisation de <b>token CSRF</b>, <b>hachage et salage</b> de mots de passe et l'utilisation de <b>nonces</b> pour la récupération de mots de passe. La considération des diverses normes <b>RGPD</b> et l'acquisition des <a href="../ressources/pdf/CNIL_certifs.pdf" target="_blank">certificats</a> de <b>l'atelier RGPD du CNIL</b> me permet d'appréhender davantage l'aspect sécuritaire de mes projets.
                </p>

                <p class="competenceDescription">
                    Finalement, lors de mon stage de trois mois en entreprise au <b>CIRAD</b>, j'ai eu l'occasion de configurer mon poste de travail informatique relié au réseau de l'entreprise en y installant les outils nécessaires au bon déroulement du projet
                    <a href="">Race against the Flies</a>.
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



