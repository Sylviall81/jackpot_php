<?php
/**
 * Minijuegos: Tragaperras (2) - tragaperras-2-1.php
 *
 * @author    Bartolomé Sintes Marco <bartolome.sintes+mclibre@gmail.com>
 * @copyright 2022 Bartolomé Sintes Marco
 * @license   http://www.gnu.org/licenses/agpl.txt AGPL 3 or later
 * @version   2022-11-30
 * @link      https://www.mclibre.org
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU Affero General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Affero General Public License for more details.
 *
 *  You should have received a copy of the GNU Affero General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
session_name("jackpot-2");
session_start();

// Valores iniciales variables sesión
if (!isset($_SESSION["monedas"])) {
    header("Location:jackpot-2-2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Jackpot (2).
    Minijuegos.
    Ejercicios. PHP. Bartolomé Sintes Marco. www.mclibre.org
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Jackpot (2)</h1>

<?php
$simbolosNumero = 8;   // Número de frutas

// Se genera una combinación nueva
$fruta1 = rand(1, $simbolosNumero);
$fruta2 = rand(1, $simbolosNumero);
$fruta3 = rand(1, $simbolosNumero);

// Se genera el formulario
print "  <form action=\"jackpot-2-2.php\" method=\"get\">\n";
print "    <table style=\"margin-left: auto; margin-right: auto; border: black 4px solid; border-spacing: 10px;\">\n";
print "      <tr>\n";
// Se muestran las tres imágenes de la combinación actual
print "        <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/frutas/$fruta1.svg\" width=\"160\" alt=\"Imagen\"></td>\n";
print "        <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/frutas/$fruta2.svg\" width=\"160\" alt=\"Imagen\"></td>\n";
print "        <td style=\"border: black 4px solid; padding: 10px\">"
    . "<img src=\"img/frutas/$fruta3.svg\" width=\"160\" alt=\"Imagen\"></td>\n";
print "        <td style=\"vertical-align: top; text-align: center\">\n";
// Se muestra el contador de monedas
print "          <p><button type=\"submit\" name=\"accion\" value=\"moneda\">Meter moneda</button></p>\n";
print "          <p style=\"margin: 0; font-size: 300%; border: black 4px solid; padding: 2px\">$_SESSION[monedas]</p>\n";
print "        </td>\n";
print "      </tr>\n";
print "    </table>\n";
print "  </form>\n";
?>

  <footer>
    <p class="ultmod">
      Última modificación de esta página:
      <time datetime="2022-11-30">30 de noviembre de 2022</time>
    </p>

    <p class="licencia">
      Este programa forma parte del curso <strong><a href="https://www.mclibre.org/consultar/php/">Programación
      web en PHP</a></strong> de <a href="https://www.mclibre.org/" rel="author">Bartolomé Sintes Marco</a>.<br>
      El programa PHP que genera esta página se distribuye bajo
      <a rel="license" href="http://www.gnu.org/licenses/agpl.txt">licencia AGPL 3 o posterior</a>.
    </p>
  </footer>
</body>
</html>
