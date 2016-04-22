<?php

namespace AppBundle\Entity;

/**
 * PagamentiDettagliRinnovi
 */
class PagamentiDettagliRinnovi
{
    /**
     * @var integer
     */
    private $idpromotore = '0';

    /**
     * @var string
     */
    private $idrif = '';

    /**
     * @var integer
     */
    private $iddettagli;


    /**
     * Set idpromotore
     *
     * @param integer $idpromotore
     *
     * @return PagamentiDettagliRinnovi
     */
    public function setIdpromotore($idpromotore)
    {
        $this->idpromotore = $idpromotore;

        return $this;
    }

    /**
     * Get idpromotore
     *
     * @return integer
     */
    public function getIdpromotore()
    {
        return $this->idpromotore;
    }

    /**
     * Set idrif
     *
     * @param string $idrif
     *
     * @return PagamentiDettagliRinnovi
     */
    public function setIdrif($idrif)
    {
        $this->idrif = $idrif;

        return $this;
    }

    /**
     * Get idrif
     *
     * @return string
     */
    public function getIdrif()
    {
        return $this->idrif;
    }

    /**
     * Get iddettagli
     *
     * @return integer
     */
    public function getIddettagli()
    {
        return $this->iddettagli;
    }
}
