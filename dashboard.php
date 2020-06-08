<?php
// Include
include_once __DIR__ . '/partials/classes/staff/retail-staff.php';
include_once __DIR__ . '/partials/classes/staff/administrative-staff.php';

// Head
include_once __DIR__ . '/partials/template/head.php';

?>


<body>
    <!-- App Container -->
    <div id="dash-app" class="app">
        
        <header id="dashboard-header" class="navbar navbar-light bg-light fixed-top">
            <nav class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <a class="navbar-brand" href="./index.php"><img class="img-fluid" src="dist/img/logo-mattintosh.png" alt="mattintosh"></a>
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item ">
                            <a class="nav-link active-link software" href="./index.php">Return to Home</a>
                        </li>
                    </ul>
                </div>    
            </nav>  
        </header>
        
        <main class="main-content d-flex">

            <div class="dash-sidebar">
                <h2>DASHBOARD</h2>
                <ul class="list-group list-group-flush mt-5">
                    <li class="list-group-item admin">
                        <a href="#">Administrative</a>
                    </li>
                    <li class="list-group-item retail">
                        <a href="#">Retail</a>
                    </li>
                </ul>
            </div>

            <div class="dash-main d-flex justify-content-center">
                <div class="container-table">

                    <!-- Administrative Table -->
                    <table id="administrative" class="table table-hover active">
                        <thead>
                          <tr class="text-primary">
                            <th scope="col">Sector</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Office Location</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($adminEmployee as $employee) { ?>

                          <tr>
                            <td><?php echo $employee->sector; ?></td>
                            <td><?php echo $employee->name; ?></td>
                            <td><?php echo $employee->lastname; ?></td>
                            <td><?php echo $employee->email; ?></td>
                            <td><?php echo $employee->salary; ?></td>
                            <td><?php echo $employee->officeLocation; ?></td>
                          </tr>

                        <?php } ?>  
                        </tbody>
                    </table>

                    <!-- Retail Table -->
                    <table id="retail" class="table table-hover">
                        <thead>
                          <tr class="text-primary">
                            <th scope="col">Sector</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Shop Location</th>
                          </tr>
                        </thead>
                        <tbody>

                        <?php
                        foreach ($retailEmployee as $employee) { ?>

                          <tr>
                            <td><?php echo $employee->sector; ?></td>
                            <td><?php echo $employee->name; ?></td>
                            <td><?php echo $employee->lastname; ?></td>
                            <td><?php echo $employee->email; ?></td>
                            <td><?php echo $employee->salary; ?></td>
                            <td><?php echo $employee->shopLocation; ?></td>
                          </tr>

                        <?php } ?>  
                        </tbody>
                    </table>
                </div>
            </div>
            
       
        </main>    

<?php

// footer and tag's close
include_once __DIR__ . '/partials/template/footer.php';

?>