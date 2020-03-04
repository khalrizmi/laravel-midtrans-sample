<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'donor_name',
        'donor_email',
        'donation_type',
        'amount',
        'note',
    ];

    public function setPending() 
    {
        $this->attributes['status'] = 'pending';
        self::save();
    }

    public function setSuccess()
    {
        $this->attributes['status'] = 'success';
        self::save();
    }

    /**
     * Set status to Failed
     *
     * @return void
     */
    public function setFailed()
    {
        $this->attributes['status'] = 'failed';
        self::save();
    }

    /**
     * Set status to Expired
     *
     * @return void
     */
    public function setExpired()
    {
        $this->attributes['status'] = 'expired';
        self::save();
    }
}
