<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Join Us | NganjukFit Gym</title>
  <link rel="stylesheet" href="nganjukfit-gym/css/main.css" />
</head>
<body>
  <header class="header">
    <div class="logo">💪 NganjukFit Gym</div>
    <nav class="nav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="programs.html">Program</a></li>
        <li><a href="join.php" class="active">Join</a></li>
      </ul>
    </nav>
  </header>

  <section class="join">
    <h1>Bergabung Sekarang!</h1>
    <p>Isi data berikut untuk mendaftar sebagai member NganjukFit Gym 💪</p>

    <form method="POST">
      <input type="text" name="nama" placeholder="Nama Lengkap" required />
      <input type="email" name="email" placeholder="Email Aktif" required />
      <input type="text" name="telepon" placeholder="Nomor Telepon" required />
      <textarea name="pesan" placeholder="Tujuan latihan kamu..." required></textarea>
      <button type="submit" name="daftar">Kirim</button>
    </form>

    <?php
      if(isset($_POST['daftar'])){
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $telepon = htmlspecialchars($_POST['telepon']);
        $pesan = htmlspecialchars($_POST['pesan']);

        echo "<div class='result'>";
        echo "<h3>Terima kasih, $nama!</h3>";
        echo "<p>Kami akan menghubungi kamu di <strong>$email</strong> atau <strong>$telepon</strong>.</p>";
        echo "<blockquote>Motivasi kamu: \"$pesan\"</blockquote>";
        echo "</div>";
      }
    ?>
  </section>

  <footer>
    <p>© 2025 NganjukFit Gym | Dibuat oleh Angga Putra</p>
  </footer>
</body>
</html>
