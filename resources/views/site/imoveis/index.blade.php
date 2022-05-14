@include('site.template.navbar')
<section id="imoveis">
    <h1 class="text-center">Imóveis</h1>
    <div class="container">
        @if (!$imoveis)
            <h1 class="text-center">Não existe imóveis cadastrados</h1>
        @else
            <div class="container card-deck">
                <div class="row">
                    @csrf
                    @foreach ($imoveis as $imovel)
                        <div class="col-md-4">
                            <img class="card-img"
                                src="{{ url('img/imoveis') }}/{{ $imovel->imagem_principal }}" width="354px"
                                height="240px" alt="{{ $imovel->descricao }}">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-right">{{ $imovel->bairro }}</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <h4 class="text-center">{{ $imovel->cidade }}-{{ $imovel->estado }}
                                        </h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 border border-1">
                                        <p>Área {{ $imovel->tamanho }} m²</p>
                                    </div>
                                    <div class="col-md-6 border border-1">
                                        <p>Quartos {{ $imovel->quartos }} </p>
                                    </div>
                                    <div class="col-md-6 border border-1">
                                        <p>Banheiros {{ $imovel->banheiros }} </p>
                                    </div>
                                    <div class="col-md-6 border border-1">
                                        <p>Vagas {{ $imovel->vagas }}</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h5 class="align-items-end text-center p-1">{{ $imovel->categoria }} R$
                                                {{ $imovel->preco }}</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn btn-link text-center"
                                href="{{ url('/imoveis/show') }}/{{ $imovel->id }}">Mais detalhes</a>
                        </div>
                    @endforeach
        @endif
        <div class="container">
            {{ $imoveis->links('pagination::bootstrap-5') }}
        </div>
    </div>
</section>
