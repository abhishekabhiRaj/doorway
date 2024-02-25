<?php

namespace App\Domains\Doorway\Jobs\Api;

use Lucid\Units\Job;
use App\Models\Doorway\Visitors;
use Illuminate\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CreateGatePassJob extends Job
{

    public function __construct()
    {
    }

    public function handle(Request $request)
    {
        $formData = $request->validate([
            'visitor_name' =>'required',
            'visitor_mobile' =>['required'],
            'visitor_address' =>'required',
            'person_to_meet' =>'required',
            'purpose' =>'required',
            'date_time' =>'required',
        ]);
        $visitor = Visitors::where('visitor_mobile', $request->visitor_mobile)->first();
        $formData['visit_completed'] = 'no';
        $formData['visit_accepted'] = 'pending';
        if(!isset($visitor)){
            if($formData){
                Visitors::create($formData);
                // session(['message' => 'Gate Pass Created Successfully']); Session calling another syntax
                // Session::flash('message', 'Gate Pass Created Successfully');
                // Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'code' => 200,
                    'message' => 'Gate Pass Created Successfully'
                ]);
            }else{
                // Session::flash('message', 'Please Fill All Fields');
                // Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'code' => 400,
                    'message' => 'Please Fill All Fields'
                ]);
            }
        }else{
            // Session::flash('message', 'This Mobile Number Already Exists');
            // Session::flash('alert-class', 'alert-danger');
            return ResponseFactory::json([
                'code' => 400,
                'message' => 'This Mobile Number Already Exists'
            ]);
        }
    }
}
