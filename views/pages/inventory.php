<section class="top">
    <div class="connection right">
        <a href="#">Sign in</a>
        <a href="#">Sign up</a>
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
        
       <?
            include 'includes/handle_form_get_file.php';
            foreach($contents as $_content): ?>
                <div class="content-item left content-item-<?= $_content -> id; ?>">
                    <img src="images/uploads/<?= $_content -> name;?>" alt="Inventory element">
                    <p class="content-item-title"><?= $_content -> title; ?> </p>
                    <p class="content-item-description"><?= $_content -> description; ?></p>
                    <a href="modification?modify_id=<?= $_content -> id; ?>" class="modify-button" title="edit_button">Modify content</a>
                    <a href="#" class="delete-button">Delete content</a>
                </div>
            <?php endforeach;

       ?>
       <div class="clearBoth"></div>
    </article>
</section>


<div class="content-form">
    <h2>Nouvel item</h2>
    <form action="#" method="post" enctype="multipart/form-data">

        <label for="file-name">Download your file :</label>
        <input type="file" name="file-name" id="file-name"/>

        <label for="file-title">What is your file name ?</label>
        <input type="text" name="file-title" id="file-title" />

        <label for="file-description">What is your description ?</label>
        <input type="text" name="file-description" id="file-description" />

        <input type="submit" value="Envoyer le fichier" class="submit-button" name="submit-button"/>
    </form>
</div>