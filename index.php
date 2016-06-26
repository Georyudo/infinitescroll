<?php
// GET-Parameters
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 2;

//Positioning
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

// Pages
// $total = $CMS_VALUE(fr_st_news.size())$
$total = 5;
$pages = ceil($total / $perPage);

?>

<!doctype html>
<html class="no-js" lang="de">
<head>
    <meta charset="utf-8">
    <script src="../Pagination/jquery.js"></script>
</head>
<body id="" >
<header class="header" style="height:250px">
    <div class="container">
        <div class="content">
            <section class="logo">
                <!--LOGO in Projekteinstellungen pflegbar!!!-->

            </section>
            <section class="meta-nav">

            </section>
            <section class="main-navigation desktop">
                <div class="mobile-toggler">
                    <!--DICTIONARY-->
                    <span>Menu</span>
                </div>
                <nav class="top-bar">

                </nav>
            </section>
        </div>
    </div>
</header>
<!-- // START MAIN -->
<main class="main">
    <div class="wrapper">
        <div class="container contains-aside content-shadow">
            <div class="content">
                <div class="content">
                    <div class="type1">
                        <h1>
                            news.overview.headline
                        </h1>
                    </div>
                    <div class="navigation" style="display: none;">
                        <?php for($i = 1; $i <= $pages; $i++){
                            if ($i == $page + 1){
                                $class = 'class="next"';
                            } else {
                                $class = 'class="next"';
                            }
                           echo '<a href="?page='.$i.'">' . $i . '</a>';
                        }
                        echo '<a href="?page='.($page+1).'" class="next">Next</a>';?>
                    </div>
                    <div class="news-teaser type1">
                        <?php if($page == 1) {
                        echo '<div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 17.05.2016 </span >
                                <a href = "#" >
                                    <h2 > analytica 2016 war ein großer Erfolg für Basler </h2 >
                                </a >
                                <p >
                                Wir haben erfolgreich an der diesjährigen analytica, der internationalen Fachmesse für Labortechnologie, Analyse, Diagnostik und Biotechnologie, teilgenommen und viele führende Bildverarbeitungskameras für medizinische und biowissenschaftliche Anwendungen präsentiert .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 13.05.2016 </span >
                                <a href = "#" >
                                    <h2 > Kennen Sie schon unser Basler Original Equipment ?</h2 >
                                </a >
                                <p >
                                Wir bieten Ihnen ein umfangreiches Zubehörportfolio an . Darunter auch Basler Original Zubehör, das speziell nach unseren Anforderungen für uns entwickelt wurde .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 17.05.2016 </span >
                                <a href = "#" >
                                    <h2 > analytica 2016 war ein großer Erfolg für Basler </h2 >
                                </a >
                                <p >
                                Wir haben erfolgreich an der diesjährigen analytica, der internationalen Fachmesse für Labortechnologie, Analyse, Diagnostik und Biotechnologie, teilgenommen und viele führende Bildverarbeitungskameras für medizinische und biowissenschaftliche Anwendungen präsentiert .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 13.05.2016 </span >
                                <a href = "#" >
                                    <h2 > Kennen Sie schon unser Basler Original Equipment ?</h2 >
                                </a >
                                <p >
                                Wir bieten Ihnen ein umfangreiches Zubehörportfolio an . Darunter auch Basler Original Zubehör, das speziell nach unseren Anforderungen für uns entwickelt wurde .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 17.05.2016 </span >
                                <a href = "#" >
                                    <h2 > analytica 2016 war ein großer Erfolg für Basler </h2 >
                                </a >
                                <p >
                                Wir haben erfolgreich an der diesjährigen analytica, der internationalen Fachmesse für Labortechnologie, Analyse, Diagnostik und Biotechnologie, teilgenommen und viele führende Bildverarbeitungskameras für medizinische und biowissenschaftliche Anwendungen präsentiert .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 13.05.2016 </span >
                                <a href = "#" >
                                    <h2 > Kennen Sie schon unser Basler Original Equipment ?</h2 >
                                </a >
                                <p >
                                Wir bieten Ihnen ein umfangreiches Zubehörportfolio an . Darunter auch Basler Original Zubehör, das speziell nach unseren Anforderungen für uns entwickelt wurde .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >';
                        }
                        if($page == 2) {
                        echo '
                        <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">11.05.2016</span>
                                <a href="#">
                                    <h2>Warenlogistik für die Industrie 4.0: Basler ace Kamera unterstützt Kommisionier-Roboter</h2>
                                </a>
                                <p>
                                Im E-Commerce und in der Intralogistik werden einzelne Produkte benötigt und keine ganzen Paletten. Während bisher fast immer Menschen die einzelnen Produkte aus den jeweiligen Lagern zusammensuchen mussten, können sie bei dieser Aufgabe nun von Robotern unterstützt werden. Unsere aktuelle Success Story zeigt, wie das gehen kann.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                        <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">11.05.2016</span>
                                <a href="#">
                                    <h2>Warenlogistik für die Industrie 4.0: Basler ace Kamera unterstützt Kommisionier-Roboter</h2>
                                </a>
                                <p>
                                Im E-Commerce und in der Intralogistik werden einzelne Produkte benötigt und keine ganzen Paletten. Während bisher fast immer Menschen die einzelnen Produkte aus den jeweiligen Lagern zusammensuchen mussten, können sie bei dieser Aufgabe nun von Robotern unterstützt werden. Unsere aktuelle Success Story zeigt, wie das gehen kann.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                        <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">11.05.2016</span>
                                <a href="#">
                                    <h2>Warenlogistik für die Industrie 4.0: Basler ace Kamera unterstützt Kommisionier-Roboter</h2>
                                </a>
                                <p>
                                Im E-Commerce und in der Intralogistik werden einzelne Produkte benötigt und keine ganzen Paletten. Während bisher fast immer Menschen die einzelnen Produkte aus den jeweiligen Lagern zusammensuchen mussten, können sie bei dieser Aufgabe nun von Robotern unterstützt werden. Unsere aktuelle Success Story zeigt, wie das gehen kann.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                        <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">10.05.2016</span>
                                <a href="#">
                                    <h2>In Serie: Acht neue Basler ace Modelle mit PYTHON-Sensoren von ON Semiconductor</h2>
                                </a>
                                <p>
                                Die schnellste ace aller Zeiten bekommt hochauflösenden Zuwachs: Acht neue Modelle mit den leistungsstarken CMOS-Sensoren der PYTHON-Serie von ON Semiconductor werden ab sofort in Serie produziert. Diese acht Modelle verfügen über Auflösungen von 2,3 bis 5 Megapixel.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 17.05.2016 </span >
                                <a href = "#" >
                                    <h2 > analytica 2016 war ein großer Erfolg für Basler </h2 >
                                </a >
                                <p >
                                Wir haben erfolgreich an der diesjährigen analytica, der internationalen Fachmesse für Labortechnologie, Analyse, Diagnostik und Biotechnologie, teilgenommen und viele führende Bildverarbeitungskameras für medizinische und biowissenschaftliche Anwendungen präsentiert .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 13.05.2016 </span >
                                <a href = "#" >
                                    <h2 > Kennen Sie schon unser Basler Original Equipment ?</h2 >
                                </a >
                                <p >
                                Wir bieten Ihnen ein umfangreiches Zubehörportfolio an . Darunter auch Basler Original Zubehör, das speziell nach unseren Anforderungen für uns entwickelt wurde .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 17.05.2016 </span >
                                <a href = "#" >
                                    <h2 > analytica 2016 war ein großer Erfolg für Basler </h2 >
                                </a >
                                <p >
                                Wir haben erfolgreich an der diesjährigen analytica, der internationalen Fachmesse für Labortechnologie, Analyse, Diagnostik und Biotechnologie, teilgenommen und viele führende Bildverarbeitungskameras für medizinische und biowissenschaftliche Anwendungen präsentiert .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >
                        <div class="img-txt-teaser" >
                            <div class="img-container" >
                                <a href = "#" >
                                </a >
                            </div >
                            <div class="txt-container" >
                                <span class="date" > 13.05.2016 </span >
                                <a href = "#" >
                                    <h2 > Kennen Sie schon unser Basler Original Equipment ?</h2 >
                                </a >
                                <p >
                                Wir bieten Ihnen ein umfangreiches Zubehörportfolio an . Darunter auch Basler Original Zubehör, das speziell nach unseren Anforderungen für uns entwickelt wurde .
                                <a href = "#" > mehr</a >
                                </p >
                            </div >
                        </div >';
                        }
                        if($page == 3) {
                            echo '
                        <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">06.05.2016</span>
                                <a href="#">
                                    <h2>Gute Gründe für die Basler beat in vielen Anwendungen - neue Marketing Note</h2>
                                </a>
                                <p>
                                Dank ihrer hohen Leistungsfähigkeit ist die Basler beat für ein breites Spektrum von Anwendungen die richtige Wahl. Lesen Sie jetzt in unserer neuen Marketing Note, welche Vorteile diese Flächenkamera bietet und für welche Anwendungen sie sich besonders eignet.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div> <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">06.05.2016</span>
                                <a href="#">
                                    <h2>Gute Gründe für die Basler beat in vielen Anwendungen - neue Marketing Note</h2>
                                </a>
                                <p>
                                Dank ihrer hohen Leistungsfähigkeit ist die Basler beat für ein breites Spektrum von Anwendungen die richtige Wahl. Lesen Sie jetzt in unserer neuen Marketing Note, welche Vorteile diese Flächenkamera bietet und für welche Anwendungen sie sich besonders eignet.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                         <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">06.05.2016</span>
                                <a href="#">
                                    <h2>Gute Gründe für die Basler beat in vielen Anwendungen - neue Marketing Note</h2>
                                </a>
                                <p>
                                Dank ihrer hohen Leistungsfähigkeit ist die Basler beat für ein breites Spektrum von Anwendungen die richtige Wahl. Lesen Sie jetzt in unserer neuen Marketing Note, welche Vorteile diese Flächenkamera bietet und für welche Anwendungen sie sich besonders eignet.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                         <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">06.05.2016</span>
                                <a href="#">
                                    <h2>Gute Gründe für die Basler beat in vielen Anwendungen - neue Marketing Note</h2>
                                </a>
                                <p>
                                Dank ihrer hohen Leistungsfähigkeit ist die Basler beat für ein breites Spektrum von Anwendungen die richtige Wahl. Lesen Sie jetzt in unserer neuen Marketing Note, welche Vorteile diese Flächenkamera bietet und für welche Anwendungen sie sich besonders eignet.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                         <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">06.05.2016</span>
                                <a href="#">
                                    <h2>Gute Gründe für die Basler beat in vielen Anwendungen - neue Marketing Note</h2>
                                </a>
                                <p>
                                Dank ihrer hohen Leistungsfähigkeit ist die Basler beat für ein breites Spektrum von Anwendungen die richtige Wahl. Lesen Sie jetzt in unserer neuen Marketing Note, welche Vorteile diese Flächenkamera bietet und für welche Anwendungen sie sich besonders eignet.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>
                         <div class="img-txt-teaser">
                            <div class="img-container">
                                <a href="#">
                                </a>
                            </div>
                            <div class="txt-container">
                                <span class="date">06.05.2016</span>
                                <a href="#">
                                    <h2>Gute Gründe für die Basler beat in vielen Anwendungen - neue Marketing Note</h2>
                                </a>
                                <p>
                                Dank ihrer hohen Leistungsfähigkeit ist die Basler beat für ein breites Spektrum von Anwendungen die richtige Wahl. Lesen Sie jetzt in unserer neuen Marketing Note, welche Vorteile diese Flächenkamera bietet und für welche Anwendungen sie sich besonders eignet.
                                <a href="#">mehr</a>
                                </p>
                            </div>
                        </div>';
                        }
                        if($page == 1) {
                            echo '
                        <div class="button hollow">
                            weitere News laden
                        </div>';
                        }?>
                    </div>
                </div>

                <script src="jquery_infinitescroll_min.js"></script>
                <script src="main.js"></script>

            </div>
            <div class="aside">
            </div>
        </div>
    </div>
</main>
<!-- // END MAIN -->

</body>
</html>
