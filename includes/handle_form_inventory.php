<?

    $error_messages = array(); //création du tableau des erreurs
    $success_messages = array(); //création du tableau des succès

    if(!empty($_POST)){ //si le formulaire n'est pas vide
        
        //Name affiliate to the variable $_POST
        $_POST['file-name'] = $_FILES['file-name']['name'];
        
        //trim() supprime les espaces en début et fin de chaîne
        //si les input ne sont pas vide on donne à chaque variable $file_etc. la valeur rentrée par l'utilisateur moins les espaces de début et de fin de chaîne sinon la valeur des champs des input est vide
        $file_name = !empty($_POST['file-name']) ? trim($_POST['file-name']) : '';
        $file_title = !empty($_POST['file-title']) ? trim($_POST['file-title']) : '';
        $file_description = !empty($_POST['file-description']) ? trim($_POST['file-description']) : '';
        
        //File name errors
        if(empty($file_name)){
            $error_messages['file-name'] = 'should not be empty';
        }
        
        //File title errors
        if(empty($file_title)){
            $error_messages['file-title'] = 'should not be empty';
        }
        
        //File name errors
        if(empty($file_description)){
            $error_messages['file-description'] = 'should not be empty';
        }
        
        //préparation de l'envoie à la base de donnée à l'aide de insert
        
        $prepare = $pdo->prepare('INSERT INTO contents(name, title, description) VALUES (:file_name, :file_title, :file_description)');
        
        //on remplace les paramètres :file_etc. par les valeurs rentrées par l'utilisateur
        $prepare->bindValue(':file_name', $_POST['file-name']);
        $prepare->bindValue(':file_title', $_POST['file-title']);
        $prepare->bindValue(':file_description', $_POST['file-description']);

        //on envoie l'insertion
        $prepare->execute();
        
        // Add success message
//        $success_messages[] = 'Content registered';
        
        //on reset les champs
        $_POST['file-name'] = '';
        $_POST['file-title'] = '';
        $_POST['file-description'] = '';
        
        // No errors
//        if(empty($error_messages))
//        {
//            $success_messages['file-name'] = 'allright';
//            $success_messages['file-title'] = 'allright';
//            $success_messages['file-description'] = 'allright';
//        }
    }

    else{ //si le formulaire est vide la valeur des champs est vide
        // Default values
        $_POST['file-name'] = '';
        $_POST['file-title'] = '';
        $_POST['file-description'] = '';
    }

//        // Prepare statement
//        $prepare = $pdo->prepare("UPDATE contents SET name=':file_name', title=':file_title', description=':file_description' WHERE id=''");
//
//        $prepare->bindValue(':file_name', $_POST['file-name']);
//        $prepare->bindValue(':file_title', $_POST['file-title']);
//        $prepare->bindValue(':file_description', $_POST['file-description']);
//        
//        $prepare->execute();
//
//        // echo a message to say the UPDATE succeeded
//        echo $prepare->rowCount() . " records UPDATED successfully";
?>
        