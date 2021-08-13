<?php

namespace App\Customer\Entity;

Class CustomerEntity {


    protected $nama;

    protected $alamat;

    protected $umur;

    /**
     * to set nama
     * @var nama string
     */
    public function setNama(string $nama){
        $this->nama = $nama;
        return $this;
    }

    /**
     * to get nama
     */
    public function getNama() : string{
        return $this->nama;
    }

    /**
     * to set alamat
     * @var alamat string
     */
    public function setAlamat(string $alamat){
        $this->alamat = $alamat;
        return $this;
    }

    /**
     * to get alamat
     */
    public function getAlamat() : string{
        return $this->alamat;
    }


    /**
     * to set umur
     * @var umur string
     */
    public function setUmur(int $umur){
        $this->umur = $umur;
        return $this;
    }

    /**
     * to get umur
     */
    public function getUmur() : int{
        return $this->umur;
    }


}
