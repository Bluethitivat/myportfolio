<?php
session_start();
include "conn.php"
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<div class="header-grid" id="myphoto">
    <button class="btn" onclick="one()">1</button>
    <button class="btn active" onclick="two()">2</button>
    <button class="btn" onclick="three()">3</button>
</div>

<div class="row"> 
    <div class="column">
    <img src="img/photo4.jpg" style="width:100%">
    <img src="img/photo6.jpg" style="width:100%">
    </div>
    <div class="column">
        <img src="img/photo1.jpg" style="width:100%">
        <img src="img/Untitled-1.jpg" style="width:100%">
    </div>  
    <div class="column">
        <img src="img/photo2.jpg" style="width:100%">
        <img src="img/photo6.jpg" style="width:100%">
    </div>
</div>
<script>
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");
          
          // Declare a loop variable
          var i;
          
          // Full-width images
          function one() {
              for (i = 0; i < elements.length; i++) {
              elements[i].style.msFlex = "100%";  // IE10
              elements[i].style.flex = "100%";
            }
          }
          
          // Two images side by side
          function two() {
            for (i = 0; i < elements.length; i++) {
              elements[i].style.msFlex = "50%";  // IE10
              elements[i].style.flex = "50%";
            }
          }
          
          // three images side by side
          function three() {
            for (i = 0; i < elements.length; i++) {
              elements[i].style.msFlex = "30%";  // IE10
              elements[i].style.flex = "30%";
            }
          }
          
          // Add active class to the current button (highlight it)
          var header = document.getElementById("myphoto");
          var btns = header.getElementsByClassName("btn");
          for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
              var current = document.getElementsByClassName("active");
              current[0].className = current[0].className.replace(" active", "");
              this.className += " active";
            });
          }
</script>