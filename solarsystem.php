<!DOCTYPE html>
<html>
<head><title>Solar System Distance Chart</title></head>
<body style="background-image: url(planet_gifs/stars.gif); color: white;">
<?php
define("SUN_KM",1400000);
define("SUN_MILES",865000);

define("MERCURY_KM",58000000);
define("MERCURY_MILES",36000000);

define("VENUS_KM",108000000);
define("VENUS_MILES",67000000);

define("EARTH_KM",150000000);
define("EARTH_MILES",93000000);

define("MARS_KM",227000000);
define("MARS_MILES",141000000);

define("JUPITER_KM",779000000);
define("JUPITER_MILES",483000000);

define("SATURN_KM",1428000000);
define("SATURN_MILES",886000000);

define("URANUS_KM",2974000000);
define("URANUS_MILES",1782000000);

define("NEPTUNE_KM",4506000000);
define("NEPTUNE_MILES",2794000000);

define("PLUTO_KM",5913000000);
define("PLUTO_MILES",3666000000);
?>
<h2>Solar System Distance Chart by {Amos Johnson!}</h2>
<table>
<!-- sun data -->
<tr>
<td><img src="planet_gifs/sun.gif" alt="Sun" width="56" height="56" /></td>
<td>SUN (Diameter of the Sun is <?php echo number_format(SUN_KM); ?>
km or <?php echo number_format(SUN_MILES); ?> miles)</td>
</tr>

<!-- mercury data -->
<tr>
<td><img src="planet_gifs/mercury.gif" alt="Sun" width="56" height="56" /></td>
<td>MERCURY (Diameter of Mercury is <?php echo number_format(MERCURY_KM); ?>
km or <?php echo number_format(MERCURY_MILES); ?> miles)</td>
</tr>

<!-- venus data -->
<tr>
<td><img src="planet_gifs/venus.gif" alt="Sun" width="56" height="56" /></td>
<td>VENUS (Diameter of Venus is <?php echo number_format(VENUS_KM); ?>
km or <?php echo number_format(VENUS_MILES); ?> miles)</td>
</tr>

<!-- earth data -->
<tr>
<td><img src="planet_gifs/earth.gif" alt="Sun" width="56" height="56" /></td>
<td>EARTH (Diameter of the Earth is <?php echo number_format(EARTH_KM); ?>
km or <?php echo number_format(EARTH_MILES); ?> miles)</td>
</tr>

<!-- mars data -->
<tr>
<td><img src="planet_gifs/mars.gif" alt="Sun" width="56" height="56" /></td>
<td>MARS (Diameter of Mars is <?php echo number_format(MARS_KM); ?>
km or <?php echo number_format(MARS_MILES); ?> miles)</td>
</tr>

<!-- jupiter data -->
<tr>
<td><img src="planet_gifs/jupiter.gif" alt="Sun" width="56" height="56" /></td>
<td>JUPITER (Diameter of Jupiter is <?php echo number_format(JUPITER_KM); ?>
km or <?php echo number_format(JUPITER_MILES); ?> miles)</td>
</tr>

<!-- saturn data -->
<tr>
<td><img src="planet_gifs/saturn.gif" alt="Sun" width="56" height="56" /></td>
<td>Saturn (Diameter of Saturn is <?php echo number_format(SATURN_KM); ?>
km or <?php echo number_format(SATURN_MILES); ?> miles)</td>
</tr>

<!-- uranus data -->
<tr>
<td><img src="planet_gifs/uranus.gif" alt="Sun" width="56" height="56" /></td>
<td>URANUS (Diameter of Uranus is <?php echo number_format(URANUS_KM); ?>
km or <?php echo number_format(URANUS_MILES); ?> miles)</td>
</tr>

<!-- neptune data -->
<tr>
<td><img src="planet_gifs/neptune.gif" alt="Sun" width="56" height="56" /></td>
<td>NEPTUNE (Diameter of Neptune is <?php echo number_format(NEPTUNE_KM); ?>
km or <?php echo number_format(NEPTUNE_MILES); ?> miles)</td>
</tr>

<!-- pluto data -->
<tr>
<td><img src="planet_gifs/pluto.gif" alt="Sun" width="56" height="56" /></td>
<td>PLUTO (Diameter of Pluto is <?php echo number_format(PLUTO_KM); ?>
km or <?php echo number_format(PLUTO_MILES); ?> miles)</td>
</tr>

</table>
<hr />
<?php
echo 'Programmed by - "Amos Johnson"';
?>
</body>
</html>