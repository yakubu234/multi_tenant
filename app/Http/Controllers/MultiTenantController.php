<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class MultiTenantController extends Controller
{
    use ApiResponse;

    public function create(Request $request)
    {
        return $this->success('','message', 201);
    }

    public function view(Request $request)
    {
        return $this->success('','',200);
    }

    public function viewAll(Request $request)
    {
        return $this->success('','',200);
    }

    public function delete(Request $request)
    {
        return $this->success('','',200); 
    }
}
