<!DOCTYPE html> 
<html> 
    <head> 
        <title><?php echo "Огаё"; ?></title> 
    </head> 
    <body> 
        <?php 
            $price = 1000;
            $vip_price = $price + ($price * 30 / 100); #цена + 30% = вип цена

            echo "Цена билета: $price<br />"; # 1000
            echo "Цена вип билета: $vip_price<br />"; # 1000 + 30%

            define ('START_TIME', new DateTime ()); 
            echo START_TIME->format('d-m-Y H:i:s <br />');
        
        ?>  
    </body> 
</html>