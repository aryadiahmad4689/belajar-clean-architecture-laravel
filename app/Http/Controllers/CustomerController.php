<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\CustomerService;

class CustomerController extends Controller
{
    protected $customerService;
    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index()
    {
        $this->customerService->getCustomer();
    }

    public function store(Request $request)
    {
        $this->customerService->addCustomer($request->all());
        return response()->json("success create data");
    }
}
