<?php



require 'database.php';

$search = $_POST['search'];
$sql = "SELECT * from superheroes where ID = $search";


//hier wordt de query uitgevoerd met de database
$result = mysqli_query($conn, $sql);


$superheroes = mysqli_fetch_all($result, MYSQLI_ASSOC);





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    // Hier komen alle superheroes
    <main>
        <form action="index.php" method="post">
            <input type="search" name="search" id="search">
            <button type="submit"> </button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Alignment</th>
                    <th>Gender</th>
                    <th>Height</th>
                    <th>Weigth</th>
                    <th>Identity</th>
                    <th>MaritalStatus</th>
                    <th>Eyes</th>
                    <th>Hair</th>
                    <th>PlaceOfBirth</th>
                    <th>Citizenship</th>
                    <th>Occupation</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($superheroes as $superhero) : ?>
                    <tr>
                        <td><?php echo $superhero['ID'] ?></td>
                        <td><?php echo $superhero['Title'] ?></td>
                        <td><?php echo $superhero['Alignment'] ?></td>
                        <td><?php echo $superhero['Gender'] ?></td>
                        <td><?php echo $superhero['Height'] ?></td>
                        <td><?php echo $superhero['Weight'] ?></td>
                        <td><?php echo $superhero['Identity'] ?></td>
                        <td><?php echo $superhero['MaritalStatus'] ?></td>
                        <td><?php echo $superhero['Eyes'] ?></td>
                        <td><?php echo $superhero['Hair'] ?></td>
                        <td><?php echo $superhero['PlaceOfBirth'] ?></td>
                        <td><?php echo $superhero['Citizenship'] ?></td>
                        <td><?php echo $superhero['Occupation'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

</body>

</html>