<?php

use Migrations\AbstractMigration;

class CreateSeedProducts extends AbstractMigration {

    public function up() {
        $faker = \Faker\Factory::create();
        $populator = new \Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('products', 1, [
            'name' => 'jugo de limon',
            'description' => 'jugo hecho con los mejores limones cultivados',
            'type' => 'jugo',
            'stock' => 50,
            'price' => 3,
            'photo' => '/',
            'photo_dir' => '/',
            'user_id' => 1,
            'created' => function () use ($faker) {
                return $faker->dateTimeBetween($stratDate = "now", $endDate = "now");
            },
            'modified' => function () use ($faker) {
                return $faker->dateTimeBetween($stratDate = "now", $endDate = "now");
            }
        ]);
        $populator->execute();
        $populator->addEntity('products', 1, [
            'name' => 'gaseosa de cola',
            'description' => 'la mejor gaseosa con un sabor jamas antes probada',
            'type' => 'gaseosa',
            'stock' => 50,
            'price' => 3,
            'photo' => '/',
            'photo_dir' => '/',
            'user_id' => 1,
            'created' => function () use ($faker) {
                return $faker->dateTimeBetween($stratDate = "now", $endDate = "now");
            },
            'modified' => function () use ($faker) {
                return $faker->dateTimeBetween($stratDate = "now", $endDate = "now");
            }
        ]);
        $populator->execute();
    }

}
