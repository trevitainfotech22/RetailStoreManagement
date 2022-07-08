
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
                    <span class="profession">Sales-Man</span>
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
                        <a href="salesdash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li><!-- comment -->
                    
                    
                    <li class="nav-link">
                        <a href="splaceorder.php">
                            <i class='bx bx-cart icon' ></i>
                            <span class="text nav-text">Place-Order</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="sorderlist.php">
                            <i class='bx bx-list-ol icon' ></i>
                            <span class="text nav-text"> Order-List </span>
                        </a>
                    </li>
                 
                    <li class="nav-link">
                        <a href="stodayorder.php">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text"> Today's Order </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="sdatedelivery.php">
                            <i class='bx bxs-calendar icon' ></i>
                            <span class="text nav-text"> Date-Wise Order </span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="svisited.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Visited Place </span>
                        </a>
                    </li>
                    
                     <li class="nav-link">
                        <a href="svendor.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text"> Vendor </span>
                        </a>
                    </li>
                    
                     <li class="nav-link">
                        <a href="sremainorder.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text"> Remaining-Order </span>
                        </a>
                    </li>


                </ul>
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
