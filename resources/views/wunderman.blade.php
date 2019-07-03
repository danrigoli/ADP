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
                <a class="product" href='#product_view' data-toggle="modal">
                <div class="card">
                    <div class="card-body">
                            <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                    <h5 class="card-title">{{$plate->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Seleccionar variaciones.</h6>
                        </div>
                </div>
                </a>
            </div>
            <div class="modal fade product_view" id="product_view">
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
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>
  
                        <form class="form" method="POST" action="{{route('make-order')}}">
                                {{ csrf_field() }}
                                @csrf
                                @method('POST')
                                            <input type="hidden" value="{{$plate->id}}" name="plate_id">
                                            <h2>Elegi una variacion:</h2>
                                        <section class="row plan cf">
                                            @foreach ($plate->variations as $variation)
                                        <input type="radio" name="variation" id="{{$variation['id']}}" value="{{$variation['name']}}"><label class="radio col-11 col-xl-3 col-md-5" for="{{$variation['id']}}">{{$variation['name']}}</label>
                                            @endforeach

                                        </section>
                                        <h2>Elegi un horario:</h2>
                                        <section class="row plan cf">
                                            <input type="radio" name="time" id="12:00" value="12:00"><label class="radio col-xl-3" for="12:00">12:00</label>
                                            <input type="radio" name="time" id="13:00" value="13:00" checked><label class="radio col-xl-3" for="13:00">13:00</label>
                                            <input type="radio" name="time" id="14:00" value="14:00"><label class="radio col-xl-3" for="14:00">14:00</label>
                                        </section>
                                        <h2>Elegi una sede:</h2>
                                        <section class="row plan cf">
                                            <input type="radio" name="location" id="palermo" value="free"><label class="radio col-xl-3" for="palermo">Palermo</label>
                                            <input type="radio" name="location" id="belgrano" value="basic" checked><label class="radio col-xl-3" for="belgrano">Belgrano</label>
                                            <input type="radio" name="location" id="florida" value="premium"><label class="radio col-xl-3" for="florida">Florida</label>
                                        </section>
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
