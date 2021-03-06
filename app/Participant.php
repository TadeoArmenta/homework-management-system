<?php

namespace App;

use App\Batch;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $guarded = [];
    
    use batchable, creator;

    /**
     *
     * A Participant has many batches
     *
     */

    public function batch() {
    	return $this->belongsToMany(Batch::class)->withTimestamps();
    }

    /**
     * Add a course
     *
     * @return void
     * @author 
     **/

    public function addParticipant($course)
    {
        $this->create($course);
    }
    
}
