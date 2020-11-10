<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

*{
  margin:0px;
  padding:0px;
}

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #ba000d;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}


/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #ba000d;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  cursor: pointer;
}

img.avatar {
  width: 100px;
  height: 100px;
  border-radius: 100%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  cursor:pointer;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 2px solid #ba000d;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}



/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

    img.landing{

        width:100%;
        height:auto;
       


    }

    .btn1 {
  position: absolute;
  top:5%;
  left: 85%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  width:auto;
}

.btn2 {
  position: absolute;
  top:5%;
  left: 92%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #555;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
  width:auto;

}

.container1{
  display:flex;
  flex-direction:row;
  background-color:#f44336 ;
  padding:7px;
  width:98.5%;
  height:300px;
  

}


.container2{
  background-color: white;
  display:flex;
  flex-direction:row;
  align-items:center;
  padding: 20px;
  margin:5px;
  justify-content:center;
  width:33.33%;
}

@media (max-width: 600px) {

  .container1{
  display:flex;
  flex-direction:column;
  background-color:#f44336 ;
  padding:7px;
  width:100%;
  height:100%;
  margin:5px;

}


.container2{
  background-color: white;
  align-items:center;
  padding:20px;
  justify-content:center;
  margin:5px;
  width:90%;

}

img.image2{

width:100%;
height:100%;

}




}

.image1{
  background-image:url("http://localhost/zwiggy/images/landing1.jpg");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  height:100vh;
  width:100vw;
  display:flex;
  
  align-items:center;
  justify-content:center;

}



img.image2{

  width:100%;
  height:auto;
  
}

.location{
    height:30px;
    width:100px;
    }



img.loc{
  margin-top:8.1px;
    width:40px;
    height:40.9px;
}

.container3{
  display:flex;
  flex-direction:row;
}

.btn3{
  background-color:#ba000d;
  color:white;
  padding:10px;
  font-size:20px;
  margin-left:5px;
  margin-bottom:2px;

}



.signup{
  position:absolute;
  
  right:0;
 justify-content:right;
  display:flex;
  flex-direction:row;

}



</style>
</head>
<body>

            <div class="signup">
            <button onclick="document.getElementById('id02').style.display='block'" style="width:100px; height:40px;float:right;background-color:#ba000d;margin-right:2px;">register</button>     
            <button onclick="document.getElementById('id01').style.display='block'" style="width:100px; height:40px;float:right;margin-right:2px;background-color:#ba000d">Login</button>
            </div>
            

            <div class="image1">
           
            
            <div class="container3">
            <input type="text" placeholder="location" name="location">
            <a href="menu.php"><img src="http://localhost/zwiggy/images/location.jpg" alt="location" class="loc"></a>
            </div>

           </br><a href="menu.php" class="btn3">order food</a>

           
    <div class="image1">
		<img src="http://localhost/zwiggy/images/landing1.jpg" alt="landing" class="landing">

		<button onclick="document.getElementById('id01').style.display='block'" class="btn1">Login</button>
		<button onclick="document.getElementById('id02').style.display='block'" class="btn2">register</button>
	</div>

            
            

            </div>
            

           

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
     <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
      <img src="http://localhost/zwiggy/images/login.png" alt="" class="avatar">
    </div>

    <div class="container">
      <label for="usernamename"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

    

      
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>



<div id="id02" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
       <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span> 
      <img src="http://localhost/zwiggy/images/login.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">

      <label for="addinguid"><b>Add user_id</b></label>
      <input type="text" placeholder="Enter user_id(mail_id)" name="adduserid" required>

      <label for="addingusernamename"><b>Add Username</b></label>
      <input type="text" placeholder="Enter Username" name="adduname" required>

      <label for="psw"><b>create Password</b></label>
      <input type="password" placeholder="create Password" name="createpsw" required>

      <label for="addingadd1"><b>Address_1</b></label>
      <input type="text" placeholder="Enter address_1" name="add_add1" required>

      <label for="addingadd2"><b>Address_2</b></label>
      <input type="text" placeholder="Enter address_2" name="add_add2" required>

      <label for="addingpc"><b>Postal Code</b></label>
      <input type="text" placeholder="Enter postalcode" name="addpc" required>

      <label for="addingphn"><b>Add phone number</b></label>
      <input type="text" placeholder="Enter Phonenumber" name="addphn" required>

      <label for="addingacc"><b>Account Number</b></label>
      <input type="text" placeholder="Enter Bank Accno" name="add_acc" required>

      

      

      
        
      <button type="submit">Register</button>
      </div>
    </form>

    


</div>

<div class="container1">

    
      <div class="container2">
      <a href="#"><img src="http://localhost/zwiggy/images/fast.png" alt="fast" class="image2"></a>
      </div>
      <div class="container2">
      <a href="#"><img src="http://localhost/zwiggy/images/order.png" alt="fast" class="image2"></a>
      </div>
      <div class="container2">
      <a href="#"><img src="http://localhost/zwiggy/images/reservation.png" alt="fast" class="image2"></a>
      </div>
        
    
    </div>

    



<script>
// Get the modal
// var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }

// Get the modal
// var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//     if (event.target == modal) {
//         modal.style.display = "none";
//     }
// }
 </script>
            
</body>
</html>