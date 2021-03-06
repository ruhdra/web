<?php

  Class Passagem{
    
    private $codigo_Psg;
    private $tipo_Psg;
    private $valor_Psg;
    private $checkin_Psg;
    private $id_Prog;
    private $cpf_Cli;
    private $id_Pag;

    function __construct($codigo_Psg,$tipo_Psg,$valor_Psg,$id_Prog,$cpf_Cli,$id_Pag){
	    $this->codigo_Psg = $codigo_Psg;        
	    $this->tipo_Psg = $tipo_Psg;
        $this->valor_Psg = $valor_Psg;
        $this->checkin_Psg = null;
        $this->id_Prog = $id_Prog;
        $this->cpf_Cli = $cpf_Cli;
        $this->id_Pag = $id_Pag;
    }
    public function calcular_Valor(){}

    public function cancelar_Passagem(){}

    public function checkin(){}

    public function getCodigo_Psg()
    {
        return $this->codigo_Psg;
    }

    public function setCodigo_Psg($codigo_Psg)
    {
        $this->codigo_Psg = $codigo_Psg;

        return $this;
    }

    public function getTipo_Psg()
    {
        return $this->tipo_Psg;
    }

    public function setTipo_Psg($tipo_Psg)
    {
        $this->tipo_Psg = $tipo_Psg;

        return $this;
    }

    public function getValor_Psg()
    {
        return $this->valor_Psg;
    }

    public function setValor_Psg($valor_Psg)
    {
        $this->valor_Psg = $valor_Psg;

        return $this;
    }

    public function getCheckin_Psg()
    {
        return $this->checkin_Psg;
    }

    public function setCheckin_Psg($checkin_Psg)
    {
        $this->checkin_Psg = $checkin_Psg;

        return $this;
    }

    public function getId_Prog()
    {
        return $this->id_Prog;
    }

    public function setId_Prog(Programacao $id_Prog)
    {
        $this->id_Prog = $id_Prog;

        return $this;
    }

    public function getCpf_Cli()
    {
        return $this->cpf_Cli;
    }

    public function setCpf_Cli(Cliente $cpf_Cli)
    {
        $this->cpf_Cli = $cpf_Cli;

        return $this;
    }

    public function getId_Pag()
    {
        return $this->id_Pag;
    }

    public function setId_Pag(Pagamento $id_Pag)
    {
        $this->id_Pag = $id_Pag;

        return $this;
    }
  }
   
?>