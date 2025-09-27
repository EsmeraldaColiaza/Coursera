<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina_model extends CI_Model {

 
public function consultar_secciones_activas() {
    $query = $this->db->query("CALL ObtenerSecciones()");
    return $query->result();
}
}

