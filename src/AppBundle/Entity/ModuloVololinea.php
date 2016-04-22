<?php

namespace AppBundle\Entity;

/**
 * ModuloVololinea
 */
class ModuloVololinea
{
    /**
     * @var integer
     */
    private $idViaggio = '0';

    /**
     * @var \DateTime
     */
    private $data = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotore = '0';

    /**
     * @var integer
     */
    private $codpromotorecreazione = '0';

    /**
     * @var string
     */
    private $titolo = '';

    /**
     * @var string
     */
    private $nota;

    /**
     * @var boolean
     */
    private $tipodocumento = '0';

    /**
     * @var string
     */
    private $numprenotazione = '';

    /**
     * @var \DateTime
     */
    private $datain = '0000-00-00 00:00:00';

    /**
     * @var \DateTime
     */
    private $dataout = '0000-00-00 00:00:00';

    /**
     * @var string
     */
    private $partenzaaereoporto = '';

    /**
     * @var string
     */
    private $compagnia = '';

    /**
     * @var string
     */
    private $partenza = '';

    /**
     * @var string
     */
    private $destinazione = '';

    /**
     * @var string
     */
    private $localita = '';

    /**
     * @var string
     */
    private $nominativocarta = '';

    /**
     * @var string
     */
    private $tipobiglietto = '';

    /**
     * @var string
     */
    private $indirizzobigliettocartaceo;

    /**
     * @var boolean
     */
    private $npartecipanti = '0';

    /**
     * @var string
     */
    private $partecipanti;

    /**
     * @var string
     */
    private $erroriviaggio = '';

    /**
     * @var string
     */
    private $totale = '0.00';

    /**
     * @var string
     */
    private $scontoagenzia = '0.00';

    /**
     * @var boolean
     */
    private $agencyfee = '0';

    /**
     * @var string
     */
    private $spesecorriere = '0.00';

    /**
     * @var string
     */
    private $pagamento = '';

    /**
     * @var string
     */
    private $statopagamento = '';

    /**
     * @var integer
     */
    private $modoPagamento = '0';

    /**
     * @var string
     */
    private $incassoPagamento = '';

    /**
     * @var string
     */
    private $notemodulo;

    /**
     * @var \DateTime
     */
    private $datamodifica = '0000-00-00 00:00:00';

    /**
     * @var integer
     */
    private $codpromotoremodifica = '0';

    /**
     * @var string
     */
    private $commissionelorda = '0.00';

    /**
     * @var string
     */
    private $commissionecarta = '0.00';

    /**
     * @var string
     */
    private $commissioneaggiuntiva = '0.00';

    /**
     * @var string
     */
    private $commissionenetta = '0.00';

    /**
     * @var string
     */
    private $iva = '0.00';

    /**
     * @var integer
     */
    private $codpromotoreiva = '0';

    /**
     * @var string
     */
    private $codiceaves = '';

    /**
     * @var string
     */
    private $codiceavesFornitori = '';

    /**
     * @var boolean
     */
    private $statusaves = '0';

    /**
     * @var boolean
     */
    private $bookingStato = '0';

    /**
     * @var integer
     */
    private $bookingCodpromotorestato = '0';

    /**
     * @var integer
     */
    private $bookingCodpromotorelavorazione = '0';

    /**
     * @var boolean
     */
    private $bookingLetto = '0';

    /**
     * @var \DateTime
     */
    private $datainvio;

    /**
     * @var boolean
     */
    private $ecLetto = '0';

    /**
     * @var integer
     */
    private $idModulo;


    /**
     * Set idViaggio
     *
     * @param integer $idViaggio
     *
     * @return ModuloVololinea
     */
    public function setIdViaggio($idViaggio)
    {
        $this->idViaggio = $idViaggio;

        return $this;
    }

