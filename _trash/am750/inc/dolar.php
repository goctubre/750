<b class="is-hidden-mobile"> Dólar </b>
<?php
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //curl_setopt($ch, CURLOPT_URL, "https://api-dolar-argentina-2.herokuapp.com/api/nacion");
    curl_setopt($ch, CURLOPT_URL, "https://api-dolar-argentina.herokuapp.com/api/nacion");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);

    $res = json_decode($res, true);
    echo "BNA: $".$res['compra']." / $".$res['venta'];
    curl_close($ch); 
?>

<?php
    $db = curl_init(); 
    curl_setopt($db, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //curl_setopt($db, CURLOPT_URL, "https://api-dolar-argentina-2.herokuapp.com/api/dolarblue");
    curl_setopt($db, CURLOPT_URL, "https://api-dolar-argentina.herokuapp.com/api/dolarblue");
    curl_setopt($db, CURLOPT_RETURNTRANSFER, true);
    $resdb = curl_exec($db);

    $resdb = json_decode($resdb, true);
    echo "Blue: $".$resdb['compra']." / $".$resdb['venta'];
    curl_close($db); 
?> 