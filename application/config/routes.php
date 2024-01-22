<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['artikel'] = 'HomeController/artikel';
$route['updateCountView'] = 'HomeController/updateCountView';
$route['artikel/(:any)'] = 'HomeController/artikel/$1';
$route['artikel-details/(:any)'] = 'HomeController/artikel_details/$1';
$route['search'] = 'HomeController/search';

$route['panel'] = 'DashboardController';
$route['pengaturan'] = 'PengaturanController';

$route['blog'] = 'BlogController/index';
$route['blog/create'] = 'BlogController/create';
$route['blog/edit/(:any)'] = 'BlogController/edit/$1';
$route['blog/delete/(:any)'] = 'BlogController/delete/$1';
$route['blog/is_active/(:any)'] = 'BlogController/is_active/$1';

$route['layanan'] = 'LayananController/index';
$route['layanan/create'] = 'LayananController/create';
$route['layanan/edit/(:any)'] = 'LayananController/edit/$1';
$route['layanan/delete/(:any)'] = 'LayananController/delete/$1';
$route['layanan/is_active/(:any)'] = 'LayananController/is_active/$1';

$route['klien'] = 'KlienController/index';
$route['klien/create'] = 'KlienController/create';
$route['klien/edit/(:any)'] = 'KlienController/edit/$1';
$route['klien/delete/(:any)'] = 'KlienController/delete/$1';
$route['klien/is_active/(:any)'] = 'KlienController/is_active/$1';

$route['dokumentasi'] = 'DokumentasiController/index';
$route['dokumentasi/create'] = 'DokumentasiController/create';
$route['dokumentasi/edit/(:any)'] = 'DokumentasiController/edit/$1';
$route['dokumentasi/delete/(:any)'] = 'DokumentasiController/delete/$1';
$route['dokumentasi/is_active/(:any)'] = 'DokumentasiController/is_active/$1';

$route['pengguna'] = 'PenggunaController/index';
$route['pengguna/create'] = 'PenggunaController/create';
$route['pengguna/edit/(:any)'] = 'PenggunaController/edit/$1';
$route['pengguna/delete/(:any)'] = 'PenggunaController/delete/$1';
$route['pengguna/is_active/(:any)'] = 'PenggunaController/is_active/$1';

/** Authentication */
$route['auth'] = 'AuthController/index';
$route['logout'] = 'AuthController/logout';
