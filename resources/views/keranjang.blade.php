<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <a href="" class="btn btn-outline-success">Cart<i class="bi bi-cart"></i></a>
        <a href="/" class="btn btn-outline-warning">Back</a>
        </div>

    <div class="container mt-5">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col"></th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Subtotal</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Mark</td>
            <td>cimol</td>
            <td>Rp 3000</td>
            <td>
                <input type="number" min="1" max="5">
            </td>
            <td>Rp 6000</td>
            
          </tr>
        </tbody>
      </table>

      <div class="container" style="margin-left: 68%;">
        <h5><b>Total Rp.6000 <br> </h5>
        <a herf="/cart" class="btn btn-warning mb-3 mt-4 text-white">Continue Shopping </a>
        <a herf="/" class="btn btn-success mb-3  mt-4"> <i class="bi bi-cash-stack"></i> Checkout</a>

    </div>
</body>
</html>