<?php

namespace App\Security\Voter;
use App\Entity\Profil;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;

class ProfilVoter extends Voter
{
    public const EDIT = 'POST_EDIT';
    public const VIEW = 'POST_VIEW';

    protected function supports(string $attribute, mixed $profil): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::EDIT, self::VIEW])
            && $profil instanceof \App\Entity\Profil;
    }

    protected function voteOnAttribute(string $attribute, mixed $profil, TokenInterface $token): bool
    {
        $user = $token->getUser();

        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        if(null=== $profil->getUser()) return false;

        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::EDIT:
                // logic to determine if the user can EDIT
                // return true or false
                break;

            case self::VIEW:
                return $this->canView($profil, $user);
                break;
        }

        return false;
    }

    private function canView(Profil $profil, User $user): bool
    {
        return $user->getId() === $profil->getUser()->getId();
    }

    private function canEdit(Profil $profil, User $user): bool
    {
        return $user->getId() === $profil->getUser()->getId();
    }
}
