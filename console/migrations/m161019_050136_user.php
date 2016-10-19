<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050136_user extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%user}}', [
			'id'                => Schema::TYPE_PK . '',
			'username'          => Schema::TYPE_STRING . '(255) NOT NULL',
			'email'             => Schema::TYPE_STRING . '(255) NOT NULL',
			'password_hash'     => Schema::TYPE_STRING . '(60) NOT NULL',
			'auth_key'          => Schema::TYPE_STRING . '(32) NOT NULL',
			'confirmed_at'      => Schema::TYPE_INTEGER . '(11)',
			'unconfirmed_email' => Schema::TYPE_STRING . '(255)',
			'blocked_at'        => Schema::TYPE_INTEGER . '(11)',
			'registration_ip'   => Schema::TYPE_STRING . '(45)',
			'created_at'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'updated_at'        => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'flags'             => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "0"',
			'role_id'           => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "1"',
		], $tableOptions);
		$this->createIndex('user_unique_email', '{{%user}}', 'email', 1);
		$this->createIndex('user_unique_username', '{{%user}}', 'username', 1);
		$this->insert('{{%user}}', [
			'id'                => '1',
			'username'          => 'admin',
			'email'             => 'admin@gmail.com',
			'password_hash'     => '$2y$10$YiHv/jRh.F3B41YlRDTZCOtT970o6nNybcy2wwYS3ncRhpjmDW3gi',
			'auth_key'          => 'X2eREcnF64l7EPaOCzEqC0y9Yt2EtFCH',
			'confirmed_at'      => '1456216036',
			'unconfirmed_email' => '',
			'blocked_at'        => '',
			'registration_ip'   => '127.0.0.1',
			'created_at'        => '1456216036',
			'updated_at'        => '1456216036',
			'flags'             => '0',
			'role_id'           => '1',
		]);
		$this->insert('{{%user}}', [
			'id'                => '2',
			'username'          => 'test',
			'email'             => 'a@b.com',
			'password_hash'     => '$2y$10$KpV8l9Xb.RYBBrt.011wwuxmVueM8yUE2p2NH7q.rWawgkzqnzlxi',
			'auth_key'          => 'CmEJUI3Iifs_2dQrKCk0Jp5cwfuFkm_-',
			'confirmed_at'      => '1474357268',
			'unconfirmed_email' => '',
			'blocked_at'        => '',
			'registration_ip'   => '222.254.34.56',
			'created_at'        => '1474357268',
			'updated_at'        => '1474357268',
			'flags'             => '0',
			'role_id'           => '1',
		]);
	}

	public function safeDown() {
		$this->dropIndex('user_unique_email', '{{%user}}');
		$this->dropIndex('user_unique_username', '{{%user}}');
		$this->dropTable('{{%user}}');
	}
}
