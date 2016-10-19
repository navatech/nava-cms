<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050113_contact extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%contact}}', [
			'id'         => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'fullname'   => Schema::TYPE_STRING . '(255) NOT NULL',
			'email'      => Schema::TYPE_STRING . '(255) NOT NULL',
			'phone'      => Schema::TYPE_STRING . '(255) NOT NULL',
			'title'      => Schema::TYPE_STRING . '(255) NOT NULL',
			'content'    => Schema::TYPE_STRING . '(255) NOT NULL',
			'created_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'status'     => Schema::TYPE_BOOLEAN . '(1) NOT NULL',
		], $tableOptions);
		$this->insert('{{%contact}}', [
			'id'         => '1',
			'fullname'   => 'ha thuc',
			'email'      => 'thuchm92@gmail.com',
			'phone'      => '0989558154',
			'title'      => 'test',
			'content'    => 'test',
			'created_at' => '2016-10-04 16:42:53',
			'status'     => '1',
		]);
		$this->insert('{{%contact}}', [
			'id'         => '1',
			'fullname'   => 'ha thuc',
			'email'      => 'thuchm92@gmail.com',
			'phone'      => '0989558154',
			'title'      => 'test',
			'content'    => 'test',
			'created_at' => '2016-10-04 16:42:53',
			'status'     => '1',
		]);
		$this->insert('{{%contact}}', [
			'id'         => '1',
			'fullname'   => 'ha thuc',
			'email'      => 'thuchm92@gmail.com',
			'phone'      => '0989558154',
			'title'      => 'test',
			'content'    => 'test',
			'created_at' => '2016-10-04 16:42:53',
			'status'     => '1',
		]);
		$this->insert('{{%contact}}', [
			'id'         => '1',
			'fullname'   => 'ha thuc',
			'email'      => 'thuchm92@gmail.com',
			'phone'      => '0989558154',
			'title'      => 'test',
			'content'    => 'test',
			'created_at' => '2016-10-04 16:42:53',
			'status'     => '1',
		]);
		$this->insert('{{%contact}}', [
			'id'         => '1',
			'fullname'   => 'ha thuc',
			'email'      => 'thuchm92@gmail.com',
			'phone'      => '0989558154',
			'title'      => 'test',
			'content'    => 'test',
			'created_at' => '2016-10-04 16:42:53',
			'status'     => '1',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%contact}}');
	}
}
