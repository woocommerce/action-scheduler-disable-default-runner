<?php
/*
 * Plugin Name: Action Scheduler - Disable Default Queue Runner
 * Plugin URI: https://github.com/Prospress/action-scheduler-disable-default-runner/
 * Description: Disable Action Scheduler's default queue runner, by removing it from the 'action_scheduler_run_queue' hook.
 * Author: Prospress Inc.
 * Author URI: https://prospress.com/
 * License: GPLv3
 * Version: 1.0.0
 * Requires at least: 4.0
 * Tested up to: 4.8
 *
 * GitHub Plugin URI: Prospress/action-scheduler-disable-default-runner
 * GitHub Branch: master
 *
 * Copyright 2018 Prospress, Inc.  (email : freedoms@prospress.com)
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
 * @package		Action Scheduler - Disable Default Queue Runner
 * @author		Prospress Inc.
 * @since		1.0
 */

function asdds_disable_default_runner() {
	if ( class_exists( 'ActionScheduler' ) ) {
		remove_action( 'action_scheduler_run_queue', array( ActionScheduler::runner(), 'run' ) );
	}
}
// ActionScheduler_QueueRunner::init() is attached to 'init' with priority 1, so we need to run after that
add_action( 'init', 'asdds_disable_default_runner', 10 );
