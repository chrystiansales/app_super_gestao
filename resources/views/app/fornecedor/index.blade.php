<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel Principal</title>
    <style>
        :root {
            --primary: #4f46e5;
            --bg: #f9fafb;
            --bg-dark: #1f2937;
            --text: #1f2937;
            --text-light: #ffffff;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: var(--bg);
            color: var(--text);
            display: flex;
            height: 100vh;
        }

        aside {
            background-color: var(--primary);
            color: var(--text-light);
            width: 240px;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            position: fixed;
            height: 100%;
        }

        aside h2 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-align: center;
        }

        aside nav a {
            color: var(--text-light);
            text-decoration: none;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            transition: background 0.3s;
            display: block;
        }

        aside nav a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        main {
            margin-left: 240px;
            padding: 2rem;
            flex: 1;
            overflow-y: auto;
        }

        header {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        section.card {
            background-color: white;
            border-radius: 1rem;
            padding: 1.5rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        @media (max-width: 768px) {
            aside {
                position: absolute;
                transform: translateX(-100%);
                transition: transform 0.3s;
                z-index: 10;
            }

            aside.open {
                transform: translateX(0);
            }

            main {
                margin-left: 0;
                padding: 1rem;
            }

            #menu-btn {
                display: block;
                position: absolute;
                top: 1rem;
                left: 1rem;
                font-size: 1.5rem;
                cursor: pointer;
            }
        }

        #menu-btn {
            display: none;
        }
    </style>
</head>

<body>
    <aside id="sidebar">
        <h2>Meu Sistema</h2>
        <nav>
            <a href="#">🏠 Dashboard</a>
            <a href="#">📋 Cadastros</a>
            <a href="#">📊 Relatórios</a>
        </nav>
    </aside>

    <main>
        <div id="menu-btn">☰</div>
        <header>Bem-vindo(a)!</header>

        <section class="card">
            <h3>Cadastros</h3>
            <p>Acesse aqui os cadastros de usuários, produtos, serviços e mais.</p>
        </section>

        <section class="card">
            <h3>Relatórios</h3>
            <p>Gere relatórios analíticos, gráficos e exporte para PDF ou Excel.</p>
        </section>
    </main>

    <script>
        const btn = document.getElementById('menu-btn');
        const sidebar = document.getElementById('sidebar');

        btn.addEventListener('click', () => {
            sidebar.classList.toggle('open');
        });
    </script>
</body>

</html>
