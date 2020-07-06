<?php
include './include/db_conn.php';

session_start();

if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Titan Gym | Sign Up</title>
	<link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">
</head>
<body>
	

<body class="page-body login-page login-form-fall">
    	<div id="container">
			<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				<img src="./images/logo.png" alt="vjhgjh" />
			</a>
			<h1>  Sign Up to Gym Buddies !!</h1>
			
			
			 
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<p class="description"> <h1> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspDear user, Sign UP to join us !</h1></p>
		<div class="login-content">
			
			
			 <form id="form1" name="form1" method="post" class="a1-container" action="demsubmit.php">
         <table width="100%" border="0" align="center">
         <tr>
           <td height="35"><table width="100%" border="0" align="center">
           	 <tr>
           	   <td height="35">MEMBERSHIP ID:</td>
           	   <td height="35"><input type="text" id="boxx" name="m_id" value="<?php echo time(); ?>" readonly required/></td>
         	   </tr>
			   
			   <tr>
               <td height="35">NAME:</td>
               <td height="35"><input name="u_name" id="boxx"  required/></td>
             </tr>
             <tr>
               <td height="35">STREET NAME:</td>
               <td height="35"><input  name="street_name" id="boxx"   required/></td>
             </tr>
             <tr>
               <td height="35">CITY:</td>
               <td height="35"><input <input type="text" name="city" id="boxx" required/ ></td>
             </tr>
             <tr>
               <td height="35">ZIPCODE:</td>
               <td height="35"><input type="number" name="zipcode" id="boxx" maxlength="6" required / ></td>
             </tr>
            <tr>
               <td height="35">STATE:</td>
               <td height="35"><input type="text" name="state" id="boxx" required/ size="30"></td>
             </tr>
            <tr>
               <td height="35">GENDER:</td>
               <td height="35"><select name="gender" id="boxx" required>

					<option value="">--Please Select--</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select></td>
             </tr>
            <tr>
               <td height="35">DATE OF BIRTH:</td>
               <td height="35"><input type="date" name="dob" id="boxx" required/ size="30"></td>
             </tr>
			 <tr>
               <td height="35">PHONE NO:</td>
               <td height="35"><input type="number" name="mobile" id="boxx" maxlength="10" required/ size="30"></td>
             </tr>
			  <tr>
               <td height="35">EMAIL ID:</td>
               <td height="35"><input type="email" name="email" id="boxx" required/ size="30"></td>
             </tr>
			 <tr>
               <td height="35">JOINING DATE:</td>
               <td height="35"><input type="date" name="jdate" id="boxx" required size="30"></td>
             </tr>
             <tr>
               <td height="35">PLAN:</td>
               <td height="35"><select name="plan" id="boxx" required onchange="myplandetail(this.value)">
					<option value="">--Please Select--</option>
					<?php
						$query="select * from plan where active='yes'";
						$result=mysqli_query($con,$query);
						if(mysqli_affected_rows($con)!=0){
							while($row=mysqli_fetch_row($result)){
								echo "<option value=".$row[0].">".$row[1]."</option>";
							}
						}

					?>
					
				</select></td>
             </tr>
             <tr>
               <td height="35">Password</td>
               <td height="35"><input <input type="text" name="password" id="boxx" required/ ></td>
             </tr>
			
	    <tbody id="plandetls">
             
            </tbody>

             <tr>
             <tr>
               <td height="35">&nbsp;</td>
               <td height="35"><input class="a1-btn a1-blue" type="submit" name="submit" id="submit" value="Register" >
                 <input class="a1-btn a1-blue" type="reset" name="reset" id="reset" value="Reset"></td>
             </tr>
           </table></td>
         </tr>
         </table>
       </form>
    </div>
    </div>   
        
        <script>
        	function myplandetail(str){

        		if(str==""){
        			document.getElementById("plandetls").innerHTML = "";
        			return;
        		}else{
        			if (window.XMLHttpRequest) {
           		 // code for IE7+, Firefox, Chrome, Opera, Safari
           			 xmlhttp = new XMLHttpRequest();
       				 }
       			 	xmlhttp.onreadystatechange = function() {
            		if (this.readyState == 4 && this.status == 200) {
               		 document.getElementById("plandetls").innerHTML=this.responseText;
                
            			}
        			};
        			
       				 xmlhttp.open("GET","plandetail.php?q="+str,true);
       				 xmlhttp.send();	
        		}
        		
        	}
        </script>
			
			
			
		</div>
	</div>