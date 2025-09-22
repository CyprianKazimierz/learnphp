<?php include_once("navbar.php"); ?>
<div class=" w-50 mx-auto mt-3">
    <h2>Edit user</h2>
    <p>Select an user to modify:</p>
    <form action="edituser_controller.php" method="post">
        <select class="form-select" name="select" aria-label="Default select example">
            <option selected value="1">Open this select menu</option>
            <?php 
                include_once("userlist_model.php");

                foreach($userList as $user){
                    echo "<option value=\"{$user['username']}\"> {$user['username']} </option>";
                }
            ?>
        </select>
    <input type="submit" value="edit" class="btn btn-primary mt-3">
    </form>
</div>

    
</body>
</html>