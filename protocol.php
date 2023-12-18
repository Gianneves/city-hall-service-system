<div class="container home-title mt-5">
    <h1 class="mb-5">Cadastro de Protocolo</h1>
    <form action="?page=save-protocol" method="POST">
        <input type="hidden" name="action" value="register-protocol">
        <div class="mb-3">
            <label>Descrição: </label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="mb-3">
            <label>Data: </label>
            <input type="date" name="date" class="form-control">
        </div>
        <div class="mb-3">
            <label>Prazo:  </label>
            <input type="text" name="term" class="form-control">
        </div>
        <div class="mb-3">
            <label>Id do Contribuinte: </label>
            <input type="text" name="taxpayer" class="form-control">
        </div>  
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>

