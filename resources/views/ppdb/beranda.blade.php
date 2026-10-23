<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB Online | SMP Negeri 1 Pirime</title>
    <style>
        :root{--navy:#102a56;--blue:#1677e8;--yellow:#ffd447;--ink:#1c2c43;--muted:#62718a;--bg:#f4f7fc}
        *{box-sizing:border-box}body{margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,sans-serif;color:var(--ink);background:var(--bg);line-height:1.6}
        header{background:#fff;border-bottom:1px solid #e5ebf4}.nav{max-width:1120px;margin:auto;padding:16px 22px;display:flex;justify-content:space-between;align-items:center;gap:18px}
        .brand{font-weight:800;color:var(--navy)}.brand small{display:block;color:var(--muted);font-weight:500}.nav a{color:var(--navy);text-decoration:none;font-weight:700}
        .btn{display:inline-block;background:var(--yellow);color:var(--navy);font-weight:800;text-decoration:none;padding:12px 18px;border-radius:12px}
        .hero{background:linear-gradient(120deg,#102a56,#1677e8);color:#fff;padding:76px 22px}.hero-inner{max-width:1120px;margin:auto;display:grid;grid-template-columns:1.3fr .7fr;gap:36px;align-items:center}
        .eyebrow{display:inline-block;background:#ffffff20;border:1px solid #ffffff55;padding:6px 12px;border-radius:999px;font-size:13px;font-weight:700}
        h1{font-size:clamp(2.2rem,5vw,3.8rem);line-height:1.08;margin:18px 0}.hero p{color:#e1edff;max-width:620px}.hero-card{background:#fff;color:var(--navy);padding:28px;border-radius:22px;box-shadow:0 20px 55px #071b3b44}
        .hero-card .number{font-size:2rem;font-weight:900}.hero-card p{color:var(--muted)}.section{max-width:1120px;margin:auto;padding:52px 22px}.section h2{color:var(--navy);font-size:1.8rem;margin-top:0}
        .cards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}.card{background:#fff;border:1px solid #e5ebf4;border-radius:18px;padding:22px;box-shadow:0 8px 24px #102a5608}
        .icon{width:44px;height:44px;display:grid;place-items:center;background:#eaf3ff;border-radius:13px;font-size:22px}.card h3{margin-bottom:6px;color:var(--navy)}.card p{margin:0;color:var(--muted)}
        .steps{counter-reset:step}.step{display:flex;gap:14px;margin:16px 0;align-items:flex-start}.step b{background:var(--yellow);color:var(--navy);border-radius:50%;min-width:34px;height:34px;display:grid;place-items:center}
        footer{background:var(--navy);color:#dce8ff;text-align:center;padding:26px 20px}
        @media(max-width:760px){.hero-inner{grid-template-columns:1fr}.hero{padding:48px 20px}.cards{grid-template-columns:1fr}.nav{padding:14px 16px}.nav .links{display:flex;gap:12px;align-items:center}.nav .links a:not(.btn){display:none}.section{padding:38px 18px}}
    </style>
</head>
<body>
<header><nav class="nav"><div class="brand">SMP NEGERI 1 PIRIME<small>Portal PPDB Online</small></div><div class="links"><a href="#informasi">Informasi</a><a href="#alur">Alur</a><a href="{{ route('login.siswa') }}">Masuk</a><a class="btn" href="{{ route('login.siswa') }}">Daftar Sekarang</a></div></nav></header>
<main>
<section class="hero"><div class="hero-inner"><div><span class="eyebrow">PENERIMAAN PESERTA DIDIK BARU</span><h1>PPDB Online<br>SMP Negeri 1 Pirime</h1><p>Selamat datang di portal pendaftaran peserta didik baru. Daftarkan diri dengan mudah, lengkapi dokumen, dan pantau proses pendaftaran secara daring.</p><a class="btn" href="{{ route('login.siswa') }}">Mulai Pendaftaran →</a></div><div class="hero-card"><div class="icon">🎓</div><h2>Langkah awal masa depanmu</h2><p>Siapkan data diri dan dokumen yang diperlukan sebelum mengisi formulir.</p><div class="number">Mudah · Aman · Terarah</div><small>Informasi jadwal resmi akan diumumkan oleh panitia sekolah.</small></div></div></section>
<section class="section" id="informasi"><h2>Informasi PPDB</h2><div class="cards"><article class="card"><div class="icon">📋</div><h3>Persyaratan</h3><p>Siapkan data identitas, kartu keluarga, akta kelahiran, pas foto, dan dokumen kelulusan SD sesuai ketentuan panitia.</p></article><article class="card"><div class="icon">🖥️</div><h3>Pendaftaran Online</h3><p>Buat akun calon siswa, isi formulir bertahap, unggah dokumen yang terbaca jelas, lalu kirim pendaftaran.</p></article><article class="card"><div class="icon">📣</div><h3>Pengumuman</h3><p>Periksa dashboard akun secara berkala untuk melihat status verifikasi, catatan panitia, dan pengumuman resmi.</p></article></div></section>
<section class="section" id="alur"><h2>Alur Pendaftaran</h2><div class="card steps"><div class="step"><b>1</b><div><strong>Registrasi akun</strong><br><span>Buat akun calon siswa untuk memulai.</span></div></div><div class="step"><b>2</b><div><strong>Lengkapi formulir</strong><br><span>Isi data pribadi, orang tua/wali, dan sekolah asal.</span></div></div><div class="step"><b>3</b><div><strong>Unggah dokumen</strong><br><span>Unggah dokumen sesuai daftar persyaratan.</span></div></div><div class="step"><b>4</b><div><strong>Periksa dan kirim</strong><br><span>Pastikan data benar sebelum mengirim pendaftaran.</span></div></div><div class="step"><b>5</b><div><strong>Pantau hasil</strong><br><span>Lihat status pendaftaran dan catatan panitia di dashboard.</span></div></div></div></section>
</main><footer><strong>PPDB Online SMP Negeri 1 Pirime</strong><br>Portal informasi dan pendaftaran peserta didik baru</footer>
</body></html>
