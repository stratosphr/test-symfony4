<?php
	
	namespace App\Controller;
	
	use Exception;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	
	class LuckyController {
		
		/**
		 * @Route("lucky/number")
		 * @throws Exception
		 */
		public static function number() {
			$number = random_int(0, 100);
			return new Response(
				'<html lang="en"><body>Lucky number: ' . $number . '</body></html>'
			);
		}
		
	}
