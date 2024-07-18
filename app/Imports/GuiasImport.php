<?php

namespace App\Imports;

use App\Models\Guias;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuiasImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        //
        foreach ($rows as $row) {
            $guia = $row['guia'];
            $aereolinea = $row['aereolinea'];
            $status = $row['status'];



            if (!Guias::where('guia', $guia)->exists())
                Guias::create([
                    'guia' => "$guia",
                    'aereolinea' => "$aereolinea",
                    'status' => $status,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                ]);
        }
    }

    public function rules(): array
    {
        return [
            '1' => \Illuminate\Validation\Rule::unique('guias', 'guia'),
        ];
    }
}
