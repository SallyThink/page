<?php

namespace App\Http\Controllers\Admin;


class AdminController
{
    /**
     * @param $name
     * @return AdminInterface
     */
    private function factory($name)
    {
        return \App\Classes\AdminControllerFactory::create($name);
    }

    public function all($name)
    {
        return $this->factory($name)->all();
    }

    public function new($name)
    {
        return $this->factory($name)->new();
    }

    public function create($name)
    {
        return $this->factory($name)->create();
    }

    public function edit($name, $id)
    {
        return $this->factory($name)->edit($id);
    }

    public function update($name, $id)
    {
        return $this->factory($name)->update($id);
    }

    public function delete($name, $id)
    {
        return $this->factory($name)->delete($id);
    }
}
