<?php
$active = pathinfo($_SERVER['SCRIPT_NAME'])['filename'];

?>
<div class="container">
    <div class="nav-wrapper">
        <div class="left-side">
            <div class="nav-link-wrapper <?php echo $active == 'index' ? 'active-nav-link' : ''; ?> ">
                <a href="index.php">Home</a>
            </div>
            <div class="nav-link-wrapper <?php echo $active == 'about' ? 'active-nav-link' : ''; ?>">
                <a href="about.php">About</a>
            </div>
            <div class="nav-link-wrapper <?php echo $active == 'contact-me' ? 'active-nav-link' : ''; ?>">
                <a href="contact-me.php">Contact me</a>
            </div>

            <div class="nav-link-wrapper <?php echo $active == 'formtxt' ? 'active-nav-link' : ''; ?>">
                <a href="formtxt.php">Form</a>
            </div>
        </div>
        <div class="right-side">
            <div class="brand">
                <div>Gavril Gavrailov</div>
            </div>
        </div>
    </div>
</div>