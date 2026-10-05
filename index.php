<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Meu Portfólio</title>

    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <!-- =========================
         MENU DE NAVEGAÇÃO
    ========================== -->
    <header>
        <nav class="navbar">

            <h2 class="logo">Meu Portfólio</h2>

            <ul class="menu">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>

        </nav>
    </header>


    <main>

        <!-- =========================
             INÍCIO
        ========================== -->
        <section id="inicio" class="inicio">

            <div class="inicio-conteudo">

                <p class="saudacao">Olá! Eu sou</p>

                <h1>Lucas Luz</h1>

                <h2>Desenvolvedor em formação</h2>

                <p>
                    Professor de Desenvolvimento de Sistemas,
                    engenheiro de inteligência artificial, e
                    CEO de um ecossistema de tecnologia da
                    informação.
                </p>

                <a href="#projetos" class="botao">
                    Ver meus projetos
                </a>

            </div>

        </section>


        <!-- =========================
             SOBRE MIM
        ========================== -->
        <section id="sobre" class="secao">

            <h2 class="titulo-secao">Sobre mim</h2>

            <div class="sobre-conteudo">

                <div class="foto">
                    JS
                </div>

                <div class="sobre-texto">

                    <h3>Quem sou eu?</h3>

                    <p>
                        Meu nome é Lucas Luz e sou professor
                        de Desenvolvimento de Sistemas.
                    </p>

                    <p>
                        Atualmente estou dando aulas de desenvolvimento
                        web, programação e criação de sistemas.
                        Este portfólio reúne alguns dos projetos
                        desenvolvidos durante o curso junto dos alunos.
                    </p>

                    <p>
                        Meu objetivo é continuar evoluindo como
                        desenvolvedor e aprender novas tecnologias.
                    </p>

                </div>

            </div>

        </section>


        <!-- =========================
             HABILIDADES
        ========================== -->
        <section id="habilidades" class="secao secao-destaque">

            <h2 class="titulo-secao">Minhas habilidades</h2>

            <p class="subtitulo-secao">
                Algumas tecnologias que estou estudando:
            </p>

            <div class="lista-habilidades">

                <div class="habilidade">
                    HTML
                </div>

                <div class="habilidade">
                    CSS
                </div>

                <div class="habilidade">
                    PHP
                </div>

                <div class="habilidade">
                    Lógica de Programação
                </div>

                <div class="habilidade">
                    Git
                </div>

            </div>

        </section>


        <!-- =========================
             PROJETOS
        ========================== -->
        <section id="projetos" class="secao">

            <h2 class="titulo-secao">Meus projetos</h2>

            <p class="subtitulo-secao">
                Alguns projetos desenvolvidos durante as aulas.
            </p>


            <div class="projetos-container">

                <!-- PROJETO 1 -->
                <div class="projeto-card">

                    <div class="projeto-numero">
                        01
                    </div>

                    <h3>Verificação de idade</h3>

                    <p>
                        Sistema desenvolvido para praticar
                        formulários e manipulação de dados.
                    </p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                    </div>

                    <a href="projetos/idade.php" class="link-projeto">
                        Ver projeto →
                    </a>

                </div>


                <!-- PROJETO 2 -->
                <div class="projeto-card">

                    <div class="projeto-numero">
                        02
                    </div>

                    <h3>Verificação de notas</h3>

                    <p>
                        Aplicação criada para trabalhar com
                        notas, médias e estruturas condicionais.
                    </p>

                    <div class="tecnologias">
                        <span>PHP</span>
                        <span>HTML</span>
                        <span>CSS</span>
                    </div>

                    <a href="projetos/notas.php" class="link-projeto">
                        Ver projeto →
                    </a>

                </div>


                <!-- PROJETO 3 -->
                <div class="projeto-card">

                    <div class="projeto-numero">
                        03
                    </div>

                    <h3>Cadastro de jogos</h3>

                    <p>
                        Atividade desenvolvida para praticar
                        o desenvolvimento web junto do MySQL.
                    </p>

                    <div class="tecnologias">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>

                    <a href="projetos/jogos.php" class="link-projeto">
                        Ver projeto →
                    </a>

                </div>

            </div>

        </section>


        <!-- =========================
             CONTATO
        ========================== -->
        <section id="contato" class="secao secao-destaque">

            <h2 class="titulo-secao">Contato</h2>

            <p class="subtitulo-secao">
                Quer entrar em contato comigo?
            </p>

            <div class="contato-container">

                <div class="contato-item">
                    <h3>Whatsapp</h3>
                    <p>+55 41 99797-2822</p>
                </div>

                <div class="contato-item">
                    <h3>GitHub</h3>
                    <p>github.com/lookdev-luz</p>
                </div>

                <div class="contato-item">
                    <h3>LinkedIn</h3>
                    <p>linkedin.com/in/lucasdluz</p>
                </div>

            </div>

        </section>

    </main>


    <!-- =========================
         RODAPÉ
    ========================== -->
    <footer>

        <p>
            Desenvolvido por <a href="https://lucasluz.me">Lucas Luz</a> • 2026
        </p>

    </footer>

</body>

</html>