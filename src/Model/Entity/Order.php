<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $full_name
 * @property int $ci
 * @property int $phono
 * @property string $email
 * @property string $type
 * @property int $count
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $product_id
 *
 * @property \App\Model\Entity\User $user
 */
class Order extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'full_name' => true,
        'ci' => true,
        'phono' => true,
        'email' => true,
        'type' => true,
        'count' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'product_id' => true,
        'user' => true
    ];
}
