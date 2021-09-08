<?php

namespace App\Service;

use App\Repository\CustomerRepository;

class CustomerServiceImplement implements CustomerService
{
    private $customerRepo;
    public function __construct(CustomerRepository $customerRepo)
    {
        $this->customerRepo= $customerRepo;
    }

    public function addCustomer($data)
    {
        $this->customerRepo->save($data);
    }

    public function getCustomer()
    {
        $this->customerRepo->findAll();
    }
}
