<!DOCTYPE html>
<html xmlns>
<head>
<style>
* 
#regForm {
  background-color: #ffffff;
 
}

{
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 25px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
.form-style-1 {
    margin:10px auto;
    max-width: 400px;
    padding: 20px 12px 10px 20px;
    font: 16px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}
.form-style-1 li {
    padding: 0;
    display: block;
    list-style: none;
    margin: 10px 0 0 0;
}
.form-style-1 label{
    margin:0 0 3px 0;
    padding:0px;
    display:block;
    font-weight: bold;
}
.form-style-1 input[type=text], 
.form-style-1 input[type=date],
.form-style-1 input[type=datetime],
.form-style-1 input[type=number],
.form-style-1 input[type=search],
.form-style-1 input[type=time],
.form-style-1 input[type=url],
.form-style-1 input[type=email],
textarea, 
select{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    border:1px solid #BEBEBE;
    padding: 7px;
    margin:0px;
    -webkit-transition: all 0.30s ease-in-out;
    -moz-transition: all 0.30s ease-in-out;
    -ms-transition: all 0.30s ease-in-out;
    -o-transition: all 0.30s ease-in-out;
    outline: none;  
}
.form-style-1 input[type=text]:focus, 
.form-style-1 input[type=date]:focus,
.form-style-1 input[type=datetime]:focus,
.form-style-1 input[type=number]:focus,
.form-style-1 input[type=search]:focus,
.form-style-1 input[type=time]:focus,
.form-style-1 input[type=url]:focus,
.form-style-1 input[type=email]:focus,
.form-style-1 textarea:focus, 
.form-style-1 select:focus{
    -moz-box-shadow: 0 0 8px #88D5E9;
    -webkit-box-shadow: 0 0 8px #88D5E9;
    box-shadow: 0 0 8px #88D5E9;
    border: 1px solid #88D5E9;
}
.form-style-1 .field-divided{
    width: 49%;
}

.form-style-1 .field-long{
    width: 150%;
}
.form-style-1 .field-select{
    width: 100%;
}
.form-style-1 .field-textarea{
    height: 100px;
}
.form-style-1 input[type=submit], .form-style-1 input[type=button]{
    background: #4B99AD;
    padding: 8px 15px 8px 15px;
    border: none;
    color: #fff;
}
.form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
    background: #4691A4;
    box-shadow:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
}
.form-style-1 .required{
    color:red;
}
</style>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Case Summary Report</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   
     <!-- TABLE STYLES-->
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo url('new') ?>">Oxfam Malawi</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 17 Jan 2018 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                    <a href="<?php echo url('casesummary') ?>"><i class="fa fa-edit fa-3x"></i> Case Recording Tool</a>
                    </li>
                   <li>
                   <a href="<?php echo url('training') ?>"><i class="fa fa-edit fa-3x"></i> Training Monitoring form</a>
                    </li>
                    <li  >
                           <a href="<?php echo url('awareness') ?>"><i class="fa fa-edit fa-3x"></i> Awareness Campaign Form</a>
                    </li>	
                    <li>
                    <a class="active-menu"  href="<?php echo url('schooldata') ?>"><i class="fa fa-edit fa-3x"></i>School Data Form</a>
                    </li>
						   
                      <li>
                      <a href="<?php echo url('girlsReadmition') ?>"><i class="fa fa-edit fa-3x"></i> Girl Readmission Form</a>
                    </li>
                    <li  >
                    <a href="<?php echo url('fdgkiichecklist') ?>"><i class="fa fa-edit fa-3x"></i> FGD and KII Checklist</a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a   href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h3>SCHOOL REPORTING TOOL</h3>   
                     <h5>Welcome {{Auth::user()->name}} </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
