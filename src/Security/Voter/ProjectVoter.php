<?php

namespace App\Security\Voter;

use App\Entity\Projects;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class ProjectVoter extends Voter
{
    public const EDIT = 'PROJECT_EDIT';
    public const VIEW = 'PROJECT_VIEW';

    protected function supports(string $attribute, mixed $subject): bool
    {
        return in_array($attribute, [self::EDIT, self::VIEW])
            && $subject instanceof Projects;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        if (!in_array('ROLE_MANAGER', $user->getRoles()) && !in_array('ROLE_MANAGER_TRANSLATOR', $user->getRoles())) {
            return false;
        }

        switch ($attribute) {
            case self::EDIT:
                return $this->canEdit($subject, $user);
            case self::VIEW:
                return $this->canView($subject, $user);
        }

        return false;
    }

    private function canView(Projects $project, User $user): bool
{
    // if i want verify my role for debug
    // dd($user->getRoles());
    return $user === $project->getUser();
}


    private function canEdit(Projects $project, User $user): bool
    {
        
        return $user === $project->getUser();
    }
}
