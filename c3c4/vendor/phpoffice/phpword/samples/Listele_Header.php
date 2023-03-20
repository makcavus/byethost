<script language="JavaScript" src="../../../../toplama.js" type="text/javascript">
</script>
<?php
//include("../assets/sablon/form013/header.php");
//include("../assets/sablon/form013/sidebar.php");
require_once __DIR__ . '/../bootstrap.php';

use PhpOffice\PhpWord\Settings;

date_default_timezone_set('Europe/Istanbul');
error_reporting(E_ALL);
define('CLI', (PHP_SAPI == 'cli') ? true : false);
define('EOL', CLI ? PHP_EOL : '<br />');
define('SCRIPT_FILENAME', basename($_SERVER['SCRIPT_FILENAME'], '.php'));
define('IS_INDEX', SCRIPT_FILENAME == 'index');

Settings::loadConfig();

$dompdfPath = $vendorDirPath . '/dompdf/dompdf';
if (file_exists($dompdfPath)) {
    define('DOMPDF_ENABLE_AUTOLOAD', false);
    Settings::setPdfRenderer(Settings::PDF_RENDERER_DOMPDF, $vendorDirPath . '/dompdf/dompdf');
}

// Set writers
$writers = ['Word2007' => 'docx', 'ODText' => 'odt', 'RTF' => 'rtf', 'HTML' => 'html', 'PDF' => 'pdf'];

// Set PDF renderer
if (null === Settings::getPdfRendererPath()) {
    $writers['PDF'] = null;
}

// Turn output escaping on
Settings::setOutputEscapingEnabled(true);

// Return to the caller script when runs by CLI
if (CLI) {
    return;
}


// Set titles and names
$pageHeading = str_replace('_', ' ', 'LISTE RAPOR');
$pageTitle = IS_INDEX ? 'Welcome to ' : "{$pageHeading} - ";
$pageTitle .= 'PHPWord';
$pageHeading = IS_INDEX ? '' : "<h1>{$pageHeading}</h1>";

// Populate samples
$files = '';
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if (preg_match('/^LISTE_\d+_/', $file)) {
            $name = str_replace('_', ' ', preg_replace('/(LISTE_|\.php)/', '', $file));
            $files .= "<li><a href='{$file}'>{$name}</a></li>";
        }
    }
    closedir($handle);
}

/**
 * Write documents
 *
 * @param \PhpOffice\PhpWord\PhpWord $phpWord
 * @param string $filename
 * @param array $writers
 *
 * @return string
 */
function write($phpWord, $filename, $writers)
{
    $result = '';

    // Write documents
    foreach ($writers as $format => $extension) {
        $result .= date('H:i:s') . " .{$format}."."formatında oluşturuldu";
        if (null !== $extension) {
            $targetFile = __DIR__ . "/results/LISTE_RAPOR.{$extension}";
            $phpWord->save($targetFile, $format);
            $phpWord->save($targetFile,  'Word2007', true);
        } else {
            $result .= ' ... HAYIR!';
        }
        $result .= EOL;
    }

    $result .= getEndingNotes($writers, $filename);

    return $result;
}

/**
 * Get ending notes
 *
 * @param array $writers
 *
 * @return string
 */
function getEndingNotes($writers)
{
    $result = '';

    // Do not show execution time for index
    if (!IS_INDEX) {
        $result .= date('H:i:s') ." "."Rapor Yazıldı"." ". EOL;
        $result .= date('H:i:s') ." "."Kullanılan hafıza:"." " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB" . EOL;
    }

    // Return
    if (CLI) {
        $result .= 'The results are stored in the "results" subdirectory.' . EOL;
    } else {
        if (!IS_INDEX) {
            $types = array_values($writers);
            $result .= '<p>&nbsp;</p>';
            $result .= '<p>Format: ';
            foreach ($types as $type) {
                if (!is_null($type)) {
                    $resultFile = 'results/' . 'LISTE_RAPOR' . '.' . $type;
                    if (file_exists($resultFile)) {
                        $result .= "<a href='{$resultFile}' class='btn btn-primary'>{$type}</a> ";
                    }
                }
            }
            $result .= '</p>';
        }
    }

    return $result;
}
?>
<script language="JavaScript" src="../../../../toplama.js" type="text/javascript">
</script>

<div class="container mt-5">

    <div class="container-fluid">
        
        
  
</div>

<?php echo $pageHeading; ?>
