<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo ajax</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login">
  <div class="form">
    <form class="login-form" id="connexion" action="action.php" method="POST">
      <span class="material-icons">From Ajax</span>
      <input type="text" id="pseudo" name="pseudo" placeholder="email" required="required" /><br />
	  <label for="name">Pseudo : </label>
      <input type="password" id="mdp" name="mdp" placeholder="password" required="required" /><br />
	  <label for="password">Mot de passe : </label>
      <button>login</button>
    </form>  
  </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="formulaire-ajax.js"></script> 
</html>