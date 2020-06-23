@extends('layouts.app')

@section('content')
        <div class="container-fluid vh-100 box_game">
                <div id="alert_success" class="alert alert-success position-absolute w-100 alert-completado">Completaste la frase</div>
                {{-- {{auth()->user()}} --}}
            		{{-- <ul id="nav" class="nav justify-content-end align-items-center pt-5 p-b-5">
            		  	<li class="nav-item">
            			    	<a class="nav-link" href="#">Usuario: {{$usuario->nombre}} se encuentra en el Nivel # </a>
            		  	</li>
                            </ul> --}}
                            <h4 class="text-center">{{auth()->user()}} </h4>
                            <div class="keyboard bg-dark">
                                   <div class="row">
                                    <div class="key" data-key="81">q</div>
                                    <div class="key" data-key="87">w</div>
                                    <div class="key" data-key="69">e</div>
                                    <div class="key" data-key="82">r</div>
                                    <div class="key" data-key="84">t</div>
                                    <div class="key" data-key="89">y</div>
                                    <div class="key" data-key="85">u</div>
                                    <div class="key" data-key="73">i</div>
                                    <div class="key" data-key="79">o</div>
                                    <div class="key" data-key="80">p</div>
                            </div>
                            <div class="row">
                                    <div class="key" data-key="65">a</div>
                                    <div class="key" data-key="83">s</div>
                                    <div class="key" data-key="68">d</div>
                                    <div class="key" data-key="70">f</div>
                                    <div class="key" data-key="71">g</div>
                                    <div class="key" data-key="72">h</div>
                                    <div class="key" data-key="74">j</div>
                                    <div class="key" data-key="75">k</div>
                                    <div class="key" data-key="76">l</div>
                            </div>
                            <div class="row last">
                                    <div class="key" data-key="90">z</div>
                                    <div class="key" data-key="88">x</div>
                                    <div class="key" data-key="67">c</div>
                                    <div class="key" data-key="86">v</div>
                                    <div class="key" data-key="66">b</div>
                                    <div class="key" data-key="78">n</div>
                                    <div class="key" data-key="77">m</div>
                            </div>
                    </div>
                    <div class="container-fluid">
                      <div class="row">
                             <div class="col-12 d-flex justify-content-center">
                                    <form action="" class="w-50 d-flex justify-content-center flex-column">
                                           <div class="form-group">
                                                  <label for="respuesta" class="">Simon Dice: {{ $pregunta->texto}}</label>
                                                  <input type="hidden" id="simonFrase" value="{{$pregunta->texto}}">
                                                  <input type="text" id="simonRespuesta" class="form-control" placeholder="Digite la frase."/>
                                          </div>
                                          <a href="/home/{{$pregunta->id+1}}" id="btn_next" class="btn btn-success" disabled="">Siguiente</a>
                                  </form>
                          </div>
                  </div>
          </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/simonDice.js')}}"></script>
  @endsection