<?php
/*
    $receta_datos = array(  'ot' => '99934',
                            'id_receta' =>'122432',
                            'fecha' => '12-12-2012',
                            'hora'=>'14:13',
                            'descripcion'=>'6. Verde 3114 CTE DRA',
                            'clasificacion'=> 'disperso',
                            'litros' => '1060.0',
                            'un. standard'=>'1.30'
                );*/

    $receta = array(
                            'receta' => array(
                /*id Producto*/ '1'=>array(
                                    'id_prd' => 'PALADWS', 
                                    'cantidad_prd' => '1.000',
                                    'incidencia'=> '5',
                                    'nombre_prd' =>'Lavotan DWS',
                                    'prop_receta' => '1.0600',
                                    'unidad' => 'Kg'
                                ),
                                '2'=>array(
                                    'id_prd' => 'PQAA', 
                                    'cantidad_prd' => '0.500',
                                    'incidencia'=> '5',
                                    'nombre_prd' =>'Acido Acetico',
                                    'prop_receta' => '0.5300',
                                    'unidad' => 'Kg'
                                ),
                                '3'=>array(
                                    'id_prd' => 'PQAA', 
                                    'cantidad_prd' => '0.500',
                                    'incidencia'=> '5',
                                    'nombre_prd' =>'Acido Acetico',
                                    'prop_receta' => '0.5300',
                                    'unidad' => 'Kg'
                                )
                                ),
                            'datos'=> array(  'ot' => '99934',
                                            'id_receta' =>'122432',
                                            'fecha' => '12-12-2012',
                                            'hora'=>'14:13',
                                            'descripcion'=>'6. Verde 3114 CTE DRA',
                                            'clasificacion'=> 'disperso',
                                            'litros' => '1060.0',
                                            'un_standard'=>'1.30'
                    )
                );
    


//limpia buffer 
ob_end_clean();
require('../../libs/fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        $this->Ln(25);
        // Logo
        $this->Image('../../img/Logo_horizontal2.jpg',10,8,70);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Receta');
        // Salto de línea
        $this->Ln(10);
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function tabla_componentes($rec){
        $this->Ln(10);
        $this->Cell(80);
        $this->Cell(30,10,'Formula');
        $this->Ln(10);
        //head de tabla 
        $this->Cell(5);
        $this->Cell(30,10,'ID',1);
        $this->Cell(30,10,'Cantidad',1);
        $this->Cell(30,10,'Incidencia',1);
        $this->Cell(30,10,'Nombre',1);
        $this->Cell(30,10,'Proporcion',1);
        $this->Cell(30,10,'Unidad',1);
        //titulo tabla
        $this->Cell(80);
        $this->Cell(20,20,'Componentes');
        //centra la tabla 
        //$this->Cell(20);
        //IMPRIME CABECERAS DE TABLA
        //mueve la tabla 
        //LOOP PARA OBTENER LOS DAtOS DE LA GUIA
        foreach ($rec as $key => $value) {
            $this->Cell(5);
            foreach ($value as $k => $v) {
                $this->Cell(30,10,$v,1);
            }
            $this->Ln();
        }
    }

    function tabla_datos($datos){

        //$this->Cell(80);
        //$this->Cell(20,20,'Datos de Receta');
        //corre la tabla 
        //$this->Cell(50);
        //IMPRIME CABECERAS DE TABLA
        //corre la tabla 
        //$this->Cell(50);
        //LOOP PARA OBTENER LOS DAtOS DE LA GUIA
        $this->Ln();
        $this->Cell(10,10,'OT :');
        $this->Cell(35,10,$datos['ot']);
        $this->Cell(90,20,'');
        $this->Cell(20,10,'ID Receta :');
        $this->Cell(35,10,$datos['id_receta']);
        $this->Ln();
        $this->Cell(15,10,'Fecha : ');
        $this->Cell(35,10,$datos['fecha']);
        $this->Cell(93,20,'');
        $this->Cell(15,10,'Hora :');
        $this->Cell(35,10,$datos['hora']);
        $this->Ln();
        $this->Cell(25,10,'Descripcion :');
        $this->Cell(25,10,$datos['descripcion']);
        $this->Cell(80,20,'');
        $this->Cell(25,10,'Clasificacion :');
        $this->Cell(35,10,$datos['clasificacion']);
        $this->Ln();
        $this->Cell(15,10,'Litros :');
        $this->Cell(15,10,$datos['litros']);
        $this->Cell(97,20,'');
        $this->Cell(35,10,'Un. Standard : ');
        $this->Cell(25,10,$datos['un_standard']);
    }

}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

//obtiene tabla cliente 
$pdf->tabla_datos($receta['datos']);
//espacios
$pdf->Ln();
//obtiene tabla piezas
$pdf->tabla_componentes($receta['receta']);
//desplegando en pantalla (I para abrir en navegador)
$pdf->Output('guia.pdf','D');
?>