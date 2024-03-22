<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../includes/images/DH.png">
    <title>Document</title>
</head>

<body>

    <script src="nav.js"></script>

    <header>
        <?php include 'C:/wamp64/www/PORTFOLIO/includes/header.php'; ?>
    </header>

    <div class="page-wrap">

        <div class="container-fluid mt-5 pb-5">
            <nav class="d-flex">
                <a href="#Vtech" class="nav-link ms-auto me-auto p-5 border border-3 border-dark">
                    <h3>Veille Technologique</h3>
                </a>
                <a href="#Vinfo" class="nav-link ms-auto me-auto p-5 border border-3 border-dark">
                    <h3>Veille Informationnelle</h3>
                </a>
            </nav>
        </div>

        <div class="container-fluid mt-5">

            <div id="Vtech">
                <h1 class="text-center"><b>
                        Veille technologique</b></h2>
                    <div class=" border-bottom border-3 w-25 ms-auto me-auto"></div><br><br>


                    <section class="text-center">
                        <div class="ms-auto me-auto mb-4">
                            <h3 class="mb-4 mt-4 ">Qu'est-ce que la veille technologique ?</h3>


                            <p class="w-50 ms-auto me-auto pb-3">La veille technologique, élément de la veille stratégique, consiste à surveiller les évolutions techniques,
                                les innovations dans un secteur d’activité donnée. La veille technologique comprend notamment la surveillance, la collecte, le partage et la diffusion
                                d’information permettant d’anticiper ou de s’informer sur des changements
                                en matière de recherche, développement, brevet, lancement de nouveaux produits,
                                matériaux, processus, concepts, innovation de fabrication, etc….
                                Cela a pour but d’évaluer l’impact sur l’environnement et l’organisation.</p>

                        </div>

                        <div class="ms-auto me-auto mb-5">
                            <h3 class="mb-4 mt-4">Les principaux outils de ma veille</h3>
                            <p class="w-50 ms-auto me-auto" style="text-align: none;">Etonnament mon premier outil, n'est autre que <strong>YouTube</strong>. <br>

                                Chaque jours des milliers de vidéos détaillé sont postés, faisant découvrir les nouvelles actualités concernant la cybersécurité.
                                Allant à énoncer en surface la situation jusqu'à donnée toutes les onformations connu à ce jour.
                                <br><br>
                                Grâce à des newsletters telles que AppyGeek et Google Alert, une newsletter.
                                En plus des informations hebdomadaires/mensuelles, j'ai quelques sites favoris
                                qui me tiennent au courant des dernières actualités, comme zataz, un site qui nous parle
                                de la cybercriminalité.
                            </p>
                        </div>

                        <div class="ms-auto me-auto mb-5">
                            <h3 class="mb-4 mt-4 ms-auto me-auto">Sujet de ma veille</h3>
                            <p class="w-50 ms-auto me-auto">Pour ma veille technologique, j'ai décidé d'aborder le sujet d'une cyberattaques
                                bien connu mais dont les effets et la simplicité de réalisation choquerait plus d'un.
                                Ici nous allons donc comprendre son fonctionnement et comment y remédier</p>
                        </div>
            </div>
        </div>

        <section class="container-fluid text-center text-light pt-1 pb-4" style="background-color: #32746D;">
            <p class="fs-4 mt-5">Voici une présentation explique en détail l'attaque XSS et sa variation Stored Cross-Site Scripting</p>
            <div class="border-light border-bottom border-3 w-50 ms-auto me-auto"></div><br><br>
            <iframe src="../includes/Cross-Site_Scripting.pdf" width="850" height="500"></iframe>
        </section>

        <div class="pt-5"></div>
        <div id="Vinfo" class="mt-5 pt-5">
            <h1 class="text-center"><b>Veille informationnelle</b></h2>
                <div class=" border-bottom border-3 w-25 ms-auto me-auto"></div><br><br>


                <section class="text-center">
                    <div class="ms-auto me-auto mb-4">
                        <h3 class="mb-4 mt-4 ">Qu'est-ce que la veille informationnelle ?</h3>


                        <p class="w-50 ms-auto me-auto pb-3">
                            La veille informationnelle est un processus continu de collecte,
                            d'analyse et de diffusion d'informations pertinentes pour une entreprise ou une organisation.
                            Elle consiste à surveiller en permanence l'environnement et à en ressortir les tendances,
                            les opportunités ou les menaces qui peuvent impacter l'activité. Cela permet de rester informé
                            des évolutions et des changements dans le secteur d'activité et d'adapter sa stratégie en conséquence.</p>

                    </div>

                    <div class="ms-auto me-auto mb-5">
                        <h3 class="mb-4 mt-4">Les principaux outils de ma veille</h3>
                        <p class="w-50 ms-auto me-auto" style="text-align: none;">Etonnament mon premier outil, n'est autre que <strong>YouTube</strong>. <br>

                            Chaque jours des milliers de vidéos détaillé sont postés, faisant découvrir les nouvelles actualités concernant la cybersécurité.
                            Allant à énoncer en surface la situation jusqu'à donnée toutes les onformations connu à ce jour.
                            <br><br>
                            Grâce à des newsletters telles que AppyGeek et Google Alert, une newsletter.
                            En plus des informations hebdomadaires/mensuelles, j'ai quelques sites favoris
                            qui me tiennent au courant des dernières actualités, comme zataz, un site qui nous parle
                            de la cybercriminalité.
                        </p>
                    </div>

                    <div class="ms-auto me-auto mb-5">
                        <h3 class="mb-4 mt-4 ms-auto me-auto">Sujet de ma veille</h3>
                        <p class="w-50 ms-auto me-auto">Pour ma veille informationnelle,
                            j'ai décidé d'aborder le sujet du <b> CVSS (Common Vulnerability Scoring System Version)</b>
                            bien connu mais dont les effets et la simplicité de réalisation choquerait plus d'un.
                            Ici nous allons donc comprendre son fonctionnement et comment y remédier</p>
                    </div>
        </div>

    </div>

    </div>

    <footer class="container-fluid pb-2" style="background-color: #255651;">
        <?php include 'C:/wamp64/www/PORTFOLIO/includes/footer.php'; ?>
    </footer>

</body>

</html>