    /**
     * Get idViaggio
     *
     * @return integer
     */
    public function getIdViaggio()
    {
        return $this->idViaggio;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return ModuloVololinea
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set codpromotore
     *
     * @param integer $codpromotore
     *
     * @return ModuloVololinea
     */
    public function setCodpromotore($codpromotore)
    {
        $this->codpromotore = $codpromotore;

        return $this;
    }

    /**
     * Get codpromotore
     *
     * @return integer
     */
    public function getCodpromotore()
    {
        return $this->codpromotore;
    }

    /**
     * Set codpromotorecreazione
     *
     * @param integer $codpromotorecreazione
     *
     * @return ModuloVololinea
     */
    public function setCodpromotorecreazione($codpromotorecreazione)
    {
        $this->codpromotorecreazione = $codpromotorecreazione;

        return $this;
    }

    /**
     * Get codpromotorecreazione
     *
     * @return integer
     */
    public function getCodpromotorecreazione()
    {
        return $this->codpromotorecreazione;
    }

    /**
     * Set titolo
     *
     * @param string $titolo
     *
     * @return ModuloVololinea
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;

        return $this;
    }

    /**
     * Get titolo
     *
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * Set nota
     *
     * @param string $nota
     *
     * @return ModuloVololinea
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set tipodocumento
     *
     * @param boolean $tipodocumento
     *
     * @return ModuloVololinea
     */
    public function setTipodocumento($tipodocumento)
    {
        $this->tipodocumento = $tipodocumento;

        return $this;
    }

    /**
     * Get tipodocumento
     *
     * @return boolean
     */
    public function getTipodocumento()
    {
        return $this->tipodocumento;
    }

    /**
     * Set numprenotazione
     *
     * @param string $numprenotazione
     *
     * @return ModuloVololinea
     */
    public function setNumprenotazione($numprenotazione)
    {
        $this->numprenotazione = $numprenotazione;

        return $this;
    }

    /**
     * Get numprenotazione
     *
     * @return string
     */
    public function getNumprenotazione()
    {
        return $this->numprenotazione;
    }

    /**
     * Set datain
     *
     * @param \DateTime $datain
     *
     * @return ModuloVololinea
     */
    public function setDatain($datain)
    {
        $this->datain = $datain;

        return $this;
    }

    /**
     * Get datain
     *
     * @return \DateTime
     */
    public function getDatain()
    {
        return $this->datain;
    }

    /**
     * Set dataout
     *
     * @param \DateTime $dataout
     *
     * @return ModuloVololinea
     */
    public function setDataout($dataout)
    {
        $this->dataout = $dataout;

        return $this;
    }

    /**
     * Get dataout
     *
     * @return \DateTime
     */
    public function getDataout()
    {
        return $this->dataout;
    }

    /**
     * Set partenzaaereoporto
     *
     * @param string $partenzaaereoporto
     *
     * @return ModuloVololinea
     */
    public function setPartenzaaereoporto($partenzaaereoporto)
    {
        $this->partenzaaereoporto = $partenzaaereoporto;

        return $this;
    }

    /**
     * Get partenzaaereoporto
     *
     * @return string
     */
    public function getPartenzaaereoporto()
    {
        return $this->partenzaaereoporto;
    }

    /**
     * Set compagnia
     *
     * @param string $compagnia
     *
     * @return ModuloVololinea
     */
    public function setCompagnia($compagnia)
    {
        $this->compagnia = $compagnia;

        return $this;
    }

    /**
     * Get compagnia
     *
     * @return string
     */
    public function getCompagnia()
    {
        return $this->compagnia;
    }

    /**
     * Set partenza
     *
     * @param string $partenza
     *
     * @return ModuloVololinea
     */
    public function setPartenza($partenza)
    {
        $this->partenza = $partenza;

        return $this;
    }

    /**
     * Get partenza
     *
     * @return string
     */
    public function getPartenza()
    {
        return $this->partenza;
    }

    /**
     * Set destinazione
     *
     * @param string $destinazione
     *
     * @return ModuloVololinea
     */
    public function setDestinazione($destinazione)
    {
        $this->destinazione = $destinazione;

        return $this;
    }

    /**
     * Get destinazione
     *
     * @return string
     */
    public function getDestinazione()
    {
        return $this->destinazione;
    }

    /**
     * Set localita
     *
     * @param string $localita
     *
     * @return ModuloVololinea
     */
    public function setLocalita($localita)
    {
        $this->localita = $localita;

        return $this;
    }

    /**
     * Get localita
     *
     * @return string
     */
    public function getLocalita()
    {
        return $this->localita;
    }

    /**
     * Set nominativocarta
     *
     * @param string $nominativocarta
     *
     * @return ModuloVololinea
     */
    public function setNominativocarta($nominativocarta)
    {
        $this->nominativocarta = $nominativocarta;

        return $this;
    }

    /**
     * Get nominativocarta
     *
     * @return string
     */
    public function getNominativocarta()
    {
        return $this->nominativocarta;
    }

    /**
     * Set tipobiglietto
     *
     * @param string $tipobiglietto
     *
     * @return ModuloVololinea
     */
    public function setTipobiglietto($tipobiglietto)
    {
        $this->tipobiglietto = $tipobiglietto;

        return $this;
    }

    /**
     * Get tipobiglietto
     *
     * @return string
     */
    public function getTipobiglietto()
    {
        return $this->tipobiglietto;
    }

    /**
     * Set indirizzobigliettocartaceo
     *
     * @param string $indirizzobigliettocartaceo
     *
     * @return ModuloVololinea
     */
    public function setIndirizzobigliettocartaceo($indirizzobigliettocartaceo)
    {
        $this->indirizzobigliettocartaceo = $indirizzobigliettocartaceo;

        return $this;
    }

    /**
     * Get indirizzobigliettocartaceo
     *
     * @return string
     */
    public function getIndirizzobigliettocartaceo()
    {
        return $this->indirizzobigliettocartaceo;
    }

    /**
     * Set npartecipanti
     *
     * @param boolean $npartecipanti
     *
     * @return ModuloVololinea
     */
    public function setNpartecipanti($npartecipanti)
    {
        $this->npartecipanti = $npartecipanti;

        return $this;
    }

    /**
     * Get npartecipanti
     *
     * @return boolean
     */
    public function getNpartecipanti()
    {
        return $this->npartecipanti;
    }

    /**
     * Set partecipanti
     *
     * @param string $partecipanti
     *
     * @return ModuloVololinea
     */
    public function setPartecipanti($partecipanti)
    {
        $this->partecipanti = $partecipanti;

        return $this;
    }

    /**
     * Get partecipanti
     *
     * @return string
     */
    public function getPartecipanti()
    {
        return $this->partecipanti;
    }

    /**
     * Set erroriviaggio
     *
     * @param string $erroriviaggio
     *
     * @return ModuloVololinea
     */
    public function setErroriviaggio($erroriviaggio)
    {
        $this->erroriviaggio = $erroriviaggio;

        return $this;
    }

    /**
     * Get erroriviaggio
     *
     * @return string
     */
    public function getErroriviaggio()
    {
        return $this->erroriviaggio;
    }

    /**
     * Set totale
     *
     * @param string $totale
     *
     * @return ModuloVololinea
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;

        return $this;
    }

    /**
     * Get totale
     *
     * @return string
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * Set scontoagenzia
     *
     * @param string $scontoagenzia
     *
     * @return ModuloVololinea
     */
    public function setScontoagenzia($scontoagenzia)
    {
        $this->scontoagenzia = $scontoagenzia;

        return $this;
    }

    /**
     * Get scontoagenzia
     *
     * @return string
     */
    public function getScontoagenzia()
    {
        return $this->scontoagenzia;
    }

    /**
     * Set agencyfee
     *
     * @param boolean $agencyfee
     *
     * @return ModuloVololinea
     */
    public function setAgencyfee($agencyfee)
    {
        $this->agencyfee = $agencyfee;

        return $this;
    }

    /**
     * Get agencyfee
     *
     * @return boolean
     */
    public function getAgencyfee()
    {
        return $this->agencyfee;
    }

    /**
     * Set spesecorriere
     *
     * @param string $spesecorriere
     *
     * @return ModuloVololinea
     */
    public function setSpesecorriere($spesecorriere)
    {
        $this->spesecorriere = $spesecorriere;

        return $this;
    }

    /**
     * Get spesecorriere
     *
     * @return string
     */
    public function getSpesecorriere()
    {
        return $this->spesecorriere;
    }

    /**
     * Set pagamento
     *
     * @param string $pagamento
     *
     * @return ModuloVololinea
     */
    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;

        return $this;
    }

