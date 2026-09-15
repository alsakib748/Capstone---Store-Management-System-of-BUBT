<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Md. Al Sakib</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
  :root{
    --bg: #0a0d12;
    --panel: #11161d;
    --panel-2: #0d1218;
    --line: #212833;
    --laravel: #FF2D20;
    --php: #8892bf;
    --text: #e6edf3;
    --muted: #6e7a8a;
    --green: #3fb950;
  }

  *{box-sizing:border-box;}

  body{
    background: radial-gradient(circle at 50% -10%, #151b23 0%, var(--bg) 55%);
    color: var(--text);
    font-family: 'JetBrains Mono', monospace;
    min-height: 100vh;
    padding: 32px 14px;
  }

  .stage{
    max-width: 860px;
    margin: 0 auto;
  }

  /* ---- window chrome ---- */
  .term{
    background: var(--panel);
    border: 1px solid var(--line);
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 30px 80px -20px rgba(0,0,0,.7), 0 0 0 1px rgba(255,255,255,.02);
  }

  .term-bar{
    display:flex;
    align-items:center;
    gap:10px;
    padding: 11px 16px;
    background: var(--panel-2);
    border-bottom: 1px solid var(--line);
  }
  .dot{width:11px;height:11px;border-radius:50%;}
  .dot.r{background:#ff5f57;}
  .dot.y{background:#febc2e;}
  .dot.g{background:#28c840;}
  .term-title{
    margin-left: 6px;
    color: var(--muted);
    font-size: .78rem;
    letter-spacing: .02em;
  }
  .term-title .path{color:#9aa7b5;}

  .term-body{
    padding: 26px 22px 22px;
  }

  .prompt-line{
    font-size: .92rem;
    color: var(--muted);
    margin-bottom: 18px;
    display:flex;
    flex-wrap:wrap;
    align-items:center;
    gap:8px;
  }
  .prompt-line .user{color: var(--green);}
  .prompt-line .sep{color: var(--muted);}
  .prompt-line .path2{color:#79c0ff;}
  .prompt-line .cmd{color: var(--text); font-weight:600;}
  .cursor{
    display:inline-block;
    width:8px; height:16px;
    background: var(--laravel);
    animation: blink 1s step-end infinite;
    vertical-align: -3px;
  }
  @keyframes blink{50%{opacity:0;}}

  /* ---- identity header ---- */
  .who{
    display:flex;
    gap:18px;
    align-items:flex-start;
    padding-bottom: 20px;
    margin-bottom: 22px;
    border-bottom: 1px dashed var(--line);
    flex-wrap: wrap;
  }
  .avatar-ring{
    width:74px;height:74px;flex:0 0 auto;
    border-radius: 12px;
    background: linear-gradient(145deg, var(--laravel), #9a1f14);
    display:flex;align-items:center;justify-content:center;
    font-size: 1.6rem; font-weight:800; color:#fff;
    box-shadow: 0 8px 24px -8px rgba(255,45,32,.55);
  }
  .who h1{
    font-size: 1.35rem;
    margin:0 0 4px;
    font-weight:800;
    letter-spacing:-.01em;
  }
  .who .role{
    color: var(--laravel);
    font-size: .88rem;
    font-weight:600;
    margin-bottom: 8px;
  }
  .who .meta{
    color: var(--muted);
    font-size: .78rem;
    display:flex;
    gap:14px;
    flex-wrap:wrap;
  }
  .who .meta span{display:inline-flex;align-items:center;gap:6px;}
  .status-chip{
    margin-left:auto;
    font-size:.72rem;
    color: var(--green);
    background: rgba(63,185,80,.1);
    border:1px solid rgba(63,185,80,.35);
    padding: 5px 10px;
    border-radius: 20px;
    display:flex; align-items:center; gap:6px;
    white-space:nowrap;
  }
  .status-chip i{font-size:.5rem;color:var(--green);animation:blink 1.4s ease-in-out infinite;}

  /* ---- section label like artisan output ---- */
  .sec-label{
    color: var(--laravel);
    font-size: .74rem;
    font-weight:700;
    letter-spacing:.14em;
    text-transform: uppercase;
    margin-bottom: 10px;
    display:flex;
    align-items:center;
    gap:10px;
  }
  .sec-label::after{
    content:"";
    flex:1;
    height:1px;
    background: var(--line);
  }

  section.block{margin-bottom: 24px;}

  /* ---- key: value rows ---- */
  .kv-row{
    display:flex;
    font-size: .82rem;
    padding: 5px 0;
    gap: 10px;
  }
  .kv-row .k{
    color: var(--muted);
    min-width: 150px;
    flex:0 0 auto;
  }
  .kv-row .v{color: var(--text);}
  .kv-row .v .ok{color:var(--green);}

  /* ---- stat grid ---- */
  .stat-box{
    background: var(--panel-2);
    border: 1px solid var(--line);
    border-radius: 8px;
    padding: 14px 12px;
    text-align:center;
    height:100%;
  }
  .stat-box .num{
    font-size: 1.5rem;
    font-weight: 800;
    color: var(--laravel);
    line-height:1;
  }
  .stat-box .lbl{
    color: var(--muted);
    font-size: .68rem;
    letter-spacing:.05em;
    text-transform: uppercase;
    margin-top: 6px;
  }

  /* ---- skill badges ---- */
  .badge-row{display:flex;flex-wrap:wrap;gap:8px;}
  .skill-badge{
    font-size: .74rem;
    padding: 5px 10px;
    border-radius: 6px;
    background: var(--panel-2);
    border: 1px solid var(--line);
    color: #c7d1db;
    font-weight:500;
  }
  .skill-badge.core{
    border-color: rgba(255,45,32,.4);
    color: #ff8a7a;
    background: rgba(255,45,32,.06);
  }

  /* ---- project table ---- */
  .proj{
    display:flex;
    justify-content:space-between;
    gap:12px;
    padding: 9px 0;
    border-bottom: 1px solid var(--line);
    font-size: .82rem;
  }
  .proj:last-child{border-bottom:none;}
  .proj .name{color: var(--text); font-weight:600;}
  .proj .name a{color:inherit;text-decoration:none;}
  .proj .name a:hover{color:var(--laravel);}
  .proj .stack{color: var(--muted); font-size:.72rem; margin-top:2px;}
  .proj .links{white-space:nowrap;font-size:.75rem;}
  .proj .links a{color:#79c0ff;text-decoration:none;margin-left:10px;}
  .proj .links a:hover{color:var(--laravel);}

  /* ---- education ---- */
  .edu{
    display:flex;
    justify-content:space-between;
    gap:10px;
    padding:8px 0;
    font-size:.82rem;
    flex-wrap:wrap;
  }
  .edu .deg{color:var(--text);font-weight:600;}
  .edu .inst{color:var(--muted);font-size:.76rem;}
  .edu .cgpa{color:var(--laravel);font-weight:700;white-space:nowrap;}

  /* ---- footer / contact ---- */
  .foot{
    display:flex;
    flex-wrap:wrap;
    gap:10px;
    padding-top: 4px;
  }
  .foot a{
    text-decoration:none;
    color: var(--text);
    background: var(--panel-2);
    border:1px solid var(--line);
    padding: 8px 13px;
    border-radius: 7px;
    font-size:.78rem;
    display:inline-flex;
    align-items:center;
    gap:8px;
    transition: border-color .15s, color .15s;
  }
  .foot a:hover{border-color:var(--laravel); color:#ff8a7a;}
  .foot a i{font-size:.85rem;}

  .exit-line{
    margin-top:20px;
    color:var(--muted);
    font-size:.78rem;
  }
  .exit-line .code{color:var(--green);font-weight:700;}

  @media (max-width: 520px){
    .term-body{padding:20px 14px;}
    .kv-row .k{min-width: 118px;}
    .who h1{font-size:1.15rem;}
    .status-chip{margin-left:0;}
    .who{gap:14px;}
  }
</style>
</head>
<body>

<div class="stage">
  <div class="term">
    <div class="term-bar">
      <span class="dot r"></span><span class="dot y"></span><span class="dot g"></span>
      <span class="term-title"><span class="path">~/portfolio</span> — zsh</span>
    </div>

    <div class="term-body">

      <div class="prompt-line">
        <span class="user">alsakib</span><span class="sep">@</span><span class="path2">software-engineer</span><span class="sep">:</span><span class="path2">~$</span>
        <span class="cmd">php artisan about</span><span class="cursor"></span>
      </div>

      <div class="who">
        <div class="avatar-ring">AS</div>
        <div>
          <h1>Md. Al Sakib</h1>
          <div class="role">Full Stack PHP Laravel Developer</div>
          <div class="meta">
            <span><i class="fa-solid fa-location-dot"></i>Dhaka, Bangladesh</span>
            <span><i class="fa-solid fa-briefcase"></i>Software Engineer</span>
          </div>
        </div>
        <div class="status-chip"><i class="fa-solid fa-circle"></i>Available for work</div>
      </div>

      <!-- STATS -->
      <section class="block">
        <div class="row g-2">
          <div class="col-6 col-md-3">
            <div class="stat-box"><div class="num">1.5+</div><div class="lbl">Years Exp.</div></div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat-box"><div class="num">6+</div><div class="lbl">Live Projects</div></div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat-box"><div class="num">3.81</div><div class="lbl">Diploma CGPA</div></div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat-box"><div class="num">3.69</div><div class="lbl">B.Sc CGPA</div></div>
          </div>
        </div>
      </section>

      <!-- ENVIRONMENT -->
      <section class="block">
        <div class="sec-label">Environment</div>
        <div class="kv-row"><div class="k">Role</div><div class="v">Full Stack Laravel Developer <span class="ok">● ACTIVE</span></div></div>
        <div class="kv-row"><div class="k">Education</div><div class="v">B.Sc. in CSE, BUBT (Expected 2026)</div></div>
        <div class="kv-row"><div class="k">Focus</div><div class="v">Inventory · CRM · Accounting · eCommerce · Real Estate · Construction</div></div>
      </section>

      <!-- SKILLS -->
      <section class="block">
        <div class="sec-label">Tech Stack</div>
        <div class="badge-row">
          <span class="skill-badge core">Laravel</span>
          <span class="skill-badge core">PHP</span>
          <span class="skill-badge core">MySQL</span>
          <span class="skill-badge">Vue.js</span>
          <span class="skill-badge">Inertia.js</span>
          <span class="skill-badge">Tailwind CSS</span>
          <span class="skill-badge">Bootstrap</span>
          <span class="skill-badge">RESTful APIs</span>
          <span class="skill-badge">Laravel Sanctum</span>
          <span class="skill-badge">Eloquent ORM</span>
          <span class="skill-badge">Reverb / Pusher</span>
          <span class="skill-badge">Git &amp; GitHub</span>
        </div>
      </section>

      <!-- PROJECTS -->
      <section class="block">
        <div class="sec-label">Projects</div>

        <div class="proj">
          <div>
            <div class="name"><a href="https://store.thealsakib.com" target="_blank" rel="noopener">Store Management System</a></div>
            <div class="stack">Laravel · Pusher · Echo · MySQL · jQuery</div>
          </div>
          <div class="links">
            <a href="https://store.thealsakib.com" target="_blank" rel="noopener">Demo</a>
            <a href="https://github.com/alsakib748" target="_blank" rel="noopener">Repo</a>
          </div>
        </div>

        <div class="proj">
          <div>
            <div class="name">Inventory Management System</div>
            <div class="stack">Laravel · PHP · MySQL · Ajax · RBAC</div>
          </div>
          <div class="links">
            <a href="https://github.com/alsakib748" target="_blank" rel="noopener">Repo</a>
          </div>
        </div>

        <div class="proj">
          <div>
            <div class="name">Laravel eCommerce Platform</div>
            <div class="stack">Laravel · Stripe · Cart · Wishlist</div>
          </div>
          <div class="links">
            <a href="https://github.com/alsakib748" target="_blank" rel="noopener">Repo</a>
          </div>
        </div>

        <div class="proj">
          <div>
            <div class="name">Cloud File Management System</div>
            <div class="stack">Laravel · Vue.js · Inertia.js · MySQL</div>
          </div>
          <div class="links">
            <a href="https://github.com/alsakib748" target="_blank" rel="noopener">Repo</a>
          </div>
        </div>
      </section>

      <!-- EDUCATION -->
      <section class="block">
        <div class="sec-label">Education</div>
        <div class="edu">
          <div><div class="deg">B.Sc. in CSE</div><div class="inst">Bangladesh University of Business &amp; Technology (BUBT), Dhaka</div></div>
          <div class="cgpa">3.69 / 4.00</div>
        </div>
        <div class="edu">
          <div><div class="deg">Diploma in Computer Engineering</div><div class="inst">Infra Polytechnic Institute, Barishal</div></div>
          <div class="cgpa">3.81 / 4.00</div>
        </div>
      </section>

      <!-- CONTACT -->
      <section class="block" style="margin-bottom:6px;">
        <div class="sec-label">Contact</div>
        <div class="foot">
          <a href="mailto:alsakib748@gmail.com"><i class="fa-solid fa-envelope"></i>alsakib748@gmail.com</a>
          <a href="https://github.com/alsakib748" target="_blank" rel="noopener"><i class="fa-brands fa-github"></i>alsakib748</a>
          <a href="https://linkedin.com/in/alsakib748" target="_blank" rel="noopener"><i class="fa-brands fa-linkedin"></i>alsakib748</a>
          <a href="https://portfolio.thealsakib.com" target="_blank" rel="noopener"><i class="fa-solid fa-globe"></i>portfolio.thealsakib.com</a>
        </div>
      </section>

      <div class="exit-line"><span class="code">✓</span> Process finished with exit code 0</div>

    </div>
  </div>
</div>

</body>
</html>
