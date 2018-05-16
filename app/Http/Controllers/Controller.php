<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function casesummary(Request $req)
    {
       
        $orgnisation = $req->input('orgnisation');
        $district = $req->input('district');
        $zone = $req->input('zone');
        $school = $req->input('school');
        $month = $req->input('month');
        $year = $req->input('year');
        $casenumber = $req->input('casenumber');
        $casetype = $req->input('casetype');
        $environment = $req->input('environment');
        $SGender = $req->input('SGender');
        $Agegroup = $req->input('Agegroup');
        $PGender = $req->input('PGender');        
        $institution = $req->input('institution'); 
        $casestatus = $req->input('casestatus');
        $Statusdate = $req->input('feedbackdate');
      
    
        $data = array("organisationName"=>$orgnisation, "DistrictCode" =>$district,"ZoneCode"=>$zone,"schoolCode"=>$school,
                    "reporting_Month"=>$month,"ReportingYear"=>$year, "casenumber"=>$casenumber,"casetype"=>$casetype,"environment"=>$environment,
                     "SGender"=>$SGender,"Agegroup"=>$Agegroup,"PGender"=>$PGender,"institution"=>$institution,
                     "casestatus"=>$casestatus,"Statusdate"=>$Statusdate
                    
                    );

    DB::table('casesummary')->insert($data);

    return back();

    }

    function insert2(Request $req2)
    {
       
        $orgnisation = $req2->input('orgnisation');
        $district = $req2->input('district');
        $zone = $req2->input('zone');
        $school = $req2->input('school');
        $month = $req2->input('month');
        $year = $req2->input('year');
       $FemaleEnrolment = $req2->input('FemaleEnrolment');
        $OVenrolment = $req2->input('OVenrolment');
        $NumberOVcomplete = $req2->input('NumberOVcomplete');
        $Femalecomplete = $req2->input('Femalecomplete');
        $Form4Enrolment = $req2->input('Form4Enrolment');
        $FemaleMSCE = $req2->input('FemaleMSCE');
        $OvMSCE = $req2->input('OvMSCE');
        $OvBursary = $req2->input('OvBursary');
        $FemaleBursary = $req2->input('FemaleBursary');
        $CaseManage = $req2->input('CaseManage');
        $schoolPeerClubs = $req2->input('schoolPeerClubs');
        $CounselCentre = $req2->input('CounselCentre');
        $GirlNotDropped = $req2->input('GirlNotDropped');
        $GirlReturn = $req2->input('GirlReturn');
        $TeacherNumber = $req2->input('TeacherNumber');
        $QulifiedTeacherNumber = $req2->input('QulifiedTeacherNumber');
        $StudentsNo = $req2->input('StudentsNo');
        $ClassroomNumber = $req2->input('ClassroomNumber');
        $LearnMaterials = $req2->input('LearnMaterials');
        $TeachMaterials = $req2->input('TeachMaterials');
        $TeachMaterials = $req2->input('Facilities');
        $MotherGroupNo = $req2->input('MotherGroupNo');
        $MaleChampionNo = $req2->input('MaleChampionNo');
        $CounsellorNo = $req2->input('CounsellorNo');
        $SGBVClubNumber = $req2->input('SGBVClubNumber');
        $SGBVstudentClubMale = $req2->input('SGBVstudentClubMale');
        $SGBVstudentClubFemale = $req2->input('SGBVstudentClubFemale');
        $SMCYesNo = $req2->input('SMCYesNo');
        $SMCActiveYesNo = $req2->input('SMCActiveYesNo');
        $PTAYesNo = $req2->input('PTAYesNo');
        $PTAActiveYesNo = $req2->input('PTAActiveYesNo');
        $ETRAClubsNo = $req2->input('ETRAClubsNo');
        $VDCsEngageCDSSNo = $req2->input('VDCsEngageCDSSNo');
        $ADCsEngageCDSSNo = $req2->input('ADCsEngageCDSSNo');
        $ConductCodeYesNo = $req2->input('ConductCodeYesNo');
        $ConductCodeImplementYesNo = $req2->input('ConductCodeImplementYesNo');
        $TeacherAwareMale = $req2->input('TeacherAwareMale');
        $TeacherAwareFemale = $req2->input('TeacherAwareFemale');
        $SchoolWorkerAwareMale = $req2->input('SchoolWorkerAwareMale');
        $SchoolWorkerAwareFemale = $req2->input('SchoolWorkerAwareFemale');
              
    $data2 = array("organisationName"=>$orgnisation, "DistrictCode" =>$district,"ZoneCode"=>$zone,"schoolCode"=>$school,"ReportingMonth"=>$month
                   ,"ReportingYear"=>$year,"FemaleEnrolment"=>$FemaleEnrolment,"OV_Enrolment"=>$OVenrolment, "OV_complete"=>$NumberOVcomplete
                   ,"Femalecomplete"=>$Femalecomplete, "Form4_Enrolment" =>$Form4Enrolment,"Female_MSCE"=>$FemaleMSCE,"OV_MSCE"=>$OvMSCE
                   ,"OV_Bursary"=>$OvBursary,"Female_Bursary"=>$FemaleBursary, "CaseManage" =>$CaseManage,"schoolPeer_Clubs"=>$schoolPeerClubs
                   ,"Counsel_Centre"=>$CounselCentre,"Girl_Not_Dropped"=>$GirlNotDropped,"ChildBirth_Return"=>$GirlReturn
                   , "TeacherNumber" =>$TeacherNumber,"TeacherQualified"=>$QulifiedTeacherNumber,"SchoolEnrolment"=>$StudentsNo
                   ,"ClassroomNumber"=>$ClassroomNumber, "LearnMaterialYesNo" =>$LearnMaterials,"TeachMaterialYesNo"=>$TeachMaterials,"FacilitiesYesNo"=>$TeachMaterials
                   , "MotherGroupNo" =>$MotherGroupNo,"MaleChampionNo"=>$MaleChampionNo,"CounsellorNo"=>$CounsellorNo,"SGBVClubNumber"=>$SGBVClubNumber
                   ,"SGBVstudentClubMale"=>$SGBVstudentClubMale, "SGBVstudentClubFemale" =>$SGBVstudentClubFemale,"SMCYesNo"=>$SMCYesNo
                   ,"SMCActiveYesNo"=>$SMCActiveYesNo,"PTAYesNo"=>$PTAYesNo,"PTAActiveYesNo"=>$PTAActiveYesNo, "ETRAClubsNo" =>$ETRAClubsNo
                   ,"VDCsEngageCDSSNo"=>$VDCsEngageCDSSNo,"ADCsEngageCDSSNo"=>$ADCsEngageCDSSNo,"ConductCodeYesNo"=>$ConductCodeYesNo
                   ,"ConductCodeImplementYesNo"=>$ConductCodeImplementYesNo, "TeacherAwareMale" =>$TeacherAwareMale
                   ,"TeacherAwareFemale"=>$TeacherAwareFemale,"SchoolWorkerAwareMale"=>$SchoolWorkerAwareMale
                   ,"SchoolWorkerAwareFemale"=>$SchoolWorkerAwareFemale
                
                );
                   

    DB::table('schooldata')->insert($data2);

    return back();

    }

    function insertmonitor(Request $req2)
    {
       
        $orgnisation = $req2->input('orgnisation');
        $district = $req2->input('district');
        $zone = $req2->input('zone');
        $school = $req2->input('school');
        $club = $req2->input('club');
        $month = $req2->input('month');
        $year = $req2->input('year');      
        $patron = $req2->input('patron');
        $matron = $req2->input('matron');
        $date = $req2->input('date');
        $maleweek1 = $req2->input('maleweek1');
        $maleweek2 = $req2->input('maleweek2');
        $maleweek3 = $req2->input('maleweek3');
        $maleweek4 = $req2->input('maleweek4');
        $maleweek5 = $req2->input('maleweek5');
        $femaleweek1 = $req2->input('femaleweek1');
        $femaleweek2 = $req2->input('femaleweek2');
        $femaleweek3 = $req2->input('femaleweek3');
        $femaleweek4 = $req2->input('femaleweek4');
        $femaleweek5 = $req2->input('femaleweek5');
        $malemonthTotal = $req2->input('malemonthTotal');
        $femalemonthTotal = $req2->input('femalemonthTotal');
        $week1topic = $req2->input('week1topic');
        $week2topic = $req2->input('week2topic');
        $week3topic = $req2->input('week3topic');
        $week4topic = $req2->input('week4topic');
        $week5topic = $req2->input('week5topic');

        $SchoolSuccess = $req2->input('SchoolSuccess');
        $PatronsRecommendations = $req2->input('PatronsRecommendations');

        $mothergroup = $req2->input('mothergroup');
        $fathergroup = $req2->input('fathergroup');
        $humanrights = $req2->input('humanrights');
        $childprotection = $req2->input('childprotection');
        $HSAs = $req2->input('HSAs');
        $MaleChampions = $req2->input('MaleChampions');
        $court = $req2->input('court');
        $other = $req2->input('other');

        $CommunityStructuresTogether = $req2->input('CommunityStructuresTogether');
        $CommunitySuccess = $req2->input('CommunitySuccess');
        $challenge = $req2->input('challenge');
        $Recommendations = $req2->input('Recommendations');
        $Comments = $req2->input('Comments');
        $nextvisitdate = $req2->input('nextvisitdate');
    
    $data2 = array("organisationName"=>$orgnisation, "DistrictCode" =>$district,"ZoneCode"=>$zone,"schoolCode"=>$school,
                  "clubCode"=>$club,"ReportingMonth"=>$month,"ReportingYear"=>$year,"Patron_Name"=>$patron,"Matron_Name"=>$matron,
                  "Date"=>$date, "Male_Attendance_Week1"=>$maleweek1,"Male_Attendance_Week2"=>$maleweek2,"Male_Attendance_Week3"=>$maleweek3,
                  "Male_Attendance_Week4"=>$maleweek4,"Male_Attendance_Week5"=>$maleweek5,"Female_Attendance_Week1"=>$femaleweek1,"Female_Attendance_Week2"=>$femaleweek2,
                  "Female_Attendance_Week3"=>$femaleweek3,"Female_Attendance_Week4"=>$femaleweek4,"Female_Attendance_Week5"=>$femaleweek5,
                  "Monthly_Total_Male"=>$malemonthTotal,"Monthly_Total_Female"=>$femalemonthTotal,"Week1Topic"=>$week1topic,
                  "Week2Topic"=>$week2topic,"Week3Topic"=>$week3topic,"Week4Topic"=>$week4topic,"Week5Topic"=>$week5topic,
                  "SchoolSuccess"=>$SchoolSuccess,"Patrons_Recommendations"=>$PatronsRecommendations,"MotherGroups"=>$mothergroup,
                  "FatherGroups"=>$fathergroup,"HumanRightsDefenders"=>$humanrights,"ChildProtectionTeams"=>$childprotection,"HSAs"=>$HSAs,
                  "MaleChampions"=>$MaleChampions,"Court"=>$court,"other"=>$other,"CommunityStructuresTogether"=>$CommunityStructuresTogether,
                  "CommunitySuccess"=>$CommunitySuccess,"ChallengesFaced"=>$challenge,"Recommendations"=>$Recommendations,
                  "GeneralComments"=>$Comments,"NextVisit"=>$nextvisitdate);

    DB::table('school_community_monitoring_form_5')->insert($data2);

    return back();

    }
    function insertawareness(Request $req)
    {
       
        $orgnisation = $req->input('orgnisation');
        $district = $req->input('district');
        $zone = $req->input('zone');
        $school = $req->input('school');
        $month = $req->input('month');
        $year = $req->input('year');
        $GenderAwareness = $req->input('GenderAwareness');
        $Readmission = $req->input('Readmission');
        $ProcessAndProcedures = $req->input('ProcessAndProcedures');
        $SGBV = $req->input('SGBV');
        $SHRR = $req->input('SHRR');
        $HumanRights = $req->input('HumanRights'); 
        $GirlsEducation = $req->input('GirlsEducation');
        $AdultsMale = $req->input('AdultsMale');
        $AdultsFemale = $req->input('AdultsFemale');
        $YouthsMale = $req->input('YouthsMale');
        $CaseFollowup = $req->input('CaseFollowup');
        
      
     

        $data = array("organisationName"=>$orgnisation, "DistrictCode" =>$district,"ZoneCode"=>$zone,"schoolCode"=>$school,
                    "ReportingMonth"=>$month,"ReportingYear"=>$year, "ProcessAndProcedures"=>$ProcessAndProcedures,"SGBV"=>$SGBV,"SHRR"=>$SHRR,
                     "HumanRights"=>$HumanRights,"GenderAwareness"=>$GenderAwareness,"Readmission"=>$Readmission,"GirlsEducation"=>$GirlsEducation,
                     "AdultsMale"=>$AdultsMale,"AdultsFemale"=>$AdultsFemale,"YouthsMale"=>$YouthsMale,"CaseFollowup"=>$CaseFollowup);

    DB::table('awarenesscampaigns')->insert($data);

    return back();

    }

 function insertgirlsReadmition(Request $req)
    {
       
        $orgnisation = $req->input('orgnisation');
        $district = $req->input('district');
        $zone = $req->input('zone');
        $school = $req->input('school');
        $month = $req->input('month');
        $year = $req->input('year');
        $term = $req->input('term');
        $GirlsReadmin = $req->input('GirlsReadmin');
        $GirlsAdminNight = $req->input('GirlsAdminNight');
        $GirlsAdminDay = $req->input('GirlsAdminDay');
        $GirlsBursary = $req->input('GirlsBursary');
        $SchoolMaterials = $req->input('SchoolMaterials'); 
        
        
      
     

        $data = array("organisationName"=>$orgnisation, "DistrictCode" =>$district,"ZoneCode"=>$zone,"schoolCode"=>$school,
                    "ReportingMonth"=>$month,"ReportingYear"=>$year, "term"=>$term,"GirlsReadmin"=>$GirlsReadmin,"GirlsAdminNight"=>$GirlsAdminNight,
                     "GirlsAdminDay"=>$GirlsAdminDay,"GirlsBursary"=>$GirlsBursary,"SchoolMaterials"=>$SchoolMaterials);

    DB::table('girlsreadmision')->insert($data);

    return back();

    }
 function insertfdgkiichecklist(Request $req)
    {
       
        $orgnisation = $req->input('orgnisation');
        $district = $req->input('district');
        $zone = $req->input('zone');
        $school = $req->input('school');
        $month = $req->input('month');
        $SupportStructures = $req->input('SupportStructures');
        $ExtentSafeProtect = $req->input('ExtentSafeProtect');
        $ConfSpeakSGBV = $req->input('ConfSpeakSGBV');
        $LawsGirlEduc = $req->input('LawsGirlEduc');
        $ChangePilocyPlans = $req->input('ChangePilocyPlans');
        $SGBVViews = $req->input('SGBVViews');
        $PerpetratorFellow = $req->input('PerpetratorFellow'); 
        $LevelPerpetratorFellow = $req->input('LevelPerpetratorFellow');
        $AbuseExamples = $req->input('AbuseExamples');
        $ActionAbuse = $req->input('ActionAbuse');
        $HarmPractGirlsEdu = $req->input('HarmPractGirlsEdu');
        $ViewViolenceGirl = $req->input('ViewViolenceGirl');
        $GirlsEqualCommMember = $req->input('GirlsEqualCommMember');
        
        $data = array("organisationName"=>$orgnisation, "DistrictCode" =>$district,"ZoneCode"=>$zone,"schoolCode"=>$school,
                    "ReportingMonth"=>$month,"ReportingYear"=>$year, "SupportStructures"=>$SupportStructures,"ExtentSafeProtect"=>$ExtentSafeProtect,"ConfSpeakSGBV"=>$ConfSpeakSGBV,
                     "LawsGirlEduc"=>$LawsGirlEduc,"ChangePilocyPlans"=>$ChangePilocyPlans,"SGBVViews"=>$SGBVViews,"PerpetratorFellow"=>$PerpetratorFellow,
                     "LevelPerpetratorFellow"=>$LevelPerpetratorFellow,"AbuseExamples"=>$AbuseExamples,"ActionAbuse"=>$ActionAbuse,"HarmPractGirlsEdu"=>$HarmPractGirlsEdu,
                     "ViewViolenceGirl"=>$ViewViolenceGirl,"GirlsEqualCommMember"=>$GirlsEqualCommMember);

    DB::table('fdgkiichecklist')->insert($data);

    return back();

    }

}
