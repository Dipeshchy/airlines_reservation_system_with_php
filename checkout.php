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
 <body>
     <div class="container">
        
        <?php 

            include('includes/header.php');

         ?>
            
     </div>
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
     				$username = $_SESSION['username'];
     				
     					$query = execute_query("SELECT * FROM airlines_reservation_system.passengers WHERE username='{$username}' ");
     					confirm($query);
     					while($row=fetch_array($query))
     					{
     						$passenger_firstname = $row['passenger_firstname'];
     						$passenger_lastname = $row['passenger_lastname'];
     						$passenger_age = $row['passenger_age'];
     						$passenger_email = $row['passenger_email'];
     						$passenger_mobno = $row['passenger_mobno'];
     						$passenger_address = $row['passenger_address'];
     						$passenger_nationality = $row['passenger_nationality'];
     						$passenger_image = $row['passenger_image'];

     						echo $passenger_firstname." ".$passenger_lastname;
     					}
     				 ?>
     				 	
     				 </td>
     				 <td>
                                   <form method="post" class="form-group">
                                   <select name="seats" class="form-control">
                                             <?php 
                                             $flight_id = $_GET['flight_id'];

                                             $query1 = execute_query("SELECT * FROM airlines_reservation_system.flights WHERE flight_id={$flight_id} ");
                                             confirm($query1);
                                             while($row=fetch_array($query1))
                                             {
                                                  $aeroplane_capacity = $row['aeroplane_capacity'];
                                                  $airfare= $row['airfare'];
                                                  $discount_id =$row['discount_id'];
                                                  $flight_date = $row['flight_date'];
                                                  $departure_time = $row['departure_time'];
                                                  $arrival_time = $row['arrival_time'];
                                                  $aeroplane_id = $row['aeroplane_id'];
                                                  $route_id = $row['route_id'];
                                                  // ***** Getting Aeroplanes Details****************
                                                  $query3 = execute_query("SELECT * FROM airlines_reservation_system.aeroplanes WHERE aeroplane_id={$aeroplane_id} ");
                                                  confirm($query3);
                                                  while($row3=fetch_array($query3))
                                                  {
                                                        $aeroplane_number = $row3['aeroplane_number'];

                                                       $aeroplane_brand = $row3['aeroplane_brand'];

                                                  }

                                                  // ************* Getting Route Details *************
                                                  $query4 = execute_query("SELECT * FROM airlines_reservation_system.routes WHERE route_id={$route_id} ");
                                                  confirm($query4);
                                                  while($row4=fetch_array($query4))
                                                  {
                                                       $starting_airport = $row4['starting_airport'];
                                                       $destination = $row4['destination'];
                                                  }
                                                  // ************* Getting Discounts Details *************
                                                  $query2 = execute_query("SELECT * FROM airlines_reservation_system.discounts WHERE discount_id={$discount_id} ");
                                                  confirm($query2);
                                                  while($row2 = fetch_array($query2))
                                                  {
                                                       $discount_amount = $row2['discount_amount'];
                                                       $discount_title = $row2['discount_title'];
                                                  }

                                                  for($i=1;$i<=$aeroplane_capacity;$i++)
                                                  {
                                                       echo "<option value={$i}>$i</option>";
                                                  }
                                             }
                                         ?>
                                   </select>
                                   <input type="submit" name="sure" value="OK" class="btn btn-success" id="displayseats">
                              </form>
                          </td>
                          <!-- Calculating Total fare -->
                         
                            <td><?php 
                          if(isset($_POST['sure']))
                          {
                              $seats = $_POST['seats'];
                              $_SESSION['seats']=$seats;
                              $total = $airfare - $discount_amount; 
                              $grand_total = $seats * $total;
                              $_SESSION['grand_total'] = $grand_total;
                              ?> &#8377; <?php echo $grand_total;
                          }
                          else
                          {
                              $total = $airfare - $discount_amount; 
                              ?> &#8377; <?php echo $total;
                          }
                              
                           ?></td>
                           <td>
                            
                              <table>
                                   <tr>
                                        <td>
                                             
                                             <form method="post">
                                                  <span class="text-info">Seat 1</span>

                                             <select name="seatside1">
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                             </select>


                                             <select name="seatnumber1">
                                             <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                             ?>
                                             </select>
                                             <input type="submit" name="seat1" value="Confirm" class="btn btn-warning">

                                             </form>
                                             <?php 
                                                  if(isset($_POST['seat1']))
                                                  {
                                                       $seatside1 = $_POST['seatside1'];
                                                       $seatnumber1 = $_POST['seatnumber1'];
                                                       $_SESSION['seatselected1'] =  $seatside1.$seatnumber1;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                             <br>
                                          <button id="showseats2" class="btn btn-success">More</button></span> 
                                       
                                   </tr>
                                   <tr>
                                        <td>

                                   <form id="seatsform2" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 2</span>                         
                                     <select name="seatside2">
                                        
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber2">
                                       
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat2" value="Confirm" class="btn btn-warning">
                                      
                                  </form>

                                         <?php 
                                                  if(isset($_POST['seat2']))
                                                  {
                                                       $seatside2 = $_POST['seatside2'];
                                                       $seatnumber2 = $_POST['seatnumber2'];
                                                       $_SESSION['seatselected2'] =  $seatside2.$seatnumber2;

                                                  }
                                              ?>

                                        </td>
                                        <td>
                                             <br>
                                             <button id="showseats3" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                   <tr>
                                        <td>

                                   <form id="seatsform3" style="display: none;" method="post">  
                                   <span class="text-info">Seat 3</span>                        
                                     <select name="seatside3">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber3">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                    
                                       <input type="submit" name="seat3" value="Confirm" class="btn btn-warning">
                                  </form>
                                   <?php 
                                                  if(isset($_POST['seat3']))
                                                  {
                                                       $seatside3 = $_POST['seatside3'];
                                                       $seatnumber3 = $_POST['seatnumber3'];
                                                     $_SESSION['seatselected3'] =  $seatside3.$seatnumber3;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats4" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>

                                   <!-- Forth -->
                                   <tr>
                                        <td>

                                   <form id="seatsform4" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 4</span>                         
                                     <select name="seatside4">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber4">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                    
                                       <input type="submit" name="seat4" value="Confirm" class="btn btn-warning">
                                  </form>
                                   <?php 
                                                  if(isset($_POST['seat4']))
                                                  {
                                                       $seatside4 = $_POST['seatside4'];
                                                       $seatnumber4 = $_POST['seatnumber4'];
                                                       $seatselected4 =  $seatside4.$seatnumber4;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats5" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                   <!-- fifth -->
                                         <tr>
                                        <td>

                                   <form id="seatsform5" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 5</span>                         
                                     <select name="seatside5">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber5">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat5" value="Confirm" class="btn btn-warning">
                                      
                                  </form>
                                   <?php 
                                                  if(isset($_POST['seat5']))
                                                  {
                                                       $seatside5 = $_POST['seatside5'];
                                                       $seatnumber5 = $_POST['seatnumber5'];
                                                       $seatselected5 =  $seatside5.$seatnumber5;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats6" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                  
                                  <!-- sixth -->
                                             <tr>
                                        <td>

                                   <form id="seatsform6" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 6</span>                         
                                     <select name="seatside6">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber6">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat6" value="Confirm" class="btn btn-warning">
                                      
                                  </form>
                                      <?php 
                                                  if(isset($_POST['seat6']))
                                                  {
                                                       $seatside6 = $_POST['seatside6'];
                                                       $seatnumber6 = $_POST['seatnumber6'];
                                                       $seatselected6 =  $seatside6.$seatnumber6;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats7" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                   <!-- seventh -->
                                              <tr>
                                        <td>

                                   <form id="seatsform7" style="display: none;" method="post">
                                   <span class="text-info">Seat 7</span>                          
                                     <select name="seatside7">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber7">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat7" value="Confirm" class="btn btn-warning">
                                      
                                  </form>
                                     <?php 
                                                  if(isset($_POST['seat7']))
                                                  {
                                                       $seatside7 = $_POST['seatside7'];
                                                       $seatnumber7 = $_POST['seatnumber7'];
                                                       $seatselected7 =  $seatside7.$seatnumber7;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats8" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                   <!-- eight -->
                                              <tr>
                                        <td>

                                   <form id="seatsform8" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 8</span>                         
                                     <select name="seatside8">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber8">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat8" value="Confirm" class="btn btn-warning">
                                      
                                  </form>
                                    <?php 
                                                  if(isset($_POST['seat8']))
                                                  {
                                                       $seatside8 = $_POST['seatside8'];
                                                       $seatnumber8 = $_POST['seatnumber8'];
                                                       $seatselected8 =  $seatside8.$seatnumber8;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats9" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                   <!-- ninth -->
                                              <tr>
                                        <td>

                                   <form id="seatsform9" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 9</span>                         
                                     <select name="seatside9">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber9">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat9" value="Confirm" class="btn btn-warning">
                                      
                                  </form>
                                    <?php 
                                                  if(isset($_POST['seat9']))
                                                  {
                                                       $seatside9 = $_POST['seatside9'];
                                                       $seatnumber9 = $_POST['seatnumber9'];
                                                       $seatselected9 =  $seatside9.$seatnumber9;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats10" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                                   <!-- tenth -->
                                              <tr>
                                        <td>

                                   <form id="seatsform10" style="display: none;" method="post"> 
                                   <span class="text-info">Seat 10</span>                         
                                     <select name="seatside10">
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                     </select>
                                
                           
                                   <select name="seatnumber10">
                                          <?php 
                                             for($j=1;$j<=20;$j++)
                                             {
                                                  echo "<option value='{$j}'>$j</option>";
                                             }
                                           ?>
                                     </select>
                                     <input type="submit" name="seat10" value="Confirm" class="btn btn-warning">
                                      
                                  </form>
                                    <?php 
                                                  if(isset($_POST['seat10']))
                                                  {
                                                       $seatside10 = $_POST['seatside10'];
                                                       $seatnumber10 = $_POST['seatnumber10'];
                                                       $seatselected10 =  $seatside10.$seatnumber10;

                                                  }
                                              ?>
                                        </td>
                                        <td>
                                               <br>
                                              <button id="showseats11" class="btn btn-success" style="display: none;">More</button>
                                        </td>
                                   </tr>
                              </table>     
                      
                                   
                                   <!-- Test -->


                         

                                   <!-- Test -->
                           </td>
                           
     				 <td> <button class="btn btn-success" id="displayform">Confirm</button> </td>
     			</tr>
     		</tbody>
     	</table>
     	<hr>
     	<!-- Payment Form -->
     	<div id="showform" style="display: block; text-align: center; display: none;"><h3 class="text-center text-primary"><i class="far fa-credit-card"></i> Payment</h3>
     	<form class="form-group" style="display: inline-block; margin-left: auto; margin-right: auto; text-align: left;" method="post" target="_blank" action="tickets_pdf.php">
     		
     		<input type="username" name="username" class="form-control" placeholder="Dhukuti Username">
     		<input type="password" name="password" class="form-control" placeholder="Dhukuti Password">
     		<input type="numbre" name="airfare_total" class="form-control" placeholder="<?php echo $grand_total; ?>" readonly value="<?php echo $_SESSION['grand_total']; ?>">
     		<input type="hidden" name="passenger_firstname" value="<?php echo $passenger_firstname; ?>">
     		<input type="hidden" name="passenger_lastname" value="<?php echo $passenger_lastname; ?>">	
     		<input type="hidden" name="passenger_image" value="<?php echo $passenger_image; ?>">
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
                <input type="hidden" name="seatselected1" value="<?php echo $_SESSION['seatselected1'] ?>">
                <input type="hidden" name="seatselected2" value="<?php echo $_SESSION['seatselected2'] ?>">
                <input type="hidden" name="seatselected3" value="<?php echo $_SESSION['seatselected3'] ?>">
                <input type="hidden" name="seatselected4" value="<?php echo $_SESSION['seatselected4'] ?>">
                <input type="hidden" name="seatselected5" value="<?php echo $_SESSION['seatselected5'] ?>">
                <input type="hidden" name="seatselected6" value="<?php echo $_SESSION['seatselected6'] ?>">
                <input type="hidden" name="seatselected7" value="<?php echo $_SESSION['seatselected7'] ?>">
                <input type="hidden" name="seatselected8" value="<?php echo $_SESSION['seatselected8'] ?>">
                <input type="hidden" name="seatselected9" value="<?php echo $_SESSION['seatselected9'] ?>">
                <input type="hidden" name="seatselected10" value="<?php echo $_SESSION['seatselected10'] ?>">
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