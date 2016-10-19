<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050129_product_image extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%product_image}}', [
			'id'         => Schema::TYPE_PK . '',
			'product_id' => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'image'      => Schema::TYPE_STRING . '(255) NOT NULL',
			'status'     => Schema::TYPE_SMALLINT . '(4) NOT NULL DEFAULT "1"',
		], $tableOptions);
		$this->insert('{{%product_image}}', [
			'id'         => '1',
			'product_id' => '1',
			'image'      => '1_0_image.jpg',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '2',
			'product_id' => '1',
			'image'      => '1_1_image.jpg',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '3',
			'product_id' => '3',
			'image'      => '3_0_image.png',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '4',
			'product_id' => '3',
			'image'      => '3_1_image.png',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '5',
			'product_id' => '3',
			'image'      => '3_2_image.png',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '6',
			'product_id' => '4',
			'image'      => '4_0_image.jpg',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '7',
			'product_id' => '5',
			'image'      => '5_0_image.png',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '8',
			'product_id' => '5',
			'image'      => '5_1_image.jpg',
			'status'     => '1',
		]);
		$this->insert('{{%product_image}}', [
			'id'         => '9',
			'product_id' => '6',
			'image'      => '6_0_image.jpg',
			'status'     => '1',
		]);
	}

	public function safeDown() {
		$this->dropTable('{{%product_image}}');
	}
}
