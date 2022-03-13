<?php
include('./header.php');
        include('./db_config/db_connection.php');
?>
<head>
    <link rel="stylesheet" href="../css/main.css">
    <style>
        

    </style>
</head>
<body>

    <?php 
    $msg ="";
    $tablename = $_SESSION['tablename'];
    if (isset($_POST['save'])){
		$c_name = $_POST['contactname'];
		$c_number = $_POST['contactnumber'];
		$c_email = $_POST['contactemail'];
        $sql = "SELECT contact_name FROM ".$tablename." WHERE contact_name ='$c_name'";
        $result = mysqli_query($mysql,$sql);
		if (mysqli_num_rows($result) == 0 && $c_name !="" && $c_email != ""){
		$sql = "INSERT INTO ".$tablename." SET
		contact_name='$c_name',
		contact_number = '$c_number',
		contact_email = '$c_email'
		";
			$result = mysqli_query($mysql,$sql);
			if(!empty($result)){
				echo '<script> alert("Contact Added Successfull"); </script>';
				} 
            }
            else{
                $msg = "This Contactname aldready exist give different one";
            }
        }
	
    ?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Load Container With Credentials...
					</span>

					<span class="txt1 p-b-11">
						Contact Name
					</span>
                    <p style="color:red;"><?php 
					if ($msg != "") {
						echo $msg;
					}
					?></p>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Contact Name is required">
						<input class="input100" type="text" name="contactname" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Contact Numbar
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Contact Number is required">
						<input class="input100" type="number" name="contactnumber" >
						<span class="focus-input100"></span>
					</div>
                    <span class="txt1 p-b-11">
						Contact E-Mail
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Contact E-mail is required">
						<input class="input100" type="email" name="contactemail" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
					<input type="submit" name="save" value="Save" class="login100-form-btn">
					</div> 
				</form>
			</div>
		</div>
	</div>
	
     <?php 
     $select = "SELECT * FROM ".$tablename;
     $result = mysqli_query($mysql,$select);
     $row = mysqli_num_rows($result);
     if ($row > 0) { ?>
     <div class="container mt-3">
  <table class="table">
    <thead class="table-secondary">
      <tr>
      <th>S.No</th>
        <th>Contact Name</th>
        <th>COntact Number</th>
        <th>Contact Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php

    $select = "SELECT * FROM ".$tablename;
    $s_no = 0;
                            $run = mysqli_query($mysql, $select);
                            while ($row = mysqli_fetch_array($run,MYSQLI_ASSOC)) {
                                $s_no++;
                                $c_id = $row['contact_id'];
                                $c_name = $row['contact_name'];
                                $c_number = $row['contact_number'];
                                $c_email = $row['contact_email'];
                                ?>
      <tr>
        <td><?php echo $s_no; ?></td>
        <td><?php echo $c_name; ?></td>
        <td><?php echo $c_number; ?></td>
        <td><?php echo $c_email; ?></td>
        <td><?php echo  "<a style='text-decoration:none;color:black;' href='deleteContact.php?id=" . $c_id . "' ><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg><button type='submit' type='button'
class='btn btn-light'></button>
</a>"; ?>      </tr>
      <?php } ?>
    </tbody>
  </table>
<?php } ?>
  <?php  ?>
</body>
</html>
