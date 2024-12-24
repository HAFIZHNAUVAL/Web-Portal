<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/Home/contact', 'Home::contact');
$routes->get('/Home/galeri', 'Home::galeri');
$routes->get('/Home/dak', 'Home::dak');
$routes->get('/Home/berita', 'Home::berita');
$routes->get('/Home/timeline', 'Home::timeline');
$routes->get('/Home/detailBerita', 'Home::detailBerita');
$routes->get('/Home/pejabat', 'Home::pejabat');
$routes->get('/Home/detailGaleri', 'Home::detailGaleri');
$routes->get('/Home/produkHukum', 'Home::produkHukum');
$routes->post('Testimonial/create_testimoni', 'Testimonial::create_testimoni');


// sistem login
$routes->get('/Auth/index', 'Auth::index');
$routes->get('/Auth/regis', 'Auth::regis');
$routes->post('/Auth/login', 'Auth::login');
$routes->post('/Auth/register', 'Auth::register');
$routes->get('/Auth/logout', 'Auth::logout');

// Forget password
$routes->get('/Auth/forget_pass', 'Auth::forget_pass');
$routes->get('/Auth/reset_pass', 'Auth::reset_pass');

$routes->post('AUth/sendEmail', 'Auth::sendEmail');
$routes->get('Auth/reset/(:any)', 'Auth::reset/$1');
$routes->post('Auth/forgotPassword', 'Auth::forgotPassword');
$routes->post('Auth/resetPassword', 'Auth::resetPassword');

$routes->get('/Admin/dashboard', 'Admin::dashboard_admin');

$routes->post('/Admin/changePassword', 'Admin::changePassword');
$routes->get('Admin/change_password', 'Admin::change_pass');


$routes->get('/Admin/response_layanan', 'Admin::response_layanan');
$routes->get('/Admin/profile', 'Admin::profile');
$routes->get('/Admin/register', 'Admin::register');
$routes->get('/Admin/all_user', 'Admin::all_user');
$routes->post('/Admin/regis', 'Admin::regis');
$routes->get('/User/dashboard', 'User::dashboard_user');
$routes->get('/Admin/aduan', 'Admin::aduan');
$routes->get('/User/pengajuan', 'User::pengajuan');
$routes->post('/User/simpan', 'User::simpan');
$routes->post('/User/save', 'User::save');
// $routes->get('/Admin/(:segment)/delete_aduan', 'Admin::delete_aduan/$1');
$routes->delete('/Admin/(:num)/delete_aduan', 'Admin::delete_aduan/$1');
$routes->delete('/Admin/(:num)/delete_layanan', 'Admin::delete_layanan/$1');
$routes->delete('/Admin/(:num)/delete_register', 'Admin::delete_register/$1');
$routes->delete('/Admin/(:num)/delete_home', 'Admin::delete_home/$1');
$routes->delete('/Admin/(:num)/delete_berita', 'Admin::delete_berita/$1');
$routes->get('/User/create_aduan', 'User::create_aduan');
// edit layanan dan aduan
$routes->get('/Admin/(:segment)/cetak', 'Admin::cetak/$1');
$routes->get('/Admin/show_surat', 'Admin::show_surat');
$routes->get('/Admin/(:segment)/edit_aduan', 'Admin::edit_aduan/$1');
$routes->get('/Admin/(:segment)/edit_layanan', 'Admin::edit_layanan/$1');
$routes->get('/Admin/(:segment)/lihat_layanan', 'Admin::lihat_layanan/$1');
$routes->get('/Admin/(:segment)/lihat_aduan', 'Admin::lihat_aduan/$1');
$routes->post('/Admin/(:segment)/update_aduan', 'Admin::update_aduan/$1');
$routes->post('/Admin/(:segment)/update_layanan', 'Admin::update_layanan/$1');
$routes->get('/Admin/(:segment)/lihat_alluser', 'Admin::lihat_alluser/$1');
$routes->get('/Admin/settings_profile', 'Admin::settings_profile');
$routes->post('/Admin/upload_profile', 'Admin::upload_profile');
$routes->get('/Admin/(:segment)/edit_profile', 'Admin::edit_profile/$1');
$routes->post('/Admin/(:segment)/sunting_profile', 'Admin::sunting_profile/$1');
$routes->post('/Admin/(:segment)/update_berita', 'Admin::update_berita/$1');
$routes->get('/Admin/(:segment)/edit_berita', 'Admin::edit_berita/$1');



$routes->get('/Admin/show_home', 'Admin::show_home');
$routes->get('/Admin/(:segment)/edit_home', 'Admin::edit_home/$1');
$routes->post('/Admin/(:segment)/update_home', 'Admin::update_home/$1');

$routes->get('/Admin/(:segment)/edit_register', 'Admin::edit_register/$1');
$routes->post('/Admin/(:segment)/update_register', 'Admin::update_register/$1');
// });
// User

$routes->get('/User/(:segment)/edit_profile', 'User::edit_profile/$1');
$routes->post('/User/(:segment)/sunting_profile', 'User::sunting_profile/$1');
$routes->get('/User/dashboard', 'User::dashboard_user');
$routes->get('/User/profile', 'User::profile');
$routes->get('/User/settings_profile', 'User::settings_profile');
$routes->get('/User/pengajuan', 'User::pengajuan');
$routes->post('/User/simpan', 'User::simpan');
$routes->post('/User/save', 'User::save');
$routes->get('/User/show_image', 'User::show_image');
$routes->post('/User/upload_file', 'User::upload_file');
$routes->get('/User/riwayat_layanan', 'User::riwayatlayanan');
$routes->get('/User/riwayat_aduan', 'User::riwayataduan');
$routes->get('/User/show_layanan', 'User::show_layananuser');
$routes->get('/User/create_pengajuan', 'User::createpengajuan');
$routes->post('/User/upload_pengajuan', 'User::create_pengajuan');
$routes->post('/User/upload_profile', 'User::upload_profile');
$routes->get('/Home/struktur', 'Home::struktur');
$routes->get('/User/(:segment)/download', 'User::download/$1');
$routes->get('/User/change_password', 'User::change_passuser');
$routes->post('/User/changePassword', 'User::changePassword');

// User edit layanan dan aduan
$routes->get('/User/(:segment)/edit_aduan', 'User::edit_aduanuser/$1');
$routes->get('/User/aduan', 'User::aduanuser');
$routes->get('/User/(:segment)/edit_layanan', 'User::edit_layananuser/$1');
$routes->post('/User/(:segment)/update_aduan', 'User::update_aduanuser/$1');
$routes->post('/User/(:segment)/update_layanan', 'User::update_layananuser/$1');
$routes->get('/User/(:segment)/edit_layananUser', 'User::edit_layanan/$1');
$routes->post('/User/(:segment)/update_layananUser', 'User::update_layanan/$1');


// status
$routes->get('/User/status_aduan', 'User::status_aduan');
$routes->get('/User/status_layanan', 'User::status_layanan');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
