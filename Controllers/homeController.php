<?php 

// controller é completamente php
// homeController vai controlar a pagina home/inicial

 class homeController extends Controller {
    public function index() // padrao www.nome.com/
    {
        // chama um model
        // chama a view
        $this->carregarTemplate('home');
    }

 }


?>