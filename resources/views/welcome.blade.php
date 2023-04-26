<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Election</a>
            <ul class="navbar-nav mr-auto">
                <li ><a class="nav-link " href="region_create">Creation de region </a></li>
                <li ><a class="nav-link " href="region_liste">Liste de region</a></li>
                <li><a  class= "nav-link" href= "participant_create"> Creation de participant </a></li>
                <li><a  class= "nav-link" href= "participant_liste"> Liste de participant </a></li>
                
            </ul>  
        </nav>
    </body>
</html>
