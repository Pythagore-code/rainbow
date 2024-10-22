<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Police Nunito-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Rainbow Service</title>
</head>
<body>
    <body>
        <!-- Premiere section de la vue principale -->
        <div class="premiere-vue">
            <div class="nav-bar">
                <img src="{{ asset('img/logo-rainbow.png') }} " class="logo">
                <div class="onglet-nav-bar">
                    <a class="ong" href="#">Accueil</a>
                    <a class="ong" href="#">Boutique</a>
                    <a class="ong" href="#">Mes abonnements</a>
                    <a class="ong" href="#">A propos de nous</a>
                    <a class="ong" href="#" ><i class="fa-solid fa-user"></i></a>
                </div>
            </div>

            <div class="milieu-premiere-vue">
                <p class="slogan">DU STREAMING À PORTÉ DE MAIN, <br> DES PAIEMENTS À PORTÉ DE CLIC</p>
                <img class="img-telecommande" src="{{asset('img/istock-1476749137-copie.jpg')}}">
            </div>

            <a href="#" class="boutique">BOUTIQUE</a>
        </div>
        <hr>

        <!-- Information sur Rainbow -->
        <div class="infos-rainbow">
            <h1 class="titre-description-rainbow">RAINBOW SERVICE, WHAT IT’S ?</h1>
            <div class="apropos-de-nous">
                <img class="image-equipe-travail" src="{{asset('img/equipe de travail.png')}}">
                <p class="text-apropos">Rainbow Service facilite votre accès  a toutes vos plateformes de streaming, et vous offre des moyens de paiement mobile pour des services internationaux au delà de la limite bancaire. Entre streaming, achat a l’international en passant par la livraison a domicile vous trouverez votre compte dans le panel de service que vous propose Rainbow.</p>
                <a href="#" class="savoir-plus">EN SAVOIR PLUS</a>
            </div>
        </div>

        <!-- Les avis -->
        <div class="avis">
            <div class="img-fond">
                <img src="{{asset('img/')}}">
                <h1 class="titre-temoignage">Temoignage</h1>
                <h2 class="les-gens-disent">Avis des utilisateurs</h2>
                <p class="description-avis">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="commentaires">
                    <div class="commentaire">
                        <!--les etoiles-->
                        <div class="image-nom">
                            <img class="image-profil-commentaire" src="{{asset('img/images.jpeg')}}">
                            <p class="nom-profil-commentaire">Sophie SAMBA</p>
                        </div>
                        <p class="text-commentaire">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="temps-commentaire"> just now </p>
                    </div>
                    <div class="commentaire">
                        <!--les etoiles-->
                        <div class="image-nom">
                            <img class="image-profil-commentaire" src="{{asset('img/images.jpeg')}}">
                            <p class="nom-profil-commentaire">Sophie SAMBA</p>
                        </div>
                        <p class="text-commentaire">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="temps-commentaire"> just now </p>
                    </div>
                    <div class="commentaire">
                        <!--les etoiles-->
                        <div class="image-nom">
                            <img class="image-profil-commentaire" src="{{asset('img/images.jpeg')}}">
                            <p class="nom-profil-commentaire">Sophie SAMBA</p>
                        </div>
                        <p class="text-commentaire">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="temps-commentaire"> just now </p>
                    </div>
                </div>
            </div>
            <hr>
        </div>

        <!-- Services rainbow-->
        <div class="services">
            <h1>QUELQUES SERVICES RAINBOW</h1>
            <div class="streamingTV">
                <div class="head-stream">
                    <h1>STREAMING TV </h1>
                    <a href="#" class="voir-plus"> Voir plus</a>
                </div>
                <div class="cards">
                    <div class="card">
                        <h1>Abonnement Netflix</h1>
                        <img src="{{asset('img/Netflix.jpeg')}}">
                        <p>Profitez de vos films et séries préférés dans les meilleures résolution à partir de 2000 Francs Cfa seulement</p>
                        <a href="#">S'ABONNER</a>
                    </div>

                    <div class="card">
                        <h1>Abonnement Netflix</h1>
                        <img src="{{asset('img/Netflix.jpeg')}}">
                        <p>Profitez de vos films et séries préférés dans les meilleures résolution à partir de 2000 Francs Cfa seulement</p>
                        <a href="#">S'ABONNER</a>
                    </div>

                    <div class="card">
                        <h1>Abonnement Netflix</h1>
                        <img src="{{asset('img/Netflix.jpeg')}}">
                        <p>Profitez de vos films et séries préférés dans les meilleures résolution à partir de 2000 Francs Cfa seulement</p>
                        <a href="#">S'ABONNER</a>
                    </div>
                </div>
            <div>
        </div>



    </body>
</body>
</html>