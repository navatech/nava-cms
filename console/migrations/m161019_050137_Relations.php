<?php
use yii\db\Migration;

class m161019_050137_Relations extends Migration {

	public function safeUp() {
		$this->addForeignKey('fk_category_translate_category_id', '{{%category_translate}}', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_page_translate_page_id', '{{%page_translate}}', 'page_id', 'page', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_phrase_translate_language_id', '{{%phrase_translate}}', 'language_id', 'language', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_phrase_translate_phrase_id', '{{%phrase_translate}}', 'phrase_id', 'phrase', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_post_category_id', '{{%post}}', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_post_translate_post_id', '{{%post_translate}}', 'post_id', 'post', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_product_category_id', '{{%product}}', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_product_translate_product_id', '{{%product_translate}}', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_profile_user_id', '{{%profile}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_social_account_user_id', '{{%social_account}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_token_user_id', '{{%token}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_menu_item_menu_id', '{{%menu_item}}', 'menu_id', 'menu', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_menu_item_translate_menu_item_id', '{{%menu_item_translate}}', 'menu_item_id', 'menu_item', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_order_user_id', '{{%order}}', 'user_id', 'user', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_order_item_order_id', '{{%order_item}}', 'order_id', 'order', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_order_item_product_id', '{{%order_item}}', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_page_category_id', '{{%page}}', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
		$this->addForeignKey('fk_product_image_product_id', '{{%product_image}}', 'product_id', 'product', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown() {
		$this->dropForeignKey('fk_category_translate_category_id', '{{%category_translate}}');
		$this->dropForeignKey('fk_page_translate_page_id', '{{%page_translate}}');
		$this->dropForeignKey('fk_phrase_translate_language_id', '{{%phrase_translate}}');
		$this->dropForeignKey('fk_phrase_translate_phrase_id', '{{%phrase_translate}}');
		$this->dropForeignKey('fk_post_category_id', '{{%post}}');
		$this->dropForeignKey('fk_post_translate_post_id', '{{%post_translate}}');
		$this->dropForeignKey('fk_product_category_id', '{{%product}}');
		$this->dropForeignKey('fk_product_translate_product_id', '{{%product_translate}}');
		$this->dropForeignKey('fk_profile_user_id', '{{%profile}}');
		$this->dropForeignKey('fk_social_account_user_id', '{{%social_account}}');
		$this->dropForeignKey('fk_token_user_id', '{{%token}}');
		$this->dropForeignKey('fk_menu_item_menu_id', '{{%token}}');
		$this->dropForeignKey('fk_menu_item_translate_menu_item_id', '{{%token}}');
	}
}
