<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class RequestForm extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const BOOK_YOUR_APPOINTMENT_RADIO = [
        'Phone_call'     => 'Phone call',
        'Online_meeting' => 'Online meeting',
    ];

    public const ADDITIONAL_DETAILS_RADIO = [
        'Audio_recording' => 'Audio recording',
        'Text_writing'    => 'Text writing',
    ];

    public const BASIC_INFORMATION_RADIO = [
        'governmental_or_private' => 'governmental or private',
        'get_a_captain'           => 'get a captain',
        'employee'                => 'An employee on the job?',
        'looking_for_a_job'       => 'Individual looking for a job?',
    ];

    public $table = 'request_forms';

    protected $appends = [
        'audio',
    ];

    protected $dates = [
        'date',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'basic_information',
        'first_name',
        'last_name',
        'city',
        'phone',
        'email',
        'additional_details',
        'book_your_appointment',
        'text',
        'date',
        'time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getAudioAttribute()
    {
        return $this->getMedia('audio')->last();
    }

    public function getDateAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateAttribute($value)
    {
        $this->attributes['date'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
