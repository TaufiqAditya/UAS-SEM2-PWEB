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
                  <table border="1" cellspacing="0" cellpadding="10" width="500px">
                    <tr>
                      <th bgcolor ="yellow" colspan="3" style="font-size: 15px;">DATA DIRI</th>
                    </tr>
                    <tr>
                      <td rowspan="7" width="30px">
                          <img src="p.GIF" width="200px"></a>
                      </td>
                      <td>Nama</td>
                      <td>Taufiq Aditya Putra</td>
                    </tr>
                    <tr>
                      <td>Tempat, Tanggal Lahir</td>
                      <td>:Sleman, 10 Juli 2001</td>
                    </tr>
                    <tr>
                      <td>Nomor Hp</td>
                      <td>:085713667446</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>:taufiqadityaputra@gmail.com</td>
                    </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td>:Teknik Informatika</td>
                    </tr>
                    <tr>
                      <td>Fakultas</td>
                      <td>:Teknik Industri</td>
                    </tr>
                    <tr>
                      <td>Universitas</td>
                      <td>:Ahmad Dahlan</td>
                    </tr>
                  </table>
        </div>
  </body>
</html>