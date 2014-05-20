<?php
/*
Plugin Name: Espresso Disable Extra Editor Buttons
Plugin URI: http://github.com/
Description: This plugin will fix a theme compatibility issue with the Event Espresso event editor
Version: 1.0
Author: Josh Feck
Author URI: http://eventespresso.com
License: GPLv2
*/
 
/*  Copyright 2013  Josh Feck 
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
 
function espresso_remove_extra_buttons() {
 
  if ((isset($_REQUEST['action']) && (isset($_REQUEST['page'])) && ($_REQUEST['action'] == 'add_new_event' || $_REQUEST['page'] == 'events'))) {
		remove_all_filters('mce_buttons_3');
		remove_all_filters('mce_buttons_4');
	}
}
 
add_action ('init', 'espresso_remove_extra_buttons', 11 );
