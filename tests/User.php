<?php
use Illuminate\Database\Eloquent\Model;
/**
 * This model is only used for testing purpose
 */

class User extends Model
{
    protected $connection = 'mysql';

    /**
     * @Relation
     */
    public function comments()
    {
        return $this->hasMany('Comment');
    }
}
