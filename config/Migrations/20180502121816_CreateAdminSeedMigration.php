<?php

use Migrations\AbstractMigration;

class CreateAdminSeedMigration extends AbstractMigration {

    public function up() {
        $faker = \Faker\Factory::create();
        $populator = new \Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('Users', 1, [
            'first_name' => 'Admin',
            'last_name' => 'Root',
            'username' => 'root',
            'email' => 'root@test.com',
            'password' => function () {
                $hasher = new \Cake\Auth\DefaultPasswordHasher();
                return $hasher->hash('secret');
            },
            'role' => 'admin',
            'active' => 1,
            'created' => function () use ($faker) {
                return $faker->dateTimeBetween($stratDate = "now",$endDate = "now");
            },
            'modified' => function () use ($faker) {
                return $faker->dateTimeBetween($stratDate = "now",$endDate = "now");
            }
        ]);       
        $populator->execute();
    }

}
