<?php include('partials/menu.php'); ?>

<div class="main-content">
<div class="wrapper">
<h1>Add Admin</h1>
<br><br>
<form action="" method="POST">
<table class="tbl-30" >
    <tr>
        
       <td>Full Name:</td>
        <td>
            <input type="text" name="full_name" placeholder="Enter Your Name">
        </td> 
</tr>
        <tr>
        <td>Username:</td>
        <td>
            <input type="text" name="username" placeholder="Your Username">
        </td> 
    </tr>
    <tr>
        <td>Password:</td>
        <td>
            <input type="text" name="password" placeholder="Your password">
        </td>      
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="submit" value="Add Admin" class="btn-secondary">

        </td>
    </tr>
    
    
</table>
</form>
</div>
</div>
<?php include('partials/footer.php') ?>
<?php
//process form value and save to database
//check whether the submit button is clicked or not
 
if (isset($_POST['submit']))
{
    //button clicked
    //Getting data from the form
    $full_name =$_POST['full_name'];
    $username = $_POST['username'];
    $password =md5($_POST['password']);// password enscripted with MD5

    //sql query to save the data into database
$sql = "INSERT INTO tbl_admin SET
    full_name ='$full_name',
    username ='$username',
    password ='$password'

    ";
   //executing query and saving info into database
//    $res = mysqli_query($conn, $sql) or die(mysqli_error());

    //checking if the query was executed and if the information displayed in DB is correct
    // if ($res == TRUE)
    // {
    //     //data inserted
    //     echo "Data inserted";
    // }
    // else
    // {
    //     //failed to insert data
    //     echo "Failed to insert data";
    // }
}
?>