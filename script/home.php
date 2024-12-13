<?php
defined('CONTROL') or die('Acesso negado.');

$api = new API();
$api->get_all_countries();
print_r($api);
?>

<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1>Vamos consumir uma API com PHP puro?</h1>
            <h3>Por exemplo, digite ao final da URL: '/brazil'</h3>
        </div>
    </div>
</div>