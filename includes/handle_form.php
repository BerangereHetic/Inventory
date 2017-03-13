<?php

    // Messages
    $error_messages = array(); //creation of errors array
    $success_messages = array(); //creation of success array

    // Form sent
    if(!empty($_POST)) //form not empty
    {
        
        // Retrieve data
        //trim() delete spaces at the beginning and at the end
        $first_name = !empty($_POST['first-name']) ? $_POST['first-name'] : '';
        $last_name = !empty($_POST['last-name']) ? $_POST['last-name'] : '';
        $pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : '';
        $password = !empty($_POST['password']) ? $_POST['password'] : '';
        $mail = !empty($_POST['mail']) ? $_POST['mail'] : '';

        // First name errors
        if(empty($first_name))
            $error_messages['first-name'] = 'should not be empty';

        // Age errors
        if(empty($age))
            $error_messages['age'] = 'should not be empty';
        else if($age < 0 || $age > 150)
            $error_messages['age'] = 'wrong value';

        $prepare = $pdo->prepare('INSERT INTO users(first_name, last_name, pseudo, mail, password) VALUES (:first_name, :last_name, :pseudo, :mail, :password)');
        
        $prepare->bindValue(':first_name', $_POST['first_name']);
        $prepare->bindValue(':last_name', $_POST['last_name']);
        $prepare->bindValue(':pseudo', $_POST['pseudo']);
        $prepare->bindValue(':mail', $_POST['mail']);
        $prepare->bindValue(':password', $_POST['password']);

        $prepare->execute();

        // Add success message
        $success_messages[] = 'User registered';

        // Reset values
        $_POST['first-name'] = '';
        $_POST['last-name'] = '';
        $_POST['pseudo'] = '';
        $_POST['mail'] = '';
        $_POST['password'] = '';
        
        
        // No errors
        if(empty($error_messages))
        {
            
        }
    }

    // No data sent
    else
    {
        // Default values
        $_POST['first-name'] = '';
        $_POST['last-name'] = '';
        $_POST['pseudo'] = '';
        $_POST['mail'] = '';
        $_POST['password'] = '';
    }
?>