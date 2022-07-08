<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>
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
                    <span class="profession"> SalesManager </span>
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
                        <a href="salesmanagerdash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                   
                    <li class="nav-link">
                        <a href="smvisited.php">
                            <i class='bx bx-food-menu icon' ></i>
                            <span class="text nav-text"> Visited Person </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="smstock.php">
                            <i class='bx bx-candles icon'></i>
                            <span class="text nav-text"> Stock </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="smpurchase.php">
                            <i class='bx bx-purchase-tag icon' ></i>
                            <span class="text nav-text"> Purchase-List </span>
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
