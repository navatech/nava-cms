<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050123_page_translate extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%page_translate}}', [
			'id'          => Schema::TYPE_PK . '',
			'page_id'     => Schema::TYPE_INTEGER . '(11)',
			'name'        => Schema::TYPE_TEXT . '',
			'description' => Schema::TYPE_TEXT . '',
			'content'     => Schema::TYPE_TEXT . ' NOT NULL',
			'language'    => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('fk_product_translate_product_id', '{{%page_translate}}', 'page_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_translate_product_id', '{{%page_translate}}');
		$this->dropTable('{{%page_translate}}');
	}
}
