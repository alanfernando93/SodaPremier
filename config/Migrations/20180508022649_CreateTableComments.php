<?php

use Migrations\AbstractMigration;

class CreateTableComments extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('comments');
        $table->addColumn('contenido', 'text')
                ->addColumn('email', 'string', ['limit' => 100])
                ->addColumn('nombre', 'string', ['limit' => 150])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();
    }

}