<form id="regForm" action="/insert2" method ="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" >
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <B>IMPORTANT DETAILS:</B>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Organisation Name</th>
                                            <th>District Name</th>
                                            <th>Zone Name</th>
                                            <th>School Name</th>
                                            <th>Reporting Month</th>
                                            <th>Reporting Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                        <td><select name="orgnisation" style="width: 170px;" class="form-control">
                                        <option value="-1" selected>Select organisation</option>
                                        <option value="1">Comic</option>
                                        <option value="2">ISEM</option>
                                        <option value="3">PD</option>
                                        </select></td>
                                        <td><select name="district" style="width: 150px;" class="form-control">
                                        <option value="-1" selected>Select district</option>
                                        <option value="3">Mzimba</option>
                                        <option value="4">Dowa</option>
                                        <option value="5">Phalombe</option>
                                        <option value="6">Lilongwe</option>
                                        </select></td>
                                        <td><select name="zone" style="width: 150px;" class="form-control">
                                        <option value="-1" selected>Select zone</option>
                                        <option value="12">Zone A</option>
                                        <option value="13">Zone B</option>
                                        <option value="14">Zone C</option>
                                        <option value="15">Zone D</option>
                                        </select></td>
                                        <td><select name="school" style="width: 150px;" class="form-control">
                                        <option value="-1" selected>Select school</option>
                                        <option value="50006">School A</option>
                                        <option value="50032">School B</option>
                                        <option value="40005">School C</option>
                                        <option value="56000">School D</option>
                                        </select></td>
                                        
                                        <td><select name="month" style="width: 140px;" class="form-control">
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
                                        <td><select name="year" style="width: 130px;" class="form-control">
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
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                    <!--    Bordered Table  -->
                    
                                                

<!-- One "tab" for each step in the form: -->
<div class="tab"><h4><u><b>STUDENT ENROLMENT : (1 - 7)</u></h4>
  
  <ul class="form-style-1">
   
    <li>
        <label>1. # of female students enrolled <span class="required">*</span></label>
        <input type="number" name="FemaleEnrolment" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>2. # of OV students enrolled  <span class="required">*</span></label>
        <input type="number" name="OVenrolment" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>3. # of OV students completed school <span class="required">*</span></label>
        <input type="number" name="NumberOVcomplete" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>4. # of female students completed school  <span class="required">*</span></label>
        <input type="number" name="Femalecomplete" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>5. # of Form 4 students enrolled <span class="required">*</span></label>
        <input type="number" name="Form4Enrolment" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>6. # of female students that sat for MSCE <span class="required">*</span></label>
        <input type="number" name="FemaleMSCE" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>7. # of OV students that sat for MSCE <span class="required">*</span></label>
        <input type="number" name="OvMSCE" class="field-long" oninput="this.className = ''"/>
    </li>  
</ul>
</div>

<div class="tab"><h4><u><b>STUDENT ENROLMENT CON'T  : (8 - 14)</u></h4>
   <ul class="form-style-1">
   
   <li>
        <label>8. # of OV students supporting bursaries: <span class="required">*</span></label>
        <input type="number" name="OvBursary" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>9. # of female students supporting bursaries<span class="required">*</span></label>
        <input type="number" name="FemaleBursary" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>10. Do you have a case management? <span class="required"></span></label>
        <select name="CaseManage" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
    </li>
    <li>
        <label>11. # of peer support groups/Clubs<span class="required">*</span></label>
        <input type="number" name="schoolPeerClubs" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>12. Do you have a counselling centre? <span class="required"></span></label>
        <select name="CounselCentre" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
    </li>
    <li>
        <label>13. # of girls prevented from dropping-out <span class="required">*</span></label>
        <input type="number" name="GirlNotDropped" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>14. #  of girls returned after child birth  <span class="required">*</span></label>
        <input type="number" name="GirlReturn" class="field-long" oninput="this.className = ''"/>
    </li>
</ul>
</div>

<div class="tab"><h4><u><b>TEACHER AND SCHOOL DETAILS: </u></h4>
<ul class="form-style-1">
<li>
        <label>16. # of teachers in the school:<span class="required">*</span></label>
        <input type="number" name="TeacherNumber" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>17. # of qualified teachers in the school: <span class="required">*</span></label>
        <input type="number" name="QulifiedTeacherNumber" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>18. Total Number of Students: <span class="required">*</span></label>
        <input type="number" name="StudentsNo" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>19. # of classrooms: <span class="required">*</span></label>
        <input type="number" name="ClassroomNumber" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>20. School have enough learning materials? <span class="required"></span></label>
        <select name="LearnMaterials" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
    </li>
    <li>
        <label>21. school have enough teaching materials? <span class="required"></span></label>
        <select name="TeachMaterials" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
    </li>
    <li>
        <label>22. School have enough facilities? <span class="required"></span></label>
        <select name="Facilities" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
    </li>
   
