<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Closest </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>
    <div>
        no Block InneR This Block
        <ol>
            <li>block-1</li>
            <li>Block-2
                <ul>
                    <li class="target_block">A</li>
                    <li>B
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                        </ul>
                    </li>
                    <li>C</li>
                </ul>
            </li>
            <li>Block-3</li>
        </ol>
        <h4>Normal Box Of Head</h4>
    </div>
</body>
<script>
    $(document).ready(function () {
        /* here We Find A Nearest Element Block Of Class target_block Which IS Highlighted  */
        $("li.target_block").closest("ul").css("background-color", "green");
    })
</script>

</html>