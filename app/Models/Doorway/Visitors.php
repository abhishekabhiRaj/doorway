<?php

namespace App\Models\Doorway;
use App\Services\Doorway\Database\Factories\VisitorsFactory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    use HasFactory;
    protected $fillable = ['visitor_name', 'visitor_mobile', 'visitor_address', 'person_to_meet', 'purpose', 'date_time', 'visit_completed', 'visit_accepted'];
    protected static function newFactory()
{
    return app(VisitorsFactory::class);
}
}
