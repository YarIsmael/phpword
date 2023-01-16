<?php
#llamado a lirbreria
require_once "vendor/autoload.php";
#sentencia para usar phpword
use PhpOffice\PhpWord\templateProcessor; 
#esto lee la plantilla

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
$apellido = (isset($_POST['apellido'])) ? $_POST['apellido'] : null;
$documento = (isset($_POST['documento'])) ? $_POST['documento'] : null;
$documento_tipo = (isset($_POST['documento_tipo'])) ? $_POST['documento_tipo'] : null;
$programa_tipo = (isset($_POST['programa_tipo'])) ? $_POST['programa_tipo'] : null;
$programa_ficha = (isset($_POST['programa_ficha'])) ? $_POST['programa_ficha'] : null;
$programa = (isset($_POST['programa'])) ? $_POST['programa'] : null;

$filename = "desecion.docx";
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessing‌​ml.document");
header('Content-Disposition: attachment; filename="' . $filename. '"');
$Templateword = new TemplateProcessor('plantilla.docx');
    #estoy remplasa  el contenido de la plantilla
    $Templateword->setValue('nombre', $nombre);
    $Templateword->setValue('apellido1', $apellido);
    $Templateword->setValue('apellido2', $apellido);
    $Templateword->setValue('documento', $documento);
    $Templateword->setValue('tipo_documento', $documento_tipo);
    $Templateword->setValue('programa', $programa);
    $Templateword->setValue('tipo', $programa_tipo);
    $Templateword->setValue('ficha', $programa_ficha);
    $Templateword->setValue('competencia', "1,2,3,4" );
    $Templateword->setValue('observaciones', "NIMGUNA");
    $Templateword->setValue('año', "2022");
    $Templateword->setValue('mes', "12");
    $Templateword->setValue('dia', "15");

#esto se encarga de descargar el documento
$Templateword->saveAs("php://output");


