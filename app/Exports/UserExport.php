<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
    * @return Collection
    */
    public function collection()
    {
        return User::all();
    }
}
