<?

$conn = mysqli_connect("localhost", "root", "", "kuliah");
$result = mysqli_query($conn, 'select * from mahasiswa');

var_dump($result);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>Nama</td>
            <td>NIM</td>
            <td>Alamat</td>
            <td>Email</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</body>

</html>