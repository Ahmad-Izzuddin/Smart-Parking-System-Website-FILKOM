<!DOCTYPE html>
<html>
<head>
  <title>Halaman Utama</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    h1 {
      margin: 0;
      font-size: 24px;
    }
    .nav-links {
      margin-top: 20px;
    }
    .nav-links a {
      color: #fff;
      text-decoration: none;
      margin-right: 20px;
    }
    .nav-links a:hover {
      text-decoration: underline;
    }
    .content {
      text-align: center;
      margin-top: 50px;
    }
    img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>
  <header>
    <h1>Live Report</h1>
    <div class="nav-links">
      <a href="Haldepan.php">Halaman Utama</a>
      <a href="sisa_slot.php">Sisa Slot</a>
    </div>
  </header>

  <div class="content">
  <div id="player"></div>

<script>
    // Fungsi callback yang dipanggil saat pemutar YouTube siap
    function onYouTubeIframeAPIReady() {
        // Buat objek pemutar YouTube
        var player = new YT.Player('player', {
            width: '640',
            height: '360',
            videoId: 'ijDHFRD0YJY', // ID video live streaming
            playerVars: {
                'autoplay': 1, // Memutar otomatis
                'controls': 1, // Menampilkan kontrol pemutar
                'rel': 0, // Tidak menampilkan video terkait setelah pemutaran selesai
                'showinfo': 0, // Menyembunyikan informasi video
                'iv_load_policy': 3 // Menyembunyikan anotasi video
            }
        });
    }
</script>

<script>
    // Mengatur waktu tunggu agar pemutar YouTube API dimuat sebelum memanggil fungsi onYouTubeIframeAPIReady()
    var tag = document.createElement('script');
    tag.src = 'https://www.youtube.com/iframe_api';
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
</script>

  </div>

</body>
</html>
