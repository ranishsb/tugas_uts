<?php

$album = new App\album();
$rows = $album->tampil();

?>

<h2>Album destinasi kota kisaran</h2>

<a href="index.php?page=album_input">Tambah</a>
<table>
        <tr>
            <th>ID NAMA DESA </th>
            <th>NAMA KEPALA DESA</th>
            <th>ALAMAT</th>
            <th>CONTACT</th>   
            <th>EDIT</th>  
        </tr>
    <?php foreach ($rows as $row) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['text']; ?></td>
            <td><?php echo $row['photo_id']; ?></td>
            <td><a href="index.php?page=edit_album&id=<?php echo $row['id']; ?>">Edit</a></td>
            </td>
        </tr>
    <?php } ?>
        </table>