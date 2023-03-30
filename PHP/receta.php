<?php

include 'FPDF/fpdf.php'; #Importamos la libreria FPDF


#Datos del doctor
$Doctor = utf8_decode('Aicrag Code Wise');
$Cedula = utf8_decode('12345678');
$especialidad = utf8_decode('Médico cirujano y partero');
$celular =utf8_decode('3387231239');

#Datos del paciente 
$nombre_paciente = utf8_decode('Cristiano Ronaldo Messi');
$fecha = date('d/m/Y');
$tratamiento = utf8_decode('-Se receto tomar paracetamol cada 12hrs durante 3 dias
- Tomar ibuprofeno por 2 dias cada 12(hrs');



#Creación del pdf

$pdf = new FPDF('L','mm',array(250,180)); #L es la orientación 
$pdf -> AddPage();
$pdf->SetLineWidth(0.5);
$pdf->SetFont('Arial','B',25);
$width = 50;    
$pdf->SetDrawColor(0, 0, 150); // Establecer el color del borde en azul
$pdf->SetTextColor(0, 0, 150); // Establecer el color del texto en azul
$width = $pdf->GetStringWidth($Doctor) +10; // Agregar un margen de 4 unidades a cada lado
$x = ($pdf->GetPageWidth() - $width) / 2;
$pdf->SetXY($x, 5); // Ajustar la coordenada Y según sea necesario
$pdf->Cell($width, 10,$Doctor, 1, 1, 'C', false, '', 1, '', 'LRTB');



#Agregamos el logo 
$pdf->Image('logo.png',5,3,30);
$pdf->Image('logo.png',210,3,30);


#Agregamos cedula 
$pdf->SetFont('Arial','','12');
$pos_y = $pdf->GetY();
$pdf ->SetXY(0,$pos_y);
$pdf->SetFont('helvetica', 'B', 12); // Definir la fuente en negrita, tamaño 12
$pdf->MultiCell(150, 10, 'CED.PROF.'.$Cedula, 0, 'C'); // Agregar el primer texto con posible salto de línea


#Especialidad
$pdf->SetXY(100, 15); // Ajustar las coordenadas para el segundo texto
$pdf->MultiCell(50, 10, $especialidad, 0, 'C'); // Agregar el segundo texto con posible salto de línea

#Celular
$pdf->SetXY(110, 15); // Ajustar las coordenadas para el tercer texto
$pdf->MultiCell(140, 10, 'Celular: '.$celular, 0, 'C'); // Agregar el tercer texto con posible salto de línea



#Nombre del paciente
$pdf->SetFont('Arial','B','12');
$pdf->SetXY(10, 40);
$pdf->Cell(0, 10, 'Nombre: ' . str_repeat('_', strlen($nombre_paciente)+2), 0, 1); // Agregar los guiones bajos
$pdf->SetFont('Arial','','12');
$pdf -> SetXY(30,40);
$pdf->Cell(0, 10, $nombre_paciente, 0, 1, 'B'); // Agregar el nombre en negrita

#Fecha
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(140, 40);
$pdf->Cell(140, 10, 'Fecha: ' . str_repeat('_', strlen($fecha)+2), 0, 1); // Agregar los guiones bajos
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(160, 40); // Mover el cursor a la posición correcta
$pdf->Cell(170, 10, $fecha, 0, 1, 'B'); // Agregar el nombre en negrita


#Definición de signos vitales etc....
$peso = "50 kg";
$Talla = "125 cm";
$IMC = "72";
$Edad = "22";
$FC = "313";
$FR = "123";
#Son falsos ehhhhhhh

#FC
$pdf -> SetFont('Arial','B','12');
$pdf->SetXY(10, 55);
$pdf->Cell(0, 10, 'FC: ' . str_repeat('_', strlen($FC)+7), 0, 1); // Agregar los guiones bajos
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(25, 55); // Mover el cursor a la posición correcta
$pdf->Cell(0, 10, $Edad, 0, 1, 'B'); // Agregar el nombre en negrita


#FR
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetXY(10, 62);
$pdf->Cell(0, 10, 'FR: ' . str_repeat('_', strlen($FR)+7), 0, 1); // Agregar los guiones bajos
$pdf->SetFont('Arial', '', 12);
$pdf->SetXY(25, 62); // Mover el cursor a la posición correcta
$pdf->Cell(0, 10, $FR, 0, 1, 'B'); // Agregar el nombre en negrita


    #PESO
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetXY(10, 69);
    $pdf->Cell(0, 10, 'Peso: ' . str_repeat('_', strlen($peso)+2), 0, 1); // Agregar los guiones bajos
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetXY(25, 69); // Mover el cursor a la posición correcta
    $pdf->Cell(0, 10, $peso, 0, 1, 'B'); // Agregar el nombre en negrita

    #Talla
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetXY(10, 76);
    $pdf->Cell(0, 10, 'Talla: ' . str_repeat('_', strlen($Talla)+2), 0, 1); // Agregar los guiones bajos
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetXY(25, 76); // Mover el cursor a la posición correcta
    $pdf->Cell(0, 10, $Talla, 0, 1, 'B'); // Agregar el nombre en negrita

    #IMC
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetXY(10, 83);
    $pdf->Cell(0, 10, 'IMC: ' . str_repeat('_', strlen($IMC)+7), 0, 1); // Agregar los guiones bajos
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetXY(25, 83); // Mover el cursor a la posición correcta
    $pdf->Cell(0, 10, $IMC, 0, 1, 'B'); // Agregar el nombre en negrita

    #EDAD
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->SetXY(10, 90);
    $pdf->Cell(0, 10, 'Edad: ' . str_repeat('_', strlen($Edad)+7), 0, 1); // Agregar los guiones bajos
    $pdf->SetFont('Arial', '', 12);
    $pdf->SetXY(25, 90); // Mover el cursor a la posición correcta
    $pdf->Cell(0, 10, $Edad, 0, 1, 'B'); // Agregar el nombre en negrita


    #Creación del tratamiento

    $pdf -> SetFont('Arial','B',12);
    $pdf -> SetXY(140,55);
    $pdf -> Cell(0,10,'Tratamiento',0,1);
    $pdf -> SetFont('Arial','',12);
    $pdf -> SetXY(60,70);
    $pdf->MultiCell(0, 10, $tratamiento, 1, 'C', false);

    #Medico
    $pdf -> SetFont('Arial', 'B',12);
    $pos_y = $pdf->GetY()+40;
    $pdf -> SetXY(150,$pos_y);
    $pdf->Cell(0, 10, str_repeat('_', strlen($Doctor)+7), 0, 1); // Agregar los guiones bajos

    $pdf->SetFont('Arial', '', 12);
    $pos_y = $pdf->GetY();
    $pdf->SetXY(165, $pos_y-10);
    $pdf->Cell(0, 10, $Doctor, 0, 1); // Agregar los guiones bajos

    $pdf->SetFont('Arial', 'B', 12);
    $pos_y = $pdf->GetY();
    $pdf->SetXY(160, $pos_y-5);
    $pdf->Cell(0, 10, 'Nombre y firma del medico', 0, 1); // Agregar los guiones bajos


    #Dirección
    $direccion = utf8_decode("Santiago Bernabeu Camp Nou");
    $pdf->SetFont('Arial', 'B', 10);
    $pos_y = $pdf->GetY();
    $pdf->SetXY(10, $pos_y-14);
    $pdf->Cell(0, 10, str_repeat('_', strlen($direccion)), 0, 1); // Agregar los guiones bajos

    $pdf->SetFont('Arial', '', 10);
    $pos_y = $pdf->GetY();
    $pdf->SetXY(10, $pos_y-12);
    $pdf->Cell(0, 10, $direccion, 0, 1); // Agregar los guiones bajos

    $pdf->SetFont('Arial', 'B', 12  );
    $pos_y = $pdf->GetY();
    $pdf->SetXY(30, $pos_y-4);
    $pdf->Cell(0, 10, 'Direccion', 0, 1); // Agregar los guiones bajos


    #CÓDIGO CREADO POR AICRAG CODE WISE

$pdf->Output(); #Visualizar el pdf
?>