<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050116_language extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%language}}', [
			'id'      => Schema::TYPE_PK . '',
			'name'    => Schema::TYPE_STRING . '(255) NOT NULL',
			'code'    => Schema::TYPE_STRING . '(5) NOT NULL',
			'country' => Schema::TYPE_STRING . '(255) NOT NULL',
			'status'  => Schema::TYPE_INTEGER . '(1) NOT NULL DEFAULT "1"',
		], $tableOptions);
		$this->insert('{{%language}}', [
			'id'      => '1',
			'name'    => 'Việt Nam',
			'code'    => 'vi',
			'country' => 'vn',
			'status'  => '1',
		]);
		$this->insert('{{%language}}', [
			'id'      => '2',
			'name'    => 'English',
			'code'    => 'en',
			'country' => 'us',
			'status'  => '1',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%language}}');
	}
}
