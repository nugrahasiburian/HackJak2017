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

$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['default_controller'] = "Default_controller/index";
$route['home'] = "Default_controller/index";
$route['list-taman'] = "frontend/List_taman_controller_Front/index";
$route['list-taman/(:any)/(:any)'] = "frontend/List_taman_detail_controller_Front/show_list_taman_detail";
$route['kesaksian'] = "frontend/Kesaksian_all_controller_Front/index";
$route['kesaksian/(:any)/(:any)'] = "frontend/Kesaksian_detail_controller_Front/show_kesaksian_detail";
$route['pengajaran'] = "frontend/Pengajaran_all_controller_Front/index";
$route['pengajaran/(:any)/(:any)'] = "frontend/Pengajaran_detail_controller_Front/show_pengajaran_detail";
/*
$route['pengajaran'] = "frontend/Pengajaran_all_controller_Front/index";
$route['pengajaran/(:any)/(:any)'] = "frontend/Pengajaran_detail_controller_Front/show_pengajaran_detail";
$route['kesaksian'] = "frontend/Kesaksian_all_controller_Front/index";
$route['kesaksian/(:any)/(:any)'] = "frontend/Kesaksian_detail_controller_Front/show_kesaksian_detail";
$route['event'] = "frontend/Event_all_controller_Front/index";
$route['event/(:any)/(:any)'] = "frontend/Event_detail_controller_Front/show_event_detail";
$route['alamat-sekre'] = "frontend/Alamat_controller_Front/index";
*/
$route['admin'] = "backend/Home_controller_Back/index";
$route['admin/home'] = "backend/Home_controller_Back/index";
$route['admin/login'] = "backend/Login_controller_Back/login";
$route['admin/logout'] = "backend/Login_controller_Back/logout";

$route['admin/(:any)'] = "backend/$1_controller_Back/show_list_of_$1";
$route['admin/(:any)/create-new'] = "backend/$1_controller_Back/show_form_$1";
$route['admin/(:any)/edit/(:num)'] = "backend/$1_controller_Back/show_form_$1";
$route['admin/(:any)/delete/(:num)'] = "backend/$1_controller_Back/delete_sql_controller";
$route['admin/(:any)/create-new/save'] = "backend/$1_controller_Back/insert_into_sql_controller";
$route['admin/(:any)/edit/save'] = "backend/$1_controller_Back/update_sql_controller";