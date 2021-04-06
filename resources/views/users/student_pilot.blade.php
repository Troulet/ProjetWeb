<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel= "stylesheet" href="../resources/views/users/student_pilot.css">
        <link rel= "stylesheet" href="../resources/views/header_footer.css">
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    
    <body> 
      @include('header')
                {!! Form::open(['url' => '/Users_Search', 'method' => 'post']) !!}
                    <input class="form-control me-2" type="search" name="research" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                {!! Form::close() !!}
            <div class="profil_card">           
                <h2>Profils des Élèves</h2>
                <div class="card">
                    @yield('data_student')
                </div>
            </div>
            
        <div>
           {!! Form::open(['url' => '/Users_Create', 'method' => 'get']) !!}
            <button type="submit" class="btn">CRÉER UN PROFIL UTILISATEUR</button>
            {!! Form::close() !!}
        </div>
          @include('footer')
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
    
</html>
