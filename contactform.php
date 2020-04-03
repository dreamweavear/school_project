<?php include 'header.php'; ?>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<form name="myForm" action="contactformAction.php" onSubmit="return validateForm();">
		
 <div class="table1"  align="center">


 <div class="tablerw">

  
<br>
  <h1 align="center"><b> Contact Form</b></h1>

  
<br><br>
  </div>


<div class="tablerw">

  <div class="tablecol">Name</div>

  <div><input type="text" name="cname" id="cname" size="30" style="background-color:white; color:black;" required ></div>
  <br>

  </div>

<br>
<div class="tablerw">

  <div class="tablecol">Email</div>

  <div><input type="email" name="cemail" id="cemail" size="30" style="background-color:white; color:black; "></div>
<br>
  </div>

  

 

 <div class="tablerw">

  <div class="tablecol">Subject</div>

    <div>
  <textarea name="subject" row="4" column="40" style="background-color:white; color:black; "></textarea></div>
  <br>
  </div>

 <br>
 





<div class="tablerw">

  <div class="tablecol">Phone</div>

  <div><input type="text" name="phone" id="phone" size="30" style="background-color:white; color:black; "></div>
<br>
  </div>
 </div>
 
  <br>
  

  <br><br><br>
  
  
 

  
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="tablerw" align="center">  
  

  <input type="submit" value="SUBMIT"  style="background-color:grey">
 </div> 
 
													</form>
															
   
  

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 


<br><br><br><br><br><br>

<?php include 'footer.php'; ?>