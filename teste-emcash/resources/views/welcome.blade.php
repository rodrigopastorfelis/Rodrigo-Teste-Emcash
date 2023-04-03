<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teste EmCash</title>
    @include('layouts.head')

</head>

<style>
    .formas {
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
    }
</style>
<body>
        
        <div class="row justify-content-center">
            <div class="col-sm-2 mt-4 mr-4 formas" >
                <h3>Retângulo</h3>
                <label for="retangulo_b">Base do retângulo:</label>
                <input type="number" class="form-control" id="retangulo_b" name="retangulo_b">
                <label for="retangulo_a">Altura do retângulo:</label>
                <input type="number" class="form-control" id="retangulo_a" name="retangulo_a">
                <a><button type="button" class="btn btn-primary mt-2" id="btn_retangulo">Adicionar retângulo</button></a>
            </div>

            <div class="col-sm-2 mt-4 formas" >
                <h3>Triângulo</h3>
                <label for="triangulo_b">Base do triângulo:</label>
                <input type="number" class="form-control" id="triangulo_b" name="triangulo_b">
                <label for="triangulo_a">Altura do triângulo:</label>
                <input type="number" class="form-control" id="triangulo_a" name="triangulo_a">
                <a><button type="button" class="btn btn-primary mt-2" id="btn_triangulo">Adicionar triângulo</button></a>
            </div>
        </div>


    

</body>
@include('layouts.footer')

</html>