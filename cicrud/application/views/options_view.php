

<!DOCTYPE html>
<html lang="en">
   <head>
      <title>options</title>
      <style>
      </style>
   </head>
   <body>
      <h1>Create Read Update Delete</h1>
      <h2>Create</h2>
      <?php echo form_open('site/create');?>
      <p>
         <label for="title">Title:</label>
         <input type="text" name="title" id="title"/>
      </p>
      <p>
         <label for="title">Content:
         </label>
         <input type="text" name="content" id="content"/>
      </p>
      <p>
         <input type="submit" value="submit"/>
      </p>
      <?php echo form_close(); ?>
      <hr/>
      <h2>Read</h2>
      <?php if (isset($records)) : foreach($records as $row) : ?>
      <h3>
         <?php
            echo $row->id."&nbsp";
            echo $row->title."&nbsp";
            echo anchor ("site/delete/$row->id", "delete row");
            ?>
      </h3>
      <div><?php echo $row->content;
         ?> </div>
      <?php endforeach;
         else :
             ?>
      <h2>No records returned</h2>
      <?php endif;
         ?>
      <hr/>
      <h2>Update</h2>
      <?php echo form_open('site/update');
         ?>
      <p>
         <label for="title">ID:</label>
         <input type="text" name="id" id="id"/>
      </p>
      <p>
         <label for="title">Title:
         </label>
         <input type="text" name="title" id="title"/>
      </p>
      <p>
         <label for="title">Content:
         </label>
         <input type="text" name="content" id="content"/>
      </p>
      <p>
         <input type="submit" value="submit"/>
      </p>
      <?php echo form_close();
         ?>
      <hr/>
      <h2>Delete</h2>
      <p>To sample the delete method, simply click on one of the delete row links next to the titles. A delete query wll automatically run</p>
   </body>
</html>

