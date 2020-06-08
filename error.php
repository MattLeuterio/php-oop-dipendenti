<?php

// Head
include_once __DIR__ . '/partials/template/head.php';

?>


<body>
    <!-- App Container -->
    <div class="app">
        
        <?php //header
            include __DIR__ . '/partials/template/header.php';
        ?>
        
        <main class="main-content">
            <div class="container">
                <div class="row d-flex flex-column justify-content-center align-items-center">
                    <h2>We're sorry!</h2>
                    <p><?php
                    echo $_GET['message'];
                    ?>
                    </p>
                </div>
            </div>
        
        </main>    

<?php

// footer and tag's close
include_once __DIR__ . '/partials/template/footer.php';

?>

