<?php
    $t = 15;
    for($i = 1; $i <= (count($_POST)-7)/6; $i++) {
        $q = intval($_POST["quantity_".strval($i)]);
        $r = intval($_POST["amount_".strval($i)]);
        $d = intval($_POST["discount_amount_".strval($i)]);
        $p = ($r*$q) - $d;
        $t += $p;
        echo "<li>".$_POST["item_name_".strval($i)]."<span>$".number_format(strval($p), 2, '.', '')." </span></li>";
    }
    echo "<li>Total Service Charges<span>$15.00</span></li>";
    echo "<li>Total<span>$".number_format($t, 2, '.', '')."</span></li>"
?>