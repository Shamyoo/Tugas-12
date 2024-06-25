<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="/register" method="post">
       <!-- {{ csrf_field() }} -->
    @csrf 
<h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="welcome.html">
        <label>First name:</label><br>
        <input type="text" name="First name"><br>
        <label>Last name:</label><br>
        <input type="text" name="Last name"><br><br>

        
    <label>Gender:</label><br>

    <input type="radio">Male<br>
    <input type="radio">Female<br>
    <input type="radio">Other<br><br>

    
    <label>Nationality:</label> <br><br>
    <select name="Nationality">
        <option value="Indonesia">Indonesia</option>
        <option value="Malaysia">Malaysia</option>
        <option value="Japan">Japan</option>
        <option value="Germany">Germany</option>

    </select> <br><br>

    <label>Languange Spoken:</label><br><br>
    <input type="radio">Bahasa Indonesia<br>
    <input type="radio">English<br>
    <input type="radio">Other<br><br>

    <label>Bio:</label><br><br>
    <textarea name="" id="" cols="40s" rows="10"></textarea><br>
    <input type="submit"><br>
    </form>
</form>

</body>
</html>