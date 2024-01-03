<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event PT-2 ....</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>

<body>

    <!-- Checking Propagination  -->
    <button id="checkState">Check State</button>
    <button id="stop">Immediate Stop State</button>
    <div id="log"></div>
    <!------------------------------------------------------------>

    
    <!-- For Check Meta Key  -->
    <hr>
    <hr>
    <span>For Check This You Neesd To <br> Check With Any Key And <br>Check With Wndows Key :: </span>
    <button id="checkMetaKey">Check MetaKey Press WinKey + This Button Or Any Val</button>
    <div id="Metadisplay"></div>
    <!--------------------------->

    <!-- Check For Name Space  -->
    <hr>
    <p id="NameSpace">To See NameSpace Event CLick Me !!! </p>
    <!-------------------------------------->

    <!-- Displays The Mouse Postion In The Document  -->
    <hr>
    <h1>
        <p id="Pagexy"></p>
    </h1>
    <!----------------------------------------->

    <!-- Related Target  -->
    <hr>
    <p>
    <h2 id="RealteTarget">
        Mouse Over Me I Can Say What Block You Leave
    </h2>
    <span id="TArgetDisplay"></span>
    </p>
    <hr>
    <!----------------------------------------->

    <!-- FOr Display Clicked Target IN Body  -->
    <div id="DisplayBodyTarget">0</div>
    <hr>
    <!------------------------------------------>

    <!-- Event For Time Stamp And Which Key Pressed -->
    <input id="whichbtn" value="" placeholder="Enter VAlue">
    <p id="Dispwhich"></p>
    <hr>
    <!------------------------------------------------>

</body>

<script>
    $(document).ready(function () {

        /**********************************************************************************************************************************************
        ****************************************** The Topic IS The  Propagation  Is Stopped Or Not  ***********************************************
        *********************************************************************************************************************************************/

        $("#checkState").click(function (event) {

            /************************************************************************************************
             ***********************  Check The Propagation IS Stopped Or *****************************************  
             ***********************  NOt  isImmediatePropagationStopped Method used For That  *********************
             ******************************************************************************************************/

            if (event.isImmediatePropagationStopped()) {
                $("#log").text("The Block State Is Stopped ");
            } else {
                $("#log").text("The Block State Is Not Stopped ")
            }
        });
        /*************************************************************************************************/
        /* For Stop Immidiate Propagation (Prachar Pashar) */
        $("#stop").click(function (event) {
            event.stopImmediatePropagation();
            $("#log").text("The Block State Is Stopped  ");
        });
        /**********************************************/


        /**********************************************************************************************************************************************
        *************************************************************************************************************************************************
        *************************************************************************************************************************************************/


        /*********************************** Check For MetaKey **********************  */
        $("#checkMetaKey").on("click", function (event) {
            // Event MetaKey Is The Special Keyboard Key
            // On Windows the META key is the Window (⊞ ) key. 
            $("#Metadisplay").text(event.metaKey);
        });
        /*******************************************************************************/


        /****************************************  The NameSpace Event *********************8 */
        $("#NameSpace").on("custom.UserDefined", function (event) {
            alert(event.namespace);
        });
        $("#NameSpace").click(function (event) {
            $(this).trigger("custom.UserDefined");
        });
        /*************************************************************************************/


        /************************************ Page-X And Page-Y *****************************  */
        $(document).on("mousemove", function (event) {
            $("#Pagexy").text("pageX: " + event.pageX + ", pageY: " + event.pageY);
        });
        /***************************************************************************************/

        /************************* Event RelatedTarget + Event Result ****************************/
        $("#RealteTarget").on("mouseout", function (event) {
            $("#TArgetDisplay").text(event.relatedTarget.nodeName + "    " + event.result);
            // $( "#TArgetDisplay" ).html( event.result );
        });
        /****************************************************************************************/

        /*********************************** Global Event Target And Type Of Action [Event Type]  [You Click Any Element It Retunrs That ] ****************************************/
        $("body").click(function (event) {
            $("#DisplayBodyTarget").text("You Clicked Clicked: " + event.target.nodeName + " - - Event IS :  " + event.type); // Event Type IS Used For Check Which Event Is triggered
        });
        /**************************************************************************************************************************************************************/

        /*********************************** The Event Is TimeStamp And Event Which[Which Key OF Event Pressed In MOuse Or Keyboard As ASCII ]  *********************************/
        $("#whichbtn").keydown(function (event) {
            $("#Dispwhich").text(event.type + " : " + event.which + "  And  Time For Event IS " + event.timeStamp); // In TimeStamp event handler, use (new Date).getTime()
        });
        /**********************************************************************************************************************************************************************/

    });
</script>

</html>