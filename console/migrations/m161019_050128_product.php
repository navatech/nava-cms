<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050128_product extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%product}}', [
			'id'          => Schema::TYPE_PK . '',
			'price'       => Schema::TYPE_DOUBLE . '',
			'status'      => Schema::TYPE_INTEGER . '(11)',
			'category_id' => Schema::TYPE_INTEGER . '(11)',
			'image'       => Schema::TYPE_STRING . '(255)',
			'created_at'  => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at'  => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT "0000-00-00 00:00:00"',
		], $tableOptions);
		$this->createIndex('fk_product_location_id', '{{%product}}', 'category_id', 0);
		$this->insert('{{%product}}', [
			'id'          => '1',
			'price'       => '1236',
			'status'      => '1',
			'category_id' => '21',
			'image'       => '1_image.png',
			'created_at'  => '2016-10-06 17:17:28',
			'updated_at'  => '2016-10-06 18:21:00',
		]);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_location_id', '{{%product}}');
		$this->dropTable('{{%product}}');
	}
}
