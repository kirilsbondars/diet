<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="my_form">
        <label>Name</label>
        <input type="text" name="name">
        <label>Email</label>
        <input type="email" name="email">
        <label>Website</label>
        <input type="url" name="website" />
        <input type="submit" name="submit" value="Submit Form" />
        <div id="server-results">

        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $("#my_form").submit(function(event){
            event.preventDefault();
            console.log("hello");
        });
    </script>
</body>
</html>