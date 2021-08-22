<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\CustomerRepository;

class CustomerController extends Controller
{
    protected $customerRepository;
    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $this->customerRepository->findAll();
    }

    public function store(Request $request)
    {
        $this->customerRepository->save($request->all());
    }
}
