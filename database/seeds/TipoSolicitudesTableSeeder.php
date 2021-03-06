<?php

use Illuminate\Database\Seeder;
use App\TipoSolicitud;

class TipoSolicitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoSolicitud::create(
            [
                'codigoTipoSolicitud'=>"ES01",
                'nombreTipoSolicitud'=>"Cambio de Grupo"
            ]);
        TipoSolicitud::create(
            [
                'codigoTipoSolicitud'=>"ES02",
                'nombreTipoSolicitud'=>"Denuncia"
            ]);
        TipoSolicitud::create(
             [
                'codigoTipoSolicitud'=>"ES03",
                'nombreTipoSolicitud'=>"Inscripcion extemporranea"
            ]);
            TipoSolicitud::create(
                [
                    'codigoTipoSolicitud'=>"ES04",
                    'nombreTipoSolicitud'=>"Memoria servicio social"
                ]);
            TipoSolicitud::create(
                [
                    'codigoTipoSolicitud'=>"ES05",
                    'nombreTipoSolicitud'=>"Peticiones especiales"
                ]);
            TipoSolicitud::create(
                 [
                    'codigoTipoSolicitud'=>"ES06",
                    'nombreTipoSolicitud'=>"Prorroga egresado"
                ]);
                TipoSolicitud::create(
                    [
                        'codigoTipoSolicitud'=>"ES07",
                        'nombreTipoSolicitud'=>"Retiro ciclo"
                    ]);
                TipoSolicitud::create(
                    [
                        'codigoTipoSolicitud'=>"ES08",
                        'nombreTipoSolicitud'=>"Retiro materia"
                    ]);

                    TipoSolicitud::create(
                        [
                            'codigoTipoSolicitud'=>"DO01",
                            'nombreTipoSolicitud'=>"Licencia de incapacidad"
                        ]);
                TipoSolicitud::create(
                            [
                                'codigoTipoSolicitud'=>"DO02",
                                'nombreTipoSolicitud'=>"Misiones oficiales"
                            ]);
                    TipoSolicitud::create(
                        [
                            'codigoTipoSolicitud'=>"DO03",
                            'nombreTipoSolicitud'=>"Denuncia contra estudiantes"
                        ]);
                    TipoSolicitud::create(
                         [
                            'codigoTipoSolicitud'=>"DO04",
                            'nombreTipoSolicitud'=>"Reclasificación academica"
                        ]);
                        TipoSolicitud::create(
                            [
                               'codigoTipoSolicitud'=>"DO05",
                               'nombreTipoSolicitud'=>"Peticiones Oficiales"
                           ]);
                        TipoSolicitud::create(
                            [
                                'codigoTipoSolicitud'=>"OT04",
                                'nombreTipoSolicitud'=>"Peticiones otros"
                            ]);
    }
}
