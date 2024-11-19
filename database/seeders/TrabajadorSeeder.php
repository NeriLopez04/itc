<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Credito;
use App\Models\Departamento;
use App\Models\Estadocivil;
use App\Models\Genero;
use App\Models\Horario;
use App\Models\Proyecto;
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
        $femenino = Genero::where('genero', 'Femenino')->first()->id;

        //Para obtener los ID's de los tipos de Sangre segun el valor del campo ENUM
        $ap = Sangre::where('sangre', 'A+')->first()->id;
        $an = Sangre::where('sangre','A-')->first()->id;
        $bp = Sangre::where('sangre','B+')->first()->id;
        $bn = Sangre::where('sangre','B-')->first()->id;
        $abp = Sangre::where('sangre','AB+')->first()->id;
        $abn = Sangre::where('sangre','AB-')->first()->id;
        $op = Sangre::where('sangre','O+')->first()->id;
        $on = Sangre::where('sangre','O-')->first()->id;

        //Para obtener los ID's de los tiposde Departamento segun el valor en la tabla
       /* $direccion = Departamento::where('departament','Direccion')->first()->id;
        $admin = Departamento::where('departament','Administracion')->first()->id;
        $calidad = Departamento::where('departament','Calidad')->first()->id;
        $seguridad = Departamento::where('departament','Seguridad')->first()->id;
        $compras = Departamento::where('departament','Procura y Logistica')->first()->id;
        $mmto = Departamento::where('departament','Mantenimiento')->first()->id;

        //Para obtener los ID's de los tipos de Categoriasegun el valor en la tabla
        $auxiliar = Categoria::where ('category', 'auxiliar')->first()->id;

        //Para obtener los ID's de si tiene o no Credito segun el valor de la tabla
        $si = Credito::where ('credito', '1');
        $no = Credito::where('credito','0');

        //Para obtener los ID's de los Proyectos 
        $valladolid = Proyecto::where('nombre_proy', 'CCC Valladolid');
        $central = Proyecto::where('nombre_proy', 'Oficina Central');

        //Para obtener los ID's de los horarios
        $horasObligadas = Horario::where('horas_obligadas', '8'); */


        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $soltero,
            'genero_id' => $masculino,
            'sangre_id' => $op,
            //'departamento_id' => $direccion,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas

        ]);

        
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $soltero,
            'genero_id' => $masculino,
            'sangre_id' => $op,
            //'departamento_id' => $calidad,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas

        ]);
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $separado,
            'genero_id' => $femenino,
            'sangre_id' => $on,
            //'departamento_id' => $mmto,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $soltero,
            'genero_id' => $masculino,
            'sangre_id' => $ap,
            //'departamento_id' => $calidad,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $divorciado,
            'genero_id' => $masculino,
            'sangre_id' => $bn,
            //'departamento_id' => $compras,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $soltero,
            'genero_id' => $masculino,
            'sangre_id' => $an,
            //'departamento_id' => $mmto,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $soltero,
            'genero_id' => $masculino,
            'sangre_id' => $op,
            //'departamento_id' => $mmto,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);
        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $viudo,
            'genero_id' => $femenino,
            'sangre_id' => $abn,
            //'departamento_id' => $seguridad,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);

        Trabajador::create([
            'id'=>str_pad(rand(0,999999),5),
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
            'updated_at'=>'09-12-2024',
            'estadocivil_id' => $casado,
            'genero_id' => $masculino,
            'sangre_id' => $bp,
            //'departamento_id' => $admin,
            //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
        ]);
    

    Trabajador::create([
        'id'=>str_pad(rand(0,999999),5),
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
        'updated_at'=>'09-12-2024',
        'estadocivil_id' => $unionLibre,
        'genero_id' => $masculino,
        'sangre_id' => $abn,
        //'departamento_id' => $compras,
        //'categoria_id' => $auxiliar,
            //'credito_id' => $si,
            //'proyecto_id' => $central,
            //'horario_id' => $horasObligadas
    ]);

    Trabajador::create([
        'id'=>str_pad(rand(0,999999),5),
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
        'updated_at'=>'09-12-2024',
        'estadocivil_id' => $unionLibre,
        'genero_id' => $masculino,
        'sangre_id' => $abp,
        //'departamento_id' => $mmto,
        //'categoria_id' => $auxiliar,
        //'credito_id' => $si,
        //'proyecto_id' => $central,
        //'horario_id' => $horasObligadas

    ]);

    }
}
