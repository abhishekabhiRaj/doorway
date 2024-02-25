<?php

namespace App\Services\Doorway\Features\Api;

use Illuminate\Http\Request;
use Lucid\Units\Feature;

use App\Domains\Doorway\Jobs\Api\CreateGatePassJob;


class CreateGatePassFeature extends Feature
{
    public function handle(Request $request)
    {
        return $this->run(CreateGatePassJob::class);
    }
}
