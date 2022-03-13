<?php

    include('./header.php');
?>
<head>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/png" href="./icons/icon.ico"/>
</head>
<nav class="navbar navbar-light bg-light"  >
  <div class="container">
  <a class="navbar-brand" href="./index.php">
      <img src="./icons/zoho-logo.png"   alt="" width="70" height="70">
    </a>
    <span style="font-family: Raleway-Medium;
  font-size: 30px;
  color: #555555;
  text-transform: uppercase;">
						Contact Container
					</span>
     <?php               
     if($_SESSION['loggedin'] == true){ ?>
        <div class="text-end" style="padding-right:50px;">
            <table>
            <tr>
            <td>

            <span style="color:black;font-size:large;font-family:'Times New Roman', Times, serif ">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
                &nbsp; Hi&nbsp;<?php echo ($_SESSION['username']) ?>! </span>

            </td>
            <td>

            <form method="post"action="logout.php">


                <span>&nbsp; <button type="submit" name="logout" style="color:black;" class="btn btn-outline-secondary "> Logout</button></span>

            </form>

            </td>
        </tr>
        </table>


        </div>

        <?php }  else { ?>
      <div class="text-end" style="padding-left:50px;">
      <a href="login.php"
            style="text-decoration: none;font-size:20px ">Login</a>
            &nbsp;&nbsp;
            <a href="register.php"style="text-decoration: none;font-size:20px">Sign-up
        </a>
      </div>
      <?php } ?>
  </div>
</nav>
<?php 

?>

