
    <div id="1">
       <div id="header">
        <div class="titre">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>LES P'TITES ANNONCES</h1>
            <h2>Cherche et trouve le stage qui te correspond !</h2>
            <button class="bouton" type="button">Déconnexion</button>
        </div>
        </div>
    </div>
    <div id="page_loaded">
        <?php
            if($user_type==0)  {
                echo '<div id="student"> <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand">Menu</a>
                            <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>-->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/Public/Home">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/Public/Offer">Offre</a>
                                    </li>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/Public/Postulate">Candidature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/Public/Contact">Contact</a>
                                    <li class="nav-item">
                                        <a class="nav-link" href="http://localhost/Public/Help">Aide</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>';

            }
            else if($user_type==1){
                echo '<div id="pilot">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand">Menu</a>
                                <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>-->
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/Public/Home">Accueil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/Public/Offer">Offre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/Public/Users">Elève</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/Public/Contact">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/Public/Help">Aide</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>';
            }
            else if($user_type==2) {
                echo '<div id="admin">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                               <div class="container-fluid">
                                        <a class="navbar-brand">Menu</a>
                                        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>-->
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/Public/Home">Accueil</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/Public/Offer">Offre</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/Public/Users">Utilisateur</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/Public/Contact">Contact</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="http://localhost/Public/Help">Aide</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>';
                }
        ?>
    </div>
