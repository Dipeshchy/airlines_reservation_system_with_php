<?php 
include('database/db.php');

?>


<?php



function execute_query($query)
{
    global $connection;
    return mysqli_query($connection,$query);
}

function confirm($result)
{
    global $connection;
    if(!$result)
    {
        return die("Failed".mysqli_error($connection));
    }
}

function fetch_array($result)
{
    global $connection;
    return mysqli_fetch_array($result);
}

function escape_string($string)
{
    global $connection;

    return mysqli_real_escape_string($connection,$string);
}


function set_message($msg)
{
	if(!empty($msg))
	{
		$_SESSION['message'] = $msg;

	}
	else
	{
		$msg= "";
	}
}

function display_message()
{
	if(isset($_SESSION['message']))
	{
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
}
function admin_login()
{
	if(isset($_POST['submit']))
	{
		$admin_username = escape_string($_POST['username']);
		$password = escape_string($_POST['password']);

		$query= execute_query("SELECT * FROM airlines_reservation_system.admin WHERE admin_username = '{$admin_username}' AND admin_password= '{$password}' ");
		confirm($query);

		if(mysqli_num_rows($query) == 0)
		
		{

			set_message("Wrong username or password");
			
			
		}
		else
		{
			$_SESSION['admin_username'] = $admin_username;
			header("Location:admin");
		}
		
	}
}	

function passenger_signup()
{
	if(isset($_POST['signup']))
	{
		$firstname = escape_string($_POST['firstname']);
		$lastname = escape_string($_POST['lastname']);
		$age = escape_string($_POST['age']);
		$nationality = escape_string($_POST['nationality']);
		$username = escape_string($_POST['username']);
		$email = escape_string($_POST['email']);
		$mobilenumber = escape_string($_POST['mobilenumber']);
		$passenger_image = $_FILES['image']['name'];
    	$passenger_image_temp = $_FILES['image']['tmp_name'];

		$address = escape_string($_POST['address']);
		$password = escape_string($_POST['password']);
		$confirmpassword = escape_string($_POST['confirmpassword']);



		
		if($password != $confirmpassword)
		{
			set_message("password didn't match");
		}
		else
			{
				move_uploaded_file($passenger_image_temp, "images/passengers/$passenger_image");


		$query= execute_query("INSERT INTO airlines_reservation_system.passengers(username, passenger_firstname, passenger_lastname ,passenger_age , passenger_email , passenger_password, passenger_mobno , passenger_address , passenger_nationality , passenger_image) VALUES('{$username}' , '{$firstname}' , '{$lastname}' , '{$age}' , '{$email}', '{$password}' , '{$mobilenumber}', '{$address}', '{$nationality}', '{$passenger_image}')");

		confirm($query);

		if($query)
		
		{

			set_message("Successfully registered");
			
			
		}
		
	}
	}
}	

function passenger_login()
{
	if(isset($_POST['submit']))
	{
		$username = escape_string($_POST['username']);
		$password = escape_string($_POST['password']);

		$query= execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE username = '{$username}' AND passenger_password= '{$password}' ");
		confirm($query);

		if(mysqli_num_rows($query) == 0)
		
		{

			set_message("Wrong username or password");
			
			
		}
		else
		{
			$_SESSION['username'] = $username;
			header("Location:index.php");
		}
		
	}
}	

function show_user_image_in_home()
{
	$query = execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE username = '{$_SESSION['username']}' ");
	confirm($query);
	while ($row=fetch_array($query)) {
		$passenger_image = $row['passenger_image'];
		echo "<img src='images/passengers/{$passenger_image}' alt='' class='rounded-circle' height='40px' width='40px'>";
	}
}

function get_announcements()
{
	$query = execute_query("SELECT * FROM airlines_reservation_system.announcements");
	confirm($query);
	while($row= fetch_array($query))
	{
		$announcements_title = $row['announcements_title'];
		$announcements_image = $row['announcements_image'];
		$announcements_detail = $row['announcements_detail'];
		$announcements_id = $row['announcements_id'];

		?>
		 <div class="col-lg-4" style="float: left;">
		 <img src="images/announcements/<?php echo $announcements_image; ?>" alt="" class="col-lg-12" height="200px">
		 <h3 style="text-align: center; color: white; background-color: rgb(168, 144, 50);"><?php echo $announcements_title; ?></h3>
		 <article  style="background-color: white; color: black;">
        <p style="background-color: white; color: black;" id="detail"><?php echo substr($announcements_detail,0,70); ?>..<a href='announcements.php?announcement_id=<?php echo $announcements_id;?>' id="seemore"> See more <a>   </p>
    </article>
  

		 </div>
		 
<?php
	}
}


?>