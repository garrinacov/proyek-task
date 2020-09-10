<html>

    <body>
        <h1>Form struktur data</h1>
        
        <form action="task2.php" method="get">
            <div>
                <label>Nama : </label><input type="text" name="name" value="<?=isset($_GET['name']) ? $_GET['name'] : ''?>"/>
            </div>
            <div>
            <p>Please select your gender:</p>
            <input type="radio" id="male" name="gender" value="male">
                <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label><br>
            <br>  
            </div>
            <div>
                <label>Age : </label><input type="text" name="age" value="<?=isset($_GET['age']) ? $_GET['age'] : ''?>"/>
            </div>
            <div>
                <label>Address : </label><input type="text" name="address" value="<?=isset($_GET['address']) ? $_GET['address'] : ''?>"/>
            </div>
            <input type="submit" name="submit" value="simpan" />
        </form>
    </body>

</html>