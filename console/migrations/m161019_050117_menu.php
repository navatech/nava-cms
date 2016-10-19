<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050117_menu extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%menu}}', [
			'id'     => Schema::TYPE_PK . '',
			'name'   => Schema::TYPE_STRING . '(255) NOT NULL',
			'status' => Schema::TYPE_INTEGER . '(11) NOT NULL',
		], $tableOptions);
		$this->insert('{{%menu}}', [
			'id'     => '1',
			'name'   => 'Admin',
			'status' => '1',
		]);
		$this->insert('{{%menu}}', [
			'id'     => '2',
			'name'   => 'Staff',
			'status' => '1',
		]);
		$this->insert('{{%menu}}', [
			'id'     => '3',
			'name'   => 'Customer',
			'status' => '1',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%menu}}');
	}
}
