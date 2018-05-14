<?php

use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('products');
        $table->addColumn('name', 'string', ['limit' => 50])
                ->addColumn('description', 'text', ['default' => null, 'null' => false])                
                ->addColumn('type', 'string')
                ->addColumn('stock', 'integer')
                ->addColumn('price', 'decimal')
                ->addColumn('photo', 'string', ['limit' => 255])
                ->addColumn('photo_dir', 'string', ['limit' => 255])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();
        $refTable = $this->table('products');
        $refTable->addColumn('user_id', 'integer', ['signed'=>'disable'])
                ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
                ->update();
    }

}
