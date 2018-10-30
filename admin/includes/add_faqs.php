<?php
include('../database/db.php');

?>

<?php
if(isset($_POST['add_faq']))
{

    $faq_question=$_POST['faq_question'];
    $faq_answer=$_POST['faq_answer'];
    

    
    
    // $post_comment_count = 4;
    
    
    
    $query = "INSERT INTO airlines_reservation_system.faqs(faq_question, faq_answer)";
    $query .= "VALUES('{$faq_question}' ,'{$faq_answer}' ) ";
    
    $add_faq_query = mysqli_query($connection , $query);
     if(!$add_faq_query)
     {
        die("Error ".mysqli_error($connection));
     }
 

  echo "Faq added"." "."<a href='faqs.php'> View faqs</a>";
    
}


?>
   

   
   
   <form action="" method="post" enctype="multipart/form-data">
    
    
    
   <!--  <div class="form-group">
        <select name="faq_role" id="">
            <option value="subscriber">Select Option</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div> -->

    <div class="form-group">
        <label for="faq_question">Faq Question</label>
        <input type="text" class="form-control" name="faq_question" id="faq_question">
    </div>
    
    
    
    
<div class="form-group">
        <label for="faq_answer">Faq Answer</label>
        <input type="text" class="form-control" name="faq_answer" id="faq_answer">
    </div>

    
    
   
    
  <!--   <div class="form-group">
        <label for="content">Post Content</label>
        <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
        </textarea>
    </div>
     -->
    <div class="form-group">
        
        <input type="submit" class="btn btn-primary" name="add_faq" value="Add Faq">
    </div>
    
</form> 