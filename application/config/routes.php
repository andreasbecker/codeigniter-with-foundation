<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "home";

$route['de/Kontakt'] = "contact";


// Kunden-Registrierung
$route['(en|de|fr)/registration']                     = "customer/index/registration";


// Landingpages
$route['(en|de|fr)/medicine']       		 = "landingpage/index/medicine";
$route['(en|de|fr)/technology-and-industry'] = "landingpage/index/technology-and-industry";
$route['(en|de|fr)/marketing-and-pr']        = "landingpage/index/marketing-and-pr";
$route['(en|de|fr)/software-and-internet']   = "landingpage/index/software-and-internet";
$route['(en|de|fr)/economy-and-trade']       = "landingpage/index/economy-and-trade";
$route['(en|de|fr)/law']                     = "landingpage/index/law";


// AJAX Routes
$route['calculator/save_to_session'] = "calculator/save_to_session";
$route['password/checkusermaildouble/de'] = "password/checkusermaildouble/de";
$route['password/checkusermaildouble/en'] = "password/checkusermaildouble/en";
$route['password/checkusermaildouble/fr'] = "password/checkusermaildouble/fr";

// Hidden routes
$route['(en|de|fr)/error/(:any)'] = "password/error/$1/$2";
$route['(en|de|fr)/new-password'] = "password/new_password";


// URI like '/en/about' -> use controller 'about'
$route['^(en|de|fr)/(.+)$'] = "$2";

// $route['team'] = "team";
// $route['upload'] = "upload";
// $route['contact'] = "contact";

// '/en', '/de', '/fr' and '/nl' URIs -> use default controller
$route['^(en|de|fr|nl)$'] = $route['default_controller'];

$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */