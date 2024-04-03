<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="..\model\Accueil.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../includes/images/DH.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO - DURIZOT HÉLÉNA</title>

</head>

<body>

    <header>
        <?php include 'C:/wamp64/www/PORTFOLIO/includes/header.php'; ?>
    </header>

    <div class="page-wrap">
        <section class="mt-5">
            <div class="">
                <p class="fs-1">Bienvenue sur mon Portfolio !</p>
                <p class="fs-4">Vous y retrouverez mon portfolio et l'ensemble de mes réalisations que j'ai pu effectuer durant
                    mon BTS SIO SLAM</p>
            </div>

            <div class="container-fluid d-flex">
                <!-- MOI-->
                <div class="ms-5"></div>

                <img src="..\includes\images\DH.png" alt="photo" class="w-25 h-25 me-auto ms-auto ">
                <!--<img src="..\includes\images/portrait.jpg" alt="photo" class="w-25 me-auto ms-auto rounded-circle pb-5">-->
                <div>
                    <p class="ps-5 pe-5 h-auto mt-5 w-75 me-auto ms-auto border border-secondary text-white pt-4 pb-4" style="background-color: #32746D;">
                        Je m’appelle <strong> Héléna DURIZOT</strong>, j’ai 19 ans. Je suis actuellement étudiant en BTS Services informatiques aux Organisations <strong>(BTS SIO)</strong>
                        dans la spécialité de Solutions Logicielles et Applications Métier <strong>(SLAM)</strong>. <br><br>
                        Dès mon plus jeune âge j’ai commencé à me passionner pour l’informatique
                        et tout ce qui s'y rassemble. <br>
                        Je me suis dirigé en BAC Général avec la spécialité Numérique
                        et sciences informatiques <strong>(NSI)</strong> au <b style="color: #FADF7F;">Lycée Gerville Réache</b> à Basse-Terre. <br><br>
                        Au cours de ces années de Lycée, mon interêt pour l’informatique en plus
                        particulièrement pour le développement s'est fortement étendu, et j'ai comme projet professionnel d'être Concepteur Développeur Web
                        ce qui explique mon choix pour l’option SLAM. <br>
                    </p>
                </div>
            </div>
        </section>


        <section class="container-fluid" style="background-color: #32746D;">
            <br>
            <!--MES QUALITÉS-->
            <h3 class="text-white text-center">MES QUALITÉS</h3>
            <div class=" border-bottom border-2 w-25 ms-auto me-auto"></div><br><br>


            <div class="d-flex text-white pb-5">

                <div class="text-center">
                    <img src="..\includes\images/QUALITE\creatif.png" alt="" style="width: 40%;"> <br><br>
                    <p>Créatif</p>
                </div>

                <div class="text-center"><img src="..\includes\images/QUALITE/adaptation.png" alt="" style="width: 40%;"><br><br>
                    <p>Polyvalent</p>
                </div>

                <div class="text-center"><img src="..\includes\images/QUALITE\effort.png" alt="" style="width: 40%;"><br><br>
                    <p>Persévérant</p>
                </div>

                <div class="text-center"><img src="..\includes\images/QUALITE\loupe.png" alt="" style="width: 40%;"><br><br>
                    <p>Curieux</p>
                </div>

                <div class="text-center mb-3"><img src="..\includes\images/QUALITE\but.png" alt="" style="width: 40%;"><br><br>
                    <p>Ambitieux</p>
                </div>
            </div>

            <!--MES CONNAISSANCES-->
            <h3 class="text-center text-white">MES CONNAISSANCES</h3>
            <div class=" border-bottom border-2 w-25 ms-auto me-auto mb-5"></div>

            <div id="carouselExample" class="carousel slide pt-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-3">
                                <img src="..\includes\images/OUTIL/python.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images/CONNAISSANCES/html-5.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images/CONNAISSANCES\css-3.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images/CONNAISSANCES\php.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-3">
                                <img src="..\includes\images/CONNAISSANCES\java.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images/CONNAISSANCES\mysql.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images/CONNAISSANCES\social.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\virtualbox.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon me-5" aria-hidden="true"></span>
                    <div class="me-5"></div>
                    <div class="me-5"></div>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <div class="ms-5"></div>
                    <div class="ms-5"></div>
                    <span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br><br>


        </section>

        <!--MES OUTILS-->
        <section class="container-fluid" style="background-color: #32746D;">
            <br>

            <h3 class="text-center text-white">MES OUTILS</h3>
            <div class=" border-bottom border-2 w-25 ms-auto me-auto mb-5"></div>

            <div id="carouselExample1" class="carousel slide pt-4">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-3"> <!--À CHANGER-->
                                <img src="..\includes/images/OUTIL/visual-studio.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\github.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes/images/OUTIL/eclipse.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\virtualbox.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\canva" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\flaticon.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\fontawesome.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                            <div class="col-3">
                                <img src="..\includes\images\OUTIL\pyscripter.png" class="d-block w-50 me-auto ms-auto" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev text-dark" type="button" data-bs-target="#carouselExample1" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon me-5" aria-hidden="true"></span>
                    <div class="me-5"></div>
                    <div class="me-5"></div>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample1" data-bs-slide="next">
                    <div class="ms-5"></div>
                    <div class="ms-5"></div>
                    <span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br><br><br><br>

        </section>


        <!--MES CERTIFICATIONS-->
        <section class="container-fluid text-white" style="background-color: #255651;">

            <h3 class="pt-5 text-center">MES CERTIFICATIONS</h3>
            <div class=" border-bottom border-2 w-25 ms-auto me-auto mb-5"></div>

            <div class="d-flex mt-4 pt-4">

                <div class="card mb-3 ms-auto me-auto" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="..\includes\attestation-pix.pdf" target="_blank"><img src="../includes/images/CONNAISSANCES/Pix.png" class="img-fluid rounded-start w-100" alt="..."></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certfication PIX</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Obtenu le 'JJ / MM / YYYY'</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 ms-auto me-auto" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="../includes/CertificatSQL.pdf" target="_blank"><img src="../includes/images/CONNAISSANCES/ENI-HTML_CSS.jpg" class="img-fluid rounded-start w-100 h-auto" alt="..."></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certfication ENI | HTML5 - CSS3</h5>
                                <p class="card-text">Créer et mettre en forme des pages web (HTML5 et CSS3)</p>
                                <p class="card-text"><small class="text-muted">Obtenu le 'JJ / MM / YYYY'</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="d-flex mt-2 pt-4">

                <div class="card mb-3 ms-auto me-auto" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../includes/images/CONNAISSANCES/ENI-PHP.jpg" class="img-fluid rounded-start w-100" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certfication ENI | LANGAGE PHP</h5>
                                <p class="card-text">Développement de sites web dynamiques (Langage PHP)</p>
                                <p class="card-text"><small class="text-muted">Obtenu le 'JJ / MM / YYYY'</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 ms-auto me-auto" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../includes/images/CONNAISSANCES//ENI-SQL.jpg" class="img-fluid rounded-start w-100" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certfication ENI | SQL</h5>
                                <p class="card-text">Langage SQL : Exploiter une base de données relationnelle</p>
                                <p class="card-text"><small class="text-muted">Obtenu le 'JJ / MM / YYYY'</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </section>

        <!--CERTIFICATIONS EN COURS-->
        <section class="container-fluid text-white pb-5" style="background-color: #255651;">

            <h3 class="pt-5 text-center">CERTIFICATIONS EN PRÉPARATION</h3>
            <div class=" border-bottom border-2 w-25 ms-auto me-auto mb-5"></div>

            <div class="d-flex mt-4 pt-4">

                <div class="card mb-3 ms-auto me-auto" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../includes/images/CONNAISSANCES/VBA_Excel.jpg" class="img-fluid rounded-start w-100" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certfication PIX</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 ms-auto me-auto" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <a href="../includes/CertificatSQL.pdf" target="_blank"><img src="../includes/images/CONNAISSANCES/Java.jpg" class="img-fluid rounded-start w-100 h-auto" alt="..."></a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-center">Certfication ENI | HTML5 - CSS3</h5>
                                <p class="card-text">Créer et mettre en forme des pages web (HTML5 et CSS3)</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!--ME RETROUVER-->
        <section>

            <div class="mt-5 mb-5 text-center d-flex ">
                <h3 class=" me-auto ms-auto"><a href="../includes/Stage2-BTS-SIO-CV.pdf" target="_blank" class="text-success border rounded-pill border-3 p-3 " style="text-decoration: none;"><img src="../includes/images/CV.png" style="width: 7%;"> CURRICULUM VITÆ</a></h3>
                <h3 class=" me-auto ms-auto"><a href="https://www.linkedin.com/in/helena-durizot-75248a251/" target="_blank" class="text-success border rounded-pill border-3 p-3" style="text-decoration: none;"><img src="../includes/images/linkedin (1).png" style="width: 7%;"> LINKEDIN</a></h3>
                <h3 class=" me-auto ms-auto"><a href="https://www.linkedin.com/in/helena-durizot-75248a251/" target="_blank" class="text-success border rounded-pill border-3 p-3" style="text-decoration: none;"><img src="../includes\images\OUTIL\github.png" style="width: 7%;"> GITHUB</a></h3>

        </section>






    </div>


    <footer style="background-color: #255651;">
        <?php include 'C:/wamp64/www/PORTFOLIO/includes/footer.php'; ?>
    </footer>

</body>

</html>