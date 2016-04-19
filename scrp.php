<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <?php


        echo "Finished All SSH Lessons";
/*
        $latlng = "44.3585230889,8.57745766643";
$lang = "it";
$geocodeURL = "http://maps.googleapis.com/maps/api/geocode/json?latlng=$latlng&sensor=false&language=$lang";

$ch = curl_init($geocodeURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode == 200) {
    $geocode = json_decode($result);

    $location   = $geocode->results[0]->address_components[0]->long_name;
    $city       = $geocode->results[0]->address_components[1]->long_name; 
    $province   = $geocode->results[0]->address_components[2]->long_name; 
    $region     = $geocode->results[0]->address_components[3]->long_name;
    $country    = $geocode->results[0]->address_components[4]->long_name;

    $geo_status = $geocode->status;     
    $geo_str    = "$location, $city, $province, $region, $country";
} else {
    $geo_status = "HTTP_FAIL_$httpCode";
    $geo_str    = "Failed: $geo_status";
}


 function curl($url) {
     e  $ch = curl_init();  // Initialising cURL
        curl_setopt($ch, CURLOPT_URL, $url);    // Setting cURL's URL option with the $url variable passed into the function
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Setting cURL's option to return the webpage data
        $data = @curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
        curl_close($ch);    // Closing cURL
        return $data;   // Returning the data from the function
    }
    
    echo $scraped_website = curl("https://www.doctorvicks.com"); 


*/
           // Defining the basic cURL function
   


 // create a new cURL resource
 
        ?>
     </body>
</html>
