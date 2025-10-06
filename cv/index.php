<?php
$ownerName = "Adriansyah Suryawan";
$ownerTitle = "Full-Stack Web Developer";
$ownerBio = "Full-Stack Web Developer dengan pengalaman membangun aplikasi web produksi: fokus pada performa, maintainability, dan UX. Terbiasa bekerja dengan PHP, JavaScript, dan arsitektur REST/API.";
$ownerEmail = "suryawanadriansyah4@example.com"; // ganti dengan email Anda

// tambahan konfigurasi (opsional, dipakai jika ingin memperluas tampilan)
$location = "Cirebon, Indonesia";
$experienceYears = 2;
$availability = true; // true = terbuka untuk pekerjaan
$resumeLink = "/assets/Adriansyah-Suryawan-Resume.pdf";

$socials = [
  'github' => 'https://github.com/reanzyy',
  'instagram' => 'https://instagram.com/ad.adrian21',
  'facebook' => 'https://facebook.com/adriansyah.suryawan',
];

$projects = [
  [
    'title' => 'Thready',
    'desc' => 'Aplikasi album gambar dengan fitur like, dan comment. Laravel + MySQL, frontend responsif.',
    'tags' => ['Laravel', 'MySQL', 'Jquery', 'Tailwind'],
    'link' => '#',
    'repo' => '',
    'year' => 2024
  ],
  [
    'title' => 'Payroll System',
    'desc' => 'Aplikasi sistem penggajian karyawan dengan fitur manajemen absensi, slip gaji, dan laporan keuangan.',
    'tags' => ['Laravel', 'Node.js', 'MySQL', 'Bootstrap'],
    'link' => '#',
    'repo' => '#',
    'year' => 2025
  ],
  [
    'title' => 'Landing Page Portofolio',
    'desc' => 'Website portofolio personal dengan desain modern, animasi halus, dan responsif di semua perangkat.',
    'tags' => ['React', 'Tailwind'],
    'link' => '#',
    'repo' => '#',
    'year' => 2025
  ],
  [
    'title' => 'Todo App',
    'desc' => 'Aplikasi manajemen tugas sederhana dengan fitur CRUD, penyimpanan lokal, dan UI intuitif.',
    'tags' => ['Nuxt 4', 'Laravel', 'Tailwind'],
    'link' => '#',
    'repo' => '#',
    'year' => 2025
  ],
];

$skills = [
  'HTML/CSS' => 95,
  'JavaScript' => 70,
  'PHP' => 85,
  'SQL' => 80,
  'React' => 75,
  'Nuxt' => 65,
  'Bootstap' => 90,
  'Tailwind' => 80,
];

