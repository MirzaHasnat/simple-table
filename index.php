<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <input type="number" id="table"><button onclick="test()">Generate</button>
    <div id="generated"></div>
    <script>
        function test(){
            if(window.XMLHttpRequest){
                var http = new XMLHttpRequest();
            }
            
            http.onreadystatechange = function (){
                if(http.readyState == 4 && http.status == 200){
                    document.getElementById("generated").innerHTML = http.responseText;
                }
            }
            var table_number = document.getElementById("table").value;
        
            http.open("POST",'',true);
            http.setRequestHeader("content-type","application/x-www-form-urlencoded");
            http.send("tableno="+table_number);
        }
    </script>
</body>
</html>
<?php
    if(isset( $_POST["tableno"])){
        $table = $_POST["tableno"];
    for ($i=1;$i<=$table;$i++){
        for($k=1;$k<=10;$k++){
            echo $i." * ".$k." = ".$k*$i."<br>";
        }
        echo"<br><br>";
    }
}
?>
