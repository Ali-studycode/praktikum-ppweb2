<?php
require_once("Buku_tamu.php");
session_start();

if(!isset($_SESSION['bukutamu'])) {
    $_SESSION['bukutamu'] = [];
}

if(isset($_POST['submit'])) {
    // Membuat object Buku Tamu
    $_bukutamu = new BukuTamu();

    // Mengisi properti Buku Tamu dengan timestamp, fullname, email dan message 
    $_bukutamu->timestamp = date("D-M-Y H:i:s");
    $_bukutamu->fullname = $_POST['fullname'];
    $_bukutamu->email = $_POST['email'];
    $_bukutamu->message = $_POST['message'];

    // Menggunakan Array Pushx  
    array_push($_SESSION['bukutamu'], $_bukutamu);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Daftar Kunjungan</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Timestamp</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['bukutamu'] as $entry): ?>
                    <tr>
                        <td>
                            <?php echo htmlspecialchars($entry->timestamp); ?>
                        </td>
                    
                        <td>
                            <?php echo htmlspecialchars($entry->fullname); ?>
                        </td>
                    
                        <td>
                            <?php echo htmlspecialchars($entry->email); ?>
                        </td>
                    
                        <td>
                            <?php echo htmlspecialchars($entry->message); ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>                                          
        <a href="Kelas.php">&lt;&lt;&lt; Kembali></a>
        <br>
    </div>
</body>
</html>