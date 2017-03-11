<?

    include 'includes/config.php';
    include 'includes/handle_form_inventory.php';

    $query = $pdo->query('SELECT * FROM contents');
    $contents = $query->fetchAll();

    echo '<pre>';
    print_r($contents);
    print_r($error_messages);
    print_r($success_messages);
    echo '</pre>';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="theme-color" content="#ffffff">

    <title>Inventaire</title>

    <link rel="stylesheet" href="reset.css">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
    <section class="top">
        <div class="connection right">
            <a href="identification.html">Sign in</a>
            <a href="identification.html">Sign up</a>
        </div>
        <h1>Inventory</h1>
    </section>
    
    <section class="inventory">
        
       <div class="messages success">
           <?php foreach($success_messages as $_message): ?>
           <p><?= $_message ?></p>
           <?php endforeach ?>
       </div>

       <div class="messages errors">
           <?php foreach($error_messages as $_key => $_message): ?>
           <p><?= "$_key : $_message" ?></p>
           <?php endforeach ?>
       </div>
       
       <ul>
           <li class="all open"><h2>All</h2></li>
           <li class="albums"><h2>Albums</h2></li>
           <li class="drawings"><h2>Drawings</h2></li>
           <li class="pictures"><h2>Pictures</h2></li>
           <li class="bookmarks"><h2>Bookmarks</h2></li>
       </ul>
       
       <article class="content">
            <a href="#" class="add-button left">
               <p>+</p>
            </a>
            <div class="content-item left content-item-1">
               <img src="images/favicons/apple-touch-icon.png" alt="Inventory element">
               <p class="content-item-title">Mon premier dessin</p>
               <p class="content-item-description">Joli soleil et des fleurs partout vive les licornes on gambade dans les prés hourra hourra </p>
            </div>
           <!-- ajouter un message qui demande à l'utilisateur de se connecter s'il ne l'est pas ou de se créer un compte-->
           
           <?
            include 'includes/handle_form_form.php';
           ?>
           
        </article>
        
        <div class="content-form">
        <form action="inventory.php" method="post" enctype="multipart/form-data">
               
            <label for="file-name">Download your file :</label>
            <input type="file" name="file-name" id="file-name"/>
                
            <label for="file-title">What is your file name ?</label>
            <input type="text" name="file-title" id="file-title" />
                
            <label for="file-description">What is your description ?</label>
            <input type="text" name="file-description" id="file-description" />
                
            <input type="submit" value="Envoyer le fichier" class="submit"/>
        </form>
    </div>
    </section>
    
    
    
    <script type="text/javascript" src="script.js"></script>
</body>

</html>