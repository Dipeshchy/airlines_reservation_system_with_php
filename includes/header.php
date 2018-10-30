
    <?php 
            if(isset($_SESSION['username']) && $_SESSION['username']!='')
            {
               $passenger_username = $_SESSION['username'];

             ?>
                  <nav class="nav justify-content-end">
                        <li class="dropdown">

                      <?php 
                        show_user_image_in_home();
                       ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <!-- <i class="fa fa-user"></i> -->
                        <?php echo $_SESSION['username']; ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li> 
                </nav>

           <?php     
            }

             else
             {

            ?>
            <nav class="nav justify-content-end">
                <li class="nav-item">
                <a class="nav-link" href="passenger_login.php"><i class="fa fa-user"> Login </i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="passenger_signup.php"><i class="fa fa-user-plus"> Sign Up</i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin_login.php"><i class="fa fa-user-secret"> Admin</i></a>
            </li>
            </nav>

    <?php

    }
         ?>
        <nav class="nav navbar-expand-sm bg-light-blue navbar-light">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="flights.php">Flights</a>
            </li>
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Support</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="faqs.php">FAQS</a>
            <a class="dropdown-item" href="#contact">Contact number</a>
            <a class="dropdown-item" href="#contact">Address</a>
            </div>
            </li>
          <!--   <li class="nav-item">
            <a class="nav-link" id="support">Support</a>
            <div id="sub-support">
                <li><a href="#">FAQS</a></li>
            <li><a href="#">Contact number</a></li>
            <li><a href="#">Address</a></li>
            
            </div>
            </li> -->
             <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Dropdown</a>
            <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
            </div>
            </li>
        </nav>