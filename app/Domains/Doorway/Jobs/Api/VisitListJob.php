<?php

namespace App\Domains\Doorway\Jobs\Api;

use Lucid\Units\Job;
use App\Models\Doorway\Visitors;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VisitListJob extends Job
{

    public function __construct()
    {
    }

    public function handle(Request $request)
    {
        $visitor = Visitors::all();
        if(count($visitor)>0){
            return response()->json([
                'code' => 200,
                'message' => 'Data Available',
                'data' => $visitor
            ]);
        }else{
            return ResponseFactory::json([
                'code' => 400,
                'message' => 'No Data Available',
            ]);
        }
    }
}
