<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

    <title>Document</title>
    
    <script>

        info = [];

info[0] = {
    firstName:"John", 
    lastName:"Doe",
     age:46
     };

     
info[1] = {
    firstName:"Mahmud", 
    lastName:"Hosen",
     age:43
     };


$.ajax({
   type: "POST",
   data: {info:info},
   url: "test2.php",
    success:function(data) {
            alert(data);
        }
});
    </script>
</head>
<body>
    
</body>
</html>