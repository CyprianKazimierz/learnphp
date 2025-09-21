<?php  include_once("navbar.php")?>

<form action="adduser_controller.php" class="w-50 mx-auto mt-4" method="post">
    <h3>Add user</h3>
  <div class="mb-3">
    <label for="" class="form-label">Username:</label>
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="enter username in lowercase">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="must have lower, upper and numbers">
  </div>
  <div class="mb-3">
    <label for="">Rol:</label>
    <select name="rol" class="form-select" arial-label="Default select example">
        <option  selected value="user">user</option>
        <option value="admin">admin</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>