<?php

use yii\db\Migration;
use yii\db\Expression;

class m180421_204554_create_books_table extends Migration{
    public function safeUp(){
        $this->createTable('books', [
            'id' => $this -> primaryKey(),
            'title' => $this -> string(60) -> notNull(),
            'price' => $this-> decimal() -> notNull(),
            'quantity' => $this -> integer() -> notNull() -> defaultValue(1),
            'short_description' => $this -> text(1000) -> notNull(),
            'created_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
            'updated_at' => $this -> timestamp() -> defaultValue(new Expression('NOW()')),
            'author_id' => $this -> primaryKey()
        ]);
    }

    public function safeDown(){
        $this->dropTable('books');
    }
}
