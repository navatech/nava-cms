<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050118_menu_item extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%menu_item}}', [
			'id'         => Schema::TYPE_PK . '',
			'menu_id'    => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'icon'       => Schema::TYPE_STRING . '(255) NOT NULL',
			'parent_id'  => Schema::TYPE_INTEGER . '(11) DEFAULT "0"',
			'level'      => Schema::TYPE_SMALLINT . '(3) unsigned NOT NULL DEFAULT "0"',
			'url'        => Schema::TYPE_STRING . '(255) NOT NULL',
			'sort_order' => Schema::TYPE_SMALLINT . '(3) NOT NULL DEFAULT "0"',
			'status'     => Schema::TYPE_SMALLINT . '(3) unsigned NOT NULL DEFAULT "1"',
		], $tableOptions);
		$this->createIndex('parent_id', '{{%menu_item}}', 'parent_id', 0);
		$this->insert('{{%menu_item}}', [
			'id'         => '5',
			'menu_id'    => '1',
			'icon'       => 'fa-bank',
			'parent_id'  => '0',
			'level'      => '1',
			'url'        => 'site/index',
			'sort_order' => '1',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '20',
			'menu_id'    => '1',
			'icon'       => 'fa-cogs',
			'parent_id'  => '0',
			'level'      => '1',
			'url'        => 'setting/general',
			'sort_order' => '15',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '21',
			'menu_id'    => '1',
			'icon'       => 'fa-align-justify',
			'parent_id'  => '0',
			'level'      => '1',
			'url'        => 'menu/index',
			'sort_order' => '11',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '22',
			'menu_id'    => '1',
			'icon'       => 'fa-users',
			'parent_id'  => '23',
			'level'      => '1',
			'url'        => 'role/default/index',
			'sort_order' => '10',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '23',
			'menu_id'    => '1',
			'icon'       => 'fa-user',
			'parent_id'  => '0',
			'level'      => '1',
			'url'        => 'account/index',
			'sort_order' => '9',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '24',
			'menu_id'    => '1',
			'icon'       => 'fa-align-left',
			'parent_id'  => '21',
			'level'      => '1',
			'url'        => 'menu-item/index',
			'sort_order' => '12',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '25',
			'menu_id'    => '1',
			'icon'       => 'fa-envelope',
			'parent_id'  => '0',
			'level'      => '1',
			'url'        => 'mailer/template',
			'sort_order' => '14',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '26',
			'menu_id'    => '1',
			'icon'       => 'fa-align-center',
			'parent_id'  => '27',
			'level'      => '4',
			'url'        => 'category/index?type=1',
			'sort_order' => '3',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '27',
			'menu_id'    => '1',
			'icon'       => 'fa-automobile',
			'parent_id'  => '0',
			'level'      => '0',
			'url'        => 'product/index',
			'sort_order' => '2',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '28',
			'menu_id'    => '1',
			'icon'       => 'fa-align-left',
			'parent_id'  => '27',
			'level'      => '0',
			'url'        => 'product/index',
			'sort_order' => '4',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '29',
			'menu_id'    => '1',
			'icon'       => 'fa-amazon',
			'parent_id'  => '0',
			'level'      => '0',
			'url'        => 'post/index',
			'sort_order' => '5',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '30',
			'menu_id'    => '1',
			'icon'       => 'fa-android',
			'parent_id'  => '29',
			'level'      => '0',
			'url'        => 'category/index?type=2',
			'sort_order' => '6',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '31',
			'menu_id'    => '1',
			'icon'       => 'fa-angellist',
			'parent_id'  => '0',
			'level'      => '0',
			'url'        => 'contact/index',
			'sort_order' => '13',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '32',
			'menu_id'    => '1',
			'icon'       => 'fa-bank',
			'parent_id'  => '0',
			'level'      => '0',
			'url'        => 'page/index',
			'sort_order' => '8',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '33',
			'menu_id'    => '1',
			'icon'       => 'fa-area-chart',
			'parent_id'  => '29',
			'level'      => '0',
			'url'        => 'post/index',
			'sort_order' => '7',
			'status'     => '1',
		]);
		$this->insert('{{%menu_item}}', [
			'id'         => '34',
			'menu_id'    => '1',
			'icon'       => 'fa-align-justify',
			'parent_id'  => '0',
			'level'      => '0',
			'url'        => 'order/index',
			'sort_order' => '2',
			'status'     => '1',
		]);
	}

	public function safeDown() {
		$this->dropIndex('parent_id', '{{%menu_item}}');
		$this->dropTable('{{%menu_item}}');
	}
}
