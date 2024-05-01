
  <div class="col-4">
    <h3 class="grid-title"><i class="fa fa-filter"></i>Filtros</h3>
    <div class="row mt-5" id="subfilters">
      <div class="form">
          <i class="fa fa-search"></i>
          <input type="text" class="form-control form-input" placeholder="Buscar">
          <br><br>
      </div>
      <h4>Marca:</h4>
      <select  id ="marcas" class="form-select" aria-label="Default select example">
        <option selected>Seleccciona una</option>
        <option value="Armacel">AcerosMex</option>
        <option value="Armacel">Armacel</option>
        <option value="Cemex">Cemex</option>
        <option value="Estrublock">Estrublock</option>
        <option value="Armacel">Maquita</option>
        <option value="Estrublock">Rotoplas</option>
        <option value="Estrublock">Truper</option>
        <option value="Estrublock">Otro</option>
      </select>
      <br>
      <div>
        <br>
        <h4>Precio:</h4>
        <div data-mdb-input-init class="form-outline">
          <input id= "precioMin" min="10" max="20" type="number" id="typeNumber" class="form-control" />
          <label class="form-label" for="typeNumber">Max</label>

          <input id= "precioMax" min="10" max="20" type="number" id="typeNumber" class="form-control" />
          <label class="form-label" for="typeNumber">Min</label>
        </div>
      </div>
      
    </div>
</div>