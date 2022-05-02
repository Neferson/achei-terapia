@extends('partials.topBar')

{{-- @extends('admin.layouts.main') --}}

@section('title', 'Cadastro de Terapeutas')

@section('content')

<form class="" id="regForm" action="" method="get">

    <h1>Seu perfil de usuário</h1>

    <!-- One "tab" for each step in the form: -->
    <section class="sizeWindow">

        <div class="tab"><h4>Dados pessoais</h4>
            <h1>Step 1</h1>

            <div class="mb-4 mt-4">

                <form class="uploadImage">
                    <input type="file" class="upload" required id="fileInput">
                </form>

                <div>
                    <img src="/img/user.png" class="img-thumbnail" id="image" alt="Sua imagem" width="150" height="200">
                </div>

            </div>

            <input class="check"
                placeholder="Nome completo" name="userName" id="userName" oninput="this.className = ''">
            <span>Sexo:</p>
            <div class="form-check">
                <input class="form-check-input p-1" type="radio" name="radioSexo" id="radioSexoM" checked>
                <label class="form-check-label" for="radioSexoM">Masculino</label>
            </div>
            <br>
            <div class="form-check">
                <input class="form-check-input p-1" type="radio" name="radioSexo" id="radioSexoF" >
                <label class="form-check-label" for="radioSexoF">Feminino</label>
            </div>
        </div>

        <div class="tab"><h4>Sobre o seu trabalho</h4>
            <h1>Step 2</h1>

            <p>Seu título principal
            <input
                class="check"
                placeholder="Título..."
                name="title"
                id="title"
                oninput="this.className = ''"
            ></p>
            <p>Como é o seu trabalho<input class="check" placeholder="Descrição..." name="description" id="description"  oninput="this.className = ''"></p>
            <p>Vídeo de Apresentação<input placeholder="Link para o vídeo..." name="video" id="video"  oninput="this.className = ''"></p>
        </div>

        <div class="tab redesSociais"><h4>Redes Sociais e Dados de Contato</h4>
            <h1>Step 3</h1>

            <p>WhatsApp<input class="check" type="text" name="whatsApp" id="whatsApp" placeholder="(__) _____-_____" oninput="this.className = ''" onfocusout="checkWhatsApp()"></p>
            <p>E-mail<input class="check" placeholder="E-mail" name="email" id="email"  oninput="this.className = ''"></p>
            <p>Instagram<input placeholder="Instagram" name="instagram" id="instagram"  oninput="this.className = ''"></p>
            <p>Facebook<input placeholder="Facebook" name="facebook" id="facebook"  oninput="this.className = ''"></p>
            <p>LinkedIn<input placeholder="LinkedIn" name="linkedin" id="linkedin"  oninput="this.className = ''"></p>
            <p>Twitter<input placeholder="Twitter" name="twitter" id="twitter"  oninput="this.className = ''"></p>
            <p>YouTube<input placeholder="Link para YouTube" name="youtube" id="youtube"  oninput="this.className = ''"></p>
            <p>Site<input placeholder="Site" name="site" id="site"  oninput="this.className = ''"></p>


        </div>

        <div class="tab"><h4>Endereço de atendimento</h4>
            <h1>Step 4</h1>

            <p>CEP<input class="check" type="text" placeholder="_____-___" name="cep" id="cep" oninput="this.className = ''" onfocusout="searchCEP()"></p>
            <p>Logradouro<input class="check" placeholder="rua, avenida, alameda, rodovia, etc." name="" id="street" oninput="this.className = ''"></p>
            <p>Número<input class="check" placeholder="" name="number" id="number" oninput="this.className = ''"></p>
            <p>Complemento<input placeholder="" name="complement" id="complement" oninput="this.className = ''"></p>
            <p>Cidade<input class="check" placeholder="" name="city" id="city" oninput="this.className = ''" readonly></p>
            <p>Estado<input class="check" placeholder="" name="state" id="state" oninput="this.className = ''"></p>

        </div>

        <div class="tab"><h4>Áreas em que você atua</h4>
            <h1>Step 5</h1>

            <select name="area" id="area" style="width: 300px">
                <option value="Valor 1" >Valor 1</option>
                <option value="Valor 2" >Valor 2</option>
                <option value="Valor 3" >Valor 3</option>
                <option value="Valor 4" >Valor 4</option>
            </select>

            <table class="table" style="max-width: 500px">
                <thead>
                    <tr>
                        <td></td>
                        <th scope="col">Área de atuação</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

        <div class="tab"><h4>Tratamentos que você oferece</h4>
            <h1>Step 6</h1>

            <select name="tratamentos" id="tratamentos" style="width: 300px">
                <option value="Valor 1" >Valor 1</option>
                <option value="Valor 2" >Valor 2</option>
                <option value="Valor 3" >Valor 3</option>
                <option value="Valor 4" >Valor 4</option>
            </select>
            <button class="btn btn-success m-md-4" type="button" name="btnOffers" id="btnOffers" onclick="addOffers()">Adicionar</button>

            <table class="table" style="max-width: 500px">
                <thead>
                    <tr>
                        <td><input type="checkbox" id="allCheckBox"></td>
                        <th scope="col">Tratamento escolhido</th>
                        <td><button class="btn btn-danger" id="btnRemoveCheckBox" onclick="removeSelected">Excluir</button></td>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

        <div class="tab"><h4>Terapias que você pratica</h4>
            <h1>Step 7</h1>

            <select name="therapy" id="therapy" style="width: 300px">
                <option value="Valor 1" >Valor 1</option>
                <option value="Valor 2" >Valor 2</option>
                <option value="Valor 3" >Valor 3</option>
                <option value="Valor 4" >Valor 4</option>
            </select>
            <button class="btn btn-success m-md-4" type="button" name="btnTherapy" id="btnTherapy" onclick="addTherapy()">Adicionar</button>

            <table class="table" >
                <thead>
                    <tr>
                        <th scope="col">Terapia</th>
                        <th scope="col">Nível</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>

        </div>

        <div class="tab"><h4>Certificados</h4>
            <h1>Step 8</h1>

            <select name="select"></select>
            <button class="btn btn-success m-md-4" type="button" name="btnCertificates" id="btnCertificates" onclick="addCertificates()">Adicionar</button>

        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-success" type="button" name="prevBtn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button class="btn btn-success" type="button" name="nextBtn" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </section>
