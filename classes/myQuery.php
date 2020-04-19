<?php 
class myQueryClass
{
    private $table;
    private $conditions;
    private $order;
    private $value;
   
    public function __construct($table,$mesConditions = '',$order = '',$value = ''){
        $this->table = $table;
        $this->conditions = $mesConditions;
        $this->order = $order;
        $this->value = $value;
    }


    /**
     *  Select d'une query
     */
    function myQuerySelect($nameChamps = "*", $oneColumn = false){
        $pdo = bdd();   
        $mesConditions = '';
        $mesOrder = '';
        if($this->conditions != ''){
            $nbCondit = 1;
            foreach($this->conditions as $condition ){
                if(count($this->conditions) == 1 ){
                $mesConditions = "WHERE ".$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                }
                else {
                    if($nbCondit == 1 ){
                        $mesConditions =  "WHERE ".$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                    } else {
                        $mesConditions.= ' AND '.$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                    }
                    $nbCondit++;
                }
            }
        } 
        
        if($this->order != ''){
            $nbOrder = 1;
            foreach($this->order as $order ){
                if(count($this->order) == 1 ){
                    $mesOrder = "Order by ".$order['nameChamps'].' '.$order['sens'];
                    }
                else {
                        if($nbOrder == 1 ){
                            $mesOrder =  "Order by  ".$order['nameChamps'].' '.$order['sens'];
                        } else {
                            $mesOrder.= ', '.$order['nameChamps'].' '.$order['sens'];
                        }
                        $nbOrder++;
                }
            }
        }


       
        $requete = $pdo->prepare("SELECT $nameChamps FROM ".$this->table." ".$mesConditions." ".$mesOrder);
        if($this->conditions != ''){
            foreach($this->conditions as $condition ){
                $requete->bindParam($condition['name'], $condition['value']);
            }
        }
        $requete->execute(); 
        $r = $requete->fetchAll();
        if($oneColumn){
            $r =  array_column($r, $nameChamps);
        }
        return $r;
    }


    function myQueryInsert(){
        $pdo = bdd();
        if($this->conditions != ''){
            $mesConditionsName = '';
            $mesConditionsValue = '';
            $nbreCondi = count($this->conditions); //nbre de conditions
            $nb = 1;
            foreach($this->conditions as $condition ){
                    if(($nbreCondi != 1) && ($nb != 1)){
                       $mesConditionsName.= ", `".$condition["name"]."`";
                       $mesConditionsValue.= ", :".$condition["name"]."";
                       $nb++;
                    }else{     
                    $mesConditionsName.= "`".$condition["name"]."`";
                    $mesConditionsValue.=":".$condition["name"]."";
                }
                $nb++;
            }
        }
    
       $requete = $pdo->prepare("INSERT INTO ".$this->table." (".$mesConditionsName." )  VALUES (".$mesConditionsValue.");");
        if($this->conditions != ''){
            foreach($this->conditions as $condition ){
                $requete->bindParam($condition['name'], $condition['value']);
           }
        }
         $requete->execute();
        ;
         
    }


    function myQueryUpdate(){
        $pdo = bdd();
        $mesConditions = '';
        $mesValues = '';
        if($this->conditions != ''){
            $nbCondit = 1;
            foreach($this->conditions as $condition ){
                if(count($this->conditions) == 1 ){
                $mesConditions = "WHERE ".$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                }
                else {
                    if($nbCondit == 1 ){
                        $mesConditions =  "WHERE ".$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                    } else {
                        $mesConditions.= ' AND '.$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                    }
                    $nbCondit++;
                }
            }
        } 
        if($this->value != ''){
            $nbCondit = 1;
            foreach($this->value as $value ){
                if(count($this->value) == 1 ){
                $mesValues = $value['nameChamps'].'= :'.$value['name'];
                }
                else {
                    if($nbCondit == 1 ){
                        $mesValues =  $value['nameChamps'].'= :'.$value['name'];
                    } else {
                        $mesValues.=  ','.$value['nameChamps'].'= :'.$value['name'];
                    }
                    $nbCondit++;
                }
            }
        } 
        $requete = $pdo->prepare("Update ".$this->table." set ".$mesValues." ".$mesConditions);
        if($this->value != ''){
            foreach($this->conditions as $conditions ){
                $requete->bindParam($conditions['name'], $conditions['value']);
            }
        }
        if($this->value != ''){
            foreach($this->value as $value ){
                $requete->bindParam($value['name'], $value['value']);
            }
        }
        $requete->execute();
    }


    function myQueryDelete(){
        $pdo = bdd();
        $mesConditions = '';

        if($this->conditions != ''){
            $nbCondit = 1;
            foreach($this->conditions as $condition ){
                if(count($this->conditions) == 1 ){
                $mesConditions = "WHERE ".$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                }
                else {
                    if($nbCondit == 1 ){
                        $mesConditions =  "WHERE ".$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                    } else {
                        $mesConditions.= ' AND '.$condition['nameChamps'].' '.$condition['type'].' :'.$condition['name'];
                    }
                    $nbCondit++;
                }
            }
        } 
       
        $requete = $pdo->prepare("Delete from ".$this->table." ".$mesConditions);
        if($this->conditions != ''){
            foreach($this->conditions as $conditions ){
                $requete->bindParam($conditions['name'], $conditions['value']);
            }
        }
        $requete->execute();
    }
}