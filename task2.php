<html>


    <body>
        
        
        <?php

            include "connect.php";

            // check click create or no ?
                if(isset($_POST['submit'])) {


            // get data in form
                $name = $_POST['name'];
                $gender = $_POST['gender'];
                $age = $_POST['age'];
                $address = $_POST['address'];

            // create query
                $query = "INSERT INTO db_user (name, gender, age, address) VALUES ('$name', '$gender', '$age', '$address')";
                $data = $db->prepare($query);
                $data->execute();


            }

                $students = array (
                    array(
                        "name" => "Garri Norman Ivan Nacov",
                        "gender" => "male",
                        "age" => 21,
                        "address" => "surabaya",
                    ),
                    array(
                        "name" => "Arigi",
                        "gender" => "male",
                        "age" => 21,
                        "address" => "surabaya",
                    ),
                    array(
                        "name" => "Eko",
                        "gender" => "male",
                        "age" => 21,
                        "address" => "surabaya",
                    ),
                    array(
                        "name" => "Kevin",
                        "gender" => "male",
                        "age" => 21,
                        "address" => "surabaya"
                    )
                );
                if( isset($_GET['name']) && isset($_GET['gender']) && isset($_GET['age']) && isset($_GET['address']) ) {
                    array_push($students, $_GET);
                } else {
                    echo "Create failed";
                }
                // print_r($_GET);
                // echo "My name is " . $students["name"] . " and my gender " . $students["gender"] . " my age " . $students["age"] . " my address " . $students["address"];

                // foreach ($students as $student => $value) {
                //     echo "$value <br />";
                // }

                
        ?>

                <table class="table table-hover" border="1" cellpadding="1" cellspacing="1">
                <caption>Stuktur Data</caption>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--looping foreach -->
                        <?php foreach($students as $student => $value): ?>
                        <tr>
                            <td><?php echo $student+1; ?></td>
                            <td><?php echo $value["name"]; ?></td>
                            <td><?php echo $value["gender"]; ?></td>
                            <td><?php echo $value["age"]; ?></td>
                            <td><?php echo $value["address"]; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <button><a href="task2continue.php">ADD</a></button>
    </body>




</html>