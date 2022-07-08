
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
                    <span class="profession"> Kitchen </span>
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
                        <a href="kitchendash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-link">
                        <a href="ktodayorder.php">
                            <i class='bx bx-food-menu icon' ></i>
                            <span class="text nav-text"> Today's Order </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="kdateorder.php">
                            <i class='bx bxs-calendar icon'></i>
                            <span class="text nav-text"> Date-Wise Order </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="kdelivery.php">
                            <i class='bx bx-purchase-tag icon' ></i>
                            <span class="text nav-text"> Delivery Boy </span>
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
