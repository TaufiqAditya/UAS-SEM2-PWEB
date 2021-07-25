<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
    <head>
  </head>
  <body>
      <br>
      <div id ="footer">
  <div class="text-muted">Copyright 2000018201&copy; Taufiq Aditya Putra 2021</div>
      </div>
    <div id="container">
      <nav class="nav nav-tabs justify-content">
        <div id="logo">
        </div>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="dropdown" onmouseover="hover(this);" onmouseout="out(this);"><a href="#">More &nbsp;<i class="fa fa-caret-down"></i></a>
            <div class="dd">
              <div id="up_arrow"></div>
            <ul>  
                <li><a href="part1.php">Part 1</a></li>
                <li><a href="part2.php">Part 2</a></li>
            </ul>
            </div>
          </li>
          <li><a href="profil.php">Profil</a></li>
          <li><a class="nav-link active" href="logout.php">Logout </i> </a>
        </ul>
      </nav>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div id ="isi">
         TEST 1 !
    </div>
  </body>
</html>