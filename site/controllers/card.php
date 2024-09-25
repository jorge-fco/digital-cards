<?php
	/*
		🗓 Date: 25-12-2024
		👨🏻‍💻 Developer by Jorge Fco.™
	*/

	return function ($page) {

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
			//
		];
	}
?>