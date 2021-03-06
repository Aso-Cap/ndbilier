<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="container">
        <div class="top-header">
            <div class="realestate-logo pull-left">
                <a href="index.php" title=""><img alt="" src="img/logo.png"></a>
            </div>
            <!-- Menu --> 
            <div class="menu-navbar  pull-right">
                <div class="navbar">
                    <ul class="nav" id="navmenu">
                        <li class="dropdown">
                            <!--a class="active dropdown-toggle" data-target="#" data-toggle="dropdown" href="#">LANG</a-->
                            <?php
                            $langTitle = "";
                            $langLink = "";
                            $langIcon = "";
                            $langAlt = "";
                            //menuElements
                            $menuTitles = array();
                            if ( $_SESSION['lang'] == "ar" ) {
                                $langTitle = "العربية";
                                $langLink = "index.php?lang=ar";
                                $langIcon = "img/icon/flags/arabic.png";
                                $langAlt = "AR";  
                                $menuTitles[0] = "مشاريع سكنية";
                                $menuTitles[1] = "شركاؤنا";
                                $menuTitles[2] = "من نحن";
                                $menuTitles[3] = "اتصل بنا";
                            }
                            else if ( $_SESSION['lang'] == "fr" ) {
                                $langTitle = "Français";
                                $langLink = "index.php?lang=fr";
                                $langIcon = "img/icon/flags/french.png";
                                $langAlt = "FR";
                                $menuTitles[0] = "Projets";
                                $menuTitles[1] = "Partenaires";
                                $menuTitles[2] = "À propos";
                                $menuTitles[3] = "Contact";    
                            }
                            else if ( $_SESSION['lang'] == "es" ) {
                                $langTitle = "Español";
                                $langLink = "index.php?lang=es";
                                $langIcon = "img/icon/flags/spain.png";
                                $langAlt = "";
                                $menuTitles[0] = "Proyectos";
                                $menuTitles[1] = "Socios";
                                $menuTitles[2] = "Sobre Nadobilier";
                                $menuTitles[3] = "Contacto";    
                            }
                            else if ( $_SESSION['lang'] == "de" ) {
                                $langTitle = "Deutschland";
                                $langLink = "index.php?lang=de";
                                $langIcon = "img/icon/flags/german.png";
                                $langAlt = "DE";    
                                $menuTitles[0] = "Projekte";
                                $menuTitles[1] = "Partner";
                                $menuTitles[2] = "Über uns";
                                $menuTitles[3] = "Kontakt";
                            }
                            else if ( $_SESSION['lang'] == "nl" ) {
                                $langTitle = "Nederland";
                                $langLink = "index.php?lang=de";
                                $langIcon = "img/icon/flags/netherlands.png";
                                $langAlt = "NL";    
                                $menuTitles[0] = "Projecten";
                                $menuTitles[1] = "Partner";
                                $menuTitles[2] = "Over ons";
                                $menuTitles[3] = "Contact";
                            }
                            ?>
                            <a href="<?php //$langLink ?>"><img src="<?= $langIcon ?>" alt="<?= $langAlt ?>" />&nbsp;<?= $langTitle ?></a>
                            <ul class="dropdown-menu">
                                <?php if ( $_SESSION['lang'] !="ar" ) { ?>
                                <li><a href="<?= $currentPage ?>?lang=ar"><img src="img/icon/flags/arabic.png" alt="AR" />&nbsp;العربية</a></li>
                                <?php } ?>
                                <?php if ( $_SESSION['lang'] !="fr" ) { ?>
                                <li><a href="<?= $currentPage ?>?lang=fr"><img src="img/icon/flags/french.png" alt="FR" />&nbsp;Français</a></li>
                                <?php } ?>
                                <?php if ( $_SESSION['lang'] !="de" ) { ?>
                                <li><a href="<?= $currentPage ?>?lang=de"><img src="img/icon/flags/german.png" alt="DE" />&nbsp;Deutschland</a></li>
                                <?php } ?>
                                <?php if ( $_SESSION['lang'] !="nl" ) { ?>
                                <li><a href="<?= $currentPage ?>?lang=nl"><img src="img/icon/flags/netherlands.png" alt="NL" />&nbsp;Nederland</a></li>
                                <?php } ?>
                                <?php if ( $_SESSION['lang'] !="es" ) { ?>
                                <li><a href="<?= $currentPage ?>?lang=es"><img src="img/icon/flags/spain.png" alt="ES" />&nbsp;Español</a></li>
                                <?php } ?>
                            </ul>
                            <div class="clearfix"></div>
                        </li>
                        <li class="active"><a class="brand" href="index.php" title="">Accueil</a></li>
                        <li <?php if ($currentPage == "projects.php" or $currentPage == "project-detail.php"){ echo 'class="active"'; } ?> ><a href="projects.php" title=""><?= $menuTitles[0] ?></a></li>
                        <li <?php if ($currentPage == "companies.php"){ echo 'class="active"'; } ?> ><a href="companies.php" title=""><?= $menuTitles[1] ?></a></li>
                        <li <?php if ($currentPage == "about.php"){ echo 'class="active"'; } ?> ><a href="about.php" title=""><?= $menuTitles[2] ?></a></li>
                        <li <?php if ($currentPage == "contact.php"){ echo 'class="active"'; } ?> ><a href="contact.php" title=""><?= $menuTitles[3] ?></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Menu -->
        </div>
    </div>
    <div class="row-fluid">
        <!-- Banner -->
        <div class="row-fluid">
            <div class="span12">
                <section class="pic-cat">
                    <img width="1900" height="200" alt="" src="img/imgdemo/1900x200.gif">
                </section>
            </div>
        </div>
        <!-- End banner -->
    </div>
</header>