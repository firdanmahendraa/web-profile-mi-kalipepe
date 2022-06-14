<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
use chriskacerguis\RestServer\RestController;

class Api extends RestController {

    function __construct(){
        // Construct the parent class
        parent::__construct();
        $this->load->model('main_model');
    }

    function index_get(){
        $guru = $this->main_model->getGuru();
        if ($guru){
            $this->response([
                'status' => true,
                'data' => $guru
            ], RestController::HTTP_OK);
        }
    }

}