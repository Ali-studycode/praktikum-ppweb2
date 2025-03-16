<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman Perpustakaan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Selamat Datang di Perpustakaan STT-NF</h2>
    <p>Silahkan isi form buku tamu dibawah ini!</p>
    <hr/>

<form method="POST" action="Kunjungan.php">
  <div class="form-group row">
    <label for="Full Name" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="Full Name" name="fullname" type="text" class="form-control" aria-describedby="Full NameHelpBlock" required="required"> 
      <span id="Full NameHelpBlock" class="form-text text-muted">Isi nama lengkap mu!</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-4 col-form-label">E-Mail</label> 
    <div class="col-8">
      <input id="Email" name="email" type="text" class="form-control" required="required" aria-describedby="EmailHelpBlock"> 
      <span id="EmailHelpBlock" class="form-text text-muted">Isi Email punyamu!</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="message" class="col-4 col-form-label">Keperluan?</label> 
    <div class="col-8">
      <textarea id="message" name="message" cols="40" rows="5" class="form-control" required="required" aria-describedby="messageHelpBlock"></textarea> 
      <span id="messageHelpBlock" class="form-text text-muted">Tulis keperluanmu, mengunjungi perpustakaan ini.</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>