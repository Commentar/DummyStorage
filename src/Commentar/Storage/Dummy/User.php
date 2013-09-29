<?php
/**
 * User storage for the dummy storage mechanism
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Dummy
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Storage\Dummy;

use Commentar\Storage\Datamapper\UserMappable;
use Commentar\DomainObject\User as UserDomainObject;

/**
 * User storage for the dummy storage mechanism
 *
 * @category   Commentar
 * @package    Storage
 * @subpackage Dummy
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class User implements UserMappable
{
    /**
     * Gets the user based on the id
     *
     * @param int $id The id of the user
     *
     * @return null|array The user
     */
    public function fetchById(UserDomainObject $user, $id)
    {
        $users = [
            1 => [
                'id'           => 1,
                'username'     => 'PeeHaa',
                'password'     => 'xxx',
                'email'        => 'peehaa@example.com',
                'isHellbanned' => false,
                'isAdmin'      => true,
            ],
            2 => [
                'id'           => 2,
                'username'     => 'Zundrium',
                'password'     => 'xxx',
                'email'        => 'Zundrium@example.com',
                'isHellbanned' => false,
                'isAdmin'      => false,
            ],
            3 => [
                'id'           => 3,
                'username'     => 'Troll | <script>alert("xss");</script>\' or 1=1--\r\nHeader: Injection',
                'password'     => 'xxx',
                'email'        => 'troll@example.com',
                'isHellbanned' => false,
                'isAdmin'      => false,
            ],
        ];

        if (!array_key_exists($id, $users)) {
            return null;
        }

        $userData = $users[$id];

        $user->fill($userData);
    }

    /**
     * Gets the user based on the username
     *
     * @param \Commentar\DomainObject\User $user The user domain object
     */
    public function fetchByUsername(UserDomainObject $user)
    {
        $users = [
            'peehaa' => [
                'id'           => 1,
                'username'     => 'PeeHaa',
                'password'     => 'xxx',
                'email'        => 'peehaa@example.com',
                'isHellbanned' => false,
                'isAdmin'      => true,
            ],
            'zundrium' => [
                'id'           => 2,
                'username'     => 'Zundrium',
                'password'     => 'xxx',
                'email'        => 'Zundrium@example.com',
                'isHellbanned' => false,
                'isAdmin'      => false,
            ],
            'troll' => [
                'id'           => 3,
                'username'     => 'Troll',
                'password'     => 'xxx',
                'email'        => 'troll@example.com',
                'isHellbanned' => false,
                'isAdmin'      => false,
            ],
        ];

        if (!array_key_exists(strtolower($user->getUsername()), $users)) {
            return null;
        }

        $userData = $users[strtolower($id)];

        $user->fill($userData);
    }

    /**
     * Persists the data of the user in the storage file
     *
     * @param \Commentar\DomainObject\User $user The user to store
     */
    public function persist(UserDomainObject $user)
    {
    }
}
