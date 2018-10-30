<?php
include('../database/db.php');

?>

<?php 

include('../functions.php');
 ?>

<?php 
    if(isset($_GET['edit_faq']))
    {
        $the_faq_id = $_GET['edit_faq'];

        $query1 = execute_query("SELECT * FROM airlines_reservation_system.faqs WHERE faq_id='{$the_faq_id}' ");
        confirm($query1);
        while($row= fetch_array($query1))
        {
            $faq_question = $row['faq_question'];
            $faq_answer = $row['faq_answer'];
            
        }
    }



 ?>


<?php
if(isset($_POST['edit_faq']))
{

     $faq_question = $_POST['faq_question'];
    $faq_answer = $_POST['faq_answer'];
    
    
    
    
    
    
    
    $query = execute_query("UPDATE airlines_reservation_system.faqs SET faq_question='{$faq_question}' ,faq_answer='{$faq_answer}'  WHERE faq_id='{$the_faq_id}'  ");
    
    
    confirm($query);
    
  
  header('Location:faqs.php');
}


?>
   
   
   
   <form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="faq_question">Faq Question</label>
        <input type="text" class="form-control" name="faq_question" id="faq_question" value="<?php echo $faq_question; ?>">
    </div>
    
    
    
    
<div class="form-group">
        <label for="faq_answer">Faq Answer</label>
        <input type="text" class="form-control" name="faq_answer" id="faq_answer" value="<?php echo $faq_answer; ?>">
    </div>

    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="edit_faq" value="EDIT FAQ">
    </div>
    
</form> 