<?php
extract($data);

if ($sel_arrivial===null) {
	echo("<h1>Записано успешно!</h1>");
} else {
	echo("<h1>В данный период сотрудник уже в командировке!</h1>");
}

?>