<?php

use Migrations\AbstractMigration;

class CreateSettingsSeed extends AbstractMigration {

    public function up() {
        $faker = \Faker\Factory::create();
        $populator = new \Faker\ORM\CakePHP\Populator($faker);
        $populator->addEntity('settings', 1, [
            'title' => 'SodaPremier',
            'email' => 'alanfernando93.am@gmail.com',
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
