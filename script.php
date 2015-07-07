<?

switch($_GET['operator']){
             case 'Квадратний корінь':
			 print sqrt($_GET['number1']);
             break;
             case 'Степінь':
              print pow($_GET['number1'],2);
             break;
}
 ?>
  <?
		$table ='<table border=1>';
		for ($i=1; $i<=($_GET['number2']); $i++){
			$table.='<tr>';
			for ($j=1; $j<=($_GET['number3']); $j++){
				$table.='<td>'.rand().'</td>';
			}
			$table.='</tr>';
		}
	$table.='</table>';
	print $table;
	?>
	
	