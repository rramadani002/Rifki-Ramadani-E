<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>

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
            background: white;
            padding: 25px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 12px 28px rgba(0,0,0,0.18);
            z-index: 1;
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

        h1 {
            font-size: 20px;
            color: #1b5e20;
        }

        h2 {
            color: #2e7d32;
            margin-bottom: 10px;
        }

        p {
            margin: 6px 0;
            color: #444;
            font-size: 15px;
        }

        .btn {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 20px;
            background: #2e7d32;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .btn:hover {
            background: #1b5e20;
        }

        /* POPUP MODAL*/
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
            z-index: 10;
        }

        .modal-content {
            background: white;
            width: 380px;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            animation: zoomIn 0.3s ease;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.7);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .close {
            float: right;
            font-size: 20px;
            cursor: pointer;
            color: #888;
        }

        .close:hover {
            color: #000;
        }
    </style>
</head>
<body>

    <!-- CARD UTAMA -->
    <div class="card">
        <h1>Perkenalan Diri</h1>

        <img src="/img/profil2.jpeg" alt="Foto Profil">

        <h2>Rifki Ramadani</h2>
        <p><b>NIM   :</b> E41241869</p>

        <!-- LINK / BUTTON -->
        <a class="btn" onclick="openModal()">Lihat Profil</a>
    </div>

    <!-- POPUP MODAL -->
    <div class="modal" id="profileModal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>

            <img src="/img/profil2.jpeg" alt="Foto Profil">

            <h2>Rifki Ramadani</h2>
            <p><b>Jurusan  :</b> Teknologi Informasi</p>
            <p><b>Prodi    :</b> Teknik Informatika</p>
            <p><b>Semester :</b> 4 (Genap)</p>
            <p><b>Golongan :</b> E</p>
           
            <p>
                Mahasiswa Teknik Informatika semester 4
                yang sedang belajar mengenai pengembangan aplikasi web
                berbasis Laravel.
            </p>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("profileModal").style.display = "flex";
        }

        function closeModal() {
            document.getElementById("profileModal").style.display = "none";
        }
    </script>

</body>
</html>
