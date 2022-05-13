<?php

class Cursos extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }

    
    public function GetFechasInicios($idCurso){
        $condicional = array("IdCurso" => $idCurso);
        $this->db->select("Id, Descripcion, IdCurso, Estatus");
        $this->db->from("fechas_inicios_cursos");
        $this->db->where($condicional);
        
        return $this->db->get()->result_array();
    }
    
    public function CursosById($id){
        $condicional = array("Id" => $id);
        $this->db->select("Id, Descripcion, Precio, Estatus");
        $this->db->from("cursos");
        $this->db->where($condicional);
        
        return $this->db->get()->row_array();
    }
    
    public function GetUniversidades(){
        $this->db->select("IdInt, universidad");
        $this->db->from("universidades");
        return $this->db->get()->result_array();
    }    
    
    public function Get(){
        $condicional = array("Estatus" => 1);
        $this->db->select("Id, Descripcion, Precio, Estatus");
        $this->db->from("cursos");
        $this->db->where($condicional);

        return $this->db->get()->result_array();
    }

}