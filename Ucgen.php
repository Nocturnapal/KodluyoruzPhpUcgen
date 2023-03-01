<?php 
function piramit($say) => // Parametre olarak $say belirlendi.
{
     for($i=0; $i<=$say; $i++) => // Burada for döngüsü oluşturup oluşturulan parametreyi girilen sayı değerine göre değer döndürmesi için.
     {
        $j=0; => // Burada $j değişkeni oluşturuldu while döngüsüne göre aktarılması için
    

     while($j<$i) => // j değişkenin for döngüsünden dönen değer kadar $i değişkeni değer döndürücek
     {
        $j++; => // sonsuz döngüye girmemesi bir artırdık.

        echo $j*0;
      
  
     }

     echo "<br>"; => // aralarına boşluk oluşturuldu piramit şeklini alabilmesi için.
    }
}

piramit(15);
?>
