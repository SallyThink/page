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
        $controller = $this->factory($name);

        return $controller->all();
    }

    public function new($name)
    {
        $controller = $this->factory($name);

        return $controller->new();
    }

    public function create($name)
    {
        $controller = $this->factory($name);

        return $controller->create();
    }

    public function edit($name, $id)
    {
        $controller = $this->factory($name);

        return $controller->edit($id);
    }

    public function update($name, $id)
    {
        $controller = $this->factory($name);

        return $controller->update($id);
    }

    public function delete($name, $id)
    {
        $controller = $this->factory($name);

        return $controller->delete($id);
    }
}
