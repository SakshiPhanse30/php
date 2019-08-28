


<!-- <html>
    <title>client register</title>
<head>
<script type="text/javascript" ></script>
</head>
<script>
function validate()
{ 
   if( document.Registration.username.value == "" )
   {
     alert( "Please provide your Name!" );
     document.Registration.username.focus() ;
     return false;
   }
  
   var email = document.Registration.email.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.Registration.email.focus() ;
     return false;
 }
 if( document.Registration.phone.value == "" ||
           isNaN( document.Registration.phone.value) ||
           document.Registration.phone.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123 and 10 digits only." );
     document.Registration.phone.focus() ;
     return false;
   }


   
 
   if ( ( Registration.gender[0].checked == false ) && ( Registration.gender[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   

   if( document.Registration.country.value == "-1" )
   {
     alert( "Please provide your Select Country!" );
    
     return false;
   }  

   if( document.Registration.state.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     
     return false;
   }
   if( document.Registration.city.value == "-1" )
   {
     alert( "Please provide your City!" );
     document.Registration.city.focus() ;
     return false;
   }   
  
   
    
   
   if( document.Registration.pincode.value == "" ||
           isNaN( document.Registration.pincode.value) ||
           document.Registration.pincode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.Registration.pincode.focus() ;
     return false;
   }
 
   if( document.Registration.address.value == "" )
   {
     alert( "Please provide your Address!" );
     document.Registration.address.focus() ;
     return false;
   }
}
</script>
<body>
  <h1 style="color: orange; border: 4px solid orange; letter-spacing: 5px; padding: 10px;" align="center">Welcome...</h1>
<form action="client.php" name="Registration" onsubmit="return validate();" id="form" method="POST" id="">
</br>
</br>
</br>
<table cellpadding="2" width="50%" height="50%" bgcolor="grey" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><b>Client details:</b></font></center>
</td>
</tr>

<tr>
<td>Name</td>
<td><input type=text name=username id="username" size="30"></td>
</tr>

<tr>
<td>Email Id</td>
<td><input type="text" name="email" id="email" size="30"></td>
</tr>

<tr>
    <td>MobileNo</td>
    <td><input type="text" name="phone" id="phone" size="30"></td>
    </tr>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" id="gender" size="30">Male<input type="radio" name="gender" id="gender" size="30">Female</td>
</tr>




<tr>
    <td>Country</td>
    <td><select name="country">
    <option value="-1" selected>select..</option>
    <option value="ndia">INDIA</option>
    <option value="america">AMERICA</option>
    <option value="china">CHINA</option>
    <option value="JAPAN">JAPAN</option>
    </select></td>
    
    </tr>
    

<tr>
    <td>State</td>
    <td><select name="state">
    <option value="-1" selected>select..</option>
    <option value="New Delhi">Delhi</option>
    <option value="Mumbai">Maharashtra</option>
    <option value="Goa">GOA</option>
    <option value="Bihar">BIHAR</option>
    </select></td>
    </tr>


<tr>
<td>City</td>
<td><select name="city">
<option value="-1" selected>select..</option>
<option value="New Delhi">NEW DELHI</option>
<option value="Mumbai">MUMBAI</option>
<option value="Goa">GOA</option>
<option value="Patna">PATNA</option>
</select></td>
</tr>





<tr>
<td>PinCode</td>
<td><input type="text" name="zipcode" id="zipcode" size="30"></td>



<tr>
<td> Address</td>
<td><input type="text" name="address" id="address" size="30"></td>
</tr>

<tr>
<td><input type="button" value="update"></td>
<td colspan="2"><input type="submit" value="submit" /></td>
</tr>


</table>
</form>
</body>
</html>
<script type="text/javascript">
  $(document).ready(function() {

  

  $("#form").validate({
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    }
  });


});
</script>
 -->  


 <?php

  //connection to database
//$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$conn=mysqli_connect("localhost","root","","website");

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//$echo = "";
 if(isset($_POST['submit']))
 {

 if(!empty($_POST)){

   $username=$_POST['username'];
   $email=$_POST['email'];
   $phone=$_POST['phone'];
   
   $gender=$_POST['gender'];
   $country=$_POST['country'];
   $state=$_POST['state'];
   $city=$_POST['city'];
   $zipcode=$_POST['zipcode'];
   $address=$_POST['address'];
   

   $query="UPDATE client SET username='".$username."',
email='".$email."', phone=".$phone.", gender='".$gender."', country='".$country."',
state='".$state."', city='".$city."', zipcode='".$zipcode."',
address='".$address."'";

// execute query
    $run=mysqli_query($conn,$query);


   if($run)
   {
     echo "Data updated Sucessfully";
   }
  else
  {
   echo "Error".mysqli_error($conn);
  }
 }
 else
  {
   echo "Error";
  }

 }
 ?>
 
 <div align="center"></br>
 <h2 style="color: orange; border: 4px solid orange; letter-spacing: 5px; padding: 10px;"> LOGIN DETAIL</h2>
<style>.form-style-4{
	font: 95% Arial, Helvetica, sans-serif;
	max-width: 600px;
	margin: 10px auto;
	padding: 16px;
	background: #F7F7F7;
}

</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<link rel="stylesheet" href="form.css" type="text/css">
<div  align="center"; class="body-content">
  <div class="module">

<form action="client.php" method="POST" id="first_form"
onSubmit="return validate();"  class="form-style-4" >
  <div class="container" style="background-color:grey;">

   <body>

  
  <div>
    <label for="username"> Name:</label>
    <input type="text" id="username" name="username" required></input>
  </div><br>
  <div>
    <label for="phone">phone:</label>
    <input type="text" maxlength="10" id="phone" name="phone" required></input>
  </div><br>
 <div>
  <div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required></input>
  </div><br>
  <div>
  <label>Gender</label>
  <input type="radio" name="gender" value="male" required> Male
  <input type="radio" name="gender" value="female" required> Female<br>
  
 </div><br>
  <div>
    <label for="country" required>Country:</label>

  

<select name="country">
<option>Select</option>
<option> India</option>
</select>
<div class="error" id="countryErr"></div>
<br>

</select>
  </div>
  <div>
    <label for="state" required>State:</label>
   <select name="state">
  <option value="delhi">delhi</option>
  <option value="mp">MP</option>
  <option value=up">UP</option>

</select>
  </div><br>
   <div>
    <label for="city" required>City</label>
    <select name="city">
  <option value="delhi">delhi</option>
  <option value="indore">INDORE</option>
  <option value="luckhnow">LUCKHNOW</option>

</select>
  </div><br>
 <div>
    <label for="zipcode">Pincode:</label>
    <input type="zipcode" maxlength="6" id="zipcode" name="zipcode"
required></input>
  </div><br>
  <div>
  <label><b>Address:</b></label><br>
       <textarea name="address" rows="10" cols="30">Please enter
address</textarea>
       <br>
     </div>

  <div>
    <input name="submit" type="submit" value="Submit" /><br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  </div>
  </div>
</form>
</body>
<script type="text/javascript">
  $(document).ready(function() {

  $("#first_form").validate({
    submitHandler: function(form) {
      // do other things for a valid form
      form.submit();
    }
  });


});

</script>