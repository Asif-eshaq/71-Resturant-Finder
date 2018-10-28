
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Form</title>
  <!-- Meta-Tags -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Company Shipping Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"/>

  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //Meta-Tags -->
  <!-- Stylesheets -->
  <link href="css3/style.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <!-- title -->
	<link href="//fonts.googleapis.com/css?family=Abhaya+Libre:400,500,600,700,800" rel="stylesheet">
  <!-- body -->
  <!--//fonts-->
</head>

<body>
  <header>
    <h1>Add Restuarants</h1>
  </header>
  <div class="w3ls-contact">
   
    <form action="addRestaurant.php" method="POST">
       <h1>Add Restuarants</h1>
      <div class="agile-field-txt">
        <label>
          Name :</label>
        <div class="mr_agilemain">
          <div class="left-wthree">
            <input type="text" name="name" placeholder=" " required="">
           
          </div>
          
        </div>
      </div>
      <div class="agile-field-txt">
        <label>
         Link:</label>
        <input type="text" name="link" placeholder=" " required="" />
      </div>
       <div class="agile-field-txt">
        <label>
         Rating:</label>
        <input type="text" name="rating" placeholder=" " required="" />
      </div>
      <div class="agile-field-txt">
        <label>
         Address:</label>
		 <textarea name="address" placeholder="" required=""></textarea>
      </div>
      
      <div class="w3ls-contact  w3l-sub">
        <input type="submit" value="submit" name ="submit">
      </div>

    </form>
  </div>
  <!-- //form ends here -->
  <?php
  include("database.php");
  if(isset($_POST['submit']))
  {
   
    $conn = connect();

    $name = $_POST['name'];
    $link = $_POST['link'];
    $rating = $_POST['rating'];
    $address = $_POST['address'];

    

    $query = "INSERT INTO `search` (`name`, `link`, `rating`, `address`) VALUES ('$name', '$link','$rating','$address')";
    $res = mysqli_query($conn,$query);
    if($res)
    {
      echo"success";
    }
  }
  ?>
  
</body>
<!-- //Body -->

</html>