// ---------- Contact form handling (server-side) ----------
$contactSuccess = false;
$contactError = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
  $cname = trim(strip_tags($_POST['name'] ?? ''));
  // prevent header injection
  $cname = str_replace(["\r", "\n"], '', $cname);
  $cemail = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
  $cmessage = trim(strip_tags($_POST['message'] ?? ''));

  if (!$cname || !$cemail || !$cmessage) {
    $contactError = "Mohon isi semua field dengan benar.";
  } else {
    $subject = "Pesan Portofolio dari $cname";
    $body = "Nama: $cname\nEmail: $cemail\n\nPesan:\n$cmessage";
    $headers = "From: $cname <$cemail>\r\n";

    // Catatan: fungsi mail() membutuhkan konfigurasi server yang benar.
    if (@mail($ownerEmail, $subject, $body, $headers)) {
      $contactSuccess = true;
    } else {
      $contactError = "Gagal mengirim. Jika percobaan gagal, silakan hubungi langsung: $ownerEmail";
    }
  }
}
?>
<!doctype html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars($ownerName) ?> — Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #0f1724;
      --card: rgba(255, 255, 255, 0.04);
      --glass: linear-gradient(135deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.02));
      --accent1: #7c3aed;
      /* purple */
      --accent2: #06b6d4;
      /* cyan */
      --muted: rgba(255, 255, 255, 0.6);
      color-scheme: dark;
    }

    * {
      box-sizing: border-box
    }

    html,
    body {
      margin: 0;
      background:
        radial-gradient(1200px 400px at 10% 10%, rgba(124, 58, 237, 0.12), transparent),
        radial-gradient(800px 300px at 90% 90%, rgba(6, 182, 212, 0.08), transparent),
        var(--bg);
      font-family: Inter, system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial;
      color: #e6eef8;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .wrap {
      max-width: 1100px;
      margin: 40px auto;
      padding: 28px
    }

    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px
    }

    .avatar {
      width: 56px;
      height: 56px;
      border-radius: 12px;
      background: linear-gradient(135deg, var(--accent1), var(--accent2));
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 18px;
      color: white;
      box-shadow: 0 6px 18px rgba(12, 17, 28, 0.6)
    }

    nav a {
      color: var(--muted);
      text-decoration: none;
      margin-left: 18px;
      font-weight: 600
    }

    nav a:hover {
      color: #fff
    }

    .hero {
      margin-top: 28px;
      padding: 28px;
      border-radius: 16px;
      background: var(--glass);
      backdrop-filter: blur(6px);
      display: grid;
      grid-template-columns: 1fr 320px;
      gap: 20px;
      align-items: center;
      box-shadow: 0 10px 40px rgba(2, 6, 23, 0.6);
    }

    .hero h1 {
      margin: 0;
      font-size: 28px
    }

    .hero p {
      color: var(--muted);
      margin-top: 8px;
      line-height: 1.5
    }

    .cta {
      margin-top: 16px;
      display: flex;
      gap: 12px;
      align-items: center
    }

    .btn {
      padding: 10px 16px;
      border-radius: 10px;
      background: linear-gradient(90deg, var(--accent1), var(--accent2));
      color: white;
      text-decoration: none;
      font-weight: 700;
      box-shadow: 0 8px 24px rgba(6, 182, 212, 0.06);
    }

    .sec-title {
      margin: 36px 0 18px;
      font-size: 18px;
      font-weight: 700
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 16px
    }

    .card {
      padding: 16px;
      border-radius: 12px;
      background: var(--card);
      transition: transform .28s ease, box-shadow .28s ease;
      border: 1px solid rgba(255, 255, 255, 0.03);
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(2, 6, 23, 0.6)
    }

    .proj-title {
      font-weight: 700;
      margin: 0
    }

    .proj-desc {
      color: var(--muted);
      font-size: 14px;
      margin: 8px 0 12px
    }

    .tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px
    }

    .tag {
      font-size: 12px;
      padding: 6px 8px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.03);
      color: var(--muted)
    }

    .skills {
      display: flex;
      flex-direction: column;
      gap: 12px
    }

    .skill-row {
      display: flex;
      justify-content: space-between;
      font-weight: 600;
      color: var(--muted);
      font-size: 14px
    }

    .bar {
      height: 10px;
      background: rgba(255, 255, 255, 0.04);
      border-radius: 999px;
      margin-top: 8px;
      overflow: hidden
    }

    .fill {
      height: 100%;
      background: linear-gradient(90deg, var(--accent1), var(--accent2));
      transition: width .8s cubic-bezier(.2, .9, .3, 1)
    }

    form .input,
    form textarea {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid rgba(255, 255, 255, 0.04);
      background: transparent;
      color: inherit
    }

    form textarea {
      min-height: 120px;
      resize: vertical
    }

    footer {
      margin: 36px 0 12px;
      color: var(--muted);
      text-align: center;
      font-size: 14px
    }

    /* responsive */
    @media (max-width:880px) {
      .hero {
        grid-template-columns: 1fr
      }

      nav {
        display: none
      }

      .wrap {
        padding: 16px
      }
    }

    /* subtle animation on load */
    .fade-in {
      opacity: 0;
      transform: translateY(6px);
      animation: fadeIn .6s ease forwards
    }

    @keyframes fadeIn {
      to {
        opacity: 1;
        transform: none
      }
    }

    .success {
      background: linear-gradient(90deg, #22c55e, #16a34a);
      padding: 10px;
      border-radius: 8px;
      color: #021014
    }

    .error {
      background: linear-gradient(90deg, #fb7185, #ef4444);
      padding: 10px;
      border-radius: 8px;
      color: #210809
    }
  </style>
</head>

<body>
  <div class="wrap">
    <header class="fade-in">
      <div class="logo">
        <div class="avatar"><?= strtoupper(substr($ownerName, 0, 1)) ?></div>
        <div>
          <div style="font-weight:700"><?= htmlspecialchars($ownerName) ?></div>
          <div style="font-size:13px;color:var(--muted)"><?= htmlspecialchars($ownerTitle) ?></div>
        </div>
      </div>
      <nav>
        <a href="#projects">Proyek</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Kontak</a>
      </nav>
    </header>

    <section class="hero fade-in" aria-labelledby="hero-title">
      <div>
        <h1 id="hero-title">Halo, saya <?= htmlspecialchars($ownerName) ?>.</h1>
        <p><?= htmlspecialchars($ownerBio) ?></p>
        <div class="cta">
          <a class="btn" href="#projects">Lihat Portofolio</a>
          <a class="btn" style="background:transparent;border:1px solid rgba(255,255,255,0.06);color:var(--muted)" href="#contact">Hubungi Saya</a>
        </div>

        <div style="margin-top:18px;display:flex;gap:12px;flex-wrap:wrap">
          <div style="background:rgba(255,255,255,0.02);padding:10px;border-radius:10px">
            <div style="font-size:12px;color:var(--muted)">Proyek Selesai</div>
            <div style="font-weight:800;font-size:16px">+5</div>
          </div>
          <div style="background:rgba(255,255,255,0.02);padding:10px;border-radius:10px">
            <div style="font-size:12px;color:var(--muted)">Klien</div>
            <div style="font-weight:800;font-size:16px">+5</div>
          </div>
        </div>
      </div>

      <aside style="padding:18px;border-radius:12px;background:linear-gradient(180deg,rgba(255,255,255,0.02),transparent);height:100%">
        <div style="font-weight:700">Highlight</div>
        <div style="color:var(--muted);margin-top:8px;font-size:14px">Membangun aplikasi yang cepat, dapat diandalkan, dan mudah dikembangkan. Keahlian dalam full-stack web development.</div>
        <div style="margin-top:14px">
          <div style="margin-top:18px">
            <a class="btn" href="mailto:<?= htmlspecialchars($ownerEmail) ?>">Kirim Email</a>
          </div>
        </div>
      </aside>
    </section>

    <h2 id="projects" class="sec-title fade-in">Proyek Unggulan</h2>
    <div class="card-grid fade-in">
      <?php foreach ($projects as $p): ?>
        <article class="card" role="article">
          <div style="display:flex;align-items:center;gap:12px">
            <div>
              <div class="proj-title"><?= htmlspecialchars($p['title']) ?></div>
              <div style="font-size:13px;color:var(--muted)"><?= htmlspecialchars($p['desc']) ?></div>
            </div>
          </div>
          <div class="tags" style="margin-top:12px">
            <?php foreach ($p['tags'] as $t): ?>
              <span class="tag"><?= htmlspecialchars($t) ?></span>
            <?php endforeach; ?>
          </div>
          <div style="margin-top:12px;display:flex;justify-content:space-between;align-items:center">
            <a href="<?= htmlspecialchars($p['link']) ?>" class="btn" style="padding:8px 12px;font-size:14px">Lihat</a>
            <a href="#" style="color:var(--muted);font-size:13px">Detail →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <h2 id="skills" class="sec-title fade-in">Keahlian</h2>
    <div class="card fade-in">
      <div class="skills">
        <?php foreach ($skills as $k => $v): $percent = (int)$v; ?>
          <div>
            <div class="skill-row"><span><?= htmlspecialchars($k) ?></span><span><?= $percent ?>%</span></div>
            <div class="bar" aria-hidden="true">
              <div class="fill" style="width:<?= $percent ?>%"></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <h2 id="contact" class="sec-title fade-in">Kontak</h2>
    <div class="card fade-in">
      <?php if ($contactSuccess): ?>
        <div class="success">Pesan berhasil terkirim. Terima kasih!</div>
      <?php elseif ($contactError): ?>
        <div class="error"><?= htmlspecialchars($contactError) ?></div>
      <?php endif; ?>

      <aside style="padding:18px;border-radius:12px;background:linear-gradient(180deg,rgba(255,255,255,0.02),transparent);height:100%">
        <div style="font-weight:700">Highlight</div>
        <div style="color:var(--muted);margin-top:8px;font-size:14px">Membangun aplikasi yang cepat, dapat diandalkan, dan mudah dikembangkan. Keahlian dalam full-stack web development.</div>

        <div style="margin-top:14px">
          <div style="font-size:12px;color:var(--muted)">Lokasi</div>
          <div style="font-weight:700"><?= htmlspecialchars($location) ?></div>

          <div style="font-size:12px;color:var(--muted);margin-top:10px">Pengalaman</div>
          <div style="font-weight:700"><?= (int)$experienceYears ?> tahun</div>

          <div style="font-size:12px;color:var(--muted);margin-top:10px">Ketersediaan</div>
          <div style="margin-top:8px">
            <?php if ($availability): ?>
              <span class="btn" style="background:linear-gradient(90deg,#22c55e,#16a34a);padding:8px 12px;font-size:13px">Terbuka untuk pekerjaan</span>
            <?php else: ?>
              <span class="btn" style="background:linear-gradient(90deg,#94a3b8,#64748b);padding:8px 12px;font-size:13px">Tidak tersedia</span>
            <?php endif; ?>
          </div>

          <div style="margin-top:25px">
            <a class="btn" href="<?= htmlspecialchars($resumeLink) ?>" target="_blank" rel="noopener">Unduh Resume</a>
          </div>

          <div style="margin-top:15px;font-size:13px;color:var(--muted)">Sosial</div>
          <div style="display:flex;gap:8px;margin-top:8px;flex-wrap:wrap">
            <?php foreach ($socials as $name => $url): ?>
              <a href="<?= htmlspecialchars($url) ?>" target="_blank" rel="noopener" style="color:var(--muted);text-decoration:none;font-weight:600;padding:6px 8px;border-radius:8px;background:rgba(255,255,255,0.02)">
                <?= htmlspecialchars(ucfirst($name)) ?>
              </a>
            <?php endforeach; ?>
          </div>

        </div>
      </aside>

      <form method="post" style="margin-top:12px">
        <input class="input" name="name" placeholder="Nama Anda" required value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
        <div style="height:12px"></div>
        <input class="input" type="email" name="email" placeholder="Email Anda" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
        <div style="height:12px"></div>
        <textarea name="message" placeholder="Tulis pesan..." required><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
        <div style="height:12px"></div>
        <button class="btn" name="contact_submit" type="submit">Kirim Pesan</button>
      </form>
    </div>

    <footer class="fade-in">
      © <?= date('Y') ?> <?= htmlspecialchars($ownerName) ?> — Built with ❤
    </footer>
  </div>

  <script>
    // Smooth scroll for internal links
    document.querySelectorAll('a[href^="#"]').forEach(a => {
      a.addEventListener('click', e => {
        const id = a.getAttribute('href').slice(1);
        const el = document.getElementById(id);
        if (el) {
          e.preventDefault();
          el.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Animate progress fills (in case of heavy styling)
    window.addEventListener('load', () => document.querySelectorAll('.fill').forEach(f => {
      f.style.width = f.style.width; // trigger transition
    }));
  </script>
</body>

</html>