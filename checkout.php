<?php

include('database/db.php');
?>
<?php
    include_once('link_container.php');
    include_once('functions.php');
    session_start();
?>

<?php 
passenger_login();


 ?>

 <?php 
$flight_id = $_GET['flight_id'];
$_SESSION['flight_id'] = $flight_id;

 ?>
 <body>
     <div class="">
        
        <?php 

            include('includes/header.php');

         ?>
            
     </div>

     <form class="form-group" method="post" action="passengerDetail.php">
       <label>Choose the number of passengers : </label>
       <select name="passengerNumber" class="form-group">
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
       </select>
       <br>
       <input type="submit" class="btn btn-success" name="confirmCount" value="Confirm" id="numberPassengerForm"
       ></button>
     </form>
<!--      <p id="message" style="margin-left: 55px;" class="text-danger"></p>
     <script type="text/javascript">
       function myFunction() {
          var value1 =document.getElementById("value").value;
          if (isEmpty(value)) {
            document.getElementById("message").innerHTML = "Enter Value!! Fiend cant be empty."
          }

          document.getElementById("message").innerHTML = "Only 5 persons allowed!!"
        
       }
     </script> -->

     <?php
   //   if (isset($_POST['confirmCount'])) {
   //     if ($_POST['passengerCount']=='') {
   //     echo "<h3 class='text-danger' style='margin-left:50px;'>Enter Value. Field Cant Be Empty!!</h3>";
   //     die;
   //   }
   //    if ($_POST['passengerCount'] >= 10) {
   //      echo "<h3 class='text-danger'>Only 10 persons max allowed</h3>";
   //      die;
   //    }
   //    else {
   //     $numberOfPassenger = $_POST['passengerCount']; 
   //     $_SESSION['passsenger_number'] = $numberOfPassenger;
   //     header("Location : index.php");
   //   }
    
   // }
?>
<!-- <form class="form-group" method="post" id="detailfrom" style="display: none;">
  <label>Name</label>
  <input type="text" name="name1">
