<?php

namespace App\Repositories;

use App\Models\Contact;

Interface ContactRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function search($key);
}
