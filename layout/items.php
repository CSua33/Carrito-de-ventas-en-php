<div class="card" style="width: 15rem; margin-bottom: 20px" >
  <div class="card-header">
    <h5>Ladrillo</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Propietario: <?php echo $item['propietario'];  ?></li>
    <li class="list-group-item">Propiedad: <?php echo $item['propiedad'];  ?></li>
    <li class="list-group-item">Valor: <?php echo $item['valor'];  ?></li>
    <li class="list-group-item">Estado: <?php echo $item['estado'];  ?></li>
    <li class="list-group-item"> <button id=<?php echo $item['idLadrillo'];?> type="button" class="btn btn-primary btn-lg btn-block" onclick="addtokart(this.id)">Agregar al carrito</button></li>
  </ul>
</div>

<script >
function addtokart(id) {
  fetch('http://localhost/backendChallenge100Ladrillos/backendChallenge100Ladrillos/api/Ladrillos/index.php?get-item='+id)
  .then((response) => response.json())
  .then(
    (data) => array.add(data['item']));
  console.log(array);
  return array;
}

</script>

