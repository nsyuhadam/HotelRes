<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $userId
 * @property string $userPassword
 * @property string $userNoPhone
 * @property string $userFname
 * @property string $userLName
 * @property string $userEmail
 * @property int $userRole
 * @property int $bookId
 */
class User extends Entity
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
        'userPassword' => true,
        'userNoPhone' => true,
        'userFname' => true,
        'userLName' => true,
        'userEmail' => true,
        'userRole' => true,
        'bookId' => true
    ];

     protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
