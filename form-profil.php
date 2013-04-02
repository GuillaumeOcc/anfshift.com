

<div class="register">

  
   <form method="post" action="post-profil.php">
    <legend>Profil</legend>

    <label for="firstname">Prénom</label>
    <input type="text" name="firstname" value="<?php echo $_SESSION['firstname'] ?>" id="firstname" required/>

    <label for="lastname">Nom</label>
    <input type="text" name="lastname" value="<?php  echo $_SESSION['lastname'] ?>" id="lastname" required/>

    <label for="email">Email</label>
    <input type="email" name="email" value="<?php echo $_SESSION['email']?>" id="email" required/>


    

    <label for="job">Job</label>
    <select name="job">
      <option value="cashier" <?php if($_SESSION['job'] == "cashier" ){ echo "selected" ;} ?>>Caissier</option>
      <option value="impact1" <?php if($_SESSION['job'] == "impact1"  ){ echo "selected" ;} ?>>Impact1</option>
      <option value="impact2" <?php if($_SESSION['job'] == "impact2"  ){ echo "selected" ;} ?>>Impact2</option>
      <option value="model" <?php if($_SESSION['job'] == "model"  ){ echo "selected" ;} ?>>Modele</option>
      <option value="stylist" <?php if($_SESSION['job'] == "stylist"  ){ echo "selected" ;} ?>>Styliste</option>
      <option value="ops" <?php if($_SESSION['job'] == "ops"  ){ echo "selected" ;} ?>>OPS</option>
    </select>

    <input type="submit" name"buttonRegister" value"register"/>

   </form>
</div>