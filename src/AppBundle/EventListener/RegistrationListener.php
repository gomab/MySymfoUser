<?php
/**
 * Created by PhpStorm.
 * User: gomab
 * Date: 1/23/18
 * Time: 10:41 AM
 */

namespace AppBundle\EventListener;


use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use symfony\Component\EventDispatcher\EventSubscriberInterface;


class RegistrationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        //Indiquer à quel Event la classe doit souscrire
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'
        );
    }

    public function onRegistrationSuccess(FormEvent $event){
        $roles = array('ROLE_DEFAULT');

        $user = $event->getForm()->getData();
        $user->setRoles($roles);
    }
}