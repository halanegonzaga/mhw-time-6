<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Protótipo Mega Hack Women - Time 6</title>

        <!--CSS-->
        <link href="/css/tailwind.css" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/base.css" rel="stylesheet">
    </head>
    <body class="hidden">

        <!--Base-->
        <div id="app" style="width: 100%; height: 100%">
            <!--Header-->
            <header id="top" class="w-full" v-show="!filter">
                <div class="container flex">
                    <div id="top_bg"></div>
                    <div class="mt-20 w-2/4">
                        <h1 class="font-bold my-4">Hub de Informações</h1>
                        <p style="color: #494949">Passe por nossa triagem para conhecer o seu perfil empreendedor e também as melhores oportunidades de cursos, mentorias, grupos e todo apoio necessário.</p>
                        <button class="btn text-white font-bold px-4" style="border-radius: 20px; background-color: #AC28FF" v-on:click="openQuestions()"><b>Acessar</b></button>
                    </div>
                </div>
            </header>
            <!--END Header-->
    
            <!--Services-->
            <section id="services" v-show="!filter">
                <div class="container flex -mx-3 py-4">
                    <div class="w-1/3 bg-white shadow rounded p-3 m-3 h-auto" style="background: #E9DDFF">
                        <div class="services-item text-center">
                            <div class="w-full mb-3">
                                <img src="/img/icon-video-player.png" class="m-auto" style="max-height: 70px">
                            </div>
                            <div class="w-full">
                                <h2 class="text-sm font-bold">CURSOS E WORKSHOPS</h2>
                                <p class="text-xs">Trazemos sugestões de cursos e palestras para capacitação em diversas áreas, segmentados de acordo com seu perfil.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 bg-white shadow rounded p-3 m-3" style="background: #E9DDFF">
                        <div class="services-item text-center">
                            <div class="w-full mb-3">
                                <img src="/img/icon-conteudo.png" class="m-auto" style="max-height: 70px">
                            </div>
                            <div class="w-full">
                                <h2 class="text-sm  font-bold">ARTIGOS E INFORMAÇÃO</h2>
                                <p class="text-xs">Informação traz inovação. Entenda o universo da sua área com artigos, links, vídeos e serviços de diversos profissionais.</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/3 bg-white shadow rounded p-3 m-3" style="background: #E9DDFF">
                        <div class="services-item text-center">
                            <div class="w-full mb-3">
                                <img src="/img/icon-aplicativo.png" class="m-auto" style="max-height: 70px">
                            </div>
                            <div class="w-full">
                                <h2 class="text-sm  font-bold">CONEXÃO</h2>
                                <p class="text-xs">Conectamos você com um mundo de possibilidades, grupos de apoio e empresas, para que possa aprimorar seu negócio e aumentar sua rede profissional e pessoal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--END Services-->

            <!--Filter-->
            <section id="result" v-show="filter">

                <div class="container relative">
                    <div class="clearfix">
                        <div class="p-3 text-right float-right"><span class="font-xs" style="cursor: pointer" v-on:click="closeResult()"><img src="/img/cancel.svg" width="40" height="40"></span></div>
                    </div>

                    <div class="flex">
                        <div class="w-50">
                            <b class="text-gray-800">Resultado</b>

                            <ul> 
                                <li class="mt-2 p-2 text-gray-700">Cursos <span class="badge badge-info float-right mr-5 text-white py-1 px-2" style="border-radius: 50%">2</span></li>
                                <li class="mt-2 p-2 text-gray-700">Mentorias</li>
                                <li class="mt-2 p-2 text-gray-700">Aplicativos</li>
                                <li class="mt-2 p-2 text-gray-700">Grupos</li>
                            </ul>
                        </div>
                        <div class="w-auto">
                            <div class="grid grid-cols-1">
                                <div class="m-3 shadow p-3">
                                    <div class="flex items-center mb-3">
                                        <div class="w-40 m-3">
                                            <img src="https://www.sebrae.com.br/Sebrae/Portal%20Sebrae/Imagens%20SebraeNA/05-Gest%C3%A3o%20de%20equipe%20de%20vendas.png" alt="Gestão de Equipe de Vendas" class="w-100 rounded">
                                            <small class="text-xs"><b>Online</b> / Gestão de Pessoas</small>
                                        </div>
    
                                        <div class="flex-1 mb-1">
                                            <h2 class="text-lg font-bold text-gray-800 mt-0">Gestão de Equipe de Vendas</h2>
                                            <small class="text-sm text-gray-700">Equipe motivada, meta atendida! Aprenda como treinar e gerir uma equipe de vendas, desde a seleção de pessoal até a motivação para alcançar resultados. </small>

                                            <span class="text-sm">3h / 15 dias</span>

                                            <div class="w-full clearfix mt-2">
                                                <button class="btn btn-sm float-right btn-info text-white">Acessar Curso</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-3 shadow p-3">
                                    <div class="flex items-center mb-3">
                                        <div class="w-40 m-3">
                                            <img src="https://www.sebrae.com.br/Sebrae/Portal%20Sebrae/SAS/Thumb%20SAS/planejamentoOficinas.png" alt="Gestão de Equipe de Vendas" class="w-100 rounded">
                                            <small class="text-xs"><b>Presencial</b> / Planejamento</small>
                                        </div>
    
                                        <div class="flex-1 mb-1">
                                            <h2 class="text-lg font-bold text-gray-800 mt-0">Sebrae Live - Plano de Negócio</h2>
                                            <small class="text-sm text-gray-700">Equipe motivada, meta atendida! Aprenda como treinar e gerir uma equipe de vendas, desde a seleção de pessoal até a motivação para alcançar resultados. </small>

                                            <span class="text-sm">São Paulo - 11/09 às 10h</span>

                                            <div class="w-full clearfix mt-2">
                                                <button class="btn btn-sm float-right btn-info text-white">Acessar Curso</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="dialog_2 fixed" v-show="session.people.cpf" style="left:0; bottom: 0">
                    <div class="joan_2"></div>
                    <div class="dialog_box_2">
                        <div class="text-white p-4">
                            <p><b>@{{ session.people.name }}</b>,</p>
                            <p>Que bom te conhecer, separamos aqui alguns links que podem te auxiliar!</p>
                        </div>
                    </div>
                </div>
            </section>
            <!--END FIlter-->
    
            <!--Footer-->
            <footer>
                <div class="container h-100">
                    <div class="w-full text-center mt-3 mb-2 text-xs text-gray-800">PARCEIROS</div>
                    <div class="px-3">
                        <div class="flex w-full mt-4 items-center -mx-3">
                            <div class="flex-1 h-10 px-3">
                                <img class="max-h-full max-w-full m-auto" src="/img/logo-gr1d.png" alt="Gr1d">
                            </div>
                            <div class="flex-1 h-10 px-3">
                                <img class="max-h-full max-w-full m-auto" src="/img/logo-trybe.png" alt="Trybe">
                            </div>
                            <div class="flex-1 h-12 px-3 text-center">
                                <img class="max-h-full max-w-full m-auto" src="/img/logo-sebrae.png" alt="SEBRAE">
                            </div>
                            <div class="flex-1 h-10 px-3">
                                <img class="max-h-full max-w-full m-auto" src="/img/logo-shawee.jpeg" alt="Shawee">
                            </div>
                            <div class="flex-1 h-10 px-3">
                                <img class="max-h-full max-w-full m-auto" src="/img/logo-microsoft.png" alt="Microsoft">
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--END Footer-->

            <!--Modal Triagem-->
            <div class="w-full bg-purple-300 h-100 fixed" style="top:0; left: 0" v-show="questions == true">
                <div class="p-3 text-right float-right"><span class="font-xs" style="cursor: pointer" v-on:click="closeQuestions()"><img src="/img/cancel.svg" width="40" height="40"></span></div>

                <div class="container relative">
                    <div class="p-1 mt-20 pt-5 flex">
                        <div class="joan_1"></div>
                        <div class="flex-1 dialog-questions p-5">
                            <div class="h-100 w-full relative">
                                <div class="w-full" style="height: 100%; border-radius: .4em;">
                                    
                                    <!--Step-->
                                    <div v-show="step == 0">
                                        <div class="question p-3 text-white text-lg">
                                            <p>Olá, tudo bem?</p>
                                            <p>Meu nome é <b>Joana</b>, sou sua assistente virtual.</p>
                                            <p>Quero te conhecer mais e te mostrar as melhores oportunidades, podemos conversar?</p>
                                        </div>
                                        <div class="ask">
                                            <button class="btn" v-on:click="nextStep()">Sim, pode prosseguir...</button>
                                            <button class="btn" v-on:click="finishStep()">Agora não...</button>
                                        </div>
                                    </div>
                                    <!--END Step-->

                                    <!--Step-->
                                    <div v-show="step == 1">
                                        <div class="question p-3 text-white text-lg">
                                            <p>Para começar, me informa seu CPF?</p>
                                        </div>
                                        <div class="ask text-center">
                                            <form onsubmit="return false" v-on:submit="askStep()">
                                                <input disabled type="text" required class="form-control w-100 text-white border-0 text-center" style="font-size: 1.4em;background-color: rgb(171 109 210) !important" value="475.388.990-49" placeholder="000.000.000-00">
                                                <button class="btn btn-purple mt-2">Ok, continuar</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--END Step-->


                                    <!--Step-->
                                    <div v-show="step == 2">
                                        <div class="question p-3 text-white text-lg">
                                            <p><b>@{{ session.people.name }},</b> preciso saber onde você reside, me informa seu CEP?</p>
                                        </div>
                                        <div class="ask text-center">
                                            <form onsubmit="return false" v-on:submit="askStep()">
                                                <input  v-model="session.in_cep" type="text" required class="form-control w-100 text-white border-0 text-center" style="font-size: 1.4em;background-color: rgb(171 109 210) !important" value="475.388.990-49" placeholder="000.000.000-00">
                                                <button class="btn btn-purple mt-2">Continuar...</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--END Step-->

                                    <!--Step-->
                                    <div v-show="step == 3">
                                        <div class="question p-3 text-white text-lg">
                                            <p><b>@{{ session.people.name }},</b> você é chefe de família / tem filhos?</p>
                                        </div>
                                        <div class="ask text-center">
                                            <button class="btn btn-purple mt-2" type="button" v-on:click="session.is_mother = true; nextStep()">Sim</button>
                                            <button class="btn btn-purple mt-2" type="button" v-on:click="session.is_mother = false; nextStep()">Não</button>
                                        </div>
                                    </div>
                                    <!--END Step-->

                                    <!--Step-->
                                    <div v-show="step == 4">
                                        <div class="question p-3 text-white text-lg">
                                            <p><b>@{{ session.people.name }},</b> Se você possui uma empresa ou é MEI, me informa seu CNPJ?</p>
                                        </div>
                                        <div class="ask text-center">
                                            <form onsubmit="return false" v-on:submit="askStep()">
                                                <input v-model="session.in_cnpj" required type="text" class="form-control w-100 text-white border-0 text-center" style="font-size: 1.4em;background-color: rgb(171 109 210) !important" value="475.388.990-49" placeholder="000.000.000-00">
                                                <button class="btn btn-purple mt-2">Esta é minha empresa!</button>
                                                <button class="btn btn-purple mt-2" type="button" v-on:click="nextStep()">Eu ainda não tenho uma...</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--END Step-->

                                    <!--Step-->
                                    <div v-show="step == 5">
                                        <div class="question p-3 text-white text-lg">
                                            <p><b>@{{ session.people.name }},</b> qual área de atuação no mercado?</p>
                                        </div>
                                        <div class="ask text-center">
                                            <form onsubmit="return false" v-on:submit="nextStep()">
                                                <select style="font-size: 1.4em;background-color: rgb(171 109 210) !important" class="form-control text-white" v-model="session.filters.area">
                                                    <option value="1">Tecnologia</option>
                                                    <option value="2">Beleza & Estética</option>
                                                    <option value="3">Gastronomia</option>
                                                    <option value="4">Engenharia</option>
                                                </select>
                                                <button class="btn btn-purple mt-2">Continuar...</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--END Step-->

                                    <!--Step-->
                                    <div v-show="step == 6">
                                        <div class="question p-3 text-white text-lg">
                                            <p><b>@{{ session.people.name }},</b> qual sua principal necessidade, no que diz respeito a suporte para seu empreendimento?</p>
                                        </div>
                                        <div class="ask text-center">
                                            <form onsubmit="return false" v-on:submit="askStep()">

                                                <div class="grid grid-cols-3">
                                                    <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                        <input type="checkbox" v-model="session.filters.support" value="1" id="support-1"> <label for="support-1">Financeiro</label>
                                                    </div>
                                                    <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                        <input type="checkbox" v-model="session.filters.support" value="2" id="support-2"> <label for="support-2">Marketing</label>
                                                    </div>       
                                                    <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                        <input type="checkbox" v-model="session.filters.support" value="3" id="support-3"> <label for="support-3">Planejamento</label>
                                                    </div>          
                                                    <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                        <input type="checkbox" v-model="session.filters.support" value="4" id="support-4"> <label for="support-4">Jurídico</label>
                                                    </div>            
                                                    <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                        <input type="checkbox" v-model="session.filters.support" value="5" id="support-5"> <label for="support-5">Saúde Mental</label>
                                                    </div>                  
                                                    <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                        <input type="checkbox" v-model="session.filters.support" value="6" id="support-6"> <label for="support-6">Parcerias</label>
                                                    </div>                                      
                                                </div>

                                                <button type="button" v-on:click="nextStep()" class="btn btn-purple mt-2">Continuar...</button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--END Step-->

                                    <!--Step-->
                                    <div v-show="step == 7">
                                        <form onsubmit="return false" v-on:submit="askStep()">
                                            <div class="question p-3 text-white text-lg">
                                                <p><b>@{{ session.people.name }},</b>  para finalizar, indica para mim os conteúdos que você mais gosta de acessar...</p>
                                            </div>
                                            <div class="ask text-center">

                                                    <div class="grid grid-cols-4">
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="checkbox" v-model="session.filters.study" value="1" id="study-1"> <label for="study-1">Artigos</label>
                                                        </div>
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="checkbox" v-model="session.filters.study" value="2" id="study-2"> <label for="study-2">Podcast</label>
                                                        </div>       
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="checkbox" v-model="session.filters.study" value="3" id="study-3"> <label for="study-3">Vídeos</label>
                                                        </div>          
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="checkbox" v-model="session.filters.study" value="4" id="study-4"> <label for="study-4">E-books</label>
                                                        </div>                                      
                                                    </div>

                                                    <div class="question p-3 text-white text-lg">
                                                        <p>E, quantas horas por dia você tem disponível para acessar esses conteúdos?</p>
                                                    </div>

                                                    <div class="grid grid-cols-4">
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="radio" v-model="session.filters.hours" value="1" id="hour-1"> <label for="hour-1">Até 1 hora</label>
                                                        </div>
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="radio" v-model="session.filters.hours" value="2" id="hour-2"> <label for="hour-2">Entre 2 e 4 horas</label>
                                                        </div>  
                                                        <div class="py-1 m-1 bg-purple-500 text-white" style="cursor: pointer">
                                                            <input type="radio" v-model="session.filters.hours" value="3" id="hour-3"> <label for="hour-3">Acima de 4</label>
                                                        </div>                                
                                                    </div>

                                                    <button type="submit" class="btn btn-purple mt-2">Finalizar!</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--END Step-->


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END Modal Triagem-->
        </div>
        <!--END Base-->


        <script src="/js/app.js"></script>
    </body>
</html>
