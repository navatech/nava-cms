<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050132_role extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%role}}', [
			'id'               => Schema::TYPE_PK . '',
			'name'             => Schema::TYPE_STRING . '(255) NOT NULL',
			'permissions'      => Schema::TYPE_TEXT . ' NOT NULL',
			'is_backend_login' => Schema::TYPE_SMALLINT . '(1) NOT NULL DEFAULT "0"',
		], $tableOptions);
		$this->insert('{{%role}}', [
			'id'               => '1',
			'name'             => 'Administrator',
			'permissions'      => '{\"navatech\\role\\controllers\\DefaultController\":{\"index\":1,\"create\":1,\"update\":1,\"delete\":1}}',
			'is_backend_login' => '1',
		]);
		$this->insert('{{%role}}', [
			'id'               => '2',
			'name'             => 'Staff',
			'permissions'      => '{\"backend\\controllers\\AccountController\":{\"index\":\"1\",\"view\":\"1\",\"create\":\"1\",\"update\":\"1\",\"delete\":\"1\"},\"navatech\\role\\controllers\\DefaultController\":{\"index\":\"1\",\"create\":\"1\",\"update\":\"1\",\"delete\":\"1\",\"view\":\"1\"}}',
			'is_backend_login' => '1',
		]);
		$this->insert('{{%role}}', [
			'id'               => '3',
			'name'             => 'Member',
			'permissions'      => '',
			'is_backend_login' => '0',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%role}}');
	}
}
