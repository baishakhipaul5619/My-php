<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
   <?php 
    
       $beautifull = 'Rajshahi'; 
           
//       $city = 'Dhaka or Rajshahi';
//       echo '<h1>Two most beautifull city is '.$city.'</h1>'; 
    ?>
    
    <?php if($beautifull == 'Rajshahi'): ?>
       <h1>Most beautifull city is Rajshahi</h1>
    <?php endif; ?> 
    
<!--    <h1>Two most beautifull city is <?php echo $city; ?></h1>-->
    
    <?php 
    
       $beautifull = 'Dhaka'; 
    ?>
    
    <?php if($beautifull == 'Rajshahi'): ?>
       <h1>Most beautifull city is Rajshahi</h1>
       <?php else : ?>
       <h1>We don't know</h1>
    <?php endif; ?>
    
    <?php 
      if($beautifull == 'Rajshahi'){
          echo '<h1>Most beautifull city is '.$beautifull.'</h1>';
      } else {
          echo '<h1>We don\'t know</h1>';
      }
    ?>
    
    <?php 
    
       $beautifull = 'Rajshahi'; 
       
    $cities = array('Dhaka', 'Rajshahi', 'khulna', 'Barishal');
    ?>
    
    <?php if($beautifull == 'Rajshahi'): ?>
       <h1>Most beautifull city is Rajshahi</h1>
       <?php else : ?>
       <h1>We don't know</h1>
    <?php endif; ?>
    
    <?php 
      if($beautifull == 'Rajshahi'){
          echo '<h1>Most beautifull city is '.$beautifull.'</h1>';
      } else {
          echo '<h1>We don\'t know</h1>';
      }
    
      echo '<h1>Second city is '.$cities[1].'</h1>';
    
          if($cities[3] == 'Barishal'){
              
          } else {
              
          } 
     ?>
<!--    for concatenation-->
    
       <?php 
    
           $beautifull = 'Dhaka'; 
           $beautifulltwo = 'Dhaka'; 
      ?>
    
    <?php if($beautifull == 'Rajshahi'): ?>
       <h1>Most beautifull city is Rajshahi</h1>
       <?php else : ?>
       <h1>We don't know</h1>
    <?php endif; ?>
    
    <?php 
      if($beautifull == '$beautifulltwo'){
          echo '<h1>Most beautifull city is '.$beautifull.'</h1>';
      } else {
          echo '<h1>We don\'t know</h1>';
      }
    ?>
    
    
    
    
    
    
    
    
</body>
</html>