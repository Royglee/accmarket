<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

	//
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function setDivisionAttribute($value)
    {
        $league = $this->attributes['league'];

        if($league !== 'Unranked' && $league !== 'Master' && $league !== 'Challenger' ){
            $this->attributes['division'] = $value;
        }
        else{
            $this->attributes['division']= null;
        }
    }

}
