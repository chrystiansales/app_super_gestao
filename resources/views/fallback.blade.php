<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oops! Algo deu errado</title>
    <style>
        :root {
            --primary: #2563eb;
            --error: #dc2626;
            --background: #f8fafc;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: var(--background);
            padding: 1rem;
        }

        .fallback-container {
            text-align: center;
            max-width: 600px;
            padding: 2rem;
            border-radius: 1rem;
            background: white;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            animation: fadeIn 0.5s ease-out;
        }

        .error-icon {
            width: 100px;
            height: 100px;
            margin: 0 auto 1.5rem;
            color: var(--error);
            filter: drop-shadow(0 4px 6px rgba(220, 38, 38, 0.1));
        }

        h1 {
            font-size: 1.875rem;
            color: var(--error);
            margin-bottom: 1rem;
        }

        p {
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .retry-button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, opacity 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .retry-button:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .loading {
            display: none;
            width: 1.5rem;
            height: 1.5rem;
            animation: spin 1s linear infinite;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 480px) {
            .fallback-container {
                padding: 1.5rem;
            }

            h1 {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="fallback-container">
        <svg class="error-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
        </svg>

        <h1>Oops! Algo deu errado</h1>
        <p>Não foi possível carregar o conteúdo solicitado. Por favor, verifique sua conexão com a internet e tente novamente.</p>

        <button class="retry-button" onclick="handleRetry()">
            <span>Tentar novamente</span>
            <svg class="loading" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
            </svg>
        </button>
    </div>

    <script>
        function handleRetry() {
            const button = document.querySelector('.retry-button');
            const loadingIcon = button.querySelector('.loading');

            // Mostrar animação de loading
            button.disabled = true;
            loadingIcon.style.display = 'block';
            button.querySelector('span').textContent = 'Carregando...';

            // Simular tentativa de reconexão
            setTimeout(() => {
                // Aqui você pode adicionar sua lógica de reconexão real
                //window.location.reload();
                window.location.href = '/';

            }, 2000);
        }
    </script>
</body>

</html>
