<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050130_product_translate extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%product_translate}}', [
			'id'          => Schema::TYPE_PK . '',
			'product_id'  => Schema::TYPE_INTEGER . '(11)',
			'name'        => Schema::TYPE_TEXT . '',
			'description' => Schema::TYPE_TEXT . '',
			'content'     => Schema::TYPE_TEXT . ' NOT NULL',
			'language'    => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('fk_product_translate_product_id', '{{%product_translate}}', 'product_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_translate_product_id', '{{%product_translate}}');
		$this->dropTable('{{%product_translate}}');
	}
}
