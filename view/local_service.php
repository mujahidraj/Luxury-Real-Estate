<?php

    require '../model/config.php';

    if (!isset($_SESSION['client'])) {
        echo "<script>alert('You must login as a client to view this page');</script>";
        echo "<script>window.location.href = 'clientlogin.php';</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Service Directory</title>
    <link rel="stylesheet" href="../design/design_local_service.css">
</head>

<body>
<form action="" id="form" align="center">
    <fieldset >
    <a href="clientdashboard.php"><img src="logos/logo.png" alt="logo" align="center"></a>
    <h1>Local Service Directory</h1>
    <form action="" id="form1" align="center">
   
        <fieldset class="fieldset">
            <legend>Plumber Services</legend>
       
    <table border="1">
        <tr>
            <th>Service</th>
            <th>Contact</th>
            <th>Office/Shop Address</th>
            <th>Rating</th>
            <th>Service Cost</th>
            <th>Verified</th>
            <th>Category</th>
        </tr>
        <tr>
            <td>Prappo Sarker</td>
            <td>017495839192</td>
            <td>Parbotipur,Dinajpur</td>
            <td>4.5</td>
            <td>TK500</td>
            <td>Yes</td>
            <td>Plumber</td>
        </tr>
        <tr>
            <td>Salman Farshi</td>
            <td>01948109808</td>
            <td>Doilarghat,Parbotipur,Dinajpur</td>
            <td>4.5</td>
            <td>TK400</td>
            <td>Yes</td>
            <td>Plumber</td>
        </tr>
        <tr>
            <td>Enan Chowdhury</td>
            <td>02879681094</td>
            <td>Aftabnagar,Dhaka</td>
            <td>4.5</td>
            <td>TK1000</td>
            <td>Yes</td>
            <td>Plumber</td>
        </tr>
      
    </table>
    </fieldset>
    </form>


   
    <form action="" id="form2" align="center">
    <fieldset class="fieldset">
            <legend>Electrician Services</legend>
    <table border="1">
        <tr>
            <th>Service</th>
            <th>Contact</th>
            <th>Office/Shop Address</th>
            <th>Rating</th>
            <th>Service Cost</th>
            <th>Verified</th>
            <th>Category</th>
        </tr>
        <tr>
            <td>Alin Das</td>
            <td>01854930193</td>
            <td>Dawanhat,Chittagon</td>
            <td>4.3</td>
            <td>TK700</td>
            <td>Yes</td>
            <td>Electrician</td>
        </tr>
        <tr>
            <td>Mustakim Jarif</td>
            <td>01965932190</td>
            <td>Ahulia , Savar</td>
            <td>4.3</td>
            <td>Tk700</td>
            <td>Yes</td>
            <td>Electrician</td>
        </tr>
        <tr>
            <td>Toufiqul Tamim</td>
            <td>017238033492</td>
            <td>Sector 9 , Uttara, Dhaka</td>
            <td>4.3</td>
            <td>TK700</td>
            <td>Yes</td>
            <td>Electrician</td>
        </tr>
        
    </table>
    </fieldset>
    </form>
   
    
    <form action="" align="center">
    <fieldset class="fieldset">
            <legend>Cleaning Services</legend>
    <table border="1">
        <tr>
            <th>Service</th>
            <th>Contact</th>
            <th>Office/Shop Address</th>
            <th>Rating</th>
            <th>Service Cost</th>
            <th>Verified</th>
            <th>Category</th>
        </tr>
        <tr>
            <td>Farhanaz Kamrun</td>
            <td>018796859302</td>
            <td>Kashiganj , Shirajganj</td>
            <td>4.7</td>
            <td>TK900</td>
            <td>Yes</td>
            <td>Cleaning</td>
        </tr>
        <tr>
            <td>Oishee Jahan</td>
            <td>0162843029</td>
            <td>Rampura , Dhaka</td>
            <td>4.7</td>
            <td>Tk900</td>
            <td>Yes</td>
            <td>Cleaning</td>
        </tr>
        <tr>
            <td>Faria Rahaman Richi</td>
            <td>01948392029</td>
            <td>Uttar Khan , Dhaka</td>
            <td>4.7</td>
            <td>TK900</td>
            <td>Yes</td>
            <td>Cleaning</td>
        </tr>
       
    </table>
    </fieldset>
    </form>
   
  
    <form action="" align="center">
    <fieldset class="fieldset">
            <legend>Gardener Services</legend>
    <table border="1">
        <tr>
            <th>Service</th>
            <th>Contact</th>
            <th>Office/Shop Address</th>
            <th>Rating</th>
            <th>Service Cost</th>
            <th>Verified</th>
            <th>Category</th>
        </tr>
        <tr>
            <td>Fidbi Hasan</td>
            <td>01976969940</td>
                    <td>Rayerbag, Dhaka</td>
                    <td>4.2</td>
                    <td>TK800</td>
                    <td>Yes</td>
                    <td>Gardener</td>
                </tr>
                <tr>
                    <td>Ouditi Das</td>
                    <td>01984049201</td>
                    <td>Hasan Bari , UttarKhan , Dhaka</td>
                    <td>4.4</td>
                    <td>TK900</td>
                    <td>No</td>
                    <td>Gardener</td>
                </tr>
                <tr>
                    <td>Siam Sarker</td>
                    <td>01897594029</td>
                    <td>Dhanmondi 27,Dhaka</td>
                    <td>4.4</td>
                    <td>TK900</td>
                    <td>No</td>
                    <td>Gardener</td>
                </tr>
                <tr>
                    <td>Roja Khatun</td>
                    <td>01947391094</td>
                    <td>Mirpur 14 , Dhaka</td>
                    <td>4.4</td>
                    <td>TK900</td>
                    <td>No</td>
                    <td>Gardener</td>
                </tr>
              
            </table>
        </fieldset>
    </form>
    </fieldset>
    </form>
    
</body>
</html>
