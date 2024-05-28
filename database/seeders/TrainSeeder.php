<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use League\Csv\Reader;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/trains.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            Train::create([
                'azienda' => $record['azienda'],
                'stazione_di_partenza' => $record['stazione_di_partenza'],
                'stazione_di_arrivo' => $record['stazione_di_arrivo'],
                'orario_di_partenza' => $record['orario_di_partenza'],
                'orario_di_arrivo' => $record['orario_di_arrivo'],
                'codice_treno' => $record['codice_treno'],
                'numero_carrozze' => $record['numero_carrozze'],
                'in_orario' => $record['in_orario'],
                'cancellato' => $record['cancellato']
            ]);
        }
    }
}
