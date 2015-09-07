<?php
    $guia = array('piezas' => array(
                            '1'=>array(
                                'numero' => '1', 
                                'Fibra' =>'03',
                                'Prop. 1' => '50',
                                'Prop. 2'=> '50',
                                'articulo' => 'Franela',
                                'color' => 'black',
                                'peso'=>'10'
                            ),
                            '2'=>array(
                                'numero' => '2', 
                                'Fibra' =>'03',
                                'Prop. 1' => '50',
                                'Prop. 2'=> '50',
                                'articulo' => 'Franela',
                                'color' => 'black',
                                'peso'=>'10'
                            ),
                            '3'=>array(
                                'numero' => '3', 
                                'Fibra' =>'03',
                                'Prop. 1' => '50',
                                'Prop. 2'=> '50',
                                'articulo' => 'Franela',
                                'color' => 'black',
                                'peso'=>'10'
                            )
                    )
                );

    $cliente = array('nombre' => 'ACC',
                    'fecha' => '12-12-2012'
                );

//limpia buffer 
ob_end_clean();
require('../../libs/fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../../img/Logo_horizontal2.jpg',10,8,70);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(30,10,'Guia');
        // Salto de línea
        $this->Ln(20);
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
    function tabla_piezas($guias){
        //titulo tabla
        $this->Cell(80);
        $this->Cell(20,20,'Detalle de piezas');
        $this->Ln();
        
        //centra la tabla 
        $this->Cell(20);
        //IMPRIME CABECERAS DE TABLA
        foreach ($guias['piezas'] as $key => $value) {
            foreach ($value as $k => $v) {
                $this->Cell(20,10,$k,1);
            }
            //imprime solo una vez la cabecera de la tabla 
            break;
        }
        //espacio
        $this->Ln();
        //mueve la tabla 
        //LOOP PARA OBTENER LOS DAtOS DE LA GUIA
        foreach ($guias['piezas'] as $key => $value) {
            $this->Cell(20);
            foreach ($value as $k => $v) {
                $this->Cell(20,10,$v,1);
            }
            $this->Ln();
        }
    }

    function tabla_cliente($cli){
        $cli['id_guia']='111';
        $cli['color']='Blanco';

        $this->Cell(80);
        $this->Cell(20,20,'Datos Guia');
        $this->Ln();
        //corre la tabla 
        $this->Cell(50);
        //IMPRIME CABECERAS DE TABLA
        foreach ($cli as $key => $value) {
            $this->Cell(22,10,$key,1);
        }
        $this->Ln();
        //corre la tabla 
        $this->Cell(50);
        //LOOP PARA OBTENER LOS DAtOS DE LA GUIA
        foreach ($cli as $key => $value) {
            $this->Cell(22,10,$value,1);
        }
    }

}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

//obtiene tabla cliente 
$pdf->tabla_cliente($cliente);
//espacios
$pdf->Ln();
$pdf->Ln();
//obtiene tabla piezas
$pdf->tabla_piezas($guia);
//desplegando en pantalla (I para abrir en navegador)
$pdf->Output('guia.pdf','D');
?>