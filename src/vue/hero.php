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
                    <div class="heroTitle">
                        <h1 class="col-12 d-flex align-items-center hack">>Julien RENAUD</h1>
                    </div>
                    <div class="heroBioContainer col-12 d-flex flex-column">
                        <p class="heroBioText">
                            Hi! Je suis actuellement étudiant en 2e année de BUT Informatique à l'IUT de Montpellier. J’entreprends une spécialité dans le développement d’application en suivant le parcours Réalisation d'Applications, Conception, Développement et Validation (RACDV).
                        </p>
                        <p class="heroBioText">
                            Ma passion consiste à allier mon intérêt pour les systèmes physiques avec mes compétences en informatique. J’ai découvert l’informatique en développant des scripts <a href="https://www.python.org/about/" target="_blank">Python</a> permettant de visualiser des systèmes physiques simples, comme des pendules simples ou doubles, ou encore des systèmes à N corps. Progressivement, je me suis spécialisé dans les systèmes informatiques, que j’aime déconstruire et analyser pour en comprendre en profondeur le fonctionnement. C’est pourquoi, dans chacun de mes projets, je m’assure de bien maîtriser les systèmes et composants sur lesquels je travaille, afin de produire un code propre, robuste et de qualité.
                        </p>
                        <p class="heroBioText">
                            Minutieux, j'aime aussi m'assurer que les applications que je développe soit agréable et ergonomique tout en assurant leurs fonctionnalités. Plongé dans l'informatique, je ne me lasse jamais à découvrir de nouvelles technologies ou de nouveaux langages. Mes dernières découvertes passionnantes étant <a href="https://fr.react.dev/" target="_blank">React</a> et <a href="https://threejs.org/" target="_blank">Three.js</a>.
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
<!--                            <a href="#" class="fa d-flex align-items-center justify-content-center">-->
<!--                                <span class="fa-gitlab"></span>-->
<!--                            </a>-->
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