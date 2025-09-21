<?php include_once("navbar.php"); ?>
    
<table class="table table-striped table-sm w-50 mx-auto mt-5">
  <thead>
    <tr>
      <th scope="col">Nº</th>
      <th scope="col">User</th>
      <th scope="col">Password</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
        include_once("userlist_model.php");
        $id = 1;
        foreach($userList as $user){
            echo "<tr>";
            echo "<th scope='row'> $id </th>";
            echo "<td> {$user['username']} </td>";
            echo "<td> {$user['password']} </td>"; 
            echo "<td> {$user['rol']} </td>"; 
            echo "</tr>";
            $id++;
        }
    ?>
  </tbody>
</table>

</body>
</html>