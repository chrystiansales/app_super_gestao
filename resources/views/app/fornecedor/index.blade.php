<h3>Consulta Fornecedor</h3>

@php
    /*
     ** para uso do PHP puro
     */
@endphp


@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>existem muitos fornecedores cadastrados</h3>
@else
    <h3>não existem fornecedores cadastrados</h3>
@endif
