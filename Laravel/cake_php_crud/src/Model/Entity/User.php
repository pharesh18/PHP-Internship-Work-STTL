<?php
namespace App\Model\Entity;
use Cake\ORM\Entity;

class User extends Entity{
    // protected $_accessible = [
    //     '*' => true,
    //     'id'=> false,
    //     'slug' => false
    // ];

    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'password' => true,
        'profile_image' => true,
    ];
}
?>