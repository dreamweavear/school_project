
<?php include 'header.php'; ?>




<script language="JavaScript">

function validateForm() {
  if (document.myForm.address.value == "") {
     window.alert("Please enter some text into the address field");
     return false;
  }
  
  else if  (document.myForm.gender.value == "") {
     window.alert("Please select gender");
     return false;
  }
  
  
  
  else if(document.myForm.class.selectedIndex=="")
  {
       alert ( "Please select field!");
       return false;
        }
  
   
  else if(document.myForm.section.selectedIndex=="")
  {
       alert ( "Please select field!");
       return false;
        }
  
   
  else if(document.myForm.state.selectedIndex=="")
  {
       alert ( "Please select field!");
       return false;
        }
  
  
  
  else{
     return true;
  }
}
  </script>



<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->


<br><br><br><br>





<form name="myForm" method="post" action="formAction.php" onSubmit="return validateForm();">
 
 <div class="table1" style="margin:0 450px "  >


 <div class="tablerw">

 <h1 align="center"><b><font size="6px">Registration Form</font></b> </h1>

  </div>
<br><br>

<div class="tablerw">

  <div class="tablecol">First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="firstname" id="firstname" size="30" style="background-color:white; color:black;"  required ></div>

  </div>
<br>

<div class="tablerw">

  <div class="tablecol">Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="lastname" id="lastname" size="30" style="background-color:white; color:black;"></div>

  </div>
<br>
  
<div class="tablerw">

  <div class="tablecol">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="radio" name="gender" value="Male" size="10">Male

  <input type="radio" name="gender" value="Female" size="10" >Female</div>

  </div>
  
  <br>
  <div class="tablerw">

  <div class="tablecol">DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="date" name="dob" id="dob" size="30" style="background-color:white; color:black;" required></div>

  </div>
<br>
 <div class="tablerw">

  <div class="tablecol">Permanent Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    
  <textarea name="address" row="4" column="40" style="background-color:white; color:black;" required></textarea></div>
  </div>


<br>
<div class="tablerw">

  <div class="tablecol">Native&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="state" style="background-color:white; color:black;" required >

  <option value="-1" >select..</option>

  <option value="Kerala">KERALA</option>

  <option value="TN">TN</option>

  <option value="AP">ANDRA</option>

  <option value="Bihar">BIHAR</option>

  </select>

  </div>
  </div>
 <br>
<div class="tablerw">

  <div class="tablecol">Class&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="class" style="background-color:white; color:black;" required>

  <option value="-1" >select..</option>

  <option value="I">I</option>

  <option value="II">II</option>

  <option value="III">III</option>

  <option value="IV">IV</option>
  <option value="V">V</option><option value="VI">VI</option><option value="VII">VII</option><option value="VIII">VIII</option><option value="IX">IX</option><option value="X">X</option>

  </select></div>

  </div>
  <br>
  <div class="tablerw">

  <div class="tablecol">Section&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <select name="section" style="background-color:white; color:black;" required>

  <option value="-1" >select..</option>

  <option value="A">A</option>

  <option value="B">B</option>

  

  </select></div>

  </div>
  
  
  
  
 <br> 
  
  
<div class="tablerw">

  <div class="tablecol">Father's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="fname" id="fname" size="30" style="background-color:white; color:black;" required></div>

  </div>
<br>
  
  <div class="tablerw">

  <div class="tablecol">Mother's Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="mname" id="mname" size="30" style="background-color:white; color:black;" required></div>

  </div>
  <br>
  <div class="tablerw">

  <div class="tablecol">Father's Occupation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="fjob" id="fjob" size="30" style="background-color:white; color:black;" required></div>

  </div>
  <div class="tablerw">
<br>
  <div class="tablecol">Mother's Occupation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="mjob" id="mjob" size="30" style="background-color:white; color:black;" required></div>

  </div>

  
 <br>

<div class="tablerw">

  <div class="tablecol">MobileNo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="mobileno" id="mobileno" size="30" style="background-color:white; color:black;" required></div>

  </div>
  
  
<br>  
<div class="tablerw">

  <div class="tablecol">Email id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="email" name="email" id="email" size="30" style="background-color:white; color:black;" required ></div>

  </div>
  
  <br>
  <div class="tablerw">

  <div class="tablecol">Choose your username&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="text" name="uname" id="uname" size="30" style="background-color:white; color:black;" required></div>

  </div>
  <br>
  <div class="tablerw">

  <div class="tablecol">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

  <input type="password" name="passw" id="passw" size="30" style="background-color:white; color:black;" required ></div>

  </div>

 
  <br>
  

  
  
  
 
 <div class="tablerw">
   <br><br><br> 
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  <input type="submit" value="REGISTER" align="center" style="background-color:gray;color:black;">&nbsp;&nbsp;
 <a href="formjs.php">  <input type="button" value="CLEAR" align="center" style="background-color:gray ;color:black;" > </a>
  

  </div>

  </div>
  
  </form>





<br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>