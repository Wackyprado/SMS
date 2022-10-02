<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home_con';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['validateUser'] = 'Signin_con/validateUser';
$route['home'] = 'Home_con';
$route['logout'] = 'Signin_con/log_out';

// PROFILE ROUTES //
$route['profile/fetch'] = 'profile_con/fetch_data';
$route['profile/fetch_educ'] = 'profile_con/fetch_educ';
$route['my-profile'] = 'profile_con';
$route['profile/getfamily'] = 'profile_con/getfamily';

//email
$route['requestconfirm/sendmail/(:any)/(:any)/(:any)'] = 'email_con/sendmail/$1/$2/$3'; 

$route['my-profile-education'] = 'profile_con/education';

$route['my-profile-family'] = 'profile_con/family';

//Online Class Registration Routes//

$route['online-class-registration'] = 'OnlineClassRegistration_con';
$route['registration/subject'] = 'OnlineClassRegistration_con/fetch_subject';

$route['registration/request'] = 'OnlineClassRegistration_con/request';

//Online Enrollment Routes//

$route['online-enrollment'] = 'Online_enrollment_con';

// My Student Ledger Routes // 

$route['my-student-ledger'] = 'My_student_ledger_con';

// View Grades Route //

$route['view-grades'] = 'View_Grades_con';

$route['view_grades/fetch_grades'] = 'View_Grades_con/fetch_grades';

// Pay Tuition Online Routes //

$route['pay-tuition-online'] = 'Pay_tuition_online_con';

// My Schedule Routes // 

$route['my-schedule'] = 'My_Schedule_con';

// Print Exam Permit Rooutes //

$route['print-exam-permit'] = 'Print_Exam_Permit_con';
$route['request-permit'] = 'Print_Exam_Permit_con/request_permit';

//Certificate of Registration Rooutes//

$route['certificate-of-registration'] = 'COR_con';

$route['certificate-of-registration/request'] = 'COR_con/request';

$route['generate-cor/(:any)/(:any)/(:any)'] = 'generate_cor_con/generate/$1/$2/$3';

$route['get'] = 'generate_cor_con/get';

//Attendance Routes//

$route['attendance'] = 'Attendance_con';

//Evalutaion Routes //

$route['evaluate-my-teacher'] = 'Evalaution_con';

//School Calendar Routes//

$route['school-calendar'] = 'School_Calendar_con';

//Settings Routes//

$route['settings'] = 'Settings_con';

$route['change_password'] = "Settings_con/change_password";


//Subject Chart Routes//

$route['subject-chart'] = 'subject_chart_con';
$route['subject-chart/fetch_subject'] = 'subject_chart_con/fetch_subject';

//Students//

$route['students'] = "students";

//schools//

$route['schools'] = "schools_con";