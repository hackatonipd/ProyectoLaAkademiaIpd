<?php

namespace AkademiaBundle\Repository;

/**
 * ParticipanteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ParticipanteRepository extends \Doctrine\ORM\EntityRepository
{

	public function getbuscarParticipante($dni){

        $query = "select id from ACADEMIA.participante where dni='$dni'";
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        $dni = $stmt->fetchAll();

    	return $dni;
	}

	public function getCantidadRegistros($dni){

		$query = "select count(*) as registros from ACADEMIA.participante where dni='$dni';";
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        $CantRegistros = $stmt->fetchAll();

        return $CantRegistros;

	}
}

