<?php 
include("template/header.html");
?>


<section id="register_case">
<div class="w3-card" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1%" >
 <div class="w3-row">  
     
     <h1 align=center class="w3-">CASE REGISTERATION</h1>
     
     <div class=w3-half>
        <table class="w3-table-all">
           <tr>
               <td><label>Case id</label></td>
               <td><input name="cid"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Case Type</label></td>
               <td><input name="ctype"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Date action filed</label></td>
               <td><input name="dateaf" type="date" class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Date of accident</label></td>
               <td><input name="dateoa" type="date"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>branch code</label></td>
               <td><input name="bcode"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Next date</label></td>
               <td><input name="nextdate" type="date" class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Damage</label></td>
               <td><input name="damage"  class="w3-input"/></td>
          </tr>
            
        </table>
     </div> 
     
     <div class=w3-half>
        <table class="w3-table-all">
           <tr>
               <td><label>Third party amount</label></td>
               <td><input name="tpamount"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Paid amount</label></td>
               <td><input name="paidamount"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Opposition party</label></td>
               <td><input name="oppparty"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Appear for</label></td>
               <td><input name="appearfor"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>class code</label></td>
               <td><input name="classcode"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>councel id</label></td>
               <td><input name="councelid"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>mt106_notice</label></td>
                <td><input type="radio"  value="yes" name="mt106"/>yes
                   <input type="radio" value="no" name="mt106"/>no</td>
          </tr>
        </table>
         
     </div> 
</div>
    
    <a href="#petitioner" style="margin-left:75%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Next</a>
</div>
</section>


<section id="petitioner" style="margin-top:15%">
<div class="w3-card" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1%" >
 <div class="w3-row">  
     
     <h1 align=center class="w3-">PETITIONER    FORM</h1>
     
     <div class=w3-half>
         
        <table class="w3-table-all">
           <tr>
               <td><label>Name</label></td>
               <td><input name="name"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Relation</label></td>
               <td><input name="relation"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Relavtive name</label></td>
               <td><input name="rname"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Date of Birth</label></td>
               <td><input name="dob" type="date"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Age</label></td>
               <td><input name="age" type="number" class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Gender</label></td>
                <td><input type="radio" value="male" name="gender"/>male
                    <input type="radio" value="female" name="gender"/>female
                    <input  type="radio" value="other" name="gender"/>other</td>
          </tr>
            
            <tr>
               <td><label>Religion</label></td>
               <td><input name="religion"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Caste</label></td>
               <td><input name="caste"  class="w3-input"/></td>
          </tr>
            
        </table>
     </div> 
     
     <div class=w3-half>
        <table class="w3-table-all">
            <tr>
               <td><label>Email</label></td>
               <td><input name="email" type="email" class="w3-input"/></td>
          </tr>
           <tr>
               <td><label>Mobile No.</label></td>
               <td><input name="mobno" type="number"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Address</label></td>
               <td><textarea name="address"  class="w3-input"></textarea></td>
          </tr>
            <tr>
               <td><label>District</label></td>
               <td><input name="district"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Town</label></td>
               <td><input name="town"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Ward</label></td>
               <td><input name="ward"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Village</label></td>
               <td><input name="village"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>pin code</label></td>
               <td><input name="pincode"  class="w3-input"/></td>
          </tr>
        </table>
     </div>
     
</div>
       <div style="margin-top:1%">
    <a href="#register_case" style="margin-left:55%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Privious</a>
    <a href="#respondent" style="float:right;margin-right:5%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Next</a>
    </div>
</div>
</section>


<section id="respondent" style="margin-top:10%">
<div class="w3-card" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1%" >
 <div class="w3-row">  
     
     <h1 align=center class="w3-">RESPONDENT    FORM</h1>
     
     <div class=w3-half>
         
        <table class="w3-table-all">
           <tr>
               <td><label>Name</label></td>
               <td><input name="name"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Relation</label></td>
               <td><input name="relation"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Relavtive name</label></td>
               <td><input name="rname"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Date of Birth</label></td>
               <td><input name="dob" type="date"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Age</label></td>
               <td><input name="age" type="number" class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Gender</label></td>
                <td><input type="radio" value="male" name="gender"/>male
                    <input type="radio" value="female" name="gender"/>female
                    <input  type="radio" value="other" name="gender"/>other</td>
          </tr>
            
            <tr>
               <td><label>Religion</label></td>
               <td><input name="religion"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Caste</label></td>
               <td><input name="caste"  class="w3-input"/></td>
          </tr>
            
        </table>
     </div> 
     
     <div class=w3-half>
        <table class="w3-table-all">
            <tr>
               <td><label>Email</label></td>
               <td><input name="email" type="email" class="w3-input"/></td>
          </tr>
           <tr>
               <td><label>Mobile No.</label></td>
               <td><input name="mobno" type="number"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Address</label></td>
               <td><textarea name="address"  class="w3-input"></textarea></td>
          </tr>
            <tr>
               <td><label>District</label></td>
               <td><input name="district"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Town</label></td>
               <td><input name="town"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Ward</label></td>
               <td><input name="ward"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Village</label></td>
               <td><input name="village"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>pin code</label></td>
               <td><input name="pincode"  class="w3-input"/></td>
          </tr>
        </table>
     </div>
     
