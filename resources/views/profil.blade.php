<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perkenalan Diri</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Times New Roman', Times, serif;
            background: linear-gradient(135deg, #2e7d32, #81c784);
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        /* Shape background alam */
        body::before,
        body::after {
            content: "";
            position: absolute;
            width: 450px;
            height: 450px;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
        }

        body::before {
            top: -120px;
            left: -120px;
        }

        body::after {
            bottom: -120px;
            right: -120px;
        }

        .card {
            width: 400px;
            padding: 25px;
            background: white;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            position: relative;
            z-index: 1;
        }

        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #2e7d32;
            margin-bottom: 15px;
        }

        h2 {
            margin: 10px 0;
            color: #2e7d32;
        }

        p {
            margin: 6px 0;
            color: #444;
        }
    </style>
</head>
<body>

    <div class="card">
        <img src="/img/profil.jpeg" alt="Foto Profil">
        <h2>Rifki Ramadani</h2>
        <p><b>NIM:</b> E41241869</p>
        <p><b>Prodi:</b> Teknik Informatika</p>
        <p>
            Saya adalah mahasiswa Teknik Informatika Semester 4 golongan E
            yang tertarik pada pengembangan aplikasi web menggunakan Laravel.
        </p>
    </div>

</body>
</html>
