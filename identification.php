<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#ffffff">

    <title>Identification</title>

    <link rel="stylesheet" href="reset.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styleIdentification.css">
</head>


<body>
    
    <!--<section class="background">
        <img src="images/cherry-blossom-1318258_1920.jpg" alt="Flower background">
        <canvas></canvas>
    </section>-->
    
    <h1>Connection / Identification</h1>
    <section class="forms">
        <article class="form-connection">
       <!-- action : c'est l'adresse de la page ou du programme qui va traiter les informations (réponse au problème n°2). Cette page se chargera de vous envoyer un e-mail avec le message si c'est ce que vous voulez, ou bien d'enregistrer le message avec tous les autres dans une base de données.
Cela ne peut pas se faire en HTML et CSS, on utilisera en général un autre langage dont vous avez peut-être entendu parler : PHP.-->
            
            <h2>Sign in</h2>
            <form action="#" method="post">
                <div class="quick">
                    <a href="" class="gmail-co">
                        <img src="images/cherry-blossom-1318258_1920.jpg" alt="gmail connection">
                        <p>Gmail</p>
                    </a>
                    <a href="" class="facebook-co">
                        <img src="images/cherry-blossom-1318258_1920.jpg" alt="facebook connection">
                        <p>Facebook</p>
                    </a>
                </div>
                
                <div class="mail">
                    <label for="email-co">Email</label>
                    <input type="email" name="email-co" value="" placeholder="Enter your email address" id="email-co">
                </div>
                <div class="mdp">
                    <label for="password-co">Password</label>
                    <input type="password" name="password-co" value="" placeholder="Enter your password" id="password-co">
                </div>
                <div class="remember">
                        <input type="checkbox" name="remember-co" value="" id="remember-co">
                        <label for="remember-co">Remember me ?</label>
                </div>
                <div class="submit">
                    <input type="submit">
                </div>
            </form>
        </article>
        
        <article class="form-identification">
       <!-- action : c'est l'adresse de la page ou du programme qui va traiter les informations (réponse au problème n°2). Cette page se chargera de vous envoyer un e-mail avec le message si c'est ce que vous voulez, ou bien d'enregistrer le message avec tous les autres dans une base de données.
Cela ne peut pas se faire en HTML et CSS, on utilisera en général un autre langage dont vous avez peut-être entendu parler : PHP.-->
            
            <h2>Sign up</h2>
            <form action="#" method="post">
                <div class="quick">
                    <a href="" class="gmail">
                        <img src="images/cherry-blossom-1318258_1920.jpg" alt="gmail identification">
                        <p>Gmail</p>
                    </a>
                    <a href="" class="facebook">
                        <img src="images/cherry-blossom-1318258_1920.jpg" alt="facebook identification">
                        <p>Facebook</p>
                    </a>
                </div>
                
                
                <div class="name">
                    <div class="first-name">
                        <label for="first-name-id">First-name</label>
                        <input type="text" name="first-name-id" value="" placeholder="Enter your first-name" id="first-name-id">
                    </div>
                            
                    <div class="last-name">
                        <label for="last-name-id">Last-name</label>
                        <input type="text" name="last-name-id" value="" placeholder="Enter your last-name" id="last-name-id">
                    </div>
                </div>
                
                <div class="mail">
                    <label for="email-id">Email</label>
                    <input type="email" name="email-id" value="" placeholder="Enter your Email address" id="email-id">
                </div>
                <div class="mdp">
                    <label for="password-id">Password</label>
                    <input type="password" name="password-id" value="" placeholder="Enter your password" id="password-id">
                </div>
                <div class="remember">
                        <input type="checkbox" name="remember-id" value="" id="remember-id">
                        <label for="remember-id">Remember me ?</label>
                </div>
                <div class="submit">
                    <input type="submit">
                </div>
            </form>
        </article>
    </section>
    
    
    <script type="text/javascript" src="script.js"></script>
</body>

</html>