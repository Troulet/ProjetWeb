<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel= "stylesheet" href="../resources/views/postulate/postulate.css"/>
        <link rel= "stylesheet" href="../resources/views/header_footer.css"/>
        <title>LES P'TITES ANNONCES</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css2?family=Happy+Monkey&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
        
    <body>
        @include('header')
            {{
                $file = $_POST['PDF'];
                $filename = 'offre.pdf';

                // Header content type
                header('Content-type: application/pdf');

                header('Content-Disposition: inline; filename="' . $filename . '"');

                header('Content-Transfer-Encoding: binary');

                header('Accept-Ranges: bytes');

                // Read the file
                @readfile($file);
            }}
        @include('footer')
    </body>

    
</html>
