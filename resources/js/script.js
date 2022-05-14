$(function() {
    $(document).on("change", "#imagem_principal", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_principal').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});

$(function() {
    $(document).on("change", "#imagem_1", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_1').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});

$(function() {
    $(document).on("change", "#imagem_2", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_2').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});

$(function() {
    $(document).on("change", "#imagem_3", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_3').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});

$(function() {
    $(document).on("change", "#imagem_4", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_4').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});

$(function() {
    $(document).on("change", "#imagem_5", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_5').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});

$(function() {
    $(document).on("change", "#imagem_6", function(e) {
        showThumbnail(this.files);
    });

    function showThumbnail(files) {
        if (files && files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#upload_imagem_6').attr('src', e.target.result);
            }

            reader.readAsDataURL(files[0]);
        }
    }
});


$('.preco').mask('###0,00', { reverse: true });

$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua").val("");
        $("#bairro").val("");
        $("#cidade").val("");
        $("#estado").val("");
        $("#ibge").val("");
    }

    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("...");
                $("#bairro").val("...");
                $("#cidade").val("...");
                $("#estado").val("...");
                $("#ibge").val("...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#estado").val(dados.uf);
                        $("#ibge").val(dados.ibge);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
});