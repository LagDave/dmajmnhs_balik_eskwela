<?php

namespace App\Exports;

use App\Data;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class ElevenMalesExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Data::where(['admission_level'=> 11, 'gender'=>'male'])->get();
    }
    public function headings():array{
        return [
            '#',
            'enrolled_at',
            'updated_at',
            'admission_level',
            'track',
            'previous_school',
            'lrn',
            'first_name',
            'middle_name',
            'last_name',
            'suffix',
            'gender',
            'social_assistance',
            'citizenship',
            'birthplace',
            'religion',
            'birth_month',
            'birth_day',
            'birth_year',
            'barangay',
            'province',
            'city',
            'telephone_number',
            'cellphone_number',
            'email',
            'father_first_name',
            'father_last_name',
            'father_mobile_number',
            'father_occupation',
            'mother_first_name',
            'mother_last_name',
            'mother_mobile_number',
            'mother_occupation',
            'guardian_first_name',
            'guardian_last_name',
            'guardian_mobile_number',
            'guardian_occupation',
            'full_name'
        ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:AM1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'size'=>'13'
                    ]
                ]);
            },
        ];
    }

}
