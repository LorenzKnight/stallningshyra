<div class="form_frame" id="aparecer" style="display:<?php if (($totalRows_DatosProductSeleted > 0) && ($row_DatosProductSeleted['confirmed'] == 0)) echo "block"; ?>;">
    <div class="formulario" style="width: 400px;">
        <form class="form" action="reserve.php" method="post" name="formweeks" id="formweeks">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td valign="middle" align="center">
                        <h3><?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?></h3>
                    </td>
                </tr>
                <tr height="30">
                    <td valign="middle" align="center">
                        <?php 
                            $currentWeekNumber = date('W');
                            echo 'Denna är vecka ' . $currentWeekNumber;
                        ?>
                        </br>
                        <?php //echo $_SESSION['bkng_UserId'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="week_calender">
                            <div class="<?php if($currentWeekNumber < 1) { ?>
                                            <?php if (semanasInactiva(1)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 1)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(1) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana">V. 01</label>
                                <?php if ($currentWeekNumber < 1) {
                                        if (semanasInactiva(1)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 1)) { ?>
                                    <input type="checkbox" id="semana" name="semana[]" value="1" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } }?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 2) { ?>
                                            <?php if (semanasInactiva(2)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 2)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(2) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana2">V. 02</label>
                                <?php if ($currentWeekNumber < 2) {
                                        if (semanasInactiva(2)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 2)) { ?>
                                    <input type="checkbox" id="semana2" name="semana[]" value="2" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } }?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 3) { ?>
                                            <?php if (semanasInactiva(3)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 3)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(3) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana3">V. 03</label>
                                <?php if ($currentWeekNumber < 3) {
                                        if (semanasInactiva(3)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 3)) { ?>
                                    <input type="checkbox" id="semana3" name="semana[]" value="3" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } }?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 4) { ?>
                                            <?php if (semanasInactiva(4)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 4)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(4) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana4">V. 04</label>
                                <?php if ($currentWeekNumber < 4) {
                                        if (semanasInactiva(4)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 4)) { ?>
                                    <input type="checkbox" id="semana4" name="semana[]" value="4" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } }?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 5) { ?>
                                            <?php if (semanasInactiva(5)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 5)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(5) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana5">V. 05</label>
                                <?php if ($currentWeekNumber < 5) {
                                        if (semanasInactiva(5)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 5)) { ?>
                                    <input type="checkbox" id="semana5" name="semana[]" value="5" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 6) { ?>
                                            <?php if (semanasInactiva(6)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 6)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(6) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana6">V. 06</label>
                                <?php if ($currentWeekNumber < 6) {
                                        if (semanasInactiva(6)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 6)) { ?>
                                    <input type="checkbox" id="semana6" name="semana[]" value="6" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 7) { ?>
                                            <?php if (semanasInactiva(7)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 7)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(7) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana7">V. 07</label>
                                <?php if ($currentWeekNumber < 7) {
                                        if (semanasInactiva(7)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 7)) { ?>
                                    <input type="checkbox" id="semana7" name="semana[]" value="7" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 8) { ?>
                                            <?php if (semanasInactiva(8)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 8)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(8) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana8">V. 08</label>
                                <?php if ($currentWeekNumber < 8) {
                                        if (semanasInactiva(8)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 8)) { ?>
                                    <input type="checkbox" id="semana8" name="semana[]" value="8" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 9) { ?>
                                            <?php if (semanasInactiva(9)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 9)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(9) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana9">V. 09</label>
                                <?php if ($currentWeekNumber < 9) {
                                        if (semanasInactiva(9)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 9)) { ?>
                                    <input type="checkbox" id="semana9" name="semana[]" value="9" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 10) { ?>
                                            <?php if (semanasInactiva(10)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 10)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(10) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana10">V. 10</label>
                                <?php if ($currentWeekNumber < 10) {
                                        if (semanasInactiva(10)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 10)) { ?>
                                    <input type="checkbox" id="semana10" name="semana[]" value="10" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 11) { ?>
                                            <?php if (semanasInactiva(11)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 11)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(11) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana11">V. 11</label>
                                <?php if ($currentWeekNumber < 11) {
                                        if (semanasInactiva(11)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 11)) { ?>
                                    <input type="checkbox" id="semana11" name="semana[]" value="11" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 12) { ?>
                                            <?php if (semanasInactiva(12)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 12)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(12) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana12">V. 12</label>
                                <?php if ($currentWeekNumber < 12) {
                                        if (semanasInactiva(12)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 12)) { ?>
                                    <input type="checkbox" id="semana12" name="semana[]" value="12" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 13) { ?>
                                            <?php if (semanasInactiva(13)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 13)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(13) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana13">V. 13</label>
                                <?php if ($currentWeekNumber < 13) {
                                        if (semanasInactiva(13)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 13)) { ?>
                                    <input type="checkbox" id="semana13" name="semana[]" value="13" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 14) { ?>
                                            <?php if (semanasInactiva(14)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 14)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(14) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana14">V. 14</label>
                                <?php if ($currentWeekNumber < 14) {
                                        if (semanasInactiva(14)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 14)) { ?>
                                    <input type="checkbox" id="semana14" name="semana[]" value="14" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 15) { ?>
                                            <?php if (semanasInactiva(15)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 15)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(15) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana15">V. 15</label>
                                <?php if ($currentWeekNumber < 15) {
                                        if (semanasInactiva(15)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 15)) { ?>
                                    <input type="checkbox" id="semana15" name="semana[]" value="15" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 16) { ?>
                                            <?php if (semanasInactiva(16)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 16)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(16) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana16">V. 16</label>
                                <?php if ($currentWeekNumber < 16) {
                                        if (semanasInactiva(16)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 16)) { ?>
                                    <input type="checkbox" id="semana16" name="semana[]" value="16" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 17) { ?>
                                            <?php if (semanasInactiva(17)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 17)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(17) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana17">V. 17</label>
                                <?php if ($currentWeekNumber < 17) {
                                        if (semanasInactiva(17)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 17)) { ?>
                                    <input type="checkbox" id="semana17" name="semana[]" value="17" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 18) { ?>
                                            <?php if (semanasInactiva(18)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 18)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(18) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana18">V. 18</label>
                                <?php if ($currentWeekNumber < 18) {
                                        if (semanasInactiva(18)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 18)) { ?>
                                    <input type="checkbox" id="semana18" name="semana[]" value="18" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 19) { ?>
                                            <?php if (semanasInactiva(19)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 19)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(19) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana19">V. 19</label>
                                <?php if ($currentWeekNumber < 19) {
                                        if (semanasInactiva(19)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 19)) { ?>
                                    <input type="checkbox" id="semana19" name="semana[]" value="19" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 20) { ?>
                                            <?php if (semanasInactiva(20)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 20)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(20) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana20">V. 20</label>
                                <?php if ($currentWeekNumber < 20) {
                                        if (semanasInactiva(20)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 20)) { ?>
                                    <input type="checkbox" id="semana20" name="semana[]" value="20" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 21) { ?>
                                            <?php if (semanasInactiva(21)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 21)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(21) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana21">V. 21</label>
                                <?php if ($currentWeekNumber < 21) {
                                        if (semanasInactiva(21)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 21)) { ?>
                                    <input type="checkbox" id="semana21" name="semana[]" value="21" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 22) { ?>
                                            <?php if (semanasInactiva(22)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 22)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(22) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana22">V. 22</label>
                                <?php if ($currentWeekNumber < 22) {
                                        if (semanasInactiva(22)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 22)) { ?>
                                    <input type="checkbox" id="semana22" name="semana[]" value="22" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 23) { ?>
                                            <?php if (semanasInactiva(23)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 23)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(23) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana23">V. 23</label>
                                <?php if ($currentWeekNumber < 23) {
                                        if (semanasInactiva(23)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 23)) { ?>
                                    <input type="checkbox" id="semana23" name="semana[]" value="23" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 24) { ?>
                                            <?php if (semanasInactiva(24)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 24)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(24) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana24">V. 24</label>
                                <?php if ($currentWeekNumber < 24) {
                                        if (semanasInactiva(24)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 24)) { ?>
                                    <input type="checkbox" id="semana24" name="semana[]" value="24" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 25) { ?>
                                            <?php if (semanasInactiva(25)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 25)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(25) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana25">V. 25</label>
                                <?php if ($currentWeekNumber < 25) {
                                        if (semanasInactiva(25)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 25)) { ?>
                                    <input type="checkbox" id="semana25" name="semana[]" value="25" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 26) { ?>
                                            <?php if (semanasInactiva(26)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 26)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(26) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana26">V. 26</label>
                                <?php if ($currentWeekNumber < 26) {
                                        if (semanasInactiva(26)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 26)) { ?>
                                    <input type="checkbox" id="semana26" name="semana[]" value="26" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 27) { ?>
                                            <?php if (semanasInactiva(27)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 27)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(27) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana27">V. 27</label>
                                <?php if ($currentWeekNumber < 27) {
                                        if (semanasInactiva(27)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 27)) { ?>
                                    <input type="checkbox" id="semana27" name="semana[]" value="27" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 28) { ?>
                                            <?php if (semanasInactiva(28)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 28)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(28) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana28">V. 28</label>
                                <?php if ($currentWeekNumber < 28) {
                                        if (semanasInactiva(28)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 28)) { ?>
                                    <input type="checkbox" id="semana28" name="semana[]" value="28" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 29) { ?>
                                            <?php if (semanasInactiva(29)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 29)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(29) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana29">V. 29</label>
                                <?php if ($currentWeekNumber < 29) {
                                        if (semanasInactiva(29)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 29)) { ?>
                                    <input type="checkbox" id="semana29" name="semana[]" value="29" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 30) { ?>
                                            <?php if (semanasInactiva(30)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 30)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(30) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana30">V. 30</label>
                                <?php if ($currentWeekNumber < 30) {
                                        if (semanasInactiva(30)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 30)) { ?>
                                    <input type="checkbox" id="semana30" name="semana[]" value="30" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 31) { ?>
                                            <?php if (semanasInactiva(31)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 31)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(31) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana31">V. 31</label>
                                <?php if ($currentWeekNumber < 31) {
                                        if (semanasInactiva(31)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 31)) { ?>
                                    <input type="checkbox" id="semana31" name="semana[]" value="31" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 32) { ?>
                                            <?php if (semanasInactiva(32)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 32)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(32) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana32">V. 32</label>
                                <?php if ($currentWeekNumber < 32) {
                                        if (semanasInactiva(32)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 32)) { ?>
                                    <input type="checkbox" id="semana32" name="semana[]" value="32" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 33) { ?>
                                            <?php if (semanasInactiva(33)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 33)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(33) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana33">V. 33</label>
                                <?php if ($currentWeekNumber < 33) {
                                        if (semanasInactiva(33)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 33)) { ?>
                                    <input type="checkbox" id="semana33" name="semana[]" value="33" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 34) { ?>
                                            <?php if (semanasInactiva(34)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 34)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(34) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana34">V. 34</label>
                                <?php if ($currentWeekNumber < 34) {
                                        if (semanasInactiva(34)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 34)) { ?>
                                    <input type="checkbox" id="semana34" name="semana[]" value="34" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 35) { ?>
                                            <?php if (semanasInactiva(35)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 35)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(35) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana35">V. 35</label>
                                <?php if ($currentWeekNumber < 35) {
                                        if (semanasInactiva(35)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 35)) { ?>
                                    <input type="checkbox" id="semana35" name="semana[]" value="35" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 36) { ?>
                                            <?php if (semanasInactiva(36)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 36)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(36) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana36">V. 36</label>
                                <?php if ($currentWeekNumber < 36) {
                                        if (semanasInactiva(36)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 36)) { ?>
                                    <input type="checkbox" id="semana36" name="semana[]" value="36" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 37) { ?>
                                            <?php if (semanasInactiva(37)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 37)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(37) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana37">V. 37</label>
                                <?php if ($currentWeekNumber < 37) {
                                        if (semanasInactiva(37)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 37)) { ?>
                                    <input type="checkbox" id="semana37" name="semana[]" value="37" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 38) { ?>
                                            <?php if (semanasInactiva(38)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 38)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(38) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana38">V. 38</label>
                                <?php if ($currentWeekNumber < 38) {
                                        if (semanasInactiva(38)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 38)) { ?>
                                    <input type="checkbox" id="semana38" name="semana[]" value="38" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 39) { ?>
                                            <?php if (semanasInactiva(39)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 39)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(39) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana39">V. 39</label>
                                <?php if ($currentWeekNumber < 39) {
                                        if (semanasInactiva(39)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 39)) { ?>
                                    <input type="checkbox" id="semana39" name="semana[]" value="39" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 40) { ?>
                                            <?php if (semanasInactiva(40)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 40)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(40) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana40">V. 40</label>
                                <?php if ($currentWeekNumber < 40) {
                                        if (semanasInactiva(40)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 40)) { ?>
                                    <input type="checkbox" id="semana40" name="semana[]" value="40" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 41) { ?>
                                            <?php if (semanasInactiva(41)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 41)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(41) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana41">V. 41</label>
                                <?php if ($currentWeekNumber < 41) {
                                        if (semanasInactiva(41)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 41)) { ?>
                                    <input type="checkbox" id="semana41" name="semana[]" value="41" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 42) { ?>
                                            <?php if (semanasInactiva(42)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 42)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(42) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana42">V. 42</label>
                                <?php if ($currentWeekNumber < 42) {
                                        if (semanasInactiva(42)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 42)) { ?>
                                    <input type="checkbox" id="semana42" name="semana[]" value="42" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 43) { ?>
                                            <?php if (semanasInactiva(43)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 43)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(43) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana43">V. 43</label>
                                <?php if ($currentWeekNumber < 43) {
                                        if (semanasInactiva(43)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 43)) { ?>
                                    <input type="checkbox" id="semana43" name="semana[]" value="43" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 44) { ?>
                                            <?php if (semanasInactiva(44)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 44)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(44) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana44">V. 44</label>
                                <?php if ($currentWeekNumber < 44) {
                                        if (semanasInactiva(44)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 44)) { ?>
                                    <input type="checkbox" id="semana44" name="semana[]" value="44" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 45) { ?>
                                            <?php if (semanasInactiva(45)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 45)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(45) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana45">V. 45</label>
                                <?php if ($currentWeekNumber < 45) {
                                        if (semanasInactiva(45)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 45)) { ?>
                                    <input type="checkbox" id="semana45" name="semana[]" value="45" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 46) { ?>
                                            <?php if (semanasInactiva(46)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 46)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(46) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana46">V. 46</label>
                                <?php if ($currentWeekNumber < 46) {
                                        if (semanasInactiva(46)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 46)) { ?>
                                    <input type="checkbox" id="semana46" name="semana[]" value="46" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 47) { ?>
                                            <?php if (semanasInactiva(47)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 47)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(47) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana47">V. 47</label>
                                <?php if ($currentWeekNumber < 47) {
                                        if (semanasInactiva(47)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 47)) { ?>
                                    <input type="checkbox" id="semana47" name="semana[]" value="47" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 48) { ?>
                                            <?php if (semanasInactiva(48)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 48)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(48) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana48">V. 48</label>
                                <?php if ($currentWeekNumber < 48) {
                                        if (semanasInactiva(48)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 48)) { ?>
                                    <input type="checkbox" id="semana48" name="semana[]" value="48" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 49) { ?>
                                            <?php if (semanasInactiva(49)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 49)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(49) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana49">V. 49</label>
                                <?php if ($currentWeekNumber < 49) {
                                        if (semanasInactiva(49)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 49)) { ?>
                                    <input type="checkbox" id="semana49" name="semana[]" value="49" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 50) { ?>
                                            <?php if (semanasInactiva(50)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 50)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(50) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana50">V. 50</label>
                                <?php if ($currentWeekNumber < 50) {
                                        if (semanasInactiva(50)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 50)) { ?>
                                    <input type="checkbox" id="semana50" name="semana[]" value="50" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 51) { ?>
                                            <?php if (semanasInactiva(51)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 51)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(51) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana51">V. 51</label>
                                <?php if ($currentWeekNumber < 51) {
                                        if (semanasInactiva(51)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 51)) { ?>
                                    <input type="checkbox" id="semana51" name="semana[]" value="51" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>

                            <div class="<?php if($currentWeekNumber < 52) { ?>
                                            <?php if (semanasInactiva(52)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 52)) { ?>
                                                        week_obj
                                                    <?php } else { ?>
                                                        week_obj_none
                                                    <?php } 
                                            } else { ?> 
                                                    week_obj_none 
                                            <?php } ?>
                                        <?php } else { ?> 
                                            week_obj_none 
                                        <?php } ?>">
                                <label <?php if (ObtenerPrecioSemana(52) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana52">V. 52</label>
                                <?php if ($currentWeekNumber < 52) {
                                        if (semanasInactiva(52)) { 
                                            if (semanasCojidas($row_DatosProductSeleted['product'], 52)) { ?>
                                    <input type="checkbox" id="semana52" name="semana[]" value="52" class="visually-hidden">
                                    <div class="control-me"></div>
                                <?php } } } ?>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr height="20">
                    <td></td>
                </tr>
                <tr height="60">
                    <td valign="middle" align="center" style="border-top:1px solid #F00;">
                        <a href="cart_delete.php?carrieOff=<?php echo $row_DatosProductSeleted['product'];?>"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button_bok" value="Välja veckorna" />
                    </td>
                </tr>
            </table>
            <input type="hidden"  name="id_product" id="id_product" value="<?php echo $row_DatosProductSeleted['product'];?>"/>
            <input type="hidden" name="id_client" id="id_client" value="<?php echo $_SESSION['bkng_UserId']; ?>"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formweeks" />
        </form>
    </div>
</div>