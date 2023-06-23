<!DOCTYPE html>
<html>
<head>
    <title>Database Data</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getData() {
            $.ajax({
                url: "getdata.php",
                success: function(data) {
                    $("#dataContainer").html(data);
                },
                error: function() {
                    $("#dataContainer").html("Error occurred while retrieving data.");
                }
            });
        }

        function chooseRandom() {
            $.ajax({
                url: "chooserandom.php",
                success: function(data) {
                    $("#randomContainer").html(data);
                },
                error: function() {
                    $("#randomContainer").html("Error occurred while choosing random record.");
                }
            });
        }
    </script>
</head>
<body>
    <button onclick="getData()">Get Data</button>
    <div id="dataContainer"></div>
    
    <button onclick="chooseRandom()">Choose Random</button>
    <div id="randomContainer"></div>
</body>
</html>