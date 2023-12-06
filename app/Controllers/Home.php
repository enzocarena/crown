<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\modelologin;
use App\Models\Tipo;
use App\Models\color;
use App\Models\DatosEnvioModel;
use App\models\Producto;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session("usuario");
        return view('login', ["mensaje" => $mensaje]);
    }
    
    public function principio(){
        $usuario = new modelologin();
        $correo = $this->request->getPost("correo");
        $contrasena = $this->request->getPost("contrasena");
        $usuario2 = $usuario->where('correo', $correo)->first();
        if (password_verify($contrasena, $usuario2["contrasena"])){
            session()->set('usuario', $usuario2);
            
            return redirect()->to(base_url('ir')); 
        } else {
            return redirect()->to(base_url());  
        }
    }
    
   
    public function admin()
    {
        if(session("usuario")["jerarquia"] ==1){
            $tiposModel = new Tipo();
            $colorModel = new color();

            $datos['tipos'] = $tiposModel-> getAllInfo();
            $datos['color'] = $colorModel-> getAllInfo();
            return view('admin',$datos);
        }
        else{
            return redirect()->to(base_url()); 
        }
    }

    public function principal()
    {
            $productosModel = new Producto();

            $datos['productos'] = $productosModel-> getAllInfo();
        return view('principal',$datos);
    }
    public function login()
    {
        return view('login');
    }

    public function registrarse()
    {
        return view('registrarse');
    }

    public function index2($id)
    {
        $productosModel = new Producto();
        $datos['producto'] = $productosModel-> getProductInfo($id);
        return view('index2', $datos);
    }

    public function vista_carrito()
    {
        
        $carritoModel = new \App\Models\carritomodel();
    
        $usuario_id = 1; 
        $productosCarrito = $carritoModel->where('id_usuario', $usuario_id)->findAll();
    
        $data = [
            'productosCarrito' => $productosCarrito,
        ];
    
        return view('vista_carrito', $data);
    }

    public function vista_compra()
    {
        return view('vista_compra');
    }

    public function finalizado()
    {
        return view('finalizado');
    }


    public function remerasall()
    {
        //cargar modelo de productos
        $productosModel = new Producto();

        $datos['productos'] = $productosModel-> getAllInfo();
        return view('remerasall',$datos);
    }
    public function lompasall()
    {
         //cargar modelo de productos
        $productosModel = new Producto();

        $datos['productos'] = $productosModel-> getAllInfo();
        return view('lompasall',$datos);
    }

    public function buzosall()
    {
        //cargar modelo de productos
        $productosModel = new Producto();

        $datos['productos'] = $productosModel-> getAllInfo();
        return view('buzosall',$datos);
    }
    
    public function perfil()
    {
        $idUsuario = session()->get('usuario')['id_usuario'];

        $envioModel = new DatosEnvioModel();

        $historialEnvios = $envioModel->where('id_usuario', $idUsuario)->findAll();

        $data = [
            'historialEnvios' => $historialEnvios,
        ];

        return view('perfil', $data);
    }
}