<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://fonts.googleapis.com/css?family=Amiri|Source+Sans+Pro:200,400&display=swap&subset=latin-ext" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        
        <title>Dimitrifromfranzfeld</title>
    </head>
    <body>
        <!-- header start -->
        <header class="header">
            <ul class="header__nav">
                <li class="header__nav--item">
                    <a href="#kolekcije" class="header__nav--link">Kolekcije</a>
                </li>
                <li class="header__nav--item">
                    <a href="#salon" class="header__nav--link">Salon</a>
                </li>
                <li class="header__nav--item">
                    <a href="#kontakt" class="header__nav--link">Kontakt</a>
                </li>
            </ul>
            <h1 class="header__logo">
                <a href="index.php" class="header__logo--link">
                    <picture>
                            <source srcset="img/logo.png" media="(min-width: 801px)">
                            <img src="img/logo_small.png">
                    </picture>
                </a>
            </h1>
            <a href="work.html" class="btn draw-border">Svi radovi</a>
            <div class="mobile__nav">
                <input type="checkbox" class="mobile__nav--checkbox" id="nav-toggle">
                <label for="nav-toggle" class="mobile__nav--btn">
                    <span class="mobile__nav--icon"></span>
                </label>
                <ul class="header__mobile-nav">
                    <li class="header__mobile-nav--item">
                        <a href="#kolekcije" class="header__nav--link header__mobile-nav--link">Kolekcije</a>
                    </li>
                    <li class="header__mobile-nav--item">
                        <a href="#salon" class="header__nav--link header__mobile-nav--link">Salon</a>
                    </li>
                    <li class="header__mobile-nav--item">
                        <a href="#kontakt" class="header__nav--link header__mobile-nav--link">Kontakt</a>
                    </li>
                    <li class="header__mobile-nav--item">
                        <a href="work.html" class="header__nav--link header__mobile-nav--link">Svi Radovi</a>
                    </li>
                </ul>
                <a href="#" class="header__logo--link">
                    <img src="img/logo_small.png">
                </a>
                <div class="header-bg"></div>
            </div>
        </header>
        <div class="line">
            <div class="line__item line--1"></div>
            <div class="line__item line--2"></div>
            <div class="line__item line--3"></div>
            <div class="line__item line--4"></div>
            <div class="line__item line--5"></div>
            <div class="line__item line--6"></div>
        </div>
        <div class="fullpage" id="fullpage">
            <section class="section fp-auto-height-responsive" id="kolekcije">
                <div class="kolekcije">
                    <section class="kolekcije__gallery">
                        <div class="kolekcije__gallery--item kolekcije__gallery--item-1">
                            <figure>
                                <a href="vreme.html">
                                    <img src="img/model_01.png" alt="model 1" class="kolekcije__gallery--img">
                                </a>
                            </figure>
                            <div class="kolekcije__gallery--info">
                                <span class="kolekcije__gallery--info-num">01</span>
                                <p class="kolekcije__gallery--info-title">Kolekcija - Vreme</p>
                            </div>
                            <a href="work.html" class="kolekcije__gallery--link"><span></span></a>
                        </div>
                        <div class="kolekcije__gallery--item kolekcije__gallery--item-2">
                            <figure>
                                <a href="buc-kesidi.html">
                                    <img src="img/model_02.png" alt="model 2" class="kolekcije__gallery--img">
                                </a>
                            </figure>
                            <a href="buc-kesidi.html" class="kolekcije__gallery--link"><span></span></a>
                            <div class="kolekcije__gallery--info">
                                <span class="kolekcije__gallery--info-num">02</span>
                                <p class="kolekcije__gallery--info-title">Kolekcija - Buč Kesidi</p>
                            </div>
                        </div>
                    </section>
                    <div class="vertical-nav">
                        <p>Kolekcije</p>
                    </div>
                </div>
            </section>
            <section class="section fp-auto-height-responsive">
                <div class="salon">
                    <div class="salon__info">
                        <h3 class="salon__info--title">Dimitri from franzfeld</h3>
                        <p class="salon__info--text">
                            Dimitri from Franzfeld frizerski salon osnovan je sa idejom da mušterijama ponudimo uslugu najvišeg nivoa. Ljubaznošću, iskustvom,umećem i pažljivim pristupom svakom detalju nudimo vrhunsku brigu Vašoj kosi.
                        </p>
                        <p class="salon__info--text">
                            Frizerski salon osnovan je u Pančevu, juna 2017. godine. Osnivač i vlasanik je Zoran Dimitrijevski.
                        </p>
                        <p class="salon__info--bg-text">Salon</p>
                    </div>
                    <div class="salon__image salon__image--1">
                        <figure class="salon__image--item">
                            <img src="img/salon_01.png" alt="salon 1">
                        </figure>
                    </div>
                    <div class="salon__image salon__image--2">
                        <figure class="salon__image--item">
                            <img src="img/salon_02.png" alt="salon 2">
                        </figure>
                    </div>
                </div>
                <div class="vertical-nav">
                    <p>Salon</p>
                </div>
            </section>
            <section class="section fp-auto-height-responsive">
                <div class="contact">
                    <div class="contact__img">
                        <figure class="contact__img--item">
                            <img src="img/zoki.png" alt="Zoran Dimitrijevski">
                        </figure>
                    </div>
                    <form method="POST" action="" class="contact__form">
                        <div class="form-group">
                            <label for="name">Ćao ja sam:</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Moj email je:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">a moja poruka je:</label>
                            <textarea name="message" class="form-control" id="message" cols="10" rows="3"></textarea>
                        </div>
                        <button class="draw-border btn" type="submit">Pošalji</button>
                    </form>

                <?php if(isset($_POST['submit'])):?>
                <?php
                    // the message
                    $msg = $_POST['message'];

                    // use wordwrap() if lines are longer than 70 characters
                    $msg = wordwrap($msg,70);
                    $subject = $_POST['name'];
                    $adminmail="zhgunner@gmail.com";
                     $headers = "From: ".$_POST['email'];
                    mail($adminmail,$subject,$msg,$headers);
?>
<script>
                    // refreshes page(better than header)
                    if ( window.history.replaceState ) {
                    window.history.replaceState( null, null, window.location.href="index.php" );
                    }
            </script>  
                
                
                
                <?php endif;?>
                    <div class="contact__info">
                        <div class="contact__info--address contact__info--item">
                            <svg class="contact__info--icon">
                                <use xlink:href="img/sprite.svg#icon-map-marker"></use>
                            </svg>
                            <p>Žarka Zrenjanina 26, Pančevo</p>
                        </div>
                        <div class="contact__info--tel contact__info--item">
                            <svg class="contact__info--icon">
                                <use xlink:href="img/sprite.svg#icon-phone"></use>
                            </svg>
                            <a href="tel:+381641702609">064 1702 609</a>
                        </div>
                        <div class="contact__info--email contact__info--item">
                            <svg class="contact__info--icon">
                                <use xlink:href="img/sprite.svg#icon-envelope-o"></use>
                            </svg>
                            <a href="mailto:kontakt@dimitrifromfranzfeld.rs">kontakt@dimitrifromfranzfeld.rs</a>
                        </div>
                    </div>
                    <p class="contact__bg-text">Kontakt</p>
                </div>
                <div class="vertical-nav">
                    <p>Kontakt</p>
                </div>
            </section>
        </div>
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="js/scrolloverflow.min.js" type="text/javascript"></script>
        <script src="js/fullpage.extensions.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
    </body>
</html>