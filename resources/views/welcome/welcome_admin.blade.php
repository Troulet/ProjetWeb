<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel= "stylesheet" href="../resources/views/welcome/welcome_admin.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    </head>
    <body>
        @include('.resources.views.header.blade.php')
    <br>
        <div id="information_step4" class="informer">
            <div class="list-group">
                <h3>Les News du Jour :</h3>
                <a href="#" class="list-group-item list-group-item-action">Message</a>
                <a href="#" class="list-group-item list-group-item-action">Message</a>
                <a href="#" class="list-group-item list-group-item-action">Message</a>
                <a href="#" class="list-group-item list-group-item-action">Message</a>
            </div>
        </div>
        @include('.resources.views.footer.blade.php')
    </body>

</html>
