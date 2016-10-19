<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050111_category extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%category}}', [
			'id'        => Schema::TYPE_PK . '',
			'parent_id' => Schema::TYPE_INTEGER . '(11) NOT NULL DEFAULT "0"',
			'type'      => Schema::TYPE_INTEGER . '(11)',
			'order'     => Schema::TYPE_INTEGER . '(11)',
			'image'     => Schema::TYPE_STRING . '(255)',
			'status'    => Schema::TYPE_INTEGER . '(1) NOT NULL',
		], $tableOptions);
		$this->insert('{{%category}}', [
			'id'        => '21',
			'parent_id' => '0',
			'type'      => '1',
			'order'     => '',
			'image'     => '_image.png',
			'status'    => '1',
		]);
		$this->insert('{{%category}}', [
			'id'        => '22',
			'parent_id' => '0',
			'type'      => '2',
			'order'     => '',
			'image'     => '_image.png',
			'status'    => '1',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%category}}');
	}
}
