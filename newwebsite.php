<?php 
$conn=mysqli_connect("localhost","root","","website");

 if(isset($_POST['submit']))
 {
  
  


   
   
   $username=$_POST['username'];
   

   $phone=$_POST['phone'];
   $email=$_POST['email'];
   
  
   $gender=$_POST['gender'];
   
   $query="INSERT INTO user(username, phone, email, gender) VALUES ('$username', '$phone', '$email', '$gender')";
    

    $run=mysqli_query($conn,$query);
   
   
   if($run)
   {
     echo "Data Inserted Sucessfully";
   }
  else
  {
   echo "Error".mysqli_error($conn);
  }
   
 } 
 


?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<body>
<h1 style="color: orange; border: 4px solid orange; letter-spacing: 5px; padding: 10px;" align="center">Welcome to Website.com</span></h1>
​
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<style>
.fa {
  padding: 20px;
  font-size: 20px;
  width: 25px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.module{
	font-family: 'Open Sans Condensed', arial, sans;
	width: 500px;
	padding: 30px;
	background: #FFFFFF;
	margin: 50px auto;
	box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
	-webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.module h2{
	background: #4D4D4D;
	text-transform: uppercase;
	font-family: 'Open Sans Condensed', sans-serif;
	color: #797979;
	font-size: 18px;
	font-weight: 100;
	padding: 20px;
	margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],


.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
{

  box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	outline: none;
	display: block;
	width: 100%;
	padding: 7px;
	border: none;
	border-bottom: 1px solid #ddd;
	background: transparent;
	margin-bottom: 10px;
	font: 16px Arial, Helvetica, sans-serif;
	height: 45px;
}

</style>
<h3 style="float:right;"><a href="login.php">Go to Admin Page</a></h3>
<div  ></br>
<!-- <div class="body-content" >
<h2 style="color:blue;"; align="center" >Registration</h2></br></br></br> -->


<!-- <link rel="stylesheet" href="form.css" type="text/css"> -->
  <div class="module">
<h2>Register</h2>
<form action="newwebsite.php" method="POST" id="" onSubmit="return validate();" height="60%" width="50%">
  
  <div class="container" align="center">
 
        
  <div>
    <label for="username">User Name:</label>
    <input type="text" id="username" name="username" required></input>
  </div></br></br>
  <div>
    <label for="phone">phone:</label>
    <input type="number" maxlength="10" id="phone" name="phone" required></input>
  </div>
<br></br>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required></input>
  </div></br></br>
  <div>    <!-- <label>Gender:</label> -->
      <div>
       Gender:<input type="radio" name="gender" value="male" required>Male
  <input type="radio" name="gender" value="female" required>Female<br>
 </br></br>
      </div>
     <div class="input-group">
      <button type="submit" class="btn" name="submit">Register</button>
    </div>
    </div>
</form>
  </div>
</div>
</div>
<div style="position:fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: orange;
  color: white;
  text-align: center;"><footer>
  
  <p>Contact information:8877665599 <a href="mail to:someone@example.com">
  website@123.com</a>.</p>
</footer></div>
</body>
<script type="text/javascript">
  $(document).ready(function() {

  // $('#first_form').submit(function(e) {
  //   e.preventDefault();
  //   var username = $('#first_name').val();
  //   var phone = $('#phone').val();
  //   var email = $('#email').val();
  //   var gender = $('#gender').val();

  //   $(".error").remove();

  //   if (username.length < 1) {
  //     $('#username').after('<span class="error">This field is required</span>');
  //   }
    
  //   if (email.length < 1) {
  //     $('#email').after('<span class="error">This field is required</span>');
  //   } else {
  //     var regEx = /^[A-Z0-9][A-Z0-9._%+-]{0,63}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/;
  //     var validEmail = regEx.test(email);
  //     if (!validEmail) {
  //       $('#email').after('<span class="error">Enter a valid email</span>');
  //     }
  //   }
    
  // });

  $("#first_form").validate({
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    }
  });


});

</script>
