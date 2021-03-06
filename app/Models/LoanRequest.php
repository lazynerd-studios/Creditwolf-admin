<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanRequest extends Model
{
    use HasFactory;

    protected $connection = 'credbolt_api';

    //protected $connection =  'credapidb';

    public const STATUSES = [
        'PENDING' => 'pending',
        'INITIATED' => 'initiated',
        'PROCESSING' => 'processing',
        'SUCCESSFUL' => 'successful',
        'DECLINED' => 'declined',
        'FAILED' => 'failed',
        'ABANDONED' => 'abandoned',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function respondedBy()
    {
        return $this->belongsTo(User::class, 'responded_by');
    }
}
