﻿<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_reporte');
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }
	public function index(){
        $datos = $this->M_reporte->getDatosUser();
        $html  = '';
        $hamburguesa = '';
        if(count($datos) == 0) {
            $html = '';
        }else {
            foreach ($datos as $key){
                if($key->flag_hamburguesa == 1){
                    $hamburguesa = 'Lomo Saltado';
                }else if($key->flag_hamburguesa == 2){
                    $hamburguesa = 'Risotto Lima Norte con Atun';
                }else if($key->flag_hamburguesa == 3){
                    $hamburguesa = 'Fettuccini Maremonti';
                }else if($key->flag_hamburguesa == 4){
                    $hamburguesa = 'Arroz Primavera (Vegetariano)';
                }else{
                    $hamburguesa = 'Ninguna';
                }
                $html .= '<tr class="tr-cursor-pointer">
                            <td class="text-left">'.$key->empresa.'</td>
                            <td class="text-left">'.$key->direccion.'</td>
                            <td class="text-left">'.$key->nombre.'</td>
                            <td class="text-left">'.$key->apellido.'</td>
                            <td class="text-left">'.$key->cargo.'</td>
                            <td class="text-left">'.$key->email.'</td>
                            <td class="text-right">'.$key->telefono.'</td>
                            <td class="text-left">'.$key->birthday.'</td>
                            <td class="text-left">'.$key->deporte.'</td>
                            <td class="text-left">'.$hamburguesa.'</td>
                            <td class="text-center">'.$key->fecha.'</td>
                        </tr>';
            }
        }
		$data['html'] = $html;
		$this->load->view('v_admin', $data);
	}
    function cerrarCesion(){
        $data['error'] = EXIT_ERROR;
        $data['msj']   = null;
        try {
            $this->session->unset_userdata('usuario');
            $data['error'] = EXIT_SUCCESS;
        } catch (Exception $e){
            $data['msj'] = $e->getMessage();
        }
        echo json_encode($data);
    }
}