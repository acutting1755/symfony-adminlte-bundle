<?php

namespace SbS\AdminLTEBundle\EventListener;

use SbS\AdminLTEBundle\Event\UserEvent;
use SbS\AdminLTEBundle\Model\Demo\UserModel;

/**
 * Class UserEventListener.
 */
class UserEventListener
{
    /**
     * @param UserEvent $event
     */
    public function onShowUser(UserEvent $event)
    {
        $user = new UserModel('demo_user');
        $user->setMemberSince(new \DateTime())->setUsername('Demo User');

        $event->setUser($user);
    }
}
