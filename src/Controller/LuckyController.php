<?php
// src/Controller/LuckyController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\ Controller;
class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number", name="app_lucky_number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);
        return new Response(
            'Lucky number: '.$number.''
        );
    }
}
?>