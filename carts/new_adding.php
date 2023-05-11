<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="./jquery-3.6.3.min.js"></script>
    <script src="./popper.min.js"></script>
    <script src="./bootstrap.js"></script>
    <link rel="stylesheet" href="../bb1.css"/>
    <!-- لوجو الموقع-->
    <?php
    include('icon.php');
    ?>
    <!-- اسم الصفحة -->
  <title> التسجيل للتبني </title>
</head>
<body>
    <!-- فورم لرفع البيانات لقاعدة البيانات  -->
  <div class="row">
    <center   style="text-align:left;">
      <form method="post" action="" enctype="multipart/form-data">
        <div class="row" style="text-align:left;background-color:white;">
          <div class="col-12"><label for="h_name">Husbond_name</label><br><input type="text" name="h_name" placeholder="name"></div>
          
          <div class="col-12"><label for="w_name">Wife_name</label><br><input type="text" name="w_name" placeholder="name"></div>
          <div class="col-12"><label for="place">Your place</label><br><input type="text" name="place" placeholder="place"></div>
          <div class="col-12"><label for="place">Your number</label><br><input type="number" name="number" placeholder="Your number"></div>
          
          <div class="col-12"><input type="checkbox" name="choice"> <span style="font-weight:bold;font-size:20px;"> هل تستطيع التبني؟  </span></div>
          <div class="col-12"><input type="submit" name="submit" value="submit">
          <div class="col-12">
            <a href="../admin_page.php"> go to main page </a>
          </div>
        </div>
      </form>
    </center>
  </div>
  <!-- كود ادخال البيانات لقاعدة البيانات  -->
  <?php
  /* الاتصال بقاعدة البيانات  */
  include ('../confige.php');
  /*  تسجيل البيانات في متغيرات  */
  $h_name = @$_POST['h_name'];
  $w_name =@$_POST['w_name'];
  $place =@$_POST['place'];
  $number =@$_POST['number'];
  /* حالة شرطية لارسال البيانات */
  if(isset($_POST['submit'])){
    if(empty($h_name) || empty($w_name) || empty($place)){
      echo "<h1 style='color:red;margin:auto;'>complete the data</h1>";
    }else{
      $insert="INSERT INTO adoption (	husband , wife , place  ) VALUES ('$h_name','$w_name','$place')";
      mysqli_query($con,$insert);
      echo "<h1 style='color:green;border-radius:20px;margin:auto;'>your form has submitted</h1>";
      header('Refresh:2;../index.php');
    }
  }
  ?>
</body>
</html>