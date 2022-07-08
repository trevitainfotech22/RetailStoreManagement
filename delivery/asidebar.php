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
                    <span class="profession">DELIVERY-BOY</span>
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
                        <a href="deliverydash.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li><!-- comment -->
                 
                 
                    <li class="nav-link">
                        <a href="dtodayorder.php">
                            <i class='bx bx-heart icon' ></i>
                            <span class="text nav-text"> Today's Order </span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="ddateorder.php">
                            <i class='bx bxs-calendar icon' ></i>
                            <span class="text nav-text"> Date-Wise Order </span>
                        </a>
                    </li>
                    
                    <li class="nav-link">
                        <a href="dreturnorder.php">
                           <i class='bx bx-arrow-back icon'></i>
                            <span class="text nav-text">Return Order </span>
                        </a>
                    </li>
                    
                     <li class="nav-link">
                        <a href="dtodayreturn.php">
                           <i class='bx bxs-message-dots icon'></i>
                            <span class="text nav-text"> Today's Return </span>
                        </a>
                    </li>
                    
                     <li class="nav-link">
                        <a href="ddatereturn.php">
                      <i class='bx bxs-calendar-event icon'></i>
                            <span class="text nav-text"> Date-Wise Return </span>
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
