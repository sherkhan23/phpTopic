<html>
<title>Send SOAP XML Reqeuest using Custom varaibles</title>
<head>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script>
        function submit_soap(){
            var country=$("#country_name").val();
            var year=$("#year").val();
            $.post("callme.php",{country:country,year:year},
                function(data){
                    $("#xml_response").html(data);
                });
        }
    </script>
</head>
<body>
<center>
    <h3>Send SOAP XML Reqeuest using Custom varaibles</h3>
    <form id="myForm" method="post">
        Country Name : <input name="country_name" id="country_name" type="text" /><br />
        Year: <input name="year" id="year" type="text" /><br />
        <input type="button" value="Submit" onclick="submit_soap()" />
    </form>
    <br>-----------
    <div id="xml_response"></div>
</center>
</body>
</html>

<?php
try{
    $countrycode=$_POST['country'];
    $year=$_POST['year'];
    $soapclient = new SoapClient('http://www.holidaywebservice.com/HolidayService_v2/HolidayService2.asmx?wsdl');
    $param=array('countryCode'=>$countrycode,'year'=>$year);
    $response =$soapclient->GetHolidaysForYear($param);
    echo '<br><br><br>';
    $array = json_decode(json_encode($response), true);

    function dispaly_array_recursive($array_rec){
        if($array_rec){
            foreach($array_rec as $value){
                if(is_array($value)){
                    dispaly_array_recursive($value);
                }else{
                    echo $value.'<br>';
                }
            }
        }
    }
    dispaly_array_recursive($array);
}catch(Exception $e){
    echo $e->getMessage();
}
?>
