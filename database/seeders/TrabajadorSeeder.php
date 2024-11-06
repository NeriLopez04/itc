<?php

namespace Database\Seeders;

use App\Models\Estadocivil;
use App\Models\Genero;
use App\Models\Sangre;
use App\Models\Trabajador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TrabajadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Esto para obtener los ID's de los Estados Civiles creados segun el valor del campo ENUM
        $soltero = Estadocivil::where('estados_civiles', 'Soltero(a)')->first()->id;
        $casado = Estadocivil::where('estados_civiles', 'Casado(a)')->first()->id;
        $divorciado = Estadocivil::where('estados_civiles', 'Divorciado(a)')->first()->id;
        $viudo = Estadocivil::where('estados_civiles', 'Viudo(a)')->first()->id;
        $separado = Estadocivil::where('estados_civiles', 'Separado(a)')->first()->id;
        $unionLibre = Estadocivil::where('estados_civiles', 'Union Libre')->first()->id;

        //Para obtener los IDs de los tiposde Generos creados
        $masculino = Genero::where('genero', 'Masculino')->first()->id;
        $famenino = Genero::where('genero', 'Femino')->first()->id;

        //Para obtener los ID's de los tipos de Sangre segun el valor del campo ENUM

        $ap = Sangre::where('sangre', 'A+');
        $an = Sangre::where('sangre',);
        $bp = Sangre::where('sangre',);
        $   = Sangre::where('sangre',);
        $   = Sangre::where('sangre',);
        $   = Sangre::where('sangre',);
        $   = Sangre::where('sangre',);
        $   = Sangre::where('sangre',);
        

        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Neri Esau López Lopez',
            'numero_seguro'=>'93784903874',
            'rfc'=>'LOLN980810SE5',
            'curp'=>'LOLN980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'neri.22adidas@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Mario Daniel Ramos Lino',
            'numero_seguro'=>'93784903842',
            'rfc'=>'MDRL980810SE5',
            'curp'=>'MDRL980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'mario.daniel@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Damaris Melina Lopez Lopez',
            'numero_seguro'=>'93784903872',
            'rfc'=>'DMLL980810SE5',
            'curp'=>'DMLL980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'Damaris@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Omar Edair Rodriguez Resendez',
            'numero_seguro'=>'9378230274',
            'rfc'=>'OERR980810SE5',
            'curp'=>'OERR980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'omar@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Pedro Ruiz Medrano',
            'numero_seguro'=>'93787462374',
            'rfc'=>'PRM980810SE5',
            'curp'=>'PRMN980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'pedro@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Miguel Angel Villa Melendez',
            'numero_seguro'=>'93784916212',
            'rfc'=>'MAVM980810SE5',
            'curp'=>'MAVM980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'Miguel@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Ximena Hernandez Lopez',
            'numero_seguro'=>'98276543874',
            'rfc'=>'XHL980810SE5',
            'curp'=>'XHLN980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'ximena@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Nancy Michelle Cano Martinez',
            'numero_seguro'=>'93787398761',
            'rfc'=>'NMCM980810SE5',
            'curp'=>'NMCN980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'nancy@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'830',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);

        Trabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Victor Manuel Pérez Gonzales',
            'numero_seguro'=>'93787329737',
            'rfc'=>'VMPG980810SE5',
            'curp'=>'VMPG980810HTSPPR00',
            'telefono'=>'8342683892',
            'correo'=>'victor@gmail.com',
            'calle'=>'San Pablo Guelatao',
            'numero_ext'=>'392',
            'numero_int'=>'',
            'cp'=>'87080',
            'colonia'=>'Amp. Jose de Escandon',
            'estado'=>'Tamaulipas',
            'ciudad'=>'Victoria',
            'pais'=>'Mexico',
            'black_list'=>'0',
            'foto'=>'',
            'created_at'=>'09-12-2024',
            'updated_at'=>'09-12-2024'
        ]);
    

    Trabajador::create([
        'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
        'nombre_trabajador'=>'Jose Alfredo Díaz Vazquez',
        'numero_seguro'=>'93787392726',
        'rfc'=>'JADV980810SE5',
        'curp'=>'JADV980810HTSPPR00',
        'telefono'=>'8192093892',
        'correo'=>'JOSE@gmail.com',
        'calle'=>'San Pablo Guelatao',
        'numero_ext'=>'272',
        'numero_int'=>'',
        'cp'=>'87080',
        'colonia'=>'Amp. Jose de Escandon',
        'estado'=>'Tamaulipas',
        'ciudad'=>'Victoria',
        'pais'=>'Mexico',
        'black_list'=>'0',
        'foto'=>'',
        'created_at'=>'09-12-2024',
        'updated_at'=>'09-12-2024'
    ]);

    Trabajador::create([
        'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
        'nombre_trabajador'=>'Sergio Ruben Mota Vallejo',
        'numero_seguro'=>'73828976478',
        'rfc'=>'SRMV980810SE5',
        'curp'=>'SRMV980810HTSPPR00',
        'telefono'=>'8192093892',
        'correo'=>'sergio@gmail.com',
        'calle'=>'San Pablo Guelatao',
        'numero_ext'=>'272',
        'numero_int'=>'',
        'cp'=>'87080',
        'colonia'=>'Amp. Jose de Escandon',
        'estado'=>'Tamaulipas',
        'ciudad'=>'Victoria',
        'pais'=>'Mexico',
        'black_list'=>'0',
        'foto'=>'',
        'created_at'=>'09-12-2024',
        'updated_at'=>'09-12-2024'
    ]);

    }
}
