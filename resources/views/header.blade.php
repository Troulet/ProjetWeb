<!DOCTYPE html>
<html>
<link rel= "stylesheet" href="../resources/views/header_footer.css"/>

<body onload="print_page()">
    <div id="1">
       <div id="header">
        <div class="titre">
            <img class="logo2" src="../resources/img/logo_cesi2.0.png">
            <h1>LES P'TITES ANNONCES</h1>
            <h2>Cherche et trouve le stage qui te correspond !</h2>
        </div>
        </div>
    </div>
    
    <div id="page_loaded"></div>
    
    <script type="javascript">
    
        function print_page() {
            var html='';
            
            if($user_type==0)  {
            
                html= '<div id="student">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand">Menu</a>
                            <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>-->
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Offre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Candidature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Aide</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>';
            }
            
            else if($user_state==1) {
            
                html='<div id="pilot">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <a class="navbar-brand">Menu</a>
                                <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>-->
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">Offre</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Elève</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Aide</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>';
            }
            else {
            
                html='<div id="admin">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                               <div class="container-fluid">
                                        <a class="navbar-brand">Menu</a>
                                        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>-->
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav">
                                                <li class="nav-item">
                                                    <a class="nav-link active" aria-current="page" href="#">Offre</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Elève</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Contact</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Utilisateur</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Aide</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>';
                }
            document.getElementById("page_loaded").innerHTML = html;
        }
    </script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
