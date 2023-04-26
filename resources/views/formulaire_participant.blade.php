<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form method="post" action="/participant_insert">
        {{ csrf_field() }}

        <div class="container">
            <h2>Ajouter un participant</h2>
          <div class="col-md-6">
            <!-- nom-->
            <label for="nom" class="form-label">Nom</label>
            <input id="nom" class="form-control" type="text" name="nom" placeholder="Entrer votre nom">
            <!-- cni-->
            <label for="cni" class="form-label">CNI</label>
            <input id="cni" class="form-control" type="text" name="cni" placeholder="Entrer votre numero de cni">
            <!-- age-->
            <label for="age" class="form-label">Age</label>
            <input id="age" class="form-control" type="number" name="age" placeholder="Entrer votre age">
          </div>
        
        <br>  
        <!-- sexe-->
        <div class="row">
            <label class="form-label">Sexe</label>
            <div>
                <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="radio1" name="radiobouton">
                <label class="custom-control-label" for="radio1">M</label> 
                </div>
                <div class="form-check form-check-inline">    
                <input type="radio" class="form-check-input" id="radio2" name="radiobouton">
                <label class="custom-control-label" for="radio2">F</label>   
                </div>
            </div>
        </div>

        <br>
        <!-- statut-->
        <div class="row">
            <label class="form-label">Statut</label>
            <div>
                <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" id="radio1" name="radiobouton2">
                <label class="custom-control-label" for="radio1">Electeur</label> 
                </div>
                <div class="form-check form-check-inline">    
                <input type="radio" class="form-check-input" id="radio2" name="radiobouton2">
                <label class="custom-control-label" for="radio2">Non-electeur</label>   
                </div>
            </div>
        </div>
        
        <br>
      <div class="row">
        <div class="col-md-6">
             <!-- id_region-->
        <label for="id_region" class="form-label">id_region</label>
        <input id="id_region" class="form-control" type="number" name="id_region" placeholder="Entrer votre numero de region">
            <!-- login-->
        <label for="login" class="form-label">Login</label>
        <input id="login" class="form-control" type="text" name="login" placeholder="Entrer votre login">
            <!-- password-->
        <label for="password" class="form-label">Password</label>
        <input id="password" class="form-control" type="password" name="password" placeholder="Entrer votre mot de passe">
          <!-- email-->
          <label for="email" class="form-label">Email</label>
          <input id="email" class="form-control" type="email" name="email" placeholder="Entrer votre email">
        </div>
      </div>

      <br>
      <!-- etat-->
      <div class="row">
        <label class="form-label">Etat</label>
        <div>
            <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="radio1" name="radiobouton3">
            <label class="custom-control-label" for="radio1">Voter</label> 
            </div>
            <div class="form-check form-check-inline">    
            <input type="radio" class="form-check-input" id="radio1" name="radiobouton3">
            <label class="custom-control-label" for="radio1">Pas-voter</label> 
            </div>
        </div>
    </div>

    <br>
    <div class="row">
        <div class="col-md-6">
            <!-- telephone-->
        <label for="login" class="form-label">Telephone</label>
        <input id="phone" class="form-control" type="text" name="phone" placeholder="Telephone">
        </div>
      </div>
      
      <!-- bouton-->
        <br>
            <button type="submit" class="btn btn-primary mb-2">S'inscrire</button>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @else
    <div class="alert alert-fail">
        {{session('erreur')}}
    @endif
    </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>