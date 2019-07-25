@extends('layouts.app')

@section('assets')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            @foreach ($plates as $plate)
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <a class="product" href='#product_view{{$plate->id}}' data-toggle="modal">
                <div class="card">
                    <div class="card-body">
                            <img href class="plate-img" src='{{asset($plate->img)}}' style='width:100%'>
                            <br>
                            <br>
                    <h5 class="card-title">{{$plate->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Seleccionar opciones.</h6>
                        </div>
                </div>
                </a>
            </div>
            <div class="modal fade product_view" id="product_view{{$plate->id}}">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                            <h3 class="modal-title">Almacen de Pizzas</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 product_content">
                                <h4>{{$plate->name}}</h4>
                                    <img href class="plate-img" src='{{asset($plate->img)}}' style='width:100%'>
                            </div>
                            </div>
  
                        <form class="form" method="POST" action="{{route('make-order')}}">
                                {{ csrf_field() }}
                                @csrf
                                @method('POST')                        
                                            <input type="hidden" value="{{$plate->id}}" name="plate_id">
                                            <h2>Elegi una variedad:</h2>
                                        <section class="row plan cf">
                                        @for ($i = 0; $i < count($plate->variations); $i++)
                                        @if ($plate->variations[$i]['addon'] == null)     
                                        <input type="radio" name="variation" id='variationx' value="{{$plate->variations[0]['name']}}" hidden checked>
                                        <input type="radio" name="variation" id="{{$plate->variations[$i]['id']}}" value="{{$plate->variations[$i]['name']}}"><label class="radio col-11 col-xl-3 col-md-5" for="{{$plate->variations[$i]['id']}}">{{$plate->variations[$i]['name']}}</label>
                                        @endif
                                        @endfor
                                        </section>
                                        <h2>Elegi un Upgrade:</h2><span>Se agrega un total de $50 al costo final</span>
                                        <section class="row plan cf">
                                                <input type="radio" name="upgrade" id='upgradex' value=null hidden checked>
                                        @foreach ($plate->variations as $variation)
                                        @if ($variation->addon !== null)
                                        <input type="radio" name="upgrade" id="{{$variation['id']}}" value="{{$variation['name']}}"><label class="radio col-11 col-xl-3 col-md-5" for="{{$variation['id']}}">{{$variation['name']}}</label>
                                              @endif
                                          @endforeach                                       
                                        </section>
                                        <h2>Elegi un horario:</h2>
                                       <section class="row plan cf">
                                            <input type="radio" name="time" id="12:45" value="12:45"><label class="radio col-xl-3 col-m-5 col-11" for="12:45">12:45</label>
                                            <input type="radio" name="time" id="13:30" value="13:30"><label class="radio col-xl-3 col-5 col-11" for="13:30">13:00</label>
                                        </section>
                                        <div class="form-group">
                                            <h2>Observaciones y anotaciones</h2>
                                            <textarea class="form-control" name="observation" id="observation" rows="3"></textarea>
                                          </div>
                                    <div class="space-ten"></div>
                                    <div class="btn-ground">
                                        <input type="submit" value='Hacer Orden' class="btn btn-primary">
                                    </div>
                                </div>

                                </form>
                                </div>
                            </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> 
  </div>
  @endsection
