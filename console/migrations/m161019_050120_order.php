<?php
use yii\db\Migration;
use yii\db\Schema;

class m161019_050120_order extends Migration {

	public function safeUp() {
		$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
		$this->createTable('{{%order}}', [
			'id'               => Schema::TYPE_PK . '',
			'order_number'     => Schema::TYPE_STRING . '(255) NOT NULL',
			'user_id'          => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'phone_number'     => Schema::TYPE_STRING . '(255) NOT NULL',
			'shipping_address' => Schema::TYPE_TEXT . ' NOT NULL',
			'created_at'       => Schema::TYPE_TIMESTAMP . ' NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'total_price'      => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'discount'         => Schema::TYPE_INTEGER . '(11) NOT NULL',
			'status'           => Schema::TYPE_SMALLINT . '(4) NOT NULL DEFAULT "0"',
		], $tableOptions);
	}

	public function safeDown() {
		$this->dropTable('{{%order}}');
	}
}
