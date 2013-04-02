
   <form method="post" action="form-post.php">
    <legend>Inscription</legend>

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" id="firstname" required/>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" id="lastname" required/>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required/>

    <label for="password">Mot de Passe</label>
    <input type="password" name="password" id="password" required/>

    <label for="confirmPassword">Confirmer Mot de Passe</label>
    <input type="password" name="confirmPassword" id="confirmPassword" required/>

    <label for="job">Job</label>
    <select name="job">
      <option value="cashier">Caissier</option>
      <option value="impact1">Impact1</option>
      <option value="impact2">Impact2</option>
      <option value="model">Modele</option>
      <option value="stylist">Styliste</option>
      <option value="ops">OPS</option>
    </select>

    <input type="submit" name"buttonRegister" value"register"/>

   </form>