<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Machines;
use AppBundle\Entity\Users;
use AppBundle\Entity\Rooms;
use AppBundle\Entity\history;
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
    if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirectToRoute('projet_list');
      
    }

    $authenticationUtils = $this->get('security.authentication_utils');

    $user = $this->getUser();

    if (null === $user) {
    } else {

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
        $history = new history;

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

      $now = new\DateTime('Europe/Paris');

      $roomname = $room->getName();
      $type = 1;

      $history->setName($roomname);
      $history->setType($type);
      $history->setDate($now);

      $em = $this->getDoctrine()->getManager();
      $em->persist($history);
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
            //->findBy(array('room' => '1' ));
            ->findAll();

      $machine = new Machines;
      $history = new history;

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
        $ping = 0;

        $now = new\DateTime('Europe/Paris');

        $machine->setName($name);
        $machine->setIp($ip);
        $machine->setUser($user);
        $machine->setRoom($room);
        $machine->setCreationdate($now);
        $machine->setState($state);
        $machine->setPing($ping);
        $machine->setPingdate($now);
        $machine->setStatedate($now);

        $em = $this->getDoctrine()->getManager();
        $em->persist($machine);
        $em->flush();

      $type = 2;

      $history->setName($name);
      $history->setType($type);
      $history->setDate($now);

      $em = $this->getDoctrine()->getManager();
      $em->persist($history);
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
        $history = new history;
        $now = new\DateTime('Europe/Paris');


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

        $now = new\DateTime('Europe/Paris');

        $em = $this->getDoctrine()->getManager();
        $machine = $em->getRepository('AppBundle:Machines')->find($id);

        $machine->setName($name);
        $machine->setIp($ip);
        $machine->setUser($user);
        $machine->setRoom($room);
        $machine->setCreationdate($now);



        $em->flush();

        $machinename = $machine->getName();
        $type = 6;

        $history->setName($machinename);
        $history->setType($type);
        $history->setDate($now);

        $em = $this->getDoctrine()->getManager();
        $em->persist($history);
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
            $history = new history;



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

              $now = new\DateTime('Europe/Paris');
              $roomname = $room->getName();
              $type = 5;

              $history->setName($roomname);
              $history->setType($type);
              $history->setDate($now);

              $em = $this->getDoctrine()->getManager();
              $em->persist($history);
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
        $history = new history;
    	$em = $this->getDoctrine()->getManager();
    	$machine = $em->getRepository('AppBundle:Machines')->find($id);

        $now = new\DateTime('Europe/Paris');
        $machinename = $machine->getName();
        $type = 4;

        $history->setName($machinename);
        $history->setType($type);
        $history->setDate($now);

        $em->persist($history);
        $em->flush();

    	$em->remove($machine);
    	$em->flush();

    	return $this->redirectToRoute('projet_list');
    }

    /**
     * @Route("/projet/deleteroom/{id}", name="projet_deleteroom")
     */
    public function deleteroomAction($id)
    {
        $history = new history;
        $em = $this->getDoctrine()->getManager();
        $room = $this->getDoctrine()
        ->getRepository('AppBundle:Rooms')
        //->findBy(array('room' => '1' ));
        ->find($id);



        $now = new\DateTime('Europe/Paris');
        $roomname = $room->getName();
        $type = 3;

        $history->setName($roomname);
        $history->setType($type);
        $history->setDate($now);

        $em->persist($history);
        $em->flush();


        $em->remove($room);
        $em->flush();

        return $this->redirectToRoute('projet_list');
    }


    /**
     * @Route("/projet/status/{id}", name="projet_status")
     */
    public function statusAction($id, Request $request)
    {
        $history = new history;
        $em = $this->getDoctrine()->getManager();
        $machine = $em->getRepository('AppBundle:Machines')->find($id);
            
            //->findBy(array('room' => '1' ));
            //->find($id);
        $machinestate = $machine->getState();

            
            if($machinestate==0)
        {
            $machine->setState(1);
            $now = new\DateTime('Europe/Paris');
            $machine->setStatedate($now);
            $em->flush();

            $type = 7;
            $machinename = $machine->getName();
            $history->setName($machinename);
            $history->setType($type);
            $history->setDate($now);

            $em->persist($history);
            $em->flush();

        }
        else
        {
           $machine->setState(0);
           $now = new\DateTime('Europe/Paris');
           $machine->setStatedate($now);
           $em->flush();

            $type = 8;
            $machinename = $machine->getName();
            $history->setName($machinename);
            $history->setType($type);
            $history->setDate($now);

            $em->persist($history);
            $em->flush(); 
        }
        $em->flush();


            return $this->redirectToRoute('projet_list');
    }

     /**
     * @Route("/projet/ping/{id}", name="projet_ping")
     */
    public function pingAction($id)
    {
        $history = new history;
        $em = $this->getDoctrine()->getManager();
        $machine = $em->getRepository('AppBundle:Machines')->find($id);

        $machineip = $machine->getIp();
        $machinestate = $machine->getState();
        $machineping = $machine->getPing();

        
        $pingreq = exec("ping -n 1 $machineip");


        if(preg_match("/ms/", $pingreq) && ($machinestate==1) && ($machineping==0))
        {
            $machineping=1;
            $now = new\DateTime('Europe/Paris');
            $machine->setPingdate($now);
            $em->flush();
        }
        else if(preg_match("/ms/", $pingreq) && ($machinestate==1) && ($machineping==1))
        {


        }
        else
        {
            $machineping=0;
            $now = new\DateTime('Europe/Paris');
            $machine->setPingdate($now);
            $em->flush();
        }

        $machine->setPing($machineping);

        $em->flush();

        $type = 9;
        $machinename = $machine->getName();
        $history->setName($machinename);
        $history->setType($type);
        $history->setDate($now);

        $em->persist($history);
        $em->flush();

        return $this->redirectToRoute('projet_list');

    }

    /**
     * @Route("/projet/historyarchive", name="projet_history")
     */
    public function historyarchiveAction( Request $request)
    {
        $history = $this->getDoctrine()
        ->getRepository('AppBundle:history')
        ->findAll();

         return $this->render('projet/historyarchive.html.twig', array ('history' => $history));
    }


}
