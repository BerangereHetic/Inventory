<?
                
    // File send and no error
    if (isset($_FILES['file-name']) AND $_FILES['file-name']['error'] == 0)
    {
        // File not too big
        if ($_FILES['file-name']['size'] <= 8000000)
        {
            // extension ok
            $infosfichier = pathinfo($_FILES['file-name']['name']);
            $extension_upload = $infosfichier['extension'];
            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
            if (in_array($extension_upload, $extensions_autorisees))
            {
                // File validate and stock
                move_uploaded_file($_FILES['file-name']['tmp_name'], 'images/uploads/' . basename($_FILES['file-name']['name']));
                
                $success_messages['file'] = "L'envoi a bien été effectué !";
                
                
            } 
            else $error_messages['file'] = "Fichier avec une mauvaise extension";
        }
        else $error_messages['file'] = "Fichier trop gros";

    }
    else $error_messages['file'] = "Fichier avec une erreur";

?>