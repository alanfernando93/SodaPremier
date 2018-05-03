<?php

use Migrations\AbstractMigration;

class CreateOrdersTable extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('orders');
        $table->addColumn('full_name', 'string', ['limit' => 200])
                ->addColumn('ci', 'string', ['limit' => 50])
                ->addColumn('phono', 'integer', ['limit' => 10])
                ->addColumn('email','string',['limit'=>100])
                ->addColumn('status', 'enum',['values'=>'0, 1'])                
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();
        $refTable = $this->table('orders');
        $refTable->addColumn('user_id', 'integer', ['signed'=>'disable'])
                ->addForeignKey('user_id', 'users', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
                ->update();
    }

}
