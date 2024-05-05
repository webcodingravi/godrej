<?php

include 'header/header.php';


if(isset($_POST['save'])) {
    include '../config.php';
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);


    $sql = "SELECT username FROM user WHERE username = '{$user}'";
    $result = mysqli_query($conn, $sql) or die("Query failed");

    if(mysqli_num_rows($result) > 0) {
       echo "<p style='color:red; text-align:center; margin:10px 0;'>Username already Exists.</p>";
    }else {
        $sql1 = "INSERT INTO user(first_name, last_name, username, password, role)
         VALUES('{$fname}', '{$lname}', '{$user}', '{$password}', '{$role}')";

         if(mysqli_query($conn, $sql1)) {
            header("Location: {$header}Dashboard/users-portal.php");
         }
    }
}


?>


<section class="add-users">
<div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h1 class="text-center mb-5">Add Users</h1>
                <div class="card shadow">
                <form  action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" required>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-button" value="Save" required />
                  </form>
              
</div>
</section>


<?php

include 'footer/footer.php';

?>