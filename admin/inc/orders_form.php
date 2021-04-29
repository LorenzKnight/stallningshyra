<script>
    function asegurar()
    {
            rc = confirm("Är du säkert på den här ändring?");
            return rc;
    }
</script>
<?php if($_GET["new"]):?>
<div class="subform_cont1">
    <form action="orders.php" method="post" name="formrequest" id="formrequest">
        <table class="formulario" border="0" cellspacing="0" cellpadding="0">
            <tr height="30">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding:0;">
                    
                </td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 20px 10px 0;"><input class="textf" type="text" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 20px 10px 0;"><input class="textf" type="text" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="email" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" minlength="10" maxlength="10" placeholder="Ditt Personnummer (10 siffror)" name="personal_number" id="personal_number" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" valign="middle" align="center"><input class="textf" type="text" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
            </tr>
            <tr height="60">
                <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
            </tr>
            <tr height="80">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="orders.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input style="padding: 20px 65px;" type="submit" class="button" value="Nästa" />
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    
                </td>
            </tr>
            <input type="hidden" name="via" id="via" value="<?php echo $_SESSION['std_UserId']; ?>"/>
            <input type="hidden" name="password" id="password" value="newstudent246"/>
            <input type="hidden" name="agree" id="agree" value="yes"/>
            <input type="hidden" name="status" id="status" value="Active"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formrequest" />
        </table>
    </form>
</div>
<?php endif ?>

<?php if($_GET["newcompl"]):?>
    <?php $studentadmin = $row_DatosInsc['id_client'];?>   
    <div class="subform_cont1">
        <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
            <tr height="50">
                <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                    <?php echo ObtenerNombreCliente($studentadmin);?> <?php echo ObtenerApellidoCliente($studentadmin);?>
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                Scrolla i kurs listan för att välja dina kurser.
                </td>
            </tr>
            <tr height="5">
            </tr> 
            <tr>
                <td colspan="2" valign="middle" align="center">
                    <div class="pushcarts">
                        <div class="class1">
                            <p>Pushcart List</p>
                            <div class="lista_c">
                            <?php
                                if ($totalRows_DatosProduct > 0) {
                                do { ?>
                                <?php //if(productosRestantes($row_DatosInsc['id_product'], $row_DatosCourse['id_course'])) { ?>
                                <div style="width:100%; height:100px; object-fit: cover; overflow: hidden;">
                                    <a style="font-size: 11px;" href="cart_add.php?productID=<?php echo $row_DatosProduct['id_product'];?>">
                                        <div style="width:30%; height:100px; margin:10px 0; text-align:left; float:left; background-color: #CCC;">
                                            <img src='<?php if ($row_DatosProduct['image'] != "") { ?> ../img/images/<?php echo $row_DatosProduct['image'];?> <?php } else { ?>  ../img/sys/not_img.png <?php } ?>' alt="" id="" style="margin:3px 0;" width="100%">
                                        </div>
                                        <div style="width:46%; height:100px; margin:10px 0; padding:0 2%; text-align:left; float:left; background-color: #CCC;">
                                            <h2><?php echo $row_DatosProduct['name'];?></h2>
                                        </div>
                                        <div style="width:20%; height:100px; margin:10px 0; color:green; text-align:center; float:left; background-color: #CCC;">
                                            <button class="<?php echo artbtn(UserAppearance($_SESSION['std_UserId']));?>">( + )</button>
                                        </div>
                                    </a>
                                </div>
                                <?php //} ?>
                                <?php } while ($row_DatosProduct = mysqli_fetch_assoc($DatosProduct));
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr height="85">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a>
                </td>
            </tr>
            <tr height="3">
            </tr>
        </table>
    </div>
<?php endif ?>


<?php if($_GET["newcompl2"]):?>
<style>
    /*/////////////////////////////////check-box style/////////////////////////////////////*/
	.week_calender {
		width: 400px;
		height: 350px;
		/* background-color: #9d9d9e; */
	}
	.week_obj {
		width: 48px;
		height: 48px;
		background-color: orange;
		margin: 1px;
		border-radius: ;
		text-align: left;
		float: left;
	}
	.week_obj_none {
		width: 48px;
		height: 48px;
		background-color: #999;
		margin: 1px;
		border-radius: ;
		text-align: left;
		float: left;
	}
	
	.control-me::after {
		background-color: #F0F0F0;
		padding: 24px;
	
		position: absolute;
		content: "";
		-moz-transition: all 300ms ease-in-out 100ms;
		-ms-transition: all 300ms ease-in-out 100ms;
		-o-transition: all 300ms ease-in-out 100ms;
		-webkit-transition: all 300ms ease-in-out 100ms;
		transition: all 300ms ease-in-out 100ms;
	}
	#semana:checked ~ .control-me::after,
	#semana2:checked ~ .control-me::after,
	#semana3:checked ~ .control-me::after,
	#semana4:checked ~ .control-me::after,
	#semana5:checked ~ .control-me::after,
	#semana6:checked ~ .control-me::after,
	#semana7:checked ~ .control-me::after,
	#semana8:checked ~ .control-me::after,
	#semana9:checked ~ .control-me::after,
	#semana10:checked ~ .control-me::after,
	#semana11:checked ~ .control-me::after,
	#semana12:checked ~ .control-me::after,
	#semana13:checked ~ .control-me::after,
	#semana14:checked ~ .control-me::after,
	#semana15:checked ~ .control-me::after,
	#semana16:checked ~ .control-me::after,
	#semana17:checked ~ .control-me::after,
	#semana18:checked ~ .control-me::after,
	#semana19:checked ~ .control-me::after,
	#semana20:checked ~ .control-me::after,
	#semana21:checked ~ .control-me::after,
	#semana22:checked ~ .control-me::after,
	#semana23:checked ~ .control-me::after,
	#semana24:checked ~ .control-me::after,
	#semana25:checked ~ .control-me::after,
	#semana26:checked ~ .control-me::after,
	#semana27:checked ~ .control-me::after,
	#semana28:checked ~ .control-me::after,
	#semana29:checked ~ .control-me::after,
	#semana30:checked ~ .control-me::after,
	#semana31:checked ~ .control-me::after,
	#semana32:checked ~ .control-me::after,
	#semana33:checked ~ .control-me::after,
	#semana34:checked ~ .control-me::after,
	#semana35:checked ~ .control-me::after,
	#semana36:checked ~ .control-me::after,
	#semana37:checked ~ .control-me::after,
	#semana38:checked ~ .control-me::after,
	#semana39:checked ~ .control-me::after,
	#semana40:checked ~ .control-me::after,
	#semana41:checked ~ .control-me::after,
	#semana42:checked ~ .control-me::after,
	#semana43:checked ~ .control-me::after,
	#semana44:checked ~ .control-me::after,
	#semana45:checked ~ .control-me::after,
	#semana46:checked ~ .control-me::after,
	#semana47:checked ~ .control-me::after,
	#semana48:checked ~ .control-me::after,
	#semana49:checked ~ .control-me::after,
	#semana50:checked ~ .control-me::after,
	#semana51:checked ~ .control-me::after,
	#semana52:checked ~ .control-me::after {
		background-color: orange;
		padding: 24px;
		border-radius: 50%;
		content: ""; 
	}
	
	input[type=checkbox] {
		/* position: relative; */
		  cursor: pointer;
	}
	input[type=checkbox]:before {
		content: "";
		display: block;
		position: absolute;
		width: 18px;
		height: 18px;
		top: -3px;
		left: -4px;
		border: 1px solid #CCC;
		border-radius: 50%;
		background-color: white;
	}
	input[type=checkbox]:checked:after {
		content: "";
		display: block;
		width: 4px;
		height: 9px;
		
		border: solid orange;
		border-width: 0 2px 2px 0;
		-webkit-transform: rotate(40deg);
		-ms-transform: rotate(40deg);
		transform: rotate(40deg);
		position: absolute;
		top: 1px;
		left: 3px;
	}
	
	label {
		/* width: 48px;
		height: 48px; */
		/* background: #A5D6A7; */
		color: #666;
		margin: 1px;
		padding: 21px 9px 11px 12px;
		font-size: 11px;
		text-align: center;
		position: absolute;
		z-index: 1;
	}
	
	.visually-hidden {
		position: absolute;
		/* left: -100vw; */
		/* opacity: 0; */
		z-index: 1;
		/* Note, you may want to position the checkbox over top the label and set the opacity to zero instead. It can be better for accessibilty on some touch devices for discoverability. */
	}
	/*////////////////////////////////////////////////////////////////////////////////////////////*/
