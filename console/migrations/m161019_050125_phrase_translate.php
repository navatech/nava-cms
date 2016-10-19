<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050125_phrase_translate extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%phrase_translate}}', [
			'id'          => Schema::TYPE_PK . '',
			'phrase_id'   => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'language_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'value'       => Schema::TYPE_TEXT . ' NOT NULL',
		], $tableOptions);
		$this->createIndex('phrase_translate_fk_phrase', '{{%phrase_translate}}', 'phrase_id', 0);
		$this->createIndex('phrase_translate_fk_language', '{{%phrase_translate}}', 'language_id', 0);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '1',
			'phrase_id'   => '1',
			'language_id' => '1',
			'value'       => 'Ngôn ngữ',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '2',
			'phrase_id'   => '1',
			'language_id' => '2',
			'value'       => 'Language',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '3',
			'phrase_id'   => '2',
			'language_id' => '1',
			'value'       => 'Từ ngữ',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '4',
			'phrase_id'   => '2',
			'language_id' => '2',
			'value'       => 'Phrase',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '5',
			'phrase_id'   => '3',
			'language_id' => '1',
			'value'       => 'Tên',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '6',
			'phrase_id'   => '3',
			'language_id' => '2',
			'value'       => 'Name',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '7',
			'phrase_id'   => '4',
			'language_id' => '1',
			'value'       => 'Mã',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '8',
			'phrase_id'   => '4',
			'language_id' => '2',
			'value'       => 'Code',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '9',
			'phrase_id'   => '5',
			'language_id' => '1',
			'value'       => 'Quốc gia',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '10',
			'phrase_id'   => '5',
			'language_id' => '2',
			'value'       => 'Country',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '11',
			'phrase_id'   => '6',
			'language_id' => '1',
			'value'       => 'Trạng thái',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '12',
			'phrase_id'   => '6',
			'language_id' => '2',
			'value'       => 'Status',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '13',
			'phrase_id'   => '7',
			'language_id' => '1',
			'value'       => 'Dịch',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '14',
			'phrase_id'   => '7',
			'language_id' => '2',
			'value'       => 'Translate',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '15',
			'phrase_id'   => '8',
			'language_id' => '2',
			'value'       => 'Login',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '16',
			'phrase_id'   => '9',
			'language_id' => '2',
			'value'       => 'Username',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '17',
			'phrase_id'   => '10',
			'language_id' => '2',
			'value'       => 'Password',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '18',
			'phrase_id'   => '11',
			'language_id' => '2',
			'value'       => 'Setting',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '19',
			'phrase_id'   => '12',
			'language_id' => '2',
			'value'       => 'Logout
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '20',
			'phrase_id'   => '13',
			'language_id' => '2',
			'value'       => 'welcome
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '21',
			'phrase_id'   => '14',
			'language_id' => '2',
			'value'       => 'Menu',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '22',
			'phrase_id'   => '15',
			'language_id' => '2',
			'value'       => 'Management',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '23',
			'phrase_id'   => '16',
			'language_id' => '2',
			'value'       => 'error: phrase [text_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '24',
			'phrase_id'   => '17',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_text_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '25',
			'phrase_id'   => '18',
			'language_id' => '2',
			'value'       => 'error: phrase [email_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '26',
			'phrase_id'   => '19',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_email_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '27',
			'phrase_id'   => '20',
			'language_id' => '2',
			'value'       => 'error: phrase [number_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '28',
			'phrase_id'   => '21',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_number_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '29',
			'phrase_id'   => '22',
			'language_id' => '2',
			'value'       => 'error: phrase [textarea_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '30',
			'phrase_id'   => '23',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_textarea_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '31',
			'phrase_id'   => '24',
			'language_id' => '2',
			'value'       => 'error: phrase [color_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '32',
			'phrase_id'   => '25',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_color_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '33',
			'phrase_id'   => '26',
			'language_id' => '2',
			'value'       => 'error: phrase [date_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '34',
			'phrase_id'   => '27',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_date_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '35',
			'phrase_id'   => '28',
			'language_id' => '2',
			'value'       => 'error: phrase [time_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '36',
			'phrase_id'   => '29',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_time_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '37',
			'phrase_id'   => '30',
			'language_id' => '2',
			'value'       => 'error: phrase [password_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '38',
			'phrase_id'   => '31',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_password_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '39',
			'phrase_id'   => '32',
			'language_id' => '2',
			'value'       => 'error: phrase [roxymce_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '40',
			'phrase_id'   => '33',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_roxymce_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '41',
			'phrase_id'   => '34',
			'language_id' => '2',
			'value'       => 'error: phrase [general] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '42',
			'phrase_id'   => '35',
			'language_id' => '2',
			'value'       => 'error: phrase [select_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '43',
			'phrase_id'   => '36',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_select_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '44',
			'phrase_id'   => '37',
			'language_id' => '2',
			'value'       => 'error: phrase [multiselect_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '45',
			'phrase_id'   => '38',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_multiselect_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '46',
			'phrase_id'   => '39',
			'language_id' => '2',
			'value'       => 'error: phrase [file_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '47',
			'phrase_id'   => '40',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_file_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '48',
			'phrase_id'   => '41',
			'language_id' => '2',
			'value'       => 'error: phrase [url_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '49',
			'phrase_id'   => '42',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_url_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '50',
			'phrase_id'   => '43',
			'language_id' => '2',
			'value'       => 'error: phrase [percent_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '51',
			'phrase_id'   => '44',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_percent_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '52',
			'phrase_id'   => '45',
			'language_id' => '2',
			'value'       => 'error: phrase [switch_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '53',
			'phrase_id'   => '46',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_switch_field] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '54',
			'phrase_id'   => '47',
			'language_id' => '2',
			'value'       => 'error: phrase [checkbox_option] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '55',
			'phrase_id'   => '48',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_checkbox_option] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '56',
			'phrase_id'   => '49',
			'language_id' => '2',
			'value'       => 'error: phrase [radio_option] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '57',
			'phrase_id'   => '50',
			'language_id' => '2',
			'value'       => 'error: phrase [desc_radio_option] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '58',
			'phrase_id'   => '51',
			'language_id' => '2',
			'value'       => 'Additional',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '59',
			'phrase_id'   => '52',
			'language_id' => '2',
			'value'       => '{1} Setting',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '60',
			'phrase_id'   => '53',
			'language_id' => '2',
			'value'       => 'E-mail',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '61',
			'phrase_id'   => '54',
			'language_id' => '2',
			'value'       => 'Email template',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '64',
			'phrase_id'   => '57',
			'language_id' => '2',
			'value'       => 'Menu parent',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '65',
			'phrase_id'   => '58',
			'language_id' => '2',
			'value'       => 'List of {1}',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '66',
			'phrase_id'   => '59',
			'language_id' => '2',
			'value'       => 'Language',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '67',
			'phrase_id'   => '60',
			'language_id' => '2',
			'value'       => 'Add new {1}',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '68',
			'phrase_id'   => '61',
			'language_id' => '2',
			'value'       => 'Active',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '69',
			'phrase_id'   => '62',
			'language_id' => '2',
			'value'       => 'Deactive',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '70',
			'phrase_id'   => '63',
			'language_id' => '2',
			'value'       => 'Role',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '71',
			'phrase_id'   => '64',
			'language_id' => '2',
			'value'       => 'Index',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '72',
			'phrase_id'   => '65',
			'language_id' => '2',
			'value'       => 'Create',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '73',
			'phrase_id'   => '66',
			'language_id' => '2',
			'value'       => 'Update',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '74',
			'phrase_id'   => '67',
			'language_id' => '2',
			'value'       => 'Delete',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '75',
			'phrase_id'   => '68',
			'language_id' => '2',
			'value'       => 'View',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '76',
			'phrase_id'   => '69',
			'language_id' => '2',
			'value'       => 'User roles',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '77',
			'phrase_id'   => '70',
			'language_id' => '2',
			'value'       => 'Deactivated',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '78',
			'phrase_id'   => '71',
			'language_id' => '2',
			'value'       => 'Activated',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '79',
			'phrase_id'   => '72',
			'language_id' => '2',
			'value'       => 'Permission',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '80',
			'phrase_id'   => '73',
			'language_id' => '2',
			'value'       => 'Can login to Backend?',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '81',
			'phrase_id'   => '74',
			'language_id' => '2',
			'value'       => '{1} management',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '82',
			'phrase_id'   => '75',
			'language_id' => '2',
			'value'       => 'List',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '83',
			'phrase_id'   => '76',
			'language_id' => '2',
			'value'       => 'User',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '84',
			'phrase_id'   => '77',
			'language_id' => '2',
			'value'       => 'Create {1}',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '85',
			'phrase_id'   => '77',
			'language_id' => '1',
			'value'       => 'Thêm mới {1}',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '86',
			'phrase_id'   => '76',
			'language_id' => '1',
			'value'       => 'Người dùng',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '87',
			'phrase_id'   => '52',
			'language_id' => '1',
			'value'       => '{1} Cài Đặt',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '88',
			'phrase_id'   => '11',
			'language_id' => '1',
			'value'       => 'Cài Đặt',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '89',
			'phrase_id'   => '14',
			'language_id' => '1',
			'value'       => 'Menu',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '90',
			'phrase_id'   => '57',
			'language_id' => '1',
			'value'       => 'Menu Cha',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '91',
			'phrase_id'   => '54',
			'language_id' => '1',
			'value'       => 'Giao diện email',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '92',
			'phrase_id'   => '78',
			'language_id' => '2',
			'value'       => 'Add new',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '93',
			'phrase_id'   => '79',
			'language_id' => '2',
			'value'       => '---- Status ----',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '94',
			'phrase_id'   => '80',
			'language_id' => '2',
			'value'       => 'Save',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '95',
			'phrase_id'   => '81',
			'language_id' => '2',
			'value'       => 'Back',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '96',
			'phrase_id'   => '12',
			'language_id' => '1',
			'value'       => 'Đăng xuất
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '97',
			'phrase_id'   => '13',
			'language_id' => '1',
			'value'       => 'Xin chào
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '98',
			'phrase_id'   => '82',
			'language_id' => '2',
			'value'       => 'Level',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '99',
			'phrase_id'   => '83',
			'language_id' => '2',
			'value'       => 'Order',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '100',
			'phrase_id'   => '83',
			'language_id' => '1',
			'value'       => 'Sắp xếp',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '101',
			'phrase_id'   => '84',
			'language_id' => '2',
			'value'       => 'Default language',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '102',
			'phrase_id'   => '85',
			'language_id' => '2',
			'value'       => 'Set default language for your website',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '103',
			'phrase_id'   => '86',
			'language_id' => '2',
			'value'       => 'E-mail settings',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '104',
			'phrase_id'   => '87',
			'language_id' => '2',
			'value'       => 'E-mail settings',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '107',
			'phrase_id'   => '90',
			'language_id' => '2',
			'value'       => 'SMTP Host Server',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '108',
			'phrase_id'   => '91',
			'language_id' => '2',
			'value'       => 'SMTP Server, Example: smtp.google.com',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '109',
			'phrase_id'   => '92',
			'language_id' => '2',
			'value'       => 'SMTP User',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '110',
			'phrase_id'   => '93',
			'language_id' => '2',
			'value'       => 'SMTP User',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '111',
			'phrase_id'   => '94',
			'language_id' => '2',
			'value'       => 'SMTP Password',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '112',
			'phrase_id'   => '95',
			'language_id' => '2',
			'value'       => 'Your E-mail password',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '113',
			'phrase_id'   => '96',
			'language_id' => '2',
			'value'       => 'SMTP Port',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '114',
			'phrase_id'   => '97',
			'language_id' => '2',
			'value'       => 'SMTP Port number',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '115',
			'phrase_id'   => '98',
			'language_id' => '2',
			'value'       => 'From E-mail',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '116',
			'phrase_id'   => '99',
			'language_id' => '2',
			'value'       => 'Sending from E-mail...',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '117',
			'phrase_id'   => '100',
			'language_id' => '2',
			'value'       => 'E-mail settings',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '118',
			'phrase_id'   => '101',
			'language_id' => '2',
			'value'       => 'Encrypt type',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '119',
			'phrase_id'   => '102',
			'language_id' => '2',
			'value'       => 'Type of encryption, example: TLS, SSL',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '120',
			'phrase_id'   => '103',
			'language_id' => '2',
			'value'       => 'Logo, title, keyword, description...',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '121',
			'phrase_id'   => '98',
			'language_id' => '1',
			'value'       => 'Gửi từ E-mail',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '122',
			'phrase_id'   => '104',
			'language_id' => '2',
			'value'       => 'Update {1}',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '123',
			'phrase_id'   => '105',
			'language_id' => '2',
			'value'       => 'General',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '124',
			'phrase_id'   => '106',
			'language_id' => '2',
			'value'       => 'Menu items',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '125',
			'phrase_id'   => '107',
			'language_id' => '2',
			'value'       => 'E-mail',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '126',
			'phrase_id'   => '108',
			'language_id' => '2',
			'value'       => 'SEO',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '127',
			'phrase_id'   => '109',
			'language_id' => '2',
			'value'       => 'Title',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '128',
			'phrase_id'   => '110',
			'language_id' => '2',
			'value'       => 'The website title',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '129',
			'phrase_id'   => '111',
			'language_id' => '2',
			'value'       => 'Description',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '130',
			'phrase_id'   => '112',
			'language_id' => '2',
			'value'       => 'The website description',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '133',
			'phrase_id'   => '115',
			'language_id' => '2',
			'value'       => '	Maintainance',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '134',
			'phrase_id'   => '116',
			'language_id' => '2',
			'value'       => 'Active this website?',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '135',
			'phrase_id'   => '117',
			'language_id' => '2',
			'value'       => 'You should deactivate your website before you run maintainance',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '136',
			'phrase_id'   => '118',
			'language_id' => '2',
			'value'       => 'Notification',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '137',
			'phrase_id'   => '119',
			'language_id' => '2',
			'value'       => 'Notice when the website is deactivated',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '138',
			'phrase_id'   => '120',
			'language_id' => '2',
			'value'       => 'Logo',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '139',
			'phrase_id'   => '121',
			'language_id' => '2',
			'value'       => 'The website logo',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '140',
			'phrase_id'   => '122',
			'language_id' => '2',
			'value'       => 'Favicon',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '141',
			'phrase_id'   => '123',
			'language_id' => '2',
			'value'       => 'The small icon with .ico format, it will be displayed before title on browser',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '142',
			'phrase_id'   => '124',
			'language_id' => '2',
			'value'       => 'Hotline',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '143',
			'phrase_id'   => '125',
			'language_id' => '2',
			'value'       => 'Hotline phone number',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '144',
			'phrase_id'   => '108',
			'language_id' => '1',
			'value'       => 'SEO',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '145',
			'phrase_id'   => '115',
			'language_id' => '1',
			'value'       => 'Bảo trì',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '147',
			'phrase_id'   => '127',
			'language_id' => '2',
			'value'       => 'About us',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '149',
			'phrase_id'   => '105',
			'language_id' => '1',
			'value'       => 'Tổng quan',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '150',
			'phrase_id'   => '34',
			'language_id' => '1',
			'value'       => 'Tổng quan',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '151',
			'phrase_id'   => '127',
			'language_id' => '1',
			'value'       => 'Giới thiệu',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '152',
			'phrase_id'   => '58',
			'language_id' => '1',
			'value'       => 'Danh sách {1}',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '153',
			'phrase_id'   => '53',
			'language_id' => '1',
			'value'       => 'E-mail',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '154',
			'phrase_id'   => '125',
			'language_id' => '1',
			'value'       => 'Số điện thoại Hotline',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '155',
			'phrase_id'   => '124',
			'language_id' => '1',
			'value'       => 'Hotline',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '156',
			'phrase_id'   => '120',
			'language_id' => '1',
			'value'       => 'Logo',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '157',
			'phrase_id'   => '121',
			'language_id' => '1',
			'value'       => 'Ảnh đại diện của website',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '158',
			'phrase_id'   => '122',
			'language_id' => '1',
			'value'       => 'Favicon',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '159',
			'phrase_id'   => '123',
			'language_id' => '1',
			'value'       => 'Biểu tượng nhỏ với định dạng .ico, sẽ hiển thị trước tiêu đề của website
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '160',
			'phrase_id'   => '84',
			'language_id' => '1',
			'value'       => 'Ngôn ngữ chính',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '161',
			'phrase_id'   => '85',
			'language_id' => '1',
			'value'       => 'Cài đặt ngôn ngữ chính sử dụng cho website',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '162',
			'phrase_id'   => '116',
			'language_id' => '1',
			'value'       => 'Website đang hoạt động?',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '163',
			'phrase_id'   => '117',
			'language_id' => '1',
			'value'       => 'Bạn có thể tắt chế độ hoạt động của website trước mỗi khi cần bảo trì',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '164',
			'phrase_id'   => '118',
			'language_id' => '1',
			'value'       => 'Nội dung thông báo',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '165',
			'phrase_id'   => '119',
			'language_id' => '1',
			'value'       => 'Nội dung thông báo được hiển thị khi website bảo trì',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '166',
			'phrase_id'   => '109',
			'language_id' => '1',
			'value'       => 'Tiêu đề',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '167',
			'phrase_id'   => '110',
			'language_id' => '1',
			'value'       => 'Tiêu đề trình duyệt của website',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '168',
			'phrase_id'   => '111',
			'language_id' => '1',
			'value'       => 'Chú thích',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '169',
			'phrase_id'   => '112',
			'language_id' => '1',
			'value'       => 'Nội dung chú thích của website',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '170',
			'phrase_id'   => '99',
			'language_id' => '1',
			'value'       => 'Gửi từ địa chỉ email',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '171',
			'phrase_id'   => '90',
			'language_id' => '1',
			'value'       => 'Máy chủ SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '172',
			'phrase_id'   => '91',
			'language_id' => '1',
			'value'       => 'Địa chỉ máy chủ SMTP, Ví dụ: smtp.gmail.com',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '173',
			'phrase_id'   => '92',
			'language_id' => '1',
			'value'       => 'Tài khoản SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '174',
			'phrase_id'   => '94',
			'language_id' => '1',
			'value'       => 'Mật khẩu SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '175',
			'phrase_id'   => '96',
			'language_id' => '1',
			'value'       => 'Cổng SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '176',
			'phrase_id'   => '93',
			'language_id' => '1',
			'value'       => 'Tài khoản dùng để xác thực SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '177',
			'phrase_id'   => '95',
			'language_id' => '1',
			'value'       => 'Mật khẩu dùng để xác thực SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '178',
			'phrase_id'   => '97',
			'language_id' => '1',
			'value'       => 'Cổng kết nối SMTP',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '179',
			'phrase_id'   => '101',
			'language_id' => '1',
			'value'       => 'Kiểu mã hóa',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '180',
			'phrase_id'   => '102',
			'language_id' => '1',
			'value'       => 'Kiểu mã hóa, Ví dụ: TLS, SSL, NONE',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '181',
			'phrase_id'   => '100',
			'language_id' => '1',
			'value'       => 'Cấu hình E-mail',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '182',
			'phrase_id'   => '129',
			'language_id' => '1',
			'value'       => 'Sao lưu dữ liệu qua email
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '183',
			'phrase_id'   => '130',
			'language_id' => '1',
			'value'       => 'Kích hoạt việc sao lưu dữ liệu qua Email
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '184',
			'phrase_id'   => '131',
			'language_id' => '1',
			'value'       => 'Sao lưu
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '185',
			'phrase_id'   => '132',
			'language_id' => '1',
			'value'       => 'Gửi từ Email',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '186',
			'phrase_id'   => '133',
			'language_id' => '1',
			'value'       => 'Gửi sao lưu từ địa chỉ email này',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '187',
			'phrase_id'   => '134',
			'language_id' => '1',
			'value'       => 'Gửi đến email
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '188',
			'phrase_id'   => '135',
			'language_id' => '1',
			'value'       => 'Gửi bản sao lưu đến địa chỉ email này
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '189',
			'phrase_id'   => '136',
			'language_id' => '1',
			'value'       => 'Sao lưu qua FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '190',
			'phrase_id'   => '137',
			'language_id' => '1',
			'value'       => 'Kích hoạt chức năng gửi sao lưu qua FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '191',
			'phrase_id'   => '138',
			'language_id' => '1',
			'value'       => 'Máy chủ FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '192',
			'phrase_id'   => '139',
			'language_id' => '1',
			'value'       => 'Địa chỉ máy chủ FTP dùng để lưu trữ bản sao lưu
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '193',
			'phrase_id'   => '140',
			'language_id' => '1',
			'value'       => 'Cổng kết nối FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '194',
			'phrase_id'   => '141',
			'language_id' => '1',
			'value'       => '',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '195',
			'phrase_id'   => '142',
			'language_id' => '1',
			'value'       => 'Tài khoản FTP

