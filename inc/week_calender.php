<style>
    @media only screen and (min-width: 320px) and (-webkit-device-pixel-ratio : 2) {
        /*////////////////////////////////check-box style/////////////////////////////////////*/
        .week_calender {
            width: 100%;
            height: 350px;
            // background-color: #9d9d9e;
        }
        .week_obj {
            width: 10.85%;
            height: 101px;
            background-color: orange;
            margin: 1px;
            border-radius: ;
            text-align: left;
            float: left;
        }
        .week_obj_none {
            width: 10.85%;
            height: 101px;
            background-color: #999;
            margin: 1px;
            border-radius: ;
            text-align: left;
            float: left;
        }
        
        .control-me::after {
            background-color: #F0F0F0;
            padding: 50.5px;
        
            position: absolute;
            content: "";
            -moz-transition: all 300ms ease-in-out 100ms;
            -ms-transition: all 300ms ease-in-out 100ms;
            -o-transition: all 300ms ease-in-out 100ms;
            -webkit-transition: all 300ms ease-in-out 100ms;
            transition: all 300ms ease-in-out 100ms;
        }
        #semana1:checked ~ .control-me::after,
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
        #semana52:checked ~ .control-me::after,
        
        #semana53:checked ~ .control-me::after,
        #semana54:checked ~ .control-me::after,
        #semana55:checked ~ .control-me::after,
        #semana56:checked ~ .control-me::after,
        #semana57:checked ~ .control-me::after,
        #semana58:checked ~ .control-me::after,
        #semana59:checked ~ .control-me::after,
        #semana60:checked ~ .control-me::after,
        #semana61:checked ~ .control-me::after,
        #semana62:checked ~ .control-me::after,
        #semana63:checked ~ .control-me::after,
        #semana64:checked ~ .control-me::after,
        #semana65:checked ~ .control-me::after,
        #semana66:checked ~ .control-me::after,
        #semana67:checked ~ .control-me::after,
        #semana68:checked ~ .control-me::after,
        #semana69:checked ~ .control-me::after,
        #semana70:checked ~ .control-me::after,
        #semana71:checked ~ .control-me::after,
        #semana72:checked ~ .control-me::after,
        #semana73:checked ~ .control-me::after,
        #semana74:checked ~ .control-me::after,
        #semana75:checked ~ .control-me::after,
        #semana76:checked ~ .control-me::after,
        #semana77:checked ~ .control-me::after,
        #semana78:checked ~ .control-me::after,
        #semana79:checked ~ .control-me::after,
        #semana80:checked ~ .control-me::after,
        #semana81:checked ~ .control-me::after,
        #semana82:checked ~ .control-me::after,
        #semana83:checked ~ .control-me::after,
        #semana84:checked ~ .control-me::after,
        #semana85:checked ~ .control-me::after,
        #semana86:checked ~ .control-me::after,
        #semana87:checked ~ .control-me::after,
        #semana88:checked ~ .control-me::after,
        #semana89:checked ~ .control-me::after,
        #semana90:checked ~ .control-me::after,
        #semana91:checked ~ .control-me::after,
        #semana92:checked ~ .control-me::after,
        #semana93:checked ~ .control-me::after,
        #semana94:checked ~ .control-me::after,
        #semana95:checked ~ .control-me::after,
        #semana96:checked ~ .control-me::after,
        #semana97:checked ~ .control-me::after,
        #semana98:checked ~ .control-me::after,
        #semana99:checked ~ .control-me::after,
        #semana100:checked ~ .control-me::after,
        #semana101:checked ~ .control-me::after,
        #semana102:checked ~ .control-me::after,
        #semana103:checked ~ .control-me::after,
        #semana104:checked ~ .control-me::after
        {
            background-color: orange;
            padding: 50.5px;
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
            width: 30px;
            height: 30px;
            top: -3px;
            left: -4px;
            border: 1px solid #CCC;
            border-radius: 50%;
            background-color: white;
        }
        input[type=checkbox]:checked:after {
            content: "";
            display: block;
            width: 10px;
            height: 15px;
            
            border: solid orange;
            border-width: 0 4px 4px 0;
            -webkit-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            transform: rotate(40deg);
            position: absolute;
            top: 1px;
            left: 5px;
        }
        
        label {
            /* width: 48px;
            height: 48px; */
            /* background: #A5D6A7; */
            color: #666;
            margin: 1px;
            padding: 32px 14px 30px 15px;
            font-size: 30px;
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
    }
    @media only screen and (device-width : 375px) and (device-height : 812px) and (-webkit-device-pixel-ratio : 3) {
        /*////////////////////////////////check-box style/////////////////////////////////////*/
        .week_calender {
            width: 100%;
            height: 350px;
            // background-color: #9d9d9e;
        }
        .week_obj {
            width: 10.85%;
            height: 101px;
            background-color: orange;
            margin: 1px;
            border-radius: ;
            text-align: left;
            float: left;
        }
        .week_obj_none {
            width: 10.85%;
            height: 101px;
            background-color: #999;
            margin: 1px;
            border-radius: ;
            text-align: left;
            float: left;
        }
        
        .control-me::after {
            background-color: #F0F0F0;
            padding: 50.5px;
        
            position: absolute;
            content: "";
            -moz-transition: all 300ms ease-in-out 100ms;
            -ms-transition: all 300ms ease-in-out 100ms;
            -o-transition: all 300ms ease-in-out 100ms;
            -webkit-transition: all 300ms ease-in-out 100ms;
            transition: all 300ms ease-in-out 100ms;
        }
        #semana1:checked ~ .control-me::after,
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
        #semana52:checked ~ .control-me::after,
        
        #semana53:checked ~ .control-me::after,
        #semana54:checked ~ .control-me::after,
        #semana55:checked ~ .control-me::after,
        #semana56:checked ~ .control-me::after,
        #semana57:checked ~ .control-me::after,
        #semana58:checked ~ .control-me::after,
        #semana59:checked ~ .control-me::after,
        #semana60:checked ~ .control-me::after,
        #semana61:checked ~ .control-me::after,
        #semana62:checked ~ .control-me::after,
        #semana63:checked ~ .control-me::after,
        #semana64:checked ~ .control-me::after,
        #semana65:checked ~ .control-me::after,
        #semana66:checked ~ .control-me::after,
        #semana67:checked ~ .control-me::after,
        #semana68:checked ~ .control-me::after,
        #semana69:checked ~ .control-me::after,
        #semana70:checked ~ .control-me::after,
        #semana71:checked ~ .control-me::after,
        #semana72:checked ~ .control-me::after,
        #semana73:checked ~ .control-me::after,
        #semana74:checked ~ .control-me::after,
        #semana75:checked ~ .control-me::after,
        #semana76:checked ~ .control-me::after,
        #semana77:checked ~ .control-me::after,
        #semana78:checked ~ .control-me::after,
        #semana79:checked ~ .control-me::after,
        #semana80:checked ~ .control-me::after,
        #semana81:checked ~ .control-me::after,
        #semana82:checked ~ .control-me::after,
        #semana83:checked ~ .control-me::after,
        #semana84:checked ~ .control-me::after,
        #semana85:checked ~ .control-me::after,
        #semana86:checked ~ .control-me::after,
        #semana87:checked ~ .control-me::after,
        #semana88:checked ~ .control-me::after,
        #semana89:checked ~ .control-me::after,
        #semana90:checked ~ .control-me::after,
        #semana91:checked ~ .control-me::after,
        #semana92:checked ~ .control-me::after,
        #semana93:checked ~ .control-me::after,
        #semana94:checked ~ .control-me::after,
        #semana95:checked ~ .control-me::after,
        #semana96:checked ~ .control-me::after,
        #semana97:checked ~ .control-me::after,
        #semana98:checked ~ .control-me::after,
        #semana99:checked ~ .control-me::after,
        #semana100:checked ~ .control-me::after,
        #semana101:checked ~ .control-me::after,
        #semana102:checked ~ .control-me::after,
        #semana103:checked ~ .control-me::after,
        #semana104:checked ~ .control-me::after
        {
            background-color: orange;
            padding: 50.5px;
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
            width: 30px;
            height: 30px;
            top: -3px;
            left: -4px;
            border: 1px solid #CCC;
            border-radius: 50%;
            background-color: white;
        }
        input[type=checkbox]:checked:after {
            content: "";
            display: block;
            width: 10px;
            height: 15px;
            
            border: solid orange;
            border-width: 0 4px 4px 0;
            -webkit-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            transform: rotate(40deg);
            position: absolute;
            top: 1px;
            left: 5px;
        }
        
        label {
            /* width: 48px;
            height: 48px; */
            /* background: #A5D6A7; */
            color: #666;
            margin: 1px;
            padding: 32px 14px 30px 15px;
            font-size: 30px;
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
    }
    @media (min-width: 768px) {
        /*////////////////////////////////check-box style/////////////////////////////////////*/
        .week_calender {
            width: 100%;
            height: 350px;
            // background-color: #9d9d9e;
        }
        .week_obj {
            width: 10.85%;
            height: 101px;
            background-color: orange;
            margin: 1px;
            border-radius: ;
            text-align: left;
            float: left;
        }
        .week_obj_none {
            width: 10.85%;
            height: 101px;
            background-color: #999;
            margin: 1px;
            border-radius: ;
            text-align: left;
            float: left;
        }
        
        .control-me::after {
            background-color: #F0F0F0;
            padding: 50.5px;
        
            position: absolute;
            content: "";
            -moz-transition: all 300ms ease-in-out 100ms;
            -ms-transition: all 300ms ease-in-out 100ms;
            -o-transition: all 300ms ease-in-out 100ms;
            -webkit-transition: all 300ms ease-in-out 100ms;
            transition: all 300ms ease-in-out 100ms;
        }
        #semana1:checked ~ .control-me::after,
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
        #semana52:checked ~ .control-me::after,
        
        #semana53:checked ~ .control-me::after,
        #semana54:checked ~ .control-me::after,
        #semana55:checked ~ .control-me::after,
        #semana56:checked ~ .control-me::after,
        #semana57:checked ~ .control-me::after,
        #semana58:checked ~ .control-me::after,
        #semana59:checked ~ .control-me::after,
        #semana60:checked ~ .control-me::after,
        #semana61:checked ~ .control-me::after,
        #semana62:checked ~ .control-me::after,
        #semana63:checked ~ .control-me::after,
        #semana64:checked ~ .control-me::after,
        #semana65:checked ~ .control-me::after,
        #semana66:checked ~ .control-me::after,
        #semana67:checked ~ .control-me::after,
        #semana68:checked ~ .control-me::after,
        #semana69:checked ~ .control-me::after,
        #semana70:checked ~ .control-me::after,
        #semana71:checked ~ .control-me::after,
        #semana72:checked ~ .control-me::after,
        #semana73:checked ~ .control-me::after,
        #semana74:checked ~ .control-me::after,
        #semana75:checked ~ .control-me::after,
        #semana76:checked ~ .control-me::after,
        #semana77:checked ~ .control-me::after,
        #semana78:checked ~ .control-me::after,
        #semana79:checked ~ .control-me::after,
        #semana80:checked ~ .control-me::after,
        #semana81:checked ~ .control-me::after,
        #semana82:checked ~ .control-me::after,
        #semana83:checked ~ .control-me::after,
        #semana84:checked ~ .control-me::after,
        #semana85:checked ~ .control-me::after,
        #semana86:checked ~ .control-me::after,
        #semana87:checked ~ .control-me::after,
        #semana88:checked ~ .control-me::after,
        #semana89:checked ~ .control-me::after,
        #semana90:checked ~ .control-me::after,
        #semana91:checked ~ .control-me::after,
        #semana92:checked ~ .control-me::after,
        #semana93:checked ~ .control-me::after,
        #semana94:checked ~ .control-me::after,
        #semana95:checked ~ .control-me::after,
        #semana96:checked ~ .control-me::after,
        #semana97:checked ~ .control-me::after,
        #semana98:checked ~ .control-me::after,
        #semana99:checked ~ .control-me::after,
        #semana100:checked ~ .control-me::after,
        #semana101:checked ~ .control-me::after,
        #semana102:checked ~ .control-me::after,
        #semana103:checked ~ .control-me::after,
        #semana104:checked ~ .control-me::after
        {
            background-color: orange;
            padding: 50.5px;
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
            width: 30px;
            height: 30px;
            top: -3px;
            left: -4px;
            border: 1px solid #CCC;
            border-radius: 50%;
            background-color: white;
        }
        input[type=checkbox]:checked:after {
            content: "";
            display: block;
            width: 10px;
            height: 15px;
            
            border: solid orange;
            border-width: 0 4px 4px 0;
            -webkit-transform: rotate(40deg);
            -ms-transform: rotate(40deg);
            transform: rotate(40deg);
            position: absolute;
            top: 1px;
            left: 5px;
        }
        
        label {
            /* width: 48px;
            height: 48px; */
            /* background: #A5D6A7; */
            color: #666;
            margin: 1px;
            padding: 32px 14px 30px 15px;
            font-size: 30px;
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
    }
    @media (min-width: 1024px) {
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
        #semana1:checked ~ .control-me::after,
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
        #semana52:checked ~ .control-me::after,
        
        #semana53:checked ~ .control-me::after,
        #semana54:checked ~ .control-me::after,
        #semana55:checked ~ .control-me::after,
        #semana56:checked ~ .control-me::after,
        #semana57:checked ~ .control-me::after,
        #semana58:checked ~ .control-me::after,
        #semana59:checked ~ .control-me::after,
        #semana60:checked ~ .control-me::after,
        #semana61:checked ~ .control-me::after,
        #semana62:checked ~ .control-me::after,
        #semana63:checked ~ .control-me::after,
        #semana64:checked ~ .control-me::after,
        #semana65:checked ~ .control-me::after,
        #semana66:checked ~ .control-me::after,
        #semana67:checked ~ .control-me::after,
        #semana68:checked ~ .control-me::after,
        #semana69:checked ~ .control-me::after,
        #semana70:checked ~ .control-me::after,
        #semana71:checked ~ .control-me::after,
        #semana72:checked ~ .control-me::after,
        #semana73:checked ~ .control-me::after,
        #semana74:checked ~ .control-me::after,
        #semana75:checked ~ .control-me::after,
        #semana76:checked ~ .control-me::after,
        #semana77:checked ~ .control-me::after,
        #semana78:checked ~ .control-me::after,
        #semana79:checked ~ .control-me::after,
        #semana80:checked ~ .control-me::after,
        #semana81:checked ~ .control-me::after,
        #semana82:checked ~ .control-me::after,
        #semana83:checked ~ .control-me::after,
        #semana84:checked ~ .control-me::after,
        #semana85:checked ~ .control-me::after,
        #semana86:checked ~ .control-me::after,
        #semana87:checked ~ .control-me::after,
        #semana88:checked ~ .control-me::after,
        #semana89:checked ~ .control-me::after,
        #semana90:checked ~ .control-me::after,
        #semana91:checked ~ .control-me::after,
        #semana92:checked ~ .control-me::after,
        #semana93:checked ~ .control-me::after,
        #semana94:checked ~ .control-me::after,
        #semana95:checked ~ .control-me::after,
        #semana96:checked ~ .control-me::after,
        #semana97:checked ~ .control-me::after,
        #semana98:checked ~ .control-me::after,
        #semana99:checked ~ .control-me::after,
        #semana100:checked ~ .control-me::after,
        #semana101:checked ~ .control-me::after,
        #semana102:checked ~ .control-me::after,
        #semana103:checked ~ .control-me::after,
        #semana104:checked ~ .control-me::after
        {
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
    }
</style>
<div class="form_frame" id="aparecer" style="display:<?php if (($totalRows_DatosProductSeleted > 0) && ($row_DatosProductSeleted['confirmed'] == 0)) echo "block"; ?>;">
    <div class="formulario_week">
        <form class="form" action="reserve.php" method="post" name="formweeks" id="formweeks">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr height="50">
                    <td valign="middle" align="center">
                        <h3 class="product_title"><?php echo ObtenerNombreProducto($row_DatosProductSeleted['product']);?></h3>
                    </td>
                </tr>
                <?php 
                    $currentWeekNumber = date('W');

                    $currentYear = date('Y');
                    $nextYear = strtotime ('+1 year' , strtotime($currentYear));
                    $nextYear = date ('Y',$nextYear); 
                ?>
                <tr height="30">
                    <td valign="middle" align="center" style="border-bottom:1px solid #F00;">
                        <p class="texto_original"><?php echo 'Nu är det vecka ' . $currentWeekNumber; ?></p>
                        <!-- </br> -->
                        <?php // echo $_SESSION['bkng_UserId'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="scrollyears">
                            <div class="years_1">
                                <div class="year_title">
                                    <p class="texto_original"><?php echo 'Denna år ' . $currentYear; ?></p>
                                </div>
                                <div class="week_calender">
                                    <div class="<?php if($currentWeekNumber < 1) { ?>
                                                    <?php if (semanasInactiva(1, $currentYear)) { 
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
                                        <label <?php if (ObtenerPrecioSemana(1) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana1">V. 01</label>
                                        <?php if ($currentWeekNumber < 1) {
                                                if (semanasInactiva(1, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 1)) { ?>
                                            <input type="checkbox" id="semana1" name="semana[]" value="1" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } }?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 2) { ?>
                                                    <?php if (semanasInactiva(2, $currentYear)) { 
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
                                                if (semanasInactiva(2, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 2)) { ?>
                                            <input type="checkbox" id="semana2" name="semana[]" value="2" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } }?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 3) { ?>
                                                    <?php if (semanasInactiva(3, $currentYear)) { 
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
                                                if (semanasInactiva(3, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 3)) { ?>
                                            <input type="checkbox" id="semana3" name="semana[]" value="3" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } }?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 4) { ?>
                                                    <?php if (semanasInactiva(4, $currentYear)) { 
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
                                                if (semanasInactiva(4, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 4)) { ?>
                                            <input type="checkbox" id="semana4" name="semana[]" value="4" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } }?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 5) { ?>
                                                    <?php if (semanasInactiva(5, $currentYear)) { 
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
                                                if (semanasInactiva(5, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 5)) { ?>
                                            <input type="checkbox" id="semana5" name="semana[]" value="5" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 6) { ?>
                                                    <?php if (semanasInactiva(6, $currentYear)) { 
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
                                                if (semanasInactiva(6, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 6)) { ?>
                                            <input type="checkbox" id="semana6" name="semana[]" value="6" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 7) { ?>
                                                    <?php if (semanasInactiva(7, $currentYear)) { 
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
                                                if (semanasInactiva(7, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 7)) { ?>
                                            <input type="checkbox" id="semana7" name="semana[]" value="7" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 8) { ?>
                                                    <?php if (semanasInactiva(8, $currentYear)) { 
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
                                                if (semanasInactiva(8, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 8)) { ?>
                                            <input type="checkbox" id="semana8" name="semana[]" value="8" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 9) { ?>
                                                    <?php if (semanasInactiva(9, $currentYear)) { 
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
                                                if (semanasInactiva(9, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 9)) { ?>
                                            <input type="checkbox" id="semana9" name="semana[]" value="9" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 10) { ?>
                                                    <?php if (semanasInactiva(10, $currentYear)) { 
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
                                                if (semanasInactiva(10, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 10)) { ?>
                                            <input type="checkbox" id="semana10" name="semana[]" value="10" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 11) { ?>
                                                    <?php if (semanasInactiva(11, $currentYear)) { 
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
                                                if (semanasInactiva(11, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 11)) { ?>
                                            <input type="checkbox" id="semana11" name="semana[]" value="11" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 12) { ?>
                                                    <?php if (semanasInactiva(12, $currentYear)) { 
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
                                                if (semanasInactiva(12, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 12)) { ?>
                                            <input type="checkbox" id="semana12" name="semana[]" value="12" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 13) { ?>
                                                    <?php if (semanasInactiva(13, $currentYear)) { 
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
                                                if (semanasInactiva(13, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 13)) { ?>
                                            <input type="checkbox" id="semana13" name="semana[]" value="13" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 14) { ?>
                                                    <?php if (semanasInactiva(14, $currentYear)) { 
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
                                                if (semanasInactiva(14, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 14)) { ?>
                                            <input type="checkbox" id="semana14" name="semana[]" value="14" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 15) { ?>
                                                    <?php if (semanasInactiva(15, $currentYear)) { 
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
                                                if (semanasInactiva(15, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 15)) { ?>
                                            <input type="checkbox" id="semana15" name="semana[]" value="15" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 16) { ?>
                                                    <?php if (semanasInactiva(16, $currentYear)) { 
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
                                                if (semanasInactiva(16, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 16)) { ?>
                                            <input type="checkbox" id="semana16" name="semana[]" value="16" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 17) { ?>
                                                    <?php if (semanasInactiva(17, $currentYear)) { 
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
                                                if (semanasInactiva(17, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 17)) { ?>
                                            <input type="checkbox" id="semana17" name="semana[]" value="17" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 18) { ?>
                                                    <?php if (semanasInactiva(18, $currentYear)) { 
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
                                                if (semanasInactiva(18, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 18)) { ?>
                                            <input type="checkbox" id="semana18" name="semana[]" value="18" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 19) { ?>
                                                    <?php if (semanasInactiva(19, $currentYear)) { 
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
                                                if (semanasInactiva(19, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 19)) { ?>
                                            <input type="checkbox" id="semana19" name="semana[]" value="19" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 20) { ?>
                                                    <?php if (semanasInactiva(20, $currentYear)) { 
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
                                                if (semanasInactiva(20, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 20)) { ?>
                                            <input type="checkbox" id="semana20" name="semana[]" value="20" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 21) { ?>
                                                    <?php if (semanasInactiva(21, $currentYear)) { 
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
                                                if (semanasInactiva(21, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 21)) { ?>
                                            <input type="checkbox" id="semana21" name="semana[]" value="21" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 22) { ?>
                                                    <?php if (semanasInactiva(22, $currentYear)) { 
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
                                                if (semanasInactiva(22, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 22)) { ?>
                                            <input type="checkbox" id="semana22" name="semana[]" value="22" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 23) { ?>
                                                    <?php if (semanasInactiva(23, $currentYear)) { 
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
                                                if (semanasInactiva(23, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 23)) { ?>
                                            <input type="checkbox" id="semana23" name="semana[]" value="23" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 24) { ?>
                                                    <?php if (semanasInactiva(24, $currentYear)) { 
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
                                                if (semanasInactiva(24, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 24)) { ?>
                                            <input type="checkbox" id="semana24" name="semana[]" value="24" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 25) { ?>
                                                    <?php if (semanasInactiva(25, $currentYear)) { 
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
                                                if (semanasInactiva(25, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 25)) { ?>
                                            <input type="checkbox" id="semana25" name="semana[]" value="25" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 26) { ?>
                                                    <?php if (semanasInactiva(26, $currentYear)) { 
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
                                                if (semanasInactiva(26, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 26)) { ?>
                                            <input type="checkbox" id="semana26" name="semana[]" value="26" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 27) { ?>
                                                    <?php if (semanasInactiva(27, $currentYear)) { 
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
                                                if (semanasInactiva(27, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 27)) { ?>
                                            <input type="checkbox" id="semana27" name="semana[]" value="27" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 28) { ?>
                                                    <?php if (semanasInactiva(28, $currentYear)) { 
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
                                                if (semanasInactiva(28, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 28)) { ?>
                                            <input type="checkbox" id="semana28" name="semana[]" value="28" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 29) { ?>
                                                    <?php if (semanasInactiva(29, $currentYear)) { 
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
                                                if (semanasInactiva(29, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 29)) { ?>
                                            <input type="checkbox" id="semana29" name="semana[]" value="29" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 30) { ?>
                                                    <?php if (semanasInactiva(30, $currentYear)) { 
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
                                                if (semanasInactiva(30, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 30)) { ?>
                                            <input type="checkbox" id="semana30" name="semana[]" value="30" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 31) { ?>
                                                    <?php if (semanasInactiva(31, $currentYear)) { 
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
                                                if (semanasInactiva(31, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 31)) { ?>
                                            <input type="checkbox" id="semana31" name="semana[]" value="31" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 32) { ?>
                                                    <?php if (semanasInactiva(32, $currentYear)) { 
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
                                                if (semanasInactiva(32, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 32)) { ?>
                                            <input type="checkbox" id="semana32" name="semana[]" value="32" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 33) { ?>
                                                    <?php if (semanasInactiva(33, $currentYear)) { 
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
                                                if (semanasInactiva(33, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 33)) { ?>
                                            <input type="checkbox" id="semana33" name="semana[]" value="33" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 34) { ?>
                                                    <?php if (semanasInactiva(34, $currentYear)) { 
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
                                                if (semanasInactiva(34, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 34)) { ?>
                                            <input type="checkbox" id="semana34" name="semana[]" value="34" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 35) { ?>
                                                    <?php if (semanasInactiva(35, $currentYear)) { 
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
                                                if (semanasInactiva(35, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 35)) { ?>
                                            <input type="checkbox" id="semana35" name="semana[]" value="35" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 36) { ?>
                                                    <?php if (semanasInactiva(36, $currentYear)) { 
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
                                                if (semanasInactiva(36, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 36)) { ?>
                                            <input type="checkbox" id="semana36" name="semana[]" value="36" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 37) { ?>
                                                    <?php if (semanasInactiva(37, $currentYear)) { 
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
                                                if (semanasInactiva(37, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 37)) { ?>
                                            <input type="checkbox" id="semana37" name="semana[]" value="37" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 38) { ?>
                                                    <?php if (semanasInactiva(38, $currentYear)) { 
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
                                                if (semanasInactiva(38, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 38)) { ?>
                                            <input type="checkbox" id="semana38" name="semana[]" value="38" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 39) { ?>
                                                    <?php if (semanasInactiva(39, $currentYear)) { 
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
                                                if (semanasInactiva(39, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 39)) { ?>
                                            <input type="checkbox" id="semana39" name="semana[]" value="39" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 40) { ?>
                                                    <?php if (semanasInactiva(40, $currentYear)) { 
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
                                                if (semanasInactiva(40, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 40)) { ?>
                                            <input type="checkbox" id="semana40" name="semana[]" value="40" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 41) { ?>
                                                    <?php if (semanasInactiva(41, $currentYear)) { 
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
                                                if (semanasInactiva(41, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 41)) { ?>
                                            <input type="checkbox" id="semana41" name="semana[]" value="41" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 42) { ?>
                                                    <?php if (semanasInactiva(42, $currentYear)) { 
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
                                                if (semanasInactiva(42, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 42)) { ?>
                                            <input type="checkbox" id="semana42" name="semana[]" value="42" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 43) { ?>
                                                    <?php if (semanasInactiva(43, $currentYear)) { 
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
                                                if (semanasInactiva(43, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 43)) { ?>
                                            <input type="checkbox" id="semana43" name="semana[]" value="43" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 44) { ?>
                                                    <?php if (semanasInactiva(44, $currentYear)) { 
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
                                                if (semanasInactiva(44, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 44)) { ?>
                                            <input type="checkbox" id="semana44" name="semana[]" value="44" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 45) { ?>
                                                    <?php if (semanasInactiva(45, $currentYear)) { 
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
                                                if (semanasInactiva(45, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 45)) { ?>
                                            <input type="checkbox" id="semana45" name="semana[]" value="45" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 46) { ?>
                                                    <?php if (semanasInactiva(46, $currentYear)) { 
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
                                                if (semanasInactiva(46, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 46)) { ?>
                                            <input type="checkbox" id="semana46" name="semana[]" value="46" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 47) { ?>
                                                    <?php if (semanasInactiva(47, $currentYear)) { 
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
                                                if (semanasInactiva(47, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 47)) { ?>
                                            <input type="checkbox" id="semana47" name="semana[]" value="47" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 48) { ?>
                                                    <?php if (semanasInactiva(48, $currentYear)) { 
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
                                                if (semanasInactiva(48, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 48)) { ?>
                                            <input type="checkbox" id="semana48" name="semana[]" value="48" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 49) { ?>
                                                    <?php if (semanasInactiva(49, $currentYear)) { 
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
                                                if (semanasInactiva(49, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 49)) { ?>
                                            <input type="checkbox" id="semana49" name="semana[]" value="49" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 50) { ?>
                                                    <?php if (semanasInactiva(50, $currentYear)) { 
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
                                                if (semanasInactiva(50, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 50)) { ?>
                                            <input type="checkbox" id="semana50" name="semana[]" value="50" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 51) { ?>
                                                    <?php if (semanasInactiva(51, $currentYear)) { 
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
                                                if (semanasInactiva(51, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 51)) { ?>
                                            <input type="checkbox" id="semana51" name="semana[]" value="51" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>

                                    <div class="<?php if($currentWeekNumber < 52) { ?>
                                                    <?php if (semanasInactiva(52, $currentYear)) { 
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
                                                if (semanasInactiva(52, $currentYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], 52)) { ?>
                                            <input type="checkbox" id="semana52" name="semana[]" value="52" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } } ?>
                                    </div>
                                    
                                </div>
                            </div>

                        <!-- proximo ano -->
                            <div class="years_2">
                                <div class="year_title">
                                    <p class="texto_original"><?php echo 'Nästa år ' . $nextYear; ?></p>
                                </div>
                                <div class="week_calender">
                                    <div class="<?php if (semanasInactiva(1, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(1, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(1, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana53">V. 01</label>
                                        <?php if (semanasInactiva(1, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(1, $nextYear))) { ?>
                                            <input type="checkbox" id="semana53" name="semana[]" value="<?php echo ObtenerSemanaID(1, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(2, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(2, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(2, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana54">V. 02</label>
                                        <?php if (semanasInactiva(2, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(2, $nextYear))) { ?>
                                            <input type="checkbox" id="semana54" name="semana[]" value="<?php echo ObtenerSemanaID(2, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(3, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(3, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(3, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana55">V. 03</label>
                                        <?php if (semanasInactiva(3, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(3, $nextYear))) { ?>
                                            <input type="checkbox" id="semana55" name="semana[]" value="<?php echo ObtenerSemanaID(3, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(4, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(4, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(4, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana56">V. 04</label>
                                        <?php if (semanasInactiva(4, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(4, $nextYear))) { ?>
                                            <input type="checkbox" id="semana56" name="semana[]" value="<?php echo ObtenerSemanaID(4, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(5, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(5, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(5, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana57">V. 05</label>
                                        <?php if (semanasInactiva(5, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(5, $nextYear))) { ?>
                                            <input type="checkbox" id="semana57" name="semana[]" value="<?php echo ObtenerSemanaID(5, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(6, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(6, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(6, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana58">V. 06</label>
                                        <?php if (semanasInactiva(6, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(6, $nextYear))) { ?>
                                            <input type="checkbox" id="semana58" name="semana[]" value="<?php echo ObtenerSemanaID(6, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(7, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(7, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(7, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana59">V. 07</label>
                                        <?php if (semanasInactiva(7, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(7, $nextYear))) { ?>
                                            <input type="checkbox" id="semana59" name="semana[]" value="<?php echo ObtenerSemanaID(7, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(8, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(8, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(8, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana60">V. 08</label>
                                        <?php if (semanasInactiva(8, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(8, $nextYear))) { ?>
                                            <input type="checkbox" id="semana60" name="semana[]" value="<?php echo ObtenerSemanaID(8, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(9, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(9, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(9, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana61">V. 09</label>
                                        <?php if (semanasInactiva(9, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(9, $nextYear))) { ?>
                                            <input type="checkbox" id="semana61" name="semana[]" value="<?php echo ObtenerSemanaID(9, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(10, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(10, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(10, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana62">V. 10</label>
                                        <?php if (semanasInactiva(10, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(10, $nextYear))) { ?>
                                            <input type="checkbox" id="semana62" name="semana[]" value="<?php echo ObtenerSemanaID(10, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(11, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(11, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(11, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana63">V. 11</label>
                                        <?php if (semanasInactiva(11, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(11, $nextYear))) { ?>
                                            <input type="checkbox" id="semana63" name="semana[]" value="<?php echo ObtenerSemanaID(11, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(12, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(12, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(12, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana64">V. 12</label>
                                        <?php if (semanasInactiva(12, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(12, $nextYear))) { ?>
                                            <input type="checkbox" id="semana64" name="semana[]" value="<?php echo ObtenerSemanaID(12, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(13, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(13, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(13, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana65">V. 13</label>
                                        <?php if (semanasInactiva(13, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(13, $nextYear))) { ?>
                                            <input type="checkbox" id="semana65" name="semana[]" value="<?php echo ObtenerSemanaID(13, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(14, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(14, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(14, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana66">V. 14</label>
                                        <?php if (semanasInactiva(14, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(14, $nextYear))) { ?>
                                            <input type="checkbox" id="semana66" name="semana[]" value="<?php echo ObtenerSemanaID(14, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(15, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(15, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(15, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana67">V. 15</label>
                                        <?php if (semanasInactiva(15, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(15, $nextYear))) { ?>
                                            <input type="checkbox" id="semana67" name="semana[]" value="<?php echo ObtenerSemanaID(15, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(16, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(16, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(16, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana68">V. 16</label>
                                        <?php if (semanasInactiva(16, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(16, $nextYear))) { ?>
                                            <input type="checkbox" id="semana68" name="semana[]" value="<?php echo ObtenerSemanaID(16, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(17, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(17, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(17, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana69">V. 17</label>
                                        <?php if (semanasInactiva(17, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(17, $nextYear))) { ?>
                                            <input type="checkbox" id="semana69" name="semana[]" value="<?php echo ObtenerSemanaID(17, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(18, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(18, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(18, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana70">V. 18</label>
                                        <?php if (semanasInactiva(18, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(18, $nextYear))) { ?>
                                            <input type="checkbox" id="semana70" name="semana[]" value="<?php echo ObtenerSemanaID(18, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(19, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(19, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(19, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana71">V. 19</label>
                                        <?php if (semanasInactiva(19, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(19, $nextYear))) { ?>
                                            <input type="checkbox" id="semana71" name="semana[]" value="<?php echo ObtenerSemanaID(19, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(20, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(20, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(20, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana72">V. 20</label>
                                        <?php if (semanasInactiva(20, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(20, $nextYear))) { ?>
                                            <input type="checkbox" id="semana72" name="semana[]" value="<?php echo ObtenerSemanaID(20, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(21, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(21, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(21, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana73">V. 21</label>
                                        <?php if (semanasInactiva(21, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(21, $nextYear))) { ?>
                                            <input type="checkbox" id="semana73" name="semana[]" value="<?php echo ObtenerSemanaID(21, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(22, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(22, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(22, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana74">V. 22</label>
                                        <?php if (semanasInactiva(22, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(22, $nextYear))) { ?>
                                            <input type="checkbox" id="semana74" name="semana[]" value="<?php echo ObtenerSemanaID(22, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(23, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(23, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(23, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana75">V. 23</label>
                                        <?php if (semanasInactiva(23, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(23, $nextYear))) { ?>
                                            <input type="checkbox" id="semana75" name="semana[]" value="<?php echo ObtenerSemanaID(23, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(24, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(24, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(24, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana76">V. 24</label>
                                        <?php if (semanasInactiva(24, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(24, $nextYear))) { ?>
                                            <input type="checkbox" id="semana76" name="semana[]" value="<?php echo ObtenerSemanaID(24, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(25, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(25, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(25, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana77">V. 25</label>
                                        <?php if (semanasInactiva(25, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(25, $nextYear))) { ?>
                                            <input type="checkbox" id="semana77" name="semana[]" value="<?php echo ObtenerSemanaID(25, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(26, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(26, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(26, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana78">V. 26</label>
                                        <?php if (semanasInactiva(26, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(26, $nextYear))) { ?>
                                            <input type="checkbox" id="semana78" name="semana[]" value="<?php echo ObtenerSemanaID(26, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(27, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(27, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(27, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana79">V. 27</label>
                                        <?php if (semanasInactiva(27, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(27, $nextYear))) { ?>
                                            <input type="checkbox" id="semana79" name="semana[]" value="<?php echo ObtenerSemanaID(27, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(28, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(28, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(28, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana80">V. 28</label>
                                        <?php if (semanasInactiva(28, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(28, $nextYear))) { ?>
                                            <input type="checkbox" id="semana80" name="semana[]" value="<?php echo ObtenerSemanaID(28, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(29, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(29, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(29, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana81">V. 29</label>
                                        <?php if (semanasInactiva(29, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(29, $nextYear))) { ?>
                                            <input type="checkbox" id="semana81" name="semana[]" value="<?php echo ObtenerSemanaID(29, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(30, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(30, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(30, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana82">V. 30</label>
                                        <?php if (semanasInactiva(30, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(30, $nextYear))) { ?>
                                            <input type="checkbox" id="semana82" name="semana[]" value="<?php echo ObtenerSemanaID(30, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(31, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(31, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(31, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana83">V. 31</label>
                                        <?php if (semanasInactiva(31, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(31, $nextYear))) { ?>
                                            <input type="checkbox" id="semana83" name="semana[]" value="<?php echo ObtenerSemanaID(31, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(32, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(32, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(32, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana84">V. 32</label>
                                        <?php if (semanasInactiva(32, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(32, $nextYear))) { ?>
                                            <input type="checkbox" id="semana84" name="semana[]" value="<?php echo ObtenerSemanaID(32, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(33, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(33, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(33, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana85">V. 33</label>
                                        <?php if (semanasInactiva(33, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(33, $nextYear))) { ?>
                                            <input type="checkbox" id="semana85" name="semana[]" value="<?php echo ObtenerSemanaID(33, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(34, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(34, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(34, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana86">V. 34</label>
                                        <?php if (semanasInactiva(34, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(34, $nextYear))) { ?>
                                            <input type="checkbox" id="semana86" name="semana[]" value="<?php echo ObtenerSemanaID(34, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(35, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(35, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(35, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana87">V. 35</label>
                                        <?php if (semanasInactiva(35, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(35, $nextYear))) { ?>
                                            <input type="checkbox" id="semana87" name="semana[]" value="<?php echo ObtenerSemanaID(35, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(36, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(36, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(36, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana88">V. 36</label>
                                        <?php if (semanasInactiva(36, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(36, $nextYear))) { ?>
                                            <input type="checkbox" id="semana88" name="semana[]" value="<?php echo ObtenerSemanaID(36, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(37, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(37, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(37, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana89">V. 37</label>
                                        <?php if (semanasInactiva(37, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(37, $nextYear))) { ?>
                                            <input type="checkbox" id="semana89" name="semana[]" value="<?php echo ObtenerSemanaID(37, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(38, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(38, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(38, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana90">V. 38</label>
                                        <?php if (semanasInactiva(38, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(38, $nextYear))) { ?>
                                            <input type="checkbox" id="semana90" name="semana[]" value="<?php echo ObtenerSemanaID(38, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(39, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(39, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(39, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana91">V. 39</label>
                                        <?php if (semanasInactiva(39, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(39, $nextYear))) { ?>
                                            <input type="checkbox" id="semana91" name="semana[]" value="<?php echo ObtenerSemanaID(39, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(40, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(40, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(40, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana92">V. 40</label>
                                        <?php if (semanasInactiva(40, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(40, $nextYear))) { ?>
                                            <input type="checkbox" id="semana92" name="semana[]" value="<?php echo ObtenerSemanaID(40, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(41, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(41, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(41, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana93">V. 41</label>
                                        <?php if (semanasInactiva(41, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(41, $nextYear))) { ?>
                                            <input type="checkbox" id="semana93" name="semana[]" value="<?php echo ObtenerSemanaID(41, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(42, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(42, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(42, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana94">V. 42</label>
                                        <?php if (semanasInactiva(42, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(42, $nextYear))) { ?>
                                            <input type="checkbox" id="semana94" name="semana[]" value="<?php echo ObtenerSemanaID(42, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(43, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(43, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(43, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana95">V. 43</label>
                                        <?php if (semanasInactiva(43, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(43, $nextYear))) { ?>
                                            <input type="checkbox" id="semana95" name="semana[]" value="<?php echo ObtenerSemanaID(43, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(44, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(44, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(44, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana96">V. 44</label>
                                        <?php if (semanasInactiva(44, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(44, $nextYear))) { ?>
                                            <input type="checkbox" id="semana96" name="semana[]" value="<?php echo ObtenerSemanaID(44, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(45, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(45, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(45, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana97">V. 45</label>
                                        <?php if (semanasInactiva(45, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(45, $nextYear))) { ?>
                                            <input type="checkbox" id="semana97" name="semana[]" value="<?php echo ObtenerSemanaID(45, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(46, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(46, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(46, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana98">V. 46</label>
                                        <?php if (semanasInactiva(46, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(46, $nextYear))) { ?>
                                            <input type="checkbox" id="semana98" name="semana[]" value="<?php echo ObtenerSemanaID(46, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(47, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(47, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(47, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana99">V. 47</label>
                                        <?php if (semanasInactiva(47, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(47, $nextYear))) { ?>
                                            <input type="checkbox" id="semana99" name="semana[]" value="<?php echo ObtenerSemanaID(47, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(48, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(48, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(48, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana100">V. 48</label>
                                        <?php if (semanasInactiva(48, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(48, $nextYear))) { ?>
                                            <input type="checkbox" id="semana100" name="semana[]" value="<?php echo ObtenerSemanaID(48, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(49, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(49, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(49, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana101">V. 49</label>
                                        <?php if (semanasInactiva(49, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(49, $nextYear))) { ?>
                                            <input type="checkbox" id="semana101" name="semana[]" value="<?php echo ObtenerSemanaID(49, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(50, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(50, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(50, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana102">V. 50</label>
                                        <?php if (semanasInactiva(50, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(50, $nextYear))) { ?>
                                            <input type="checkbox" id="semana102" name="semana[]" value="<?php echo ObtenerSemanaID(50, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(51, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(51, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(51, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana103">V. 51</label>
                                        <?php if (semanasInactiva(51, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(51, $nextYear))) { ?>
                                            <input type="checkbox" id="semana103" name="semana[]" value="<?php echo ObtenerSemanaID(51, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                    <div class="<?php if (semanasInactiva(52, $nextYear)) { 
                                                        if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(52, $nextYear))) { ?>
                                                            week_obj
                                                        <?php } else { ?>
                                                            week_obj_none
                                                        <?php } 
                                                } else { ?> 
                                                        week_obj_none 
                                                <?php } ?>">
                                                
                                        <label <?php if (ObtenerPrecioSemana(ObtenerSemanaID(52, $nextYear)) != "") { ?>style="background-color:rgba(255, 0, 0, 0.171);"<?php } ?> for="semana104">V. 52</label>
                                        <?php if (semanasInactiva(52, $nextYear)) { 
                                                    if (semanasCojidas($row_DatosProductSeleted['product'], ObtenerSemanaID(52, $nextYear))) { ?>
                                            <input type="checkbox" id="semana104" name="semana[]" value="<?php echo ObtenerSemanaID(52, $nextYear); ?>" class="visually-hidden">
                                            <div class="control-me"></div>
                                        <?php } } ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr height="20">
                    <td></td>
                </tr>
                <tr height="80">
                    <td valign="middle" align="center" style="border-top:1px solid #F00;">
                        <a href="cart_delete.php?carrieOff=<?php echo $row_DatosProductSeleted['product'];?>"><input class="button_a" style="width: 170px; text-align: center;" value="Avbryt" /></a> <input type="submit" class="button_bok" value="Välja veckorna" />
                    </td>
                </tr>
            </table>
            <input type="hidden"  name="id_product" id="id_product" value="<?php echo $row_DatosProductSeleted['product'];?>"/>
            <input type="hidden" name="id_client" id="id_client" value="<?php echo $_SESSION['bkng_UserId']; ?>"/>
            <input type="hidden" name="MM_insert" id="MM_insert" value="formweeks" />
        </form>
    </div>
</div>