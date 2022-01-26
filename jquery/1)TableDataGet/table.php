<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>


</head>
<body>
    <table border="1" id="mytable">
  <tr>
    <th class="id">Id</th>
    <th class="name">Name</th>
    <th>Age</th>
    <th>location</th>
    <th class="result">Result</th>
  </tr>
 


 <tr>
    <td ><input class="id" type="number" value="1"></td>
    <td ><input class="name" type="number" value="Kamal"></td>
        <td class="age">24</td>
    <td class="location">Data</td>
    <td > <input class="result" type="number" value="3.8"> </td>

  </tr>

   <tr>
    <td > <input class="id" type="number" value="3"> </td>
    <td ><input class="name" type="number" value="Jamal"></td>
        <td class="age">24</td>
    <td class="location">Data</td>
    <td > <input class="result" type="number" value="3.9"> </td>

  </tr>
 
</table>
</body>
</html>


    <script>
    $('#mytable tr').each(function() {
          var currentRow = $(this).closest("tr");

          var id =     currentRow.find(".id").val(); 
          var result = currentRow.find(".result").val(); 

    
        alert(id);
                alert(result);


        // alert(customerRes);

});
</script>