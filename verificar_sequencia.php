<?php
    $arT = array([1,3,2,1],[1,3,2],[1,2,1,2],[3,6,5,8,10,20,15],
                 [1,1,2,3,4,4],[1,4,10,4,2],[10,1,2,3,4,5],
                 [1,1,1,2,3],[0,-2,5,6],[1,2,3,4,5,3,5,6],
                 [40,50,60,10,20,30],[1,1],[1,2,5,3,5],
                 [1,2,5,5,5],[10,1,2,3,4,5,6,1],
                 [1,2,3,4,3,6],[1,2,3,4,99,5,6],
                 [123,-17,-5,1,2,3,12,43,45],
                 [3,5,67,98,3],
                 # outros
                 [1],[10,5]);
    
    
    foreach($arT as $v){
        var_dump($v);
        
        if(count($v) <= 2){ // 1 - Sequencias com 1 elementos são True. 2 - sequencias com 2 elementos se transformam em sequencias com 1 elemento após removermos 1 elemento
            echo "True";
        }else{
            
            $qtd = array_count_values($v);   
            
            $repeticoes = 0;
            foreach($qtd as $key => $value){
                
                if($value == 2){
                    $repeticoes ++;
                }else if($value > 2){
                    $repeticoes = 2;
                }
                
            }
            
            if($repeticoes > 1){
                echo "False";
            }else{
                $erro = 0;
                $c = 0;
                $px = 1;
                while($px <= (count($v)-1)){                    
                    if($v[$c] < $v[$px]){
                        $px ++;
                        $c ++;
                    }else{
                        $erro ++;
                        $c ++;
                        $px ++;
                    }
                }
                if($erro == 1){
                    echo "True";
                }else{
                    echo "False";
                }
            }
            
            
        }
        
    }
    
    
?>
