<?php

namespace App\Services\Doorway\Features\Api;

use Lucid\Units\Feature;

use App\Domains\Doorway\Jobs\Api\VisitListJob;


class VisitListFeature extends Feature
{
    public function handle()
    {
        return $this->run(VisitListJob::class);
    }
}
