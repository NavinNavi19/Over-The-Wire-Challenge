<?php
$origData = base64_decode(
    "ClVLIh4ASCsCBE8lAxMacFMZV2hdVVotEhhUJQNVAmhSEV4sFxFeaAw%3D");
$key = '{"showpassword":"no","bgcolor":"#ffffff"}';
$outText = "";
for ($i = 0; $i < strlen( $origData ); $i++) {
    $outText .= $origData[$i] ^ $key[$i % strlen($key)];
}
echo $outText;
?>
