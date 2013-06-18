<?php 

function get_loja($get) {

    $lojas = array(
        'loja1' => 'http://livedemo00.template-help.com/magento_42315/',
        'loja2' => 'http://livedemo00.template-help.com/magento_41763/',
        'loja3' => 'http://wordpress.diamond.itembridge.com/',
    );
    return $lojas['loja'.$get];
    
}