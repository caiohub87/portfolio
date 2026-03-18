<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Desenvolvedor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section id="home" class="section">
        <div class="container">
            <h1>Seu Nome</h1>
            <p class="subtitle">Desenvolvedor em formação</p>
            <a href="#projetos" class="btn">Ver Projetos</a>
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