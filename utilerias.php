<?php 


class Utilerias {


    function traerNombreMes($mes,$largo)
    {
        if($largo)
        {
            switch($mes)
            {
                case 1:
                    return "Enero";
                break;
                case 2:
                    return "Febrero";
                break;
                case 3:
                    return "Marzo";
                break;
                case 4:
                    return "Abril";
                break;
                case 5:
                    return "Mayo";
                break;
                case 6:
                    return "Junio";
                break;
                case 7:
                    return "Julio";
                break;
                case 8:
                    return "Agosto";
                break;
                case 9:
                    return "Septiembre";
                break;
                case 10:
                    return "Octubre";
                break;
                case 11:
                    return "Noviembre";
                break;
                case 12:
                    return "Diciembre";
                break;
    
            }
        }
        else
        {

        
        switch($mes)
        {
            case 1:
                return "Ene";
            break;
            case 2:
                return "Feb";
            break;
            case 3:
                return "Mar";
            break;
            case 4:
                return "Abr";
            break;
            case 5:
                return "May";
            break;
            case 6:
                return "Jun";
            break;
            case 7:
                return "Jul";
            break;
            case 8:
                return "Ago";
            break;
            case 9:
                return "Sep";
            break;
            case 10:
                return "Oct";
            break;
            case 11:
                return "Nov";
            break;
            case 12:
                return "Dic";
            break;

        }
    }
    }




}


?>