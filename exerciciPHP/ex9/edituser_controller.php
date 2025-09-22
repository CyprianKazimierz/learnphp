<?php 
include_once("navbar.php"); 
include_once("userlist_model.php");

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['select'] != "1"){
   $user = $_POST['select'];
    echo "<div class=\"w-50 mx-auto mt-3\">";
    echo " <h2>Edit user: $user</h2>";
    echo "<form  method=\"get\">"; //action=\"savefile.php\"
    
    
    foreach($userList as $userFile){
        if($userFile['username'] == $user){
            echo "<label> Username:</label> <br>";
            echo "<input type=\"text\" class=\"form-control\" readonly value=\"$user\" name=\"username\"> <br>";
            echo "<label> Password </label> <br>";
            echo "<input type=\"text\" class=\"form-control\" value=\"{$userFile["password"]}\" name=\"password\"><br>";
            echo "<label>Rol user</label> <br>";
            echo "<select class=\"form-select\" name=\"rol\">";
            if($userFile['rol'] == "admin"){
                 echo "<option value=\"admin\" selected>admin </option>";
                 echo "<option value=\"user\">user </option>";
            }else{
                echo "<option value=\"admin\">admin </option>";
                echo "<option value=\"user\" selected>user </option>";
            }
            echo "</select> <br>";
            echo "<input type=\"submit\" value=\"save\" class=\"btn btn-primary mt-3\">";
            echo "</form>"; 
            echo "</div>";
            }
        }
    
}
?>

    <?php
        if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['password'])){
            $userSave = $_GET['username'];
            $passwordSave = $_GET['password'];
            $rolSave = $_GET['rol'];
            
            foreach($userList as &$user){
                if($user['username'] == $userSave){
                    $user['password'] = $passwordSave;
                    $user['rol'] = $rolSave;
                    break;
                }
            }
            file_put_contents('userlist.json', json_encode($userList,JSON_PRETTY_PRINT));
            echo "Save changes!!";
        }
    ?>

</body>
</html>