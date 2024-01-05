<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.searlize() || .searlizedArray() || submit Event  </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <form enctype="multipart/form-data">
        <div class="form-group">
            <div class="form-group mb-2">
                <label for="inputAddress">First Name</label>
                <input type="text" name="regfname" class="form-control" id="inputAddress" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <label for="inputAddress">Last Name</label>
                <input type="text" name="reglname" class="form-control" id="inputAddresS2" placeholder="" required>
            </div>
            <div class="form-group mb-2">
                <!-- <h2 class="text-center">img</h2> -->
            </div>

            <div class="form-group mb-2">
                <label for="inputEmail4">Email</label>
                <input type="email" name="regemail" class="form-control" id="inputEmail4" placeholder="Email" required>
            </div>

            <!-- <div class="mb-3">
                <label for="fileToUpload" class="form-label">Upload USer Image file input example</label>

                <input type="file" id="file" class="form-control" name="FileToUpload" />
            </div> -->


            <div class="form-group mb-2">
                <label for="inputPassword4">Password</label>
                <input type="password" name="regpswrd1" class="form-control" id="inputPassword4" placeholder="Password" autocomplete="section-blue shipping street-address" required>
            </div>

            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Show Password</label>
            </div>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" value="1" checked name="status" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Active </label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" value="0" name="status" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Inactive (Viwer)</label>
            </div>

            <button type="submit">Sign in</button>

        </div>
    </form>



    <!-- Main Our Output PArt  -->
    <div id="serialize"></div>
    <div id="serializeArray"></div>


</body>

<script>
    $(document).ready(function() {

        $("form").on("submit", function(event) {
            event.preventDefault();

            var strser = $("form").serialize();

            var strserArray = $(":input").serializeArray();

            $("#serialize").text(strser).css({
                "color": "red",
                "font-weight": "bolder",
                "font-size": "20px"
            });

            $.each(strserArray, function(i, field) {
                $("#serializeArray").append(field.value + " ").css({
                    "color": "red",
                    "font-weight": "bolder",
                    "font-size": "20px"
                });
            });

        })
    });
</script>

</html>