<?php
namespace common\components;

use yii\db\Query;

class MyManager extends \yii\rbac\DbManager implements \dektrium\rbac\components\ManagerInterface
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getItems($type = null, $excludeItems = [])
    {
        // you should implement this method or extend your class from \dektrium\rbac\components\DbManager
        $query = (new Query)
            ->from($this->itemTable)
            ->where(['type' => $type]);

        $items = [];
        foreach ($query->all($this->db) as $row) {
            $items[$row['name']] = $this->populateItem($row);
        }
        $this->items = $items;
        return $items;
    }

    public function getItem($name)
    {
        if (empty($name)) {
            return null;
        }

        if (!empty($this->items[$name])) {
            return $this->items[$name];
        }

        $row = (new Query)->from($this->itemTable)
            ->where(['name' => $name])
            ->one($this->db);

        if (false === $row) {
            return null;
        }

        if (!isset($row['data']) || ($data = @unserialize($row['data'])) === false) {
            $row['data'] = null;
        }

        return $row;

    }

    public function getItemsByUser($user_id)
    {
        $assignments = (new Query)->from($this->assignmentTable)
            ->where(['user_id' => $user_id])
            ->all();

        $items       = [];
        $assignments = (new Query)->from($this->itemTable)
            ->where(['user_id' => $user_id])
            ->all();

        return $rows;
    }
}
