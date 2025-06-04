<link href="../ressources/scss/projet.css" rel="stylesheet">

<a class="boutonBack" href="router.php?action=afficherProjets&controleur=base">Revenir aux projets</a>
<?php $projectImgDir = "mango" ?>
<div class="conteneurProjet">
    <h1 class="titreProjet">Projet GoPetSit™</h1>

    <section>
        <h2 class="sousTitreProjet">Contexte</h2>
        <p class="contentProjet">
            Dans le contexte d'un projet étudiant de développement d'application, en équipe de quatre développeurs, nous
            travaillons sur une <b>application de réservation de services en ligne pour gestion des animaux de compagnie</b>.
            Nous utilisons la technologie <i>Symfony</i> pour le back-end, <i>MariaDB</i> pour la base de données et <i>Tailwind CSS</i> pour le front-end. Je m'occupe particuliérement de la conception du <b>pannel d'administration</b> et du système de <b>gestion de créneau via un calendrier interactif</b>. Le projet est actuellement en cours de développement.
        </p>
    </section>
    <section>
        <h2 class="sousTitreProjet">Contributeurs</h2>
        <div class="galleryContainer">
            <div class="galleryItem php">
                <img src="../ressources/img/lancementgps.png"
                     title="Equipe Lancement GoPetSit"
                     onclick="openModal(this.src, this.title)"
                     alt="Equipe Lancement GoPetSit">
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
    </section>
</div>



