<?php

namespace App\Models;

use PDO;

class User extends Model {

    public static function users($id)
    {
        $db = static::DB();
        $sql = isset($id) ? "SELECT * FROM users WHERE id = $id" : "SELECT * FROM users";
        $result = $db->query($sql);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}