<?php
include_once "teatro.php";
include_once "funciones.php";

$funcion1 = new Funciones("La Fierecilla Domada",500);
$funcion2 = new Funciones("Hamlet",250);
$funcion3 = new Funciones("Don Juan Tenorio", 350);
$funcion4 = new Funciones("Fuente Ovejuna",400);
$arrayFunciones = [
    $funcion1,
    $funcion2,
    $funcion3,
    $funcion4
];
$teatro = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$arrayFunciones);

do {
    echo "--------------------------------------------------\n".
         "--------------------------------------------------";
    echo "\n\nELIJA UNA OPCION: " . "\n";
    echo "1: Mostrar teatro" . "\n";
    echo "2: Modificar todo el teatro" . "\n";
    echo "3: Modificar solo nombre del teatro " . "\n";
    echo "4: Modificar solo Direccion del teatro" . "\n";
    echo "5: Modificar modificar solo funciones" . "\n";
    echo "6: SALIR" . "\n";
    echo "Opcion: ";
    $opcion = trim(fgets(STDIN));
    echo "--------------------------------------------------\n";
    switch ($opcion) {
        case '1':
            $te = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$arrayFunciones);
            echo $te."\n\n";
            break;

        case '2':
            $te = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$arrayFunciones);
            echo $te."\n\n";
            //Cambio nombre del teatro
            echo "Ingrese el nuevo nombre del teatro: ";
            $newTeatro = trim(fgets(STDIN));
            $teatro->cambiarNameT($newTeatro);

            //cambio direccion del teatro
            echo "ingrese nueva direccion del teatro: ";
            $newDireccion = trim(fgets(STDIN));
            $teatro->cambiarDireccionT($newDireccion);

            //cambio de nombre y precios de las funciones
            echo "ingresar nombre de la funcion que quieres cambiar: ";
            $nombreActual = trim(fgets(STDIN));

            // Cambio de nombres y precios de funciones
            if($nombreActual == "La Fierecilla Domada"){
                echo "ingresar el nuevo nombre: ";
                $newNombre = trim(fgets(STDIN));
                echo "ingresar el nuevo precio: ";
                $newPrecio = trim(fgets(STDIN));
                $f = new Funciones($newNombre,$newPrecio);
                $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                $funciones=[
                    $f,
                    $funcion2,
                    $funcion3,
                    $funcion4
                ];
                $t = new Teatro($newTeatro,$newDireccion,$funciones);
                
                echo "\n\n".$t;

            }elseif($nombreActual == "Hamlet"){
                echo "ingresar el nuevo nombre: ";
                $newNombre = trim(fgets(STDIN));
                echo "ingresar el nuevo precio: ";
                $newPrecio = trim(fgets(STDIN));
                $f = new Funciones($newNombre,$newPrecio);
                $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                $funciones=[
                    $funcion1,
                    $f,
                    $funcion3,
                    $funcion4
                ];
                $t = new Teatro($newTeatro,$newDireccion,$funciones);
                
                echo "\n\n".$t;

            }elseif($nombreActual == "Don Juan Tenorio"){
                echo "ingresar el nuevo nombre: ";
                $newNombre = trim(fgets(STDIN));
                echo "ingresar el nuevo precio: ";
                $newPrecio = trim(fgets(STDIN));
                $f = new Funciones($newNombre,$newPrecio);
                $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                $funciones=[
                    $funcion1,
                    $funcion2,
                    $f,
                    $funcion4
                ];
                $t = new Teatro($newTeatro,$newDireccion,$funciones);
                
                echo "\n\n".$t;

            }elseif($nombreActual == "Fuente Ovejuna"){
                echo "ingresar el nuevo nombre: ";
                $newNombre = trim(fgets(STDIN));
                echo "ingresar el nuevo precio: ";
                $newPrecio = trim(fgets(STDIN));
                $f = new Funciones($newNombre,$newPrecio);
                $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                $funciones=[
                    $funcion1,
                    $funcion2,
                    $funcion3,
                    $f
                ];
                $t = new Teatro($newTeatro,$newDireccion,$funciones);
                
                echo "\n\n".$t;

            }

            else{
                echo "\nEsa funcion no exite!\n\n";
            }
            break;

            case '3':
                $te = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$arrayFunciones);
                echo $te."\n\n";
                //Cambio nombre del teatro
                echo "Ingrese el nuevo nombre del teatro: ";
                $newTeatro = trim(fgets(STDIN));
                $te->cambiarNameT($newTeatro);
                echo $te;
            break;

            case '4':
                $te = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$arrayFunciones);
                echo $te."\n\n";
                //cambio direccion del teatro
                echo "ingrese nueva direccion del teatro: ";
                $newDireccion = trim(fgets(STDIN));
                $te->cambiarDireccionT($newDireccion);
                echo $te;
            break;
            case '5':
                $tea = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$arrayFunciones);
                echo $tea."\n\n";
                //cambio de nombre y precios de las funciones
                echo "ingresar nombre de la funcion que quieres cambiar: ";
                $nombreActual = trim(fgets(STDIN));

                // Cambio de nombres y precios de funciones
                if($nombreActual == "La Fierecilla Domada"){
                    echo "ingresar el nuevo nombre: ";
                    $newNombre = trim(fgets(STDIN));
                    echo "ingresar el nuevo precio: ";
                    $newPrecio = trim(fgets(STDIN));
                    $f = new Funciones($newNombre,$newPrecio);
                    $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                    $funciones=[
                        $f,
                        $funcion2,
                        $funcion3,
                        $funcion4
                    ];
                    $tea = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$funciones);
                    
                    echo "\n\n".$tea;

                }elseif($nombreActual == "Hamlet"){
                    echo "ingresar el nuevo nombre: ";
                    $newNombre = trim(fgets(STDIN));
                    echo "ingresar el nuevo precio: ";
                    $newPrecio = trim(fgets(STDIN));
                    $f = new Funciones($newNombre,$newPrecio);
                    $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                    $funciones=[
                        $funcion1,
                        $f,
                        $funcion3,
                        $funcion4
                    ];
                    $tea =  new Teatro("EREMITA CHO","Gral. Roca Nº1050",$funciones);
                    
                    echo "\n\n".$tea;
                    

                }elseif($nombreActual == "Don Juan Tenorio"){
                    echo "ingresar el nuevo nombre: ";
                    $newNombre = trim(fgets(STDIN));
                    echo "ingresar el nuevo precio: ";
                    $newPrecio = trim(fgets(STDIN));
                    $f = new Funciones($newNombre,$newPrecio);
                    $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                    $funciones=[
                        $funcion1,
                        $funcion2,
                        $f,
                        $funcion4
                    ];
                    $tea = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$funciones);
                    
                    echo "\n\n".$tea;

                }elseif($nombreActual == "Fuente Ovejuna"){
                    echo "ingresar el nuevo nombre: ";
                    $newNombre = trim(fgets(STDIN));
                    echo "ingresar el nuevo precio: ";
                    $newPrecio = trim(fgets(STDIN));
                    $f = new Funciones($newNombre,$newPrecio);
                    $f->cambiarNombrePrecioFuncion($newNombre,$newPrecio);
                    $funciones=[
                        $funcion1,
                        $funcion2,
                        $funcion3,
                        $f
                    ];
                    $tea = new Teatro("EREMITA CHO","Gral. Roca Nº1050",$funciones);
                    
                    echo "\n\n".$tea;

                }

                else{
                    echo "\nEsa funcion no exite!\n\n";
                }
            break;
    }
} while($opcion<>6);