</form>


   <script>
    $(document).ready(function(){
        $('#numberPassengerForm').on('click',function(){
            $('#detailfrom').css("display","block");
            $('#numberPassengerForm').css("display","none");
        });
    });
    </script>
 -->
    

     <!-- test
     <div class="card container">
     	<table class="table table-striped table-responsive col-md-12" style="width: 100%;">
     		<thead>
     			<tr>
     			<th>Name</th>
     			
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of Tickets</th>
     			<th>Total Fare</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seat Number</th>

                    
                    <th></th>
     			</tr>		
     		</thead>
     		<tbody>
     			<tr>
     				<td><?php 
     				// $username = $_SESSION['username'];
     				
     				// 	$query = execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE username='{$username}' ");
     				// 	confirm($query);
     				// 	while($row=fetch_array($query))
     				// 	{
         //        $passenger_id = $row['passenger_id'];
     				// 		$passenger_firstname = $row['passenger_firstname'];
     				// 		$passenger_lastname = $row['passenger_lastname'];
     				// 		$passenger_age = $row['passenger_age'];
     				// 		$passenger_email = $row['passenger_email'];
     				// 		$passenger_mobno = $row['passenger_mobno'];
     				// 		$passenger_address = $row['passenger_address'];
     				// 		$passenger_nationality = $row['passenger_nationality'];
     				// 		$passenger_image = $row['passenger_image'];

     				// 		echo $passenger_firstname." ".$passenger_lastname;
     				// 	}
     				 ?>
     				 	
     				 </td>
     				 <td>
                                   <form method="post" class="form-group">
                                   <select name="seats" class="form-control">
                                             <?php 
                                             // $flight_id = $_GET['flight_id'];

                                             // $query1 = execute_query("SELECT * FROM airlines_reservation_system.flights WHERE flight_id={$flight_id} ");
                                             // confirm($query1);
                                             // while($row=fetch_array($query1))
                                             // {
                                             //      $aeroplane_capacity = $row['aeroplane_capacity'];
                                             //      $airfare= $row['airfare'];
                                             //      $discount_id =$row['discount_id'];
                                             //      $flight_date = $row['flight_date'];
                                             //      $departure_time = $row['departure_time'];
                                             //      $arrival_time = $row['arrival_time'];
                                             //      $aeroplane_id = $row['aeroplane_id'];
                                             //      $route_id = $row['route_id'];
                                             //      // ***** Getting Aeroplanes Details****************
                                             //      $query3 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id={$aeroplane_id} ");
                                             //      confirm($query3);
                                             //      while($row3=fetch_array($query3))
                                             //      {
                                             //            $aeroplane_number = $row3['aeroplane_number'];

                                             //           $aeroplane_brand = $row3['aeroplane_brand'];

                                             //      }

                                                  // ************* Getting Route Details *************
                                                  // $query4 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id={$route_id} ");
                                                  // confirm($query4);
                                                  // while($row4=fetch_array($query4))
                                                  // {
                                                  //      $starting_airport = $row4['starting_airport'];
                                                  //      $destination = $row4['destination'];
                                                  // }
                                                  // ************* Getting Discounts Details *************
                                             //      $query2 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id={$discount_id} ");
                                             //      confirm($query2);
                                             //      while($row2 = fetch_array($query2))
                                             //      {
                                             //           $discount_amount = $row2['discount_amount'];
                                             //           $discount_title = $row2['discount_title'];
                                             //      }

                                             //      for($i=1;$i<=$aeroplane_capacity;$i++)
                                             //      {
                                             //           echo "<option value={$i}>$i</option>";
                                             //      }
                                             // }
                                         ?>
                                   </select>
                                   <input type="submit" name="sure" value="OK" class="btn btn-success" id="displayseats">
                              </form>
                          </td>
                          <!-- Calculating Total fare -->
                         
                         <!--    <td><?php 
                          // if(isset($_POST['sure']))
                          // {
                          //     $seats = $_POST['seats'];
                          //     $_SESSION['seats']=$seats;
                          //     $total = $airfare - $discount_amount; 
                          //     $grand_total = $seats * $total;
                          //     $_SESSION['grand_total'] = $grand_total;
                          //     ?> &#8377; <?php echo $grand_total;
                          // }
                          // else
                          // {
                          //     $total = $airfare - $discount_amount; 
                          //     ?> &#8377; <?php echo $total;
                          // }
                              
                           ?></td>
                           <td>
                             -->
                                   
                                   <!-- Test -->

                                   <!-- <form method="post" class="form-group">
                                        <?php 
                                        // if(isset($_SESSION['seats']))
                                        // {

                                        //      for($j=1;$j<=$_SESSION['seats'];$j++)
                                        //      {
                                                  ?> -->
                                         <!--               <select class="form-control" name="seat<?php echo $j; ?>">
                                                            <option value=""></option>
                                                          <?php  for($a=1;$a<10;$a++)
                                                          {
                                                            ?>
                                                          <option value="A<?php echo $a; ?>">A<?php echo $a; ?></option>
                                                          <?php } ?>
                                                           <?php  for($b=1;$b<10;$b++)
                                                          {
                                                            ?>
                                                          <option value="B<?php echo $b; ?>">B<?php echo $b; ?></option>
                                                          <?php } ?>
                                                           <?php  for($c=1;$c<10;$c++)
                                                          {
                                                            ?>
                                                          <option value="C<?php echo $c; ?>">C<?php echo $c; ?></option>
                                                          <?php } ?>
                                                           <?php  for($d=1;$d<10;$d++)
                                                          {
                                                            ?>
                                                          <option value="D<?php echo $d; ?>">D<?php echo $d; ?></option>
                                                          <?php } ?>
                                                       </select> -->
                                                  <?php
                                             // }

                                         ?>
                                        <!--  <input type="submit" name="hunchha" value="Confirm" class="btn btn-warning">
                                   </form> -->
                         <?php 
                    // }
                    //           if(isset($_POST['hunchha']))
                    //           {
                                   
                    //                     $_SESSION['seat1'] = $_POST['seat1'];
                    //                     if(isset($_POST['seat2']))
                    //                     {
                    //                         $_SESSION['seat2'] = $_POST['seat2']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat2'] = '';
                    //                     }

                    //                       if(isset($_POST['seat3']))
                                        
                    //                     {
                    //                         $_SESSION['seat3'] = $_POST['seat3']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat3'] = '';
                    //                     }

                    //                       if(isset($_POST['seat4']))
                    //                     {
                    //                         $_SESSION['seat4'] = $_POST['seat4']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat4'] = '';
                    //                     }

                    //                       if(isset($_POST['seat5']))
                    //                     {
                    //                         $_SESSION['seat5'] = $_POST['seat5']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat5'] = '';
                    //                     }

                    //                       if(isset($_POST['seat6']))
                    //                     {
                    //                         $_SESSION['seat6'] = $_POST['seat6']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat6'] = '';
                    //                     }

                    //                       if(isset($_POST['seat7']))
                    //                     {
                    //                         $_SESSION['seat7'] = $_POST['seat7']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat7'] = '';
                    //                     }

                    //                       if(isset($_POST['seat8']))
                    //                     {
                    //                         $_SESSION['seat8'] = $_POST['seat8']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat8'] = '';
                    //                     }

                    //                       if(isset($_POST['seat9']))
                    //                     {
                    //                         $_SESSION['seat9'] = $_POST['seat9']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat9'] = '';
                    //                     }

                    //                       if(isset($_POST['seat10']))
                    //                     {
                    //                         $_SESSION['seat10'] = $_POST['seat10']; 
                    //                     }
                    //                     else
                    //                     {
                    //                       $_SESSION['seat10'] = '';
                    //                     }

                                        
                                   
                    //           }
                          ?>

                                   <!-- Test -->
             <!--               </td>
                           
     				 <td> <button class="btn btn-success" id="displayform">Confirm</button> </td>
     			</tr>
     		</tbody>
     	</table>
 -->


     	<!-- <hr> -->
     	<!-- Payment Form -->
     	<div id="showform" style="display: block; text-align: center; display: none;"><h3 class="text-center text-primary"><i class="far fa-credit-card"></i> Payment</h3>
     	<form class="form-group" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: left;" method="post" target="_blank" action="tickets_pdf.php">
     		
     		<input type="username" name="username" class="form-control" placeholder="Dhukuti Username">
     		<input type="password" name="password" class="form-control" placeholder="Dhukuti Password">
     		<input type="numbre" name="airfare_total" class="form-control" placeholder="<?php echo $grand_total; ?>" readonly value="<?php echo $_SESSION['grand_total']; ?>">
     		<input type="hidden" name="passenger_firstname" value="<?php echo $passenger_firstname; ?>">
     		<input type="hidden" name="passenger_lastname" value="<?php echo $passenger_lastname; ?>">	

     		<input type="hidden" name="passenger_image" value="<img src='images/passengers/<?php echo $passenger_image; ?>'>">

          <input type="hidden" name="passenger_id" value="<?php echo $passenger_id; ?>">
        <input type="hidden" name="flight_id" value="<?php echo $flight_id; ?>">

     		<input type="hidden" name="passenger_nationality" value="<?php echo $passenger_nationality; ?>">
     		<input type="hidden" name="passenger_address" value="<?php echo $passenger_address; ?>">
     		<input type="hidden" name="passenger_mobno" value="<?php echo $passenger_mobno; ?>">
     		<input type="hidden" name="passenger_email" value="<?php echo $passenger_email; ?>">
     		<input type="hidden" name="starting_airport" value="<?php echo $starting_airport; ?>">
     		<input type="hidden" name="destination" value="<?php echo $destination; ?>">
     		<input type="hidden" name="aeroplane_number" value="<?php echo $aeroplane_number; ?>">
     		<input type="hidden" name="aeroplane_brand" value="<?php echo $aeroplane_brand; ?>">
     		<input type="hidden" name="flight_date" value="<?php echo $flight_date; ?>">
     		<input type="hidden" name="departure_time" value="<?php echo $departure_time; ?>">
     		<input type="hidden" name="arrival_time" value="<?php echo $arrival_time; ?>">
               <input type="hidden" name="noofseats" value="<?php echo $_SESSION['seats']; ?>">
               <input type="hidden" name="airfare" value="<?php echo $airfare; ?>">
                <input type="hidden" name="discount" value="<?php echo $discount_amount; ?>">
               <input type="hidden" name="seat1" value="<?php echo $_SESSION['seat1'] ?>">
                <input type="hidden" name="seat2" value="<?php echo $_SESSION['seat2'] ?>">
                <input type="hidden" name="seat3" value="<?php echo $_SESSION['seat3'] ?>">
                <input type="hidden" name="seat4" value="<?php echo $_SESSION['seat4'] ?>">
                <input type="hidden" name="seat5" value="<?php echo $_SESSION['seat5'] ?>">
                <input type="hidden" name="seat6" value="<?php echo $_SESSION['seat6'] ?>">
                <input type="hidden" name="seat7" value="<?php echo $_SESSION['seat7'] ?>">
                <input type="hidden" name="seat8" value="<?php echo $_SESSION['seat8'] ?>">
                <input type="hidden" name="seat9" value="<?php echo $_SESSION['seat9'] ?>">
                <input type="hidden" name="seat10" value="<?php echo $_SESSION['seat10'] ?>"> 
     		<br>
     		<div class="text-center"><input type="submit" name="pay" value="Pay" class="btn btn-warning"></div>
     	</form>
     	</div>
     </div>


     <script>
    $(document).ready(function(){
        $('#displayform').on('click',function(){
            $('#showform').show();
        });
    });
  $(document).ready(function(){
        $('#showseats2').on('click',function(){
            $('#seatsform2').show();
            $('#showseats3').show();
        });
    });
   $(document).ready(function(){
        $('#showseats3').on('click',function(){
            $('#seatsform3').show();
             $('#showseats4').show();
        });
    });

    $(document).ready(function(){
        $('#showseats4').on('click',function(){
            $('#seatsform4').show();
             $('#showseats5').show();
        });
    });

       $(document).ready(function(){
        $('#showseats5').on('click',function(){
            $('#seatsform5').show();
             $('#showseats6').show();
        });
    });
        $(document).ready(function(){
        $('#showseats6').on('click',function(){
            $('#seatsform6').show();
             $('#showseats7').show();
        });
    });
         $(document).ready(function(){
        $('#showseats7').on('click',function(){
            $('#seatsform7').show();
             $('#showseats8').show();
        });
    });
  
   $(document).ready(function(){
        $('#showseats8').on('click',function(){
            $('#seatsform8').show();
             $('#showseats9').show();
        });
    });
   $(document).ready(function(){
        $('#showseats9').on('click',function(){
            $('#seatsform9').show();
             $('#showseats10').show();
        });
    });
    $(document).ready(function(){
        $('#showseats10').on('click',function(){
            $('#seatsform10').show();
             
        });
    });
  
</script>