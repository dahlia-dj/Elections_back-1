<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <h1>Liste des participants</h1>
    </div>
    <br>
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>CNI</th>
                <th>Age</th>
                <th>Sexe</th>
                <th>Statut</th>
                <th>Id_region</th>
                <th>Login</th>
                <th>Password</th>
                <th>Email</th>
                <th>Etat</th>
                <th>Telephone</th>
                <th>Action</th>
            </tr>
       <tbody>
        @foreach ( $participant as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nom}}</td>
            <td>{{$p->num_cni}}</td>
            <td>{{$p->age}}</td>
            <td>{{$p->sexe}}</td>
            <td>{{$p->statut}}</td>
            <td>{{$p->id_region}}</td>
            <td>{{$p->login}}</td>
            <td>{{$p->pwd}}</td>
            <td>{{$p->email}}</td>
            <td>{{$p->etat}}</td>
            <td>{{$p->tel}}</td>
            <td>
                <a href="/participant_delete/{{$participant->id}}" class="btn btn-danger">Supprimer</a>
                <a href="/form_update_participant/{{$participant->id}}" class="btn btn-info">Editer</a>
            </td>
        </tr>    
        @endforeach
       </tbody>
    </table>
 
    <br>
        <a href="/participant_create" class="btn btn-primary">Ajouter un participant</a>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>