<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <?php
    $zodiac = ["aquarius", "aries", "cancer", "capricorn", "gemini", "leo", "libra", "pisces", "sagittarius", "scorpio", "taurus", "virgo"];
    $choice= array_rand($zodiac); ?>
    <a class="navbar-brand flex-grow-0" href="router.php?action=afficherHero&controleur=base">
        <div>
        <img class="brand-logo" src="../ressources/img/zodiac/<?="{$zodiac[$choice]}.png"?>" alt="zodiac logo">
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav bg-primary padding">
            <li class="nav-item active">
                <a class="nav-link" href="router.php?action=afficherHero&controleur=base">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="router.php?action=afficherProjets&controleur=base">Projets</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="#">Contact</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    Dropdown link-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
        </ul>
    </div>
</nav>