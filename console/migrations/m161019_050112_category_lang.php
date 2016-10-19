<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050112_category_lang extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%category_lang}}', [
			'id'          => Schema::TYPE_PK . '',
			'category_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'name'        => Schema::TYPE_STRING . '(255)',
			'language'    => Schema::TYPE_STRING . '(255) NOT NULL',
		], $tableOptions);
		$this->createIndex('category_lang_fk_category', '{{%category_lang}}', 'category_id', 0);
		$this->insert('{{%category_lang}}', [
			'id'          => '6',
			'category_id' => '21',
			'name'        => 'Category 1',
			'language'    => 'en',
		]);
		$this->insert('{{%category_lang}}', [
			'id'          => '7',
			'category_id' => '22',
			'name'        => 'Category 1',
			'language'    => 'en',
		]);
	}

	public function safeDown() {
		$this->dropIndex('category_lang_fk_category', '{{%category_lang}}');
		$this->dropTable('{{%category_lang}}');
	}
}
