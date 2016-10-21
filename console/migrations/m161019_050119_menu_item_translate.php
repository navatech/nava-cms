<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050119_menu_item_translate extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%menu_item_translate}}', [
			'id'           => Schema::TYPE_PK . '',
			'menu_item_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'language'     => Schema::TYPE_STRING . '(255) NOT NULL',
			'name'         => Schema::TYPE_STRING . '(255) NOT NULL',
		], $tableOptions);
		$this->createIndex('menu_item_id', 'menu_item_translate', 'menu_item_id', 0);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '1',
			'menu_item_id' => '5',
			'language'     => 'vi',
			'name'         => 'Bảng điều khiển',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '2',
			'menu_item_id' => '5',
			'language'     => 'en',
			'name'         => 'Dashboard',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '3',
			'menu_item_id' => '20',
			'language'     => 'vi',
			'name'         => 'Cấu hình',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '4',
			'menu_item_id' => '20',
			'language'     => 'en',
			'name'         => 'Config',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '5',
			'menu_item_id' => '21',
			'language'     => 'vi',
			'name'         => 'Menu',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '6',
			'menu_item_id' => '21',
			'language'     => 'en',
			'name'         => 'Menus',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '7',
			'menu_item_id' => '22',
			'language'     => 'vi',
			'name'         => 'Phân quyền',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '8',
			'menu_item_id' => '22',
			'language'     => 'en',
			'name'         => 'User Role',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '9',
			'menu_item_id' => '23',
			'language'     => 'vi',
			'name'         => 'Người dùng',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '10',
			'menu_item_id' => '23',
			'language'     => 'en',
			'name'         => 'Users',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '11',
			'menu_item_id' => '24',
			'language'     => 'vi',
			'name'         => 'Menu',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '12',
			'menu_item_id' => '24',
			'language'     => 'en',
			'name'         => 'Menu Item',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '13',
			'menu_item_id' => '25',
			'language'     => 'vi',
			'name'         => 'Email Template',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '14',
			'menu_item_id' => '25',
			'language'     => 'en',
			'name'         => 'Email Template',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '15',
			'menu_item_id' => '26',
			'language'     => 'vi',
			'name'         => 'Danh Mục sản phẩm',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '16',
			'menu_item_id' => '26',
			'language'     => 'en',
			'name'         => 'Categories',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '17',
			'menu_item_id' => '27',
			'language'     => 'vi',
			'name'         => 'Sản phẩm',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '18',
			'menu_item_id' => '27',
			'language'     => 'en',
			'name'         => 'Products',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '19',
			'menu_item_id' => '28',
			'language'     => 'vi',
			'name'         => 'Danh Mục sản phẩm',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '20',
			'menu_item_id' => '28',
			'language'     => 'en',
			'name'         => 'All Products',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '21',
			'menu_item_id' => '29',
			'language'     => 'vi',
			'name'         => 'Bài Viết',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '22',
			'menu_item_id' => '29',
			'language'     => 'en',
			'name'         => 'Posts',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '23',
			'menu_item_id' => '30',
			'language'     => 'vi',
			'name'         => 'Danh mục bài viết',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '24',
			'menu_item_id' => '30',
			'language'     => 'en',
			'name'         => 'Categories',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '25',
			'menu_item_id' => '31',
			'language'     => 'vi',
			'name'         => 'Liên hệ',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '26',
			'menu_item_id' => '31',
			'language'     => 'en',
			'name'         => 'Contact',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '27',
			'menu_item_id' => '32',
			'language'     => 'vi',
			'name'         => 'Trang',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '28',
			'menu_item_id' => '32',
			'language'     => 'en',
			'name'         => 'Pages',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '29',
			'menu_item_id' => '33',
			'language'     => 'vi',
			'name'         => 'Danh sách bài viết',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '30',
			'menu_item_id' => '33',
			'language'     => 'en',
			'name'         => 'All Posts',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '31',
			'menu_item_id' => '34',
			'language'     => 'vi',
			'name'         => 'Đơn hàng',
		]);
		$this->insert('{{%menu_item_translate}}', [
			'id'           => '32',
			'menu_item_id' => '34',
			'language'     => 'en',
			'name'         => 'Order',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%menu_item_translate}}');
	}
}
