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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = 'Home';
$route['translate_uri_dashes'] = FALSE;


// Admin
 
$route['admin'] 			 					   = 'admin/AdminLogin';
$route['adminLogin'] 		 					   = 'admin/AdminLogin/loginMe';
$route['Dashboard'] 		 					   = 'admin/AdminDashboard';
$route['adminLogout'] 	 	 					   = 'admin/AdminLogin/logout';

$route['forgotPassword'] 	 					   = 'admin/AdminLogin/forgotPassword';
$route['resetPasswordUser']						   = "admin/AdminLogin/resetPasswordUser";
$route['resetPasswordConfirmUser/(:any)/(:any)']   = "admin/AdminLogin/resetPasswordConfirmUser/$1/$2";
$route['createPasswordUser'] 					   = "admin/AdminLogin/createPasswordUser";


$route['admin/news'] 			 				   = 'admin/AdminNews/all_news';
$route['admin/projects'] 			 				   = 'admin/AdminProjects/all_projects';
$route['admin/photogallery'] 			 				   = 'admin/AdminPhotogallery/all_photogallery';
$route['admin/videogallery'] 			 				   = 'admin/AdminVideogallery/all_videogallery';
$route['news/(:any)'] = "Home/news_details/$1";
$route['projects/(:any)'] = "Home/projects_details/$1";
$route['abouts'] = "Home/abouts";

$route['user'] 			 = 'user/UserLogin';
$route['userLogin'] 	 = 'user/UserLogin/loginMe';
$route['userRegister']   = 'user/UserRegister/registeredMe';
$route['userDashboard']  = 'user/UserDashboard';
$route['userProfile']  = 'user/UserDashboard/userProfile';
$route['userAppointments']  = 'user/UserDashboard/userAppointments';
$route['userOrders']  = 'user/UserDashboard/userOrders';
$route['userProfileUpdate']  = 'user/UserDashboard/userProfileUpdate';
$route['userLogout']     = 'user/UserDashboard/logout';


// User Email
$route['user/forgotPassword'] 	 					 = 'user/UserLogin/forgotPassword';
$route['user/resetPasswordUser']						 = "user/UserLogin/resetPasswordUser";
$route['user/resetPasswordConfirmUser/(:any)/(:any)'] = "user/UserLogin/resetPasswordConfirmUser/$1/$2";
$route['user/createPasswordUser'] 					 = "user/UserLogin/createPasswordUser";

$route['login'] 	 	 				 = 'user/UserLogin/loginPage';
$route['register'] 	 	 				 = 'user/UserRegister/registerPage';
