<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050115_email_template extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%email_template}}', [
			'id'       => Schema::TYPE_PK . '',
			'shortcut' => Schema::TYPE_STRING . '(255) NOT NULL',
			'from'     => Schema::TYPE_STRING . '(255) NOT NULL',
			'subject'  => Schema::TYPE_STRING . '(255)',
			'text'     => Schema::TYPE_TEXT . ' NOT NULL',
			'language' => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('shortcut', '{{%email_template}}', 'shortcut,language', 1);
		$this->insert('{{%email_template}}', [
			'id'       => '1',
			'shortcut' => 'job2',
			'from'     => 'thuchm92@gmail.com',
			'subject'  => 'Việc mới dành cho bạn',
			'text'     => '<p>tttsdsdggdggsdgsdgdsgsgsgsgdg2gasggs sdgsgsdgdsgdsggs</p>',
			'language' => 'en-US',
		]);
	}

	public function safeDown() {
		$this->dropIndex('shortcut', '{{%email_template}}');
		$this->dropTable('{{%email_template}}');
	}
}
