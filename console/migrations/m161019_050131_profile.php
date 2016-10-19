<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050131_profile extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%profile}}', [
			'user_id'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'name'           => Schema::TYPE_STRING . '(255)',
			'public_email'   => Schema::TYPE_STRING . '(255)',
			'gravatar_email' => Schema::TYPE_STRING . '(255)',
			'gravatar_id'    => Schema::TYPE_STRING . '(32)',
			'location'       => Schema::TYPE_STRING . '(255)',
			'website'        => Schema::TYPE_STRING . '(255)',
			'bio'            => Schema::TYPE_TEXT . '',
			'timezone'       => Schema::TYPE_STRING . '(40)',
		], $tableOptions);
		$this->insert('{{%profile}}', [
			'user_id'        => '1',
			'name'           => '',
			'public_email'   => '',
			'gravatar_email' => '',
			'gravatar_id'    => '',
			'location'       => '',
			'website'        => '',
			'bio'            => '',
			'timezone'       => '',
		]);
		$this->insert('{{%profile}}', [
			'user_id'        => '2',
			'name'           => '',
			'public_email'   => '',
			'gravatar_email' => '',
			'gravatar_id'    => '',
			'location'       => '',
			'website'        => '',
			'bio'            => '',
			'timezone'       => '',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%profile}}');
	}
}
