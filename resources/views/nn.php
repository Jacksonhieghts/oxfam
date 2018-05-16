<!DOCTYPE html>
<html xmlns>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gender based violence</title>
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
                    <a class="active-menu"  href="<?php echo url('casesummary') ?>"><i class="fa fa-edit fa-3x"></i> Case Recording Tool</a>
                    </li>
                   <li>
                   <a href="<?php echo url('training') ?>"><i class="fa fa-edit fa-3x"></i> Training Monitoring form</a>
                    </li>
                    <li>
                    <a href="<?php echo url('awareness') ?>"><i class="fa fa-edit fa-3x"></i> Awareness Campaign Form </a>
                   
                    </li>
						   <li  >
                           <a href="<?php echo url('schooldata') ?>"><i class="fa fa-edit fa-3x"></i> School Data Form</a>
                    </li>	
                      <li>
                      <a href="<?php echo url('girlsReadmition') ?>"><i class="fa fa-edit fa-3x"></i>Girl Readmission Form</a>
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
                     <h3>CASE RECORDING TOOL</h3>   
                     <h5>Welcome {{Auth::user()->name}} </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
<form action="/casesummary" method ="post">
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
                    <div class="panel panel-default">
                        
                                                  <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                       
                                    </thead>
                                    <tbody>   
                                   
                                     
                                    <!----- Last Name ---------------------------------------------------------->
                                    <tr>
                                    <td align="right">Case Number</td>
                                    <td><input type="text" name="casenumber" maxlength="30" size="25"/>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td align="right"> Type of a case:</td>
                                    <td><select name="casetype" style="width: 300px;" class="form-control">
                                    <option value="-1" selected>Select case type</option>
                                    <option value="1">Rape</option>
                                    <option value="2">Defilement</option>
                                    <option value="3">Child Labour</option>
                                    </select></td>
                                    </tr>
                                    <tr>
                                    <td align="right">Environment:</td>
                                    <td><select name="environment" style="width: 300px;" class="form-control">
                                    <option value="-1" selected>Select environment</option>
                                    <option value="1">Home</option>
                                    <option value="2">School</option>
                                    <option value="3">Market</option>
                                    </select></td>
                                    </tr>
                                   
                                    <tr>
                                    <td align="right">Survivor Gender:</td>
                                    <td>
                                   <input type="radio" name="SGender" value="1" /> Male <br>
                                     <input type="radio" name="SGender" value="2" /> Female
                                    </td>
                                    </tr>
                                    <tr>
                                    <td align="right">Survivor age group:</td>
                                    <td>
                                   <input type="radio" name="Agegroup" value="1" /> 10-15 <br>
                                     <input type="radio" name="Agegroup" value="2" /> 15-20<br>
                                     <input type="radio" name="Agegroup" value="3" /> 20-25
                                    </td>
                                    </tr>
                                    <tr>
                                    <td align="right">Perpetrator Gender:</td>
                                    <td>
                                   <input type="radio" name="PGender" value="1" /> Male <br>
                                     <input type="radio" name="PGender" value="2" /> Female
                                    </td>
                                    </tr>
                                    <tr>                                                                                                     
                                    <td align="right">Institution Handling case:</td>
                                    <td><select name="institution" style="width: 300px;" class="form-control"> 
                                    <option value="-1" selected>Select institution </option>
                                    <option value="1">Police</option>
                                    <option value="2">Hospital</option>
                                    <option value="3">Court</option>
                                    </select></td>
                                    </tr>
                                    <tr>                                                                                                     
                                    <td align="right"><b>Case Status:</b></td>
                                    <td><select name="casestatus" style="width: 300px;" class="form-control"> 
                                    <option value="-1" selected>Select status </option>
                                    <option value="1">Resolved</option>
                                    <option value="2">Refered</option>
                                    <option value="3">Pending</option>
                                    </select></td>
                                    </tr>
                                    
                                    <tr>
                                    <td align="right"><b>Status Date:</b></td>
                                    <td>
                                    <input type="text" name="Statusdate" maxlength="10" size="10"/>
                                    </td>
                                    </tr> 
                                   
                                    </tbody>
                                </table>
                         
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
            
        </div>
        <div id="Submitdata" style="position: relative; left: 55%;">
<input type="submit" value="Submit Form" class="btn btn-danger square-btn-adjust" />
<input type="reset" value="reset" class= "btn btn-danger square-btn-adjust">
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
    
   
</body>
</html>
