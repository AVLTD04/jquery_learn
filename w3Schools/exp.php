<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<input type="file" name="file" id="file">
<br />
<br />
Width: <span id='width'></span><br />
Height: <span id='height'></span><br>
<hr>
New Width: <span id='answer1'></span><br>
New Height: <span id='answer2'></span><br>


<img id="myImage" src="">

<script>
    var _URL = window.URL || window.webkitURL;
    $("#file").change(function(e) {
        var file, img;
        if ((file = this.files[0])) {
            img = new Image();
            img.onload = function() {
                var width = this.width;
                var height = this.height;
                var w = $("#width").html(width);
                var h = $("#height").html(height);

                var new_w = 350;
                var mul = new_w * h;
                let new_h = new_w * (height / width);

                document.getElementById("answer1").innerHTML = new_w;
                document.getElementById("answer2").innerHTML = new_h;

                var canvas = document.createElement("canvas");

                canvas.width = new_w;
                canvas.height = new_h;
                var ctx = canvas.getContext("2d");
                ctx.drawImage(img, 0, 0, new_w, new_h);

                dataurl = canvas.toDataURL(file.type);
                document.getElementById("myImage").src = dataurl;

                
            };
            img.src = _URL.createObjectURL(file);
        }
    });
</script>