<!DOCTYPE HTML>
<html lang="pl" xmlns="http://www.w3.org/1999/html">
<head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal for inhabitants of The Townhouse">
    <meta name="author" content="Marek Kamiński">
    <title>KamienicaMVC</title>

    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/__reset.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">-->
    <!--these ones (above and below) are optional - we use them intechangeably, whether on production or on developing-->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Cherry+Swash&subset=latin,latin-ext' type='text/css'>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style2.css">

</head>

<body>

<div id="mainContainer">




    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <a href="<?php echo ROOT_URL ?>" class=" navbar-brand">Kamienica</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['is_logged_in'])) : ?>

                    <li class="nav-item">
                        <a href="#" class="nav-link">Witaj, Mieszkańcu lokalu nr <?php echo $_SESSION['user_data']['user']; ?></a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo ROOT_URL; ?>users/logout" class=" nav-link">Wyloguj</a>
                    </li>

                <?php elseif (isset($_SESSION['is_logged_in_admin'])) : ?>
                    <div id="adminNr">Witaj, Administratorze nr <?php echo $_SESSION['user_data']['user']; ?></div>

                    <li class="nav-item">
                        <a href="<?php echo ROOT_URL; ?>admins" class=" nav-link">panel administratora</a>
                    </li>

                    <li class="nav-item ">
                        <a href="<?php echo ROOT_URL; ?>users/logout" class=" nav-link">Wyloguj</a>
                    </li>

                <?php else : ?>


                    <li class="nav-item ">
                        <a href="<?php echo ROOT_URL; ?>users/login" class=" nav-link" id="signIn">Zaloguj</a>
                    </li>

                <?php endif; ?>
            </ul>
        </div>


    </nav>



    <div class="container con">

        <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

        <?php /*Messages::display(); */ ?>
        <?php require($view); ?>

    </div>

    <div id="fill"></div>

    <footer class="footer">
        <div class="container"><span class="text-muted">2017 &copy; Marek Kamiński</span> <a href="mailto:marekkaminski26@gmail.com" class="d-block float-right">kontakt</a></div>
    </footer>

</div>

</body>


<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT_PATH; ?>assets/js_dest/mainJs.js"></script>
<script src="https://use.fontawesome.com/480b5b67e9.js"></script>

</html>