    /**
     * Get pagamento
     *
     * @return string
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * Set statopagamento
     *
     * @param string $statopagamento
     *
     * @return ModuloVololinea
     */
    public function setStatopagamento($statopagamento)
    {
        $this->statopagamento = $statopagamento;

        return $this;
    }

    /**
     * Get statopagamento
     *
     * @return string
     */
    public function getStatopagamento()
    {
        return $this->statopagamento;
    }

    /**
     * Set modoPagamento
     *
     * @param integer $modoPagamento
     *
     * @return ModuloVololinea
     */
    public function setModoPagamento($modoPagamento)
    {
        $this->modoPagamento = $modoPagamento;

        return $this;
    }

    /**
     * Get modoPagamento
     *
     * @return integer
     */
    public function getModoPagamento()
    {
        return $this->modoPagamento;
    }

    /**
     * Set incassoPagamento
     *
     * @param string $incassoPagamento
     *
     * @return ModuloVololinea
     */
    public function setIncassoPagamento($incassoPagamento)
    {
        $this->incassoPagamento = $incassoPagamento;

        return $this;
    }

    /**
     * Get incassoPagamento
     *
     * @return string
     */
    public function getIncassoPagamento()
    {
        return $this->incassoPagamento;
    }

    /**
     * Set notemodulo
     *
     * @param string $notemodulo
     *
     * @return ModuloVololinea
     */
    public function setNotemodulo($notemodulo)
    {
        $this->notemodulo = $notemodulo;

        return $this;
    }

