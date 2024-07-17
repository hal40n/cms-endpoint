<?php

namespace App\Repositories;

use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    protected $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function all()
    {
        return $this->contact->all();
    }

    public function find($id)
    {
        return $this->contact->find($id);
    }

    public function create(array $data)
    {
        return $this->contact->create($data);
    }

    public function update(array $data, $id)
    {
        $record = $this->contact->find($id);
        return $record->update($data);
    }

    public function delete($id)
    {
        return $this->contact->destroy($id);
    }

    public function search($key)
    {
        return $this->contact->where('reference_number', 'like', "%{$key}%")
            ->orWhere('inquiry_date', 'like', "%{$key}%")
            ->orWhere('inquirer', 'like', "%{$key}%")
            ->orWhere('receptionist', 'like', "%{$key}%")
            ->orWhere('responder', 'like', "%{$key}%")
            ->orWhere('inquiry_content', 'like', "%{$key}%")
            ->orWhere('inquiry_details', 'like', "%{$key}%")
            ->orWhere('category', 'like', "%{$key}%")
            ->orWhere('status', 'like', "%{$key}%")
            ->get();
    }
}
