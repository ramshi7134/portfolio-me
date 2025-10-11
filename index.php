<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RAMSHEED MEDAPPIL — Senior Full Stack Developer</title>
  <meta name="description" content="Portfolio of Ramsheed Medappil — Senior Full Stack Developer (Laravel, Vue.js, CI/CD, Cloud)." />
  <link rel="icon" href="data:;base64,iVBORw0KGgo="> 
  <style>
    :root{--bg:#0f1724;--card:#0b1220;--muted:#9aa4b2;--accent:#6ee7b7;--glass:rgba(255,255,255,0.04)}
    *{box-sizing:border-box}
    html,body{height:100%;margin:0;font-family:Inter,ui-sans-serif,system-ui,-apple-system,'Segoe UI',Roboto,'Helvetica Neue',Arial; background:linear-gradient(180deg,#071020 0%, #071428 60%); color:#e6eef6}
    a{color:var(--accent);text-decoration:none}
    header{display:flex;gap:24px;align-items:center;padding:28px 32px;max-width:1100px;margin:0 auto}
    .logo{width:72px;height:72px;border-radius:12px;background:linear-gradient(135deg,#0ea5a0,#6ee7b7);display:flex;align-items:center;justify-content:center;color:#052023;font-weight:700;font-size:20px}
    .hero{max-width:1100px;margin:12px auto 28px;padding:32px;border-radius:14px;background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));box-shadow:0 6px 30px rgba(2,6,23,0.6);display:grid;grid-template-columns:1fr 320px;gap:28px}
    .name{font-size:28px;font-weight:700;margin:0 0 6px}
    .role{color:var(--muted);margin:0 0 12px}
    .summary{color:#d6e6f2;line-height:1.6}
    .contact{background:var(--glass);padding:18px;border-radius:12px}
    .meta{display:flex;flex-direction:column;gap:10px}
    .chip{background:rgba(255,255,255,0.02);padding:8px 10px;border-radius:999px;color:var(--muted);font-size:13px}
    main{max-width:1100px;margin:20px auto;padding:0 20px 80px}
    section{margin-bottom:28px}
    h2{margin:0 0 12px;font-size:18px}
    .skills{display:flex;flex-wrap:wrap;gap:8px}
    .skill{background:rgba(255,255,255,0.03);padding:8px 10px;border-radius:8px;font-size:13px;color:var(--muted)}
    .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:16px}
    .card{background:linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));padding:18px;border-radius:12px;box-shadow:0 6px 18px rgba(2,6,23,0.6)}
    .project-links a{display:inline-block;margin-right:10px;padding:8px 12px;border-radius:8px;background:rgba(255,255,255,0.02);font-size:13px}
    .timeline{display:flex;flex-direction:column;gap:12px}
    .job{padding:12px;border-radius:10px;background:rgba(255,255,255,0.02)}
    footer{max-width:1100px;margin:20px auto;padding:20px;text-align:center;color:var(--muted)}
    .btn{display:inline-block;padding:10px 14px;border-radius:10px;background:linear-gradient(90deg,#0ea5a0,#6ee7b7);color:#022; font-weight:600}
    @media (max-width:880px){.hero{grid-template-columns:1fr;}.logo{width:64px;height:64px}.contact{order:2}}
  </style>
</head>
<body>
  <header>
    <div class="logo">RM</div>
    <div style="flex:1;">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <div>
          <div style="font-weight:700">RAMSHEED MEDAPPIL</div>
          <div style="color:var(--muted);font-size:13px">Senior Full Stack Developer — Laravel & Vue.js | Dubai, UAE</div>
        </div>
        <div style="text-align:right">
          <a class="btn" href="#contact">Contact</a>
        </div>
      </div>
    </div>
  </header>

  <section class="hero" role="banner">
    <div>
      <h1 class="name">Senior Full Stack Developer with 5+ years experience</h1>
      <p class="role">Specialized in Laravel, Vue.js, CI/CD automation, cloud hosting, and scalable web applications for real estate and e-commerce.</p>
      <p class="summary">Architected and delivered ERP-grade CRM systems, multi-vendor e-commerce platforms, and automated CI/CD pipelines. Passionate about performance optimization, clean architecture, and building developer-friendly tools like Packito — a Laravel package generator.</p>

      <div style="margin-top:18px">
        <a class="chip" href="#projects">View Projects</a>
        <a class="chip" href="#experience" style="margin-left:8px">Experience</a>
      </div>

      <section style="margin-top:20px">
        <h2>Key highlights</h2>
        <div class="cards">
          <div class="card">
            <strong>CRM-ERP for UAE real estate</strong>
            <div style="color:var(--muted);font-size:13px;margin-top:8px">Leads, deals, marketing automation, property management — used by top real estate companies in UAE.</div>
          </div>
          <div class="card">
            <strong>CI/CD & DevOps</strong>
            <div style="color:var(--muted);font-size:13px;margin-top:8px">Docker, GitHub Actions, self-hosted runners, automated testing and deployments.</div>
          </div>
          <div class="card">
            <strong>Packito — Laravel package generator</strong>
            <div style="color:var(--muted);font-size:13px;margin-top:8px">Automates scaffolding: migrations, models, controllers, routes, and CI configurations.</div>
          </div>
        </div>
      </section>

    </div>

    <aside class="contact" aria-label="contact sidebar">
      <div class="meta">
        <div style="display:flex;gap:8px;align-items:center;justify-content:space-between">
          <div>
            <div style="font-weight:700">RAMSHEED MEDAPPIL</div>
            <div style="font-size:13px;color:var(--muted)">Senior Full Stack Developer</div>
          </div>
        </div>

        <div style="border-top:1px solid rgba(255,255,255,0.03);padding-top:12px">
          <div class="chip">📍 Dubai, UAE</div>
          <div class="chip">✉️ <a href="mailto:me@ramsheed.com">me@ramsheed.com</a></div>
          <div class="chip">📱 +971 50 820 0747</div>
          <div style="margin-top:10px"><a class="chip" href="https://packito.ramsheed.com" target="_blank">Packito — package generator</a></div>
          <div style="margin-top:6px"><a class="chip" href="https://winscart.com" target="_blank">Winscart — Ecommerce</a></div>
        </div>

        <div style="margin-top:12px">
          <a class="btn" href="#contact">Hire / Contact</a>
        </div>
      </div>
    </aside>
  </section>

  <main>
    <section id="experience">
      <h2>Experience</h2>
      <div class="timeline">
        <div class="job card">
          <div style="font-weight:700">Senior Full Stack Developer — Prop CRM</div>
          <div style="color:var(--muted);font-size:13px">Dubai, UAE — Mar 2023 – Present</div>
          <ul style="margin-top:8px;color:var(--muted)">
            <li>Architected and developed a CRM-ERP platform for real estate: leads, deals, marketing, property management.</li>
            <li>Led CI/CD implementation with Docker, GitHub Actions and self-hosted runners.</li>
            <li>Mentored developers and ran code reviews to maintain quality and scalability.</li>
          </ul>
        </div>

        <div class="job card">
          <div style="font-weight:700">Full Stack Developer — Hexnine Technologies</div>
          <div style="color:var(--muted);font-size:13px">Kerala, India — Nov 2020 – Jan 2023</div>
          <ul style="margin-top:8px;color:var(--muted)">
            <li>Built and maintained Laravel & CodeIgniter apps; integrated secure RESTful APIs.</li>
            <li>Delivered multi-vendor e-commerce and CRM solutions with optimized performance.</li>
          </ul>
        </div>

      </div>
    </section>

    <section id="skills">
      <h2>Skills</h2>
      <div class="skills">
        <span class="skill">Laravel</span><span class="skill">Vue.js / Nuxt</span><span class="skill">PHP</span>
        <span class="skill">MySQL</span><span class="skill">Docker</span><span class="skill">GitHub Actions</span>
        <span class="skill">CI/CD</span><span class="skill">Nginx</span><span class="skill">Performance Optimization</span>
        <span class="skill">RESTful APIs</span><span class="skill">Cloud (DigitalOcean & AWS)</span><span class="skill">JavaScript</span>
      </div>
    </section>

    <section id="projects">
      <h2>Selected Projects</h2>
      <div class="cards">
        <div class="card">
          <strong>Packito — Laravel Package Generator</strong>
          <div style="color:var(--muted);font-size:13px;margin-top:8px">Generates ready-to-use Laravel packages with migrations, models, controllers, routes and CI setups.</div>
          <div class="project-links" style="margin-top:12px">
            <a href="https://packito.ramsheed.com" target="_blank">Live</a>
          </div>
        </div>

        <div class="card">
          <strong>Winscart — Ecommerce Platform</strong>
          <div style="color:var(--muted);font-size:13px;margin-top:8px">Scalable multi-vendor e-commerce with payments, responsive UI and automated CI/CD.</div>
          <div style="margin-top:12px" class="project-links">
            <a href="https://winscart.com" target="_blank">Live</a>
          </div>
        </div>

      </div>
    </section>

    <section id="contact">
  <h2>Contact</h2>
  <div class="card" style="display:grid;grid-template-columns:1fr 320px;gap:14px">
    <div>
      <form id="contactForm">
        <label>Name</label>
        <input id="name" name="name" type="text" required style="width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.03);background:transparent;color:inherit" />
        <label>Email</label>
        <input id="email" name="email" type="email" required style="width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.03);background:transparent;color:inherit" />
        <label>Message</label>
        <textarea id="message" name="message" rows="5" required style="width:100%;padding:10px;border-radius:8px;border:1px solid rgba(255,255,255,0.03);background:transparent;color:inherit"></textarea>
        
        <div style="margin-top:10px;display:flex;gap:10px;flex-wrap:wrap;">
          <button class="btn" type="submit" style="flex:1;">Send message</button>
          <a href="download_cv.php" download class="btn" style="background:linear-gradient(90deg,#1d4ed8,#60a5fa);color:#fff;">Download CV</a>
        </div>
      </form>

      <!-- Toast alert -->
      <div id="toast" style="display:none;margin-top:15px;padding:12px 16px;border-radius:8px;text-align:center;font-weight:500;"></div>
    </div>

    <aside style="padding:12px;background:rgba(255,255,255,0.01);border-radius:8px">
      <div style="font-weight:700">Get in touch</div>
      <div style="color:var(--muted);font-size:13px;margin-top:8px">Email: <a href="mailto:me@ramsheed.com">me@ramsheed.com</a></div>
      <div style="color:var(--muted);font-size:13px;margin-top:6px">Phone: +971 50 820 0747</div>
      <div style="color:var(--muted);font-size:13px;margin-top:6px">Location: Dubai, UAE</div>
    </aside>
  </div>
</section>
  </main>

  <footer>
    <div style="max-width:900px;margin:0 auto;color:var(--muted)">© <span id="year"></span> Ramsheed Medappil — Senior Full Stack Developer. Built with HTML, PHP & PHPMailer.</div>
  </footer>

  <script>
document.getElementById('year').textContent = new Date().getFullYear();

const toast = document.getElementById('toast');
const contactForm = document.getElementById('contactForm');

contactForm.addEventListener('submit', async (e) => {
  e.preventDefault();
  const formData = new FormData(contactForm);

  showToast('Sending message...', '#2563eb');

  try {
    const res = await fetch('send_email.php', { method: 'POST', body: formData });
    const data = await res.json();

    if (data.status === 'success') {
      showToast('✅ ' + data.message, '#16a34a');
      contactForm.reset();
    } else {
      showToast('❌ ' + data.message, '#dc2626');
    }
  } catch {
    showToast('⚠️ Error connecting to server.', '#dc2626');
  }
});

function showToast(message, color) {
  toast.textContent = message;
  toast.style.display = 'block';
  toast.style.background = color;
  toast.style.color = '#fff';
  toast.style.opacity = '1';
  toast.style.transition = 'opacity 0.4s ease';
  
  setTimeout(() => {
    toast.style.opacity = '0';
    setTimeout(() => toast.style.display = 'none', 400);
  }, 4000);
}
</script>
</body>
</html>
