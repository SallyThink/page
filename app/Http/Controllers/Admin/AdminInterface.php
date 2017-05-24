<?php

namespace App\Http\Controllers\Admin;

interface AdminInterface
{
    public function all();
    public function new();
    public function create();
    public function edit($idz);
    public function update($id);
    public function delete($id);
}