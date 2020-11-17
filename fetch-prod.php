<?php
    require_once "db_controller.php";

    $db_handle = new DBController();

    $query = "SELECT * FROM product_details WHERE p_type LIKE '".$_SESSION['TYPE']."' LIMIT ".$_SESSION['LIMIT']." OFFSET ".$_SESSION['OFFSET'].";";
    
    $result =  $db_handle->runQuery($query);

    $_SESSION['TYPE'] = '';
    $_SESSION['LIMIT'] = '0';
    $_SESSION['OFFSET'] = '0';

    if($result) {
        for($i=0; $i<count($result); $i++) {
            $p_name = strval($result[$i]["p_name"]);
            $p_amt = strval($result[$i]["p_new_rate"]);
            $p_o_amt = strval($result[$i]["p_old_rate"]);
            $p_img = strval($result[$i]["p_img_name"]);
            $of_tg = intval($result[$i]["offer_tag"]);
            $of_tg_img = "";
            $d_amt = number_format(doubleval($p_o_amt) - doubleval($p_amt), 2, '.', '');

            if($of_tg == 0) {
                $of_tg_img = "<div class=\"agile_top_brand_left_grid_pos\"><img src=\"images/offer.png\" alt=\" \" class=\"img-responsive\" /></div>";
            }
            else {
                $of_tg_img = "<div class=\"tag\"><img src=\"images/tag.png\" alt=\" \" class=\"img-responsive\" /></div>";
            }
            
            echo "<div class=\"col-md-3 w3ls_w3l_banner_left\">
                <div class=\"hover14 column\">
                    <div class=\"agile_top_brand_left_grid w3l_agile_top_brand_left_grid\">
                        ".$of_tg_img."
                        <div class=\"agile_top_brand_left_grid1\">
                            <figure>
                                <div class=\"snipcart-item block\">
                                    <div class=\"snipcart-thumb\">
                                        <a href=\"/single\"><img src=\"".$p_img."\" alt=\" \" class=\"img-responsive\" /></a>
                                        <p>".$p_name."</p>
                                        <h4>$".$p_amt." <span>$".$p_o_amt."</span></h4>
                                    </div>
                                    <div class=\"snipcart-details\">
                                        <form id=\"cart-1\" action=\"#\" method=\"post\">
                                            <fieldset>
                                                <input type=\"hidden\" name=\"cmd\" value=\"_cart\" />
                                                <input type=\"hidden\" name=\"add\" value=\"1\" />
                                                <input type=\"hidden\" name=\"business\" value=\" \" />
                                                <input type=\"hidden\" name=\"item_name\" value=\"".$p_name."\" />
                                                <input type=\"hidden\" name=\"amount\" value=\"".$p_amt."\" />
                                                <input type=\"hidden\" name=\"discount_amount\" value=\"".$d_amt."\" />
                                                <input type=\"hidden\" name=\"currency_code\" value=\"INR\" />
                                                <input type=\"hidden\" name=\"return\" value=\" \" />
                                                <input type=\"hidden\" name=\"cancel_return\" value=\" \" />
                                                <input type=\"submit\" name=\"submit\" value=\"Add to cart\" class=\"button\" />
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>";
        }
    }
?>