<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050134_social_account extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%social_account}}', [
			'id'         => Schema::TYPE_PK . '',
			'user_id'    => Schema::TYPE_INTEGER . '(11)',
			'provider'   => Schema::TYPE_STRING . '(255) NOT NULL',
			'client_id'  => Schema::TYPE_STRING . '(255) NOT NULL',
			'data'       => Schema::TYPE_TEXT . '',
			'code'       => Schema::TYPE_STRING . '(32)',
			'created_at' => Schema::TYPE_INTEGER . '(11)',
			'email'      => Schema::TYPE_STRING . '(255)',
			'username'   => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('account_unique', '{{%social_account}}', 'provider,client_id', 1);
		$this->createIndex('account_unique_code', '{{%social_account}}', 'code', 1);
		$this->createIndex('fk_user_account', '{{%social_account}}', 'user_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('account_unique', '{{%social_account}}');
		$this->dropIndex('account_unique_code', '{{%social_account}}');
		$this->dropIndex('fk_user_account', '{{%social_account}}');
		$this->dropTable('{{%social_account}}');
	}
}
