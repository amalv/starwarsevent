<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($firstName, $count)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('EventBundle:Event');

            $event = $repo->findOneBy(array(
               'name' => 'Darth\'s suprise birthday party!' 
            ));

        return $this->render(
            'EventBundle:Default:index.html.twig',
            array('name' => $firstName, 'count' => $count, 'event' => $event)
        );
    }
}
