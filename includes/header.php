<header>
        <h1>Trabalho final de Estrutura de Dados</h1>
        <p>Gustavo da Silva Américo - RA: 2650832023004</p>
        <p> Cassia Fernanda Sani - RA: 2650832023002</p>
		
		
<?php date_default_timezone_set('America/Sao_Paulo');
      $horalocal = date('H:i:s');

		if($horalocal < 12){
				echo "<font color='green'><b>...............::::::::::::::::::::  Bom Dia  ::::::::::::::::::::...............</b></font>" ;
	
		}elseif($horalocal >= 12 and $horalocal <= 18){
				echo "<font color='red'><b>...............::::::::::::::::::::  Boa Tarde  ::::::::::::::::::::...............</b></font>" ;
		}else{
				echo "<font color='blue'><b>...............::::::::::::::::::::  Boa Noite  ::::::::::::::::::::...............</b></font>" ;	
		}
?>
 </header>