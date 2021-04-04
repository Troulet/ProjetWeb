<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel= "stylesheet" href="../resources/views/user_admin.css">
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        @include('header')
            <div class="filtre">
              <h3>Filtrer les résultats</h3>
                {!! Form::open(['url' => '/User_Search', 'method' => 'post']) !!}
                <input class="form-control me-2" type="search" name="research" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                {!! Form::close() !!}
                <!--<div>
                     <h3>Catégories</h3>
                            <div>
                                <input type="checkbox" id="student" name="student">
                                <label for="student">Étudiant</label>
                            </div>
                            <div>
                                <input type="checkbox" id="representative" name="representative">
                                <label for="representative">Délégué</label>
                            </div>
                            <div>
                                <input type="checkbox" id="pilot" name="pilot">
                                <label for="pilot">Pilote</label>
                            </div>
                        
                            <h3>Localité</h3>
                            <div>
                                <input type="checkbox" id="paris" name="paris">
                                <label for="paris">Paris</label>
                            </div>
                            <div>
                                <input type="checkbox" id="bordeaux" name="bordeaux">
                                <label for="bordeaux">Bordeaux</label>
                            </div>
                            <div>
                                <input type="checkbox" id="merignac" name="merignac">
                                <label for="merignac">Mérignac</label>
                            </div>
                            <div>
                                <input type="checkbox" id="lyon" name="lyon">
                                <label for="lyon">Lyon</label>
                            </div>
                            <div>
                                <input type="checkbox" id="olympe" name="olympe">
                                <label for="olympe">Mont Olympe</label> 
                            </div>
                        
                            <h3>Promotion</h3>
                            <div>
                                <input type="checkbox" id="info" name="info">
                                <label for="info">A2 Informatique</label>
                            </div>
                            <div>
                                <input type="checkbox" id="generaliste" name="generaliste">
                                <label for="generaliste">A2 Généraliste</label>
                            </div>
                            <div>
                                <input type="checkbox" id="btp" name="btp">
                                <label for="btp">A2 BTP</label>
                            </div>
                            <div>
                                <input type="checkbox" id="s3e" name="s3e">
                                <label for="s3e">A2 S3E</label>
                            </div>
                </div>-->
            </div>
            
            <div class="profil_card">
            
                <h2>Profil Utilisateur</h2>

                <div class="card">
                   @yield('data_pilot')
                </div>
                
                <br/>
                
                <div class="card">
                   @yield('data_student')
                </div>
                
                <br/>
                
                <div class="card">
                    @yield('data_admin')
                </div>
                
            </div>
        <div>
           {!! Form::open(['url' => '/Users_Create', 'method' => 'get']) !!}
            <button type="submit" class="btn">CRÉER UN PROFIL UTILISATEUR</button>
            {!! Form::close() !!}
        </div>
            @include('footer')
    </body>

    
</html>
