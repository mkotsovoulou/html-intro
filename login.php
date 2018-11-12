<?php
include('start.php');
include('navbar.php');
include('dbFunctions.php');
?>
<center><h1>Login</h1></center>
<div class="container container-small">
  <form action="loginCheck.php" method="post">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" class="form-control" name ="id" id="id" placeholder="ex. 854595">
    </div>
    <label for="email">Email</label>
    <input type="text" name ="email" class="form-control" id="email" placeholder="ex. gate7@gate7.gr">
    <br>
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
<?php
include('footer.php');
include('end.php');
?>


