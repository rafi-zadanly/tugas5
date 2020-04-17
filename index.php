<?php 

require 'vendor/autoload.php';

use Dompdf\Dompdf;

if (isset($_POST['submit'])) {
    $dompdf = new Dompdf();
    $dompdf->loadHtml($_POST['content']);
    $dompdf->setPaper('A4', 'potrait');
    $dompdf->render();
    $dompdf->stream('Report.pdf');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate File PDF</title>
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
    <form action="" method="post">
        <textarea name="content" class="ckeditor" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="Generate File">
    </form>
</body>
</html>
