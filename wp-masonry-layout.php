<?php
/* 
Plugin Name: WP Masonry Layout
Plugin URI: http://www.masonrylayout.com
Description: Masonry Layout Posts for Wordpress
Author: Dinesh Karki
Version: 2.0
Author URI: http://www.masonrylayout.com
*/

/*  Copyright 2012  Dinesh Karki  (email : dnesscarkey@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
include('plugin_interface.php');
register_activation_hook( __FILE__, 'wml_activate' );
?>