</style>


    <?php $studentadmin = $row_DatosInsc['id_client'];?>   
    <div class="subform_cont1">
        <div class="formulario" style="width: 400px; padding: 10px;">
            <form class="form" action="orders.php" method="post" name="formweeks" id="formweeks">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr height="50">
                        <td valign="middle" align="center" style="font-size: 25px; padding: 10px 0 0 0;">
                            <?php echo ObtenerNombreCliente($studentadmin);?> <?php echo ObtenerApellidoCliente($studentadmin);?>
                        </td>
                    </tr>
                    <tr height="30">
                        <td valign="middle" align="center" style="padding: 0 0 10px 0;">
                            <?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?>
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
                            <a href="cart_delete.php?carrieOff=<?php echo $row_DatosProductSeleted['product'];?>"><input class="button_a2" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button_bok" value="Velja veckorna" />
                        </td>
                    </tr>
                </table>
                <input type="hidden"  name="id_product" id="id_product" value="<?php echo $row_DatosProductSeleted['product'];?>"/>
                <input type="hidden" name="id_client" id="id_client" value="<?php echo $_SESSION['bkng_UserId']; ?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formweeks" />
            </form>
        </div>
    </div>
<?php endif ?>

<?php if($_GET['recibo']): ?>
<div class="subform_cont1" id="aparecer" style="display:<?php if ($_GET['recibo'] != "") echo "block"; ?>; min-height: 1400px;">
        <div class="recibo">
                <table border="0" cellspacing="0" cellpadding="0">
                    <tr height="40">
                        <td colspan="2" valign="middle" align="left" style="font-size: 20px;">
                            Offert
                        </td>
                        <td colspan="2" valign="middle" align="right" style="padding: 0 0;">
                            <a href="index.php"><img src="../img/sys/stallningshyra.svg" width="100%" height="" style="margin:;"></a>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo $row_DatosInsc['name'];?> <?php echo $row_DatosInsc['surname'];?></br>
                            <?php echo $row_DatosInsc['adress'];?></br>
                            <?php echo $row_DatosInsc['post'];?> <?php echo $row_DatosInsc['city'];?>
                        </td>
                    </tr>
                    <tr height="40">
                        <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            Ställningsvagn:
                        </td>
                        <td colspan="1" width="15%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            -
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            Vecka(or):
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                            Pris:
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?>
                        </td>
                        <td colspan="1" width="15%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                           
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                    </tr>
                </table>
                <div style="width:100%; height:200px;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">                    
                    <?php
                        if ($totalRows_DatosCart2 > 0) {
                        do { ?>
                            <?php
                                $priceWeek2 = ObtenerPrecioSemana($row_DatosCart2['id_week']) + ObtenerPrecioProducto($row_DatosProductSeleted['product']);
                            ?>
                    <tr height="20">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="15%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo ObtenerNombreSemana($row_DatosCart2['id_week']); ?>
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo $priceWeek2; ?> SEK
                        </td>
                    </tr>
                    <?php $TotalSinImpuest2 = $TotalSinImpuest2 + $priceWeek2; ?>
                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                        }
                        ?>
                </table>
                </div>
                
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="15%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            Sub-total:
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo $TotalSinImpuest2; ?> SEK
                        </td>
                    </tr>
                    <?php
                        $tax2 = $row_DatosTaxes['percent'];
                        $moms2 = $TotalSinImpuest2 * $tax2 / 100;
                        $total2 = $moms2 + $TotalSinImpuest2;
                    ?>
                    <tr height="30">
                        <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="15%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            
                        </td>
                        <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            Moms:
                        </td>
                        <td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                            <?php echo $moms2; ?> SEK
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="2" valign="middle" align="left" style="font-size: 18px; border-top:1px solid #F00;">
                            Total
                        </td>
                        <td colspan="2" valign="middle" align="right" style="font-size: 18px; border-top:1px solid #F00;">
                            <?php echo $total2; ?> SEK
                        </td>
                    </tr>
                    <tr height="30">
                        <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                        
                        </td>
                    </tr>

                <form class="form" action="orders.php" method="get">
                    <tr height="80">
                        <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                        Genom att klicka på knappen boka du ställning som är med på offert</br>
                        Vill du bekräfta den här bokning?</br>
                        </br>
                        <input type="submit" class="button_bok" value=" Ja, skicka fakturan" />
                        </td>
                    </tr>
                    <input type="hidden" name="payment" id="payment" value="1"/>
                </form>
                </table>
        </div>
</div>
<?php endif ?>



<?php if($_GET['payment'] == 1): ?>
    <?php
        if ($totalRows_DatosCart2 > 0) {
            do { 
                $priceWeek = ObtenerPrecioSemana($row_DatosCart2['id_week']) + ObtenerPrecioProducto($row_DatosProductSeleted['product']);
                $TotalSinImpuest = $TotalSinImpuest + $priceWeek; 
            } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
        }
    ?>
    <?php
        $tax = $row_DatosTaxes['percent'];
        $moms = $TotalSinImpuest * $tax / 100;
        $total = $moms + $TotalSinImpuest;
        
        $product = $row_DatosProductSeleted['product'];
        $status = 2;
        $payment = $_GET['payment'];
    ?>
    <?php ConfirmationDone(date('Y'), date('m'), date('d'), $cliente, $product, $status, $payment, $TotalSinImpuest, $total); ?>
<div class="subform_cont1">
    <div class="msn_done">
        <br/><br/><br/><br/>
        <h1>Klart!</h1>
        <br/><br/>
        <a href="orders.php"><input class="button_a" style="width: 170px; text-align: center;" value="Ok" /></a>
    </div>
</div>
<?php endif ?>







<?php if($_GET["id"]):?>  
    <div class="subform_cont1">
            <table class="formulario" style="top: 50px;" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 30px 0 0 0;">
                        <?php echo ObtenerNombreStudent($_GET["id"]);?> <?php echo ObtenerApellidoStudent($_GET["id"]);?>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                    Scrolla i kurs listan för att välja dina kurser.
                    </td>
                </tr>
                <tr height="5">
                </tr> 
                <tr>
                    <td colspan="2" valign="middle" align="center">
                        <div class="courses">
                            <div class="class1">
                                <p>Kurs Lista</p>
                                <div class="lista_c">
                                    <?php
                                    if ($totalRows_DatosCourse > 0) {
                                    do { ?>
                                    <?php if(productosRestantes($_GET["id"], $row_DatosCourse['id_course'])) { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add_exist.php?courseID=<?php echo $row_DatosCourse['id_course'];?>&id=<?php echo $_GET["id"];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php } while ($row_DatosCourse = mysqli_fetch_assoc($DatosCourse));
                                    }
                                    ?>
                                        <?php if ($totalRows_DatosCourse2 > 0) {?>
                                        <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCourse2 > 0) {
                                    do { ?>
                                    <?php if(productosRestantes($_GET["id"], $row_DatosCourse2['id_course'])) { ?>
                                    <div style="width:100%;">
                                        <a style="font-size: 11px;" href="cart_add_exist.php?courseID=<?php echo $row_DatosCourse2['id_course'];?>&id=<?php echo $_GET["id"];?>">
                                            <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['name'];?>
                                            </div>
                                            <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                <?php echo $row_DatosCourse2['schedule'];?>
                                            </div>
                                            <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                                ( + )
                                            </div>
                                        </a>
                                    </div>
                                    <?php } ?>
                                    <?php } while ($row_DatosCourse2 = mysqli_fetch_assoc($DatosCourse2));
                                    }
                                    ?>
                                </div>
                            </div>
        
                            <div class="class1" style="border-left: 1px solid #CCC;">
                                <p>Utvaldag Kurser</p>
                                <div class="lista_c">
                                    <?php $SubTotal2 = 0; ?>
                                    <?php
                                    if ($totalRows_DatosCart > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $SubTotal2 = $SubTotal2 + ObtenerPrecioCurso($row_DatosCart['id_course']);?>
                                    <?php } while ($row_DatosCart = mysqli_fetch_assoc($DatosCart));
                                    }
                                    ?>
                                        <?php if ($totalRows_DatosCart2 > 0) {?>
                                        <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                        <?php } ?>
                                    <?php
                                    if ($totalRows_DatosCart2 > 0) {
                                    do { ?>
                                        <div style="width:100%;">
                                            <a style="font-size: 11px;" href="cart_delete.php?counterID=<?php echo $row_DatosCart2['id_counter'];?>">
                                                <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerNombreCurso($row_DatosCart2['id_course']);?>
                                                </div>
                                                <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                                    <?php echo ObtenerEsquemaCurso($row_DatosCart2['id_course']);?>
                                                </div>
                                                <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                                    ( - )
                                                </div>
                                            </a>
                                        </div>
                                    <?php $NoDiscTotal2 = $NoDiscTotal2 + ObtenerPrecioCurso($row_DatosCart2['id_course']);?>
                                    <?php } while ($row_DatosCart2 = mysqli_fetch_assoc($DatosCart2));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
        <form action="students.php?done_exist=<?php echo $_GET["id"]; ?>" method="post" name="" id="">
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                                
                                <?php
                                $SubTotalPlus2 = $SubTotal2 + $NoDiscTotal2;
                                $resprosent2 = ObtenerPDescuento($totalRows_DatosCart);
                                $preciorebaja2 = $SubTotal2 / 100 * $resprosent2;
                                $precioTotalCR2 = $SubTotal2 - $preciorebaja2;
                                $precioTotal2 = $SubTotal2 - $preciorebaja2 + $NoDiscTotal2;
                                ?>

                                <table style="background-color: ; margin:10px 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td colspan="2" valign="middle" align="center" style="font-size:18px; padding:0 0 10px;"><?php echo GetPacket($totalRows_DatosParaPaquete2); ?></td>
                                    </tr>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">Sub Total:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;">&nbsp;<?php echo $SubTotalPlus2; ?> SEK</td>
                                    </tr>
                                    <?php if ($totalRows_DatosCart > 1) {?>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;"><?php //echo ObtenerPDescuento($totalRows_DatosCart); ?> Rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;">- <?php echo $preciorebaja2; ?> SEK </td>
                                    </tr>
                                    <?php } ?>
                                    <!-- <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">= Total efter rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $precioTotalCR2; ?> SEK</td>
                                    </tr> -->
                                    <?php if ($totalRows_DatosCart2 > 0) {?>
                                    <!-- <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">+ Kurser utan rabatt:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $NoDiscTotal2; ?> SEK</td>
                                    </tr> -->
                                    <?php } ?>
                                    <tr>
                                        <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total:</td>
                                        <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><input class="textd" type="text" value="<?php echo $precioTotal2; ?>" name="admdiscount" id="admdiscount" size="5" autocomplete="off" style="text-align:center; font-size:18px"> SEK</td>
                                    </tr>
                                </table>

                                <?php //$_SESSION["TotalCompra2"] = $_POST["admdiscount"];?>
                                <?php $_SESSION["paquete2"] = GetPacket($totalRows_DatosParaPaquete2);?>
                                
                                <!-- Pay method:<br/>
                                Paypal -->
                    </td>
                </tr>
                <tr height="85">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="avbryt" /></a> <input type="submit" class="button" value="Anmäl mig" />
                    </td>
                </tr>
                <tr height="3">
                </tr>
            </table>
        </form>
    </div>
<?php endif ?>

<?php if($_GET["done_exist"]):?>
    <?php
    $sexadmin2 = sex($_GET["done_exist"]);
    $Termin = $row_DatosTerm["id_term"];
    $TerminStart = $row_DatosTerm["term_start"];
    $TerminStop = $row_DatosTerm["term_stop"];
    $total2 = $_POST["admdiscount"];
    $Package2 = $_SESSION["paquete2"];
    $studentadmin2 = $_GET["done_exist"]; 
    $status2 = 1;
    $fecha2=time()+3600;
    date("H:i:s",$fecha2);
    ?>
    <?php ConfirmationDone(date('Y'), date('m'), date('d'), date('His',$fecha2), $studentadmin2, $sexadmin2, $Termin, $TerminStart, $TerminStop, $Package2, $total2, $status2); ?>
        <div class="subform_cont1">
            <div class="msn_done">
                <br/><br/><br/><br/>
                <h1>Klart!</h1>
                <br/><br/>
                <a href="students.php"><input class="button_a" style="width: 170px; text-align: center;" value="Ok" /></a>
            </div>
        </div>
<?php endif ?>

<?php if($_GET["see"]):?>
    <div class="subform_cont1">
        <table class="popwindows" style="width: 500px; margin: 40px auto;" border="0" cellspacing="0" cellpadding="0">
            <tr height="20">
            </tr>
            <tr height="30">
                <td colspan="2" valign="middle" align="center">
                    <?php echo ObtenerNombreCliente($_GET['see']); ?> <?php echo ObtenerApellidoCliente($_GET['see']); ?>
                </td>
            </tr>
            <tr height="20">
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Personal no:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo ObtenerNumeroPCliente($_GET['see']); ?>
                </td>
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Telefon no:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo ObtenerTelefonoCliente($_GET['see']); ?>
                </td>
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    E-mail:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo ObtenerEmailCliente($_GET['see']); ?>
                </td>
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Adress:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo ObtenerAdressCliente($_GET['see']); ?><br/>
                    <?php echo ObtenerPostCiente($_GET['see']); ?> <?php echo ObtenerCityCliente($_GET['see']); ?>
                </td>
            </tr>
            <tr height="20">
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Registration date:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo $row_DatosSee['day']; ?> <?php echo month($row_DatosSee['month']); ?> <?php echo $row_DatosSee['year']; ?><br/>  
                    kl. <?php echo $row_DatosSee['time']; ?>
                </td>
            </tr>
            <tr height="20">
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Pushcart:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo NombreCarreta(OptenerCarreta($_GET['IDinsc'])); ?>
                </td>
            </tr>
            <tr height="20">
            </tr>
            <tr height="20">
                <td width="30%" valign="top" align="right" style="padding: 0 10px; font-size:14px;">
                    Weeks:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php if ($row_DatosPackage > 0) { // Show if recordset not empty ?>
                    <?php do { ?>
                        <p><?php echo ObtenerNombreSemana($row_DatosPackage['id_week']); ?></p>
                    <?php } while ($row_DatosPackage = mysqli_fetch_assoc($DatosPackage)); 
                    }
                    else
                    { // Show if recordset is empty ?>
                    <?php } ?>
                </td>
            </tr>
            <tr height="20">
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    sub-total:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo $row_DatosSee['subtotal']; ?> SEK
                </td>
            </tr>
            <?php
                $percent = $row_DatosImpuesto['percent'];
                $moms = $row_DatosSee['subtotal'] * $percent / 100;

                $total = $row_DatosSee['subtotal'] + $moms
            ?> 
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Moms:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo $moms; ?> SEK
                </td>
            </tr>
            <tr height="30">
                <td width="30%" valign="middle" align="right" style="padding: 0 10px; font-size:14px;">
                    Total:
                </td>
                <td width="70%" valign="middle" align="left" style="padding: 0 10px; font-size:14px;">
                    <?php echo $total ; ?> SEK
                </td>
            </tr>
            <tr height="20">
            </tr>
            <?php if($totalRows_DatosSemanas != 0) { ?>
            <tr height="20">
                <td colspan="2" valign="middle" align="center" style="font-size:14px;">
                    <form action="orders.php" method="post" name="formstatus" id="formstatus">
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" onchange="validarForm();">
                            <option value="2" <?php if ($row_DatosSee['status'] == 2) echo "selected"; ?>>none</option>
                            
                            <option value="1" <?php if ($row_DatosSee['status'] == 1) echo "selected"; ?>>Approve</option>
                            
                            <option value="0" <?php if ($row_DatosSee['status'] == 0) echo "selected"; ?>>Reject</option>
                        </select>
                        <input type="hidden" name="id_insc" id="id_insc" value="<?php echo $_GET['IDinsc']; ?>"/>
                        <input type="hidden" name="MM_insert" id="MM_insert" value="formstatus" /> 
                    </form>
                </td>
            </tr>
            <?php } else { ?>
            <tr height="20">
                <td colspan="2" valign="middle" align="center" style="font-size:14px;">
                    Status: <span style="color:<?php echo GetStatusColor($row_DatosConsulta['status']); ?>;"><?php echo GetStatus($row_DatosSee['status']);?></span>
                </td>
            </tr>
            <?php } ?>
            <tr height="30">
                <td colspan="2" valign="middle" align="center" style="color: #333; padding: 30px 0 0 0;">
                <input class="button_a" style="width: 170px; text-align: center;" value="Stänga" onclick="history.back()"/>
                </td>
            </tr>
            <tr height="20">
            </tr>
        </table>
    </div>
<?php endif ?>

<?php if ($_GET["handled"] != "" && $row_DatosComfirmacion["status"] == 1) { ?>
      
        <?php
          $nombre = ObtenerNombreCliente($row_DatosComfirmacion["id_client"]);
          $apellido = ObtenerApellidoCliente($row_DatosComfirmacion["id_client"]);
          $direccion = ObtenerAdressCliente($row_DatosComfirmacion["id_client"]);
          $post = ObtenerPostCiente($row_DatosComfirmacion["id_client"]);
          $ciudad = ObtenerCityCliente($row_DatosComfirmacion["id_client"]);
          $email = ObtenerEmailCliente($row_DatosComfirmacion["id_client"]);
          $orderNo = $row_DatosComfirmacion["order_number"];
          $producto = ObtenerNombreProducto($row_DatosProductSeleted['product']);
        ?>
        <?php
          $contenido='
          <table width="100%" border="0" cellspacing="0" cellpadding="0" style="">
              <tr height="40">
                  <td colspan="2" valign="middle" align="left" style="font-size: 20px;">
                      Orderbekräftelse
                  </td>
                  <td colspan="2" valign="middle" align="right" style="padding: 0 0;">
                      <a href="index.php"><img src="';$contenido.=$dominio;$contenido.='/img/sys/stallningshyra.svg" width="70%" height="" style="margin:;"></a>
                  </td>
              </tr>
              <tr height="40">
                  <td colspan="4" valign="middle" align="left" style="color: #666; font-size: 14px;">';
          $contenido.=$nombre; $contenido.='&nbsp;'; $contenido.=$apellido; $contenido.='</br>';
          $contenido.=$direccion; $contenido.='</br>';
          $contenido.=$post; $contenido.='&nbsp;'; $contenido.=$ciudad; $contenido.='</br>';
          $contenido.='
                  </td>
              </tr>
              <tr height="20">
                  <td colspan="1" width="40%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                      
                  </td>
                  <td colspan="1" width="15%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                      
                  </td>
                  <td colspan="1" width="25%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                      
                  </td>
                  <td colspan="1" width="20%" valign="middle" align="left" style="font-size: 14px; font-weight: 600; border-bottom:1px solid #666;">
                      
                  </td>
              </tr>
              <tr height="20">
                  <td colspan="1" width="40%" valign="middle" align="left" style="color: #666; font-size: 14px;">';
                      $contenido.=$producto; 
      $contenido.='</td>
                  <td colspan="1" width="15%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                      
                  </td>
                  <td colspan="1" width="25%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                      
                  </td>
                  <td colspan="1" width="20%" valign="middle" align="left" style="color: #666; font-size: 14px;">
                      
                  </td>
              </tr>
          </table>
          <div style="width:100%; height:400px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr height="30">
                    <td colspan="4" valign="middle" align="center" style="font-size: 18px;">
                        Din bokning har blivit godkänt bokningsnummer '; $contenido.=$orderNo; $contenido.='</br>
                        visa denna bokningsnummer för att hämta din vagn.
                    </td>
                </tr>
            </table>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr height="30">
                  <td colspan="2" valign="middle" align="left" style="font-size: 18px; border-top:1px solid #F00;">
                      
                  </td>
                  <td colspan="2" valign="middle" align="right" style="font-size: 18px; border-top:1px solid #F00; padding-right:40px;">

                  </td>
              </tr>
          </table>
          <div style="width:100%; border:1px solid #666; border-radius:7px;">
          <table width="98%" border="0" cellspacing="0" cellpadding="0" style="margin:0 auto;">
            <tr height="80">
                <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                    Genom att klicka på knappen boka du ställning som är med på offert</br>
                    Vill du bekräfta den här bokning?</br>
                </td>
            </tr>
          </table>
          </div>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr height="40">
                  <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                      
                  </td>
              </tr>
              <tr>
                  <td colspan="4" valign="middle" align="center" style="font-size: 12px;">
                      <p style="font-size:12px; color:#666;">Har du mer frågor så kan du kontakta oss på <a style="font-size:14px;" href="mailto:info@stallningshyra.se">info@stallningshyra.se</a> </p>
                  </td>
              </tr>
          </table>';
          
          $asunto ='Orderbekräftelse på din bokning Ställningshyra';
          SendMailHtmlAprovado($email, $contenido, $asunto);
        ?>
<?php } else if ($_GET["handled"] != "" && $row_DatosComfirmacion["status"] == 1) { ?>
      echo "rechazado";
<?php } ?>

<?php if($_GET["editi"]):?>
    <div class="subform_cont1">
        <form action="students.php" method="post" name="formediti" id="formediti">
            <table class="formulario" border="0" cellspacing="0" cellpadding="0">
                <tr height="30">
                    <td colspan="2" valign="middle" align="center">
                        <?php //echo $row_DatosEdit['id_student'];?>
                    </td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['name'];?>" placeholder="Ditt Namn" name="name" id="name" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['surname'];?>" placeholder="Ditt Efternamn" name="surname" id="surname" size="31" required/></td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="email" value="<?php echo $row_DatosEdit['email'];?>" placeholder="Din mailadress..." name="email" id="email" size="68" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['personal_number'];?>" minlength="10" maxlength="10" placeholder="Ditt Personnummer (10 siffror)" name="personal_number" id="personal_number" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['telephone'];?>" placeholder="Ditt Telefonnummer" name="telephone" id="telephone" size="31" required/></td>
                </tr>
                <tr height="50">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Kön: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="sex" id="sex" required>
                        <option value="None" >None</option>
                        <option value="Man" <?php if ($row_DatosEdit['sex'] == Man) echo "selected"; ?>>Man</option>
                        <option value="Kvinna" <?php if ($row_DatosEdit['sex'] == Kvinna) echo "selected"; ?>>Kvinna</option>
                        </select>
                    </td>
                </tr>
                <tr height="50">
                    <td colspan="2" valign="middle" align="center"><input class="textf" type="text" value="<?php echo $row_DatosEdit['adress'];?>" placeholder="Din adress..." name="adress" id="adress" size="68" required/></td>
                </tr>
                <tr height="50">
                    <td width="50%" valign="middle" align="right" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['post'];?>" placeholder="Ditt Postnummer" name="post" id="post" size="31" required/></td>
                    <td width="50%" valign="middle" align="left" style="padding: 0 10px;"><input class="textf" type="text" value="<?php echo $row_DatosEdit['city'];?>" placeholder="Din Ort" name="city" id="city" size="31" required/></td>
                </tr>
                <tr height="50">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        Status: 
                        <select class="textf" style="width: 100px; font-size: 14px; color: #999;" name="status" id="status" required>
                            <option value="1" <?php if ($row_DatosInscEdit['status'] == 1) echo "selected"; ?>>Active</option>
                            <option value="2" <?php if ($row_DatosInscEdit['status'] == 2) echo "selected"; ?>>Waiting</option>
                            <option value="3" <?php if ($row_DatosInscEdit['status'] == 3) echo "selected"; ?>>Not paid</option>
                            <option value="0" <?php if ($row_DatosInscEdit['status'] == 0) echo "selected"; ?>>Inactive</option>
                        </select>
                    </td>
                </tr>
                <tr height="60">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        <textarea name="commentary" id="commentary" rows="5" cols="58"><?php echo $row_DatosInscEdit['commentary']; ?></textarea>
                    </td>
                </tr>    
                <tr height="80">
                    <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                            <input class="button_a" style="width: 170px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" value="Uppdatera" onclick="javascript:return asegurar ();"/>
                    </td>
                </tr>
                <tr height="25">
                    <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                        
                    </td>
                </tr>
                </table>
                <input type="hidden" name="id_student" id="id_student" value="<?php echo $row_DatosEdit['id_student'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formediti" />
        </form>
    </div>
<?php endif ?>

<?php if($_GET["editc"]):?>
    <div class="subform_cont1">
        <table class="formulario" style="" border="0" cellspacing="0" cellpadding="0">
            <tr height="60">
                <td colspan="2" valign="middle" align="center" style="font-size: 30px; padding: 20px 0 0 0;">
                    <?php echo ObtenerNombreStudent(ObtenerIDstudentDesdeTransaccion($_GET['editc']));?> <?php echo ObtenerApellidoStudent(ObtenerIDstudentDesdeTransaccion($_GET['editc']));?>
                </td>
            </tr>
            <tr height="30">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                Scrolla i kurs listan för att välja kurs.
                </td>
            </tr>
            <tr height="5">
            </tr> 
            <tr>
                <td colspan="2" valign="middle" align="center">
                    <div class="courses">
                        <div class="class1">
                            <p>Kurs Lista</p>
                            <div class="lista_c">
                                <?php
                                if ($totalRows_DatosCourseEdit > 0) {
                                do { ?>
                                <?php if(productosRestantesEdit(ObtenerIDstudentDesdeTransaccion($_GET['editc']), $row_DatosCourseEdit['id_course'], $_GET['editc'])) { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px;" href="cart_add_edit.php?editc=<?php echo $_GET['editc'];?>&courseID=<?php echo $row_DatosCourseEdit['id_course'];?>&tm=<?php echo $_GET['editc'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit['name'];?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit['schedule'];?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                            ( + )
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <?php } while ($row_DatosCourseEdit = mysqli_fetch_assoc($DatosCourseEdit));
                                }
                                ?>
                                    <?php if ($totalRows_DatosCourseEdit2 > 0) {?>
                                    <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                    <?php } ?>
                                <?php
                                if ($totalRows_DatosCourseEdit2 > 0) {
                                do { ?>
                                <?php if(productosRestantesEdit(ObtenerIDstudentDesdeTransaccion($_GET['editc']), $row_DatosCourseEdit2['id_course'], $_GET['editc'])) { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px;" href="cart_add_edit.php?editc=<?php echo $_GET['editc'];?>&courseID=<?php echo $row_DatosCourseEdit2['id_course'];?>&tm=<?php echo $_GET['editc'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit2['name'];?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo $row_DatosCourseEdit2['schedule'];?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:green; text-align:left; float:left;">
                                            ( + )
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                                <?php } while ($row_DatosCourseEdit2 = mysqli_fetch_assoc($DatosCourseEdit2));
                                }
                                ?>
                            </div>
                        </div>
    
                        <div class="class1" style="border-left: 1px solid #CCC;">
                            <p>Utvaldag Kurser</p>
                            <div class="lista_c">
                                <?php $SubTotal = 0; ?>
                                <?php
                                if ($totalRows_DatosCartEdit > 0) {
                                do { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px; margin:0 5px;" href="cart_delete.php?counterID=<?php echo $row_DatosCartEdit['id_counter'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerNombreCurso($row_DatosCartEdit['id_course']);?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerEsquemaCurso($row_DatosCartEdit['id_course']);?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                            ( - )
                                        </div>
                                    </a>
                                </div>
                                <?php $SubTotal = $SubTotal + ObtenerPrecioCurso($row_DatosCartEdit['id_course']);?>
                                <?php } while ($row_DatosCartEdit = mysqli_fetch_assoc($DatosCartEdit));
                                }
                                ?>
                                    <?php if ($totalRows_DatosCartEdit2 > 0) {?>
                                    <p style="font-size:12px; color:#999;">Kurser utan rabatt</p>
                                    <?php } ?>
                                <?php
                                if ($totalRows_DatosCartEdit2 > 0) {
                                do { ?>
                                <div style="width:100%;">
                                    <a style="font-size: 11px; margin:0 5px;" href="cart_delete.php?counterID=<?php echo $row_DatosCartEdit2['id_counter'];?>">
                                        <div style="width:50%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerNombreCurso($row_DatosCartEdit2['id_course']);?>
                                        </div>
                                        <div style="width:40%; padding:10px 0; text-align:left; float:left;">
                                            <?php echo ObtenerEsquemaCurso($row_DatosCartEdit2['id_course']);?>
                                        </div>
                                        <div style="width:10%; padding:10px 0; color:red; text-align:left; float:left;">
                                            ( - )
                                        </div>
                                    </a>
                                </div>
                                <?php $NoDiscTotal = $NoDiscTotal + ObtenerPrecioCurso($row_DatosCartEdit2['id_course']);?>
                                <?php } while ($row_DatosCartEdit2 = mysqli_fetch_assoc($DatosCartEdit2));
                                }
                                ?>
                            </div>
                        </div>
                    </div>
    <form action="students.php" method="post" name="formeditc" id="formeditc">
                </td>
            </tr>
            <tr height="60">
                <td colspan="2" width="100%" valign="middle" align="center" style="color: #666; font-size: 14px; padding: 0 10px;">
                            
                            <?php
                            $SubTotalPlus = $SubTotal + $NoDiscTotal;
                            $resprosent = ObtenerPDescuento($totalRows_DatosCartEdit);
                            $preciorebaja = $SubTotal / 100 * $resprosent;
                            $precioTotalCR = $SubTotal - $preciorebaja;
                            $precioTotal = $SubTotal - $preciorebaja + $NoDiscTotal;
                            ?>

                            <table style="background-color: ; margin:10px 0;" width="60%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="2" valign="middle" align="center" style="font-size:18px; padding:0 0 10px;"><?php echo GetPacket($totalRows_DatosParaPaquete3); ?></td>
                            </tr>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">Sub Total:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $SubTotalPlus; ?> SEK</td>
                            </tr>
                            <?php if ($totalRows_DatosCartEdit > 1) {?>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#CCC;">- <?php //echo ObtenerPDescuento($totalRows_DatosCart); ?> Rabatt:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#CCC;"><?php echo $preciorebaja; ?> SEK </td>
                            </tr>
                            <?php } ?>
                            <!-- <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">= Total efter rabatt:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $precioTotalCR; ?> SEK</td>
                            </tr> -->
                            <?php if ($totalRows_DatosCartEdit > 0) {?>
                            <!-- <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:14px; padding:0 5px 0 0; color:#999;">+ Kurser utan rabatt:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:14px; padding:0 0 0 5px; color:#999;"><?php echo $NoDiscTotal; ?> SEK</td>
                            </tr> -->
                            <?php } ?>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><?php echo $precioTotal; ?> SEK</td>
                            </tr>
                            <tr>
                                <td width="50%" valign="middle" align="right" style="font-size:18px; padding:5px 5px 0 0; border-top:1px solid #999;">Total Adm:</td>
                                <td width="50%" valign="middle" align="left" style="font-size:18px; padding:5px 0 0 5px; border-top:1px solid #999;"><input class="textd" type="text" value="<?php echo inscTotal($_GET['editc']); ?>" name="total" id="total" size="5" autocomplete="off" style="text-align:center; font-size:18px"> SEK</td>
                            </tr>
                        </table>

                        <?php $_SESSION["paquete3"] = GetPacket($totalRows_DatosParaPaquete3);?>
                        
                        <!-- Pay method:<br/>
                        Paypal -->
                </td>
            </tr>
            <tr height="85">
                <td colspan="2" valign="middle" align="center" style="color: #666; font-size: 14px;">
                        <input type="submit" class="button" value="Ok!" />
                </td>
            </tr>
            <tr height="3">
            </tr>
        </table>
        <input type="hidden" name="package" id="package" value="<?php echo $_SESSION["paquete3"]; ?>"/>
        <!-- <input type="hidden" name="total" id="total" value="<?php //echo inscTotal($_GET['editc']); ?>"/> -->
        <input type="hidden" name="id_insc" id="id_insc" value="<?php echo $_GET['editc'];?>"/>
        <input type="hidden" name="MM_insert" id="MM_insert" value="formeditc" />
    </form>
    </div>
<?php endif ?>

<?php if($_GET["deleteID"]):?>
    <div class="subform_cont1">
        <div class="alert_msn">
            <form action="order_delete.php" method="post" name="formdelete" id="formdelete">
                <table style="" width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr height="85">
                        <td colspan="2" valign="middle" align="center" style="color: red; font-size: 14px;">
                            <h2>Delete</h2>
                            <label>Are you sure you want delete this order?</label> 
                        </td>
                    </tr>
                    <tr height="20">
                        <td colspan="2" valign="middle" align="center">
                           
                        </td>
                    </tr>
                    <tr height="85">
                        <td colspan="2" valign="middle" align="center">
                            <input class="button_a" style="width: 140px; text-align: center;" value="avbryt" onclick="history.back()"/> <input type="submit" class="button" style="width: 140px;" value="Ok!" />
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="id" id="id" value="<?php echo $_GET['deleteID'];?>"/>
                <input type="hidden" name="MM_insert" id="MM_insert" value="formdelete" />
            </form>
        </div>
    </div>
<?php endif?>