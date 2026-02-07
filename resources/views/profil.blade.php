<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Perkenalan Diri</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(135deg, #2e7d32, #a5d6a7);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        body::before,
        body::after {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            background: rgba(255,255,255,0.18);
            border-radius: 50%;
        }

        body::before {
            top: -150px;
            left: -120px;
        }

        body::after {
            bottom: -150px;
            right: -120px;
        }

        .card {
            width: 420px;
            background: #ffffff;
            padding: 25px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 12px 28px rgba(0,0,0,0.18);
            z-index: 1;
        }

        .card h1 {
            font-size: 20px;
            margin-bottom: 15px;
            color: #1b5e20;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #2e7d32;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            margin-bottom: 15px;
        }

        h2 {
            margin: 10px 0;
            color: #2e7d32;
        }

        p {
            margin: 6px 0;
            color: #444;
            font-size: 15px;
        }
    </style>
</head>
<body>

    <div class="card">
        <h1>Tugas Perkenalan Diri</h1>

        <img src="/img/profil2.jpeg" alt="Foto Profil">

        <h2>Rifki Ramadani</h2>
        <p><b>NIM    :</b> E41241869</p>
        <p><b>Jurusan:</b> Teknologi Informasi</p>
        <p><b>Prodi  :</b> Teknik Informatika</p>
        

        <p>
            Saya adalah mahasiswa Teknik Informatika semester 4 golongan E
            yang sedanbg belajar pengembangan aplikasi web
            menggunakan framework Laravel.
        </p>
    </div>

</body>
</html>
