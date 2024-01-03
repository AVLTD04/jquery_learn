<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <form action="" id="formData">
        First Name : <input type="text" value="" name="Fname"><br>
        Last Name : <input type="text" value="" name="Lname"><br>

        Email-ID : <input type="email" name="email" value=""  autocomplete="off"><br>
        PAssword : <input type="password" name="password" value="" autocomplete="off"><br>

        <br>
        Gender
        <select name="gender" class="drop1">
            <option value="">PLease Select</option>
            <option value="M">MAle</option>
            <option value="F">Female</option>
            <option value="O">Other</option>
        </select>
        <br>
        Status
        <select name="status" class="drop2">
            <option value="">PLease Select</option>
            <option value="1">Active</option>
            <option value="0">InActive</option>
        </select><br>

        <input type="submit" value="Register" name="regiser">
    </form>

    <div id="show"></div>
</body>

<script>
    $(document).ready(function() {
        $("form").on("submit", function(e) {
            e.preventDefault();
            
            
            $("#formData input").each(function() {
                console.log($(this).val() + $(this).text()  );
                
            });
            console.log($(".drop1 :selected").text());
            console.log($(".drop2 :selected").text());
            console.log($(".drop1").val());
            console.log($(".drop2").val());
        });

    })
</script>

</html>