<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050124_phrase extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%phrase}}', [
			'id'   => Schema::TYPE_PK . '',
			'name' => Schema::TYPE_STRING . '(255) NOT NULL',
		], $tableOptions);
		$this->insert('{{%phrase}}', [
			'id'   => '1',
			'name' => 'language',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '2',
			'name' => 'phrase',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '3',
			'name' => 'name',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '4',
			'name' => 'code',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '5',
			'name' => 'country',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '6',
			'name' => 'status',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '7',
			'name' => 'translate',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '8',
			'name' => 'login',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '9',
			'name' => 'username',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '10',
			'name' => 'password',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '11',
			'name' => 'setting',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '12',
			'name' => 'logout',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '13',
			'name' => 'welcome',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '14',
			'name' => 'menu',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '15',
			'name' => 'management',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '16',
			'name' => 'text_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '17',
			'name' => 'desc_text_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '18',
			'name' => 'email_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '19',
			'name' => 'desc_email_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '20',
			'name' => 'number_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '21',
			'name' => 'desc_number_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '22',
			'name' => 'textarea_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '23',
			'name' => 'desc_textarea_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '24',
			'name' => 'color_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '25',
			'name' => 'desc_color_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '26',
			'name' => 'date_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '27',
			'name' => 'desc_date_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '28',
			'name' => 'time_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '29',
			'name' => 'desc_time_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '30',
			'name' => 'password_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '31',
			'name' => 'desc_password_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '32',
			'name' => 'roxymce_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '33',
			'name' => 'desc_roxymce_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '34',
			'name' => 'general',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '35',
			'name' => 'select_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '36',
			'name' => 'desc_select_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '37',
			'name' => 'multiselect_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '38',
			'name' => 'desc_multiselect_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '39',
			'name' => 'file_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '40',
			'name' => 'desc_file_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '41',
			'name' => 'url_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '42',
			'name' => 'desc_url_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '43',
			'name' => 'percent_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '44',
			'name' => 'desc_percent_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '45',
			'name' => 'switch_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '46',
			'name' => 'desc_switch_field',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '47',
			'name' => 'checkbox_option',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '48',
			'name' => 'desc_checkbox_option',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '49',
			'name' => 'radio_option',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '50',
			'name' => 'desc_radio_option',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '51',
			'name' => 'additional',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '52',
			'name' => 'x_setting',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '53',
			'name' => 'email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '54',
			'name' => 'email_template',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '57',
			'name' => 'menu_parent',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '58',
			'name' => 'list_x',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '59',
			'name' => 'languages',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '60',
			'name' => 'add_a_new_x',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '61',
			'name' => 'in_use',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '62',
			'name' => 'not_in_use',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '63',
			'name' => 'role',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '64',
			'name' => 'index',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '65',
			'name' => 'create',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '66',
			'name' => 'update',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '67',
			'name' => 'delete',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '68',
			'name' => 'view',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '69',
			'name' => 'user_role',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '70',
			'name' => 'no',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '71',
			'name' => 'yes',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '72',
			'name' => 'permission',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '73',
			'name' => 'is_backend_login',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '74',
			'name' => 'x_management',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '75',
			'name' => 'lists',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '76',
			'name' => 'user',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '77',
			'name' => 'create_x',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '78',
			'name' => 'add_a_new',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '79',
			'name' => 'choose_status',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '80',
			'name' => 'save',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '81',
			'name' => 'back',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '82',
			'name' => 'level',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '83',
			'name' => 'sort_order',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '84',
			'name' => 'general_language',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '85',
			'name' => 'desc_general_language',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '86',
			'name' => 'email_setting',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '87',
			'name' => 'desc_email_setting',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '90',
			'name' => 'smtp_host',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '91',
			'name' => 'desc_smtp_host',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '92',
			'name' => 'smtp_user',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '93',
			'name' => 'desc_smtp_user',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '94',
			'name' => 'smtp_password',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '95',
			'name' => 'desc_smtp_password',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '96',
			'name' => 'smtp_port',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '97',
			'name' => 'desc_smtp_port',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '98',
			'name' => 'from_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '99',
			'name' => 'desc_from_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '100',
			'name' => 'email_group',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '101',
			'name' => 'email_encryption',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '102',
			'name' => 'desc_email_encryption',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '103',
			'name' => 'desc_general',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '104',
			'name' => 'update_x',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '105',
			'name' => 'general_group',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '106',
			'name' => 'menu_item',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '107',
			'name' => 'desc_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '108',
			'name' => 'SEO',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '109',
			'name' => 'seo_title',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '110',
			'name' => 'desc_seo_title',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '111',
			'name' => 'seo_description',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '112',
			'name' => 'desc_seo_description',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '115',
			'name' => 'maintainance',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '116',
			'name' => 'web_active',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '117',
			'name' => 'desc_web_active',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '118',
			'name' => 'web_active_content',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '119',
			'name' => 'desc_web_active_content',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '120',
			'name' => 'general_logo',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '121',
			'name' => 'desc_general_logo',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '122',
			'name' => 'general_favicon',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '123',
			'name' => 'desc_general_favicon',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '124',
			'name' => 'general_hotline',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '125',
			'name' => 'desc_general_hotline',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '127',
			'name' => 'about',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '129',
			'name' => 'backup_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '130',
			'name' => 'desc_backup_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '131',
			'name' => 'group_backup',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '132',
			'name' => 'backup_from_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '133',
			'name' => 'desc_backup_from_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '134',
			'name' => 'backup_to_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '135',
			'name' => 'desc_backup_to_email',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '136',
			'name' => 'backup_ftp',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '137',
			'name' => 'desc_backup_ftp',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '138',
			'name' => 'backup_ftp_host',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '139',
			'name' => 'desc_backup_ftp_host',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '140',
			'name' => 'backup_ftp_port',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '141',
			'name' => 'desc_backup_ftp_port',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '142',
			'name' => 'backup_ftp_user',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '143',
			'name' => 'desc_backup_ftp_user',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '144',
			'name' => 'backup_ftp_pass',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '145',
			'name' => 'desc_backup_ftp_pass',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '146',
			'name' => 'backup_ftp_ssl',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '147',
			'name' => 'desc_backup_ftp_ssl',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '148',
			'name' => 'backup_ftp_dir',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '149',
			'name' => 'desc_backup_ftp_dir',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '150',
			'name' => 'backup_ftp_timeout',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '151',
			'name' => 'desc_backup_ftp_timeout',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '152',
			'name' => 'backup_ftp_append_time',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '153',
			'name' => 'desc_backup_ftp_append_time',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '154',
			'name' => 'backup_hr1',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '155',
			'name' => 'desc_backup_hr1',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '156',
			'name' => 'site',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '157',
			'name' => 'dashboard',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '158',
			'name' => 'add_new',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '159',
			'name' => 'page',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '160',
			'name' => 'category',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '161',
			'name' => 'image',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '162',
			'name' => 'contact',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '163',
			'name' => 'order',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '164',
			'name' => 'post',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '165',
			'name' => 'product',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '166',
			'name' => 'description',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '167',
			'name' => 'content',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '168',
			'name' => 'category_parent',
		]);
		$this->insert('{{%phrase}}', [
			'id'   => '169',
			'name' => 'type',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%phrase}}');
	}
}
