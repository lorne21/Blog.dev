<?php

class Post extends BaseModel {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';
    public static $rules = array(
        'title'      => 'required|max:100',
        'body'       => 'required|max:10000'
    );
    public static $test = 'Some string';

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }
}