<?php

namespace App\Domains\Doorway\Jobs\Api;

use Lucid\Units\Job;
use App\Models\Doorway\Visitors;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ApproveVisitJob extends Job
{

    public function __construct()
    {
    }

    public function handle(Request $request)
    {
        // $visitor = Visitors::all();
        return ResponseFactory::json([
            'code' => 200,
            'message' => 'Approved',
        ]);
    }
}
