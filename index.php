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
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Script para carregar o player Lottie para animações -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>
<body>
    <!-- Inclui o arquivo header.php usando PHP -->
    <?php include 'includes/header.php'; ?>

    <!-- Seção principal da página (Home) -->
    <section id="home" class="section">
        <div class="container">
            <!-- Container para organizar o texto e a animação lado a lado -->
            <div class="about-container">
                <!-- Div para o texto da seção home -->
                <div class="about-text">
                    <!-- Nome do desenvolvedor -->
                    <h1>José Caio</h1>
                    <!-- Subtítulo com a profissão -->
                    <p class="subtitle">Analista de Dados e Desenvolvedor de Software</p>
                    <!-- Parágrafo com uma breve descrição sobre o desenvolvedor -->
                    <p class="about-me">Transformar dados em decisões é o que me move.<br>                        
Estou em construção na área de Análise de Dados, desenvolvendo habilidades em Python, SQL e ferramentas de visualização, sempre com foco em resolver problemas reais através dos dados. <br>
Busco minha primeira oportunidade na área de tecnologia, onde eu possa aprender, evoluir e gerar impacto com o que construo.</p>
                    <!-- Botão para rolar até a seção de projetos -->
                    <a href="#projetos" class="btn">Ver Projetos</a>
                </div>
                <!-- Elemento Lottie para exibir uma animação -->
                <lottie-player
                    src="https://assets3.lottiefiles.com/packages/lf20_w51pcehl.json"
                    background="transparent"
                    speed="1"
                    style="width: 900px; height: 500px;"
                    loop
                    autoplay>
                </lottie-player>
            </div>
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
            <p><a href="https://github.com/seuusuario" target="_blank">GitHub</a></p>
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