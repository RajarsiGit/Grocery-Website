<?php
    for($i = 1; $i <= (count($_POST)-7)/6; $i++) {
        $q = intval($_POST["quantity_".strval($i)]);
        $r = intval($_POST["amount_".strval($i)]);
        $d = intval($_POST["discount_amount_".strval($i)]);
        $p = ($r*$q) - $d;
        echo "<tr>
                <td class=\"invert\">".strval($i)."</td>
                <td class=\"invert-image\"><a href=\"/single\"><img src=\"images/2.png\" alt=\" \" class=\"img-responsive\"></a></td>
                <td class=\"invert\">".strval($q)."</td>
                <td class=\"invert\">".$_POST["item_name_".strval($i)]."</td>
                <td class=\"invert\">$ ".strval($r)."</td>
                <td class=\"invert\">$ ".strval($d)."</td>
                <td class=\"invert\">$ ".strval($p)."</td>
            </tr>";
    }
?>