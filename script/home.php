<?php 
    defined('CONTROL') or die('Acesso negado.'); 

    $api = new API();
    $countries = $api->get_all_countries();
?>

<pre>
    <?php print_r($countries); ?>
</pre>

<!-- <div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h3>Vamos consumir uma API com PHP puro?</h3>
        </div>
    </div>
</div> -->