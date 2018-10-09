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
		echo "<img src='images/passengers/{$passenger_image}' alt='' height='60px' width='60px'>";
	}
}

?>