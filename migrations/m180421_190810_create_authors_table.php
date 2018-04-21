<?php

use yii\db\Migration;

class m180421_190810_create_authors_table extends Migration{
    public function safeUp(){
        $this->createTable('authors', [
            'id' => $this ->primaryKey(),
            'name' => $this -> string(40) -> notNull(),
            'surname' => $this -> string(40) -> notNull(),
            'pseudonym' => $this -> string(60),
            'is_alive' => $this -> boolean() -> defaultValue(true),
            'year_of_birth' => $this -> dateTime(),
            'is_active' => $this -> boolean() -> defaultValue(true)
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('authors');
    }
}
