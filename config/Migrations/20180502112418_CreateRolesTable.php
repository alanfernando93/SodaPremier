<?php

use Migrations\AbstractMigration;

class CreateRolesTable extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('roles');
        $table->addColumn('role', 'string', ['limit' => 70])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();        
    }

}
