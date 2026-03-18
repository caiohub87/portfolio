<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Desenvolvedor</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section id="home" class="section">
        <div class="container">
            <div class="about-container">
                <div class="about-text">
                    <h1>Seu Nome</h1>
                    <p class="subtitle">Desenvolvedor em formação</p>
                    <p class="about-me">Sou apaixonado por tecnologia e análise de dados. Como desenvolvedor em formação, estou sempre explorando novas ferramentas e linguagens para criar soluções inovadoras e eficientes.</p>
                    <a href="#projetos" class="btn">Ver Projetos</a>
                </div>
                <lottie-player
                    src="https://assets2.lottiefiles.com/packages/lf20_q5pk6p1k.json"
                    background="transparent"
                    speed="1"
                    style="width: 250px; height: 250px;"
                    loop
                    autoplay>
                </lottie-player>
            </div>
        </div>
    </section>

    <section id="sobre" class="section">
        <div class="container">
            <h2>Sobre</h2>
            <p>Estou estudando PHP, banco de dados e desenvolvimento web. Apaixonado por criar soluções digitais e sempre buscando aprender novas tecnologias.</p>
        </div>
    </section>

    <section id="projetos" class="section">
        <div class="container">
            <h2>Projetos</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <h3>Sistema de Gerenciamento</h3>
                    <p>Um sistema simples para gerenciar tarefas e usuários, desenvolvido com PHP e MySQL.</p>
                    <p><strong>Tecnologias:</strong> PHP, MySQL, HTML, CSS</p>
                </div>
                <div class="project-card">
                    <h3>Site Pessoal</h3>
                    <p>Portfólio pessoal responsivo com seções sobre mim e meus trabalhos.</p>
                    <p><strong>Tecnologias:</strong> HTML, CSS, JavaScript</p>
                </div>
                <div class="project-card">
                    <h3>API de Blog</h3>
                    <p>API RESTful para um blog, com autenticação e CRUD de posts.</p>
                    <p><strong>Tecnologias:</strong> PHP, MySQL, JSON</p>
                </div>
            </div>
        </div>
    </section>

    <section id="tecnologias" class="section">
        <div class="container">
            <h2>Tecnologias</h2>
            <ul class="tech-list">
                <li>PHP</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>MySQL</li>
            </ul>
        </div>
    </section>

    <section id="contato" class="section">
        <div class="container">
            <h2>Contato</h2>
            <p>Email: seuemail@example.com</p>
            <p><a href="https://github.com/seuusuario" target="_blank">GitHub</a></p>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script>
        // Navegação suave
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>
</html>