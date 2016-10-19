<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050130_product_lang extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%product_lang}}', [
			'id'          => Schema::TYPE_PK . '',
			'product_id'  => Schema::TYPE_INTEGER . '(11)',
			'name'        => Schema::TYPE_TEXT . '',
			'description' => Schema::TYPE_TEXT . '',
			'content'     => Schema::TYPE_TEXT . ' NOT NULL',
			'language'    => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('fk_product_lang_product_id', '{{%product_lang}}', 'product_id', 0);
		$this->insert('{{%product_lang}}', [
			'id'          => '1',
			'product_id'  => '1',
			'name'        => 'sản phẩm 1',
			'description' => '<p>product desc</p>',
			'content'     => '<p>product content</p>',
			'language'    => 'vi',
		]);
		$this->insert('{{%product_lang}}', [
			'id'          => '2',
			'product_id'  => '1',
			'name'        => 'product 11',
			'description' => '<p>product descr</p>',
			'content'     => '<p>product contents</p>',
			'language'    => 'en',
		]);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_lang_product_id', '{{%product_lang}}');
		$this->dropTable('{{%product_lang}}');
	}
}
