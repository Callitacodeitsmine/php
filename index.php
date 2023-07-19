<!DOCTYPE html>

<head>
    <title>Document</title>
</head>

<body>
    <h1>Sample</h1>
    <h3>Student Enrollment Form</h3>
    <form action="index.php" method="post">
        <label for="Name">Name: </label>
        <input type="text" name="Name" id="Name" placeholder="Enter your name">
        <br>
        <br>
        <label for="Email">Email: </label>
        <input type="email" name="Email" id="Email" placeholder="Enter your email">
        <br>
        <br>
        <label for="Website">Website: </label>
        <input type="text" name="Website" id="Website" placeholder="Enter your website">
        <br>
        <br>
        <label for="Gender">Gender: </label>
        <input type="radio" name="a" id="a" value="Male">Male
        <input type="radio" name="a" value="Male">Female
        <br>
        <br>
        <label for="Skills">Skills: </label>
        <input type="checkbox" name="Skills" id="Skills" value="HTML">HTML, 
        <input type="checkbox" name="Skills" id="Skills" value="CSS">CSS, 
        <input type="checkbox" name="Skills" id="Skills" value="PHP">PHP, 
        <input type="checkbox" name="Skills" id="Skills" value="JavaScript">JavaScript, 
        <br>
        <br>
        <input type="submit" name="submit">
        <button type="reset"> Clear</button>
    </form>
</body>

<?php
if (isset($_REQUEST['submit'])) {

    $name = $_REQUEST['Name'];
    $email = $_REQUEST['Email'];
    $website = $_REQUEST['Website'];
    $gender = $_REQUEST['a'];
    $skills = $_REQUEST['Skills'];

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Website: " . $website . "<br>";
    echo "gender: " . $gender . "<br>";
    echo "skills: " . $skills . "<br>";
}
?>

</body>

</html>