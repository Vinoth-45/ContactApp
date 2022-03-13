 <?php if (isset($_POST['logout']))
{
 
    $_SESSION['loggedin'] == false;
   
    session_destroy();
    header('location:login.php');
}
?>
