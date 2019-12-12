<?php


namespace modell;


class Konyv
{
    private $isbn;

    /**
     * @return mixed
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * @param mixed $isbn
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    /**
     * @return mixed
     */
    public function getCim()
    {
        return $this->cim;
    }

    /**
     * @param mixed $cim
     */
    public function setCim($cim)
    {
        $this->cim = $cim;
    }

    /**
     * @return mixed
     */
    public function getEredetiCim()
    {
        return $this->eredeti_cim;
    }

    /**
     * @param mixed $eredeti_cim
     */
    public function setEredetiCim($eredeti_cim)
    {
        $this->eredeti_cim = $eredeti_cim;
    }

    /**
     * @return mixed
     */
    public function getSzerzo()
    {
        return $this->szerzo;
    }

    /**
     * @param mixed $szerzo
     */
    public function setSzerzo($szerzo)
    {
        $this->szerzo = $szerzo;
    }

    /**
     * @return mixed
     */
    public function getResz()
    {
        return $this->resz;
    }

    /**
     * @param mixed $resz
     */
    public function setResz($resz)
    {
        $this->resz = $resz;
    }

    /**
     * @return mixed
     */
    public function getSorozat()
    {
        return $this->sorozat;
    }

    /**
     * @param mixed $sorozat
     */
    public function setSorozat($sorozat)
    {
        $this->sorozat = $sorozat;
    }

    /**
     * @return mixed
     */
    public function getOldalakSzama()
    {
        return $this->oldalak_szama;
    }

    /**
     * @param mixed $oldalak_szama
     */
    public function setOldalakSzama($oldalak_szama)
    {
        $this->oldalak_szama = $oldalak_szama;
    }

    /**
     * @return mixed
     */
    public function getKiado()
    {
        return $this->kiado;
    }

    /**
     * @param mixed $kiado
     */
    public function setKiado($kiado)
    {
        $this->kiado = $kiado;
    }

    /**
     * @return mixed
     */
    public function getFordito()
    {
        return $this->fordito;
    }

    /**
     * @param mixed $fordito
     */
    public function setFordito($fordito)
    {
        $this->fordito = $fordito;
    }

    /**
     * @return mixed
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * @param mixed $kategoria
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;
    }
    private $cim;
    private $eredeti_cim;
    private $szerzo;
    private $resz;
    private $sorozat;
    private $oldalak_szama;
    private $kiado;
    private $fordito;
    private $kategoria;
}

