<?php

namespace App\Services\Doorway\Http\Controllers;

use Lucid\Units\Controller;

use App\Services\Doorway\Features\View\DashboardFeature;
use App\Services\Doorway\Features\View\VisitorsFeature;


class ViewController extends Controller
{
    public function dashboard()
    {
      return $this->serve(DashboardFeature::class);
    }
    public function visitors()
    {
      return $this->serve(VisitorsFeature::class);
    }
}
