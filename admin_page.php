<?php
session_start();
include ('confige.php');
$id=@$_GET['id'];
if(isset($id)){
  $de = mysqli_query($con, "DELETE FROM information WHERE id=$id");
}
include('font.php');
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
    <link rel="stylesheet" href="bb.css"/>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- لوجو الموقع-->
    <?php
    include('icon.php');
    ?>
    <title> دار المايقوما / صفحة المدير</title>
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
          <a href="carts/requested.php" id="p1"> التسجيلات المطلوبة <-</a><br><br>
          <div  style="display:flex;border:2px solid black;">
            <a href="logins/signin.php" id="s"> تسجيل دخول </a>
            <a href="logins/signup.php"> تسجيل جديد </a>
          </div>
        </div>
      </form>
    </div>
  </div>
</header><br><br><br><br>
  
<div class="container" id="c1">
  <center>
    <div>
      <!-- رسالة ترحيبية للمستخدم -->
      <?php echo "<h1 style='filter: drop-shadow(black 5px 10px 10px);scale:1.3;'> <span style='color:chocolate;padding:0px 25px;font-weight:bold;'>".@$_SESSION['name']."</span> مرحبا  </h1>"; ?>
    </div>
  </center>
  <br><br>
  <div class="row">
    <div class="col-8"><a href="carts/adding.php"><h5 style="border:2px dotted black;width:60%;margin-left: 20px;color:black;"> اضافة منشور </h5></a></div>
    <div class="col-4">
    <a href="index.php"
      name="logout" 
      id="aa"
      style="color:black;width:fit-content;background-color:silver;text-decoration:none;padding:5px;border-radius:10px;">
        صفحة المستخدمين </a><br><br>
      <a href="logout.php"
      name="logout"
      id="aa"
      style="color:black;width:fit-content;background-color:silver;text-decoration:none;padding:5px;border-radius:10px">
      تسجيل خروج </a>
    </div><br><br>
  </div>  
</div><br>
<div class="row" style="text-align: left;">
  <?php
    include ('confige.php');
    $row = mysqli_query($con , "SELECT * FROM information");
    while($nm = mysqli_fetch_array($row)){
      echo "
        <center class='col-12'><br>
          <div class='card' method='post'>
            <img src='$nm[image]' alt='image' class='image'>
            <h3>$nm[title]</h3><br>
            <h5>$nm[address]</h5>
            <div class='controlling' >
              <a href='carts/edite.php? id=$nm[id]'>Editing</a>
              <a href='admin_page.php? id=$nm[id]'>Delete</a>
            </div></br>
          </div>
        </center>
      ";  
    }
  ?>
</div><br><br><br>

<?php
include('footer.php');
?>
</body>
</html>