</html>
<!DOCTYPE html>
<html>
<head>
	<title>Ejemplo de PHP</title>
</head>
<body>
	<?php
        echo "<br><br><span style='color: red;'>Ejercicio Hola Mundo</span><br><br>";
		// Se realiza un ciclo for para imprimir el mensaje de 1 hasta 10
		for ($i = 1; $i<=10; $i++){
            // Se define una variable con el mensaje a imprimir
            $mensaje = "Hola mundo ".$i."<br>";
            // Se utiliza la función "echo" para imprimir el mensaje en la página web
            echo $mensaje;
        }
        echo "<br><br><span style='color: red;'>Enteros</span><br>";

        //Enteros
        $num_hijos = 3;
        echo "Usted tiene ".$num_hijos." hijos";

        echo "<br><br><span style='color: red;'>Decimales</span><br>";

        //Decimales
        $calificacion = 3.1;
        echo "Aprobo su calificacion fue de ".$calificacion." superior a 3.0";

        echo "<br><br><span style='color: red;'>Cadenas de texto</span><br>";

        //Cadenas de texto
        $nombre = "Alejandro";
        echo "Bienvenido ".$nombre."<br> ¿Que desea ordenar?";

        echo "<br><br><span style='color: red;'>Booleanos</span><br>";

        //Booleanos
        $mayor_edad = true;
        if($mayor_edad){
            echo "Enhorabuena! Has sido seleccionado para trabajar con nosotros";
        }
        else{
            echo "Debe ser mayor de edad";
        }
        
        echo "<br><br><span style='color: red;'>Arrays</span><br>";
        
        // Arrays
        //["Nombre","Profesion",edad,graduado,promedio]
        $estudiante = ["Alejandro","Ingeniero",21,false,4.5];
        $mensaje =  $estudiante[0]." es ".$estudiante[1].
        " tiene ".$estudiante[2]." años, su promedio es de ".
        $estudiante[4];

        if($estudiante[3]){
            $mensaje = $mensaje." y ya se graduo";
        }
        else{
            $mensaje = $mensaje." y no se ha graduado";
        }

        echo $mensaje;

        echo "<br><br><span style='color: red;'>Objetos</span><br>";
        // Objetos

        class Estudiante {
            public $nombre;
            public $edad;
        }
        
        $estudiante = new Estudiante();
        $estudiante->nombre = "Alejandro";
        $estudiante->edad = 21;
        
        echo "El nombre es: " . $estudiante->nombre . " y la edad es: " . $estudiante->edad;
        
	?>
</body>
</html>