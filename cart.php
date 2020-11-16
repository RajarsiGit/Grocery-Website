<?php
    require_once "db_controller.php";

    $db_handle = new DBController();

    for($i = 1; $i <= (count($_POST)-7)/6; $i++) {
        $q = intval($_POST["quantity_".strval($i)]);
        $r = intval($_POST["amount_".strval($i)]);
        $d = intval($_POST["discount_amount_".strval($i)]);
        $p = ($r*$q) - $d;
        $p_name = $_POST["item_name_".strval($i)];

        $query = "SELECT p_img_name FROM product_details WHERE p_name LIKE '".$p_name."' LIMIT 1;";

        $result =  $db_handle->runQuery($query);

        echo "<tr>
                <td class=\"invert\">".strval($i)."</td>
                <td class=\"invert-image\"><a href=\"/single\"><img src=\"".$result[0]['p_img_name']."\" alt=\" \" class=\"img-responsive\"></a></td>
                <td class=\"invert\">".strval($q)."</td>
                <td class=\"invert\">".$_POST["item_name_".strval($i)]."</td>
                <td class=\"invert\">$ ".number_format(strval($r), 2, '.', '')."</td>
                <td class=\"invert\">$ ".number_format(strval($d), 2, '.', '')."</td>
                <td class=\"invert\"><strong>$ ".number_format(strval($p), 2, '.', '')."</strong></td>
            </tr>";
    }
?>