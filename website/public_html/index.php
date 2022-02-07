<!DOCTYPE html>
<!-- This is server backend php labeling the HTML table that is to be printed -->
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta-name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Scheduler</title>
</head>

<h1>Course Scheduler</h1>
<body>
    <div><h2>Course Catalog</h2></div>
    <form action='connect.php' method="LIST" id="course-table">
        <label for="dept">Dept Name (For example: MATH): </label>
        <input type="text" name="dept" id="dept" required/> <br><br>

        <label for="number">Course Number (Starts at 100 as first entry): </label>
        <input type="text" name="number" id="number" required/> <br><br>

        <label for="course">Specific Course Name</label>
        <input type="text" name="course" id="course" required/> <br><br>

        <input type="submit" name="submit" id="submit" />
    </form>
</body>
</html>
