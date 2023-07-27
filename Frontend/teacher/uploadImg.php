<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Img Preview</title>
    <?php include"../assets/header.php";?>

</head>
<body>
    <input type="file" name="upload" id="upload">
    <img src="#" id="img" alt="img" class="mt-20 m-5" style="border:solid #000 1px;width:10%;height:50%;">
</body>
</html>
<script>


    $(document).ready(() =>{
        $('#upload').change(function(){ 
            const file = this.files[0];
            if(file){
                let reader = new FileReader();
                reader.onload = function (event){
                    $('#img').attr("src", event.target.result);
                };
                reader.readAsDataURL(file);
            }
        });
    });

</script>