    /**
     * Get notemodulo
     *
     * @return string
     */
    public function getNotemodulo()
    {
        return $this->notemodulo;
    }

    /**
     * Set datamodifica
     *
     * @param \DateTime $datamodifica
     *
     * @return ModuloVololinea
     */
    public function setDatamodifica($datamodifica)
    {
        $this->datamodifica = $datamodifica;

        return $this;
    }

    /**
     * Get datamodifica
     *
     * @return \DateTime
     */
    public function getDatamodifica()
    {
        return $this->datamodifica;
    }

    /**
     * Set codpromotoremodifica
     *
     * @param integer $codpromotoremodifica
     *
     * @return ModuloVololinea
     */
    public function setCodpromotoremodifica($codpromotoremodifica)
    {
        $this->codpromotoremodifica = $codpromotoremodifica;

        return $this;
    }

    /**
     * Get codpromotoremodifica
     *
     * @return integer
     */
    public function getCodpromotoremodifica()
    {
        return $this->codpromotoremodifica;
    }

    /**
     * Set commissionelorda
     *
     * @param string $commissionelorda
     *
     * @return ModuloVololinea
     */
    public function setCommissionelorda($commissionelorda)
    {
        $this->commissionelorda = $commissionelorda;

        return $this;
    }

    /**
     * Get commissionelorda
     *
     * @return string
     */
    public function getCommissionelorda()
    {
        return $this->commissionelorda;
    }

    /**
     * Set commissionecarta
     *
     * @param string $commissionecarta
     *
     * @return ModuloVololinea
     */
    public function setCommissionecarta($commissionecarta)
    {
        $this->commissionecarta = $commissionecarta;

        return $this;
    }

    /**
     * Get commissionecarta
     *
     * @return string
     */
    public function getCommissionecarta()
    {
        return $this->commissionecarta;
    }

    /**
     * Set commissioneaggiuntiva
     *
     * @param string $commissioneaggiuntiva
     *
     * @return ModuloVololinea
     */
    public function setCommissioneaggiuntiva($commissioneaggiuntiva)
    {
        $this->commissioneaggiuntiva = $commissioneaggiuntiva;

        return $this;
    }

    /**
     * Get commissioneaggiuntiva
     *
     * @return string
     */
    public function getCommissioneaggiuntiva()
    {
        return $this->commissioneaggiuntiva;
    }

    /**
     * Set commissionenetta
     *
     * @param string $commissionenetta
     *
     * @return ModuloVololinea
     */
    public function setCommissionenetta($commissionenetta)
    {
        $this->commissionenetta = $commissionenetta;

        return $this;
    }

