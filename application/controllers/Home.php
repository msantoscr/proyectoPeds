<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');
        
        $this->load->model('alumnos/Alumnos');
        $this->load->model('cursos/Cursos');
		
	}

	
	public function index()
	{
		$data['title'] = "Home";
		
		$linkJsVista = base_url('assets/js/home.js');

        $footer = array(
            'scriptVista'=> '<script src="'.$linkJsVista.'"></script>'
        );
        
		$this->load->view('header', $data);
		$this->load->view('home/index');
		$this->load->view('footer', $footer);
	}

	public function bootcamp1(){
		$data['title'] = "Creación de experiencias";
		$this->load->view('header', $data);
		$this->load->view('bootcamps/bootcamp1');
		$this->load->view('footer');
	}

	public function bootcamp2(){
		$data['title'] = "Arquitectura de experiencias";
		$this->load->view('header', $data);
		$this->load->view('bootcamps/bootcamp2');
		$this->load->view('footer');
	}

	public function bootcamp3(){
		$data['title'] = "Desarrollo de contenidos";
		$this->load->view('header', $data);
		$this->load->view('bootcamps/bootcamp3');
		$this->load->view('footer');
	}

	public function bootcamp4(){
		$data['title'] = "Proyectos";
		$this->load->view('header', $data);
		$this->load->view('bootcamps/bootcamp4');
		$this->load->view('footer');
	}

	public function bootcamp5(){
		$data['title'] = "Impartición";
		$this->load->view('header', $data);
		$this->load->view('bootcamps/bootcamp5');
		$this->load->view('footer');
	}

	public function payments($id){
		$data['title'] = "Check out";
		$data['id'] = $id;
		$datosCursos = $this->Cursos->CursosById($id);
		$data['precio'] = $datosCursos['Precio'];
		$this->load->view('header', $data);
		
		if($data['precio'] !== ""){
			switch ($id) {
				case '1':
					$data['curso'] = "Especializacíon en Creación de Experiencias de Aprendizaje Híbridas";
					$data['modalidad'] = "Híbrido digital, asesoramiento con un experto";
					$data['duracion'] = "4 semanas 2 sesiones semanales";
					$data['fechasInicio'] = $this->Cursos->GetFechasInicios($id);
					$data['universidadesList'] = $this->Cursos->GetUniversidades();
					$this->load->view('pays/pay', $data);
					break;
				case '2':
					$data['curso'] = "Especializacíon en Arquitectura de Experiencias de Aprendizaje Híbridas";
					$data['modalidad'] = "Híbrido digital, workshops prácticos";
					$data['duracion'] = "6 semanas 2 sesiones semanales";
					$data['fechasInicio'] = $this->Cursos->GetFechasInicios($id);
					$data['universidadesList'] = $this->Cursos->GetUniversidades();
					$this->load->view('pays/pay', $data);
					break;
				case '3':
					$data['curso'] = "Desarrollo de Contenido para Experiencias de Aprendizaje Híbrido";
					$data['modalidad'] = "Híbrido digital, workshops prácticos";
					$data['duracion'] = "4 semanas 2 sesiones semanales";
					$data['fechasInicio'] = $this->Cursos->GetFechasInicios($id);
					$data['universidadesList'] = $this->Cursos->GetUniversidades();
					$this->load->view('pays/pay', $data);
					break;
				case '4':
					$data['curso'] = "Producción de Experiencias de Aprendizaje Híbridas";
					$data['modalidad'] = "Híbrido digital, workshops prácticos";
					$data['duracion'] = "6 semanas 2 sesiones semanales";
					$data['fechasInicio'] = $this->Cursos->GetFechasInicios($id);
					$data['universidadesList'] = $this->Cursos->GetUniversidades();
					$this->load->view('pays/pay', $data);
					break;
				case '5':
					$data['curso'] = "Impartición de Programas Híbridos";
					$data['modalidad'] = "Híbrido digital, workshops prácticos";
					$data['duracion'] = "6 semanas 2 sesiones semanales";
					$data['fechasInicio'] = $this->Cursos->GetFechasInicios($id);
					$data['universidadesList'] = $this->Cursos->GetUniversidades();
					$this->load->view('pays/pay', $data);
					break;
				
				default:
					
					break;
			}
		}else{
			echo $this->index();
		}

		
		$this->load->view('footer');

	}

	public function preferencia_MP(){
		require_once 'assets/vendorMp/autoload.php';

		$monto = $this->input->post('monto');
		$producto = $this->input->post('nombre_curso');
		$mail = $this->input->post('correo');
		$fecha = $this->input->post('fecha');
		$idCursoString = $this->input->post('id_curso');
		$idCurso = (int) $idCursoString;
		$desc = $this->input->post('desc');
		$comision = $this->input->post('comision');
		$precio_c = $this->input->post('precio_c');
		$nombre_curso = $this->input->post('nombre_curso');
		$correo = $this->input->post('correo');

		$datosAlumn = $this->Alumnos->GetByMail($correo);

		// Key privada de Cuanta MP
		MercadoPago\SDK::setAccessToken('TEST-6425875658038259-050922-582a62a5ceed0f52e54499bd8e7384a4-1014940928');
		// Crea un objeto de preferencia
		$preference = new MercadoPago\Preference();
		//Crea un ítem en la preferencia
		$item = new MercadoPago\Item();
		$item->title = $producto;
		$item->quantity = 1;
		
		$preference->binary_mode = true;
		$item->unit_price = $monto;
		$preference->payment_methods = array("excluded_payment_types" => array(
			array("id" => "atm"), 
			array("id" => "digital_wallet")
		));
		
		$preference->back_urls = array(
			"success" => base_url("Home/upAlumno?umail=".$mail."?idAlumno=".$datosAlumn['Id']."?idCurso=".$idCurso."?idFechaInicio=".$fecha."?precio=".$precio_c."?descuento=".$desc."?comision=".$comision."?total=".$monto.""),
			"failure" => base_url("Home/failPay")/*,
			 "pending" => "https://my.emtech.net/pending" */
		);

		$preference->items = array($item);
		$preference->save();

		echo $preference->id;
	}
	
	public function AgregarRegistro(){
	    $nombre = $this->input->post('nombre');
	    $apellido = $this->input->post('apellido');
	    $universidad = $this->input->post('universidad');
	    $telefono = $this->input->post('telefono');
	    $correo = $this->input->post('correo');
	    
	    $datos = array(
	        'Nombre' => $nombre,
	        'Apellido' => $apellido,
	        'Universidad' => $universidad,
	        'Telefono' => $telefono,
	        'Correo' => $correo
	   );
	   
	   $result = $this->Alumnos->Add($datos);

        echo json_encode($result);
	}


	public function upAlumno(){
		$data['title'] = "Check out";
		
		$IdAlumno = $this->input->get('idAlumno');
		$IdCurso = $this->input->get('idCurso');
		$IdFechaInicio = $this->input->get('idFechaInicio');
		$Precio = $this->input->get('precio');
		$Descuento = $this->input->get('descuento');
		$Comision = $this->input->get('comision');
		$Total = $this->input->get('total');

		$datos = array(
			'IdAlumno' => $IdAlumno,
			'IdCurso' => $IdCurso,
			'IdFechaInicio' => $IdFechaInicio,
			'Precio' => $Precio,
			'Descuento' => $Descuento,
			'Comision' => $Comision,
			'Total' => $Total
		); 

		$result = $this->Alumnos->AddAlumnoPago($datos);

		$this->load->view('header', $data);
		$this->load->view('pays/pays_conf');
	}


	public function failPay(){
		$data['title'] = "Check out";
		$this->load->view('header', $data);
		$this->load->view('pays/pays_fail');
	}
	
	public function historial(){
		$data['title'] = "Historial";
		$linkDatatable = base_url('assets/DataTables/datatables.min.css');
        $linkJsDatatable = base_url('assets/DataTables/datatables.min.js');
		$data['linkDatatable'] = "<link rel='stylesheet' type='text/css' href='$linkDatatable'/>";
		$data['cursos'] = $this->Cursos->Get();
		$linkJsVista = base_url('assets/js/historial.js');

        $footer = array(
            'scriptVista'=> '<script src="'.$linkJsVista.'"></script>',
			'scriptDatatable' => '<script src="'.$linkJsDatatable.'"></script>'
        );
        
		$this->load->view('header', $data);
		$this->load->view('historial/index', $data);
		$this->load->view('footer', $footer);
	}

	public function obtenerHistorial(){
		$start = $this->input->post('start');
        $length = $this->input->post('length');
        $search = $this->input->post('search')['value'];
        $columna = $this->input->post('order')[0]['column'];
        $direccion = $this->input->post('order')[0]['dir'];
        $curso = $this->input->post('columns')[0]['search']['value'] == "" ?  0 : $this->input->post('columns')[0]['search']['value'];

        $result = $this->Alumnos->GetHistorialAlumnos($start, $length, $search, $columna, $direccion, $curso);
        $resultado = $result['datos'];
        $totalDatos = $result['numDataTotal'];

        $datos = array();

        foreach ($resultado->result_array() as $fila) {
            $array = array();
            
            $array['id_alumno'] = $fila['id_alumno'];
			$array['nombreCompleto'] = $fila['nombreCompleto'];
            $array['alumno_universidad'] = $fila['alumno_universidad'];
			$array['alumno_telefono'] = $fila['alumno_telefono'];
			$array['alumno_correo'] = $fila['alumno_correo'];
			$array['fecha_inicio'] = $fila['fecha_inicio'];
            $array['curso_nombre'] = $fila['curso_nombre'];
			$array['alumno_precio'] = $fila['alumno_precio'];
			$array['alumno_descuento'] = $fila['alumno_descuento'];
			$array['alumno_comision'] = $fila['alumno_comision'];
			$array['alumno_total'] = $fila['alumno_total'];

            $datos[] = $array;
        }

        $totalDatoObtenido = $resultado->num_rows();

        $json_data = array(
            'draw' => intval($this->input->post('draw')), 
            'recordsTotal' => intval($totalDatoObtenido),
            'recordsFiltered' => intval($totalDatos),
            'data' => $datos
            );

        echo json_encode($json_data);
	}

	public function ExportHistorial($curso){
		$file_name = 'reporte_registros_'.date('Ymd').'.csv';
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$file_name");
        header("Content-Type: application/csv;");

        $totales_data = $this->Alumnos->ExportReporteHistorial($curso);
        $file = fopen('php://output', 'w');
        fputs($file, chr(0xEF).chr(0xBB).chr(0xBF));

        $header = array("identificador",
        "Nombre",
        "Universidad",
        "Contacto",
        "Correo",
        "Fecha",
        "Curso",
		"Precio",
		"Descuento",
		"Comisión",
		"Total pagado"
        );
        
        fputcsv($file, $header);

        foreach ($totales_data as $key => $value) {
            fputcsv($file, $value);
        }
        fclose($file);
        exit;
	}


}
