<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Machines;
use AppBundle\Entity\Users;
use AppBundle\Entity\Rooms;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ProjetSymfoController extends Controller
{
    /**
     * @Route("/", name="login")
     */
    public function loginAction(Request $request)
  {
    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('projet_list');
      
    }

    // Le service authentication_utils permet de récupérer le nom d'utilisateur
    // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
    // (mauvais mot de passe par exemple)
    $authenticationUtils = $this->get('security.authentication_utils');

    $user = $this->getUser();

    if (null === $user) {
      // Ici, l'utilisateur est anonyme ou l'URL n'est pas derrière un pare-feu
    } else {
      // Ici, $user est une instance de notre classe User
    }

    return $this->render('projet/login.html.twig', array(
      'last_username' => $authenticationUtils->getLastUsername(),
      'error'         => $authenticationUtils->getLastAuthenticationError(),
    ));
  }
    /**
     * @Route("/projet/list", name="projet_list")
     */
    public function listAction()
    {
    	$machines = $this->getDoctrine()
    		->getRepository('AppBundle:Machines')
    		//->findBy(array('room' => '1' ));
    		->findAll();

    	$rooms = $this->getDoctrine()
    		->getRepository('AppBundle:Rooms')
    		->findAll();

        return $this->render('projet/index.html.twig', array ('machines' => $machines, 'rooms' => $rooms));

    }

    /**
     * @Route("/projet/createroom", name="projet_createroom")
     */
    public function createroomAction(Request $request)
    {
        $room = new Rooms;

        $form = $this->createFormBuilder($room)
        	->add('name', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
        	->add('add', SubmitType::class, array('label' => 'Create Room', 'attr' => array ('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))

        	->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
    	{
			$name = $form['name']->getData();

			$room->setName($name);
    		
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($room);
    		$em->flush();


    		return $this->redirectToRoute('projet_list');

    	}

        return $this->render('projet/createroom.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/projet/createmachine", name="projet_createmachine")
     */
    public function createmachineAction(Request $request)
    {
        
        $rooms = $this->getDoctrine()
            ->getRepository('AppBundle:Rooms')
            ->findAll();

    	$machine = new Machines;

    	$form = $this->createFormBuilder($machine)
    		->add('name', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('ip', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('user', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('room', ChoiceType::class, array('choices' => array('1'=> '1', '2'=> '2', '3'=> '3', '4'=> '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'), 'attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('add', SubmitType::class, array('label' => 'Create Machine', 'attr' => array ('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))

    		->getForm();

    	$form->handleRequest($request);

    	if ($form->isSubmitted() && $form->isValid())
    	{
    		$name = $form['name']->getData();
    		$ip = $form['ip']->getData();
    		$user = $form['user']->getData();
    		$room = $form['room']->getData();
            $state = 0;

    		$now = new\DateTime('now');

    		$machine->setName($name);
    		$machine->setIp($ip);
    		$machine->setUser($user);
    		$machine->setRoom($room);
    		$machine->setCreationdate($now);
            $machine->setState($state);

    		$em = $this->getDoctrine()->getManager();
    		$em->persist($machine);
    		$em->flush();


    		return $this->redirectToRoute('projet_list');

    	}

        return $this->render('projet/createmachine.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/projet/edit/{id}", name="projet_edit")
     */
    public function editAction($id, Request $request)
    {
        $machine = $this->getDoctrine()
    		->getRepository('AppBundle:Machines')
    		//->findBy(array('room' => '1' ));
    		->find($id);

    		$now = new\DateTime('now');


    	    $machine->setName($machine->getName());
    		$machine->setIp($machine->getIp());
    		$machine->setUser($machine->getUser());
    		$machine->setRoom($machine->getRoom());
    		$machine->setCreationdate($now);


    	$form = $this->createFormBuilder($machine)
    		->add('name', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('ip', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('user', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('room', ChoiceType::class, array('choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9'), 'attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
    		->add('add', SubmitType::class, array('label' => 'Edit Machine', 'attr' => array ('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))

    		->getForm();

    	$form->handleRequest($request);

    	if ($form->isSubmitted() && $form->isValid())
    	{
    		$name = $form['name']->getData();
    		$ip = $form['ip']->getData();
    		$user = $form['user']->getData();
    		$room = $form['room']->getData();

    		$now = new\DateTime('now');

    		$em = $this->getDoctrine()->getManager();
    		$machine = $em->getRepository('AppBundle:Machines')->find($id);

    		$machine->setName($name);
    		$machine->setIp($ip);
    		$machine->setUser($user);
    		$machine->setRoom($room);
    		$machine->setCreationdate($now);



    		$em->flush();


    		return $this->redirectToRoute('projet_list');

    	}


        return $this->render('projet/edit.html.twig', array ('machine' => $machine, 'form' => $form->createView()));
    }


    /**
     * @Route("/projet/editroom/{id}", name="projet_editroom")
     */
    public function editroomAction($id, Request $request)
        {
            $room = $this->getDoctrine()
                ->getRepository('AppBundle:Rooms')
                //->findBy(array('room' => '1' ));
                ->find($id);



                $room->setName($room->getName());


            $form = $this->createFormBuilder($room)
                ->add('name', TextType::class, array('attr' => array ('class' => 'form-controle', 'style' => 'margin-bottom:15px')))
                ->add('add', SubmitType::class, array('label' => 'Edit Room', 'attr' => array ('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))


                ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                $name = $form['name']->getData();


                $em = $this->getDoctrine()->getManager();
                $room = $em->getRepository('AppBundle:Rooms')->find($id);

                $room->setName($name);




                $em->flush();


                return $this->redirectToRoute('projet_list');

            }


            return $this->render('projet/editroom.html.twig', array ('room' => $room, 'form' => $form->createView()));
        }


    /**
     * @Route("/projet/details/{id}", name="projet_details")
     */
    public function detailsAction($id)
    {
        $machine = $this->getDoctrine()
    		->getRepository('AppBundle:Machines')
    		//->findBy(array('room' => '1' ));
    		->find($id);


        return $this->render('projet/details.html.twig', array ('machine' => $machine));

    }

    /**
     * @Route("/projet/delete/{id}", name="projet_delete")
     */
    public function deleteAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
    	$machine = $em->getRepository('AppBundle:Machines')->find($id);

    	$em->remove($machine);
    	$em->flush();

    	return $this->redirectToRoute('projet_list');
    }

    /**
     * @Route("/projet/deleteroom/{id}", name="projet_deleteroom")
     */
    public function deleteroomAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $room = $em->getRepository('AppBundle:Rooms')->find($id);

        $em->remove($room);
        $em->flush();

        return $this->redirectToRoute('projet_list');
    }


    /**
     * @Route("/projet/status/{id}", name="projet_status")
     */
    public function statusAction($id, Request $request)
    {
        $machine = $this->getDoctrine()
            ->getRepository('AppBundle:Machines');
            
            //->findBy(array('room' => '1' ));
            //->find($id);

            
            $a = $machine->findOneBy(array('id' => $id));

            //var_dump($a->getState());

            if ($a->getState() == 0)
            {
                $a->setState(1);
            }
            else
            {
                $a->setState(0);
            }




            return $this->redirectToRoute('projet_list');

        

    }

}
