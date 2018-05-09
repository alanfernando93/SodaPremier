<?php

use Migrations\AbstractMigration;

class CreateTableSettings extends AbstractMigration {

    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {
        $table = $this->table('settings');
        $table->addColumn('title', 'string', ['limit' => 255])
                ->addColumn('email', 'string', ['limit' => 100])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();
    }

}
