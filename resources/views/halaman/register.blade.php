<!DOCTYPE html>
<html lang="en">
<head>
    @extends('layout.master')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Latidhan Tugas1 buat form</title>
</head>
<body>
    @section('judul')
   Buat Account Baru!
    @endsection

    @section('content')
    <h3>Sign Up Form</h2>
        <form action="/welcome">
            <div>
                <label>First Name:</label><br><br>
                    <input type="text" name="fname"><br><br>
            </div>
            <div>
                <label>Last Name:</label><br><br>
                    <input type="text" name="lname"><br><br>
            </div>
            <div>
                <label>Gender:</label><br><br>
                    <input type="radio" name="male">
                        <label>Male</label><br>
                    <input type="radio" name="female">
                        <label>Female</label><br>
                    <input type="radio" name="other">
                        <label>Other</label><br><br>
                <label>Nationality:</label><br>
            </div>
            <p></p>
                <div>
                <select name="nationality" id="nt">
                <option value="Indonesia">Indonesia</option>
                <option value="Indonesia">Malaysia</option>
                <option value="Indonesia">Singapur</option>
                <option value="Indonesia">Vietnam></option>
                </select><br><br>
            </div>
            <div>
                <label>Language Spoken:</label><br><br>
                    <input type="checkbox">
                        <label>Bahasa Indonesia</label><br>
                    <input type="checkbox">
                        <label>English</label><br>
                    <input type="checkbox">
                        <label>Other</label><br>
            </div>
            <div>
                <p>Bio:</p>
                    <textarea name="message" style="width:200px; height:200px;"></textarea>
            </div>
            <p></p>
            <input type="submit" value="Sign Up" >
        </form>
        @endsection

</body>
</html>