',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '196',
			'phrase_id'   => '143',
			'language_id' => '1',
			'value'       => 'Tài khoản đăng nhập thông qua FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '197',
			'phrase_id'   => '144',
			'language_id' => '1',
			'value'       => 'Mật khẩu FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '198',
			'phrase_id'   => '145',
			'language_id' => '1',
			'value'       => 'Mật khẩu đăng nhập thông qua FTP
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '199',
			'phrase_id'   => '146',
			'language_id' => '1',
			'value'       => 'Kết nối SSL
',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '200',
			'phrase_id'   => '147',
			'language_id' => '1',
			'value'       => '',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '201',
			'phrase_id'   => '148',
			'language_id' => '1',
			'value'       => 'Thư mục chứa bản sao lưu',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '202',
			'phrase_id'   => '149',
			'language_id' => '1',
			'value'       => 'Đường dẫn đến thư mục chứa bản sao lưu. Ví dụ: \"home/user/public_html/backup\"',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '203',
			'phrase_id'   => '150',
			'language_id' => '1',
			'value'       => 'Thời gian phiên làm việc',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '204',
			'phrase_id'   => '151',
			'language_id' => '1',
			'value'       => '',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '205',
			'phrase_id'   => '152',
			'language_id' => '1',
			'value'       => 'Thêm thời gian vào trước tệp sao lưu',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '206',
			'phrase_id'   => '153',
			'language_id' => '1',
			'value'       => 'Ví dụ: 20160919_backup.zip',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '207',
			'phrase_id'   => '154',
			'language_id' => '1',
			'value'       => '',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '208',
			'phrase_id'   => '155',
			'language_id' => '1',
			'value'       => '',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '209',
			'phrase_id'   => '156',
			'language_id' => '2',
			'value'       => 'error: phrase [site] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '210',
			'phrase_id'   => '157',
			'language_id' => '2',
			'value'       => 'error: phrase [dashboard] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '211',
			'phrase_id'   => '158',
			'language_id' => '2',
			'value'       => 'error: phrase [add_new] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '212',
			'phrase_id'   => '159',
			'language_id' => '1',
			'value'       => 'error: phrase [page] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '213',
			'phrase_id'   => '160',
			'language_id' => '1',
			'value'       => 'error: phrase [category] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '214',
			'phrase_id'   => '161',
			'language_id' => '1',
			'value'       => 'error: phrase [image] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '215',
			'phrase_id'   => '162',
			'language_id' => '2',
			'value'       => 'error: phrase [contact] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '216',
			'phrase_id'   => '163',
			'language_id' => '2',
			'value'       => 'error: phrase [order] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '217',
			'phrase_id'   => '164',
			'language_id' => '2',
			'value'       => 'error: phrase [post] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '218',
			'phrase_id'   => '165',
			'language_id' => '2',
			'value'       => 'error: phrase [product] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '219',
			'phrase_id'   => '166',
			'language_id' => '2',
			'value'       => 'error: phrase [description] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '220',
			'phrase_id'   => '167',
			'language_id' => '2',
			'value'       => 'error: phrase [content] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '221',
			'phrase_id'   => '168',
			'language_id' => '1',
			'value'       => 'error: phrase [category_parent] not found',
		]);
		$this->insert('{{%phrase_translate}}', [
			'id'          => '222',
			'phrase_id'   => '169',
			'language_id' => '1',
			'value'       => 'error: phrase [type] not found',
		]);
	}

	public function safeDown() {
		$this->dropIndex('phrase_translate_fk_phrase', '{{%phrase_translate}}');
		$this->dropIndex('phrase_translate_fk_language', '{{%phrase_translate}}');
		$this->dropTable('{{%phrase_translate}}');
	}
}
