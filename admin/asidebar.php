
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
                    
                    <span class="profession"> Admin </span>
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
                        <a href="admindash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="user.php">
                            <i class='bx bx-user icon' ></i>
                            <span class="text nav-text"> User </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="product.php">
                            <i class='bx bxl-product-hunt icon'></i>
                            <span class="text nav-text"> Products </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="vendor.php">
                            <i class='bx bx-pie-chart-alt icon' ></i>
                            <span class="text nav-text"> Vendor </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="torder.php">
                            <i class='bx bx-cart icon' ></i>
                            <span class="text nav-text"> Today's Order </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="tdelivery.php">
                            <i class='bx bx-package icon' ></i>
                            <span class="text nav-text"> Today's Delivery </span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="visited.php">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Visited Place </span>
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
