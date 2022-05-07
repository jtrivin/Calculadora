<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
       <form action="" method="GET">
           <br>
             <div class="container">
                 <div class="row">
                      <div class="col-md-8 col-md-offset-2">
                          <div class="panel panel-primary">
                              <div class="panel-heading">
                                  <center><h1>CALCULADORA</h1></center>
                              </div>
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-md-5">
                                          <label for="">Numero 1</label>
                                          <input type="number" value="<?php print($_GET['numero1']) ?>" class="form-control" name="numero1" id="numero1" required>
                                      </div>
                                    
                                      <div class="col-md-5">
                                          <label for="">Numero 2</label>
                                          <input type="number" value="<?php print($_GET['numero2']) ?>" class="form-control" name="numero2" id="numero1" required>
                                      </div>
                                      <div class="col-md-2">
                                          <label for="">Operacion</label>
                                          <select name="operacion" id="operacion" class="form-control">
                                              <option value="sumar">+</option>
                                              <option value="restar">-</option>
                                              <option value="multiplicar">*</option>
                                              <option value="dividir">/</option>
                                          </select>
                                      </div>
                                  </div>
                                  <br>
                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2" type="submit">resultado</button>
                                        </div>
                            </div>
                          </div>
                      </div>
                 </div>
             </div>
       </form>
          <br>
       <div class="container">
           <div class="row">
               <div class="col-md-8 col-md-offset-2">
               <div class="alert alert-danger" role="alert">
                 <?php
                 $numero1 = @$_GET['numero1'];
                 $numero2 = @$_GET['numero2'];
                 $operacion = @$_GET['operacion'];
                 $resultado = 0;

                if($operacion == 'sumar'){
                    $resultado = $numero1 + $numero2;
                } 
                else if($operacion == 'restar'){
                    $resultado = $numero1 - $numero2;
                } 
                else if($operacion == 'multiplicar'){
                    $resultado = $numero1 * $numero2;
                } 
                else if($operacion == 'dividir'){
                    $resultado = $numero1 / $numero2;
                }
                else{
                    $resultado = "Existen errores en la operacion";
                }         
                ?>
                    El resultado de la <?php print ($operacion) ?> es : <strong><?php print($resultado) ?></strong>

                </div>
               </div>
           </div>
       </div>
</body>
</html>