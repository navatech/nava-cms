<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050127_post_translate extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%post_translate}}', [
			'id'          => Schema::TYPE_PK . '',
			'post_id'     => Schema::TYPE_INTEGER . '(11)',
			'name'        => Schema::TYPE_TEXT . '',
			'description' => Schema::TYPE_TEXT . ' NOT NULL',
			'content'     => Schema::TYPE_TEXT . '',
			'language'    => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('fk_product_translate_product_id', '{{%post_translate}}', 'post_id', 0);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_translate_product_id', '{{%post_translate}}');
		$this->dropTable('{{%post_translate}}');
	}
}
