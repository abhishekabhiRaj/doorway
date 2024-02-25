<?php

namespace App\Domains\Doorway\Jobs\View;

use Lucid\Units\Job;
use Illuminate\Routing\ResponseFactory;


class RespondWithViewJob extends Job
{
    protected $template;
    
    public function __construct($template)
    {
        $this->template = $template;
    }

    public function handle(ResponseFactory $factory)
    {
        return $factory->view($this->template);
    }
}
