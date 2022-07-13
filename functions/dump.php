<?php

function dump($test) {
    echo "<pre>";
    var_dump($test);
    echo "</pre>";
}

function debug($tab)
{
	echo '<pre style="height:100px;overflow-y: scroll;font-size:.5rem;padding: .6rem; font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
        print_r($tab);
        echo '</pre>';
}
