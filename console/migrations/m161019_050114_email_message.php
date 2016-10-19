<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050114_email_message extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%email_message}}', [
			'id'        => Schema::TYPE_PK . '',
			'status'    => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "0"',
			'priority'  => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "0"',
			'from'      => Schema::TYPE_STRING . '(255)',
			'to'        => Schema::TYPE_STRING . '(255)',
			'subject'   => Schema::TYPE_STRING . '(255)',
			'text'      => Schema::TYPE_TEXT . '',
			'createdAt' => Schema::TYPE_DATETIME . '',
			'sentAt'    => Schema::TYPE_DATETIME . '',
			'bcc'       => Schema::TYPE_TEXT . '',
			'files'     => Schema::TYPE_TEXT . '',
		], $tableOptions);
		$this->insert('{{%email_message}}', [
			'id'        => '1',
			'status'    => '1',
			'priority'  => '0',
			'from'      => 'thuchm92@gmail.com',
			'to'        => 'thieugia9210@gmail.com',
			'subject'   => 'test',
			'text'      => 'test',
			'createdAt' => '2016-09-08 00:00:00',
			'sentAt'    => '2016-09-02 00:00:00',
			'bcc'       => '',
			'files'     => '',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%email_message}}');
	}
}
