<?php
  ini_set("display_errors", E_ALL);
  include_once "Persona.php";

  $lista = [
      new Persona ("Fulano","1969-11-02","5578976988"),
      new Persona ("Omar","1998-11-01","5578976688"),
      new Persona ("Carlos","2000-10-17","5535598420"),
      new Persona ("Maria","2004-09-07","5578976988"),
      new Persona ("Karla","2005-12-06","5578976988"),
      new Persona ("Joaquin","1997-11-25","5578976988"),
      new Persona ("Pablo","1977-11-22","5578976988"),
      new Persona ("Julian","1985-11-21","5578976988"),
      new Persona ("Samantha","1980-11-19","5578976988"),
      new Persona ("Fernanda","1990-11-18","5578976988"),
  ];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Lista de Personas</title>
        <style>
            td {
                background-color: #0097FF;
            }
        </style>
    </head>
    <body>
        <h1>Lista de Personas</h1>
        <table border>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Edad Actual</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $p): ?>
                <tr>
                    <td><?php echo $p->getNombre(); ?></td>
                    <td><?php echo $p->getFecNac(); ?></td>
                    <td><?php echo $p->getEdad(); ?></td>
                    <td><?php echo $p->getTelefono(); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>
