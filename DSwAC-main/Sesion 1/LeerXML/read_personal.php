	<?php


		print("<h1 align='center'>Listado de Estudiantes DSwAC</h1>");
		echo('<table align="center" border=1 style="background:yellow">');
		//read xml from url
		$xml = simplexml_load_file("http://localhost/cloud/DSwAC-main/Sesion%201/LeerXML/personal_info.xml");

			//first columns is keys name and second is values with foreach
			foreach($xml->children() as $child)
			{
				echo('<tr>');
				echo('<td>'.$child->getName().'</td>');
				echo('<td>'.$child.'</td>');
				echo('</tr>');
			}
		echo('</table>');
		
		




	
?>