<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deteksi Penyakit Daun Padi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0faf5;
            font-family: 'Inter', sans-serif; /* Added Inter font */
        }
        .btn-green {
            background-color: #28a745;
            color: white;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            border-radius: 0.5rem; /* Added rounded corners */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Added shadow */
            transition: background-color 0.3s ease; /* Smooth transition */
        }
        .btn-green:hover {
            background-color: #218838;
            color: white;
        }
        .btn-outline-success {
            border-radius: 0.5rem; /* Added rounded corners */
            box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* Added shadow */
            transition: background-color 0.3s ease, color 0.3s ease; /* Smooth transition */
        }
        .btn-outline-success:hover {
            background-color: #28a745;
            color: white;
        }
        .confidence-badge {
            background-color: white;
            border-radius: 12px;
            padding: 10px 15px;
            font-size: 1rem;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        h1 {
            font-size: 3rem;
            line-height: 1.3;
        }
        p {
            font-size: 1.25rem;
        }
        .card-how-it-works {
            border-radius: 1rem; /* Rounded corners for cards */
            box-shadow: 0 8px 16px rgba(0,0,0,0.1); /* Stronger shadow for cards */
            transition: transform 0.3s ease; /* Hover effect */
        }
        .card-how-it-works:hover {
            transform: translateY(-5px); /* Slight lift on hover */
        }
        .icon-circle {
            width: 70px;
            height: 70px;
            background-color: #e6f7ed;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #28a745;
            margin-bottom: 1rem;
        }
        .step-number {
            background-color: #28a745;
            color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-right: 0.5rem;
        }
        .drop-area {
            border: 3px dashed #a7d9b9;
            border-radius: 1rem;
            padding: 3rem;
            text-align: center;
            background-color: #f8fffb;
            transition: background-color 0.3s ease;
        }
        .drop-area:hover {
            background-color: #e6f7ed;
        }
        .drop-area svg {
            color: #28a745;
            font-size: 4rem;
            margin-bottom: 1rem;
        }
        .contact-icon-circle {
            width: 50px;
            height: 50px;
            background-color: #e6f7ed;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #28a745;
            margin-right: 1rem;
        }
        .faq-item {
            background-color: white;
            border-radius: 0.75rem;
            padding: 1.5rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            margin-bottom: 1rem;
        }
        .faq-item strong {
            color: #28a745;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-success fs-4" href="#">
                🌾 Deteksi Penyakit Padi
            </a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav me-3">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kerja">Cara Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#unggah">Unggah</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li> -->
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5" id=beranda>
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="fw-bold mb-4">
                        Deteksi Penyakit Daun Padi<br>dengan <span class="text-success">AI</span>
                    </h1>
                    <p class="text-muted mb-4">
                        Unggah gambar dan dapatkan prediksi penyakit instan dengan wawasan yang dapat ditindaklanjuti.
                        Lindungi tanaman padi Anda dengan kecerdasan buatan mutakhir.
                    </p>
                    <div class="d-flex gap-3 mb-4">
                        <a href="#unggah" class="btn btn-green">Unggah Gambar</a>
                        <a href="#" class="btn btn-outline-success px-4 py-2 fs-5 shadow-sm">Pelajari Lebih Lanjut</a>
                    </div>
                    <div class="d-flex gap-4 text-muted fw-semibold">
                        <div>✅ Akurasi 99%</div>
                        <div>⚡ Hasil Instan</div>
                        <div>🧠 Didukung Ahli</div>
                    </div>
                </div>

                <div class="col-lg-6 text-center position-relative">
                    <div class="border border-3 border-success rounded-4 p-2 bg-white shadow-lg">
                        <img src="image/padi.png" class="img-fluid rounded-4" alt="Daun Padi" style="max-height: 450px; object-fit: cover;">
                    </div>
                    <div class="confidence-badge position-absolute top-0 end-0 translate-middle mt-4 me-4">
                        <span class="text-success fw-bold">●</span> AI Menganalisis
                    </div>
                    <div class="confidence-badge position-absolute bottom-0 start-0 translate-middle-y mb-4 ms-4">
                        <strong>Penyakit Terdeteksi</strong><br><span class="text-success">95% Keyakinan</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white" id=kerja>
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Cara Kerjanya</h2>
            <p class="text-muted mb-5">Dapatkan diagnosis penyakit tanaman profesional dalam tiga langkah sederhana menggunakan platform bertenaga AI kami</p>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card card-how-it-works h-100 p-4">
                        <div class="card-body">
                            <div class="icon-circle mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879L6.415 3.12A3 3 0 0 1 8.585 2h.83a3 3 0 0 1 2.12.879L12.828 5H14a1 1 0 0 1 1 1zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586L10.415 2.586A2 2 0 0 0 8.585 1h-.83a2 2 0 0 0-1.414.586L4.586 4.414A2 2 0 0 1 3.172 5H2a2 2 0 0 0-2 2v6zm5-2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                    <path d="M8 9.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5m0 1a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7"/>
                                </svg>
                            </div>
                            <h5 class="card-title fw-bold mb-3"><span class="step-number">1</span> Unggah Gambar Daun</h5>
                            <p class="card-text text-muted">Ambil foto yang jelas dari daun yang sakit dan unggah ke platform kami. Sistem kami menerima format JPG, PNG, dan WebP.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-how-it-works h-100 p-4">
                        <div class="card-body">
                            <div class="icon-circle mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
                                    <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5M.086 4.152A2.5 2.5 0 0 1 2.5 2h11A2.5 2.5 0 0 1 15.914 4.152L14.21 11.2a2.5 2.5 0 0 1-2.202 1.8H3.992a2.5 2.5 0 0 1-2.202-1.8zm1.088-.867a1.5 1.5 0 0 0-.432.748L.086 4.152A2.5 2.5 0 0 1 2.5 2h11A2.5 2.5 0 0 1 15.914 4.152L14.926 11.2a1.5 1.5 0 0 0 .432.748L15.914 4.152zm-1.088-.867a1.5 1.5 0 0 0-.432.748L.086 4.152A2.5 2.5 0 0 1 2.5 2h11A2.5 2.5 0 0 1 15.914 4.152L14.926 11.2a1.5 1.5 0 0 0 .432.748L15.914 4.152zM4.5 7.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M8 1.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zM3.5 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5zM11.5 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                </svg>
                            </div>
                            <h5 class="card-title fw-bold mb-3"><span class="step-number">2</span> AI Menganalisis Penyakit</h5>
                            <p class="card-text text-muted">Model pembelajaran mesin canggih kami menganalisis gambar, mengidentifikasi pola dan gejala dengan akurasi 99% dalam hitungan detik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-how-it-works h-100 p-4">
                        <div class="card-body">
                            <div class="icon-circle mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
                                    <path d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6.5 7.5l-.549.317a.5.5 0 1 0 .5.866l.549-.317V9.5a.5.5 0 0 0 1 0V8.866l.549.317a.5.5 0 1 0 .5-.866L8.5 7.5l.549-.317a.5.5 0 1 0-.5-.866L7.5 6.134z"/>
                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                            </div>
                            <h5 class="card-title fw-bold mb-3"><span class="step-number">3</span> Dapatkan Diagnosis & Perawatan</h5>
                            <p class="card-text text-muted">Terima identifikasi penyakit instan, skor keyakinan, dan rekomendasi perawatan yang didukung ahli.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 g-4">
                <div class="col-md-4">
                    <div class="card card-how-it-works h-100 p-4">
                        <div class="card-body">
                            <div class="icon-circle mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.472 6.036 8.032a.235.235 0 0 0-.02-.022L4.97 6.97a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.06 0l4.25-4.25a.75.75 0 0 0-1.06-1.06z"/>
                                </svg>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Akurasi Tinggi</h5>
                            <p class="card-text text-muted">Tingkat deteksi penyakit 99%, memastikan hasil yang andal untuk tanaman Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-how-it-works h-100 p-4">
                        <div class="card-body">
                            <div class="icon-circle mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                </svg>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Tersedia 24/7</h5>
                            <p class="card-text text-muted">Akses platform kami kapan saja, di mana saja, untuk bantuan segera.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-how-it-works h-100 p-4">
                        <div class="card-body">
                            <div class="icon-circle mx-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cpu" viewBox="0 0 16 16">
                                    <path d="M5 6a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5A.5.5 0 0 1 5 6zm-.5 3a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                                    <path d="M11.5 0a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zm-10 0a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zM11.5 15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zm-10 0a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 1 .5-.5zM0 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zM15 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zM0 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zM15 9.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
                                    <path fill-rule="evenodd" d="M4.5 2h7A2.5 2.5 0 0 1 14 4.5v7a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 11.5v-7A2.5 2.5 0 0 1 4.5 2zM13 4.5a1.5 1.5 0 0 0-1.5-1.5h-7A1.5 1.5 0 0 0 3 4.5v7A1.5 1.5 0 0 0 4.5 13h7a1.5 1.5 0 0 0 1.5-1.5v-7z"/>
                                </svg>
                            </div>
                            <h5 class="card-title fw-bold mb-3">Didukung AI</h5>
                            <p class="card-text text-muted">Memanfaatkan model pembelajaran mesin terbaru untuk deteksi penyakit yang cepat dan akurat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Upload Your Plant Image Section -->
    <section class="py-5 mb-5" id="unggah">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Unggah Gambar Tanaman Anda</h2>
        <p class="text-muted mb-5">Dapatkan deteksi penyakit bertenaga AI instan dan rekomendasi perawatan</p>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="drop-area border border-2 border-dashed rounded-3 p-5 text-center bg-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cloud-upload text-success mb-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688c1.654 0 2.973-1.332 2.973-2.973 0-1.641-1.32-2.972-2.973-2.972l-.11-.005A5.512 5.512 0 0 0 8 1C6.273 1 4.717 2.115 4.026 3.824l-.158.337-.253.253C2.174 4.545 1 6.002 1 7.773 1 9.569 2.5 11 4.313 11H6a.5.5 0 0 1 0 1H4.313C2.118 12 0 10.279 0 7.773 0 5.432 1.968 3.5 4.157 3.023l.217-.042.213-.415z"/>
                        <path fill-rule="evenodd" d="M11 7.5a.5.5 0 0 1 .5.5v1.5a.5.5 0 0 1-1 0V8a.5.5 0 0 1 .5-.5z"/>
                        <path fill-rule="evenodd" d="M10.354 8.54a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L9.5 7.293V5a.5.5 0 0 1 1 0v2.293l1.146-1.147a.5.5 0 0 1 .708.708l-2 2z"/>
                    </svg>
                    <p class="lead mb-1">Seret dan letakkan gambar Anda di sini</p>
                    <p class="text-muted mb-3">atau</p>
                    <button class="btn btn-success px-4 mb-3" onclick="document.getElementById('fileInput').click()">Jelajahi File</button>
                    <input type="file" id="fileInput" class="d-none">
                    <p class="text-muted"><small>Mendukung: JPG, PNG, WebP (Max 10MB)</small></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="fw-bold mb-3">Misi Kami</h2>
                <p class="lead">Mendukung petani dengan teknologi cerdas, terjangkau, dan mudah diakses untuk deteksi dini penyakit tanaman padi.</p>

                <p class="text-muted">
                    Misi kami di KKN UNEJ adalah memberdayakan petani padi dengan teknologi cerdas yang memungkinkan deteksi dini penyakit. Dengan menggabungkan pengetahuan mendalam tentang pertanian dan teknologi mobile, kami bertujuan meningkatkan produktivitas pertanian, mengurangi gagal panen, dan mendukung pertanian berkelanjutan melalui inovasi pemantauan kesehatan tanaman berbasis AI.
                </p>
                <p class="text-muted">
                    Kami berupaya menjembatani kesenjangan antara teknologi modern dan metode pertanian tradisional dengan menyediakan alat deteksi penyakit canggih yang dapat diakses oleh semua kalangan. Solusi kami berfokus pada kemudahan penggunaan, akurasi, dan dampak nyata untuk membantu petani dalam mengambil keputusan yang tepat waktu dan terinformasi.
                </p>

                <div class="row mt-4">
                    <div class="col-md-4 text-center">
                        <h4 class="fw-bold text-success">95%</h4>
                        <p class="text-muted">Tingkat Akurasi</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4 class="fw-bold text-success">24/7</h4>
                        <p class="text-muted">Tersedia</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4 class="fw-bold text-success">Lokal</h4>
                        <p class="text-muted">Akses</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="p-3 bg-light d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="badge bg-success me-2"></span>
                            <span class="text-success fw-bold">Pemantauan AI</span>
                        </div>
                        <span class="text-muted small">Analisis Real-time</span>
                    </div>
                    <img src="image/pari.jpg" class="img-fluid w-100" alt="Gambar Tanaman Padi">
                    <div class="card-body bg-light">
                        <h6 class="fw-bold mb-1">Deteksi Dini</h6>
                        <p class="small text-muted mb-0">Pencegahan Penyakit Padi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>