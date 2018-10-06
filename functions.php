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
		$username = escape_string($_POST['username']);
		$password = escape_string($_POST['password']);

		$query= execute_query("SELECT * FROM airlines_reservation_system.admin WHERE admin_username = '{$username}' AND admin_password= '{$password}' ");
		confirm($query);

		if(mysqli_num_rows($query) == 0)
		
		{

			set_message("Wrong username or password");
			
			
		}
		else
		{
			$_SESSION['username'] = $username;
			header("Location:admin");
		}
	}
}	

?>