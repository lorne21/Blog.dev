<?php

class Project extends BaseModel {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    protected $fillable = array('title', 'tech', 'type', 'description', 'url', 'img');
    
    
}

