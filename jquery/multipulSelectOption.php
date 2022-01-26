<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>jQuery Get Values from Multiple Select Box</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $("button").click(function() {
            var countries = [];
            $.each($(".country option:selected"), function() {
                countries.push($(this).val());
            });
            alert("You have selected the country - " + countries.join(", "));
        });
    });
    </script>
</head>

<body>
    <p>Press control key (Ctrl) to select multiple values:</p>
    <form>
        <label>Country:</label>
        <select class="country" multiple="multiple" size="5">
            <option>United States</option>
            <option>India</option>
            <option>United Kingdom</option>
            <option>Brazil</option>
            <option>Germany</option>
        </select>
        <button type="button">Get Values</button>
    </form>
</body>

</html>