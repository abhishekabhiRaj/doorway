<?php

namespace App\Services\Doorway\Features\View;



use Lucid\Units\Feature;
use Illuminate\Http\Request;
use App\Domains\Doorway\Jobs\View\RespondWithViewJob;

class DashboardFeature extends Feature
{
    public function handle(Request $request)
    {
        return $response = $this->run(RespondWithViewJob::class, [
            'template' => 'doorway::pages.dashboard'
          ]);
    }
}
