<?php

    // Messages
    $error_messages = array(); //création du tableau des erreurs
    $success_messages = array(); //création du tableau des succès

//    $first_name = !empty($_POST['first-name']) ? $_POST['first-name'] : '';
//    $last_name = !empty($_POST['last-name']) ? $_POST['last-name'] : '';
//    $pseudo = !empty($_POST['pseudo']) ? $_POST['pseudo'] : '';
//    $password = !empty($_POST['password']) ? $_POST['password'] : '';
//    $mail = !empty($_POST['mail']) ? $_POST['mail'] : '';



    // Form sent
    if(!empty($_POST)) //si le formulaire n'est pas vide
    {
        
        // Default value for gender
//        if(!isset($_POST['gender']))
//            $_POST['gender'] = '';
//
        // Retrieve data
        //trim() supprime les espaces en début et fin de chaîne
//        $first_name = $_POST['first-name']; 
//        $last_name = $_POST['last-name'];
//        $pseudo = $_POST['pseudo'];
//        $password = $_POST['password'];
//        $mail = $_POST['mail'];
//
//        // First name errors
//        if(empty($first_name))
//            $error_messages['first-name'] = 'should not be empty';
//
//        // Age errors
//        if(empty($age))
//            $error_messages['age'] = 'should not be empty';
//        else if($age < 0 || $age > 150)
//            $error_messages['age'] = 'wrong value';
//
//        // Gender errors
//        if(empty($gender))
//            $error_messages['gender'] = 'should not be empty';
//        else if(!in_array($gender, array('male', 'female')))
//            $error_messages['gender'] = 'wrong value';

        $prepare = $pdo->prepare('INSERT INTO users("first_name", "last_name", "pseudo", "mail", "password") VALUES (":first_name", ":last_name", ":pseudo", ":mail", ":password")');
        
        $prepare->bindValue(':first_name', $data['first_name']);
        $prepare->bindValue(':last_name', $data['last_name']);
        $prepare->bindValue(':pseudo', $data['pseudo']);
        $prepare->bindValue(':mail', $data['mail']);
        $prepare->bindValue(':password', $data['password']);

        $exec = $prepare->execute($data);

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

<?php foreach($users as $_user): ?> <!--envoie à la base de donnée -->
        <div>
            <?= $_user->first_name ?>
            <?= $_user->last_name ?>
            <?= $_user->pseudo ?>
            <?= $_user->password ?>
            <?= $_user->mail ?>
        </div>
    <?php endforeach; ?>
    
   
  <span><?=$first_name?></span>
    <span><?=$last_name?></span>
    <span><?=$pseudo?></span>
    <span><?=$password?></span>
    <span><?=$mail?></span>
    
   
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