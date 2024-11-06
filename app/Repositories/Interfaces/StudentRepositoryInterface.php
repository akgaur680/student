<?php

namespace App\Repositories\Interfaces;

interface StudentRepositoryInterface
{
    public function get(); //index page

    public function add($student);

    public function edit($id); //to view the data

    public function update($data, $id);

    public function destroy($id);
}
