<?php

namespace humhub\modules\lastspaces\models;

/**
 * @author Guillaume Ponty
 */
class LastSpaces extends \humhub\modules\space\models\Space
{

    public static function find()
    {
        $query = parent::find();
        $query->where('visibility > 0');
        $query->orderBy('created_at DESC');
        return $query;
    }

}
