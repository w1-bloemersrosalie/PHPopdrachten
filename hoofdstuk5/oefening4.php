<?php /**
 * User: Rosalie Bloemers
 * Date: 16-3-2020
 */ ?>
<?php include '../header.php'; ?>
    <body>
    <?php
    include 'functions.php';

    helloWorld();
    $returnWaarde = getGoodbye();

    echo $returnWaarde
    ?>

    </body>
<?php include '../footer.php'; ?>