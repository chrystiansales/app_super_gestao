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
                São Paulo - SP
            @break

            @case('21')
                Rio de Janeiro - RJ
            @break

            @case('31')
                Belo Horizonte - MG
            @break

            @case('41')
                Curitiba - PR
            @break

            @case('51')
                Porto Alegre - RS
            @break

            @case('61')
                Brasília - DF
            @break

            @case('71')
                Salvador - BA
            @break

            @case('81')
                Recife - PE
            @break

            @case('85')
                Fortaleza - CE
            @break

            @case('91')
                Belém - PA
            @break

            @case('62')
                Goiânia - GO
            @break

            @case('82')
                Maceió - AL
            @break

            @case('92')
                Manaus - AM
            @break

            @case('95')
                Boa Vista - RR
            @break

            @case('96')
                Macapá - AP
            @break

            @case('98')
                São Luís - MA
            @break

            @case('99')
                Imperatriz - MA
            @break

            @case('63')
                Palmas - TO
            @break

            @case('64')
                Rio Verde - GO
            @break

            @case('65')
                Cuiabá - MT
            @break

            @case('66')
                Rondonópolis - MT
            @break

            @case('67')
                Campo Grande - MS
            @break

            @case('68')
                Rio Branco - AC
            @break

            @case('69')
                Porto Velho - RO
            @break

            @case('73')
                Ilhéus - BA
            @break

            @case('74')
                Juazeiro - BA
            @break

            @case('75')
                Feira de Santana - BA
            @break

            @case('77')
                Vitória da Conquista - BA
            @break

            @case('79')
                Aracaju - SE
            @break

            @case('83')
                João Pessoa - PB
            @break

            @case('84')
                Natal - RN
            @break

            @case('86')
                Teresina - PI
            @break

            @case('87')
                Petrolina - PE
            @break

            @case('88')
                Sobral - CE
            @break

            @case('89')
                Picos - PI
            @break

            @case('93')
                Santarém - PA
            @break

            @case('94')
                Marabá - PA
            @break

            @case('97')
                Tefé - AM
            @break

            @case('99')
                Balsas - MA
            @break

            @default
                DDD não encontrado
        @endswitch
        <hr>
    @endfor
@endisset
