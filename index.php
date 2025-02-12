<?php include 'header.php'; ?>

    <section id="home" class="hero">
        <div class="hero-content">
            <h2>Hi, I'm Sahat Tua Sinaga</h2>
            <h3>Web Developer</h3>
            <p>Keep learning</p>
            <a href="#contact" class="cta-button">Get in Touch</a>
        </div>
        <div class="hero-image">
            <img src="images/d5726f1c-f3fe-4519-b0e6-724e167eee76.jpeg" alt="Sahat Tua Sinaga">
        </div>
    </section>

    <section id="about" class="about">
        <h2 class="section-title">About Me</h2>
        <div class="about-content">
            <div class="about-text">
                <p>I'm a passionate Web Developer with 1+ years of experience in web development. 
                Specialized in creating responsive and user-friendly websites.</p>
                <h4>Skills:</h4>
                <div class="skills">
                    <span>PHP</span>
                    <span>JavaScript</span>
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>MySQL</span>
                </div>
            </div>
            <div class="about-image">
                <img src="images/d5726f1c-f3fe-4519-b0e6-724e167eee76.jpeg" alt="About Me">
            </div>
        </div>
    </section>

    <section id="projects" class="projects">
        <h2 class="section-title">My Projects</h2>
        <div class="project-grid">
            <?php include 'projects.php'; ?>
            <?php foreach ($projects as $project): ?>
                <div class="project-card">
                    <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
                    <h3><?= $project['title'] ?></h3>
                    <p><?= $project['description'] ?></p>
                    <a href="<?= $project['link'] ?>" target="_blank" class="project-link">View Project</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2 class="section-title">Contact Me</h2>
        <div class="contact-container">
            <form action="send_email.php" method="POST" class="contact-form">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
            <div class="contact-info">
                <h3>Let's Connect!</h3>
                <p><i class="fas fa-envelope"></i> john.doe@example.com</p>
                <p><i class="fas fa-phone"></i> +1 234 567 890</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>