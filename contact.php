<?php  ob_start() ?>

<form class="mt-4 mb-4 text-light">
  <div class="form-row">
  <div class="form-group col-lg-6">
      <label for="inputname">Prénom</label>
      <input type="text" class="form-control" id="inputname" placeholder="Prénom">
    </div>
    <div class="form-group col-lg-6">
      <label for="inputlastname">Nom</label>
      <input type="text" class="form-control" id="inputlastname" placeholder="Nom">
    </div>

    <div class="form-group col-lg-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-lg-6">
      <label for="inputPassword4">Mot de passe</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Mot de passe">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Complément</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Appartement, studio, or étage">
  </div>
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-lg-4">
      <label for="inputState">Pays</label>
      <select id="inputState" class="form-control">
        <option selected>Votre pays</option>
        <option>France</option>
        <option>Italie</option>
        <option>Russie</option>
      </select>
    </div>
    <div class="form-group col-lg-2">
      <label for="inputZip">Code postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-lg-12">
      <textarea name="input" id="message" class="w-100 h-100" placeholder="Votre message"></textarea>
    </div>
  </div>
  <div class="form-group">
  </div>
  <div class="text-center mt-5">
    <button type="submit" class="btn btn-light">Envoyer</button>
    <button type="restet" class="btn btn-light">Annuler</button>
  </div>

</form>

<?php 
    $content = ob_get_clean();
    require "template.php";
?>