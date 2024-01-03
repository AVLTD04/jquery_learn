<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery IsEmptyObject() || isPlainObject() || isFunction() || isNumeric() || isWindow() || isXMLDoc() || Array Map </title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>

</head>

<body>

    <!-- 
    /*
        IsEmptyObject()
        isPlainObject()
        isFunction()
        isNumeric() 
        isWindow() 
        isXMLDoc()
        --------------------------------------------------
        Array  Map 
        Array Merge 
        .noConflict()
        Date.now() -> New  ||  jquery.now() -> old 
    */
-->

    <div>
        <p>THe IsEmptyObject State IS :: <span id="T-isEmptyObject"></span></p>
        <p>THe isPlainObject State IS :: <span id="T-isPlainObject"></span></p>
        <p>THe isFunction State IS :: <span id="T-isFunction"></span></p>
        <p>THe isNumeric State IS :: <span id="T-isNumeric"></span></p>
        <p>THe isWindow State IS :: <span id="T-isWindow"></span></p>
        <p>THe isXMLDoc State IS :: <span id="T-isXMLDoc"></span></p>
    </div>
    <hr>
    <div>
        <p>THe IsEmptyObject State IS :: <span id="F-isEmptyObject"></span></p>
        <p>THe isPlainObject State IS :: <span id="F-isPlainObject"></span></p>
        <p>THe isFunction State IS :: <span id="F-isFunction"></span></p>
        <p>THe isNumeric State IS :: <span id="F-isNumeric"></span></p>
        <p>THe isWindow State IS :: <span id="F-isWindow"></span></p>
        <p>THe isXMLDoc State IS :: <span id="F-isXMLDoc"></span></p>
    </div>

    <hr>
    <hr>

    <div>
        <p>All Items Are In <code>li</code> Tag Are Now An Array Value
        <p>
        <ul>
            <li>Array_Item-1 , </li>
            <li>Array_Item-2 , </li>
            <li>Array_Item-3 , </li>
            <li>Array_Item-4 , </li>
            <li>Array_Item-5 , </li>
            <li>Array_Item-6 , </li>
            <li>Array_Item-7 , </li>
            <li>Array_Item-8 , </li>
            <li>Array_Item-9 , </li>
            <li>Array_Item-10 , </li>
        </ul>
        <p>Array Is :</p>
        <b>
            <div id="showArray"></div>
        </b>
        <hr>
        <div id="showNewArray"></div>
    </div>
</body>
<script>
    $(document).ready(function() {


        /*****************************************  Checking  The Object Is Empty Or NOt  **************************************/
        $("#T-isEmptyObject").text($.isEmptyObject({})); // true;
        $("#F-isEmptyObject").text($.isEmptyObject({
            foo: "bar"
        })) // false;
        /**********************************************************************************************************************/


        /**************************  Checking  The Object Is Plain  Or NOt (Mean Object HAs No DTA Or String Its Simmilar As Empty )  **************************************/
        $("#T-isPlainObject").text($.isPlainObject({})); // true;
        $("#F-isPlainObject").text($.isPlainObject("bar")) // false;
        /*******************************************************************************************************************************************************************/


        /*****************************************  Checking  The Object Is A Function Or NOt  **************************************/

        var objs = [
            function stub() {}, //Object 0 Is Function
            null, //Object 1 IS Not Function
            "function" //Object 2 IS Not Function
        ];

        $("#T-isFunction").text($.isFunction(objs[0])); // true;
        $("#F-isFunction").text($.isFunction(objs[1])) // false;

        /**********************************************************************************************************************/

        /*****************************************  Checking  The Object Is A Numeric VAlue  Or NOt  ************************************************/

        $("#T-isNumeric").text($.isNumeric("0xFF")); // true;
        $("#F-isNumeric").text($.isNumeric("7.2acdgs")) // false;
        /****************************************************************************************************************************************/

        /*****************************************  Checking  The Object Is Window  Or NOt  **************************************/

        $("#T-isWindow").text($.isWindow(window)); // true;
        $("#F-isWindow").text($.isWindow()) // false;
        /**********************************************************************************************************************/


        /*****************************************  Checking  The Object Is Xml Doc  Or NOt  **************************************/

        var xml = "<rss version='2.0'>" +
            "<channel>" +
            "<body>String : parseXML</body>" +
            "</channel>" +
            "</rss>",
            xmlDoc = $.parseXML(xml);

        $("#T-isXMLDoc").text($.isXMLDoc(xmlDoc)); // true;
        $("#F-isXMLDoc").text($.isXMLDoc(document.body)) // false;

        /**********************************************************************************************************************/


        /***************** MAking A Array using Elements Of html Data ***************************************************/
        // Returns a NodeList
        var elems = $("li").text();
        // Convert the NodeList to an Array
        var arr = $.makeArray(elems);
        // var afteradd = arr.join(" , ");

        $("#showArray").text(JSON.stringify(arr));

        /**********************************************************************************************************************/


        

        /********************************************** Array Merge With NoConflict And Current Time***********************************************************/
        myvar = $.noConflict(); //I Avoided $ To MyNew variable 

        var newArray = myvar.merge([" newData-1  ", " date2 ", 995511], arr); // Syntax :  newArray = $.merge([data], oldArray);
        myvar("#showNewArray").text(newArray + Date.now()); // Date.Now() Show Current Time Instead  OF Jquery.now() [Not Used Above 3.5 ]

        /**********************************************************************************************************************/


        /***************************** Select LAst Child Of Element ******************************************/
        myvar("div li:last-child" ).css({ color:"red"});
        /*******************************************************************************************************/
    })
</script>

</html>