<!DOCTYPE html>

<!-- language_attributes() permet changer la langue du site depuis le back-office -->
<head <?php language_attributes() ?>>
    <!-- bloginfo('charset') permet de décider de l'encodagede manière dynamique (back office de WP) au lieu d'avoir du code  -->
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bloginfo('name') permet de modifier dynamiquement le nom du site dans l'onglet -->
    <title><?php bloginfo('name') ?></title>

    <!-- CDN CSS BT -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- MON CSS -->
    <!-- bloginfo('template_directory') permet de récupérer le chemin  vers mon theme (voir le echo ligne 25 en dessous) pour acceder à style.css au lieu d'ecrire en dur l'intégralité de ce chemin -->
    <!-- Dans l'attribut href de <link> je ne peux pas juste preciser style.css. Je dois renseigner la totalité du chemin en partant de wo-content. Syntaxe rigide, sinon le css sera pas reconnu -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css">

    <!-- Va créer l'espace en haut de ma page pour que la liste d'admin de WP puisse s'insérer -->
    <!-- Doit obligatoirement être codée avant la balise fermante </head>-->
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

<!-- Pour afficher le chemin  -->
<!-- <?= bloginfo("template_direction") ?> -->

<!-- permet de récupérer les class/variables prédéfinies de WP, si on en a besoin. Faire un var_dump(get_defined_vars()) avec balise <pre> pour les visialiser -->

<header class="container-fluid">
    <!-- Nos deux zones/widgets au-dessus de la nav -->
    <div class="row">
        <!-- Celle de la gauche -->
        <div class="bleu col-6"><?php dynamic_sidebar('haut-gauche') ?></div>
        <!-- Celle de la droite -->
        <div class="violet col-6"><?php dynamic_sidebar('haut-droit') ?></div>
    </div>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- FIN DE LA NAV BS -->
</header>

<!-- Widget pour l'image entete -->
<div class="row">
    <div class="vert col-12"><?php dynamic_sidebar('entete') ?></div>
</div>

<main class="container">