<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<style type="text/css">
h6{
  font-family: Calibri; 
  font-size: 20pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}
h2{
  font-family: Calibri; 
  font-size: 12pt;         
  font-style: normal; 
  font-weight: bold; 
  color:SlateBlue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: Calibri; 
  color:blue; 
  font-size: 11pt; 
  font-style: normal;
  font-weight: bold;
  text-align:; 

  border-collapse: collapse; 
  border: 1px solid navy
}
table.inner{
  border: 0px
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #008000;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
</style>
<title>Student Registration Form</title>

</head>
 
<body>



<input type="hidden" name="_token" value="{{ csrf_token() }}" >



<h5 align="center">SESSION/CLUB EVALUATION FORM</h5>

<table align="center" cellpadding = "3" Border ="13" Bordercolor "White">
 
<tr>
<H5></H5>
<td align="center" bgcolor="#006400"><b><font color="#fff">Name of Organisation</font></b></td>
<td align="center" bgcolor="#006400"><b><font color="#fff">District Name</font></b></td>
<td align="center" bgcolor="#006400"><b><font color="#fff">Zone Name</font></b></td>
<td align="center" bgcolor="#006400"><b><font color="#fff">School Name</font></b></td>
<td align="center" bgcolor="#006400"><b><font color="#fff">Club</font></b></td>
<td align="center" bgcolor="#006400"><b><font color="#fff">Reporting Month</font></b></td>
<td align="center" bgcolor="#006400"><b><font color="#fff">Reporting Year</font></b></td>
</tr>
 
<tr>
<td><select name="organisationName" style="width: 146px;">
<option value="-1" selected>Select organisation</option>
<option value="1">Comic</option>
<option value="2">ISEM</option>
<option value="3">PD</option>
</select></td>
<td><select name="DistrictCode" style="width: 137px;">
<option value="-1" selected>Select district</option>
<option value="3">Mzimba</option>
<option value="4">Dowa</option>
<option value="5">Phalombe</option>
<option value="6">Lilongwe</option>
</select></td>
<td><select name="ZoneCode" style="width: 134px;">
<option value="-1" selected>Select zone</option>
<option value="12">Zone A</option>
<option value="13">Zone B</option>
<option value="14">Zone C</option>
<option value="15">Zone D</option>
</select></td>
<td><select name="schoolCode" style="width: 134px;">
<option value="-1" selected>Select school</option>
<option value="50006">School A</option>
<option value="50032">School B</option>
<option value="40005">School C</option>
<option value="56000">School D</option>
</select></td>
+
<td><select name="clubCode" style="width: 134px;">
<option value="-1" selected>Select club</option>
<option value="50006">Club A</option>
<option value="50032">Club B</option>
<option value="40005">Club C</option>
<option value="56000">Club D</option>
</td>
<td><select name="ReportingMonth" style="width: 130px;">
<option value="-1" selected>Select month</option>
<option value="1">Jan</option>
<option value="2">Feb</option>
<option value='3'>Mar</option>
<option value="4">Apr</option>
<option value="5">May</option>
<option value="6">Jun</option>
<option value="7">Jul</option>
<option value="8">Aug</option>
<option value="9">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select></td>
<td><select name="ReportingYear" style="width: 130px;">
<option value="-1" selected>Select year</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>>
</select></td>
</tr>
 

 

</table>
<table align="center" cellpadding = "10" width="54%"  border = 0>
 
<!-- First Name -->
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
  <td td align="right">Name of Facilitator:</td>
  <td><input type="text" name="Facilitator_Name" maxlength="15"  size="10" /></td>
  <td td align="right">Type of training or meeting:</td>
  <td><select name="Training_Type" style="width: 130px;">
    <option value="0" selected>Training 1</option>
    <option value="1">Training 2</option>
    <option value="2">Training 3</option>
    <option value="3">Training 4</option>
    <option value="4">Training 5</option>
    <option value="5">Training 6</option>
    <option value="6">Training 7</option>
  </select></td>
</tr>
</table >
<div>
&nbsp
</div>
<table align="center" cellpadding = "10" width="54%"  border = 1>
<tr>
  <td>&nbsp</td>
  <td>Male</td>
  <td>Female</td>
  <td>&nbsp</td>
</tr>
<tr>
  <td align = "right">&nbsp</td>
  <td><input type="text" name="Male_Attendance" maxlength="15"  size="10" /></td>
  <td><input type="text" name="Female_Attendance" maxlength="15"  size="10" /></td>
  <td>&nbsp</td>
</tr>
</table>
<div>
&nbsp
</div>


<div align = "center">2.Quality Assurance</div>
<table align="center" cellpadding = "10" width="54%"  border = 0>
<tr>
<td>Points to Consider</td>
<td>Rating</td>
</tr>
<tr>
<td>Were the aims achieved?</td>
<td><select name="Achieved_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>Were the aims project relevant</td>
<td><select name="Relevant_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>Was Proper Planning done prior to the training or meeting?</td>
<td><select name="Planning_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>Was the session participatory?</td>
<td><select name="Participatory_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>were participants able to reflect on their own learning</td>
<td><select name="Reflect_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>Was feedback collected from participants?</td>
<td><select name="Feedback_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>Was time observed by the participants?</td>
<td><select name="Time_observed_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>Was the facilitator gender and vulnerability sensitive?</td>
<td><select name="Gender_Vulnerability_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>
<tr>
<td>did the facilitator organise relevant and adequate resources for the training/ meeting?</td>
<td><select name="resources_rating" style="width: 130px;">
    <option value="0" selected>No</option>
    <option value="1">Yes</option>
    </select></td>
</tr>

</table>
<div align = "center"><input type="submit" value="Submit Form" class="btn btn-success" /> &nbsp
<button type="reset" value="reset" class="btn btn-success">Reset</button> </div>

</body>
</html>