</div>

<div class="tab"><h4><u><b>SCHOOL STRUCTURES (23-29) </u></h4>
<ul class="form-style-1">
<li>
        <label>23.	# of mother groups  <span class="required">*</span></label>
        <input type="number" name="MotherGroupNo" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>24.	# of Male Champions  <span class="required">*</span></label>
        <input type="number" name="MaleChampionNo" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>25.	# of counsellors   <span class="required">*</span></label>
        <input type="number" name="CounsellorNo" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>26. # of SGBV Clubs   <span class="required">*</span></label>
        <input type="number" name="SGBVClubNumber" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>27. <u>Male</u> SGBV Club Students #  <span class="required">*</span></label>
        <input type="number" name="SGBVstudentClubMale" class="field-long" oninput="this.className = ''"/>
    </li>
    <li>
        <label>28. <u>Female</u> SGBV Club Students #  <span class="required">*</span></label>
        <input type="number" name="SGBVstudentClubFemale" class="field-long" oninput="this.className = ''"/>
    </li>
    
    <li>
        <label>29.	Does School have SMC? <span class="required"></span></label>
        <select name="SMCYesNo" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
    </li>
   

   
</div>
<div class="tab"><h4><u><b>SCHOOL STRUCTURES CO'NT (30-36) </u></h4>
<ul class="form-style-1">
<li>
    <label>30.	Is School SMC active? <span class="required"></span></label>
    <select name="SMCActiveYesNo" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
</li>
<li>
    <label>31. Does School have PTA? <span class="required"></span></label>
    <select name="PTAYesNo" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
</li>
<li>
    <label>32.	Is School PTA active? <span class="required"></span></label>
    <select name="PTAActiveYesNo" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
</li>
<li>
    <label>33.	# of extra-curriculum clubs <span class="required">*</span></label>
    <input type="number" name="ETRAClubsNo" class="field-long" oninput="this.className = ''"/>
</li>
<li>
    <label>34.	# of VDCs engaged in district and CDSS <span class="required">*</span></label>
    <input type="number" name="VDCsEngageCDSSNo" class="field-long" oninput="this.className = ''"/>
</li>
<li>
    <label>35.	# of ADCs engaged in district and CDSS <span class="required">*</span></label>
    <input type="number" name="ADCsEngageCDSSNo" class="field-long" oninput="this.className = ''"/>
</li>
<li>
    <label>36.	School has Teacher Code of Conduct?<span class="required"></span></label>
    <select name="ConductCodeYesNo" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
</li> 
</div>
<div class="tab"><h4><u><b>SCHOOL STRUCTURES CO'NT (37-41) </u></h4>
<ul class="form-style-1">
<li>
    <label>37.	School implements Code of Conduct?<span class="required"></span></label>
    <select name="ConductCodeImplementYesNo" style="width: 370px;" class="field-long" oninput="this.className = ''"/>
                                        <option value="-1" selected>YES/NO</option>
                                        <option value="1">YES</option>
                                        <option value="0">NO</option>
                                        </select>
</li>
<li>
        <label>38. # of <u>Male</u> teachers aware of SGBV?  <span class="required">*</span></label>
        <input type="number" name="TeacherAwareMale" class="field-long" oninput="this.className = ''"/>
</li>
<li>
        <label>39. # of <u>Female</u> teachers aware of SGBV?  <span class="required">*</span></label>
        <input type="number" name="TeacherAwareFemale" class="field-long" oninput="this.className = ''"/>
</li>
<li>
        <label>40. # of <u>Male</u> workers aware of SGBV?  <span class="required">*</span></label>
        <input type="number" name="SchoolWorkerAwareMale" class="field-long" oninput="this.className = ''"/>
</li>
<li>
        <label>41. # of <u>Female</u> workers aware of SGBV?  <span class="required">*</span></label>
        <input type="number" name="SchoolWorkerAwareFemale" class="field-long" oninput="this.className = ''"/>
</li>
   
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  
</div>

</form>
               
        </div>
            
    </div>
    
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
    <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>  
</body>
</html>
