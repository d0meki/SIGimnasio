<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horario;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $horario = new Horario();
        $horario->hora_inicio = "07:00:00";
        $horario->hora_fin = "08:30:00";
        $horario->save();

        $horario1 = new Horario();
        $horario1->hora_inicio = "08:30:00";
        $horario1->hora_fin = "10:00:00";
        $horario1->save();

        $horario2 = new Horario();
        $horario2->hora_inicio = "10:00:00";
        $horario2->hora_fin = "11:30:00";
        $horario2->save();

        $horario3 = new Horario();
        $horario3->hora_inicio = "11:30:00";
        $horario3->hora_fin = "13:00:00";
        $horario3->save();

        $horario4 = new Horario();
        $horario4->hora_inicio = "13:30:00";
        $horario4->hora_fin = "15:00:00";
        $horario4->save();

        $horario5 = new Horario();
        $horario5->hora_inicio = "15:00:00";
        $horario5->hora_fin = "16:30:00";
        $horario5->save();

        $horario6 = new Horario();
        $horario6->hora_inicio = "16:30:00";
        $horario6->hora_fin = "18:00:00";
        $horario6->save();

        $horario7 = new Horario();
        $horario7->hora_inicio = "18:00:00";
        $horario7->hora_fin = "19:30:00";
        $horario7->save();

        $horario8 = new Horario();
        $horario8->hora_inicio = "19:30:00";
        $horario8->hora_fin = "21:00:00";
        $horario8->save();

        $horario9 = new Horario();
        $horario9->hora_inicio = "21:00:00";
        $horario9->hora_fin = "22:30:00";
        $horario9->save();
    }
}
