<?php
#THIS IS A VERY VERY QUICK AND DIRTY METHOD OF DOING A CURL CALL TO LOCALHOST FOR GETBLOCKHASH

$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);

$op = $_GET["operation"];
$num = $_GET["num"];

    if ($op == "getblockhash" && $num > 0 && is_numeric($num) && isset($_GET["operation"]) && isset($_GET["num"])) {
        $com = "./bitcoin-cli " . $op . " " . $num;
        $result = "curl --data-binary '{\"jsonrpc\":\"1.0\",\"id\":\"curltext\",\"method\":\"" . urlencode($op) . "\",\"params\":[" . urlencode($num) . "]}' -H 'content-type:text/plain;' http://a:a@127.0.0.1:8332/";
        $a = json_decode(shell_exec($result),true);
        echo "result: " . $a['result'];
    }
    else{
        echo $op;
        echo $num;
        echo "Error";}
?>
