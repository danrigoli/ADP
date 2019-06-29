@extends('layouts.app')

@section('assets')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="css/home.css" rel="stylesheet">
<script src="js/home.js"></script>
@endsection

@section('content')
  <div id="wrapper" class="animate">
    <div class="container-fluid">
          <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <a class="product" href='#product_view' data-toggle="modal">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Try Other</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                    <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                </div>
                            </div>
                         </a>
                    </div>
                 <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 class="modal-title">HTML5 is a markup language</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 product_content">
                            <h4>Product Id: <span>51526</span></h4>
                            <div class="rating">
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                (10 reviews)
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <h3 class="cost"><span class="glyphicon glyphicon-usd"></span> 75.00</h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <select class="form-control" name="select">
                                        <option value="" selected="">Color</option>
                                        <option value="black">Black</option>
                                        <option value="white">White</option>
                                        <option value="gold">Gold</option>
                                        <option value="rose gold">Rose Gold</option>
                                    </select>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <select class="form-control" name="select">
                                        <option value="">Capacity</option>
                                        <option value="">16GB</option>
                                        <option value="">32GB</option>
                                        <option value="">64GB</option>
                                        <option value="">128GB</option>
                                    </select>
                                </div>
                                <!-- end col -->
                                <div class="col-md-4 col-sm-12">
                                    <select class="form-control" name="select">
                                        <option value="" selected="">QTY</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    </select>
                                </div>
                                <!-- end col -->
                            </div>
                            <div class="space-ten"></div>
                            <div class="btn-ground">
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart</button>
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-heart"></span> Add To Wishlist</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <a class="product" href="cuchafinder.org">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Try Other</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                        <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                    </div>
                </div>
             </a>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                <a class="product" href="cuchafinder.org">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Try Other</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                            <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                        </div>
                    </div>
                 </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <a class="product" href="cuchafinder.org">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Try Other</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                            </div>
                        </div>
                     </a>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <a class="product" href="cuchafinder.org">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Try Other</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                    <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                </div>
                            </div>
                         </a>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <a class="product" href="cuchafinder.org">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Try Other</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
                                        <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
                                    </div>
                                </div>
                             </a>
                        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Try Other</h5>
              <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6>
              <p class="card-text">You can also try different version of Bootstrap V4 side menu. Click below link to view all Bootstrap Menu versions.</p>
              <a href="https://bootsnipp.com/pradeep330" class="card-link">link</a>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product_view"><i class="fa fa-search"></i> Quick View</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
