<?php

namespace App\Exports;

use App\Models\sugerencia;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class SugerenciasExport implements 
    FromCollection,
    WithCustomStartCell,
    WithMapping,
    ShouldAutoSize,
    WithEvents,
    WithHeadings
{
    protected $posicionI = 8;
    protected $posicionJ = 8;
    protected $data;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return sugerencia::with("empresa")->get();
    }

    public function startCell(): string
    {
        return 'C8';
    }

    public function headings(): array
    {
        return [
            'Empresa',
            'Mensaje',
            'Fecha',
        ];
    }

    public function map($data): array
    {
        return [
            $data->empresa->id,
            $data->mensaje,
            $data->created_at
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('C8' . ':' . "E8")->applyFromArray([
                    'font' => [
                        'bold' => true,
                        'color' => ['rgb' => 'FFFFFF']
                    ],
                    'alignment' => [
                        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                    ],
                    'borders' => [
                        'outline' => [
                            'borderStyle' =>  \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['argb' => '00000000']
                        ]
                    ],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
                        'rotation' => 90,
                        'startColor' => [
                            'argb' => '3F65E0',
                        ],
                        'endColor' => [
                            'argb' => '3F65E0',
                        ],
                    ],
                ]);

                $this->data = sugerencia::all();

                foreach ($this->data as $key => $dato) {

                    $this->posicionI +=  1;
                    $this->posicionJ += 1;

                    $event->sheet->getStyle('C' . $this->posicionI . ':' . 'E' . $this->posicionJ)->applyFromArray([
                        'font' => [
                            'bold' => false,
                            'color' => ['rgb' => '000000']
                        ],
                        'alignment' => [
                            'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                        ],
                        'borders' => [
                            'allBorders' => [
                                'borderStyle' =>  \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                                'color' => [
                                    'argb' => '00000000'
                                ]
                            ]
                        ],
                    ]);
                }
            }
        ];
    }
}