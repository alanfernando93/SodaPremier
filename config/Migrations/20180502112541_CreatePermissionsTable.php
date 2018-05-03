<?php

use Migrations\AbstractMigration;

class CreatePermissionsTable extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('permissions');
        $table->addColumn('permisos', 'string', ['limit' => 200])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();        
    }

}
