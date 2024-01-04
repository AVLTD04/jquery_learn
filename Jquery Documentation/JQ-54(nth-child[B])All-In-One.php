<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>nth-last-of-type demo</title>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

  <style>
    div {
      float: left;
      border: 1px solid black;
    }

    span {
      color: blue;
      font-size: 18px;
    }

    #inner {
      color: red;
    }

    td {
      width: 50px;
      text-align: center;
    }

    table {
      border: 2px solid black;
      margin: 5px;
    }
  </style>


</head>

<body>


  <h3>Nth Child</h3>
  <div>
    <button>:nth-child(even)</button>
    <button>:nth-child(odd)</button>
    <button>:nth-child(3n)</button>
    <button>:nth-child(2)</button>
    <button>:nth-child(3n+1)</button>
    <button>:nth-child(3n+2)</button>
  </div>
  <hr><br>
  <h3>nth last child </h3>
  <div>
    <button>:nth-last-child(even)</button>
    <button>:nth-last-child(odd)</button>
    <button>:nth-last-child(3n)</button>
    <button>:nth-last-child(2)</button>
    <button>:nth-last-child(3n+1)</button>
    <button>:nth-last-child(3n+2)</button>
  </div>

  <hr><br>
  <h3>nth-of-type</h3>
  <div>
    <button>:nth-of-type(even)</button>
    <button>:nth-of-type(odd)</button>
    <button>:nth-of-type(3n)</button>
    <button>:nth-of-type(2)</button>
    <button>:nth-of-type(3n+1)</button>
    <button>:nth-of-type(3n+2)</button>
  </div>

  <hr><br>

  <h3>Nth Last Of Type </h3>
  <div>
    <button>:nth-last-of-type(even)</button>
    <button>:nth-last-of-type(odd)</button>
    <button>:nth-last-of-type(3n)</button>
    <button>:nth-last-of-type(2)</button>
    <button>:nth-last-of-type(3n+1)</button>
    <button>:nth-last-of-type(3n+2)</button>
  </div>


  <br><br><br>
  <hr>

  <div>
    <table>
      <tr>
        <td>John</td>
      </tr>
      <tr>
        <td>Karl</td>
      </tr>
      <tr>
        <td>Brandon</td>
      </tr>
      <tr>
        <td>Benjamin</td>
      </tr>
    </table>
  </div>


  <div>
    <table>
      <tr>
        <td>Sam</td>
      </tr>
    </table>
  </div>


  <div>
    <table>
      <tr>
        <td>Glen</td>
      </tr>
      <tr>
        <td>Tane</td>
      </tr>
      <tr>
        <td>Ralph</td>
      </tr>
      <tr>
        <td>David</td>
      </tr>
      <tr>
        <td>Mike</td>
      </tr>
      <tr>
        <td>Dan</td>
      </tr>
    </table>
  </div>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <hr>
  <span>tr :: <span id="inner"></span></span>

  <script>
    $("button").on("click", function() {
      var str = $(this).text();
      $("tr").css("background", "white");
      $("tr" + str).css("background", "#ff0000");
      $("#inner").text(str);
    });
  </script>

</body>

</html>