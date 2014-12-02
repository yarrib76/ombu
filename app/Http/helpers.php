<?php

function delete_form($routeParams, $label = 'Eliminar'){

	$form = Form::open (['method' => 'DELETE', 'route' => $routeParams]);
	$form .= Form::submit($label, ['class' => 'btn btn-danger']);
	return $form .= Form::close();


}

function seedFromCSV($filename='', $delimiter=',')
{
	if(!file_exists($filename) || !is_readable($filename))
		return FALSE;

	$header = NULL;
	$data = array();
	if (($handle = fopen($filename, 'r')) !== FALSE)
	{
		while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
		{
			if(!$header)
				$header = $row;
			else
				$data[] = array_combine($header, $row);
		}
		fclose($handle);
	}
	return $data;
}

