<?php
/*
 * Plugin Name: {plugin_name}
 * Plugin URI: https://github.com/Prospress/{plugin_slug}/
 * Description: {plugin_short_description}
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * License: GPLv3
 * Version: 1.0.0
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * GitHub Plugin URI: Prospress/{plugin_slug}
 * GitHub Branch: master
 *
 * Copyright 2017 Prospress, Inc.  (email : freedoms@prospress.com)
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package		{plugin_name}
 * @author		Prospress Inc.
 * @since		1.0
 */

require_once( 'includes/class-pp-dependencies.php' );

if ( false === PP_Dependencies::is_woocommerce_active( '3.0' ) ) {
	PP_Dependencies::enqueue_admin_notice( '{plugin_name}', 'WooCommerce', '3.0' );
	return;
}

if ( false === PP_Dependencies::is_subscriptions_active( '2.1' ) ) {
	PP_Dependencies::enqueue_admin_notice( '{plugin_name}', 'WooCommerce Subscriptions', '2.1' );
	return;
}
