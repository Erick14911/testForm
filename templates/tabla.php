        <table>
        <tr class="rowTable">
          <th class="headTable">Nombre</th>
          <th class="headTable">Telefono</th>
          <th class="headTable">Correo Electronico</th>
        </tr>
<?php
if($query->num_rows){
    while($fila = $query->fetch_assoc()){
        echo "<tr class='rowTable'>";
        echo "<td class='dataTable'>".$fila['Nombre']."</dt>";
        echo "<td class='dataTable'>".$fila['Telefono']."</dt>";
        echo "<td class='dataTable'>".$fila['Correo Electronico']."</dt>";
        echo "</tr>";
    }
}
?>
      </table>
