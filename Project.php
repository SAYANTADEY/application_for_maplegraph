<!DOCTYPE html>
<html>
<style>
body {font-family: Arial;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number], input[type=date], input[type=url] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}
    
.left_container {
    padding: 16px;
    width: 50%;
    float: left;
}

.right_container {
    padding: 16px;
    width: 50%;
    float: right;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .submitbtn {
       width: 100%;
    }
}
</style>
<body>

<form action="" style="border:1px solid #ccc" method="post" enctype="multipart/form-data">
  <div class="container">
    <h1>Detail Submission</h1>
    <p>Please fill in this form to submit all the details carefully.</p>
    <hr>
  </div>
  <div class="left_container">
    <label><b>Position Applied For </b></label>
    <?php $position = "NULL";?>
    <input type="radio" name="position" value="PHP Developer" required> PHP Developer
    <input type="radio" name="position" value="iOS Developer"> iOS Developer
    <br><br>
      
    <label><b>Name of applicant</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>
    
    <label><b>Date of Birth</b></label>
    <input type="date" placeholder="Enter Adderess" name="bday" required>
      
    <label><b>B.Tech Stream</b></label>
      <?php $stream="NULL";?>
    <input type="radio" name="stream" value="CSE" required> CSE
    <input type="radio" name="stream" value="IT"> IT<br><br>
      
    <table>
      <tr>
          <td>
            <label><b>B.Tech Details</b></label>
            <input type="number" placeholder="Enter % of Marks" name="btechmarks" step="0.01" max="100" required>
            <input type="text" placeholder="Enter Institute Name" name="btechinst" required>
          </td>
          <td>
            <label><b>12th/Diploma Details</b></label>
            <input type="number" placeholder="Enter % of Marks" name="hsmarks" step="0.01" max="100" required>  
            <input type="text" placeholder="Enter Institute Name" name="hsinst" required>
          </td>
          <td>
            <label><b>10th Details</b></label>
            <input type="number" placeholder="Enter % of Marks" name="smarks" step="0.01" max="100" required> 
            <input type="text" placeholder="Enter Institute Name" name="sinst" required>
          </td>
      </tr>
    </table>
          
    <label><b>Skills </b></label>
      <?php $skill = array();?>
    <input type="checkbox" name="skill[]" value="HTML"> HTML
    <input type="checkbox" name="skill[]" value="CSS"> CSS
    <input type="checkbox" name="skill[]" value="PHP"> PHP
    <input type="checkbox" name="skill[]" value="JS"> JS
    <input type="checkbox" name="skill[]" value="MySQL"> MySQL
    <input type="checkbox" name="skill[]" value="iOS"> iOS<br><br>
    
      <label><b>Upload Resume</b></label>
    <input type="file" name="file">
    <label>                           </label>
    </div>
    <div class="right_container">
        
    <label><b>Gender</b></label>
        <?php $gender="NULL";?>
    <input type="radio" name="gender" value="M" required> Male
    <input type="radio" name="gender" value="F"> Female
    <input type="radio" name="gender" value="other"> Other <br><br>
        
    <label><b>Address</b></label>
    <input type="text" placeholder="Enter Adderess" name="address" required>
        
    <label><b>Mobile No</b></label>
    <input type="number" placeholder="Enter Mobile No" name="mbno" maxlength="10" required>
      
    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
      
    <label><b>LinkedIn profile</b></label>
    <input type="url" placeholder="Enter Link" name="linkedin" required>
        
    <label><b>Portofolio Link profile</b></label>
    <input type="url" placeholder="Enter Link" name="portofolio" required>
         
    </div>
    <div class="container">
        <div class="clearfix">
          <button type="submit" name="submit" class="submitbtn">Submit</button>
        </div>
    </div>
</form>

</body>
</html>
<?php
extract($_POST);
// Make a MySQL Connection
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con,"project");

$skills = implode(',', $skill);

if(isset($submit))
{       
 $file = $_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
    
 $query="INSERT INTO details (position,name,dob,stream,btech_marks,btech_inst,hs_marks,hs_inst,s_marks,s_inst,skills,gender,address,mobile_no,email,linkedin,portofolio,file) VALUES ('" . $position . "','" . $name . "','" . $bday . "','" . $stream . "','" . $btechmarks . "','" . $btechinst . "','" . $hsmarks . "','" . $hsinst . "','" . $smarks . "','" . $sinst . "','" . $skills . "','" . $gender . "','" . $address . "','" . $mbno . "','" . $email . "','" . $linkedin . "','" . $portofolio . "','" . $file . "')";
    mysqli_query($con,$query);
    
    echo "<script type='text/javascript'>alert('Details have been sucessfully submitted')</script>";
}

?>