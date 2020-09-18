<?php


namespace App\Model;


use Core\Model;
use PDO;

class User extends Model
{
    protected $tableName = 'users';

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->getDB();
    }

    /**
     * Get user
     * @return bool or array
     */
    public function getUser($userName)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE name = '{$userName}'";
        $this->sql($sql);
        $user = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return !empty($user) ? $user : false;
    }
}