    /**
     * Get commissionenetta
     *
     * @return string
     */
    public function getCommissionenetta()
    {
        return $this->commissionenetta;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return ModuloVololinea
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set codpromotoreiva
     *
     * @param integer $codpromotoreiva
     *
     * @return ModuloVololinea
     */
    public function setCodpromotoreiva($codpromotoreiva)
    {
        $this->codpromotoreiva = $codpromotoreiva;

        return $this;
    }

    /**
     * Get codpromotoreiva
     *
     * @return integer
     */
    public function getCodpromotoreiva()
    {
        return $this->codpromotoreiva;
    }

    /**
     * Set codiceaves
     *
     * @param string $codiceaves
     *
     * @return ModuloVololinea
     */
    public function setCodiceaves($codiceaves)
    {
        $this->codiceaves = $codiceaves;

        return $this;
    }

    /**
     * Get codiceaves
     *
     * @return string
     */
    public function getCodiceaves()
    {
        return $this->codiceaves;
    }

    /**
     * Set codiceavesFornitori
     *
     * @param string $codiceavesFornitori
     *
     * @return ModuloVololinea
     */
    public function setCodiceavesFornitori($codiceavesFornitori)
    {
        $this->codiceavesFornitori = $codiceavesFornitori;

        return $this;
    }

    /**
     * Get codiceavesFornitori
     *
     * @return string
     */
    public function getCodiceavesFornitori()
    {
        return $this->codiceavesFornitori;
    }

    /**
     * Set statusaves
     *
     * @param boolean $statusaves
     *
     * @return ModuloVololinea
     */
    public function setStatusaves($statusaves)
    {
        $this->statusaves = $statusaves;

        return $this;
    }

    /**
     * Get statusaves
     *
     * @return boolean
     */
    public function getStatusaves()
    {
        return $this->statusaves;
    }

    /**
     * Set bookingStato
     *
     * @param boolean $bookingStato
     *
     * @return ModuloVololinea
     */
    public function setBookingStato($bookingStato)
    {
        $this->bookingStato = $bookingStato;

        return $this;
    }

    /**
     * Get bookingStato
     *
     * @return boolean
     */
    public function getBookingStato()
    {
        return $this->bookingStato;
    }

    /**
     * Set bookingCodpromotorestato
     *
     * @param integer $bookingCodpromotorestato
     *
     * @return ModuloVololinea
     */
    public function setBookingCodpromotorestato($bookingCodpromotorestato)
    {
        $this->bookingCodpromotorestato = $bookingCodpromotorestato;

        return $this;
    }

    /**
     * Get bookingCodpromotorestato
     *
     * @return integer
     */
    public function getBookingCodpromotorestato()
    {
        return $this->bookingCodpromotorestato;
    }

    /**
     * Set bookingCodpromotorelavorazione
     *
     * @param integer $bookingCodpromotorelavorazione
     *
     * @return ModuloVololinea
     */
    public function setBookingCodpromotorelavorazione($bookingCodpromotorelavorazione)
    {
        $this->bookingCodpromotorelavorazione = $bookingCodpromotorelavorazione;

        return $this;
    }

    /**
     * Get bookingCodpromotorelavorazione
     *
     * @return integer
     */
    public function getBookingCodpromotorelavorazione()
    {
        return $this->bookingCodpromotorelavorazione;
    }

    /**
     * Set bookingLetto
     *
     * @param boolean $bookingLetto
     *
     * @return ModuloVololinea
     */
    public function setBookingLetto($bookingLetto)
    {
        $this->bookingLetto = $bookingLetto;

        return $this;
    }

    /**
     * Get bookingLetto
     *
     * @return boolean
     */
    public function getBookingLetto()
    {
        return $this->bookingLetto;
    }

    /**
     * Set datainvio
     *
     * @param \DateTime $datainvio
     *
     * @return ModuloVololinea
     */
    public function setDatainvio($datainvio)
    {
        $this->datainvio = $datainvio;

        return $this;
    }

    /**
     * Get datainvio
     *
     * @return \DateTime
     */
    public function getDatainvio()
    {
        return $this->datainvio;
    }

    /**
     * Set ecLetto
     *
     * @param boolean $ecLetto
     *
     * @return ModuloVololinea
     */
    public function setEcLetto($ecLetto)
    {
        $this->ecLetto = $ecLetto;

        return $this;
    }

    /**
     * Get ecLetto
     *
     * @return boolean
     */
    public function getEcLetto()
    {
        return $this->ecLetto;
    }

    /**
     * Get idModulo
     *
     * @return integer
     */
    public function getIdModulo()
    {
        return $this->idModulo;
    }
}
