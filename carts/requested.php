<!-- استدعاء الاتصال و امر الحذف -->
<?php
include ('../confige.php');
session_start();
include('../font.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.3.min.js"></script>
    <script src="popper.min.js"></script>
    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="../bb1.css"/>
    <!-- لينك موقع font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
      <!-- لوجو الموقع-->
    <?php
    include('../icon.php');
    ?>
    <!-- اسم الموقع -->
    <title> دار المايقوما </title>
</head>
<body>
  <header>

    <!-- ديف لتثبيت الجزء الهيدر -->
    <div id="bu">

      <!-- اسم الصفحة او البراند -->
      <div id="a1">
        <h3 class="text-primary"> دار المايقوما </h3>
      </div>
      <div id="bu1">
      
        <!-- تكوين شكل زر القائمة -->
        <a class="btn dropdown-toggle" data-toggle="dropdown"  href="#"  aria-expanded="false">
          <div class="d11 mb-1" id="d11"></div>
          <div class="d12 mb-1" id="d12"></div>
          <div class="d13 mb-1" id="d13"></div>
        </a>
        <!-- محتوي السلايدر الجانبي -->
        <form style="text-align:right;background-color:white;filter:opacity(.7); width:200px;" class="dropdown-menu">

          <!-- استدعاء شكل من فونت اوسم -->
          <center>
            <i class="fa-solid fa-user" 
            style="scale:1.5;border: 1px solid black;border-radius:10px;padding:7px;background-color:silver;">
            </i>
          </center>
          <h5 style="border-bottom:2px solid black;font-weight:bold;"> حسابك </h5>
          <h5><span style="color:red;font-weight:bold;">الاسم :</span><br><?php echo @$_SESSION['name']; ?></h5>
          <h5><span style="color:red;font-weight:bold;">بريدك الالكتروني  :</span><br><?php echo @$_SESSION['email']; ?></h5>
          <div id="a">
            <!-- ازرار التسجيل في القائمة -->
            <a href="carts/new_adding.php"> تسجيل للتبني <-</a><br><br>
            <a href="carts/requested.php"> التسجيلات المطلوبة <-</a><br><br>
            <div  style="display:flex;">
              <a href="logins/signin.php"> تسجيل دخول </a>
              <a href="logins/signup.php"> تسجيل جديد </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </header><br><br><br><br>

  <div class="container">
    <table>
      <tr>
        <th>Image</th>
        <th>Husband Name</th>
        <th>wife Name</th>
        <th>place</th>
        <th>Delete</th>
      </tr>
  <!-- كود لجلب البيانات من قاعدة البيانات  -->
  <?php
  include ('../confige.php');
  $id=@$_GET['id'];
  $email=$_SESSION['email'];
  if($email=='admin@gmail.com'){
    $ro1=mysqli_query($con , "SELECT * FROM adoption");
    while($nm1=mysqli_fetch_array($ro1)){
    echo 
        "<tr>";
        echo  "<td>"."<img src=../".$nm1['image']." alt='image' style='width:50px;'>"."</td>";
        echo  "<td>".$nm1['husband']."</td>";
        echo  "<td>".$nm1['wife']."</td>";
        echo  "<td>".$nm1['place']."</td>";
        echo  "<td>"."<a href='delete_product.php? id=$nm1[id]' style='text-decoration: none;'>"."delete"."</a>"."</td>";
    };
  }
  ?>
      </tr>
    </table>
  </div>

  <!-- footer calling -->
  <?php
  include('../footer.php')
  ?>