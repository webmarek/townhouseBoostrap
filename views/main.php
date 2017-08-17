<!DOCTYPE HTML>
<html lang="pl" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal for inhabitants of The Townhouse">
    <meta name="author" content="Marek Kamiński">
    <title>KamienicaMVC</title>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">-->
    <!--these ones (above and below) are optional - we use them intechangeably, wheteher on production or on developing-->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/jquery-ui.min.css">
    


    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>-->


    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style2.css">

</head>

<body>

<div id="mainContainer">

    <!--<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
-->

    <div class="shadow">
        <img src="<?php echo ROOT_PATH; ?>/assets/img/flamenco.jpg"/>
    </div>

    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a href="<?php echo ROOT_URL ?>" class="btnJqUi navbar-brand">Kamienica</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['is_logged_in'])) : ?>

                <li class="nav-item">
                    Witaj, Mieszkańcu lokalu nr <?php echo $_SESSION['user_data']['user']; ?>
                </li>

                <li class="nav-item ">
                    <a href="<?php echo ROOT_URL; ?>users/logout" class="btnJqUi nav-link">Wyloguj</a>
                </li>

                <?php elseif (isset($_SESSION['is_logged_in_admin'])) : ?>
                <div id="adminNr">Witaj, Administratorze nr <?php echo $_SESSION['user_data']['user']; ?></div>

                <li class="nav-item">
                    <a href="<?php echo ROOT_URL; ?>admins" class="btnJqUi nav-link">panel administratora</a>
                </li>

                <li class="nav-item ">
                    <a href="<?php echo ROOT_URL; ?>users/logout" class="btnJqUi nav-link">Wyloguj</a>
                </li>

                <?php else : ?>


                <li class="nav-item ">
                    <a href="<?php echo ROOT_URL; ?>users/login" class="btnJqUi nav-link" id="signIn">Zaloguj</a>
                </li>

                <?php endif; ?>
            </ul>
        </div>


    </nav>-->


    <div class="container">

        <?php /*Messages::display(); */?>
        <?php require($view); ?>

    </div>

    <nav id="footer" class="navbar navbar-toggleable-md">
        2017 &copy; Marek Kamiński <a href="mailto:marekkaminski26@gmail.com" class="btnJqUi">kontakt</a>

    </nav>

</div>

</body>
<script
        src="https://code.jquery.com/jquery-2.1.4.min.js"
        integrity="sha256-8WqyJLuWKRBVhxXIL1jBDD7SDxU936oZkCnxQbWwJVw="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>assets/js/mainJs.js"></script>

</html>
