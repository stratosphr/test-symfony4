<?php
	
	namespace App\Controller;
	
	use Exception;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	
	class LuckyController extends AbstractController {
		
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
