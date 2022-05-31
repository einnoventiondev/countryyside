<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class CustomerForm extends Model
{
    use HasFactory;
    
    protected $fillable= [
        'user_id',
        'custm_contact',
        'trip_dates',
        'adult',
        'child',
        'age',
        'destination',
        'previous_travel_asia',
        'previous_travel_arabia',
        'previous_travel_europe',
        'previous_travel',
        'accomodation_facility',
        'flight_class',
        'car_type',
        'team_assign',
        'team_assign_id',
        'custm_status',
        'upload_file'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments(){
        return $this->belongsTo(Comment::class, 'user_id','user_id');
    }
}
