<?

    foreach($contents as $_content): ?>
        <div class="content-item left content-item-<?= $_content -> id ?>">
            <img src="images/uploads/<?= $_content -> name?>" alt="Inventory element">
            <p class="content-item-title"><?= $_content -> title?> </p>
            <p class="content-item-description"><?= $_content -> description ?></p>
        </div>
    <?php endforeach;
                
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['file-name']) AND $_FILES['file-name']['error'] == 0)
    {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['file-name']['size'] <= 8000000)
        {
            // Testons si l'extension est autorisée
            $infosfichier = pathinfo($_FILES['file-name']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                // On peut valider le fichier et le stocker définitivement
                move_uploaded_file($_FILES['file-name']['tmp_name'], 'images/uploads/' . basename($_FILES['file-name']['name']));
                
//                $success_messages['file'] = "L'envoi a bien été effectué !";
                
                
            } 
//            else $error_messages['file'] = "Fichier avec une mauvaise extension";
        }
//        else $error_messages['file'] = "Fichier trop gros";

    }
//    else $error_messages['file'] = "Fichier avec une erreur";
?>