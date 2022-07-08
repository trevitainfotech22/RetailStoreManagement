<?php 
session_start();
include_once ('./Database/mydb.php');
$result = mysqli_query($connection,"SELECT * FROM userdetails ORDER BY role ASC");

if (!isset($_SESSION['userid'])) {
    header("location.login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!----======== CSS ======== -->
        <link rel="stylesheet" href="./css/mystyle.css">

        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title> Retail system </title> 
    </head>
    <body>
        <?php
        include './admin/asidebar.php';
        ?>

        <section class="home">
            <div class="text"> Welcome ...... </div>

      

           
            <!-- main content start-->
            
                <div class="main">
                   
                        &nbsp;&nbsp;&nbsp;<h2 class="title1">ADMIN</h2>
                        <br>
                        &nbsp;&nbsp;&nbsp;<button><a href="addadmin.php" style="font-size: 20px">
                                Add Admin &raquo;</a></button>

            <br><br>
            <div align="center">
                <table class="table"> 
                    <thead>
                        <th>SR.NO</th>
                        <th>NAME</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>ACTION</th>
                    </thead>
                    <tbody>
                    <?php $counter=1;
                                    
                                    while($res = mysqli_fetch_array($result)){
                                        ?>
                                    <tr>
                                    <?php if($res['role']==1){ 
                                        echo "<td>". $counter."</td>";
                                        echo "<td>".$res['name']."</td>";
                                        echo "<td>". $res['username']."</td>";
                                        echo "<td>".$res['password']."</td>";
                                        echo "<td>";
                                        echo "<button>";
                                        echo "<a href='editadmin.php'>";
                                        echo 'Edit';
                                        echo "</a>";        
                                        echo "</button>";
                                        echo " <button>";
                                        echo "<a href=''>";
                                        echo 'Delete';
                                        echo " </a>";                   
                                        echo " </button>";     
                                         echo "</td>";
                                        }?>
                            </tr> <?php $counter++; } ?>
          </tbody>
                   
                </div>
            </div>
        </table>


    </section>

    <script src="./js/myscript.js"></script>


</body>
</html>