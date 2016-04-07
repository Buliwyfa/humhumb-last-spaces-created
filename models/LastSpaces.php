<?php

namespace humhub\modules\lastspaces\models;

use humhub\modules\space\models\Space;
use humhub\modules\space\models\Membership;

/**
 * @author Guillaume Ponty
 */
class LastSpaces extends \humhub\modules\space\models\Space
{

    public static function find()
    {
        $query = parent::find();
        $query->leftJoin('space_membership', 'space.id=space_membership.space_id AND space_membership.user_id=:userId', [':userId' => \Yii::$app->user->id]);
        $query->andWhere([
            '!=', 'space.visibility', Space::VISIBILITY_NONE,
        ]);
        $query->orWhere([
            'space_membership.status' => Membership::STATUS_MEMBER,
        ]);
        $query->orderBy('created_at DESC');
        return $query;
    }


}
