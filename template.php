<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Enregistrement</title>
    <meta name="viewport" content="width=device-width,
      initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <h1 class="form-title">Inscrivez-vous</h1>
      <form action="enregistrement.php" method="post">
        <div class="main-user-info">
          <div class="user-input-box">
            <label for="Nom">Nom</label>
            <input type="text"
                    id="Nom"
                    name="Nom"
                    placeholder="Entrez votre nom"/>
          </div>
          <div class="user-input-box">
            <label for="Pré-nom">Pré-nom</label>
            <input type="text"
                    id="Pré-nom"
                    name="Pré-nom"
                    placeholder="Entrez votre Pre-nom"/>
          </div>
          <div class="user-input-box">
            <label for="email">Email</label>
            <input type="email"
                    id="email"
                    name="email"
                    placeholder="Entrez votre Email"/>
          </div>
          <div class="user-input-box">
            <label for="phoneNumber">Numero Tel</label>
            <input type="number"
                    id="phoneNumber"
                    name="phoneNumber"
                    placeholder="Entrez votre Numero de telephone"/>
          </div>
          <div class="user-input-box">
            <label for="password">Mot de passe</label>
            <input type="password"
                    id="password"
                    name="password"
                    placeholder="Entrez le mot de passe"/>
          </div>
          <div class="user-input-box">
            <label for="confirmPassword">Confirmez</label>
            <input type="password"
                    id="confirmPassword"
                    name="confirmPassword"
                    placeholder="Confirmez le mot de passe"/>
          </div>
        </div>
        <div class="gender-details-box">
          <span class="gender-title">Genre</span>
          <div class="gender-category">
            <input type="radio" name="gender" id="homme">
            <label for="male">Homme</label>
            <input type="radio" name="gender" id="femme">
            <label for="female">Femme</label>
          </div>
        </div>
        <div class="form-submit-btn">
          <input type="submit" value="Enregistrer">
        </div>
      </form>
    </div>
  </body>
  <?=$content?>
</html>