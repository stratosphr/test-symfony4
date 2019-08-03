<?php
	
	namespace App\Controller;
	
	use Exception;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use Symfony\Component\Routing\Annotation\Route;
	
	class LuckyController extends AbstractController {
		
		/**
		 * @Route("lucky/number")
		 * @throws Exception
		 */
		public function number() {
			$number = random_int(0, 100);
			return $this->render('lucky/number.html.twig', [
				'luckyNumber' => $number
			]);
		}
		
	}
