<?

    $error_messages = array(); //creation of error array
    $success_messages = array(); //creation of success array

    if(!empty($_POST['submit-button'])){ //form not empty
        
        //trim() delate spaces at the beginning and at the end
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
        
        //preparation of the insert
        
        $prepare = $pdo->prepare('INSERT INTO contents(name, title, description) VALUES (:file_name, :file_title, :file_description)');
        
        //change parameters
        $prepare->bindValue(':file_name', $_POST['file-name']);
        $prepare->bindValue(':file_title', $_POST['file-title']);
        $prepare->bindValue(':file_description', $_POST['file-description']);

        //send prepare
        $prepare->execute();
        
        // Add success message
        $success_messages['submit-button'] = 'Content registered';
        
        //reset
        $_POST['file-name'] = '';
        $_POST['file-title'] = '';
        $_POST['file-description'] = '';
        
        // No errors
        if(empty($error_messages))
        {
            $success_messages['file-name'] = 'allright';
            $success_messages['file-title'] = 'allright';
            $success_messages['file-description'] = 'allright';
        }
    }

    else{
        // Default values
        $_POST['file-name'] = '';
        $_POST['file-title'] = '';
        $_POST['file-description'] = '';
    }

?>
        