<?php
/** 
 * This is just a demo from https://symfony.com/doc/current/page_creation.html 
 * 
 * PHP version 7.2 
 * 
 * @category Miscellaneous_Controller
 * @package  Openroom
 * @author   Kushal Hada <kushaldeveloper@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3 or later
 * @link     /lucky/number
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
/** 
 * This is just a demo from https://symfony.com/doc/current/page_creation.html 
 * 
 * @category Miscellaneous_Controller
 * @package  Openroom
 * @author   Kushal Hada <kushaldeveloper@gmail.com>
 * @license  https://www.gnu.org/licenses/gpl-3.0.en.html GPLv3 or later
 * @link     /lucky/number
 */
class LuckyController
{
    /**
     * Generate and render a random number 
     * 
     * @return Response the response is in form of html 
     * Ideally I want to use twig for this 
     */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}