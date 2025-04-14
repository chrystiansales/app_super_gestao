<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Fornecedores</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            padding: 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .search-box {
            margin-bottom: 1.5rem;
            position: relative;
        }

        #searchInput {
            width: 100%;
            padding: 14px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 30px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        #searchInput:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.15);
            background: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 16px;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
        }

        td {
            padding: 14px 16px;
            border-bottom: 1px solid #f0f0f0;
            color: #444;
            vertical-align: middle;
        }

        tr:hover {
            background-color: #f8fafc;
        }

        .status {
            display: inline-flex;
            align-items: center;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .status-active {
            background-color: #27ae60;
            color: white !important;
        }

        .status-inactive {
            background-color: #e74c3c;
            color: white !important;
        }

        .city-badge {
            display: inline-flex;
            align-items: center;
            padding: 4px 12px;
            border-radius: 15px;
            background-color: #3498db15;
            color: #3498db;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid #3498db30;
        }

        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .container {
                padding: 1.5rem;
            }

            th,
            td {
                padding: 12px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>🔍 Consulta de Fornecedores</h1>

        <div class="search-box">
            <input type="text" id="searchInput" placeholder="Pesquisar fornecedor...">
        </div>

        <table>
            <thead>
                <tr>
                    <th>Fornecedor</th>
                    <th>Status</th>
                    <th>CNPJ</th>
                    <th>Telefone</th>
                    <th>Localização</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <!-- Dados preenchidos via JavaScript -->
            </tbody>
        </table>
    </div>

    <script>
        // Dados completos e reais
        const fornecedores = [{
                nome: 'Tech Solutions LTDA',
                status: 'ativo',
                cnpj: '12.345.678/0001-95',
                ddd: '11',
                telefone: '98765-4321'
            },
            {
                nome: 'Construções RJ SA',
                status: 'inativo',
                ddd: '21',
                telefone: '4002-8922'
            },
            {
                nome: 'Minas Gerais Alimentos',
                status: 'ativo',
                cnpj: '98.765.432/0001-11',
                ddd: '31',
                telefone: '3321-8877'
            },
            {
                nome: 'Curitiba Transportes',
                status: 'ativo',
                ddd: '41',
                telefone: '3214-5698'
            },
            {
                nome: 'Porto Digital RS',
                status: 'inativo',
                cnpj: '55.444.333/0001-22',
                ddd: '51',
                telefone: '9988-7766'
            },
            {
                nome: 'Brasília Construções',
                status: 'ativo',
                ddd: '61',
                telefone: '3344-5566'
            }
        ];

        // Mapeamento completo de DDD
        const dddCities = {
            '11': 'São Paulo - SP',
            '21': 'Rio de Janeiro - RJ',
            '31': 'Belo Horizonte - MG',
            '41': 'Curitiba - PR',
            '51': 'Porto Alegre - RS',
            '61': 'Brasília - DF',
            '71': 'Salvador - BA',
            '81': 'Recife - PE',
            '85': 'Fortaleza - CE',
            '91': 'Belém - PA',
            '62': 'Goiânia - GO',
            '82': 'Maceió - AL',
            '92': 'Manaus - AM',
            '95': 'Boa Vista - RR',
            '96': 'Macapá - AP',
            '98': 'São Luís - MA',
            '99': 'Imperatriz - MA',
            '63': 'Palmas - TO',
            '64': 'Rio Verde - GO',
            '65': 'Cuiabá - MT',
            '66': 'Rondonópolis - MT',
            '67': 'Campo Grande - MS',
            '68': 'Rio Branco - AC',
            '69': 'Porto Velho - RO',
            '73': 'Ilhéus - BA',
            '74': 'Juazeiro - BA',
            '75': 'Feira de Santana - BA',
            '77': 'Vitória da Conquista - BA',
            '79': 'Aracaju - SE',
            '83': 'João Pessoa - PB',
            '84': 'Natal - RN',
            '86': 'Teresina - PI',
            '87': 'Petrolina - PE',
            '88': 'Sobral - CE',
            '89': 'Picos - PI',
            '93': 'Santarém - PA',
            '94': 'Marabá - PA',
            '97': 'Tefé - AM'
        };

        // Renderização corrigida
        function renderizarTabela() {
            const tbody = document.getElementById('tableBody');
            tbody.innerHTML = '';

            fornecedores.forEach(fornecedor => {
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${fornecedor.nome}</td>
                    <td>
                        <span class="status ${fornecedor.status === 'active' ? 'status-active' : 'status-inactive'}">
                            ${fornecedor.status === 'active' ? 'Ativo' : 'Inativo'}
                        </span>
                    </td>
                    <td>${fornecedor.cnpj || 'N/D'}</td>
                    <td>${fornecedor.ddd ? `(${fornecedor.ddd}) ` : ''}${fornecedor.telefone || ''}</td>
                    <td><span class="city-badge">${dddCities[fornecedor.ddd] || 'DDD não registrado'}</span></td>
                `;
                tbody.appendChild(tr);
            });
        }

        // Sistema de filtro mantido
        document.addEventListener('DOMContentLoaded', () => {
            renderizarTabela();
            document.getElementById('searchInput').addEventListener('input', filtrarFornecedores);
        });

        function filtrarFornecedores() {
            const termo = document.getElementById('searchInput').value.toLowerCase();
            const linhas = document.querySelectorAll('#tableBody tr');

            linhas.forEach(linha => {
                const textoLinha = linha.textContent.toLowerCase();
                linha.style.display = textoLinha.includes(termo) ? '' : 'none';
            });
        }
    </script>
</body>

</html>
