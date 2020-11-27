<html>
    <head>
        <title>Calcular cilindrada</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        <link rel="stylesheet" href="index.css" />
        
    </head>
    <form action="calculadora.php">            

        <h1>Calcular cilindrada</h1>
        <input type="number" name="diametrodelcilindro" placeholder="Diametro cilindro(MM)"/>

        <br>
        <br>

        <input type="number" name="carrera" placeholder="Carrera(en MM)"/>
        <br>
        <br>

        <label for="numerodecilindros">numero de cilindros</label>
        <br>

        <select class="numerodecilindros" name="numerodecilindros">
            <option value="3">1</option>
            <option value="3">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7(no apto sudamerica)</option>
            <option value="8">8(no apto sudamerica)</option>
            <option value="9">9(no apto sudamerica)</option>
            <option value="10">10(no apto sudamerica)</option>
            <option value="11">11(no apto sudamerica)</option>
            <option value="12">12(menos)</option>
        </select>
          <br>
          <br>
        <input type="submit" value="calcular"/>

    </form>
</html>

