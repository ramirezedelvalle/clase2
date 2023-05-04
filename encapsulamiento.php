<?php
class Producto {
    #DEFINICION DE LOS ATRIBUTOS
    protected string $nombre;
    public int $precio;
    public bool $disponible;

    #metodo constructor, se ejecuta al efectuar la instancia
    public function __construct(string $nombre, int $precio, bool $disponible)
    {
        #SE LES DA VALORES A LOS ATRIBUTOS CON LOS PARAMETROS QUE RECIBE EL MÉTODO CONSTRUCTOR
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }

    #DEFINICION DE METODOS
    public function mostrarProducto(){
        echo "El Producto es " . $this->nombre . " y su precio es de " . $this->precio;
        echo "<br>";
    }

    #METODO GETTER PARA LA PROPIEDAD PROTEGIDA DE NOMBRE
    public function getNombre() : string {
        return $this->nombre;
    }

    #METODO SETTER PARA LA PROPIEDAD PROTEGIDA DE NOMBRE
    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
$producto->mostrarProducto();
//echo $producto->getNombre(); 
//OBTIENE EL NOMBRE
$producto->setNombre('Nuevo Nombre'); 
//SETEA EL NOMBRE
//echo $producto->getNombre();
//OBTIENE EL NOMBRE
?>

