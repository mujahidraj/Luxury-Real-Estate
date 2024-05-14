<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Document Upload</title>
    <link rel="stylesheet" href="../design/design_agentfile.css">
</head>
<body>
<form id="fileUploadForm" method="post" action="../controller/agentfilecheck.php" enctype="multipart/form-data" onsubmit="return validateForm()">
        <fieldset>
        <a href="../index.php"><img src="logos/logo.png" alt="logo" align="center"></a>
            <legend><h1>Agent Document Upload</h1></legend>

            <table align="center">
                <tr>
                    <td><h3>Upload your NID Card Image or File : </h3></td>
                    <td><input type="file" name="myfile"></td>
                </tr>
                <tr>
                    <td><h3>Upload your Trade license via PDF : </h3></td>
                    <td><input type="file" name="myfile2"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Upload"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <script src="script/agentfile.js"></script>
</body>
</html>
