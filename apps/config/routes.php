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

// Main
$route['default_controller'] = 'main';
$route['testpost']['post'] = 'restful';

// User

$route['login'] = 'user';
$route['login/check'] = 'user/check';
$route['logout'] = 'user/logout';
$route['register'] = 'user/register';
$route['register/check'] = 'user/registercheck';
$route['requestform'] = 'main/requestform';
$route['hostel/(:num)'] = 'main/hostel/$1';
$route['room/(:num)'] = 'main/room/$1';
$route['booking'] = 'user/booking';
$route['bookinglist'] = 'user/bookinglist';


// Managment View

$route['managment/dashboard'] = 'managment/dashboard';
$route['managment/place'] = 'managment/place';
$route['managment/hostel'] = 'managment/hostel';
$route['managment/room'] = 'managment/room';
$route['managment/user'] = 'managment/user';
$route['managment/booking'] = 'managment/booking';
$route['managment/login'] = 'managment/login';
$route['managment/checklogin'] = 'managment/checklogin';
$route['managment/logout'] = '/';


$route['managment/hostel_photo/(:num)'] = 'managment/hostelphoto/$1';
$route['managment/room_photo/(:num)'] = 'managment/roomphoto/$1';
// Managment Insert

$route['managment/place/insert'] = 'managment/insertplace';
$route['managment/hostel/insert'] = 'managment/inserthostel';
$route['managment/hostelphoto/insert'] = 'managment/inserthostelphoto';
$route['managment/room/insert'] = 'managment/insertroom';
$route['managment/roomphoto/insert'] = 'managment/insertroomphoto';
$route['managment/user/insert'] = 'managment/insertuser';
// Managment Edit

$route['managment/place/edit'] = 'managment/editplace';
$route['managment/hostel/edit'] = 'managment/edithostel';
$route['managment/room/edit'] = 'managment/editroom';
$route['managment/user/edit'] = 'managment/edituser';
// Managment Delete

$route['managment/place/delete'] = 'managment/deleteplace';
$route['managment/hostel/delete'] = 'managment/deletehostel';
$route['managment/room/delete'] = 'managment/deleteroom';
$route['managment/hostelphoto/delete'] = 'managment/deletehostelphoto';
$route['managment/roomphoto/delete'] = 'managment/deleteroomphoto';
$route['managment/user/delete'] = 'managment/deleteuser';
// Other

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
