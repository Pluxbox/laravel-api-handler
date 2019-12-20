<?php
use Illuminate\Database\Eloquent\Model;

/**
 * This model is only used for testing purpose
 */

class Post extends Model
{
	protected $connection = 'mysql';

	/**
	 * @Relation
	 */
	public function comments()
	{
		return $this->hasMany('Comment', 'customfk_post_id');
	}
}