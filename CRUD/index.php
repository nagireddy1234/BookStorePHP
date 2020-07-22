
<?php 
 require_once("./php/component.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Store</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <main>
    <div class="container text-center">
      <h1 class="py-4 bg-dark text-light rounded"><i class='fas fa-swatchbook'></i>Book Store</h1>

      <div class="d-flex justify-content-center">
        <form action="" method="post" class="w-50">
        <div class="input-group py-2">
        <div class="input-group-prepend">
          <span class="input-group-text bg-warning" id="basic-addon1"><i class='fas fa-swatchbook'></i></span>
         </div>
          <input type="text" class="form-control" autocomplete="off" placeholder="ID" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="pt-2">
          <?php inputElement(icon:"<i class='fas fa-swatchbook'></i>", placeholder:"Book Name", name:"book_name", value:"");
          ?>

        </div>
        </form>
      </div>

    </div>
  </main>






  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>


</body>

</html>