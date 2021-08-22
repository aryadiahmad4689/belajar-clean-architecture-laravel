<?php

namespace App\Repository;

use App\Models\Customer;

class CustomerRepositoryImplement implements CustomerRepository
{
    public function save($data)
    {
        $customer = new Customer();

        $customer->create($customer);

        return $customer;
    }
    public function findById(int $id)
    {
        return Customer::findOrFail($id);
    }
    public function findAll()
    {
        return Customer::all();
    }
}
