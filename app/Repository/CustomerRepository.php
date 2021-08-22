<?php

namespace App\Repository;

interface CustomerRepository
{
    public function save($data);
    public function findById(int $id);
    public function findAll();
}
