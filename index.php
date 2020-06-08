<?php
// Include Computer & Software Warehouse
include_once __DIR__ . '/partials/classes/warehouse/computerWarehouse.php';
include_once __DIR__ . '/partials/classes/warehouse/softwareWarehouse.php';

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
            
            <section id="computers" class="main-section container">
                <div class="row">
                    
                    <!-- Computers-->
                    <?php
                    foreach ($computers as $computer) { ?>
                    
                    <div class="card" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $computer->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$computer->brand $computer->model"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $computer->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Color: <?php echo $computer->color; ?>
                                        </li>
                                        <li class="list-group-item">
                                            Brand: <?php echo $computer->brand; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $computer->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $computer->computerCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                   
                </div>
            </section>

            <section id="software" class="main-section container">
                <div class="row">
                    
                     <!-- Softwares -->
                    <?php
                    foreach ($softwares as $software) {?>

                    <div class="card" style="width: 520px;">
                        <div class="row product-row no-gutters">
                            <div class="col-md-5">
                                <img src="<?php echo $software->image; ?>" class="card-img" alt="...">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo "$software->softwareHouse $software->name"; ?></h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            ID: <?php echo $software->idProduct; ?>
                                        </li>
                                        <li class="list-group-item">
                                            House: <?php echo $software->softwareHouse; ?>
                                        </li>
                                        <li class="list-group-item">
                                            OS: <?php echo $software->os; ?>
                                        </li>
                                        <li class="list-group-item text-success text-right">
                                            <?php echo $software->price; ?>
                                        </li>
                                    </ul>
                                    <p class="card-text"><small class="text-muted">
                                    <?php echo $software->softwareCategory; ?>
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                </div>
            </section>

        </main>    

<?php

// footer and tag's close
include_once __DIR__ . '/partials/template/footer.php';

?>