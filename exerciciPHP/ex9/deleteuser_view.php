<?php include_once("navbar.php"); ?>

<div class=" w-50 mx-auto mt-3">
    <h2>Delete user</h2>
    <p>Select an user to delete:</p>
    <form action="" method="post">
        <select class="form-select" name="select" aria-label="Default select example">
            <option selected value="1">Open this select menu</option>
            <?php 
                include_once("userlist_model.php");

                foreach($userList as $user){
                    echo "<option value=\"{$user['username']}\"> {$user['username']} </option>";
                }
            ?>
        </select>
    
        <input type="submit" value="delete user" class="mt-2 btn btn-primary">
    </form>
    </div>
    <?php 
        if($_SERVER['REQUEST_METHOD']== "POST" &&  isset($_POST['select'])){
            $option = $_POST['select'];
            if ($option != "1") {
            
                $eliminate = array_filter($userList,function($array) use ($option) { 
                return $array['username'] !== $option; });
                
                $eliminate = array_values($eliminate);

                file_put_contents('userlist.json', json_encode($eliminate,JSON_PRETTY_PRINT));

                echo "User eliminated: $option";
            }
        }
    ?>
</body>
</html>