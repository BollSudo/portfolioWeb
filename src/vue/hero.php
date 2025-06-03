<div id="canvasWrap" class="canvasWrap">
    <canvas id="canvas" class="canvas"></canvas>
        <div id="heroContainer" class="row">
            <div class="actualHeroBg" id="actualHeroBg"></div>
            <div class="heroBgContainer" id="heroBgContainer">
                <video autoplay muted loop id="heroBgVideo">
                    <source src="../ressources/video/bg-video-purpleNebula.mp4" type="video/mp4">
                </video>
            </div>
            <div id="leftContainer" class="d-flex col-sm-11 col-md-8 col-lg-8">
                <div class="contentBannerBox row">
                    <h1 class="heroTitle col-12 d-flex align-items-center">>Julien RENAUD</h1>
                    <div class="heroBioContainer col-12 d-flex flex-column">
                        <p class="heroBioText">
                            Hi! Je suis actuellement étudiant en 2e année de BUT Informatique à l'IUT de Montpellier. J’entreprends une spécialité dans le développement d’application en suivant le parcours Réalisation d'Applications, Conception, Développement et Validation (RACDV).
                        </p>
                        <p class="heroBioText">
                            Ce qui me passionne, c’est notamment de concevoir et développer des applications qui transforment des données brutes en visualisation ergonomique, accessible et compréhensible de tous.
                        </p>
                        <p class="heroBioText">
                            Une de mes occupations, c'est de combiner ma passion pour les systèmes physiques et mes connaissances en Informatique. J'ai découvert l'Informatique en créant des scripts <a href="">Python</a> permettant la visualisation de systèmes physiques simples (pendules simples, doubles, système à N corps...). Je me suis spécialisé de plus en plus dans les systèmes informatiques que j'aime decomposer et décortiquer pour comprendre leur fonctionnement. Un des projets que j'ai aimé réaliser est le développement d'un moteur de jeu 2D en partant de zéro <a href="">OPENGL</a>, dans lequel j'ai découvert de nombreux concepts qui m'animent : les Shaders, le Rendering, la Physique...
                        </p>
                        <p class="heroBioText">
                            Minutieux, j'aime m'assurer que les applications que je développe soit agréable et ergonomique tout en assurant leurs fonctionnalités. Plongé dans l'informatique, je ne me lasse jamais à découvrir de nouvelles technologies ou de nouveaux langages. Mes dernières découvertes passionnantes étant <a href="">React</a> et <a href="">THREE.JS</a>.
                        </p>
                        <p class="heroBioText">
                            En ce qui concerne mes études, je compte terminer ma formation et poursuivre mes études en école d'ingénieur ou en Master. Le domaine me reste encore incertain. En-dehors des études, je suis un aficionado du badminton et du volley ! Je m'intéresse constamment aux dernières nouveautés technologiques, à l'espace et la culture japonaise. 💻🪐🌸🏸🏐
                        </p>
                        <div class="socialsContainer d-flex align-items-center">
                            <a href="https://github.com/BollSudo" title="Github Profile" class="fa d-flex align-items-center justify-content-center">
                                <span class="fa-github"></span>
                            </a>
                            <a href="https://www.linkedin.com/in/renaudj" title="LinkedIn Profile" class="fa d-flex align-items-center justify-content-center">
                                <span class="fa-linkedin"></span>
                            </a>
                            <a href="#" class="fa d-flex align-items-center justify-content-center">
                                <span class="fa-gitlab"></span>
                            </a>
                            <a href="mailto:julien.renaud1212@gmail.com" title="Envoyer mail" class="fa d-flex align-items-center justify-content-center">
                                <span class="fa-google"></span>
                            </a>
                            <a href="../ressources/pdf/CV.pdf" title="CV" alt="Bouton CV" target="_blank" class="fa d-flex align-items-center">
                                <div class="cvConteneur">
                                <span class="d-none d-md-flex">CV</span>
                                <img id="cvBouton" src="../ressources/img/ico-cv.png">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="midContainer" class="col-sm-1 col-md-1 col-lg-1">
                <div class="btnContainer d-flex flex-sm-column flex-wrap gap-3">
                    <button type="button" id="btn-stopAnimation" class="btn btn-hero" onclick="spin(this)">
                        <img src="../ressources/img/ico-sablier.png" alt="logo bouton sablier">
                    </button>
                    <button type="button" id="btn-special" class="btn btn-hero">
                        <img src="../ressources/img/blackHole.gif" alt="logo bouton special">
                    </button>
                </div>
            </div>
            <div id="rightContainer" class="d-none d-md-flex col-md-3 col-lg-3">
                <div class="contentBannerBox d-flex flex-column justify-content-center align-items-center">
                    <div class="kanjiContainer">
                        <div class="itemKanji">希</div>
                        <div class="itemKanji">望</div>
                    </div>
                </div>
            </div>
            <div id="contentContainer">
                <?php include __DIR__ . "/timeline/timeline.php"; ?>
            </div>
        </div>
</div>



<script src="../ressources/js/mouse.js"></script>
<script src="../ressources/js/boutons.js"></script>