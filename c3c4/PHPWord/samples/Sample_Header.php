<script language="JavaScript" src="../../toplama.js" type="text/javascript">
</script>
<?php
require_once __DIR__ . '/../src/PhpWord/Autoloader.php';
function trsuz($str){ $str=mb_convert_encoding($str, "utf-8","iso-8859-9");  return $str;   } 

date_default_timezone_set('UTC');

/**
 * Header file
 */
use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

error_reporting(E_ALL);
define('CLI', (PHP_SAPI == 'cli') ? true : false);
define('EOL', CLI ? PHP_EOL : '<br />');
define('SCRIPT_FILENAME', basename($_SERVER['SCRIPT_FILENAME'], '.php'));
define('IS_INDEX', SCRIPT_FILENAME == 'index');

Autoloader::register();
Settings::loadConfig();

// Set writers
$writers = array('Word2007' => 'docx', 'ODText' => 'odt', 'RTF' => 'rtf', 'HTML' => 'html', 'PDF' => 'pdf');

// Set PDF renderer
if (null === Settings::getPdfRendererPath()) {
    $writers['PDF'] = null;
}

// Return to the caller script when runs by CLI
if (CLI) {
    return;
}

// Set titles and names
$pageHeading = str_replace('_', ' ', 'AGE RAPORU');
$pageTitle = IS_INDEX ? 'Welcome to ' : "{$pageHeading} - ";
$pageTitle .= 'PHPWord';
$pageHeading = IS_INDEX ? '' : "<h1>{$pageHeading}</h1>";

// Populate samples
$files = '';
if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if (preg_match('/^AGE_\d+_/', $file)) {
            $name = str_replace('_', ' ', preg_replace('/(AGE_|\.php)/', '', $file));
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
        $result .= date('H:i:s') . " .{$format}.".iconv("utf-8","iso-8859-9",trsuz("formatında oluşturuldu"));
        if (null !== $extension) {
            $targetFile = __DIR__ . "/results/AGE_RAPORU.{$extension}";
            $phpWord->save($targetFile, $format);
        } else {
            $result .= ' ... HAYIR!';
        }
        $result .= EOL;
    }

    $result .= getEndingNotes($writers);

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
        $result .= date('H:i:s') ." ".iconv("utf-8","iso-8859-9",trsuz("Rapor Yazıldı"))." ". EOL;
        $result .= date('H:i:s') ." ".iconv("utf-8","iso-8859-9",trsuz("Kullanılan hafıza:"))." " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB" . EOL;
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
                    $resultFile = 'results/' . 'AGE_RAPORU' . '.' . $type;
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
<script language="JavaScript" src="toplama.js" type="text/javascript">
</script>
<title><?php echo $pageTitle; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="bootstrap/css/font-awesome.min.css" />
<link rel="stylesheet" href="bootstrap/css/phpword.css" />
</head>
<body>
<div class="container">
<div class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            
        </div>
        <div class="navbar-collapse collapse">
<table>
<th class="style6" width="3%"align="left" bordercolor="yellow" bgcolor="#FFCC00" colspan="5"><a href="../../frm023kayit.php"><img src="iptal.PNG"></a></th>
</table>  
        </div>
    </div>
</div>

<?php echo $pageHeading; ?>
