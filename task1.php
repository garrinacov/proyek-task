<html>


    <body>
            <?php
                $name = "Garri Norman Ivan Nacov";
                $activities = array (
                    'main1'  =>  'Coding', 
                    'main2' => 'Basic PHP', 
                    'main3' => 'Play Music'
                );
                $age = 18;
            

                //mencetak nama
                echo "My name is $name <br>";
                echo "<br>";
                echo "And i like to do = <br>";
                echo "<br>";

                echo $activities['main1'];
                echo "<br>";
                echo $activities['main2'];
                echo "<br>";
                echo $activities['main3'];
                echo "<br>";
                echo "<br>";

                if ($age < 18)
                    echo "I dont have ktp";

                else 
                    echo "I have ktp $age";



            ?>


    </body>

</html>