<!doctype html>
<html>
<?php include("includes/head.php") ?>
<body>
  <div id="login">
  <span class="img-container">
<a href="index.php"><img  src="assets/junia_logo.png" /></a>
  </span>
<form name="frmUser" method="post" action="signIn.php">
<table>
  <tr>
  <td class="izq">
    Identifiant
  </td>
  <td class="der">
    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Identifiant" />
  </td>
  </tr>
  <tr>
    <td class="izq">
      Mot de passe
    </td>
    <td class="der">
      <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Mot de passe"/>
    </td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" value="Se connecter" name="but_submit" id="but_submit" />
    </td>
  </tr>

</table>
</div>
</body>
</html>
