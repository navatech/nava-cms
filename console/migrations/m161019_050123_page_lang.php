<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050123_page_lang extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%page_lang}}', [
			'id'          => Schema::TYPE_PK . '',
			'page_id'     => Schema::TYPE_INTEGER . '(11)',
			'name'        => Schema::TYPE_TEXT . '',
			'description' => Schema::TYPE_TEXT . '',
			'content'     => Schema::TYPE_TEXT . ' NOT NULL',
			'language'    => Schema::TYPE_STRING . '(255)',
		], $tableOptions);
		$this->createIndex('fk_product_lang_product_id', '{{%page_lang}}', 'page_id', 0);
		$this->insert('{{%page_lang}}', [
			'id'          => '1',
			'page_id'     => '1',
			'name'        => 'ffsdfasfsf',
			'description' => '<p>sdffasdf</p>',
			'content'     => '<p>fdfsfasfsfds</p>',
			'language'    => 'vi',
		]);
		$this->insert('{{%page_lang}}', [
			'id'          => '2',
			'page_id'     => '1',
			'name'        => 'ffsdafdafsd',
			'description' => '<p>&aacute;dfsfsfsfs</p>',
			'content'     => '<p>fsdffsfsafds</p>',
			'language'    => 'en',
		]);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_lang_product_id', '{{%page_lang}}');
		$this->dropTable('{{%page_lang}}');
	}
}
