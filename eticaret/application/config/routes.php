<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'anasayfa';
$route['profilim']='anasayfa/profilim';
$route['urun/(:any)']='anasayfa/urun/$1';
$route['product_t']='anasayfa/product_t';
$route['product_b']='anasayfa/product_b';
$route['product_k']='anasayfa/product_k';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
