<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function flashSuccessMessage($message)
    {
        request()->session()->flash('success-message', $message);
    }

    public function flashErrorMessage($message)
    {
        request()->session()->flash('error-message', $message);
    }
}