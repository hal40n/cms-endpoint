<?php

namespace App\Repositories;

use App\Models\Customer;

class CustmoerRepository implements CustomerRepositoryInterface
{
    protected $customer;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function all()
    {
        return $this->customer->all();
    }

    public function find($id)
    {
        return $this->customer->find($id);
    }

    public function create(array $data)
    {
        return $this->customer->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->customer->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->customer->destroy($id);
    }

    public function search($key)
    {
        return $this->customer->where('name', 'like', "%{$key}%")
            ->orWhere('kana', 'like', "%{$key}%")
            ->orWhere('address', 'like', "%{$key}%")
            ->orWhere('phone', 'like', "%{$key}%")
            ->orWhere('fax', 'like', "%{$key}%")
            ->orWhere('emergency_contact', 'like', "%{$key}%")
            ->orWhere('email', 'like', "%{$key}%")
            ->orWhere('sales_representative_name', 'like', "%{$key}%")
            ->orWhere('sales_representative_phone', 'like', "%{$key}%")
            ->orWhere('sales_representative_email', 'like', "%{$key}%")
            ->orWhere('billing_address', 'like', "%{$key}%")
            ->orWhere('contract_start_date', 'like', "%{$key}%")
            ->orWhere('termination_date', 'like', "%{$key}%")
            ->get();
    }
}
