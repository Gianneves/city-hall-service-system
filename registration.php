<div class="container home-title">
    <h1 class="mb-5">Cadastro de Contribuinte</h1>

    <form action="?page=save-user" method="POST">
        <input type="hidden" name="action" value="register-person">
        <div class="mb-3">
            <label>Nome Completo: </label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Data de Nascimento: </label>
            <input type="date" name="birthdate" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Cpf (Apenas números): </label>
            <input type="text" name="cpf" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Sexo ("M" ou "F"): </label>
            <input type="text" name="gender" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Cidade (Opcional): </label>
            <input type="text" name="city" class="form-control">
        </div>
        <div class="mb-3">
            <label>Bairro (Opcional): </label>
            <input type="text" name="district" class="form-control">
        </div>
        <div class="mb-3">
            <label>Rua (Opcional): </label>
            <input type="text" name="street" class="form-control">
        </div>
        <div class="mb-3">
            <label>Número (Opcional): </label>
            <input type="text" name="number" class="form-control">
        </div>
        <div class="mb-3">
            <label>Complemento (Opcional): </label>
            <input type="text" name="complement" class="form-control">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>
</div>