<?php namespace App\Controllers;

use App\Models\ModeloAnimal;

class RegistroControlador extends BaseController {
    
    
    public function index() {

		$animales=array("nombre1"=>"","nombre2"=>"");
		return view('vistaRegistro',$animales);
	}

	public function registrar(){

		//1.Recibiendo datos desde la vista
		$nombre=$this->request->getPost("nombreAnimal");
		$edad=$this->request->getPost("edadAnimal");
		$tipo=$this->request->getPost("tipoAnimal");
		$comida=$this->request->getPost("comidaAnimal");
		$descripcion=$this->request->getPost("descripcion");
		$foto=$this->request->getPost("foto");
		

		//2.Organizar los datos de envio a la base datos en un arreglo asociativo
		$datosEnvio=array(
			"nombreanimal"=>$nombre,
			"edad"=>$edad,
			"tipoanimal"=>$tipo,
			"comida"=>$comida,
			"descripcion"=>$descripcion,
			"foto"=>$foto
		);
		

		//3. Sacar una copia de la clase (instanciar la clase) o crear un objeto
		// de la clase ModeloPersona
		$modeloAnimal= new ModeloAnimal();

		//4. Ejecuto el metodo insert() del objeto cerado en el punto 3
		try{
			$modeloAnimal->insert($datosEnvio);

			$mensaje="Animal registrado con éxito";
			return redirect()->to(base_url("public/animales"))->with('mensaje',$mensaje);
		}catch(\Exception $e){

			echo($e->getMessage());
		}


	}

	public function consultar(){

		//1. Crear un objeto del modelo
		$modeloAnimal= new ModeloAnimal();

		//2.Ejecutar la consulta
		try{

			//3. utilizar el metodo findAll() del objeto del modelo
			$animalesConsultados=$modeloAnimal->findAll();

			//4. organizar el resultado en un arreglo asociativo
			// Para poderlo enviar a la vista
			$datosParaVista=array("animales"=>$animalesConsultados);

			//5. Enviar datos a la vista
			return view('vistaListado',$datosParaVista);


		}catch(\Exception $e){
			echo($e->getMessage());
		}

	}

	public function eliminar($idEliminar){

		//1. Crear un objeto del modelo(Para poder utilizar el modelo)
		$modeloAnimal= new ModeloAnimal();

		//2. ejecutar la función delete() del modelo
		try{
			$modeloAnimal->where('id',$idEliminar)->delete();
			$mensaje="Registro eliminado con éxito!";
			return redirect()->to(base_url("public/animales/eliminar"))->with('mensaje',$mensaje);

		}catch(\Exception $e){
			echo($e->getMessage());
		}

	}

	public function editar($idEditar){

		//1.Recibiendo datos desde la vista
		$nombre=$this->request->getPost("nombreEditar");
		$edad=$this->request->getPost("edadEditar");
		$comida=$this->request->getPost("comidaEditar");
		$tipo=$this->request->getPost("tipoEditar");
		$descripcion=$this->request->getPost("descEditar");

		//2.Organizar los datos de envio a la base datos en un arreglo asociativo
		$datosEnvio=array(
			"nombreanimal"=>$nombre,
			"edad"=>$edad,
			"comida"=>$comida,
			"descripcion"=>$descripcion
		);

		//3. Crear objeto del modelo
		$modeloAnimal= new ModeloAnimal();

		//4. Edite los datos con la función update()
		try{

			$modeloAnimal->update($idEditar,$datosEnvio);
			$mensaje="Registro editado con éxito!";
			return redirect()->to(base_url("public/animales/listar"))->with('mensaje',$mensaje);

		}catch(\Exception $e){

			echo($e->getMessage());

		}


	}





	//--------------------------------------------------------------------

}
