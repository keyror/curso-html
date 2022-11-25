<div class="card rounded-3 shadow my-5">
    <div class="card-body">
        <div class="card-header bg-secondary rounded shadow text-white text-center mb-5">
            <h4 class="card-title"><i class="fa-solid fa-credit-card"></i> Método de Pago</h4>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check form-switch ms-5 mb-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        <i class="fa-brands fa-cc-paypal fa-8x text-primary "></i>
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check form-switch ms-5 mb-4">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        <i class="fa-regular fa-credit-card fa-8x text-secondary"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="ejemplo 777 - 888 -...">
                    <label for="floatingInput">Número de la tarjeta / 777-888-999-555</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="date" placeholder="ejmplo YY/MM">
                    <label for="date">Fecha de caducación /YY/MM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="code" placeholder="ejmplo 888">
                    <label for="code">Codigo de seguridad / CVV</label>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-center">
        <a role="button" class="btn btn-danger my-4" href="catalogo.php">Cancelar</a>
        <a role="button" class="btn btn-success" href="factura.php">Finalizar Compra</a>
    </div>
</div>