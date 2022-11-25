<?php
namespace App\Services;
use App\Rules\HostNameRule;
class ValidateExcelService
{
	


	public function validateArray($rows)
	{	

		$validator = \Validator::make(
			$rows,
			[
				'0.*.sapid' => 'required|distinct|unique:router_details|max:18',
				'0.*.hostname' => ['required','distinct','unique:router_details','max:14'],
				'0.*.loopback' => 'required|distinct|unique:router_details|ip',
				'0.*.mac_address' => ['required','distinct','unique:router_details','max:17',"regex:/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})|([0-9a-fA-F]{4}\\.[0-9a-fA-F]{4}\\.[0-9a-fA-F]{4})$/"]
			],
			[
				'distinct' => ':attribute.duplicate',
				'required' => ':attribute.missing',
				'min' => ':attribute.invalid',
				'max' => ':attribute.invalid',
				'regex'=>':attribute.invalid',
				'unique' => ':attribute.already-exists-in-database'
			]
		);

		
		$errors = array();

		if ($validator->fails()) :

			$messages = $validator->errors()->all();
			
			foreach ($messages as $key => $value) :

				$split = explode('.', $value);

				$errors[$split[1]][$split[2]] = $split[3];

			endforeach;


			

		endif;

		return $errors;;
	}
}