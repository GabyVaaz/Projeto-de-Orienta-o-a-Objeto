<?php
class Funcionario{ 
private $nome;
private $cidade;
private $salHora;
private $horasTrab;
private $salarioFinal;



    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
   return $this-> $nome;   
    }                                                                
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getCidade(){
   return $this->$cidade;   
    }                    
    public function setSalHora($salHora){
        $this->salHora = $salHora;
    }
    public function getSalHora(){
   return $this->$salHora;   
    }                       
    public function sethorasTrab($horasTrab){
        $this->horasTrab = $horasTrab;
    }
    public function gethorasTrab(){
   return $this->$horasTrab;   
    }                                                            
    public function setsalarioFinal($salarioFinal){
        $this->salarioFinal = $salarioFinal;
    }
    public function getsalarioFinal(){
   return $this->$salarioFinal;   
    }                                                            
    
public function calcularSalario(){
    $salario = (($this->horasTrab * $this->salHora) * 30);
    return $salario;
}
public function MostrarDados(){
    return "<br>Nome :".$this->nome ."<br>Cidade :". $this->cidade."<br>Salário hora :".$this->salHora."<br>Horas trabalhadas :".$this->horasTrab;
}
public function DarAumento($Aumento){
    return $this->salHora += $Aumento;
    
} 


}
?>