<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .navbar .navbar-toggler {
        top: .25rem;
        right: 1rem;
    }

</style>
@include('administracao.template.navbar')

<div class="container-fluid">
    <div class="row">
        @include('administracao.template.sidebar')
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Novo Imóvel</h1>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="btn-group mr-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        This week
                    </button>
                </div>
            </div>
            <form action="{{ url('encarte/update') }}/{{ $imoveis->id }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Descricao do imóvel</label>
                                <input class="form-control" type="text" name="descricao"
                                    id="descricao" value="{{ $imoveis->descricao }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Categoria</label>
                                <select class="form-control" name="categoria"
                                    id="categoria">
                                    <option value="">{{ $imoveis->categoria }}</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->categoria }}">
                                            {{ $categoria->categoria }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Código</label>
                                <input class="form-control"
                                    value="{{ $imoveis->codigo }}" type="text" name="codigo" id="codigo" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tipo</label>
                                <select class="form-control" name="tipo" id="tipo">
                                    <option value="">{{ $imoveis->tipo }}</option>
                                    @foreach ($tipos as $tipo)
                                        <option value="{{ $tipo->tipo }} ">
                                            {{ $tipo->tipo }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">Preço</label>
                                <input class="preco form-control" type="text"
                                    name="preco" id="preco" value="{{ $imoveis->preco }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Cep:</label>
                                <input class="form-control" type="text" name="cep"
                                    id="cep" placeholder="Digite o cep do imóvel">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Bairro</label>
                                <input class="form-control" type="text" name="bairro"
                                    id="bairro" value="{{ $imoveis->bairro }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Cidade</label>
                                <input class="form-control" type="text" name="cidade"
                                    id="cidade" value="{{ $imoveis->cidade }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Estado</label>
                                <input class="form-control" type="text" name="estado"
                                    id="estado" value="{{ $imoveis->estado }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Tamanho por m²</label>
                                <input class="form-control" type="number" name="tamanho"
                                    value="{{ $imoveis->tamanho }}" id="tamanho">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Quantidade de quartos</label>
                                <input class="form-control" type="number" name="quartos"
                                    id="quartos" value="{{ $imoveis->quartos }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Quantidade de banheiros</label>
                                <input class="form-control" type="number"
                                    name="banheiros" id="banheiros" value="{{ $imoveis->banheiros }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Quantidade de vagas</label>
                                <input class="form-control" type="number" name="vagas"
                                    id="vagas" value="{{ $imoveis->vagas }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Observação</label>
                                <input class="form-control" type="text" name="observacao"
                                    id="observacao" value="{{ $imoveis->observacao }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Imagem Principal</label>
                                <input class="form-control" type="file"
                                    name="imagem_principal" id="imagem_principal">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagem 1</label>
                                <input class="form-control" type="file" name="imagem_1"
                                    id="imagem_1">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagem 2</label>
                                <input class="form-control" type="file" name="imagem_2"
                                    id="imagem_2">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagem 3</label>
                                <input class="form-control" type="file" name="imagem_3"
                                    id="imagem_3">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagem 4</label>
                                <input class="form-control" type="file" name="imagem_4"
                                    id="imagem_4">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagem 5</label>
                                <input class="form-control" type="file" name="imagem_5"
                                    id="imagem_5">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Imagem 6</label>
                                <input class="form-control" type="file" name="imagem_6"
                                    id="imagem_6">
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_principal }}"
                                    class="card img-fluid" id="upload_imagem_principal" value="" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_1 }}"
                                    class="card img-fluid" id="upload_imagem_1" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_2 }}"
                                    class="card img-fluid" id="upload_imagem_2" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_3 }}"
                                    class="card img-fluid" id="upload_imagem_3" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_4 }}"
                                    class="card img-fluid" id="upload_imagem_4" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_5 }}"
                                    class="card img-fluid" id="upload_imagem_5" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 p-3">
                            <div class="form-group">
                                <img src="{{ url('img/imoveis') }}/{{ $imoveis->imagem_6 }}"
                                    class="card img-fluid" id="upload_imagem_6" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 p-3">
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Alterar</button>
                    </div>
                </div>
    </div>
    </form>
    <img src="" alt="" srcset="">
    </main>
</div>
</div>
