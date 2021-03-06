<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $guarded = [];

    use batchable, creator;

    /*
	 * Return path of a single course
     */

    public function path() 
    {
    	return 'courses/' . $this->id;
    }

    /**
     * Add a course
     *
     * @return void
     * @author 
     **/

    public function addCourse($course)
    {
        $this->create($course);
    }

}