<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titre ?? "JR Portfolio") ?></title>
    <meta name="description"
          content="">
    <meta name="keywords" content="">
    <meta name="author" content="Boll">
    <link rel="icon" type="image/x-icon" href="">

    <link rel="stylesheet" href="../ressources/scss/custom.css">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../ressources/scss/app.css">
    <link rel="stylesheet" href="../ressources/scss/boutons.css">
    <link rel="stylesheet" href="../ressources/scss/trail.css">

    <title>Hello, world!</title>
</head>

<body>
<header class="sticky-top">
    <?php require __DIR__ . "/navbar.php" ?>
</header>
<main>
    <?php
    /**
     * @var string $vue
     * @var string $message
     */
    if (!empty($message))
        echo "<p class='content message'><i>" . htmlspecialchars($message) . "</i></p>";

    require __DIR__ . "/$vue";
    ?>


</main>
<footer>

</footer>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="../ressources/js/gallery.js"></script>

</html>