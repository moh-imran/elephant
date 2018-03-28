<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $client;

    public function __construct(){

        $this->client = \Directus\SDK\ClientFactory::create('2jSmLLbm7W01CHPqb75BIyqnEwHhYeh1', [
            // Directus API Path without its version
            'base_url' => env('API_URL'),
            'version' => '1.1' // Optional - default 1
        ]);

    }
}
