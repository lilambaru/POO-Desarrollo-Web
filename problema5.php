<?php

class Persona
{
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    ) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}


// CLASE ESTUDIANTE
class Estudiante extends Persona
{
    private string $matricula;
    private float $indiceAcademico;
    private int $anioIngreso;
    private string $estadoAcademico;
    private string $grado;
    private string $modalidadEstudio;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento,
        string $matricula,
        float $indiceAcademico,
        int $anioIngreso,
        string $estadoAcademico,
        string $grado,
        string $modalidadEstudio
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->matricula = $matricula;
        $this->indiceAcademico = $indiceAcademico;
        $this->anioIngreso = $anioIngreso;
        $this->estadoAcademico = $estadoAcademico;
        $this->grado = $grado;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function mostrarInformacion()
    {
        echo "<h2>Datos del Estudiante</h2>";

        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Fecha de nacimiento: " . $this->fechaNacimiento . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
        echo "Índice académico: " . $this->indiceAcademico . "<br>";
        echo "Año de ingreso: " . $this->anioIngreso . "<br>";
        echo "Estado académico: " . $this->estadoAcademico . "<br>";
        echo "Grado: " . $this->grado . "<br>";
        echo "Modalidad de estudio: " . $this->modalidadEstudio . "<br>";
    }
}


// CLASE DOCENTE
class Docente extends Persona
{
    private string $codigoDocente;
    private string $departamentoFacultad;
    private string $categoriaRango;
    private string $maximoTituloAcademico;
    private string $tipoContratacion;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento,
        string $codigoDocente,
        string $departamentoFacultad,
        string $categoriaRango,
        string $maximoTituloAcademico,
        string $tipoContratacion
    ) {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->codigoDocente = $codigoDocente;
        $this->departamentoFacultad = $departamentoFacultad;
        $this->categoriaRango = $categoriaRango;
        $this->maximoTituloAcademico = $maximoTituloAcademico;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function mostrarInformacion()
    {
        echo "<h2>Datos del Docente</h2>";

        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido: " . $this->apellido . "<br>";
        echo "Fecha de nacimiento: " . $this->fechaNacimiento . "<br>";
        echo "Código de docente: " . $this->codigoDocente . "<br>";
        echo "Departamento o Facultad: " . $this->departamentoFacultad . "<br>";
        echo "Categoría o Rango docente: " . $this->categoriaRango . "<br>";
        echo "Máximo título académico: " . $this->maximoTituloAcademico . "<br>";
        echo "Tipo de contratación: " . $this->tipoContratacion . "<br>";
    }
}


// CREAR ESTUDIANTE
$estudiante = new Estudiante(
    "Ambar",
    "Greco",
    "10/05/2003",
    "8-988-123",
    2.75,
    2024,
    "Activo",
    "3",
    "Presencial"
);


// CREAR DOCENTE
$docente = new Docente(
    "Irina",
    "Fong",
    "15/08/1980",
    "DOC-001",
    "Facultad de Sistemas",
    "Titular",
    "Magíster",
    "Tiempo Completo"
);


// MOSTRAR INFORMACIÓN
$estudiante->mostrarInformacion();

echo "<hr>";

$docente->mostrarInformacion();

?>