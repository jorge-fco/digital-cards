<?php
	/*
		🗓 Date: 25-12-2024
		👨🏻‍💻 Developer by Jorge Fco.™
	*/

	return function ($page) {

		// Vars
		$format = array(' ', '-', '(', ')');
		$whatsapp_value = $page->whatsapp();
		$whatsapp_format = trim($whatsapp_value);
		$whatsapp_number = str_replace($format, '', $whatsapp_format);
		$whatsapp_url = 'https://api.whatsapp.com/send/?phone=';
		$whatsapp_text = '?text=Hola';

		//= POST
		if (r::is('post') == true) {
			// Set
			$name = $page;
			$firstname = $page;
			$lastname = $page;
			$position = $page;
			$email = $page;
			$phone = $page;
			$whatsapp = $page;
			$company = $page;
			$address = $page;
			$website = $page;

			//= ARRAY
			$data = array(
				// 📋 User
				'name' => $name,
				'firstname' => $firstname,
				'lastname' => $lastname,
				'position' => $position,
				'email' => $email,
				'phone' => $phone,
				'whatsapp' => $whatsapp,

				// 🏢 Business
				'company' => $company,
				'address' => $address,
				'website' => $website
			);
		}

		// Set template
		return [
			'whatsapp_url' => $whatsapp_url,
			'whatsapp_number' => $whatsapp_number
		];
	}
?>