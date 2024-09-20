<?php

namespace Database\Seeders;

use App\Models\Listtrabajador;
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Neri Esau',
            'apellido_paterno'=>'Lopez',
            'apellido_materno'=>'Lopez',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Mario Daniel',
            'apellido_paterno'=>'Ramos',
            'apellido_materno'=>'Lino',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Damaris Melina',
            'apellido_paterno'=>'Lopez',
            'apellido_materno'=>'Lopez',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Omar Edair',
            'apellido_paterno'=>'Rodriguez',
            'apellido_materno'=>'Resendez',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Pedro',
            'apellido_paterno'=>'Ruiz',
            'apellido_materno'=>'Medrano',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Miguel Angel',
            'apellido_paterno'=>'Villa',
            'apellido_materno'=>'Melendez',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Ximena',
            'apellido_paterno'=>'Hernandez',
            'apellido_materno'=>'Lopez',
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
        Listtrabajador::create([
            'id_itc'=>str_pad(rand(0,999999),5,'ITC_',STR_PAD_LEFT),
            'nombre_trabajador'=>'Nancy Michelle',
            'apellido_paterno'=>'Cano',
            'apellido_materno'=>'Martinez',
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
    }
}
