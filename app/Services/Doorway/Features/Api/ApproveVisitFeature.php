<?php

namespace App\Services\Doorway\Features\Api;

use Lucid\Units\Feature;

use App\Domains\Doorway\Jobs\Api\ApproveVisitJob;


class ApproveVisitFeature extends Feature
{
    public function handle()
    {
        return $this->run(ApproveVisitJob::class);
    }
}
