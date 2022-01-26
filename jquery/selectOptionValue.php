<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>jQuery Get Selected Option Value</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("select.country").change(function() {
            var selectedCountry = $(this).children("option:selected").val();
            alert("You have selected the country - " + selectedCountry);
        });
    });
    </script>
</head>

<body>
    <form>
        <label>Select Country:</label>
        <select class="country">
            <option value="usa">United States</option>
            <option value="india">India</option>
            <option value="uk">United Kingdom</option>
        </select>
    </form>
</body>

</html>