<html>
<body>
    <h1>Form struktur data</h1>
    
    <form action="task2.php" method="POST">
        <div>
            <label>Nama : </label><input type="text" name="name"/>
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
            <label>Age : </label><input type="text" name="age" />
        </div>
        <div>
            <label>Address : </label><input type="text" name="address" />
        </div>
        <input type="submit" name="submit" />
    </form>
</body>
</html>