</form>

@endsection

@section('script')


<script>

    $("#fileInput").change(function (event) {
        var reader = new FileReader();
        $(reader).load(function (event) {
            $("#image").attr("src", event.target.result);
        });
        reader.readAsDataURL(event.target.files[0]);
    });

    (function(){

        const leitorDeArquivos = new FileReader(),
            uploadImage = document.querySelector('.uploadImage');

        uploadImage.addEventListener('submit', function(submit){
            submit.preventDefault();
        })
    });


    $("#whatsApp").mask("(00) 00000-0000");
    $("#cep").mask("00000-000");

    function checkWhatsApp() {
        var whatsApp = $('#whatsApp').val();
        if (whatsApp.length !== 15) {
           msgWhatsApp();
        }
    };

    // função para buscar e preencher endereço por CEP
    function searchCEP(){
        const cep = document.getElementById('cep').value;
        const cepClean = cep.replace(/[^0-9,]*/g, "");

        if (cepClean.length === 8) {
            axios.get(`https://viacep.com.br/ws/${cepClean}/json`).then((response) => {
                const data = response.data;
                if (!data.erro) {
                    document.getElementById("street").value = data.logradouro;
                    document.getElementById("city").value = data.localidade;
                    document.getElementById("state").value = data.uf;
                } else {
                   msgCepNotFound(cep);
                }
                return response;
            }).catch(error => {
                console.log(error.response);
                msgCepError();
            });
        } else {
            msgCepFill();
        }
    };

    // função para adicionar tramentos a lista ao ser selecionado
    function addOffers() {
        let selected_value = $("#tratamentos").val();
        console.log('Clicou em adicionar', selected_value);
        let line_value = $("#tratamento").val();
        console.log(line_value);

        $("table tbody").append(`
            <tr>
                <td><input type="checkbox" class="checkBoxTratamentos" id="tratamento" value="${selected_value}"></td>
                <td>${selected_value}</td>
            </tr>
        `);
    };

    // função para remover selecionado da lista
    function removeSelected() {
        console.log('Clicou em adicionar', selected_value);

    };

    // função para inserir na tabela a área de atuação selecionada
    $( "#area" ).change(function() {
        let selected_value = $("#area").val();
        let line_value = $("#areaSelected").val();
        console.log(line_value);

        $("table tbody").append(`
            <tr id="areaTable">
                <td><input type="checkbox" class="checkBoxArea" id="areaSelected" value="${selected_value}"></td>
                <td>${selected_value}</td>
            </tr>
        `);

    });

    // função para adicionar terapias praticadas
    function addTherapy() {
        let selected_value = $("#therapy").val();
        console.log('terapia praticada: ', selected_value);

        $("table tbody").append(`
            <tr">
                <td>${selected_value}</td>
                <td>${selected_value}</td>
                <td><button class="btn btn-primary btnAlterarItem" >Alterar</button></td>
                <td><button class="btn btn-danger btnRemoveItem">Remover</button></td>
            </tr>
        `);

    };

    // função para adicionar certificados
    function addCertificates() {
        console.log('Adicionar certificado');
    }

    // --------------Mensagens sweetalert---------------------

    function msgWhatsApp() {
        swal({
            icon: "warning",
            text: "Preencha o campo WhatsApp corretamente! \n Deve conter o DDD e 9 dígitos",
        });
    };

    function msgCepFill() {
        swal({
            icon: "warning",
            text: "Preencha o CEP corretamente! \n O CEP deve conter 8 dígitos",
        });
    };

    function msgCepNotFound(cep) {
        swal({
            icon: "error",
            text: `O CEP ${cep} não foi encontrado!`,
        });
    };

    function msgCepError() {
        swal({
            icon: "error",
            text: `Desculpe, aconteceu um erro! ${error.response}`,
        });
    };

    // ///////////////////////////////////////////////////////////////////////////////

    // Funções do Multiple Steps

    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(item) {
    // This function will display the specified tab of the form ...
    var table = document.getElementsByClassName("tab");
    table[item].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (item == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (item == (table.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(item)
    }

    function nextPrev(item) {
    // This function will figure out which tab to display
    var table = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (item == 1 && !validateForm()) return false;

    // Verificação de preenchimento de campos mascarados

    if (currentTab === 2) {
        let whatsApp = $("#whatsApp").val()
        if (whatsApp.length !== 15) {
            msgWhatsApp();
            return false;
        }
    }

    if (currentTab === 3) {
        let cep = $("#cep").val()
        console.log(cep.length)
        if (cep.length !== 9) {
            msgCepFill();
            return false;
        }
    }

    // Hide the current tab:
    table[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + item;
    // if you have reached the end of the form... :
    if (currentTab >= table.length) {
        //...the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var table, selected, i, valid = true;
    table = document.getElementsByClassName("tab");
    selected = table[currentTab].getElementsByClassName("check");
    var inputTabs = table[currentTab].getElementsByTagName("input");

    // // A loop that checks every input field in the current tab:
    for (i = 0; i < selected.length; i++) {
        if (selected[i].value == "") {
            selected[i].className += " invalid";
            valid = false;
        }
    }
    // Aviso de campo obrigatório na tela
    if (!valid) {
        swal({
            icon: "warning",
            text: "Preencha o(s) campo(s) obrigatórios em vermelho!",
        });
    }
    // // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(item) {
    // This function removes the "active" class of all steps...
    var i, table = document.getElementsByClassName("step");
    for (i = 0; i < table.length; i++) {
        table[i].className = table[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    table[item].className += " active";
    }
</script>

@endsection

@section('css')

<style>

    .upload {
        border: none;
    }
    .sizeWindow {
        max-width: 800px;
    }
    Style the form
    #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
    }

    /* Style the input fields */
    input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Raleway;
    border: 1px solid #aaaaaa;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
    background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
    display: none;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
    }

    /* Mark the active step: */
    .step.active {
    opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
    background-color: #04AA6D;
    }

</style>

@endsection
