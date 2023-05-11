<?php
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://farmasi.mimoapps.xyz/mimoqss2auyqD1EAlkgZCOhiffSsFl6QqAEIGtM',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl); // bentuk JSON
//echo $response;
curl_close($curl);
$response_array = json_decode($response, true); //Mengubah JSON ke Array
$onscreen = '<table class="table" width="100%">
                <thead>
                    <th>CODE</th>
                    <th>BARCODE</th>
                    <th>GCODE</th>
                    <th>NAME</th>
                    <th>SELL</th>
                </thead>
            ';
foreach($response_array as $resp){
    $onscreen .= '<tr>
                    <td>'.$resp['code'].'</td>
                    <td>'.$resp['barcode'].'</td>
                    <td>'.$resp['gcode'].'</td>
                    <td>'.$resp['name'].'</td>
                    <td>'.$resp['sell'].'</td>
                </tr>';
}
$onscreen .= '</table>';
echo $onscreen;
?>