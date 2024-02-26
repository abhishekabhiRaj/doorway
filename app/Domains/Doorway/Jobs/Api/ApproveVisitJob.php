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
        $visitor = Visitors::where('id', $request->id)->first();
        if(isset($visitor)){
            $acceptance = $request->acceptance;
            $visitor->visit_accepted = $acceptance;
            $visitor->save();
            $messg = $acceptance == "no" ?"Visit Rejected Successfully" : "Visit Accepted Successfully";
            return ResponseFactory::json([
                'code' => 200,
                'message' => $messg,
            ]);
        }else{
            return ResponseFactory::json([
                'code' => 400,
               'message' => 'Wrong Visitor ID',
            ]);
        }
    }
}
