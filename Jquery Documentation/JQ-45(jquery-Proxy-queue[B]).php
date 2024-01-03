<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery Proxy || Jquery Queue </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <!-- Proxy  -->
    <button id="proxy">TEst Proxy Data</button>
    <button id="queueSeq">TEst Queue Data</button>
    <p></p>
    <!--------------------------------------------------------------------------->



    <!-- Queue  -->
    <div id="box"></div>
    <div class="queue"></div>
    <!-------------------------------------------------------------->
</body>
<script>
    $(document).ready(function() {

        /******************************* Proxy Block **************************************************************/
        var objPerson = {
            name: "John Doe",
            age: 32,
            test: function() {
                $("p").after("Name: " + this.name + "<br> Age: " + this.age + "<hr>");
            }
        }
        $("#proxy").click($.proxy(objPerson, "test"));
        /************************************************************************************************************/

        /**************************** Queue Topic Block *********************************************************/

        $("#queueSeq").click(function() {
            var myDiv = $("div");
            myDiv.show(5000);


            myDiv.queue(function() {
                var that = $(this);
                that.text("Hello TExt-1");
                that.dequeue();
                $(".queue").text("The Lenth Of Queue IS " + myDiv.queue().length);
            });
            myDiv.queue(function() {
                var that = $(this);
                that.text("newcolor -2");
                that.dequeue();
                $(".queue").text("The Lenth Of Queue IS " + myDiv.queue().length);
            });

            /*************************************************************************************************/

        })
        
    });
</script>

</html>