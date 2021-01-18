<?php

include "logic.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>covid tracker</title>
    <!-- latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/5e65b4ddb7.js" crossorigin="anonymous"></script>
        <style type="text/css">
  table { border:solid 1px #000; }
  td    { border:style 3px red; }

 
</style>
      
</head>
<body>
 <div class="container-fluid bg-light p-5 text-center my-3">
 <h1> Covid -19 Tracker</h1>
 <h5 class="text-muted"> A project to keep track of all COVID-19 cases around the world.</h5>
 </div>  
 <div class="container my-5" >
 <center>
   <!-- <div class="online"> -->
      <div class="col-4  text-warning" style="width: 100px; height: 100px; 
border: solid 1px #ccc; display: inline-block;">
        <h5>Confirmed</h5>
        <?php echo $total_confirmed; ?>
    <!-- </div> -->
    </div>
    <!-- <div class="online"> -->
 <div class="col-4 text-success" style="width: 100px; height: 100px; 
border: solid 1px #ccc; display: inline-block;">
      <h5>Recovered</h5>
      <?php echo $total_recovered; ?>
 <!-- </div> -->
 </div>
 <!-- <div class="online"> -->
 <div class="col-4  text-danger" style="width: 100px; height: 100px; 
border: solid 1px #ccc; display: inline-block;">
      <h5>Deceased</h5>
      <?php echo $total_deaths; ?>
 <!-- </div> -->
 </div>
 </center>
</div>

<div class="container bg-light p-3 my-3 text-center">
<h5 class="total-info">"Prevention is better than cure."</h5>
<p class="text-muted">Stay indoor stay safe.</p>
</div>

 <div class="container-fluid"> 
 <div class="table-responsive">
 <table class="table">
 <!-- <thead class="thead-dark"> -->
 <!-- <thead class="black white-text"> -->
 <thead bgcolor="lightblue">
     <tr>
         <th scope="col">Countries</th>
         <th scope="col">Confirmed</th>
         <th scope="col">Recovered</th>
         <th scope="col">Deceased</th>
        </tr>
</thead>
        <tbody>
        <?php
        foreach($data as $key => $value){
            $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
        ?>
           <tr>
           <th><?php echo $key; ?></th>
           <td>
         <?php echo $value[$days_count]['confirmed']; ?>
         <?php if($increase !=0){ ?>
         <small class="text-danger p1-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>
         <?php }?>
         </td>
         <td>
         <?php echo $value[$days_count]['recovered']; ?>
         </td>
         <td>
         <?php echo $value[$days_count]['deaths']; ?>
         </td>
           </tr>

        <?php } ?>
        </tbody>
        </table> 
     </div> 
     </div>  
</body>
</html>