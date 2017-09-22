<?php
use Migrations\AbstractMigration;

class CreateBlogs extends AbstractMigration
{
    public function up(){
        $table = $this->table('blogs');
        $table->addColumn('titulo', 'string')
              ->addColumn('texto', 'text')
              ->addColumn('dt_criacao','datetime')
              ->addColumn('dt_modificacao','datetime')
              ->save();
    }
    
    public function down(){
        if($this->hasTable('blogs')){
            $this->dropTable('blogs');
        }
    }
}
