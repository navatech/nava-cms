<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050122_page extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%page}}', [
			'id'          => Schema::TYPE_PK . '',
			'status'      => Schema::TYPE_INTEGER . '(11)',
			'category_id' => Schema::TYPE_INTEGER . '(11)',
			'image'       => Schema::TYPE_STRING . '(255)',
			'created_at'  => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at'  => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT "0000-00-00 00:00:00"',
		], $tableOptions);
		$this->createIndex('fk_product_location_id', '{{%page}}', 'category_id', 0);
		$this->insert('{{%page}}', [
			'id'          => '1',
			'status'      => '1',
			'category_id' => '',
			'image'       => '1_image.png',
			'created_at'  => '2016-10-04 14:47:58',
			'updated_at'  => '2016-10-04 14:47:58',
		]);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_location_id', '{{%page}}');
		$this->dropTable('{{%page}}');
	}
}
