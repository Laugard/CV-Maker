<?php
global $pdo;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

require_once dirname(__DIR__) . '/config/database.php';
require_once dirname(__DIR__) . '/models/Cv.php';
require_once dirname(__DIR__) . '/vendor/autoload.php';

use Dompdf\Dompdf;

$cvModel = new Cv($pdo);

if (isset($_POST['id'])) {
    $cv = $cvModel->getById($_POST['id'], $_SESSION['user_id']);
} else {
    $cv = $_POST;
    $cvModel->save($cv, $_SESSION['user_id']);
}

if (!isset($cv)) {
    die("No CV data found.");
}

$template = isset($cv['template']) ? $cv['template'] : 'classic';
$templatePath = dirname(__DIR__) . "/views/pdf_templates/{$template}.php";

if (!file_exists($templatePath)) {
    die("Template not found.");
}

ob_start();
require $templatePath;
$html = ob_get_clean();

$pdf = new Dompdf();
$pdf->loadHtml($html);
$pdf->setPaper('A4', 'portrait');
$pdf->render();
$pdf->stream("cv.pdf", ["Attachment" => true]);
