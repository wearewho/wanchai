<?php

return [
	
	'website-management' => [
		'title' => 'Website Management',
		'created_at' => 'Time',
		'fields' => [
			'home' => 'Home',
			'home_newcar' => 'New Car',
			'home_promotion' => 'Promotion',
			'home_promotion_publish' => 'Publish',
			'home_promotion_unpublish' => 'Unpublish',
			'home_promotion_header' => 'Header',
			'home_promotion_detail' => 'Detail',
			'home_promotion_status' => 'Status',
			'contact' => 'Contact',
			'blog' => 'Used Cars',
			'gallery' => 'Review',
		],
	],
	
	'user-management' => [
		'title' => 'User Management',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'Permissions',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
		],
	],
	
	'roles' => [
		'title' => 'Roles',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'permission' => 'Permissions',
		],
	],
	
	'users' => [
		'title' => 'Users',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'Name',
			'email' => 'Email',
			'password' => 'Password',
			'change_password' => 'Change Password',			
			'current_password' => 'Current password*',
			'new_password' => 'New password*',
			'confirm_password' => 'New password confirmation*',
			'roles' => 'Roles',
			'remember-token' => 'Remember token',
		],
	],
	
	'datatable' => [
		'shows' => 'Show',
		'show' => 'Show',
		'to' => 'to',
		'from' => 'from',
		'unit' => 'transaction(s)',
		'zeroRecords' => 'Not found data',
		'search' => 'Search',
		'filter' => 'From all',
		'first' => 'First',
		'last' => 'Last',
		'next' => 'Next',
		'previous' => 'Previous',
	],
	
	'app_online' => 'Online',
	'app_create' => 'Create',
	'app_save' => 'Save',
	'app_edit' => 'Edit',
	'app_view' => 'View',
	'app_update' => 'Update',
	'app_list' => 'List',
	'app_no_entries_in_table' => 'No entries in table',
	'custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Add new',
	'app_are_you_sure' => 'Are you sure?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Delete',
	'global_title' => 'Website Manager',
];