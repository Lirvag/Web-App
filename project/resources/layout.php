<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) ? $title : 'Gavril'; ?></title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
    include 'navigation.php';
    ?>
    
    <div class="content-wrapper">
        <?php
            echo isset($content) ? $content : '';
        ?>
    </div>
</body>
</html>