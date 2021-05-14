<?php
// Include the database configuration file
include ('../config/constants.php');
$statusMsg = '';
$name = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
if(isset($_POST['featured']))
    {
        $featured = $_POST['featured'];
    }
else
    {
        $featured = "No"; //SEtting the Default Value
    }

if(isset($_POST['active']))
    {
        $active = $_POST['active'];
    }
else
    {
        $active = "No"; //Setting Default Value
    }

// File upload path
$targetDir = "../images/uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            $_POST['message']=nl2br($_POST['message']);
            $_description=nl2br(str_replace("'","''",$description));
            // Insert image file name into database
            $insert = $db->query("INSERT into tbl_product (product_name,description,price,featured,active,file_name, uploaded_on) VALUES ('$name','$_description','$price','$featured','$active','".$fileName."', NOW())");
            if($insert){
                header('location:'.SITEURL.'admin-panel/manage-product.php');
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>