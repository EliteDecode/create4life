<?php
  include('../includes/connect.php');

  $sql = 'SELECT * FROM payment';
  $result = mysqli_query($conn, $sql);

  if ($result) {
    if($row = mysqli_fetch_assoc($result)){

      $method = $row['Method'];
      $address = $row['Addres'];

      $show = "
      <h6>Payment Method</h6>
      <h2>$method</h2>
      &nbsp
      <h6>Wallet Address</h6>
      <div class='text-center ' style='margin-top:0%; padding:3%'>
            <input type='text' disabled value='$address' class='form-control' id='input' style='text-align:center; font-size:17px;;'/>
        &nbsp<span style='font-size:12px'>copy to clipboard &nbsp</span><i class='fa fa-clipboard' style='cursor:pointer' onclick='copy(this)'></i></div>   
     
      
      ";

     
    }else{
      $show = "<h6>No Payment Method Set</h6>";
    }

    echo $show;



   
  }