<!DOCTYPE html>
<html>
    <head>
        <title> latihan 1 php alin </title>
    </head> 
    <body>
        <h1> Semangat yah <h1>
        <h2> Pasti bisa <h2>
        <?php
            echo "Haha Hihi Huhu \n";

            $angka_pertama = 5; //interger
            $var_string = "Nama ak holy"; //string
            $var_double = 8.8; //float/double
            $var_bool = true; //boolean
            $var_char = 'a'; //char

            //kondisi variabel
            $var_null = null; //null

            //operator
            $angka_pertama + $var_double; // +

            //percabangan
            if (true) {
                echo $var_string;
            }
            if (false){
                echo $var_string;
            } else {
                echo $var_char;
            }

            //perulangan
            while (condition) {
                //code..
            }
            
        ?>
    </body> 
</html>