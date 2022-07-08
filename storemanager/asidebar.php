
<nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./images/user.png" alt="user icon">
                </span>

                <div class="text logo-text">
                    <span class="name"> 
                    <?php
                    
                    echo "<span>".$_SESSION['username']. "</span>";
                    ?>
                    </span>
                    <span class="profession"> Store-Manager </span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Search...">
                </li>

                <ul class="menu-links">
                      <li class="nav-link">
                        <a href="storedash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-link">
                        <a href="stsalesman.php">
                            <i class='bx bx-male icon' ></i>
                            <span class="text nav-text"> Salesman </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="sttotalorder.php">
                          <i class='bx bxs-hourglass-bottom icon'></i>
                            <span class="text nav-text"> Total Order </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="stdelivery.php">
                          <i class='bx bxs-shopping-bags icon'></i>
                            <span class="text nav-text">Delivery  </span>
                        </a>
                    </li>
                    
                      <li class="nav-link">
                        <a href="stdateorder.php">
                          <i class='bx bxs-calendar icon'></i>
                            <span class="text nav-text">Date-wise Order </span>
                        </a>
                    </li>

            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="login.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>
