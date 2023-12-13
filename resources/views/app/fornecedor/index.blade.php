<h3>Fornecedor View</h3>

@php

@endphp

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h4>Existem alguns fornecedores cadastrados</h4>
@elseif (count(fornecedores)>=10)
    <h4>Existem vários fornecedores cadastrados</h4>
@else
    <h4>Não existem fornecedores cadastrados</h4>
@endif