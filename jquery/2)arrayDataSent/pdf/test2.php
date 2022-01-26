
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            
        }
    </style>
</head>
<body>

    <?php
    
// echo count($info);
// for($i = 0; $i < count($info); $i++){
//     echo $info[$i]['firstName'].' '.$info[$i]['lastName'].' '.$info[$i]['age'];  
// }

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$document = new Dompdf();

$info = $_POST['info'];

$output = "";
$output ="<p  >Grade Sheet</p>";
$output .="<table class='graftTable'  border='1' id='dataTable'>
               
        <tr>
            <th>Name</th>
            <th>Last</th>
            <th>Age</th>
           
    
        </tr>";

        for($i = 0; $i < count($info); $i++){
          $output .= "<tr><td>{$info[$i]['firstName'] }</td>
          <td>{$info[$i]['lastName'] }</td>
          <td>{$info[$i]['age'] }</td>";
         $output .="</tr>";
        }

        $output .=" </table>";
            


$document->loadHtml($output);
$document->setPaper('A4', 'landscape');
$document->render();
$document->stream("mahmudhosssain", array("Attachment"=>0));




    ?>
    
</body>
</html>

