<?

    include 'includes/config.php';
    include 'includes/handle_form_insert.php';
    include 'includes/handle_form_update.php';

    $query = $pdo->query('SELECT * FROM contents');
    $contents = $query->fetchAll();

    echo '<pre>';
    print_r($contents);
    print_r($error_messages);
    print_r($success_messages);
    echo '</pre>';

    // Routing
    $q = $_GET['q'];

    if(($q === '') || ($q === 'identification'))
    {
        $page = 'identification';
    }
    else if($q === 'inventory')
    {
        $page = 'inventory';
    }
    else if($q === 'modification')
    {
        $page = 'form_modify';
    }
    else
    {
//        $page = '404';
        echo "no page sorry";
    }

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
    <?
    include 'views/pages/'.$page.'.php';
    ?>
    
    <script type="text/javascript" src="script.js"></script>
</body>

</html>