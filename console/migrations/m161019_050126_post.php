<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050126_post extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%post}}', [
			'id'          => Schema::TYPE_PK . '',
			'status'      => Schema::TYPE_INTEGER . '(11)',
			'category_id' => Schema::TYPE_INTEGER . '(11)',
			'image'       => Schema::TYPE_STRING . '(255)',
			'created_at'  => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'updated_at'  => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT "0000-00-00 00:00:00"',
		], $tableOptions);
		$this->createIndex('fk_product_location_id', '{{%post}}', 'category_id', 0);
		$this->insert('{{%post}}', [
			'id'          => '7',
			'status'      => '0',
			'category_id' => '22',
			'image'       => '_image.png',
			'created_at'  => '2016-10-06 18:21:59',
			'updated_at'  => '2016-10-06 18:22:14',
		]);
	}

	public function safeDown() {
		$this->dropIndex('fk_product_location_id', '{{%post}}');
		$this->dropTable('{{%post}}');
	}
}
