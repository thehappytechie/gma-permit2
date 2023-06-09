<?php

namespace App\Imports;

use App\Models\Company;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CompanyImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Company([
            'name'     => $row['name'],
            'email'     => $row['email'],
            'contact'     => $row['contact'],
            'address'     => $row['address'],
            'registry_port'     => $row['registry_port'],
            'gross_tonnage'     => $row['gross_tonnage'],
            'call_sign'     => $row['call_sign'],
            'vessel_number'     => $row['vessel_number'],
            'imo_number'     => $row['imo_number'],
        ]);
    }
}
