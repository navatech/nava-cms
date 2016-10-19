<?php
use yii\db\Migration;

class m161019_050137_Relations extends Migration {

	public function safeUp() {
		$this->addForeignKey('fk_category_lang_category_id', '{{%category_lang}}', 'category_id', 'category', 'id');
		$this->addForeignKey('fk_page_lang_page_id', '{{%page_lang}}', 'page_id', 'page', 'id');
		$this->addForeignKey('fk_phrase_translate_language_id', '{{%phrase_translate}}', 'language_id', 'language', 'id');
		$this->addForeignKey('fk_phrase_translate_phrase_id', '{{%phrase_translate}}', 'phrase_id', 'phrase', 'id');
		$this->addForeignKey('fk_post_category_id', '{{%post}}', 'category_id', 'category', 'id');
		$this->addForeignKey('fk_post_lang_post_id', '{{%post_lang}}', 'post_id', 'post', 'id');
		$this->addForeignKey('fk_product_category_id', '{{%product}}', 'category_id', 'category', 'id');
		$this->addForeignKey('fk_product_lang_product_id', '{{%product_lang}}', 'product_id', 'product', 'id');
		$this->addForeignKey('fk_profile_user_id', '{{%profile}}', 'user_id', 'user', 'id');
		$this->addForeignKey('fk_social_account_user_id', '{{%social_account}}', 'user_id', 'user', 'id');
		$this->addForeignKey('fk_token_user_id', '{{%token}}', 'user_id', 'user', 'id');
	}

	public function safeDown() {
		$this->dropForeignKey('fk_category_lang_category_id', '{{%category_lang}}');
		$this->dropForeignKey('fk_page_lang_page_id', '{{%page_lang}}');
		$this->dropForeignKey('fk_phrase_translate_language_id', '{{%phrase_translate}}');
		$this->dropForeignKey('fk_phrase_translate_phrase_id', '{{%phrase_translate}}');
		$this->dropForeignKey('fk_post_category_id', '{{%post}}');
		$this->dropForeignKey('fk_post_lang_post_id', '{{%post_lang}}');
		$this->dropForeignKey('fk_product_category_id', '{{%product}}');
		$this->dropForeignKey('fk_product_lang_product_id', '{{%product_lang}}');
		$this->dropForeignKey('fk_profile_user_id', '{{%profile}}');
		$this->dropForeignKey('fk_social_account_user_id', '{{%social_account}}');
		$this->dropForeignKey('fk_token_user_id', '{{%token}}');
	}
}
