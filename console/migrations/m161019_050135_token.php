<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050135_token extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%token}}', [
			'user_id'    => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'code'       => Schema::TYPE_STRING . '(32) NOT NULL',
			'created_at' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'type'       => Schema::TYPE_SMALLINT . '(6) NOT NULL',
		], $tableOptions);
		$this->createIndex('token_unique', '{{%token}}', 'user_id,code,type', 1);
	}

	public function safeDown() {
		$this->dropIndex('token_unique', '{{%token}}');
		$this->dropTable('{{%token}}');
	}
}
