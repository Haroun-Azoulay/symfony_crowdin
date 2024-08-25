<?php

namespace App\Repository;

use App\Entity\Translations;
use App\Entity\Sources;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @extends ServiceEntityRepository<Translations>
 */
class TranslationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Translations::class);
    }

//    /**
//     * @return Translations[] Returns an array of Translations objects
//     */
public function findAllOrderedByName($id)
{
    return $this->getEntityManager()
        ->createQuery(
            'SELECT t FROM App\Entity\Translations t WHERE t.source = :id ORDER BY t.language ASC'
        )
        ->setParameter('id', $id)
        ->getResult();
}


//    public function findOneBySomeField($value): ?Translations
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
