<div id="class">
  <div id="bodyright">
    <h3>View all categories</h3>
    <div id="add">
      <details>
        <table>
          <tr>
            <th>Srno</th>
            <th>Class</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          <?php echo viewclass(); ?>
        </table>
        <summary>Add Class</summary>
        <form enctype="multipart/form-data" method="post">
              <input type="text" name="class_name" placeholder="Enter Class number" >
              <centre>
                 <button  name="add_class">Add Class</button>
              </centre>
        </form>
      </details>
    </div>
  </div>
</div>
<?php echo add_class(); ?>
