<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050129_product_image extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%product_image}}', [
			'id'         => Schema::TYPE_PK . '',
			'product_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'image'      => Schema::TYPE_STRING . '(255) NOT NULL',
			'status'     => Schema::TYPE_SMALLINT . '(4) NOT NULL DEFAULT "1"',
		], $tableOptions);
	}

	public function safeDown() {
		$this->dropTable('{{%product_image}}');
	}
}
