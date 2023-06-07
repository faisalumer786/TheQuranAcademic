<?php

namespace App\Exports;

use App\Models\Faculty;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;

class UsersExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Faculty::select(
        'id',
        'name',
        'father_name',
        'date_of_birth',
        'gender',
        'email',
        'cnic',
        'mobile',
        'contact',
        'university',
        'department',
        'position',
        'qualification',
        'experience',
        'address',
        'city',
        'country',
        'zip',
        'linkedin',
        'github',
        
        )->get();
    }

    public function map($data): array
    {
        return[
        $data->id,
        $data->name,
        $data->father_name,
        $data->date_of_birth,
        $data->gender,
        $data->email,
        $data->cnic,
        $data->mobile,
        $data->contact,
        $data->university,
        $data->department,
        $data->position,
        $data->qualification,
        $data->experience,
        $data->address,
        $data->city,
        $data->country,
        $data->zip,
        $data->linkedin,
        $data->github,
        ];
    }
    public function headings(): array

    {

        return [

            'NO',

            'NAME',

            'FATHER NAME',

            'DOB',

            'GENDER',

            'EMAIL',

            'CNIC',

            'PHONE NUMBER',

            'LANDLINE',

            'UNIVERSITY (CURRENTLY SERVING)',

            'DEPARTMENT',

            'POSITION',

            'LATEST QUALIFICATION',

            'YEAR OF EXPERIENCES',

            'ADDRESS',

            'CITY',

            'COUNTRY',

            'ZIP/POSTCODE',

            'GITHUB PROFILE	',

            'LINKEDIN PROFILE',

        ];

    }
}

