<div class="card p-0" data-name="{{$data ?? ''}}" id="{{$id ?? ''}}">
    <img class="img-gallery" src= "{{$img ?? ''}}" alt="img">
    <div class="card-body">
      <h6 class="card-title">{{$title ?? ''}}</h6>
      <p class="card-text">{{$desc ?? ''}} <br> {{$m ?? ''}}</p>
      <div class="row">
        <div class="col-md-5">
          Cantidad
        </div>
        <div class="col-md-6">
          <input type="number" class="form-control" name="cantidad" size="5" value="5" maxlength="3" max="9999" min="5">
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-dark"><i class="fa fa-cart-plus"></i> Agregar</button>
    </div>
  </div>