<!DOCTYPE html>
<html>
<head>
	<title></title>
	<head>

 <!--Import Google Icon Font-->

      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Import materialize.css-->

      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>


      <!--Let browser know website is optimized for mobile-->

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      
<title>Login Form</title>


<!--Styling of the webpage -->

<style type="text/css">
		.capt{
			margin-left: 60px;opacity: 0.8;
		}
		.a{
		font-size: 40px;color: black;
	}

form {
  width: 480px;
  margin: 4em auto;
  padding: 3em 2em 2em 2em;
  background: #ffffff;
  border: 1px solid #ebebeb;
  box-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}



  /* label color */
   .input-field label {
     color: #3B1F2B;
   }
   /* label focus color */
   .input-field input[type=text]:focus + label {
     color: #3B1F2B;
   }
   /* label underline focus color */
   .input-field input[type=text]:focus {
     border-bottom: 1px solid #3B1F2B;
     box-shadow: 0 1px 0 0 #3B1F2B;
   }
   
   /* invalid color */
   .input-field input[type=text].invalid {
     border-bottom: 1px solid #d50000 ;
     box-shadow: 0 1px 0 0 #d50000 ;
   }
   /* icon prefix focus color */
   .input-field .prefix.active {
     color: #3B1F2B;
   }



</style>

<!--/Styling of the webpage -->

</head>

<body>

<!--PHP code to check if form has been filled -->

<?php 
if(isset($_POST['username'])){
$a=$_POST['username'];
echo $a;}?>


<div id="main">
<div id="login">
<h1 align="center">Login Credentials</h1>

<!--Form requiring autosubmit  -->

<form action="Your website here" method="post" id="form">
<div class="row">
 <div class="input-field col m12" >
 		  <i class="material-icons prefix">account_circle</i>
          <input id="name" name="username" type="text" class="validate tooltipped" length="9" data-position="right" data-delay="50" data-tooltip="Enter your Username!" required="">
          <label for="name">Username</label>
 </div>
 </div>
<div class="row">
 <div class="input-field col m12">
 		  <i class="material-icons prefix">info</i>
          <input id="u_id" name="u_id" type="text" class="validate tooltipped" data-position="right" data-delay="50" data-tooltip="Enter your Password!" required>
          <label for="u_id">Password</label>
  </div>

</div>

</form>

<!--/Form requiring autosubmit  -->

</div>
</div>

<!--Script for autosubmission-->

<script type="text/javascript">
var count=0;
window.onload = function() {
	auto();
	};
function auto(){
	if(count==0){

// use a constant date (e.g. 2000-01-01) and the desired time to initialize two dates

var today = new Date();
var dd = today.getDate();
var mm = today.getMonth(); //January is 0!
var yyyy = today.getFullYear();

    var n = today.getMinutes();
    var p=today.getHours();

//PUT YOUR TIME FOR SUBMISSION IN PLACE OF DATE 1 THAT IS INSTEAD OF 18 ,PUT your hours in 24 hr format and Instead of 55 put your minutes

var date1 = new Date(yyyy, mm, dd,  18, 55); // 9:00 AM
var date2 = new Date(yyyy, mm, dd, p, n); // 5:00 PM

// the following is to handle cases where the times are on the opposite side of
// midnight e.g. when you want to get the difference between 9:00 PM and 5:00 AM

if (date2 < date1) {
    date2.setDate(date2.getDate() + 1);
}

var diff = (date2 - date1);
alert(diff);
var auto_refresh = setInterval(function() { submitform(); }, diff);
count=count+1;
}


// Form submit function.
function submitform(){
 alert('Form is submitting.....');
document.getElementById("form").submit();

}
</script>

<!--/Script for autosubmission-->

<!--Script for tooltip in materialize css framework-->

<script type="text/javascript">$(document).ready(function(){
    $('.tooltipped').tooltip({delay: 50});
  });
      </script>

  <!--/Script for tooltip in materialize css framework-->
      
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript">$(".dropdown-button").dropdown();</script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>
#Hactober fest comment added. please review Reuben