</div>
    
    <div style="margin-top:1%">
        <a href="#petitioner" style="margin-left:55%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Previous</a>
     <a href="#Extra_information" style="float:right;margin-right:5%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Next</a>
         </div>  
</div>
</section>


<section id="Extra_information" style="margin-top:10%">
<div class="w3-card" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1%" >
 <div class="w3-row">
     
     
     
     <h1 align=center class="w3-">EXTRA   INFORMATION</h1>
     
     <div  class="w3-half">
        <table class="w3-table-all">
            
            <tr>
                <td colspan="2"><h3>Petitioner</h3></td>
            </tr>    
            
            <tr>
               <td><label>Passport number </label></td>
               <td><input name="pno"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Nationality</label></td>
               <td><input name="nationality"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Occupation</label></td>
               <td><input name="occupation"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Pan Number</label></td>
               <td><input name="pno"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Contact Number</label></td>
               <td><input name="cno"  class="w3-input"/></td>
          </tr>
             <tr>
               <td><label>Fax Number</label></td>
               <td><input name="fno"  class="w3-input"/></td>
          </tr>
            
           
            
        </table>
     </div> 
     
     <div  class="w3-half">
        <table class="w3-table-all">
            
            <tr>
                <td colspan="2"><h3>Respondent</h3></td>
            </tr>    
            
            <tr>
               <td><label>Passport number </label></td>
               <td><input name="pno1"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Nationality</label></td>
               <td><input name="nationality1"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Occupation</label></td>
               <td><input name="occupation1"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Pan Number</label></td>
               <td><input name="pno1"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Contact Number</label></td>
               <td><input name="cno1"  class="w3-input"/></td>
          </tr>
             <tr>
               <td><label>Fax Number</label></td>
               <td><input name="fno1"  class="w3-input"/></td>
          </tr>
            
           
            
        </table>
     </div> 
     
  
</div>
    <div style="margin-top:1%">
        <a href="#respondent" style="margin-left:55%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Previous</a>
     <a href="#act_section" style="float:right;margin-right:5%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Next</a>
         </div>
</div>
</section>


<section id="act_section"  style="margin-top:15%">
<div class="w3-card" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1%" >
 <div class="w3-row">  
     
     <h1 align=center class="w3-">ACT SECTION</h1>
     
     <div class=w3-half>
        <table class="w3-table-all">
           <tr>
               <td><label>ACT </label></td>
               <td><input name=""  class="w3-input"/></td>
          </tr> 
           
            
        </table>
     </div> 
     
     <div class=w3-half>
        <table class="w3-table-all">
           <tr>
               <td><label>Act Section</label></td>
               <td><input name=""  class="w3-input"/></td>
          </tr> 
            
        </table>
     </div> 
     
</div>
<div style="margin-top:1%">
        <a href="#Extra_information" style="margin-left:55%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Previous</a>
       <a href="#Extra_party" style="float:right;margin-right:5%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Next</a>
         </div>
    </div>
</section>


<section id="Extra_party" style="margin-top:45%">
<div class="w3-card" style="margin-left:17.7%;margin-right:17.7%;margin-top:1%;margin-bottom:1%" >
 <div class="w3-row">  
     
     <h1 align=center class="w3-">EXTRA PARTY    FORM</h1>
     
     <div class=w3-half>
         
        <table class="w3-table-all">
           <tr>
               <td><label>Name</label></td>
               <td><input name="name"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Relation</label></td>
               <td><input name="relation"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Relavtive name</label></td>
               <td><input name="rname"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Date of Birth</label></td>
               <td><input name="dob" type="date"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Age</label></td>
               <td><input name="age" type="number" class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Gender</label></td>
                <td><input type="radio" value="male" name="gender"/>male
                    <input type="radio" value="female" name="gender"/>female
                    <input  type="radio" value="other" name="gender"/>other</td>
          </tr>
            
            <tr>
               <td><label>Religion</label></td>
               <td><input name="religion"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Caste</label></td>
               <td><input name="caste"  class="w3-input"/></td>
          </tr>
            
        </table>
     </div> 
     
     <div class=w3-half>
        <table class="w3-table-all">
            <tr>
               <td><label>Email</label></td>
               <td><input name="email" type="email" class="w3-input"/></td>
          </tr>
           <tr>
               <td><label>Mobile No.</label></td>
               <td><input name="mobno" type="number"  class="w3-input"/></td>
          </tr> 
            <tr>
               <td><label>Address</label></td>
               <td><textarea name="address"  class="w3-input"></textarea></td>
          </tr>
            <tr>
               <td><label>District</label></td>
               <td><input name="district"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Town</label></td>
               <td><input name="town"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>Ward</label></td>
               <td><input name="ward"  class="w3-input"/></td>
          </tr>
            
            <tr>
               <td><label>Village</label></td>
               <td><input name="village"  class="w3-input"/></td>
          </tr>
            <tr>
               <td><label>pin code</label></td>
               <td><input name="pincode"  class="w3-input"/></td>
          </tr>
        </table>
     </div>
     
</div>
    
    <div style="margin-top:1%">
        <a href="#act_section" style="margin-left:75%;border-radius:10%;width:150px"  class="w3-btn w3-green" >Previous</a>
         </div>
</div>
</section>

    <a href="#petitioner" style="margin-left:45%;border-radius:5%;width:170px;margin-bottom:5%;margin-top:5%" type="submit" class="w3-btn w3-green" >Register</a>



