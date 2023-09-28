<?php

use Dompdf\Dompdf;

require_once 'dompdf/autoload.inc.php';

$html = '
<h1 style="color:blue;">Olá Dompdf!</h1>
<div style="display:flex;justify-content:space-between;">
<div>DIV1</div>
<div>DIV2</div>

</div>
';

$dompdf = new Dompdf();

$dompdf->loadHtml($html);

$dompdf->set_option('defaultFont', 'sans');

$dompdf->setPaper('A4','portrait');

$dompdf->render();

$dompdf->stream();