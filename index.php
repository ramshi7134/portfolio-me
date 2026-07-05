<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RAMSHEED MEDAPPIL — Senior Full Stack Developer</title>
  <meta name="description" content="Portfolio of Ramsheed Medappil — Senior Full Stack Developer specializing in Laravel, Vue.js, React, cloud infrastructure, and enterprise CRM-ERP systems." />
  <link rel="icon" href="data:;base64,iVBORw0KGgo=">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
  <style>
    :root {
      --bg: #060b14;
      --surface: #0c1220;
      --surface-2: #111827;
      --border: rgba(255,255,255,0.07);
      --text: #e8eef5;
      --muted: #8b97a8;
      --accent: #34d399;
      --accent-2: #14b8a6;
      --accent-glow: rgba(52,211,153,0.15);
      --blue: #60a5fa;
      --radius: 14px;
      --nav-h: 64px;
    }

    * { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; scroll-padding-top: calc(var(--nav-h) + 24px); }

    body {
      font-family: 'DM Sans', ui-sans-serif, system-ui, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
    }

    body::before {
      content: '';
      position: fixed;
      inset: 0;
      background:
        radial-gradient(ellipse 80% 50% at 20% -10%, rgba(20,184,166,0.12), transparent),
        radial-gradient(ellipse 60% 40% at 90% 10%, rgba(96,165,250,0.08), transparent);
      pointer-events: none;
      z-index: 0;
    }

    a { color: var(--accent); text-decoration: none; }
    a:hover { color: #6ee7b7; }

    .wrap { max-width: 1080px; margin: 0 auto; padding: 0 24px; position: relative; z-index: 1; }

    /* Nav */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      height: var(--nav-h);
      border-bottom: 1px solid var(--border);
      background: rgba(6,11,20,0.85);
      backdrop-filter: blur(12px);
    }

    .nav-inner {
      max-width: 1080px;
      margin: 0 auto;
      padding: 0 24px;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 16px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--text);
      font-weight: 700;
      font-size: 15px;
      letter-spacing: 0.02em;
    }

    .brand-mark {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      background: linear-gradient(135deg, var(--accent-2), var(--accent));
      display: flex;
      align-items: center;
      justify-content: center;
      color: #022c22;
      font-size: 13px;
      font-weight: 700;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 4px;
      list-style: none;
    }

    .nav-links a {
      color: var(--muted);
      font-size: 14px;
      padding: 8px 12px;
      border-radius: 8px;
      transition: color 0.2s, background 0.2s;
    }

    .nav-links a:hover { color: var(--text); background: rgba(255,255,255,0.04); }

    .nav-cta {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 8px 16px;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--accent-2), var(--accent));
      color: #022c22 !important;
      font-weight: 600;
      font-size: 13px;
    }

    .nav-cta:hover { opacity: 0.9; color: #022c22 !important; }

    /* Hero */
    .hero {
      padding: 72px 0 48px;
    }

    .badge-row {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 24px;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      padding: 6px 12px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 500;
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.03);
      color: var(--muted);
    }

    .badge.live {
      border-color: rgba(52,211,153,0.3);
      background: rgba(52,211,153,0.08);
      color: var(--accent);
    }

    .badge.live::before {
      content: '';
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--accent);
      animation: pulse 2s infinite;
    }

    @keyframes pulse {
      0%, 100% { opacity: 1; }
      50% { opacity: 0.4; }
    }

    .hero h1 {
      font-size: clamp(2rem, 5vw, 3.2rem);
      font-weight: 700;
      line-height: 1.15;
      letter-spacing: -0.02em;
      max-width: 720px;
    }

    .hero h1 span {
      background: linear-gradient(90deg, var(--accent), var(--blue));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
    }

    .hero-sub {
      margin-top: 20px;
      font-size: 18px;
      color: var(--muted);
      max-width: 640px;
    }

    .hero-actions {
      margin-top: 32px;
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 12px 20px;
      border-radius: 10px;
      font-weight: 600;
      font-size: 14px;
      border: none;
      cursor: pointer;
      transition: transform 0.15s, opacity 0.15s;
    }

    .btn:hover { transform: translateY(-1px); }

    .btn-primary {
      background: linear-gradient(90deg, var(--accent-2), var(--accent));
      color: #022c22;
    }

    .btn-secondary {
      background: rgba(255,255,255,0.05);
      color: var(--text);
      border: 1px solid var(--border);
    }

    .btn-secondary:hover { background: rgba(255,255,255,0.08); color: var(--text); }

    /* Stats */
    .stats {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
      margin-top: 56px;
    }

    .stat {
      padding: 20px;
      border-radius: var(--radius);
      background: var(--surface);
      border: 1px solid var(--border);
    }

    .stat-num {
      font-size: 28px;
      font-weight: 700;
      color: var(--accent);
      font-family: 'JetBrains Mono', monospace;
    }

    .stat-label {
      margin-top: 4px;
      font-size: 13px;
      color: var(--muted);
    }

    /* Sections */
    section.block { padding: 64px 0; }

    .section-label {
      font-family: 'JetBrains Mono', monospace;
      font-size: 12px;
      color: var(--accent);
      text-transform: uppercase;
      letter-spacing: 0.12em;
      margin-bottom: 12px;
    }

    .section-title {
      font-size: clamp(1.5rem, 3vw, 2rem);
      font-weight: 700;
      letter-spacing: -0.02em;
      margin-bottom: 32px;
    }

    /* About */
    .about-grid {
      display: grid;
      grid-template-columns: 1fr 280px;
      gap: 32px;
      align-items: start;
    }

    .about-text {
      color: #c5d0dc;
      font-size: 16px;
    }

    .about-text p + p { margin-top: 16px; }

    .contact-card {
      padding: 24px;
      border-radius: var(--radius);
      background: var(--surface);
      border: 1px solid var(--border);
    }

    .contact-card h3 {
      font-size: 15px;
      margin-bottom: 16px;
    }

    .contact-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 14px;
      color: var(--muted);
      margin-bottom: 12px;
    }

    .contact-item:last-child { margin-bottom: 0; }
    .contact-item strong { color: var(--text); display: block; font-size: 13px; }

    .social-links {
      display: flex;
      gap: 8px;
      margin-top: 16px;
      padding-top: 16px;
      border-top: 1px solid var(--border);
    }

    .social-links a {
      padding: 8px 14px;
      border-radius: 8px;
      background: rgba(255,255,255,0.04);
      border: 1px solid var(--border);
      color: var(--muted);
      font-size: 13px;
    }

    .social-links a:hover { color: var(--accent); border-color: rgba(52,211,153,0.3); }

    /* Experience timeline */
    .timeline { display: flex; flex-direction: column; gap: 0; }

    .timeline-item {
      display: grid;
      grid-template-columns: 140px 1fr;
      gap: 24px;
      padding: 28px 0;
      border-bottom: 1px solid var(--border);
      position: relative;
    }

    .timeline-item:last-child { border-bottom: none; }

    .timeline-date {
      font-family: 'JetBrains Mono', monospace;
      font-size: 12px;
      color: var(--muted);
      padding-top: 4px;
    }

    .timeline-body h3 {
      font-size: 17px;
      font-weight: 600;
      margin-bottom: 4px;
    }

    .timeline-meta {
      font-size: 14px;
      color: var(--accent);
      margin-bottom: 12px;
    }

    .timeline-body ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .timeline-body li {
      font-size: 14px;
      color: var(--muted);
      padding-left: 16px;
      position: relative;
    }

    .timeline-body li::before {
      content: '→';
      position: absolute;
      left: 0;
      color: var(--accent-2);
      font-size: 12px;
    }

    /* Skills */
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 16px;
    }

    .skill-group {
      padding: 20px;
      border-radius: var(--radius);
      background: var(--surface);
      border: 1px solid var(--border);
    }

    .skill-group h3 {
      font-size: 13px;
      font-weight: 600;
      color: var(--accent);
      text-transform: uppercase;
      letter-spacing: 0.06em;
      margin-bottom: 12px;
    }

    .skill-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
    }

    .skill-tag {
      padding: 5px 10px;
      border-radius: 6px;
      background: rgba(255,255,255,0.04);
      border: 1px solid var(--border);
      font-size: 12px;
      color: #b8c4d0;
    }

    /* Projects */
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 20px;
    }

    .project-card {
      padding: 24px;
      border-radius: var(--radius);
      background: var(--surface);
      border: 1px solid var(--border);
      display: flex;
      flex-direction: column;
      transition: border-color 0.2s, transform 0.2s;
    }

    .project-card:hover {
      border-color: rgba(52,211,153,0.25);
      transform: translateY(-2px);
    }

    .project-type {
      font-family: 'JetBrains Mono', monospace;
      font-size: 11px;
      color: var(--accent);
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 10px;
    }

    .project-card h3 {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .project-card p {
      font-size: 14px;
      color: var(--muted);
      flex: 1;
    }

    .project-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 6px;
      margin: 16px 0;
    }

    .project-link {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      margin-top: auto;
      padding-top: 16px;
      font-size: 14px;
      font-weight: 500;
    }

    .project-link::after { content: '↗'; font-size: 13px; }

    /* Education & certs */
    .info-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }

    .info-card {
      padding: 24px;
      border-radius: var(--radius);
      background: var(--surface);
      border: 1px solid var(--border);
    }

    .info-card h3 { font-size: 16px; margin-bottom: 6px; }
    .info-card .meta { font-size: 14px; color: var(--muted); }

    /* Contact */
    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 300px;
      gap: 24px;
    }

    .form-card {
      padding: 28px;
      border-radius: var(--radius);
      background: var(--surface);
      border: 1px solid var(--border);
    }

    .form-group { margin-bottom: 16px; }

    .form-group label {
      display: block;
      font-size: 13px;
      font-weight: 500;
      color: var(--muted);
      margin-bottom: 6px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 12px 14px;
      border-radius: 10px;
      border: 1px solid var(--border);
      background: rgba(255,255,255,0.03);
      color: var(--text);
      font-family: inherit;
      font-size: 14px;
      transition: border-color 0.2s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border-color: rgba(52,211,153,0.4);
    }

    .form-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      margin-top: 8px;
    }

    .btn-download {
      background: linear-gradient(90deg, #1d4ed8, var(--blue));
      color: #fff;
    }

    #toast {
      display: none;
      margin-top: 16px;
      padding: 12px 16px;
      border-radius: 10px;
      text-align: center;
      font-weight: 500;
      font-size: 14px;
    }

    /* Footer */
    footer {
      padding: 40px 0 48px;
      border-top: 1px solid var(--border);
      text-align: center;
      color: var(--muted);
      font-size: 13px;
    }

    /* Mobile nav toggle */
    .nav-toggle {
      display: none;
      background: none;
      border: 1px solid var(--border);
      color: var(--text);
      padding: 8px 10px;
      border-radius: 8px;
      cursor: pointer;
      font-size: 18px;
    }

    @media (max-width: 768px) {
      .nav-toggle { display: block; }

      .nav-links {
        display: none;
        position: absolute;
        top: var(--nav-h);
        left: 0;
        right: 0;
        flex-direction: column;
        padding: 16px 24px;
        background: rgba(6,11,20,0.97);
        border-bottom: 1px solid var(--border);
      }

      .nav-links.open { display: flex; }

      .stats { grid-template-columns: repeat(2, 1fr); }
      .about-grid { grid-template-columns: 1fr; }
      .timeline-item { grid-template-columns: 1fr; gap: 8px; }
      .info-grid { grid-template-columns: 1fr; }
      .contact-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>
  <nav>
    <div class="nav-inner">
      <a class="brand" href="#">
        <span class="brand-mark">RM</span>
        Ramsheed Medappil
      </a>
      <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">☰</button>
      <ul class="nav-links" id="navLinks">
        <li><a href="#about">About</a></li>
        <li><a href="#experience">Experience</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact" class="nav-cta">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="wrap">
    <header class="hero">
      <div class="badge-row">
        <span class="badge live">Available — Immediate Joiner</span>
        <span class="badge">Dubai, UAE</span>
        <span class="badge">Open to Relocate</span>
      </div>

      <h1>Senior Full Stack Developer building <span>enterprise-scale</span> web platforms</h1>

      <p class="hero-sub">
        5+ years designing and shipping CRM, ERP, e-commerce, and LMS applications for 10,000+ users — from architecture and APIs to CI/CD and cloud infrastructure.
      </p>

      <div class="hero-actions">
        <a class="btn btn-primary" href="#projects">View my work</a>
        <a class="btn btn-secondary" href="download_cv.php">Download CV</a>
        <a class="btn btn-secondary" href="https://www.linkedin.com/in/ramsheed-medappil-4a9384170/" target="_blank" rel="noopener">LinkedIn</a>
      </div>

      <div class="stats">
        <div class="stat">
          <div class="stat-num">10K+</div>
          <div class="stat-label">Active platform users</div>
        </div>
        <div class="stat">
          <div class="stat-num">20K+</div>
          <div class="stat-label">Property listings managed</div>
        </div>
        <div class="stat">
          <div class="stat-num">5+</div>
          <div class="stat-label">Years of experience</div>
        </div>
        <div class="stat">
          <div class="stat-num">5</div>
          <div class="stat-label">Developers led & mentored</div>
        </div>
      </div>
    </header>

    <section class="block" id="about">
      <div class="section-label">About</div>
      <h2 class="section-title">Building software that scales with the business</h2>

      <div class="about-grid">
        <div class="about-text">
          <p>
            I'm a Senior Full Stack Developer with deep experience across Real Estate, CRM, ERP, E-commerce, and Learning Management domains. I architect high-performance applications, lead engineering teams, and deliver cloud-based solutions using modern DevOps practices.
          </p>
          <p>
            At PropCRM, I built an enterprise CRM-ERP platform serving 10+ leading UAE real estate companies — handling lead management, sales pipelines, property management, marketing automation, and reporting. I've integrated AI services, Stripe, Twilio, Firebase, Google Maps, and WhatsApp into production systems while keeping page loads in the milliseconds.
          </p>
          <p>
            I thrive at the intersection of software architecture, team leadership, and direct client collaboration — from sprint planning and technical interviews to production infrastructure on AWS and DigitalOcean.
          </p>
        </div>

        <aside class="contact-card">
          <h3>Contact</h3>
          <div class="contact-item">
            <div>
              <strong>Email</strong>
              <a href="mailto:me@ramsheed.com">me@ramsheed.com</a>
            </div>
          </div>
          <div class="contact-item">
            <div>
              <strong>Phone</strong>
              +971 50 820 0747
            </div>
          </div>
          <div class="contact-item">
            <div>
              <strong>Location</strong>
              Dubai, UAE
            </div>
          </div>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/ramsheed-medappil-4a9384170/" target="_blank" rel="noopener">LinkedIn</a>
            <a href="download_cv.php">CV</a>
          </div>
        </aside>
      </div>
    </section>

    <section class="block" id="experience">
      <div class="section-label">Experience</div>
      <h2 class="section-title">Where I've shipped production software</h2>

      <div class="timeline">
        <article class="timeline-item">
          <div class="timeline-date">Mar 2023<br>Jun 2026</div>
          <div class="timeline-body">
            <h3>Senior Full Stack Developer</h3>
            <div class="timeline-meta">PropCRM · Dubai, UAE</div>
            <ul>
              <li>Architected enterprise CRM-ERP platform for 10,000+ users across 10 leading real estate companies</li>
              <li>Designed scalable architecture supporting 20,000+ property listings and leads</li>
              <li>Built CRM modules: Lead Management, Sales Pipeline, Property Management, Marketing Automation, Client Management, and Reporting</li>
              <li>Led a team of 5 junior developers within a 15-member engineering team</li>
              <li>Conducted technical interviews, code reviews, sprint planning, and mentoring sessions</li>
              <li>Reduced page load times to milliseconds through backend optimization, database tuning, and frontend performance work</li>
              <li>Built secure REST APIs integrated with AI, Stripe, Twilio, Firebase, Google Maps, and WhatsApp</li>
              <li>Automated deployments with GitHub Actions; managed AWS EC2, DigitalOcean, Docker, Linux, and Nginx production infrastructure</li>
            </ul>
          </div>
        </article>

        <article class="timeline-item">
          <div class="timeline-date">Jan 2022<br>Jan 2023</div>
          <div class="timeline-body">
            <h3>Full Stack Developer</h3>
            <div class="timeline-meta">Hexnine Technologies · Kerala, India</div>
            <ul>
              <li>Built scalable e-commerce platforms and Learning Management Systems from scratch</li>
              <li>Developed enterprise CRM solutions using Laravel and CodeIgniter</li>
              <li>Designed REST APIs for third-party integrations and client applications</li>
              <li>Implemented Docker-based workflows and GitHub Actions CI/CD pipelines</li>
              <li>Optimized application performance and improved maintainability through modern engineering practices</li>
            </ul>
          </div>
        </article>

        <article class="timeline-item">
          <div class="timeline-date">Nov 2020<br>Dec 2021</div>
          <div class="timeline-body">
            <h3>Software Developer</h3>
            <div class="timeline-meta">Foxiom Leads · Kerala, India</div>
            <ul>
              <li>Developed responsive web applications using Laravel, PHP, JavaScript, HTML, CSS, and MySQL</li>
              <li>Built reusable backend modules and RESTful APIs</li>
              <li>Designed optimized database schemas and complex SQL queries</li>
              <li>Participated in debugging, testing, code reviews, and sprint activities</li>
            </ul>
          </div>
        </article>
      </div>
    </section>

    <section class="block" id="skills">
      <div class="section-label">Skills</div>
      <h2 class="section-title">Technologies I work with</h2>

      <div class="skills-grid">
        <div class="skill-group">
          <h3>Languages</h3>
          <div class="skill-tags">
            <span class="skill-tag">PHP</span>
            <span class="skill-tag">JavaScript</span>
            <span class="skill-tag">TypeScript</span>
            <span class="skill-tag">Python</span>
            <span class="skill-tag">HTML5</span>
            <span class="skill-tag">CSS3</span>
          </div>
        </div>
        <div class="skill-group">
          <h3>Frameworks</h3>
          <div class="skill-tags">
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">Vue.js</span>
            <span class="skill-tag">React</span>
            <span class="skill-tag">Next.js</span>
            <span class="skill-tag">Nuxt.js</span>
            <span class="skill-tag">CodeIgniter</span>
          </div>
        </div>
        <div class="skill-group">
          <h3>Databases</h3>
          <div class="skill-tags">
            <span class="skill-tag">MySQL</span>
            <span class="skill-tag">PostgreSQL</span>
            <span class="skill-tag">Redis</span>
          </div>
        </div>
        <div class="skill-group">
          <h3>Cloud & DevOps</h3>
          <div class="skill-tags">
            <span class="skill-tag">AWS EC2 / S3 / RDS</span>
            <span class="skill-tag">DigitalOcean</span>
            <span class="skill-tag">Docker</span>
            <span class="skill-tag">Kubernetes</span>
            <span class="skill-tag">GitHub Actions</span>
            <span class="skill-tag">Linux</span>
            <span class="skill-tag">Nginx</span>
            <span class="skill-tag">CI/CD</span>
          </div>
        </div>
        <div class="skill-group">
          <h3>APIs & Integrations</h3>
          <div class="skill-tags">
            <span class="skill-tag">REST APIs</span>
            <span class="skill-tag">GraphQL</span>
            <span class="skill-tag">OAuth / JWT</span>
            <span class="skill-tag">Stripe</span>
            <span class="skill-tag">Twilio</span>
            <span class="skill-tag">Firebase</span>
            <span class="skill-tag">OpenAI API</span>
            <span class="skill-tag">WhatsApp API</span>
            <span class="skill-tag">Google Maps</span>
          </div>
        </div>
        <div class="skill-group">
          <h3>Practices</h3>
          <div class="skill-tags">
            <span class="skill-tag">Software Architecture</span>
            <span class="skill-tag">Microservices</span>
            <span class="skill-tag">Agile Scrum</span>
            <span class="skill-tag">Team Leadership</span>
            <span class="skill-tag">Code Review</span>
            <span class="skill-tag">Technical Interviewing</span>
          </div>
        </div>
      </div>
    </section>

    <section class="block" id="projects">
      <div class="section-label">Projects</div>
      <h2 class="section-title">Selected work & side projects</h2>

      <div class="projects-grid">
        <article class="project-card">
          <div class="project-type">Enterprise · CRM-ERP</div>
          <h3>PropCRM Platform</h3>
          <p>Full-stack CRM-ERP for UAE real estate — lead management, sales pipelines, property listings, marketing automation, and client reporting at enterprise scale.</p>
          <div class="project-tags">
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">Vue.js</span>
            <span class="skill-tag">AWS</span>
            <span class="skill-tag">Docker</span>
            <span class="skill-tag">GitHub Actions</span>
          </div>
        </article>

        <article class="project-card">
          <div class="project-type">Open Source · Developer Tool</div>
          <h3>Packito</h3>
          <p>Laravel package generator that scaffolds migrations, models, controllers, routes, and CI configurations — built to speed up developer workflows.</p>
          <div class="project-tags">
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">PHP</span>
            <span class="skill-tag">CLI</span>
          </div>
          <a class="project-link" href="https://packito.ramsheed.com" target="_blank" rel="noopener">Visit Packito</a>
        </article>

        <article class="project-card">
          <div class="project-type">E-commerce · Multi-vendor</div>
          <h3>Winscart</h3>
          <p>Scalable multi-vendor e-commerce platform with payment integrations, responsive UI, and automated CI/CD deployment pipelines.</p>
          <div class="project-tags">
            <span class="skill-tag">Laravel</span>
            <span class="skill-tag">Vue.js</span>
            <span class="skill-tag">Stripe</span>
            <span class="skill-tag">Docker</span>
          </div>
          <a class="project-link" href="https://winscart.com" target="_blank" rel="noopener">Visit Winscart</a>
        </article>
      </div>
    </section>

    <section class="block">
      <div class="section-label">Background</div>
      <h2 class="section-title">Education & certifications</h2>

      <div class="info-grid">
        <div class="info-card">
          <h3>B.Tech — Computer Science</h3>
          <div class="meta">MES College of Engineering, Kuttippuram, Kerala · 2016 – 2020</div>
        </div>
        <div class="info-card">
          <h3>Claude AI Certification</h3>
          <div class="meta">AI development and integration practices</div>
        </div>
      </div>
    </section>

    <section class="block" id="contact">
      <div class="section-label">Contact</div>
      <h2 class="section-title">Let's work together</h2>

      <div class="contact-grid">
        <div class="form-card">
          <form id="contactForm">
            <div class="form-group">
              <label for="name">Name</label>
              <input id="name" name="name" type="text" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" name="email" type="email" required />
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <div class="form-actions">
              <button class="btn btn-primary" type="submit">Send message</button>
              <a class="btn btn-download" href="download_cv.php">Download CV</a>
            </div>
          </form>
          <div id="toast"></div>
        </div>

        <aside class="contact-card">
          <h3>Get in touch</h3>
          <div class="contact-item">
            <div>
              <strong>Email</strong>
              <a href="mailto:me@ramsheed.com">me@ramsheed.com</a>
            </div>
          </div>
          <div class="contact-item">
            <div>
              <strong>Phone</strong>
              +971 50 820 0747
            </div>
          </div>
          <div class="contact-item">
            <div>
              <strong>Status</strong>
              Immediate joiner · Open to relocate
            </div>
          </div>
          <div class="social-links">
            <a href="https://www.linkedin.com/in/ramsheed-medappil-4a9384170/" target="_blank" rel="noopener">LinkedIn</a>
          </div>
        </aside>
      </div>
    </section>
  </div>

  <footer>
    <div class="wrap">© <span id="year"></span> Ramsheed Medappil — Senior Full Stack Developer</div>
  </footer>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();

    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    navToggle.addEventListener('click', () => {
      navLinks.classList.toggle('open');
    });

    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => navLinks.classList.remove('open'));
    });

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
          showToast('Message sent successfully!', '#16a34a');
          contactForm.reset();
        } else {
          showToast(data.message, '#dc2626');
        }
      } catch {
        showToast('Error connecting to server.', '#dc2626');
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
