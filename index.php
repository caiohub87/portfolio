<!-- Declaração do tipo de documento HTML5 -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Define a codificação de caracteres como UTF-8 -->
    <meta charset="UTF-8">
    <!-- Configura a viewport para dispositivos móveis -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título da página que aparece na aba do navegador -->
    <title>Portfólio - Desenvolvedor</title>
    <!-- Link para Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Inclui o arquivo header.php usando PHP -->
    <?php include 'includes/header.php'; ?>

    <!-- Seção principal da página (Home) -->
    <section id="home" class="section home-new">
        <img class="home-bg" src="https://images.pexels.com/photos/2339009/pexels-photo-2339009.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Background">
        <div class="home-overlay"></div>
        <div class="home-content-new">
            <!-- tabs -->
            <nav class="home-nav">
                <a class="home-tab active">Home</a>
                <a class="home-tab">Blog</a>
                <a class="home-tab">Album</a>
            </nav>
            <!-- card -->
            <div class="home-card">
                <div class="home-card-text">
                    <div class="home-title">José Caio</div>
                    <div class="home-subtitle">Analista de Dados e Desenvolvedor de Software</div>
                    <div class="home-desc">Transformar dados em decisões é o que me move. Estou em construção na área de Análise de Dados, desenvolvendo habilidades em Python, SQL e ferramentas de visualização.</div>
                    <div class="home-tag">🇧🇷 Brasileiro</div>
                </div>
                <img class="home-card-img" src="https://images.pexels.com/photos/248444/pexels-photo-248444.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Profile">
            </div>
            <!-- button -->
            <a href="#projetos" class="home-btn">VER PROJETOS</a>
            <p class="home-credit">powered by <a href="https://styles.master.co" class="text:underline" target="blank">Master Styles</a></p>
        </div>
    </section>

    <!-- Seção Sobre -->
    <section id="sobre" class="section">
        <div class="container">
            <!-- Título da seção -->
            <h2>Sobre</h2>
            <!-- Parágrafo com informações sobre o desenvolvedor -->
            <p>Estou estudando PHP, banco de dados e desenvolvimento web. Apaixonado por criar soluções digitais e sempre buscando aprender novas tecnologias.</p>
        </div>
    </section>

    <!-- Seção Projetos -->
    <section id="projetos" class="section">
        <div class="container">
            <!-- Título da seção -->
            <h2>Projetos</h2>
            <!-- Grid para organizar os cards de projetos -->
            <div class="projects-grid">
                <!-- Primeiro card de projeto -->
                <div class="project-card">
                    <h3>Sistema de Gerenciamento</h3>
                    <p>Um sistema simples para gerenciar tarefas e usuários, desenvolvido com PHP e MySQL.</p>
                    <p><strong>Tecnologias:</strong> PHP, MySQL, HTML, CSS</p>
                </div>
                <!-- Segundo card de projeto -->
                <div class="project-card">
                    <h3>Site Pessoal</h3>
                    <p>Portfólio pessoal responsivo com seções sobre mim e meus trabalhos.</p>
                    <p><strong>Tecnologias:</strong> HTML, CSS, JavaScript</p>
                </div>
                <!-- Terceiro card de projeto -->
                <div class="project-card">
                    <h3>API de Blog</h3>
                    <p>API RESTful para um blog, com autenticação e CRUD de posts.</p>
                    <p><strong>Tecnologias:</strong> PHP, MySQL, JSON</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Tecnologias -->
    <section id="tecnologias" class="section">
        <div class="container">
            <!-- Título da seção -->
            <h2>Tecnologias</h2>
            <!-- Lista não ordenada das tecnologias -->
            <ul class="tech-list">
                <li>PHP</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
                <li>MySQL</li>
            </ul>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contato" class="section">
        <div class="container">
            <!-- Título da seção -->
            <h2>Contato</h2>
            <!-- Parágrafo com email -->
            <p>Email: seuemail@example.com</p>
            <!-- Link para o GitHub -->
            <p><a href="https://github.com/caiohub87" target="_blank">GitHub</a></p>
            <!-- Ícones de redes sociais -->
            <div class="social-icons">
                <a class="glassIco" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="glassIco" href="#"><i class="fab fa-instagram"></i></a>
                <a class="glassIco" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="glassIco" href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </section>

    <!-- Inclui o arquivo footer.php usando PHP -->
    <?php include 'includes/footer.php'; ?>

    <!-- Script JavaScript para navegação suave e menu hambúrguer -->
    <script>
        // Seleciona todos os links que começam com # (âncoras)
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            // Adiciona um event listener para o clique
            anchor.addEventListener('click', function (e) {
                // Previne o comportamento padrão do link
                e.preventDefault();
                // Faz o scroll suave até o elemento alvo
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Menu hambúrguer
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            hamburger.classList.toggle('active');
        });

        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                hamburger.classList.remove('active');
            });
        });
    </script>
</body>
</html>