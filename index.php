<?php
$pageTitle = "index";
$pageStyles = '<link rel="stylesheet" href="Assets/css/styles.css" rel="stylesheet" />';

// include("Modal/connection.php");

// $dbConnection = new DbConnection();

// $connection = $dbConnection->getConnection();

// if ($connection) {
//     echo "Connected to the database successfully!\n";

//     $dbConnection->closeConnection();
// } else {
//     echo "Error: Database connection is not available.\n";
// }

require("View/templates/header.php");
?> 
         
    <!-- Header-->
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-5">
                <h1 class="masthead-heading mb-0">La plateforme qui </h1>
                <h2 class="masthead-subheading mb-0">révolutionne votre facon de travail</h2>
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>

        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="Assets/img/01.png" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Organiser enfin votre vie et votre travail.</h2>
                            <p>Gagnez en concentration, en organisation et en sérénité avec (). La 1er application de gestion de taches et to do list.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="Assets/img/02.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Faites tomber les obstacles, gagnez en clarté, dépassez vos objectifs.</h2>
                            <p>Tout est réalisable avec le meilleur logiciel de gestion du travail a portée de main.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 3-->
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="Assets/img/03.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Gérer vos projets de façon simple!</h2>
                            <p>Vous aide a vous concentrer, aussi bien dans vos activités personnelles que professionnelles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <?php include('View/templates/footer.php'); ?>