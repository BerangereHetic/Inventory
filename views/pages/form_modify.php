<?

    if(isset($_GET['update-button']))
    {

        //modification of the files
        $prepare = $pdo->prepare('UPDATE contents SET name = :modify_name, title = :modify_title, description = :modify_description  WHERE id = :id_origin');
        $prepare->bindValue(':modify_name', $_GET['modify-name']);
        $prepare->bindValue(':modify_title', $_GET['modify-title']);
        $prepare->bindValue(':modify_description', $_GET['modify-description']);
        $prepare->execute();
        $success_messages_modify['update-button'] = 'Votre fichier à bien été modifié';
    }
   
   
    $error_messages_modify = array(); //error array
    $success_messages_modify = array(); //success array
    
    $get_id_modify = $pdo -> query("SELECT * FROM contents WHERE id='". $_GET['modify_id']. "'");
    $modify_contents = $get_id_modify -> fetchAll();

    //form for the modifications
    foreach($modify_contents as $_modify_content): ?>
        <div class="modify-form" id="modify-form-id">
            <h2>Modifier l'item</h2>
            <form action="inventory" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id_origin" value="<?= $_modify_content -> id ?>">

                <label for="modify-name">Download the new image :</label>
                <input type="file" name="modify-name" id="modify-name" value="<?= $_modify_content -> name ?>"/>

                <label for="modify-title">What is your new file name ?</label>
                <input type="text" name="modify-title" id="modify-title" value="<?= $_modify_content -> title ?>"/>

                <label for="modify-description">What is your new file description ?</label>
                <input type="text" name="modify-description" id="modify-description" value="<?= $_modify_content -> description ?>" />

                <input type="submit" value="OK" class="update-button" name="update-button"/>
            </form>
        </div>
    <? endforeach; ?>