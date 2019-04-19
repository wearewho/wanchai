<?php

return [ 
	
	'website-management' => [
		'title' => 'ตั้งค่าเว็บไซต์',
		'created_at' => 'Time',
		'fields' => [
			'home' => 'หน้าหลัก',
			'home_newcar' => 'รถเข้าใหม่',
			'home_promotion' => 'โปรโมชั่นประจำเดือน',
			'home_promotion_publish' => 'เผยแพร่',
			'home_promotion_unpublish' => 'ไม่เผยแพร่',
			'home_promotion_header' => 'หัวเรื่อง',
			'home_promotion_detail' => 'รายละเอียด',
			'home_promotion_status' => 'สถานะ',
			'contact' => 'ติดต่อเรา',
			'blog' => 'เลือกชมรถ',
			'blog_header' => 'หัวเรื่อง',
			'blog_status' => 'สถานะ',
			'header' => 'หัวข้อ',
			'detail' => 'รายละเอียด',
			'twohandcar' => 'รถมือสอง',
			'gallery' => 'รีวิวจากลูกค้า',
			'contact_header' => 'จัดการข้อมูลการติดต่อ',
			'contact_header_address' => 'ข้อมูลที่อยู่',
			'contact_address1' => 'บ้านเลขที่ ถนน ซอย',
			'contact_address2' => 'อำเภอ/เขต',
			'contact_address3' => 'ตำบล/แขวง',
			'contact_address4' => 'จังหวัด',
			'contact_address5' => 'รหัสไปรษณีย์',
			'contact_header_social' => 'ข้อมูลสื่อออนไลน์',
			'contact_social_phone' => 'โทรศัพท์',
			'contact_social_facebook' => 'เฟสบุ๊ค',
			'contact_social_instragram' => 'อินสตาแกรม',
			'contact_social_youtube' => 'ยูทูป',
			'contact_social_line' => ' ไลน์',
			'contact_map_lat' => 'ละติจูด',
			'contact_map_lng' => 'ลองติจูด'
		],
	],
	
	'user-management' => [
		'title' => 'ตั้งค่าผู้ใช้งาน',
		'created_at' => 'Time',
		'fields' => [
		],
	],
	
	'permissions' => [
		'title' => 'หน้าที่',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'ชื่อ',
		],
	],
	
	'roles' => [
		'title' => 'สิทธิ์การใช้งาน',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'ชื่อ',
			'permission' => 'หน้าที่',
		],
	],
	
	'users' => [ 
		'title' => 'ผู้ใช้งาน',
		'created_at' => 'Time',
		'fields' => [
			'name' => 'ชื่อ-นามสกุล',
			'address' => 'ที่อยู่',
			'email' => 'อีเมล',
			'password' => 'รหัสผ่าน',
			'change_password' => 'เปลี่ยนรหัสผ่าน',	 
			'current_password' => 'รหัสผ่านปัจจุบัน*',
			'new_password' => 'รหัสผ่านใหม่*',
			'confirm_password' => 'พิมพ์รหัสใหม่อีกครั้ง*',
			'roles' => 'สิทธิ์การใช้งาน',
			'remember-token' => 'Remember token',
		],
	],	
	
	'datatable' => [
		'shows' => 'แสดง',
		'show' => 'แสดงรายการ',
		'to' => 'ถึง',
		'from' => 'จาก',
		'unit' => 'รายการ',
		'zeroRecords' => 'ไม่พบข้อมูลที่ตรงกัน',
		'search' => 'ค้นหา',
		'filter' => 'กรองจากทั้งหมด',
		'first' => 'หน้าแรก',
		'last' => 'หน้าสุดท้าย',
		'next' => 'ถัดไป',
		'previous' => 'ก่อนหน้า',
    ],
	
	'app_online' => 'ออนไลน์',
	'app_add' => 'เพิ่ม',
	'app_create' => 'สร้าง',
	'app_save' => 'บันทึก',
	'app_edit' => 'แก้ไข',
	'app_view' => 'ข้อมูล',
	'app_update' => 'อัพเดท',
	'app_list' => 'รายการ',
	'app_no_entries_in_table' => 'ไม่พบข้อมูล',
	'custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'ออกจากระบบ',
	'app_add_new' => 'เพิ่ม',
	'app_are_you_sure' => 'คุณแน่ใจหรือไม่?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'หน้าหลัก',
	'app_delete' => 'ลบ',
	'global_title' => 'Website Manager',
	
];