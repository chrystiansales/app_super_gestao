<h3>Consulta Fornecedor</h3>

@isset($fornecedores)
    @for ($i = 0; isset($fornecedores[$i]); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
        <br>
        Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} Telefone: {{ $fornecedores[$i]['telefone'] ?? '' }}
        <br>
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                Sao Paulo - SP
            @break

            @case('85')
                Fortaleza - CE
            @break

            @case('32')
                Minas Gerais - MG
            @break

            @default
                DDD não encontrado
        @endswitch
        <hr>
    @endfor
@endisset
