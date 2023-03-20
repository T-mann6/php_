<form method="post" enctype="multipart/form-data">
    <h3>Select Image File to Upload:</h3><br>
    <input type="file" name="file">
    <input type="submit" name="submit" value="Upload"><br><br>
</form>

<?php
include "azure.php";
$statusMsg = '';

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    $targetDir = "img/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            $sql = "INSERT into media (media_navn, idbruker, date) VALUES ('$fileName', '$id', NOW())";
            $insert = $con->query($sql);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded succesfully.";
            }else{
                $statusMsg = "File upload failed, please try again. <br>($con->error)";

            }
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload';
}

echo $statusMsg;
?>