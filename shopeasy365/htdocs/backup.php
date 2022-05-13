<?php
session_start();
$s_temp=$_SESSION['special_id'];
mkdir("img/{$s_temp}test");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Shop Name</title>
<link rel="stylesheet" href="css/menus.css">
</head>
<body>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="admin_home.php">Home</a>
    <a href="monthly_backup.php">Backup Monthly</a>
    <a href="yearly_backup.php">Backup Yearly</a>
    <a href="datewise_backup.php">Backup Datewise</a>
    <a href="all_backup.php">Backup All</a>
  </div>
  <script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
  </script>
</body>
</html>
