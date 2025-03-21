<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>Data Prodi</h1>
    <br>
    <table border ="1" cellspacing="0" cellpading="5">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kaprodi</th>
            </tr>
        </thead>
        
        <tbody>
    <?php
    $i = 1;
    foreach ($data as $d) : ?>
        <tr>
            <td> <?php echo $i++; ?> </td>
            <td> <?php echo $d["nama"] ?> </td>
            <td> <?php echo $d["kaprodi"] ?> </td>
        </tr>   
    <?php endforeach; ?>

</tbody> 
</body>
</html>