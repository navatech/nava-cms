<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050127_post_lang extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%post_lang}}', [
			'id'          => Schema::TYPE_PK . '',
			'post_id'     => Schema::TYPE_INTEGER . '(11)',
			'name'        => Schema::TYPE_TEXT . '',
			'description' => Schema::TYPE_TEXT . ' NOT NULL',
			'content'     => Schema::TYPE_TEXT . '',
			'language'    => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('fk_product_lang_product_id', '{{%post_lang}}', 'post_id', 0);
		$this->insert('{{%post_lang}}', [
			'id'          => '13',
			'post_id'     => '7',
			'name'        => '',
			'description' => '',
			'content'     => '',
			'language'    => 'vi',
		]);
		$this->insert('{{%post_lang}}', [
			'id'          => '14',
			'post_id'     => '7',
			'name'        => 'post 11',
			'description' => '<p>post 1 descs</p>',
			'content'     => '<p>post 1 contents</p>',
			'language'    => 'en',
		]);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_lang_product_id', '{{%post_lang}}');
		$this->dropTable('{{%post_lang}}');
	}
}
