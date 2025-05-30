<link href="../ressources/scss/projet.css" rel="stylesheet">
<link href="../ressources/scss/competences.css" rel="stylesheet">


<div class="d-flex">
    <?php require __DIR__ . "/sideMenuCompetences.php" ?>

    <div class="competences conteneurProjet">
        <h2 class="pageTitle gerer">Gérer des données de l’information
        </h2>
        <h4 class="acTitle">Composantes essentielles</h4>
        <ul class="ecList">
            <li class="acItem">EC1 - En respectant les réglementations sur le respect de la vie
                privée et la protection des données personnelles</li>
            <li class="acItem">EC2 - En respectant les enjeux économiques, sociétaux et écologiques de l'utilisation du stockage de données, ainsi
                que les différentes infrastructures (data centers, cloud,
                etc.)
            </li>
            <li class="acItem">EC3 - En s'appuyant sur des bases mathématiques</li>
            <li class="acItem">EC4 - En assurant la cohérence et la qualité</li>
        </ul>
        <div class="competence">
            <h3 class="competenceTitle gerer">Niveau 1 : Concevoir et mettre en place une base de données à partir
                d'un cahier des charges client</h3>

            <p class="competenceDescription">OK</p>

            <div class="competenceListes">
                <h4 class="acTitle">Aprentissages critiques</h4>
                <ul class="acList">
                    <li class="acItem">AC1 - Mettre à jour et interroger une base de données relationnelle (en requêtes directes ou à travers une application)
                    </li>
                    <li class="acItem">AC2 - Visualiser des données</li>
                    <li class="acItem">AC3 - Concevoir une base de données relationnelle à partir d'un
                        cahier des charges</li>
                </ul>

                <h3 class="competenceTitle gerer">Niveau 2 : Optimiser une base de données, interagir avec une
                    application et mettre en œuvre la sécurité </h3>

                <p class="competenceDescription">
                    L'acquisition des <a href="../ressources/pdf/CNIL_certifs.pdf" target="_blank">certificats</a> de <b>l'atelier RGPD du CNIL</b> m'a permis en autre de découvrir les différents <b>types de données</b> (personnelles, non personnelles, identifiables, sensibles, etc.) et les règlementations en lien avec ces types de données en fonction de la <b>finalité du traitement</b> (minimisation, anonymisation, conservation, consentement, etc.).
                </p>
                <p class="competenceDescription">
                    A travers divers projets, j'ai pu manipuler des <b>données hétérogènes</b>, en respectant la confidentialité. Par exemple, le projet
                    <a href="">StudAdvisor</a> m'a permis de manipuler des données issues directement de l'IUT (LDAP et données anonymisées sur les notes) via une base de données sécurisée (en utilisant des requêtes SQL préparées), en gérant l'accès aux données selon les droits de l'utilisateur et le but de l'application. Le projet m'a également permis de restituer des données brutes (formats CSV) pour les transformer en données relationnelles et les gérer via une application web dynamique (en PHP) pour un affichage visuel et ergonomique.
                </p>
                <p class="competenceDescription">
                    Par ailleurs, lors de mon stage de deuxième année au CIRAD avec le projet <a href="">Race against the Fly</a>, j'ai manipulé (extraire, convertir et génerer) des données issues de <b>résultats scientifiques</b> pour mettre en œuvre une <b>interface graphique</b> en <i>Python</i> avec des données de configurations (yaml) et des données de modélisaiton (csv). Cette application permet la saisie des données dans un <b>modèle scientifique</b>, l'affichage des résultats via l'interface graphique, ainsi que leur restitution sous forme de données organisées (graphiques, tableaux et logs).
                </p>

                <p class="competenceDescription">
                    Les cours de base de données m'ont permis de consolider mes connaissances en <b>conception et normalisation de bases
                    de données relationnelles</b>. Le projet <a href="">Tricount</a> a été une concrétisation de l'optimisation d'un modèle de données préexistant. La normilsation de la base de données pour ce projet a permis de mieux structurer les données afin d'éviter toutes formes d'incohérence et de redondance. L'application des <b>trois formes normales</b> et des <b>théorèmes de Casey Delobel et de Boyce-Codd</b> m'a permis de m'assurer que les données ont bien été conservée durant le precessus de normalisation.
                </p>

                <div class="competenceListes">
                    <h4 class="acTitle">Aprentissages critiques</h4>
                    <ul class="acList">
                        <li class="acItem">AC1 - Optimiser les modèles de données de l'entreprise
                        </li>
                        <li class="acItem">AC2 - Assurer la confidentialité des données (intégrité et sécurité)
                        </li>
                        <li class="acItem">AC3 - Organiser la restitution de données à travers la programmation et la visualisation</li>
                        <li class="acItem">AC4 - Manipuler des données hétérogènes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



