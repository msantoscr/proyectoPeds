<?php

class Alumnos extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
    
    public function Add($datos){
        $existe = $this->db->query("SELECT Id FROM alumnos WHERE Correo ='".$datos['Correo']."'");
		$result = $existe->num_rows();
		
		if($result > 0){
		    return false;
		}else{
    		$data = [
                'Nombre' => $datos['Nombre'],
                'Apellido'  => $datos['Apellido'],
                'Universidad' => $datos['Universidad'],
                'Telefono' => $datos['Telefono'],
                'Correo' => $datos['Correo']
            ];
    
            return $this->db->insert("alumnos", $data);
		}
    }
    
    public function Get(){
        $this->db->select("Id, Nombre, Apellido, Universidad, Telefono, Correo");
        $this->db->from("alumnos");
        
        return $this->db->get()->result_array();
    }
    
    public function GetByMail($correo){
        $condicional = array("Correo" => $correo);
        $this->db->select("Id, Nombre, Apellido, Universidad, Telefono, Correo");
        $this->db->from("alumnos");
        $this->db->where($condicional);
        
        return $this->db->get()->row_array();
    }
    
    public function GetById($id){
        $condicional = array("Id" => $id);
        $this->db->select("Id, Nombre, Apellido, Universidad, Telefono, Correo");
        $this->db->from("alumnos");
        $this->db->where($condicional);
        
        return $this->db->get()->row_array();
    }
    
    public function AddAlumnoPago($datos){
        $data = [
            'IdAlumno' => $datos['IdAlumno'],
            'IdCurso'  => $datos['IdCurso'],
            'IdFechaInicio' => $datos['IdFechaInicio'],
            'Precio' => $datos['Precio'],
            'Descuento' => $datos['Descuento'],
            'Comision' => $datos['Comision'],
            'Total' => $datos['Total']
        ];

        return $this->db->insert("alumnos_pagos", $data);
    }
    
    public function GetHistorialAlumnos($start, $length, $search, $columna, $direccion, $curso){
        $srch = "";
        $ord = "";
        $rond = "";
        
        if($search){
            $srch = " WHERE nombreCompleto LIKE '%".$search."%' ";
        }

        if($columna){
            $columnaNombre = "";
            switch ($columna) {
                case 1:
                    $columnaNombre = "nombreCompleto";
                    break;
                case 2:
                    $columnaNombre = "alumno_universidad";
                    break;
                case 3:
                    $columnaNombre = "alumno_telefono";
                    break;
                case 4:
                    $columnaNombre = "alumno_correo";
                    break;
                case 5:
                    $columnaNombre = "fecha_inicio";
                    break;
                case 6:
                    $columnaNombre = "curso_nombre";
                    break;
                case 7:
                    $columnaNombre = "alumno_precio";
                    break;
                case 8:
                    $columnaNombre = "alumno_descuento";
                    break;
                case 9:
                    $columnaNombre = "alumno_comision";
                    break;
                case 10:
                    $columnaNombre = "alumno_total";
                    break;
                
                default:
                    $columnaNombre = "nombreCompleto";
                    break;
            }
            $ord = " ORDER BY ".$columnaNombre." ".$direccion;
        }

        if($curso > 0 && $srch == ""){
            $rond = " WHERE curso_id = ".$curso;
        }else if($curso > 0 && $srch != ""){
            $rond = " and curso_id = ".$curso;
        }else{
            $rond = " WHERE curso_id = ".$curso;
        }

        $queryNumFilas = "SELECT COUNT(1) cant FROM view_alumnospeds ".$srch.$rond;
        $queryNumFilas = $this->db->query($queryNumFilas);
        $queryNumFilas = $queryNumFilas->row();
        $queryNumFilas = $queryNumFilas->cant;

        $query = "SELECT
                    id_alumno,
                    nombreCompleto,
                    alumno_universidad,
                    alumno_telefono,
                    alumno_correo,
                    fecha_inicio,
                    curso_nombre,
                    alumno_precio,
                    alumno_descuento,
                    alumno_comision,
                    alumno_total
                FROM view_alumnospeds
                ".$srch.$rond.$ord." LIMIT $start, $length ";

        $result = $this->db->query($query);

        $retornar = array(
            'numDataTotal' => $queryNumFilas,
            'datos' => $result);

        return $retornar;
    }

    public function ExportReporteHistorial($curso){
        $condicional = array("curso_id" => $curso);
        $this->db->select('
            id_alumno,
            nombreCompleto,
            alumno_universidad,
            alumno_telefono,
            alumno_correo,
            fecha_inicio,
            curso_nombre,
            alumno_precio,
            alumno_descuento,
            alumno_comision,
            alumno_total
        ');
        $this->db->from("view_alumnospeds");
        $this->db->where($condicional);
		$this->db->order_by('nombreCompleto', 'ASC');

		return $this->db->get()->result_array();
    }

}