<?php

namespace App\Security\Voter;

use App\Entity\Projects;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class SourceVoter extends Voter
{
    public const EDIT = 'SOURCE_EDIT';
    public const VIEW = 'SOURCE_VIEW';

    protected function supports(string $attribute, mixed $project): bool
    {
        return in_array($attribute, [self::EDIT, self::VIEW])
            && $project instanceof Projects;
    }

    protected function voteOnAttribute(string $attribute, mixed $project, TokenInterface $token): bool
    {
        $user = $token->getUser();

        if (!$user instanceof UserInterface) {
            return false;
        }

        if(null=== $project->getUser()) return false;

        switch ($attribute) {
            case self::EDIT:
                return $this->canEdit($project, $user);
            case self::VIEW:
                return $this->canView($project, $user);
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
