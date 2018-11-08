<div class="well">
                    
                    <div class="input-group">
                       
                       <form action="http://localhost/airlines/flight_search_results.php" method="post" class="col-lg-12 card mb-2">
                        <div class="text-center"><h3 class="text-success"><i class="fas fa-search"></i> Search <i class="fas fa-plane"></i></h3></div>
                        <div class="row">
                          <div class='col-lg-6'>
                       	<label class="text-primary">
                       		From
                       	</label>
                        <br>
                       	<select name="starting_airort">

                          <?php 
                            $query= execute_query("SELECT * FROM airlines_reservation_system.routes");
                            confirm($query);
                            while($row=fetch_array($query))
                            {
                              $starting_location = $row['starting_airport'];
                              echo "<option value='{$starting_airport}'>{$starting_location}</option>";
                            }

                           ?>
                       		 
                       		
                       	</select>
                       </div>

                        <div class='col-lg-6'>

                        <label class="text-primary">
                          To
                        </label>
                        <br>
                        <select name="destination">

                          <?php 
                            $query= execute_query("SELECT * FROM airlines_reservation_system.routes");
                            confirm($query);
                            while($row=fetch_array($query))
                            {
                              $destination = $row['destination'];
                              echo "<option value='$destination'>{$destination}</option>";
                            }

                           ?>
                           
                          
                        </select>


                      </div>
                        </div>
                       		<br>
                          <div class="text-center">
                            <label>Date : </label>
                            <input type="date" name="search_date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" max="2018-12-20">
                          </div>
                          <br>
                        <span class="input-group-btn" style="margin: auto;">
                            <button class="btn btn-default btn-success" type="submit" name='flightsearch'>
                               <i class="fas fa-search"></i> Search</span>
                        </button>
                        </span>
                        </form> <!-- search form ends -->
                    </div>
                    <!-- /.input-group -->
                </div>