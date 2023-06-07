<?php

namespace App\Exports;

use App\Models\Complementry;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\Exportable;

class ComplementryExport implements FromCollection,WithHeadings,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Complementry::select(
            'id',
            'name',
            'date_of_birth',
            'gender',
            'email',
            'contact',
            'city',
            'country',
            'course',
            
            )->get();
    }
    public function map($data): array
    {
        return[
        $data->id,
        $data->name,
        $data->date_of_birth,
        $data->gender,
        $data->email,
        $data->contact,
        $data->city,
        $data->country,
        $data->course,
        ];
    }
    public function headings(): array

    {

        return [

            'NO',

            'NAME',

            'DOB',

            'GENDER',

            'EMAIL',

            'CONTACT',

            'CITY',

            'COUNTRY',

            'COURSE',

        ];

    }
}
